<?php

   class Carro{
     public $cor;
     public static $vel;

     function __construct($cr){
      $this->cor=$cr;
      self::$vel=0;
     }

     function mudaVel($vl){
        self::$vel=$vl;
     }

     function status(){
        echo "<hr>";
        echo "Cor: ".$this->cor;
        echo "<br>Velocidade: ".self::$vel;
        echo "<hr>";
     }
   }

   $car1=new Carro("Vermelho",200);
   $car2=new Carro("Verde",150);
   $car3=new Carro("Azul",100);

   $car1->status();
   $car2->status();
   $car3->status();

   echo "<br>Velocidade Alterada<br><br>";

   
   $car1->mudaVel(100);

   $car1->status();
   $car2->status();
   $car3->status();

    echo "<br>Velocidade Alterada<br><br>";

   
   $car1->mudaVel(230);

   $car1->status();
   $car2->status();
   $car3->status();
?>

<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 22 de PHP -  Classes Parte 5(Static)</title>
    </head>
    <body>
    
  

    </body>
</html>