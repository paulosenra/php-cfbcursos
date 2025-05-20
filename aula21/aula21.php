<?php

   interface CarroPadrao{
    function liga();
    function desliga();
    function status();
    function acelera();
    function freia();
    
   }

   interface CarroGuerra{
     function atiraCanhao();
     function atiraMetralhadora();
   }

   abstract class CarroBase implements CarroPadrao, CarroGuerra{
     public $potencia;
     public $velMax;
     private $ligado=false;

     function liga(){
        $this->ligado=true;
     }

     function desliga(){
        $this->ligado=false;
     }

     function status(){
        echo "<hr>";
        echo "Potência: ".$this->potencia;
        echo "<br>Velocidade Máxima: ".$this->velMax;
        echo "<br>";
        if($this->ligado){
            echo "Esse carro está ligado";
        }else{
            echo "Esse carro não está ligado";
        }

        echo "<hr>";
     }
     

        function acelera(){}
        function freia(){}
        function atiraCanhao(){}
        function atiraMetralhadora(){}
   }

   class Carro extends CarroBase{
     function __construct($pt,$vm){
       $this->potencia=$pt;
       $this->velMax=$vm;

       $this->liga();
       $this->status();
     }
   }
   
   $carro1=new Carro(150,280);
   //$carro1->liga();
   //$carro1->status();

?>

<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 21 de PHP -  Classes Parte 4(Interfaces)</title>
    </head>
    <body>
    
  

    </body>
</html>