<?php

  $i = 0;
  $tam = 5;
  $vet = array($tam);

  while($i < 10) {
    
    echo "Valor da variável i: $i <br>";
    $i++;
  }
  
  echo "<br><hr><br>";

  $i = 0;
  while($i < $tam) {
    $vet[$i]=$i;
    echo "$vet[$i]<br>";
    $i++;
  }

 $i=0;
 while($i < $tam){
    echo "$vet[$i]<br>";
    $i++;
 }
 ?>

<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 6 de PHP - Loop While</title>
    </head>
    <body>

    </body>
</html>

