<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php

  $num = $_REQUEST["num"] ?? 1;

  $raiz_quadr = sqrt($num);

  //Para calcular raiz cúbica usa-se uma "gambiarra", pois nao há um metodo para isso em php

  $raiz_cub = $num ** (1 / 3);

    echo "A raiz quadrada de $num é: " . number_format($raiz_quadr, 2, ",", ".") . "<br>";

    echo "A raiz cúbica de $num é: " . number_format($raiz_cub, 2, ",", ".");

  ?>

  <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
    <input type="number" placeholder="Insira o número: " name="num">
    <input type="submit" value="Enviar">
  </form>

</body>

</html>