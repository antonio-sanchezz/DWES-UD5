<?php

session_start();

if (isset($_SESSION['perfil'])) {
    session_unset();
    session_destroy();
    header("Location: ejercicio7.php");
}



?>