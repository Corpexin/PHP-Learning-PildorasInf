<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php


function incrementarVariable(){
    $contador=0;
    $contador++;
    echo $contador . "<br>";
}

//imprime 3 veces 1
incrementarVariable();
incrementarVariable();
incrementarVariable();


//si lo que queremos es incrementar la variable
//las variables internas de la funcion se destruyen al salir de la funcion
//para ello usamos variables estaticas
//esto se consigue poniendo static antes de la variable.
echo "<br><br><br>";

function incrementarVariable2(){
    static $contador=0;
    $contador++;
    echo $contador . "<br>";
}

incrementarVariable2();
incrementarVariable2();
incrementarVariable2();

?>
</body>
</html>
