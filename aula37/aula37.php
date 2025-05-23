<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 37 de PHP - Sistema de Login Básico
      </title>
    </head>
    <body>
        
    <?php

        include "include.inc";
    
        $user=$_POST['f_user'];
        $senha=$_POST['f_senha'];

        $sql="SELECT * FROM tb_cadastro WHERE username='$user' AND senha='$senha'";
        $res=mysqli_query($con,$sql);
        $linha=mysqli_affected_rows($con);

        if($linha > 0){
            $num=rand(100000,900000);
            setcookie("numLogin",$num);
            header("Location:aula37b.php?num1=$num");
        }else{
            echo "ERRO no login<br>";
            echo "<a href='formulário.html'>Voltar</a>";
        }

       mysqli_close($con);

      ?>

   
    </body>
</html>