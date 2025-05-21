<?php

    include "include.inc";

    $res=mysqli_query($con,"SELECT * FROM tb_cadastro");
    $linhas=mysqli_num_rows($res);
    echo "Encontrados $linhas registros na tabela tb_cadastro";

    mysqli_close($con);

?>

<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 27 de PHP - Executando comandos MySQL</title>
    </head>
    <body>
    
     
  

    </body>
</html>