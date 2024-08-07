<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
</head>
<body>
<h1>Calcular Área e Perímetro do Retângulo</h1>
    <form method="POST">
        <label for="lado1">Lado 1:</label>
        <input type="text" id="lado1" name="lado1" required>
        <br><br>
        <label for="lado2">Lado 2:</label>
        <input type="text" id="lado2" name="lado2" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado1 = $_POST['lado1'];
        $lado2 = $_POST['lado2'];
        if (is_numeric($lado1) && is_numeric($lado2) && $lado1 > 0 && $lado2 > 0) {
            $lado1 = floatval($lado1);
            $lado2 = floatval($lado2);
            $area = $lado1 * $lado2;
            $perimetro = 2 * ($lado1 + $lado2);

            echo "<h1>Resultado</h1>";
            echo "<p>Área do Retângulo: $area</p>";
            echo "<p>Perímetro do Retângulo: $perimetro</p>";
        } else {
            echo "<h1>Erro</h1>";
            echo "<p>Por favor, insira valores válidos para os lados do retângulo.</p>";
        }
    }
    ?>
</body>
</html>