<?php  

     include "include.inc";

    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 42 de PHP - Formulário com múltiplas tabelas</title>
</head>
<body>

    <h1>Pesquisa</h1>
    
    <form name="fcad" action="processar.php" method="post">

    <label>Nome: </label><br>
    <input type="text" name="fnome"><br><br>

    <label>Selecione seu estado: </label><br>
    <select name="fuf">
     <?php
      $sql="SELECT * FROM tb_uf order by uf";
      $res=mysqli_query($con,$sql);
      while($vreg=mysqli_fetch_row($res)){
        $vuf=$vreg[0];
        $vsigla=$vreg[1];
        echo "<option value=$vsigla>$vuf</option>";
      }

     ?>

    </select><br><br>

    <label>Selecione seu meio de transporte favoritos: </label><br>

    <?php
      $sql="SELECT * FROM tb_transporte";
      $res=mysqli_query($con,$sql);
      while($vreg=mysqli_fetch_row($res)){
        $vcod=$vreg[0];
        $vtra=$vreg[1];
        echo "<input type=checkbox name=ftransp[] value=$vcod>$vtra<br>";
      }

     ?>


    <br>

    <input type="submit" value="Gravar Pesquisa">

    </form>
    


</body>
</html>

<?php

mysqli_close($con);

?>