<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

/**
 * Operadores de comparacion
 *
 * $var1==$var2 - igual que - verdadero si las dos variables son iguales
 * $var1===$var2 - indentica que - verdadero si las dos variables son iguales y del mismo tipo (entero, string)
 * $var1!=$var2 - diferente que
 * $var1<>$var2 - diferente que y comprueba el tipo
 * < > <= >= - operadores de toda la vida hermano
 */

$variable1 = 8;
$variable2 = "8";
$variable3 = "Juan";

//son iguales porque no comprueba el tipo
if($variable1 == $variable2){
    echo "Son iguales";
}else{
    echo "No son iguales";
}
 echo "<br>";

//no son iguales porque no comprueba el tipo
if($variable1 === $variable2){
    echo "Son iguales";
}else{
    echo "No son iguales";
}


?>
</body>
</html>