<?php

   class aula{
    protected $var1="Bom dia";
    protected $var2="Canaldecursodephp@gmail.com";
    protected $var3="www.webverse.com.br";

    function escreve() {
        echo "<br>Método da classe aula";
        echo "<br>".$this->var1;
        echo "<br>".$this->var2;
        echo "<br>".$this->var3;
    }
   }

   class canal extends aula{
     var $vc1="Curso de PHP";
     var $vc2="Paulo";

     function escreve2() {
        echo "<br>Método da classe canal";
        echo "<br>".$this->vc1;
        echo "<br>".$this->vc2;
        echo "<hr>";
        echo "<br>".$this->var1;
        echo "<br>".$this->var2;
        echo "<br>".$this->var3;
     }
   }

   $aulaOBJ=new aula();
   $canalOBJ=new canal();

   $aulaOBJ->escreve();
   echo "<hr>";
   //$canalOBJ->escreve();
   $canalOBJ->escreve2();
   echo "<hr>";
   //echo "<br>".$this->var1;
   //echo "<br>".$this->var2;
   //echo "<br>".$this->var3;


?>

<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 19 de PHP -  Classes Parte 2(Herança)</title>
    </head>
    <body>
    
  

    </body>
</html>