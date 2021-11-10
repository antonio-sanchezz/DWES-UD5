<?php

global $conn;

try {
    $conn = new PDO("mysql:host=localhost;dbname=auth", "developer", "developer");
} catch (PDOException $e) {
    echo "Connection fallida: " . $e->getMessage();
}

// Obtenemos todos los datos del usuario solicitado.
function getUser($username) {
    try {

        $sqlQuery = "SELECT * FROM users WHERE username = ?";
        $stmt = $GLOBALS['conn']->prepare($sqlQuery);
        $stmt->bindParam(1, $username);

        $stmt->execute();

        $user = $stmt->fetch();

    } catch (PDOException $e) {
        $e->getMessage();
    }

    $stmt = null;

    return $user;
}

/*
* Verificamos que la contraseña introducida es la misma que la de la base de datos.
*/
function passwordVerify($username, $password) {
    // Obtenemos el usuario solicitado.
    $user = getUser($username);
    $result = false;

    // Comprobamos si hemos conseguido obtener un usuario con los datos dados.
    if ($user) {
        // Y ya realizamos la verificacion de la contraseña.
        $result = password_verify($password, $user['password']);
    }


    return $result;
}
