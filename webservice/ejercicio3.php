<?php
//ej: localhost?webservices?ejercicio3.php?peso=75&estatura=183
//definimos con header el tipo del documento(JSON)
header ("Content-Type:application/json");

$peso = $_GET['peso'];
$estatura = $_GET['estatura'];

//validamos variables
if(!empty($peso) && !empty($estatura))
{
    //convertimos cm en m 
    $estatura = $estatura / 100;

    //formula peso(kg)/talla(m2)
    $imc = $peso / ($estatura * $estatura);

    
    //redondeamos a dos decimales
    $imc = round($imc, 2);

    //entregamos respuesta
    respuesta(200, "Tu IMC es de $imc", $imc);
}
else
{
    //entregamos respuesta
    respuesta(200,"datos no validos", null);
}

//funcion que crea la respuesta, con estado, mensaje de estados y datos
function respuesta($estado, $mensaje_estado, $datos )
{
    //cabecera respuesta
    header("HTTP/1.1 $estado $mensaje_estado");

    //rellenamos array con estado, mensaje y datos
    $respuesta["estado"] = $estado;
    $respuesta["mensaje_estado"] = $mensaje_estado;
    $respuesta["datos"] = $datos;

    //codificamos el json
    $respuesta_json = json_encode($respuesta);

    //pintamos el contenido del json
    echo $respuesta_json;
}
?>