<?php
    $paragrafo = $_GET['paragrafo'];
    $parola = $_GET['parola'];
    $lunghezzaStringa = strlen($paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <p><?php echo $paragrafo ?></p>
        <p>Il testo che hai scritto è composto da <strong><?php echo $lunghezzaStringa ?></strong> caratteri.</p>
    </body>
</html>