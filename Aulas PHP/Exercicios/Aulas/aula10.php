<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>

    .TextBloco{
      box-sizing: border-box;
      background-color: green;
      padding: 20px;
      width: 200px;
      margin-left: -1%;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 20px;
      color: aliceblue;
      font-weight: 600;
      border-radius: 10px;
    }
    form{
      margin: 0 auto;
      padding: 10px;
      font-family: arial;
      border-radius: 10px;
      width: 300px;
     background-color: rgb(300, 220, 100);
    }
    input{
      display: block;
      padding: 8px;
      margin-bottom: 3%;
    }
    .btnEnviar{
      cursor: pointer;
      background-color: gainsboro;
      padding: 5px;
      border: none;
      border-radius: 5px;
      margin-top: 1%;
      box-shadow: 1px 1px 5px  1px grey;
      font-weight: 600;
      font-size: 15px;
    }
  </style>
</head>

<body>


  <?php
  $nome = $_GET["nome"] ?? '';
  $idade = $_GET["idade"] ??'';

  ?>



  <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">

     <!--no action, tambem posso fazer desta forma:  
       <form action="aula10.php" method="get">
        Esta forma é'mais indicada quando o arquivo.php está separado

       <form action="<?= $_SERVER["PHP_SELF"] ?>"method="get">
       porem esta forma é bem mais indicada quando voce nao quer sair do aqruivo html que está o form e ir para um arquivo php separado, pois o resultado do form vai direto para o proprio arquivo aula10.php,
  -->

    <label for="nome">Nome: </label>
    <input type="text" name="nome" >

    <label for="idade">Idade: </label>
    <input type="number" name="idade" >

    <input type="submit" value="Enviar" class="btnEnviar">
    
    <section>
      <h1>Resultado: </h1>

      <?php 

      if ($nome == "" or $idade ==""){
        echo "<div class=\"TextBloco\">Digite algum valor</div>";
      }
      else{
        echo "<div class=\"TextBloco\">Seu nome é $nome, e sua idade é $idade</div>";
      }

      ?>
    </section>
</body>

</html>