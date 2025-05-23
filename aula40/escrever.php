<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 39 de PHP - Trabalhando com arquivos (Parte 2) guestbook</title>
</head>
<body>
    
    <?php

    $nome=$_POST['f_nome'];
    $msg=$_POST['f_msg'];
    $conteudo=$msg."\r\n".$nome."\r\n";

    $arquivo=fopen("visitas.txt","a");
    fwrite($arquivo,$conteudo);

    echo "Mensagem gravada: $conteudo";

    fclose($arquivo);



    ?>

    <hr>

    <a href="index.html" target="_self">Voltar</a>

</body>
</html>