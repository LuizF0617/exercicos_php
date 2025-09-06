<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado da Avaliação</title>
    </head>
    <body>
        <h1>Resultado da Avaliação</h1>
        
    </body>

<?php
$nota = 7.7;

if ($nota >= 7) {
    echo "Aluno Aprovado";
} else {
    echo "Aluno Reprovado";
}
?>

<p>Nota: <?php echo $nota; ?></p>

