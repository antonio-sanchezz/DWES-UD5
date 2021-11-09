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

    // Iniciamos la sesion.
    session_start();

    // Mostramos el id de la sesion.
    echo "Sesion id: " . session_id() . "<br>";
    echo "Obtenemos el mismo id ya que se nos ha guardado la informacion del id en una COOKIE.";
    echo "Los ficheros de sesion se encuentran en la carpeta /var/lib/php/sessions";
    ?>
</body>
</html>