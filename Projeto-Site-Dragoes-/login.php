<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criar Conta</title>
    <link rel="stylesheet" href="styles.css">
</head>

<style>

    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-image: url('images/fundologin.png');
    background-size: cover;
    background-position: center;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.form-box {
    background: rgba(255, 255, 255, 0.95);
    padding: 30px;
    border-radius: 10px;
    width: 300px;
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
    display: flex;
    flex-direction: column;
}

.form-box label {
    margin-top: 10px;
    font-weight: bold;
}

.form-box input {
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-box button {
    margin-top: 20px;
    padding: 10px;
    background-color: #336600;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.form-box button:hover {
    background-color: #2d5a00;
}
</style>
<body>
    <div class="container">
        <form action="criar_conta.php" method="POST" class="form-box">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Informe seu e-mail" required>

            <label for="nascimento">Data de nascimento</label>
            <input type="date" id="nascimento" name="nascimento" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Informe seu e-mail" required>

            <label for="telefone">Telefone</label>
            <input type="tel" id="telefone" name="telefone" placeholder="Informe seu telefone" required>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" placeholder="Informe sua senha" required>

            <button type="button" onclick="window.location.href='index.php'">Criar Conta</button>
        </form>
    </div>
</body>
</html>
