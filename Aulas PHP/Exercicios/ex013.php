<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">

    <input type="number" placeholder="Segundos" name="sgnds"> <br>
    <input type="submit" value="Enviar">
  </form>

  <?php 
    $sgnds=$_REQUEST["sgnds"] ?? 1;

    $calc_min=$sgnds / 60;
    $calc_hor=$sgnds / 3600;
    $calc_dia=$sgnds / 86400;
    $calc_sem=$sgnds / 604800;

    echo "$sgnds segundos em minutos sao: <b>" . number_format($calc_min,2,',','.') . "</b> minutos <br>";
    echo "$sgnds segundos em horas sao: <b>" . number_format($calc_hor,2,',','.') . "</b> horas <br>";
    echo "$sgnds segundos em dias sao: <b>" . number_format($calc_dia,2,',','.') . "</b> dias <br>";
    echo "$sgnds segundos em semanas sao: <b>" . number_format($calc_sem,2,',','.') . "</b> semanas <br>";
  ?>

</body>
</html>