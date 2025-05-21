<?php

    include "include.inc";

    $vcat1=$_POST["F_cat1"];
    $vcat2=$_POST["F_cat2"];
    $sql="SELECT * FROM tb_produtos WHERE cat = $vcat1 OR cat = $vcat2";
    $res=mysqli_query($con,$sql);
    $lin=mysqli_num_rows($res);
    echo "$lin registros encontrados";

    mysqli_close($con);

?>

<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 30 de PHP -  Comando Select (parte 1)</title>
    </head>
    <body>
    
     <br>
     <a href="formulario.html">voltar</a>
  

    </body>
</html>