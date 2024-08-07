<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4</title>
</head>
<body>
    <h1>Autenticação de Usuário</h1>
    <form method="POST">
        <label for="nome">Nome de Usuário:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        // Verifica se o nome de usuário e a senha são válidos
        if ($nome === "maria" && $senha === "12345") {
            echo "<h2>Resultado</h2>";
            echo "<p>Autenticação realizada com sucesso.</p>";
        } else {
            echo "<h2>Erro</h2>";
            echo "<p>Você não tem permissão de visualizar essa página.</p>";
        }
    }
    ?>
</body>
</html>