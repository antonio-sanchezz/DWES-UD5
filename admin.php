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
        if ($_SESSION['perfil'] == "admin") {
            echo "Eres el jefe supremo";
        } else if ($_SESSION['perfil'] == "usuario") {
            header("Location: usuario.php");
        }
    } else {
        header("Location: ejercicio6.php");
    }


    ?>
    <a href="log_out.php">Cerrar sesión</a>
</body>
</html>