<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
</head>

<body>

  <header>
    Resultado
  </header>

  <main>
    <?php

    //A var $_get é global, ja existe de forma natural no PHP. Ja que no form o method escolhemos é get, tambem temos que usar a var $_get. Se fosse post no method do form, seria $_post
    echo "<pre>";
    var_dump($_GET);
    echo "<br>";
    echo "</pre>";

    //O bom de usar o $_REQUEST é que tanto faz usar no method do form post ou get. É uma juncao de $_get, $_post e $_COOKIES.

    echo "<pre>";
    var_dump($_REQUEST);
    echo "<br>";
    echo "</pre>";

    //Vamos fazer de uma forma melhor

    $nome = $_GET["nome"] ?? "sem nome";
    $sobrenome = $_GET["sobrenome"] ?? "sem sobrenome";

    //Sem usar operadores ternarios (??)
    if ($nome == "" or $sobrenome == "") {
      echo "Dados incompletos";
    } else {
      echo "O nome é: <b>$nome</b>, e o sobrenome é: <b>$sobrenome</b>";
    }

    ?>
  </main>

</body>

</html>