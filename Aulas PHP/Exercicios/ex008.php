<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  $dividendo = $_REQUEST["dividendo"] ?? 1;
  $divisor = $_REQUEST["divisor"] ?? 1;

  $divisao = intdiv($dividendo , $divisor);
  $resto_divisao = $dividendo % $divisor;

  echo "Dividendo: $dividendo e divisor: $divisor <br>";
  echo "Resultado da divisao inteira: $divisao <br>";
  echo "O resto da divisao é $resto_divisao ";

  ?>

  <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
    <input type="number" name="dividendo" placeholder="Dividendo" step="0.01" min="0"> <br>
    <input type="number" name="divisor" placeholder="Divisor" step="0.01" min="1">
    <BR>
    <input type="submit" value="Enviar">
  </form>
</body>

</html>