
    <?php
    if ($_REQUEST['operacion'] == "suma") {
      $suma = $_REQUEST[ 'valor1'] + $_REQUEST[ 'valor2'];
      echo "La suma es:".$suma;
    } else {
        if ($_REQUEST['operacion'] == "resta") {
            $resta = $_REQUEST[ 'valor1'] - $_REQUEST['valor2'];
            $resta;
            echo "La resta es:".$resta;
        }
        if ($_REQUEST['operacion'] == "multiplicar") {
            $multiplicar = $_REQUEST[ 'valor1'] * $_REQUEST['valor2'];
            $multiplicar;
            echo "La resta es:".$multiplicar;
        }  
        if ($_REQUEST['operacion'] == "dividir"){
            $dividir = $_REQUEST[ 'valor1'] / $_REQUEST['valor2'];
            $dividir;
            echo "La resta es:".$dividir; 
        }    
    }
    ?>
    
        