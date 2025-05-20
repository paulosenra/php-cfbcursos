<?php

    $vmail=$_POST['email_txt'];
    $vassunto=$_POST['assunto_txt'];
    $vmsg=$_POST['msg_txt'];
    
    if(mail($vmail,$vassunto,$vmsg, "From:outroEmail@gmail.comReply-to:resp_teste@gmail.com")){
        echo "Mensagem enviada<br>";
        echo "<a href=aula24.php target=_self>voltar</a>";
    }else{
        echo "Erro ao enviar, tente novamente";
    }

?>

<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 24 de PHP -  Enviando e-mail</title>
    </head>
    <body>
    

    </body>
</html>