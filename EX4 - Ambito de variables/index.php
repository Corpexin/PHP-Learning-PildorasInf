<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

//Existen 3 tipos de variables segun su ambito:
/**
 * -Local: Declarada dentro de funcion. Solo visible dentro de la funcion
 * -Global: Declarada en cualquier lugar del codigo PHP. Visible en cualquier lugar del codigo
 * -Super Global: Declarada como Array. Visible y accesible desde fuera del PHP, incluso desde otro archivo
 * se usa para mandar informacion de un formulario por ejemplo.
 */


    $nombre = "Juan";



    function dameNombre(){
        global $nombre;//se cambia a global para poder acceder desde una funcion
        //no se puede poner el global fuera de la funcion para asegurarse de que no se solapan las variables de algun codigo añadido externamente con el propio

        $nombre = "El nombre es " . $nombre; //no imprime maria porque en php hay 2 ambito muy diferenciados, el de la funcion y el global.
        //son tan diferentes que se toman casi como 2 archivos diferentes. SON 2 VARIABLES DIFERENTES.
    }

    dameNombre();
    echo $nombre;


?>
</body>
</html>