<?php

global $conn;

try {
    $conn = new PDO("mysql:host=localhost;dbname=auth", "developer", "developer");
} catch (PDOException $e) {
    echo "Connection fallida: " . $e->getMessage();
}

function getUser($username) {
    try {

        $sqlQuery = "SELECT * FROM users WHERE username = ?";
        $stmt = $GLOBALS['conn']->prepare($sqlQuery);
        $stmt->bindParam(1, $username);
    
        $stmt->execute();
    
        $user = $stmt->fetch();

    } catch (PDOException $e) {
    }

    $conn = null;

    return $user;
}

function passwordVerify($username, $password) {

    $user = getUser($username);

    $result = password_verify($password, $user['password']);

    return $result;
}

//passwordVerify('admin', password_hash('developer', PASSWORD_DEFAULT));

?>
