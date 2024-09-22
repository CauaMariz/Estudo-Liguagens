<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php 
    $preco_produto=$_REQUEST["preco_produto"] ?? 1;
    $porcent_aumento=$_REQUEST["porcent_aumento"] ?? 1;

    $cont_aumento=$porcent_aumento/100;
    if ($porcent_aumento <> 1){
      $aumento=$cont_aumento * $preco_produto + $preco_produto;
      echo "O produto sofreu um aumento de $cont_aumento% <br>";
      echo "Total com aumento: $aumento";
    }
    else{
      echo "Esperando";
    }

    
  ?>

  <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
    <input type="number" placeholder="Preco do produto" name="preco_produto"> <br>
    <input type="number" placeholder="Aumento. Apenas números" name="porcent_aumento"> <br>
    <input type="submit" value="Enviar">

  </form>
</body>
</html>