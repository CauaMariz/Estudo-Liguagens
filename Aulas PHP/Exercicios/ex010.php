<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      background-color: #dedede;
    }

    input {
      border: none;
      background-color: whitesmoke;
      padding: 5px;
      border-radius: 4px;
      margin-bottom: 5px;
      display: block;
    }

    .submit {
      cursor: pointer;
    }

    .result {
      color: aliceblue;
      font-size: 18px;
      font-weight: 600;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      background-color: lightblue;
      padding: 10px;
      border-radius: 10px;
      width: 200px;
      position: relative;
      top: 14vh;
    }
  </style>
</head>

<body>

  <?php
  $ano_nasc = $_REQUEST["ano"] ?? 1;

  $ano2 = $_REQUEST["ano2"] ?? 1;

  $idade = $ano2 - $ano_nasc;
  if ($ano_nasc > $ano2 or $ano_nasc==$ano2) {
    echo "<div class='result'>Dados incorretos</div>";
  } 

  else {
    echo "<div class='result'>$idade</div>";
  }
  ?>

  <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
    <input type="number" placeholder="Data de nascimento" name="ano">
    <input type="number" placeholder="Qual ano voce quer saber?" name="ano2">
    <input type="submit" value="Enviar" class="submit">
  </form>
</body>

</html>