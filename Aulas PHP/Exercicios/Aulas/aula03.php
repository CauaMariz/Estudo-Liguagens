<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  //Tipos primitivos
  //Categorias: escalares, compostos e especiais.

  /*Escalares:
  string: " "
  int/integer: 23,45,7534
  float/double ou real (real nao se usa mais): 23.5, 345.78, 54.34
  bool: true or false

  Especiais: 
  null
  resource
  callabe
  mixed

  Compotos:"
  array:
  object:
  */ 

  $nome="caua";
  var_dump($nome . "<br>"); // o var_dump(); da todas as informacoes da var:  tipo, num. de caracteres e o valor da var.

  $idade=(string) 234; //o nome disso é coercao. eu basicamente forcei o tipo da var

  var_dump($idade );


  ?>
</body>
</html>