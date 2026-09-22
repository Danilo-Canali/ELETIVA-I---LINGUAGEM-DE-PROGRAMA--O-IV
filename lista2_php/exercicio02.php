<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 2</title>
</head>
<body>
    <h1>Exercício 2 - Ordem crescente</h1>

    <form method="post">
        <label>Valor A:</label>
        <input type="number" step="any" name="a" required><br><br>

        <label>Valor B:</label>
        <input type="number" step="any" name="b" required><br><br>

        <input type="submit" value="Exibir">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $a = (float) $_POST['a'];
        $b = (float) $_POST['b'];

        if ($a < $b) {
            echo "<p>$a $b</p>";
        } elseif ($a > $b) {
            echo "<p>$b $a</p>";
        } else {
            echo "<p>Números iguais: $a</p>";
        }
    }
    ?>
</body>
</html>
