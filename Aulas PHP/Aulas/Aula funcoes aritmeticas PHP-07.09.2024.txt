<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  //funcoes matematicas

  $num = -243;
  $num2 = 22.5;


  echo "Valor com abs: <br> " . abs($num) . "<br>"; //o abs() retorna o num absoluto sem sinais
  echo "Valor com ceil(): <br> " . ceil($num2) . "<br>"; //arredonda o num para cima 
  echo "Valor com floor(): <br> " . floor($num2) . "<br>"; //arredonda o num para baixo 
  echo "Valor com round(): <br> " . round($num2) . "<br>"; //arredonda o num normalmente
  echo "Divisao inteira com intdiv(): " . intdiv(5, 2) . "<br>"; //o intdiv() retorna a divisao inteira entre dois numeros
  echo "Valor maximo com max(): " . max(10, 20) . "<br>"; //o max() retorna o valor maximo de dois ou mais numeros
  echo "Valor minimo com min(): " . min(10, 20) . "<br>"; //o min() retorna o valor minimo de dois ou mais numeros

  $Array = [
    "Numeros" => [2, 5, 6, 7, 8, 3]
  ];

  echo "Valor maximo do array com max(): " . max($Array["Numeros"]) . "<br>";
  echo "Valor minimo do array com min(): " . min($Array["Numeros"]) . "<br>";
  ?>


</body>

</html>