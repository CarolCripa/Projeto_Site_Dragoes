<?php
include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Site Dragões </title>
</head>
<style>
 
 * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

body {
    background-color: #2e2c3b;
    color: white;
}

.nav a {
    color: white;
    text-decoration: none;
    margin-right: 20px;
    font-size: 16px;
}

.main-container {
    text-align: center;
    padding: 30px 20px;
}

.banner {
    width: 100%;
    max-height: 500px;
    object-fit: cover;
}

.titulo {
    font-size: 28px;
    margin: 30px 0;
}

.botao-container {
    margin-top: 50px;
    margin-bottom: 40px;
}

.botao {
    background-color: #2ecc71;
    padding: 12px 25px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.botao:hover {
    background-color: #27ae60;
}

.text1{
    margin-bottom: 20px;
}

</style>

<body>

<main class="main-container">
    <img src="images/fundoPrincipal.png" alt="Banner Dragões" class="banner">

    <h1 class="titulo">"Cuidado, Asas e Presas à vista! Descubra o seu Dragão!"</h1>
    <h3 class="text1">"Por eras esquecidas, dragões dominaram céus e lendas. Cada um carrega uma força única — assim como você. Descubra qual alma ancestral arde dentro de você."</h3>

    <img src="images/fundoPrincipal2.jpeg" alt="Banner Dragões" class="banner">

    <div class="botao-container">
        <a href="perguntaelementos.php" class="botao">INICIAR DESCOBERTA</a>
    </div>


</main>

</body>
</html>

<?php
include_once 'footer.php';
?>