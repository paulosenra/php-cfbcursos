<html>
    <head>
      <meta charset="utf-8">
      <title>Aula 39 de PHP - Trabalhando com arquivos (Parte 1)
      </title>
    </head>
    <body>
        
    <?php 

      $arquivo=fopen("aula.txt","a");
      fwrite($arquivo,"\r\nPaulo Senra.");

      $arquivo=fopen("aula.txt","r");
      $conteudo=fread($arquivo,100);

      echo $conteudo;

      fclose($arquivo);

      ?>

   
    </body>
</html>