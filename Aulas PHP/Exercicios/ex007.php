<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Analisando...</h1>
  <?php
  $num = $_REQUEST["num"] ?? 0;

  echo "Seu numero é: " . number_format($num, 3, ",", ".") . "<br>";

  $num_int = (int)$num; //o (int) converte o numero para inteiro

  $num_float = $num - $num_int; //tira a parte inteira do numero
  
  echo "A parte inteira do numero é: " . number_format($num_int, 0, ",", ".") . "<br>";
  echo "A parte fracionaria do numero é': " . number_format($num_float, 3, ".", ",");


  ?>
</body>

</html>