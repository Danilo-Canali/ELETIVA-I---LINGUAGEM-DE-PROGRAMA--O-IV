<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
</head>
<body>
    <h1>Exercício 3 - Desconto do produto</h1>

    <form method="post">
        <label>Valor do produto:</label>
        <input type="number" step="any" min="0" name="valor" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $valor = (float) $_POST['valor'];

        if ($valor > 100) {
            $desconto = $valor * 0.15;
            $novoValor = $valor - $desconto;
            echo "<p>Valor com desconto: R$ $novoValor</p>";
        } else {
            echo "<p>Valor do produto: R$ $valor</p>";
        }
    }
    ?>
</body>
</html>
