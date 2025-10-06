<?php
include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
    <link rel="stylesheet" href="style.css">
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

header {
    background-color: #111;
    padding: 10px 20px;
    text-align: right;
}

.user-header span {
    font-weight: bold;
    color: #fff;
}

.profile-container {
    display: flex;
    justify-content: space-around;
    padding: 20px;
    flex-wrap: wrap;
}

.user-info, .dragon-info {
    width: 45%;
    background-color: #3b2a4d;
    padding: 20px;
    border-radius: 10px;
    margin: 10px 0;
}

.user-photo {
    width: 40%;
    border-radius: 10px;
    margin-bottom: 15px;
}

.dragon-photo{
    width: 100%;
    border-radius: 10px;
    margin-bottom: 15px;
}

.mapa {
     width: 50%;
    border-radius: 10px;
    margin-bottom: 15px;
}

.user-data p, .dragon-facts p {
    margin: 5px 0;
}

.user-personality, .dragon-facts {
    margin-top: 15px;
}

.user-personality ul, .dragon-facts ul {
    list-style-type: disc;
    margin-left: 20px;
    margin-bottom: 10px;
}

footer {
    text-align: center;
    padding: 10px;
    background-color: #111;
    font-size: 12px;
    margin-top: 20px;
}

</style>
<body>

    <main class="profile-container">
        <section class="user-info">
            <img src="images/coragemusuario.jpg" alt="Foto do Usuário" class="user-photo">
            <div class="user-data">
                <p><strong>Usuário:</strong> Raimunda da Silva</p>
                <p><strong>Nascimento:</strong> 04/12/1980</p>
                <p><strong>E-mail:</strong> raimundags@gmail.com</p>
                <p><strong>Telefone:</strong> 11980578746</p>
                <p><strong>User ID:</strong> 10245687820</p>
            </div>

            <div class="user-personality">
                <h3>SUA PERSONALIDADE:</h3>
                <ul>
                    <li>Feliz</li>
                    <li>Calma</li>
                    <li>Corajosa</li>
                    <li>Forte</li>
                    <li>Paciente</li>
                </ul>
                <p>Ela é feliz, não por ausência de problemas, mas por escolher enxergar a beleza nas pequenas coisas.
Sua calma inspira quem está por perto, trazendo paz mesmo nos momentos mais difíceis.
Não se apressa, entende que tudo tem seu tempo e sabe esperar com serenidade.
A coragem pulsa forte em seu peito — não teme o novo, nem foge dos desafios.
Enfrenta as tempestades com firmeza, mesmo quando o mundo parece desabar.
Sua força não está no grito, mas no silêncio cheio de propósito.
Carrega uma presença firme, que acalma e protege ao mesmo tempo.
É paciente com os outros, com a vida e, principalmente, consigo mesma.
Sabe que cada passo, por menor que pareça, é parte do caminho.
Ela não se deixa levar pelo caos; prefere respirar fundo e seguir adiante.
Suas decisões vêm do coração, mas são equilibradas pela razão.
Não precisa provar nada a ninguém — sua essência fala por si.
Mesmo quando cai, levanta com dignidade e um sorriso discreto.
Valoriza os momentos simples, onde mora a verdadeira felicidade.
Ela é presença leve, mas alma forte — um exemplo silencioso de equilíbrio e luz.</p>
            </div>
        </section>

        <section class="dragon-info">
            <img src="images/dragaoresultado.png" alt="Imagem do Dragão" class="dragon-photo">
            <div class="dragon-facts">
                <h3>FATOS SOBRE O SEU DRAGÃO</h3>
                <ul>
                    <li>Origem</li>
                    <li>Período de existência</li>
                    <li>Habitat</li>
                    <li>Modus Operandi</li>
                    <li>Mitologia</li>
                </ul>
                <p> Druk (འབྲུག་) é o dragão do trovão, uma criatura sagrada no budismo tibetano e o símbolo nacional do Butão. Ele está ligado ao conceito de Drukpa Kagyu, uma escola do budismo fundada no Tibete no século XII.
O Druk é especialmente venerado em:
Tibete, onde aparece nos ensinamentos budistas.
Butão, que se autodenomina "Druk Yul" (Terra do Dragão do Trovão).
Himalaias, onde lendas dizem que os dragões anunciam trovões nas tempestades.
Aparência e Características
O Druk tem características marcantes que o diferenciam de outros dragões asiáticos:
Corpo longo e serpentino, como os dragões chineses, mas com um ar mais feroz.
Garras afiadas e chifres curvados, simbolizando poder e força.
Olhos penetrantes e focinho alongado, que demonstram sabedoria.
Escamas brilhantes, geralmente de cor branca ou dourada.
Pérola flamejante (Norbu), que carrega entre as garras e simboliza iluminação espiritual.

A Lenda do Druk e o Budismo
Uma das histórias mais famosas conta que, no século XII, o mestre budista Tsangpa Gyare ouviu o som de um trovão enquanto fundava um mosteiro no Tibete. Ele interpretou isso como um sinal dos dragões celestiais e chamou sua linhagem de Drukpa Kagyu (Escola do Dragão do Trovão).
Quando essa tradição budista chegou ao Butão, o país adotou o Druk como seu símbolo nacional, e seus reis passaram a ser chamados de Druk Gyalpo (Rei Dragão).
</p>
            </div>
            <img src="images/mapanordico.jpg" alt="Mapa" class="mapa">
        </section>
    </main>

<?php
include_once 'footer.php';
?>