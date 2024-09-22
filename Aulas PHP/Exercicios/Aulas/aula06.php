<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula05</title>
</head>

<body>


  <?php
  //Expressoes aritmeticas

  /*
  ordem de precedencia

  ()
  **
  * / %  -> se em uma expressao estiver dois desses ou mais, o que estiver mais na esquerda é executado primeiro
  + -

  50/2+3**2 -> é 34. 3**2= 9. 50/2=25. 25 + 9=34 
  */

  $num=100/2+50*4**2;

  echo "Resultado da conta: $num";
  ?>
</body>

</html>