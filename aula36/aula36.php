<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 36 de PHP - Comando Update
      </title>
    </head>
    <body>
        
    <?php
        include "include.inc";
    
        $sql="UPDATE tb_cadastro SET telefones='1925160829104' WHERE cod=4";

        $res=mysqli_query($con,$sql);

        if($res){
           echo "Registro atualizado com sucesso!";
        }else{
            "Erro na atualização do registro";
        }

       mysqli_close($con);

      ?>

   
    </body>
</html>