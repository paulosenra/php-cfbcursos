<?php

    include "include.inc";

   $vcod=$_POST["F_cod"];
   $vprod=$_POST["F_prod"];
   $vpreco=$_POST["F_preco"];
   $vqtde=$_POST["F_qtde"];

   $sql="INSERT INTO tb_produtos VALUES ('$vcod', '$vprod', $vpreco, $vqtde)";
   $res=mysqli_query($con,$sql);
   $linhas=mysqli_affected_rows($con);

   if($linhas == 1){
    echo "Registro gravado com sucesso";
   }else{
    echo "Falha na gravação do registro<br>";
   }

    mysqli_close($con);

?>

<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 29 de PHP -  Comando Insert com formulário</title>
    </head>
    <body>
    
     <br>
     <a href="formulario.html">voltar</a>
  

    </body>
</html>