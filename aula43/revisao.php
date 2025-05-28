<?php

  include "include.inc";
  
  $vnome=$_POST['f_nome'];
  $vsenha=$_POST['f_senha'];
  $vsexo=$_POST['f_sexo'];
  $vesporte=$_POST['f_esporte'];

  if(isset($_POST['f_tcarro'])){
     $vtcarro=$_POST['f_tcarro'];
  }else{
    $vtcarro=0;
  };
  if(isset($_POST['f_tmoto'])){
  $vtmoto=$_POST['f_tmoto'];
}else{
  $vtmoto=0;
}
if(isset($_POST['f_tonibus'])){
  $vtonibus=$_POST['f_tonibus'];
}else{
  $vtonibus=0;
}

  $vcoment=$_POST['f_coment'];

  $sql="INSERT INTO tb_revisão VALUES (null, '$vnome', '$vsenha', '$vsexo', '$vesporte', '$vtcarro', '$vtmoto', '$vtonibus', '$vcoment')";
  $res=mysqli_query($con,$sql);

  mysqli_close($con);

  echo "Registro Gravado";
  echo "<br><a href=formulário.html target=_self>Voltar</a>";
  

?>