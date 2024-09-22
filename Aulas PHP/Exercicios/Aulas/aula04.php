<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  //strings em PHP

  /*
    double quoted -> Utilizacao de "", onde há a interpretacao do PHP -> Interpreta o que esta sendo exibido nas ""
    single quoted -> Utilizacao de '', onde nao há interpretacao do PHP -> Exibe exatamente o que esta nas ''

    Exemplo: */

  $Nome = "Caua \u{1F986}";
  $Idade = 17;

  echo "Usando aspas duplas \u{1F418} <br> "; //Este codigo \u{} é chamado de unicode
  echo "Nome: $Nome <br> ";
  echo "Nome: $Nome, Idade: $Idade <br> ";

  echo 'Usando aspas simples \u{1F418} <br> ';
  echo 'Nome: $Nome <br> ';
  echo 'Nome: $Nome, Idade: $Idade <br> ';

  //Para mostrar uma const, tem que usar concatenacao .
  //Exemplo: 

  const NOME = "Caua";

  echo "Nome: NOME <br>"; //Jeito errado
  echo "Nome: " . NOME;

  echo "$Nome  'CAUA' $Idade  ";
  echo "$Nome  'CAUA' $Idade  "; //Se quero exibir CAUA com "" e pedir interpretacao do PHP, tenho que fazer o seguinte codigo:
  echo "$Nome  \"CAUA\" $Idade  "; //Agora ele interpreta o codigo e exibe o CAUA com "".

  /* 
      Caso voce queira exibir os simbulos a seguir sem que o PHP acabe interpretando eles:

      \n nova linha
      \t tabulacao horizontal
      \\ eibir barra invertida
      \$ sinal de $
      \u{} mostra unicode

    */
  ?>
</body>

</html>