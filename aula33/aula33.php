<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 33 de PHP -  Comando Delete</title>
    </head>
    <body>

    

      <?php

    include "include.inc";

    $sql="Delete FROM tb_cadastro WHERE cod='4'";
    $res=mysqli_query($con,$sql);
    $lin=mysqli_affected_rows($con);

    if($lin > 0) {
        echo "Registro deletado";
    }else{
        echo "Nenhum Registro deletado";
    }



    mysqli_close($con);

?>
    
    
     
     
  

    </body>
</html>