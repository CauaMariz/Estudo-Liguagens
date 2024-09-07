<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 

  date_default_timezone_set("America/Sao_Paulo"); //date(data) default(padrao), timezone(localdotempo). Ou seja, data padrao do local(America sao paulo)

  //Mostrando dates()
  echo "Data: " . date("d") . "<br>"; //o d minusculo mostra o dia em numero
  echo "Data: " . date("D") . "<br>"; //o D maiusculo mostra o dia em string
  echo "Data completa: " . date("d/m/y") . "<br>"; // Resumindo: d(day), M(mounth) e y(year) - se colocar o y e m em minusculo mostra em numero tambem
  echo "Data completa: " . date("D/M/Y") . "<br>";

  echo "Hora: " . date("g:i:s"); //A hora vai aparecer em CET e precisamos alterar isso para UTC, Segue o codigo na linha 11:
  
  ?>


</body>
</html>