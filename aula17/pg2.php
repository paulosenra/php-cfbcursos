<?php

   session_start();
   
   echo "<h3>Terceira Página</h3>";

   //unset($_SESSION['vnome']);:remove variável ou elemento

   echo $_SESSION['vnome']."<br>";
   echo $_SESSION['vtexto']."<br>";
   echo $_SESSION['vcanal']."<br>";

?>

<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 17 de PHP -  Sessões</title>
    </head>
    <body>
     <br><br>
     <a href="aula17.php" target="_self">Voltar Aula 17</a><br>
     <a href="pg1.php" target="_self">Segunda Página</a>

    </body>
</html>