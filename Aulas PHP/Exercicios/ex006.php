<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>


  <?php

  $data_inicio = date("m-d-Y", strtotime("-7 days"));
  $data_fim = date("m-d-Y");

  //1-Pegar a URL- As vezes, a url vem com aspas simples, porem, ao joga-la em uma var, tem que usar aspas simples tambem, para evitar esta confusao, use uma \ antes de toda aspa simples dentro da url.
  $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''  . $data_inicio . '\'&@dataFinalCotacao=\'' . $data_fim . '\'&$top=1&$format=json&$select=cotacaoCompra,dataHoraCotacao';
  //

  //2- Usar json_decode() para converter a url de tipo json para uma array ou objeto. E dentro do json_decode usar o file_get_contents() para retornar o conteudo da url para string. A var $url vai dentro de file_get_contents($url) e ao lado tem que ir o true.
  $dados_json = json_decode(file_get_contents($url), true);
  //

  //3- Pegar o dado desejavel da url. Voce chama a url ja formatada, busca o conteudo desejavel usando []. Por exemplo: para acessar a cotacao, preciso ir em value, e acessar cotacaoCompra, porem, tenho que usar o [0] antes de acessar a cotacaoCompra, lembre-se de que o sentido é o mesmo, de pegar um dado especifico de um array em javaScrit.
  $dados_cotacao = $dados_json["value"][0]["cotacaoCompra"];
  //
  
  //Pronto, ate aqui, voce ja conseguiu obter os dados da API, o resto do codigo depende do que voce irá querer.

  $dados_real_input = $_GET["real"];

  $conversao_real_dolar = $dados_real_input / $dados_cotacao;
  echo "<pre>";
  print_r("Valor atual do dolar: " . $dados_cotacao . "<br>");

  echo "Seus R$$dados_real_input em U$$" . number_format($dados_cotacao, 2) . "sao: U$$" . number_format($conversao_real_dolar, 2);
  echo "</pre>";
  ?>

</body>

</html>