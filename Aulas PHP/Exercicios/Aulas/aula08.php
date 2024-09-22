<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php 

  $num="2"+"2"; //o resultado nao apareceu "22" pois  + para o php é literalmente adicao. ele viu que os "2" eram sttrings e tento converte-los em numeros.
  echo $num . "<br>";

  $num2="2"."2"; //imprime 22 pois esta concatenando

  echo $num2;
  ?>

</body>
</html>