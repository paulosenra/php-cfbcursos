<?php

    //Final, a palavra reservada final, diz que o método não pode ser sobrescrito
    abstract class CarroBase{
        public $cor;
        public $vel=0;

        function __construct($cr){
            $this->cor=$cr;
        }

        function status(){
            echo "<hr>";
            echo "Carro: ".$this->cor;
            echo "<br>Velocidade: ".$this->vel;
            echo "<hr>";
        }

       final function Cor(){
            echo "<hr>";
            echo "<br>Minha cor:".$this->cor;
            echo "<br>Método original<hr>";
        }
    }

    class Carro extends Carrobase{
        
        /*function Cor(){
        echo "<hr>";
        echo "Cor: ".$this->cor."<br>";
        }*/
    }

    class Transp extends Carrobase{
        
        
    }

    $car=new Carro("Vermelho");
    $tra=new Transp("Azul");

    echo "<hr>";

    $car->cor();
    $tra->cor();

?>

<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 23 de PHP -  Classes Parte 6(Final)</title>
    </head>
    <body>
    
  

    </body>
</html>