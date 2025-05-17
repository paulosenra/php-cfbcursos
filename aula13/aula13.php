<?php

  $dia = date("d");
  $mes = date("m");
  $ano = date("y");

  $meses=Array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
  

  $hora = date("H");
  $minuto = date("i");
  $segundos = date("s");
  date_default_timezone_set("America/Sao_Paulo");
  


  echo $dia." de ".$meses[$mes-1]." de ".$ano."<br>";

  echo date("H:i:s");
  echo $hora.":".$minuto.":".$segundos;

  ?>

<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 13 de PHP - Manipulação de Data e Hora</title>
    </head>
    <body>

    </body>
</html>