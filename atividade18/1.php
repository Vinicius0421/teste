<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
</head>
<body>
    <h1>Calcular Idade</h1>
        <form method="POST">
            <label for="anoNascimento">Ano de Nascimento:</label>
            <input type="text" id="anoNascimento" name="anoNascimento" required>
            <br><br>
            <button type="submit">Calcular Idade</button>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $anoNascimento = $_POST['anoNascimento'];
                if (is_numeric($anoNascimento) && strlen($anoNascimento) == 4) {
                    $anoNascimento = intval($anoNascimento);
                    $anoAtual = 2014;
                    $idade = $anoAtual - $anoNascimento;

                    echo "<h1>Resultado</h1>";
                    echo "<p>Se você nasceu em $anoNascimento, você terá $idade anos em 2014.</p>";
                } else {
                    echo "<h1>Erro</h1>";
                    echo "<p>Por favor, insira um ano de nascimento válido.</p>";
                }
            }
        ?>
</body>
</html>