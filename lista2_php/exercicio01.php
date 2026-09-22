<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 1</title>
</head>
<body>
    <h1>Exercício 1 - Soma dos valores</h1>

    <form method="post">
        <label>Valor A:</label>
        <input type="number" step="any" name="a" required><br><br>

        <label>Valor B:</label>
        <input type="number" step="any" name="b" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $a = (float) $_POST['a'];
        $b = (float) $_POST['b'];
        $soma = $a + $b;

        if ($a == $b) {
            $resultado = $soma * 3;
        } else {
            $resultado = $soma;
        }

        echo "<p>Resultado: $resultado</p>";
    }
    ?>
</body>
</html>
