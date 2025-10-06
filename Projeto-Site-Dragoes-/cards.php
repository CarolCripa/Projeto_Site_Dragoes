<?php
include_once 'config/database.php';
include_once 'entity/perguntasCards.php';
include_once 'dao/perguntasCards.DAO.php';
include_once 'header.php';

$sql = "SELECT * FROM imagens_cards";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$perguntas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perguntas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="cards.css">
    
</head>
<body>

<h1 style="text-align:center;">Se você fosse um dragão, qual seria a sua conexão com os elementos da natureza?</h1>

<div class="container">
    <?php foreach ($perguntas as $perguntas): ?>
        <div class="card">
            <img src="images/<?php echo htmlspecialchars($perguntas['imagem']); ?>" alt="">
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>

<?php
include_once 'footer.php';
?>