<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 32 de PHP -  Operador LIKE</title>
    </head>
    <body>

    <table border="1">
      <tr>
        <td>Código</td><td>Produto</td><td>Preço</td><td>Qtde</td><td>Categoria</td>
      </tr>

      <?php

    include "include.inc";

    $vpes="t%";

    $sql="SELECT * FROM tb_produtos WHERE produto LIKE '$vpes'";
    $res=mysqli_query($con,$sql);
    while($vreg=mysqli_fetch_row($res)){
     $vcod=$vreg[0];
     $vprod=$vreg[1];
     $vpreco=$vreg[2];
     $vqtde=$vreg[3];
     $vcat=$vreg[4];

      echo "<tr>";
      echo "<td>$vcod</td><td>$vprod</td><td>$vpreco</td><td>$vqtde</td><td>$vcat</td>";
      echo "</tr>";
    }

    mysqli_close($con);

?>
    </table>
    
     <br>
     <a href="formulario.html">voltar</a>
  

    </body>
</html>