<?php

   abstract class CarroBase {
      public $potencia;
      public $velMax;
      public $portas;
      public $ligado=false;

      abstract function teste();

      function liga() {
        $this->ligado=true;
      }

      function desligar() {
        $this->ligado=false;
      }

      function status() {
        echo "<hr>";
        echo "Potência: ".$this->potencia;
        echo "<br>Velocidade Máxima: ".$this->velMax;
        echo "<br>Portas: ".$this->portas;
        echo "<br>";
        if($this->ligado){
            echo "Carro ligado";
        }else{
            echo "Carro desligado";
        }
        echo "<hr>";
      }
   }

   class Carro extends CarroBase{
      function __construct($pt,$vm,$po) {
        $this->potencia=$pt;
        $this->velMax=$vm;
        $this->portas=$po;
        $this->status();
      }

      function teste(){
        
      }
      
   }

   $carro1=new Carro(150,280,4);
   $carro1=new Carro(100,180,4);
   $carro1=new Carro(88,140,2);
   $carro1=new Carro(300,380,4);

   

?>

<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 20 de PHP -  Classes Parte 3(Abstract)</title>
    </head>
    <body>
    
  

    </body>
</html>