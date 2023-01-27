<?php
    $paragrafo = $_GET['paragrafo'];
    $parola = $_GET['parola'];
    $lunghezzaStringa = strlen($paragrafo);
    $paragrafoFiltrato = str_replace($parola, '***', $paragrafo)
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./styles/style.css">
    </head>
    <body>
        <div class="container">
            <div class="inner">
                <h2>Risultato input</h2>
                <div class="minor">
                    <p><?php echo $paragrafo ?></p>
                    <p>La parola da censurare che hai scelto è: <strong><?php echo $parola ?></strong></p>
                    <p>Il testo che hai scritto è composto da <strong><?php echo $lunghezzaStringa ?></strong> caratteri.</p>
                </div>
                <h2>Testo filtrato</h2>
                <div class="minor">
                    <p><strong><?php echo $paragrafoFiltrato ?></strong></p>
                </div>
            </div>
        </div>
    </body>
</html>