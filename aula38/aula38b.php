<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 38 de PHP - Sistema de Login com Sessões
      </title>
    </head>
    <body>
        
    <?php

        session_start();


        if(isset($_SESSION["numLogin"])){
           $n1=$_GET["num1"];
           $n2=$_SESSION["numLogin"];
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
        echo "<br>Username: ".$_SESSION['username']."<br>";

        //unset($_SESSION['numLogin']);
        //session_unregister('numLogin');

        //session_destroy();
    
        mysqli_close($con);

      ?>

   
    </body>
</html>