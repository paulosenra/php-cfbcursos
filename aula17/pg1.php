<?php

   session_start();

   if($_SESSION['vlog'] == "s") {

   

   $_SESSION['vcanal']="vlog Paulo Senra";

  echo "<h3>Segunda Página</h3>";

   //unset($_SESSION['vnome']);:remove variável ou elemento

   echo $_SESSION['vnome'];
   echo "<br>".$_SESSION['vtexto'];

?>

<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 17 de PHP -  Sessões</title>
    </head>
    <body>
     <br><br>
    <a href="aula17.php" target="_self">Voltar Aula 17</a><br>
     <a href="pg2.php" target="_self">Terceira Página</a>

    </body>
</html>

<?php

}else{
    echo "Acesso Indevido...";
}

?>