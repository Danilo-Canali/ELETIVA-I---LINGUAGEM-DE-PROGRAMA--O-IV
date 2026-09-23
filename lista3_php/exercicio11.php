<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 11</title>
</head>
<body>
    <h1>Exercício 11 - Moeda brasileira</h1>

    <form method="post">
        <label>Informe um valor:</label>
        <input type="number" step="any" name="valor" required><br><br>

        <input type="submit" value="Formatar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $valor = (float) $_POST['valor'];
        $formatado = number_format($valor, 2, ",", ".");

        echo "<p>R$ $formatado</p>";
    }
    ?>
</body>
</html>
