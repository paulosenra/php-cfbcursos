<?php
$texto = urlencode("Curso de PHP");
$nome = urlencode("Paulo");
$canal = urlencode("Paulo Senra");

echo "<a href='pg1.php?tx=$texto&no=$nome&cn=$canal' target='_self'>Abre pg1</a>";
?>

<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 16 de PHP -  Passagem de valores pela url</title>
    </head>
    <body>

  

    </body>
</html>

