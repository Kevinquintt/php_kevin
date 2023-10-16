<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Calculadora básica</title>
</head>
<body>

  <form action="calculadora.php" method="post">
    <input type="number" name="operando1" placeholder="Número 1">
    <input type="number" name="operando2" placeholder="Número 2">
    <select name="operador">
      <option value="suma">Suma</option>
      <option value="resta">Resta</option>
      <option value="multiplicacion">Multiplicación</option>
      <option value="division">División</option>
    </select>
    <input type="submit" value="Calcular">
  </form>

  <?php

  // Recibir los datos del formulario
  $operando1 = $_POST['operando1'];
  $operando2 = $_POST['operando2'];
  $operador = $_POST['operador'];

  // Realizar la operación
  switch ($operador) {
    case "suma":
      $resultado = $operando1 + $operando2;
      break;
    case "resta":
      $resultado = $operando1 - $operando2;
      break;
    case "multiplicacion":
      $resultado = $operando1 * $operando2;
      break;
    case "division":
      $resultado = $operando1 / $operando2;
      break;
  }

  // Mostrar el resultado
  echo "El resultado es: " . $resultado;

  ?>

</body>
</html>