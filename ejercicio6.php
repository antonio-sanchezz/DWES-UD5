<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    session_start();

    if (isset($_SESSION['perfil'])) {
        if ($_SESSION['perfil'] == "usuario") {
            header("Location: usuario.php");
        } else if ($_SESSION['perfil'] == "admin") {
            header("Location: admin.php");
        }
    }

    require_once("ejercicio6BBDD.php");

    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (passwordVerify($_POST['username'], $_POST['password'])) {
            $error = "<p style='color:green'>Sesión iniciada correctamente.</p>";
            $_SESSION['perfil'] = getUser($_POST['username'])['perfil'];
            
            // Redireccion dependiendo del perfil del usuario logueado.
            if ($_SESSION['perfil'] == "admin") {
                header("Location: admin.php");
            } else if (isset($_SESSION['perfil']) == "usuario") {
                header("Location: usuario.php");
            }
        } else {
            $error = "<p style='color:red'>Contraseña incorrecta.</p>";
        }
        
    }


    ?>
    <h2>Iniciar Sesión</h2>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
    <label for="username">Usuario:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Contraseña:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Submit">
    </form>
    <br>
    <div><?php echo $error;?></div>
</body>
</html>