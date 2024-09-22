<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $valor = $_REQUEST["valor"] ?? 1;
  $nota_100 = $valor / 100;
  $nota_50 = $valor / 50;
  $nota_10 = $valor / 10;
  $nota_5 = $valor / 5;

  if ($valor <> 1) {
    echo "O caixa eletronico vai te entregar as seguintes notas: <br>
      $nota_100 notas de 100 ou <br> $nota_50 notas de 50 ou <br> $nota_10 notas de 10 ou <br> $nota_5 notas de 5
    ";
  }
  ?>

  <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
    <h3>Notas disponiveis</h3>
    <p>Nota de 100</p>
    <p>Nota de 50</p>
    <p>Nota de 10</p>
    <p>Nota de 5</p>
    <input type="number" step="5" placeholder="Valor do saque" name="valor">
    <input type="submit" value="Enviar">

  </form>
</body>

</html>