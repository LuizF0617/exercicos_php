<?php
$numero = null;
if (isset($_POST['numero'])) {
    $numero = (int) $_POST['numero'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada Personalizada</title>
</head>
<body>
    <h2>Gerador de Tabuada</h2>
    
    <form method="post" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Gerar Tabuada</button>
    </form>

    <hr>

    <?php
    if ($numero !== null) {
        echo "<h3>Tabuada do $numero</h3>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado <br>";
        }
    }
    ?>
</body>
</html>
