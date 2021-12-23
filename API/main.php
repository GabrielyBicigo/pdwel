<!DOCTYPE html>
 <html>
 <head>
      <title>Consumindo API</title>
 </head>
 <body>
      <?php
        $hg = file_get_contents("https://api.hgbrasil.com/weather?woeid=452041");
        echo $hg;
      ?>
 </body>
 </html>