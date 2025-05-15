<?php

   $opc=2;

   switch ($opc) {
      case 1:
        echo "Carro";
        break;
      case 2:
        echo "Moto";
        break;
      case 3:
        echo "Bicicleta";
        break;
      case 4:
        echo "Navio";
        break;
      case 5:
        echo "Avião";
        break;
      default:
        echo "Transporte Inválido";
        break;
   }

   echo "<hr>";

   switch ($opc) {
    case ($opc <= 3 and $opc > 0) : 
        echo "Transporte Terrestre";
        break;
    case 4:
        echo "Transporte Marítimo";
        break;
    case 5:
        echo "Transporte Aéreo";
        break;
    }
   


 ?>

<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 5 de PHP - Comando SWITCH CASE</title>
    </head>
    <body>

      

    </body>
</html>