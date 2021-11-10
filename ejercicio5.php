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

    require_once("ejercicio5BBDD.php");

    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (insertaElemento($_POST['username'], password_hash($_POST['password'], PASSWORD_DEFAULT), $_POST['cuentaBancaria'])) {
            $error = "<p style='color:green'>Usuario registrado correctamente.</p>";
        } else {
            $error = "<p style='color:red'>El usuario ya existe.</p>";
        }
        
    }


    ?>
    <h2>Registro</h2>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
    <label for="username">Usuario:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Contraseña:</label><br>
    <input type="password" id="password" name="password"><br>
    <label for="cuentaBancaria">Cuenta bancaria:</label><br>
    <input type="text" id="cuentaBancaria" name="cuentaBancaria"><br><br>
    <input type="submit" value="Submit">
    </form>
    <br>
    <div><?php echo $error;?></div>
</body>
</html>