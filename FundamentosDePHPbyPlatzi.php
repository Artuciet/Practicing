<?php
/*Las variables en PHP estan definidas por el signo de pesos ($) y pueden ser de diferentes tipos:
- String (Cadena de texto)
- Integer (Entero)
- Float (Flotante)
- Boolean (Booleano)
*/
$pageTitle = "Artuciet"; // Titulo de la pagina (Cadena = string).
$montoMinimo = 700; // Al mes (Entero = int).
$porHora = 4.99; // Por hora (Flotante = float).
$estoyDisponible = false; // Estoy disponible para trabajar (Booleano = bool).


/*
Condicionales en PHP: 

Aca sucede algo curioso, al usar operador ternario puedes simplificar una variable o logica booleana, como por ejemplo:


$estoyDisponible = ($montoMinimo > 700) ? true : false; // Si el monto minimo es mayor a 700, entonces estoy disponible, sino no. que equivale <a href="http://
"
if ($estoyDisponible) {
        echo "<p>Estoy disponible para trabajar.</p>";
    } else {
        echo "<p>No estoy disponible para trabajar en este momento.</p>";
    }
 "       
    

$montoMinimo = ($porHora * 160); // Si el monto minimo es mayor a 700, entonces estoy disponible, sino no. Que equivale a:
"
if ($montoMinimo > 700) {
        echo "<p>Mi monto mínimo al mes es de: $montoMinimo, Agradecere mas que eso con mucho gusto.</p>";
    } else {
        echo "<p>Mi monto mínimo al mes es menor a 700. No puedo aceptar tu pferta, aun asi gracias por pensar en mi para ayudarte.</p>";
    }

*/

$status = $estoyDisponible ? "Estoy disponible para trabajar." : "No estoy disponible para trabajar en este momento."; // Si estoy disponible, entonces muestro el mensaje de que estoy disponible, sino muestro el mensaje de que no estoy disponible.
// De esta forma se puede llamar a la variable "$status" en el HTML5 y se mostrara el mensaje correspondiente segun la condicion que se haya cumplido. y asi reducir las lineas de codigo.
// Esto solo sirve con logica booleana, si se quiere hacer una logica mas compleja, se debe usar un if-else normal o un switch-case.


/*
Etiquetas:

En este caso, las etiquetas son las que se usan en HTML5 pero las definiremos como "$tags_N" aqui en PHP para luego llamarlas por esta variable. Como se observara a continuacion:

Esto es una mala practica, es repetitivo y no es necesario, pero se muestra como ejemplo de como se puede hacer.

$tag_01 = "Ingeniero en Electronica mencion Automatizacion y control.";
$tag_02 = "Desarrollador Android Nativo.";
$tag_03 = "Integrador Dahua.";
$tag_04 = "Desarrollador Web Full Stack.";
$tag_05 = "Desarrollador de Software en General.";
$tag_06 = "Ingeniero de Prompt.";

Ya luego son llamadas por medio de:

 <p>
        <strong>Soy:</strong>
        <ul>
            <li><?= $tag_01 ?></li>
            <li><?= $tag_02 ?></li>
            <li><?= $tag_03 ?></li>
            <li><?= $tag_04 ?></li>
            <li><?= $tag_05 ?></li>
            <li><?= $tag_06 ?></li>
        </ul>
    </p>

*/

// Lo ideal seria que trabajaran en plural, es decir:
$tags = [
    "Ingeniero en Electronica mencion Automatizacion y control.", 
    "Desarrollador Android Nativo.", 
    "Integrador Dahua.", 
    "Desarrollador Web Full Stack.", 
    "Desarrollador de Software en General.", 
    "Ingeniero de Prompt."
];

// Aplicando arreglos asosciativos: CLASE 5 de platzi
// Aca se define un arreglo asociativo que contiene los datos de una persona, en este caso, mis datos personales.
$Experiencia = [
    'Cargo' => 'CTO',
    'Empresa' => 'GoMed C.A.',
    'Años de Experiencia' => 2,
    'Lenguajes' => ['Kotlin', 'Compose', 'Java'],
    'Proyectos' => [
        'Proyecto 1' => 'GymApp',
        'Proyecto 2' => 'Gymmeter',
        'Proyecto 3' => 'ReconFace',
        'Proyecto 4' => 'GoMed Official Site',
    ],
    'Reseña' => 'Soy un ingeniero en electronica con experiencia en desarrollo de software y aplicaciones moviles, me gusta aprender y mejorar mis habilidades constantemente.'
]

//Aca se mostrara en adelante el codigo HTML5 con los datos que se han definido en las variables de arriba con la finalidad de mostrar un ejemplo de una pagina web con PHP.
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

    // Condicionales:
    if ($montoMinimo > 700) {
        echo "<p>Mi monto mínimo al mes es de: $montoMinimo, Agradecere mas que eso con mucho gusto.</p>";
    } else {
        echo "<p>Mi monto mínimo al mes es menor a 700. No puedo aceptar tu oferta, aun asi gracias por pensar en mi para ayudarte.</p>";
    }

    if ($estoyDisponible) {
        echo "<p>Estoy disponible para trabajar.</p>";
    } else {
        echo "<p>No estoy disponible para trabajar en este momento.</p>";
    }

    ?>

    <!-- Esto es una mala practica, es repetitivo y no es necesario, pero se deja como ejemplo de como se puede hacer. -->
        <p>
            <strong>Soy:</strong>
            <!-- Esto es una mala practica, es repetitivo y no es necesario 
            <ul>
                <li><?= $tags[0] ?></li>
                <li><?= $tags[1] ?></li>
                <li><?= $tags[2] ?></li>
                <li><?= $tags[3] ?></li>
                <li><?= $tags[4] ?></li>
                <li><?= $tags[5] ?></li>
            </ul> 
            
            Esto tambien es una mala practica, pues se deberia usar el foreach para recorrer el array de tags y mostrarlos, pero se deja como ejemplo de como se puede hacer.
            <ul>
                <li><?= $tag_01 ?></li>
                <li><?= $tag_02 ?></li>
                <li><?= $tag_03 ?></li>
                <li><?= $tag_04 ?></li>
                <li><?= $tag_05 ?></li>
                <li><?= $tag_06 ?></li>
            </ul>
            -->
            <ul>
                <!-- Usando foreach para recorrer el array de tags y mostrarlos -->
                <?php foreach ($tags as $tag): ?>
                    <li><?= $tag ?></li>
                <?php endforeach; ?>
            </ul>
        </p>
    
    <p>¡Gracias por visitar mi página!</p>
</body>
</html>