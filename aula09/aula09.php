<?php

    $transp = array("Carro", "Moto", "Bicicleta", "Ônibus", "Avião", "Navio");

    foreach($transp as $veiculo) {
       echo "$veiculo<br>";
       /*if($veiculo == "Bicicleta")
       break;*/
    }

    echo "<hr>";
    foreach($transp as $veiculo) {
      if($veiculo == "Bicicleta") {
        echo "Bicicleta está na lista de veículos<br>";
        break;
    }
    }
 ?>

<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 9 de PHP - Loop Foreach</title>
    </head>
    <body>

    

    </body>
</html>