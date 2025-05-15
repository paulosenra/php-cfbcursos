<?php
  //Variáveis
  $vnome="Paulo";
  $vnum=10;
  $vnum2=20.5;
  $soma=0;

  //Constantes
  define ("cnome", "Bruno");
  define("ver", PHP_VERSION);
  define("dir", __DIR__);

  echo "Nome: $vnome <br>";
  $vnome="Campos";
  echo "Nome: $vnome <br>";
  $vnome= "Samuel";
  echo "Nome: ".$vnome."<br>";
  $soma=10 + 20;
  echo "Soma: $soma<br>";

  echo "<br>";

  echo "Constante cnome: ".cnome."<br>";
  echo "Nome do arquico: ".__file__."<br>";
  echo "Versão do PHP: ".ver."<br>";
  echo "Pasta: ".dir."<br>";

  echo "Versão do SO: ".PHP_OS."<br>";
  echo "Número da linha: ".__line__."<br>";
?>

<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 2 de PHP - Constanstes e Variáveis</title>
    </head>
    <body>

      

    </body>
</html>