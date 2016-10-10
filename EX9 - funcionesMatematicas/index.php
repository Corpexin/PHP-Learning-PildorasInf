<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
//Algunas funciones matematicas y casting
//El casting se suele hacer automaticamente en php
$num1 = rand(10, 50); //random entre 10 y 50. Aleatorio normal sin parametros
echo "El numero es : " . $num1;

$num2 = pow(5, 3); //potencia
echo "El numero es : ". $num2;

$num3 = 5.25;
echo "El numero es : " . round($num3); //redondeo

$num4 = "4";
$result = (int)$num4; //casting
?>
</body>
</html>