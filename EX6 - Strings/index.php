<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .resaltar{
            color: #F00;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php

    $nombre = "Juan";
    echo "Hola $nombre"; //evitamos usar concatenar (ya visto)

    //echo "<p class="resaltar">Esto es un ejemplo de frase</p>"; // NO sirve, no puede haber comillas dobles dentro de comillas dobles
    echo "<p class='resaltar'>Esto es un ejemplo de frase</p>"; //asi si serviria. cambiando las dobles por simples
    echo '<p class="resaltar">Esto es un ejemplo de frase</p>'; //tambien funciona
    echo "<p class=\"resaltar\">Esto es un ejemplo de frase</p>"; //tambien

    //comparar strings. se usa strcmp y strcasecmp
    //la primera compara mayuscula y minusculas. la segunda lo ignora
    //devuelve 1 o 0. 1 si son diferentes. 0 si son iguales.

    $variable1 = "Casa";
    $variable2 = "CASA";
    $resultado = strcmp($variable1, $variable2); //devuelve 1 si no son iguales y 0 si son iguales
    $resultado2 = strcasecmp($variable1, $variable2); // sin comparar mayusuculas
    echo "El resultado es " . $resultado . "<br>";
    echo "El resultado sin comparacion de mayusc / minusc es " . $resultado2 . "<br>";

    //iniciacion al if. tambien existe la negacion con !
    if($resultado){
        echo "No Coindiden";
    }else{
        echo "Coinciden";
    }
?>
</body>
</html>