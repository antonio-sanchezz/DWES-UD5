<?php

global $conn;

try {
    $conn = new PDO("mysql:host=localhost;dbname=auth", "developer", "developer");
} catch (PDOException $e) {
    echo "Connection fallida: " . $e->getMessage();
}

function insertaElemento($username, $password, $cuentaBancaria) {

    try {

    $sqlInsert = "INSERT INTO users (username, password, cuentaBancaria) VALUES (?, ?, ?)";
    $stmt = $GLOBALS['conn']->prepare($sqlInsert);
    $stmt->bindParam(1, $username);
    $stmt->bindParam(2, $password);
    $stmt->bindParam(3, $cuentaBancaria);

    $result = $stmt->execute();

    } catch (PDOException $e) {
        
    }

    $conn = null;

    return $result;

}

?>