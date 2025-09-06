<?php
$nome = $_POST['nome'] ?? 'Não informado';
$email = $_POST['email'] ?? 'Não informado';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Cadastro</title>
</head>
<body>

    <h2>Cadastro realizado!</h2>
    <p>Nome: <?php echo ($nome); ?></p>
    <p>E-mail: <?php echo ($email); ?></p>

</body>
</html>
