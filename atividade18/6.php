<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Formulário de Votação</h1>
    <form action="formulario_votacao.php" method="POST">
        <label for="nome">Nome (Opcional):</label>
        <input type="text" id="nome" name="nome">
        <br><br>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" min="0" required>
        <br><br>

        <label for="naturalidade">Naturalidade:</label>
        <input type="text" id="naturalidade" name="naturalidade" required>
        <br><br>

        <label for="nacionalidade">Nacionalidade:</label>
        <input type="text" id="nacionalidade" name="nacionalidade" required>
        <br><br>

        <label>Votou na eleição passada?</label>
        <input type="radio" id="sim" name="votou" value="sim">
        <label for="sim">Sim</label>
        <input type="radio" id="nao" name="votou" value="nao">
        <label for="nao">Não</label>
        <br><br>

        <label>Marque os partidos com os quais você se identifica:</label>
        <br>
        <input type="checkbox" id="pt" name="partidos[]" value="pt">
        <label for="pt">PT</label>
        <input type="checkbox" id="psdb" name="partidos[]" value="psdb">
        <label for="psdb">PSDB</label>
        <input type="checkbox" id="democratas" name="partidos[]" value="democratas">
        <label for="democratas">Democratas</label>
        <input type="checkbox" id="pstu" name="partidos[]" value="pstu">
        <label for="pstu">PSTU</label>
        <input type="checkbox" id="outro" name="partidos[]" value="outro">
        <label for="outro">Outro</label>
        <br><br>

        <label for="problemas">Quais são os principais problemas da sua cidade atualmente?</label>
        <br>
        <textarea id="problemas" name="problemas" rows="5" cols="50" required></textarea>
        <br><br>


        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = isset($_POST['nome']) ? $_POST['nome'] : 'Não informado';
        $idade = $_POST['idade'];
        $naturalidade = $_POST['naturalidade'];
        $nacionalidade = $_POST['nacionalidade'];
        $votou = isset($_POST['votou']) ? $_POST['votou'] : 'Não informado';
        $partidos = isset($_POST['partidos']) ? $_POST['partidos'] : [];
        $problemas = $_POST['problemas'];

        echo "<h2>Dados Recebidos</h2>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Idade:</strong> $idade</p>";
        echo "<p><strong>Naturalidade:</strong> $naturalidade</p>";
        echo "<p><strong>Nacionalidade:</strong> $nacionalidade</p>";
        echo "<p><strong>Votou na eleição passada?</strong> $votou</p>";
        echo "<p><strong>Partidos com os quais você se identifica:</strong></p>";
        if (empty($partidos)) {
            echo "<p>Nenhum partido selecionado.</p>";
        } else {
            echo "<ul>";
            foreach ($partidos as $partido) {
                echo "<li>" . htmlspecialchars($partido) . "</li>";
            }
            echo "</ul>";
        }
        echo "<p><strong>Principais problemas da sua cidade atualmente:</strong></p>";
        echo "<p>" . htmlspecialchars($problemas) . "</p>";
    }
    ?>
</body>
</html>