<?php

$nome = "Eduardo";
$idade = 18;
$cidade = "Andirá";

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perfil do Usuário</title>
    </head>
    <body>
        <h1>Perfil do Usuário</h1>
        <p>Nome: <?php echo $nome; ?></p>
        <p>Idade: <?php echo $idade; ?> anos</p>
        <p>Cidade: <?php echo $cidade; ?></p>
    </body>
</html>