<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

    print "hola "; //comentario de una linea
    /**
     * comentario de 2 lineas
     */

    $nombre = "Juan"; //no es lo mismo con comilla doble que simple
    $nombre = "amparo";

    //lenguaje flexible.


    $edad = 18;

    print "El nombre de usuario es " . $nombre; //para concatenar se usa el .
    print "El nombre de usuario es  $nombre"; // se puede evitar concatenar poniendo la variable dentro del string
    print 'El nombre de usuario es $nombre'; //sin embargo si se usa comillas simples no lo reconoce

    // $nombre = juan; //no poner comillas lo toma como una constante, dando error

    //echo tambien imprime por pantalla
    echo $nombre . " hola edad:" . $edad;

    //la diferencia principal entre echo y print es que echo permite lo siguiente
    echo $nombre, $edad;
    //print $nombre, $edad; //da error
    //tambien que print es una funcion y echo es una expresion. echo consume menos tbn
?>
</body>
</html>