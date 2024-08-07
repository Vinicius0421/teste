<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
</head>
<body>
<h1>Calcular Índice de Massa Corporal (IMC)</h1>
    <form method="POST">
        <label for="peso">Peso (kg):</label>
        <input type="text" id="peso" name="peso" required>
        <br><br>
        <label for="altura">Altura (m):</label>
        <input type="text" id="altura" name="altura" required>
        <br><br>
        <button type="submit">Calcular IMC</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        if (is_numeric($peso) && is_numeric($altura) && $altura > 0) {
            $peso = floatval($peso);
            $altura = floatval($altura);
            $imc = $peso / ($altura * $altura);

            echo "<h2>Resultado</h2>";
            echo "<p>Seu IMC é: " . number_format($imc, 2) . "</p>";

            if ($imc > 25) {
                echo "<p>Você está acima do peso!</p>";
            } else {
                echo "<p>Você está saudável!</p>";
            }
        } else {
            echo "<h2>Erro</h2>";
            echo "<p>Por favor, insira valores válidos para peso e altura.</p>";
        }
    }
    ?>

</body>
</html>