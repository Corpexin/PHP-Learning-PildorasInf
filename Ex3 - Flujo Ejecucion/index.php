<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    //primero carga el contenido del body html
    //despues el php hacia abajo
    dameDatos();
    echo "este es el primer mensaje <br>";
    echo "este es el segundo mensaje <br>";

    //funciones. no se ejecuta hasta que no se llama
    function dameDatos(){
        echo "Este es el mensaje del interior de la funcion<br>";
    }

    dameDatos(); //se puede llamar despues o antes de crearla

    //include, incluye a esta altura del documento un archivo externo
    include ("hola.php");
    dameDatos2();

    //require es como include, pero para el flujo de ejecucion si el archivo no existe.
    //con el require el archivo es requerido por fuerza, el include es mas permisivo
    require ("hola.php");

?>
</body>
</html>