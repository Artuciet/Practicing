<?php
///Aplicando bloque de codigo PHP para generar un HTML5 con mis datos.
$pageTitle = "Artuciet"; // Titulo de la pagina (Cadena = string)
$montoMinimo = 700; // Al mes (Entero = int)
$porHora = 4.99; // Por hora (Flotante = float)
$estoyDisponible = false; // Estoy disponible para trabajar (Booleano = bool)
$status = $estoyDisponible ? "Estoy disponible para trabajar." : "No estoy disponible para trabajar en este momento."; // Si estoy disponible, entonces muestro el mensaje de que estoy disponible, sino muestro el mensaje de que no estoy disponible.
$salary = $montoMinimo >= 700 ? $montoMinimo : "El salario es menor a 700. No puedo aceptar su oferta."; // Si el monto es mayor o igual a 700, entonces muestro que si puedo trabajar para el, sino muestro el mensaje de que el monto minimo es menor a 700 y no puedo trabajar..
?>

<!DOCTYPE HTML5>
<!-- Generamos un codigo random de HTML5 y se modifica su contenido para hacerlo a mi nombre y mis datos... -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artuciet</title>
</head>
<body>
    <h1>Hola, mi nombre es Artuciet</h1>
    <p>Este es un ejemplo de una página HTML5 y PHP básica.</p>
    <p>Mis datos son:</p>
    <ul>
        <li>Nombre: Artuciet</li>
        <li>Edad: 25 años</li>
        <li>Ciudad: Maracaibo</li>
    </ul>
    <!-- Datos ramdom -->
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quisquam a nobis totam corrupti perspiciatis, soluta rem consectetur. Possimus optio eligendi dolorum quas ipsam facilis inventore dolore rerum vero odit.</p>
    <p>Actualmente: <?= $status ?></p>
    <?php
    /*
    // Condicionales:
    if ($montoMinimo > 700 ) {
        echo "<p>Mi monto mínimo al mes es de: $montoMinimo, Agradecere mas que eso con mucho gusto.</p>";
    } else {
        echo "<p>Mi monto mínimo al mes es menor a 700. No puedo aceptar tu pferta, aun asi gracias por pensar en mi para ayudarte.</p>";
    }
    */
    ?>
    
    <p>¡Gracias por visitar mi página!</p>
</body>
</html>