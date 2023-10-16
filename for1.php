<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>tabla de multiplicar</title>
</head>
<body>
<?php
for($x=2; $x <=10; $x++){
    echo "<h2>Tabla del $x</h2>";
    for($y=0; $y <=10; $y++){
     echo" $x x $y =".($x*$y)."<div>";

    }
    }
?>
</body>
</html>