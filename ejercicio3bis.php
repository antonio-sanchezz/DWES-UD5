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

    echo "Nombre: " . $_SESSION['Nombre'] . "<br>";
    echo "Edad: " . $_SESSION['Edad'] . "<br>";

    echo "El archivo de session contiene lo siguiente: <br>";

    echo 'Nombre|s:24:"Antonio Sanchez Espinosa";Edad|i:23;<br>';

    unset($_SESSION['Nombre']);

    echo "Se ha eliminado el campo nombre del archivo.<br>";

    echo 'Edad|i:23;<br>';

    session_unset();

    echo "Se eliminan todas las variables del archivo de sesiones.<br>";

    session_destroy();

    echo "Se elimina el archivo de la session de la carpeta.";

    ?>
</body>
</html>