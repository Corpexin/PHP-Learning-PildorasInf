<style>
    h1{
        text-align:center;
    }

    table{
        background-color:#FFC;
        padding:5px;
        border:#666 5px solid;
    }

    .no_validado{
        font-size:18px;
        color:#F00;
        font-weight:bold;
    }

    .validado{
        font-size:18px;
        color:#0C3;
        font-weight:bold;
    }


</style>
<?php
//isset funcion predefinida que comprueba si el boton se ha pulsado o no de enviar
//post = variable superglobal. Array
if(isset($_POST["enviando"])){
    $usuario = $_POST["nombre_usuario"];
    $edad = $_POST["edad_usuario"];
    //con esto almaceno lo que el usuario haya escrito en los textbox si el usuario le da a enviar

    if($usuario=="Juan" && $edad>=18){
        echo "<p class='validado'>Puedes entrar</p>";
    }else{
        echo "<p class='no_validado'>No puedes entrar</p>";
    }
}

?>