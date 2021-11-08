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

    $_SESSION["nombre"] = "Antonio Sanchez Espinosa";
    $_SESSION["edad"] = 23;

    $nombre = $_SESSION["nombre"];
    $edad = $_SESSION["edad"];

    echo "Nombre: $nombre Edad: $edad";

    // Borramos las sesiones.
    $_SESSION["nombre"] = "";
    $_SESSION["edad"] = "";

    session_destroy();

    ?>
</body>
</html>