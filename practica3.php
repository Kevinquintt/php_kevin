<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edad</title>
</head>
<body>
<?php
$edad = 20;

#condicional multiple que imprime un texto segun la edad
#mejora el codigo para que los rangos sean mayor: 18 a 80 y menor 11 a 17
$edad=18;
if($edad >= 18 && $edad < 60){
    echo "Mayor";
}else if($edad < 18 && $edad >14){
    echo "Menor";
}
?>
</body>
</html>