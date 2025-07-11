<?php

// Conexión a la base de datos
$host = 'localhost';//Nombre del servidor o servidor que estes usando, en este caso es localhost porque es el servidor local de tu computadora.
// Si estas usando un servidor remoto, debes poner la IP o el nombre del servidor remoto.

$db = 'registro_usuarios';// Nombre de la base de datos, en este caso es registro_usuarios porque es el nombre de la base de datos que se creo en el servidor MySQL.
// Nombre de la base de datos DENTRO DEL PHPMYADMIN o donde sea que se encuentre la consulta del servidor.

$user = 'root';// Usuario de la base de datos, en este caso es root porque es el usuario por defecto de MySQL en la mayoria de los casos.
// Si estas usando otro usuario, debes poner el nombre de usuario que estes usando.

$pass = '';

$conexion = new mysqli($host,$user,$pass,$db);

// Verificar la conexión
if ($conexion->connect_errno) {
    die("Conexión fallida: " . $conexion->connect_error);
}else {
    // Consulta a la base de datos
    $result = $conexion->query("SELECT * FROM registros");
    
    if (!$result) {
        die("Error en la consulta: " . $conexion->error);
    }
}

// Consulta a la base de datos  
// query("SELECT * FROM registros") devuelve un objeto de resultado que contiene todas las filas de la tabla "registros"
//Recuerda que para hacer consultas usamos el query() de la clase mysqli, que es la que usamos para conectarnos a la base de datos.
//Ya dentro del query podermos escribir dentro de las comillas simples o dobles que estan dentro del parentesis en SQL con normalidad.

?>

<!DOCTYPE html>
<html>
<head>
    <title>Consulta a la Base de Datos</title>
</head>
<body>
    <h1>Resultados de la Consulta</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
        </tr>
        <?php foreach ($result as $row): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['email']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
