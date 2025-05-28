<?php  

     include "include.inc";

     $vnome=$_POST["fnome"];
     $vuf=$_POST["fuf"];
     $vt_tmp=Array(0,0,0,0);

     echo "Nome: $vnome - Estado: $vuf<br>";
     echo "Transportes selecionados:<br>";

     foreach($_POST["ftransp"] as $tra){
        $vt_tmp[$tra-1]=1;
        echo "$tra<br>";
     }

     echo "<hr>";

     $sql="INSERT INTO tb_pesquisa VALUES (null, '$vnome', '$vuf', '$vt_tmp[0]', '$vt_tmp[1]', '$vt_tmp[2]', '$vt_tmp[3]')";
     $res=mysqli_query($con,$sql);

     echo "Pesquisa gravada";

     mysqli_close($con);

?>