<?php

    
?>

<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 24 de PHP -  Enviando e-mail</title>
    </head>
    <body>
     <form name="email" method="post" action="envia.php">
     <label>e-mail</label><br>
     <input type="text" name="email_txt"><br>
     <label>Assunto</label><br>
     <input type="text" name="assunto_txt"><br>
     <label>Mensagem</label><br>
     <textarea name="msg_txt" rows="5" cols="50"></textarea><br><br>
     <input type="submit" value="Enviar">


     </form>
  

    </body>
</html>