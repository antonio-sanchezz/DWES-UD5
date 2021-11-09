<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Funcion</th>
            <th>Valores</th>
        </tr>
        <tr>
            <td>session.use_cookies</td>
            <td>Especifica si el módulo usará cookies para almacenar el id de sesión en la parte del cliente</td>
            <td>Por defecto es 1 (habilitado)(bool), 0 para deshabilitar</td>
        </tr>
        <tr>
            <td>session.use_only_cookies</td>
            <td>Especifica si el módulo sólo usará cookies para almacenar el id de sesión en la parte del cliente. Habilitar este ajuste previene ataques que implican pasar el id de sesión en la URL.</td>
            <td>Por defecto es 1 (habilitado)(bool), 0 para deshabilitar</td>
        </tr>
        <tr>
            <td>session.save_handler</td>
            <td>Define el nombre del gestor que se usa para almacenar y recuperar información asociada con una sesión</td>
            <td>Por defecto es files, podemos cambiarlo por otro nombre de gestor de archivos</td>
        </tr>
        <tr>
            <td>session.name</td>
            <td>Especifica el nombre de la sesión que se usa como nombre de cookie. Sólo debería contener caracteres alfanuméricos</td>
            <td>Por defecto es PHPSESSID, el identificador de sesión es una cadena aleatoria de 26 caracteres.</td>
        </tr>
        <tr>
            <td>session.auto_start</td>
            <td>Especifica si el módulo de sesión inicia una sesión automáticamente cuando arranque una petición.</td>
            <td>Por defecto es 0 (deshabilitado)(bool), 1 para habilitar</td>
        </tr>
        <tr>
            <td>session.cookie_lifetime</td>
            <td>Especifica el tiempo de vida en segundos de la cookie que es enviada al navegador</td>
            <td>El valor 0 significa "hasta que el navegador se cierre". Por defecto es 0. Es un número entero, será el número de segundos</td>
        </tr>
        <tr>
            <td>session.gc_maxlifetime</td>
            <td>Especifica el número de segundos después de lo cual la información sea vista como 'basura' y potencialmente limpiada</td>
            <td>Un número entero, que será el número de segundos</td>
        </tr>
    </table>
</body>
</html>