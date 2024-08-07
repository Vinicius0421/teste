<h1>Calculadora Simples</h1>
    <form method="POST">
        <label for="numero1">Número 1:</label>
        <input type="number" id="numero1" name="numero1" step="any" required>
        <br><br>

        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="numero2" step="any" required>
        <br><br>

        <label for="operacao">Escolha a operação:</label>
        <select id="operacao" name="operacao" required>
            <option value="">Selecione uma operação</option>
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select>
        <br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacao = $_POST['operacao'];

        $resultado = null;
        switch ($operacao) {
            case 'soma':
                $resultado = $numero1 + $numero2;
                $operacao_str = '+';
                break;
            case 'subtracao':
                $resultado = $numero1 - $numero2;
                $operacao_str = '-';
                break;
            case 'multiplicacao':
                $resultado = $numero1 * $numero2;
                $operacao_str = '*';
                break;
            case 'divisao':
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                    $operacao_str = '/';
                } else {
                    echo "<h2>Erro</h2>";
                    echo "<p>Não é possível dividir por zero!</p>";
                    $resultado = null;
                }
                break;
            default:
                echo "<h2>Erro</h2>";
                echo "<p>Operação inválida.</p>";
                $resultado = null;
                break;
        }

        if ($resultado !== null) {
            echo "<h2>Resultado</h2>";
            echo "<p>$numero1 $operacao_str $numero2 = $resultado</p>";
        }
    }
    ?>