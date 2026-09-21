<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 6</title>
</head>
<body>
    <h1>Exercício 6 - Fahrenheit para Celsius</h1>

    <form method="post">
        <label>Temperatura em Fahrenheit:</label>
        <input type="number" step="any" name="fahrenheit" required><br><br>

        <input type="submit" value="Converter">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fahrenheit = (float) $_POST['fahrenheit'];
        $celsius = ($fahrenheit - 32) * 5 / 9;

        echo "<p>Temperatura em Celsius: $celsius °C</p>";
    }
    ?>
</body>
</html>
