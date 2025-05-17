<?php
   
   if(isset($_POST["f_nome"])){
     $vnome = $_POST["f_nome"];
     echo "Nome: $vnome<br>";
   }else{
    echo "Dados não submetidos";
   

  ?>

<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 15 de PHP - Função Isset</title>
    </head>
    <body>

    <form name="f_aula" method="post" action="aula15.php">
    <br><br>
    <label>Nome:</label><br>
    <input type="text" name="f_nome"><br>
    <input type="submit" value="Enviar">

    </form>

    </body>
</html>

<?php
  } 
?>