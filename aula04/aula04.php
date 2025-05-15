<?php

//IF _ ELSE

$nota1=50;

if ($nota1 >= 70) {
   echo "<font color=green>Aprovado</font>";
} else if ($nota1 >= 50){
    echo "<font color=orange>Recuperação</font>";
} else {
    echo "<font color=red>Reprovado</font>";
}

if (($nota1 >= 40) & ($nota1 <= 60)) {
  echo "<hr>Aluno selecionado";
} else {
    echo "<hr>Aluno fora da Faixa";
}

 ?>

<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 4 de PHP - Condicional IF ELSE</title>
    </head>
    <body>

      

    </body>
</html>