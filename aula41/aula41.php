<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 41 de PHP - Trabalhando com arquivos (Parte 3) Contador de visitas</title>
</head>
<body>
    
    <?php 

    $arquivo=fopen("contador.txt", "r");
    $cont=fread($arquivo,21);
    $cont++;
    $arquivo=fopen("contador.txt","w");
    fwrite($arquivo,$cont);
    fclose($arquivo);

    echo "Quantidade de acessos: $cont<br>";

    ?>


</body>
</html>