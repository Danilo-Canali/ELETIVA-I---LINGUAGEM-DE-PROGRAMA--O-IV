<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 14</title>
</head>
<body>
    <h1>Exercício 14 - IMC</h1>

    <form method="post">
        <label>Peso em kg:</label>
        <input type="number" step="any" name="peso" required><br><br>

        <label>Altura em metros:</label>
        <input type="number" step="any" name="altura" min="0.01" required><br><br>

        <input type="submit" value="Calcular IMC">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $peso = (float) $_POST['peso'];
        $altura = (float) $_POST['altura'];
        $imc = $peso / ($altura ** 2);

        echo "<p>IMC: $imc</p>";
    }
    ?>
</body>
</html>
