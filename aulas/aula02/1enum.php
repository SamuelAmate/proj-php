<?php
    $nome = "Samuel";
    $sobrenome = "Amate";
    $nomecompleto = "$nome $sobrenome";
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ex 1</title>
    </head>
    <body>
        <h1><?= $nomecompleto ?></h1>
        <p><?= "O meu nome tem " . mb_strlen($nomecompleto) . " caracteres" ?></p>
    </body>
    </html>
