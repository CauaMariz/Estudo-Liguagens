<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php 
    $nota1=$_REQUEST["nota1"] ?? 1;
    $nota2=$_REQUEST["nota2"] ?? 1;

    $media=($nota1 + $nota2) / 2;

    echo "A media das duas notas é: $media";

  ?>

  <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
    <input type="number" name="nota1" placeholder="Nota 1"> <br>
    <input type="number" name="nota2" placeholder="Nota 2"> <br>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>