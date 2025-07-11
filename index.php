<?php
//Realizando consultas en PHP es en el siguiente formato.
/*Generalmente se debe definir primero las variables y luego usarlas, sino implementarlas de golpe entre las comillas simples ''.....

EJ:
$server_o_host = 'localhost'; // Esto selecciona el local como base de datos.
$user = 'root'; // selecciona la raiz como usuario.
$pass = ''; // Selecciona nada como contraseña, en este casso porque no tengo contraseña en mi BD.
$db = 'liberia_db'; //Esgto toms el nombre de la base de datos que estamos usando, si trabajamos en una base de datos de bodega pues seria 'bodega_db' o registros de usuarios seria 'registro_usuarios_db' y asi, este seria como el nombre de la tabla donde haremos la consulta.
    
    luego aplicamos la conexion:
    $consulta = new mysqli($server_o_host , $user , $pass , $db); // Aca intentamos hacer conexion con la DB para hacer una consulta pero debemos aplicarle logica booleana.
    
    // Verificar la conexión
    if ($conexion->connect_errno) { //Si la conexion es erronea
        die("Conexión fallida: " . $conexion->connect_error);//arrojamos un texto con el error al lado.
    }else {// Sino aplicamos:
        // Consulta a la base de datos
        $result = $conexion->query("SELECT * FROM registros"); // Aca estamos diciendo que busque ese registro en la DB.

        if (!$result) { // Si el regisatro es errado:
            die("Error en la consulta: " . $conexion->error); // Arrojamos error de conexion.
        }
    }


Otra forma seria:
*/

$server = 'localhost';
$db = 'libreria_db';
$pass = '';
$user = 'root';
// Probemos la conexion:
$conexion = new mysqli($server,$user,$pass,$db);
//En caso de error:
if ($conexion->errno){
    die("Error en la consulta: ".$conexion->error);
}else {
    $result= $conexion->query("SELECT * FROM editoriales");
}

?>

<!--Generando codigo generico de HTML5 para observar los datos del PHP -->
<!DOCTYPE html>
<html>
<head>
    <!--Titulo -->
    <title>Consulta a la Base de Datos</title>
</head>
<body>
<!-- Enunciado de la tabla -->
    <h1>Resultados de la Consulta</h1>
    <table border="1"><!-- Tabla de 1 de tamaño de ancho -->
        <!-- Abreviacion de Table Row, es decir, que la tabla vaya en filas -->
        <tr>
            <!-- Abreviacion de Table header, con la finalidad de darle nombre a cada fila del cuadro. -->
            <th>ID</th>
            <th>Nombre</th>
            <th>Pais</th>
            <th>Año de Fundacion</th>
        </tr>
<!-- Creacion de logica por medio de PHP para mostar en pantalla DENTRO DE UN CUADRO DE DATO cada dato segun el nombre impuesto en la DB. -->
        <?php foreach ($result as $total): ?>
        <tr>
            <td><?php echo $total['id_editorial']; ?></td>
            <td><?php echo $total['nombre']; ?></td>
            <td><?php echo $total['pais'] ?></td>
            <td><?php echo $total['fundacion_año']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>