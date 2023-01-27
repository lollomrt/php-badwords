<?php

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
            <form action="./results.php" method="GET">
                <textarea class="input" rows="8" name="paragrafo" id="paragrafo" placeholder="Inserisci un paragrafo ..."></textarea>
                <input class="input" type="text" name="parola" id="parola" placeholder="Inserisci le parole da censurare ...">
                <button type="submit">Invia</button>
            </form>
        </div>
        
    </body>
</html>