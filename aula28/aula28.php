<?php

    include "include.inc";

    $vnome="Samuel";
    $vuser="Sans";
    $vsenha="1519";
    $vmail="teste2@gmail.com";
    $vtel="1234567891013";
    $vst=1;
    $vobs="Tudo ok aqui também";

    $sql="INSERT INTO tb_cadastro VALUES (NULL, '$vnome', '$vuser', '$vsenha', '$vmail', '$vtel', $vst, '$vobs')";
    $res=mysqli_query($con,$sql);
    $num=mysqli_affected_rows($con);
    echo "$num registro inserido.";

    mysqli_close($con);

?>

<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 28 de PHP - Comando Insert</title>
    </head>
    <body>
    
     
  

    </body>
</html>