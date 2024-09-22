<?php
//Super globais

//$_get -> gera um array com os dados, por isso usa-se ["nome"]
//$_post -> mesma coisa
//$_request -> juncao do get e post

echo "<h1>Usando \$_GET</h1>";
echo "<pre>";
var_dump($_GET); //aparece vazio pois nao tem nada no array
echo "</pre>";

//$_COOKIE
echo "<h1>Usando \$_COOKIE</h1>";

setcookie("mes-do-ano", "setembro", time() + 3600);
//settcookie() define um cookie. mes do ano é o nome do cookie, setembro é o valor e temos que definir quanto tempo ficará ativo este cookie, usando time() + 3600. 3600 sao 3600 segundos, no caso 1 hora. sempre bom colocar o setcookie nas primeiras linhas do codigo.

print_r($_COOKIE);
//$_FILES


//$_SESSION
echo "<h1>Usando \$_SESSION</h1>";
session_start();
$_SESSION["TESTE"] = "OLAA"; //tenho que iniciar a session e depois dar um nome a essa session e um valor 

print_r($_SESSION);
//$_ENV

//$_SERVER
echo "<pre>";
echo "<h1>Usando \$_SERVER</h1>";
print_r($_SERVER); //Ele mostra muitas informacoes do servidor atual, como o nome, hora, versao do windows etc. 
echo "</pre>";


//$GLOBALS
echo "<pre>";
echo "<h1>Usando \$_GLOBALS</h1>";
print_r($GLOBALS); //ele mostra todo o conteudo das outras superglobais, como o get, post, server, cookie, entre outros.
echo "</pre>";
