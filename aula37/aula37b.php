<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 37 de PHP - Sistema de Login Básico
      </title>
    </head>
    <body>
        
    <?php

        if(isset($_COOKIE["numLogin"])){
           $n1=$_GET["num1"];
           $n2=$_COOKIE["numLogin"];
           if($n1 != $n2){
              echo "Login não efetuado";
              exit;
           }
        }else{
            echo "Login não efetuado";
            exit;
        }

        include "include.inc";

        echo "Página inicial";
    
        mysqli_close($con);

      ?>

   
    </body>
</html>