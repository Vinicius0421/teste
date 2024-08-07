<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5</title>
</head>
<body>
<h1>Selecione um Número para Ver a Tabuada</h1>
    <form method="POST">
        <label for="numero">Escolha um número:</label>
        <select id="numero" name="numero" required>
            <?php
            // Cria as opções de 1 a 9
            for ($i = 1; $i <= 9; $i++) {
                echo "<option value=\"$i\">$i</option>";
            }
            ?>
        </select>
        <br><br>
        <button type="submit">Ver Tabuada</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];

        // Verifica se o número é válido
        if (is_numeric($numero) && $numero >= 1 && $numero <= 9) {
            echo "<h2>Tabuada do $numero</h2>";
            echo "<table border='1' cellpadding='5'>";
            echo "<tr><th>$numero x 1</th><th>$numero x 2</th><th>$numero x 3</th><th>$numero x 4</th><th>$numero x 5</th><th>$numero x 6</th><th>$numero x 7</th><th>$numero x 8</th><th>$numero x 9</th></tr>";
            echo "<tr>";
            for ($i = 1; $i <= 9; $i++) {
                echo "<td>" . ($numero * $i) . "</td>";
            }
            echo "</tr>";
            echo "</table>";
        } else {
            echo "<h2>Erro</h2>";
            echo "<p>Selecione um número válido de 1 a 9.</p>";
        }
    }
    ?>
</body>
</html>