<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>



  <?php
  $sortear_num = rand(1, 100); //jeito mais lento e antigo
  $sortear_num2 = mt_rand(1,100); // jeito mais novo e rapido
  $sortear_num3 = random_int(1,10);//gera numeros seguros, mais usado para senhas, etc.

  echo "  Numero sorteado com rand(): $sortear_num <br> ";
  echo "Numero sorteado com mt_rand(): $sortear_num2 <br>";
  echo "Numero sorteado com random_int(): $sortear_num3 <br>";
  ?>

  <button onclick="Sortear()">Sortear outro numero </button>


  <script>
    function Sortear() {
      location.reload()
    }
  </script>
</body>

</html>