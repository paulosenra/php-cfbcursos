<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 34 de PHP - Deletando registros selecionados (Parte 1)
      </title>
    </head>
    <body>

    <form name="f_excluir" method="post" action="aula34.php">

    <table border="1">

    <tr>
        <td>Codigo</td><td>Nome</td><td>Selecionar</td>
    </tr>
    
      <?php

        include "include.inc";
      
       $sql="SELECT * FROM tb_cadastro ORDER BY cod";
       $res=mysqli_query($con, $sql);

       while($vreg=mysqli_fetch_row($res)){
          $vcod=$vreg[0];
          $vnome=$vreg[1];

          echo "<tr>";
          echo "<td>$vcod</td><td>$vnome</td>";
          echo "<td align=center><input type=checkbox value=$vcod name=sel[]></td>";
          echo "</tr>";
       }

       mysqli_close($con);

      ?>

    </table>

    <br>

    <input type="submit" value="Excluir" name="bt_excluir">

    </form>
     
    
     
     
  

    </body>
</html>