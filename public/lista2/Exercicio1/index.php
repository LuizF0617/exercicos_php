<?php include 'cabecalho.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Filmes</title>
</head>
<body>

    <p>Cadastre seu filme favorito</p>
    <hr>
    <?php $imagem = "filme.jpg"; ?>
    <img src="<?php echo $imagem ?>" alt="Imagem de filme" width="200"> 

    <form action="index.php" method="post">
        <label for="nome"> Nome:</label>
        <input type="text" id="nome" name="Nome_do_Filme" required><br>
        <label for="genero"> Gênero:</label>
        <input type="text" id="genero" name="genero"><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $filme = $_POST['Nome_do_Filme'];
        $genero = $_POST['genero'];
    }
    
    echo ("<p>Filme cadastrado: <?php echo $filme ($genero)?></p>");


    if($genero == "terror"){
       echo ("<p style= 'color: red;'>Atenção! Filme de terror</p>");
    }
    if($genero == "comedia"){
        echo ("<p style= 'color: green;'>Esse filme promete boas risadas!</p>");
    }
    

    ?>
</body>
</html>











<?php include 'rodape.php'?>