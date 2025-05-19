<?php

   session_start();
   $_SESSION['vnome']="Bruno";
   $_SESSION['vtexto']="texto para teste";
   $_SESSION['vlog']="s";

  

   //unset($_SESSION['vnome']);:remove variável ou elemento



   echo $_SESSION['vnome'];
   echo "<br>".$_SESSION['vtexto']."<br>";
    if(isset($_SESSION['vcanal'])) {
    echo $_SESSION['vcanal'];
   }else{
    echo "Variável vcanal não foi definido";
   }

   //session_destroy(); :destrói uma sessão

?>

<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 17 de PHP -  Sessões</title>
    </head>
    <body>
    <br><br>
    <a href="pg1.php" target="_self">Segunda Página</a><br>
    <a href="pg2.php" target="_self">Terceira Página</a>
  

    </body>
</html>