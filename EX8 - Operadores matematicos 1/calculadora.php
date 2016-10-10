<style>

    .resultado{
        color: #F00;
        font-weight: bold;
        font-size: 32px;
    }

</style>

<?php
//cuando pulse enviar se envie al servidor en php y calcule

if(isset($_POST["button"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["operacion"];
    calcular($op);
}


function calcular($op){
    global $num1;//para que lo reconozca las creamos globales, tb serviria por parametro
    global $num2;
    echo "<p class='resultado'>El resultado es ";
    if(!strcmp("Suma", $op)){
        echo  ($num1 + $num2)."</p>";
    }else if(!strcmp("Resta", $op)){
        echo ($num1 - $num2)."</p>";
    }else if(!strcmp("Multiplicación", $op)){
        echo ($num1 * $num2)."</p>";
    }else if(!strcmp("División", $op)){
        echo  ($num1 / $num2)."</p>";
    }else if(!strcmp("Módulo", $op)){
        echo  ($num1 % $num2)."</p>";
    }else if(!strcmp("Incremento", $op)){
        echo  ($num1+1)."</p>"; //CUIDADO! num1+1 != num++ , no se la razon la verdad...
    }else if(!strcmp("Decremento", $op)){
        echo  ($num1-1)."</p>";
    }
}
