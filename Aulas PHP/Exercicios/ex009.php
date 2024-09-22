<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  $salario = $_REQUEST["salario"] ?? 1;
  $salario_minimo = 1412;
  $diferenca_salario = intdiv($salario, $salario_minimo);
  $resto_salario=$salario%$salario_minimo;

  echo "Quem ganha R$$salario  tem um total de " . number_format($diferenca_salario, 1) . " salarios <br>";
  
  echo "E ainda resta R$$resto_salario";
  ?>

  <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
    <input type="number" placeholder="Seu salario" name="salario" step="0.01"> <br>
    <input type="submit" value="Enviar">
  </form>
</body>

</html>