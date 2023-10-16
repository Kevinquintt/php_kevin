<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$productos= array(
    array("Heladera",2500000, 18),
    array("Microondas",1500000,9),
    array("Cocina",590000,21),
    array("Licuadora",450000,15),
    array("Mixer",260000,5),
    array("Ventilador",150000,15)
);
    echo "<div><h2>Todos Los Valores</h2></div>";
    foreach ($productos as $producto) {
         $nombre= $producto[0];
         $valor= $producto[1];
         $stock= $producto[2];
            echo '- Producto: '.$nombre.'- Precio: '. $valor. '- Cantidad: '. $stock . '<br>';
        }
    


    echo "<div><h2>Valores menores a 1000000</h2></div>";
    foreach ($productos as $producto) {
        $nombre= $producto[0];
         $valor= $producto[1];
         $stock= $producto[2];
        if ($valor < 1000000) {
            echo '- Producto: '.$nombre.'- Precio: '. $valor. '- Cantidad: '. $stock . '<br>';
        }
    }


    ?>
</body>
</html>