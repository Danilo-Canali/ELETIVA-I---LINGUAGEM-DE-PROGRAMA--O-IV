<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 5</title>
</head>
<body>
    <h1>Exercício 5 - Celsius para Fahrenheit</h1>

    <form method="post">
        <label>Temperatura em Celsius:</label>
        <input type="number" step="any" name="celsius" required><br><br>

        <input type="submit" value="Converter">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $celsius = (float) $_POST['celsius'];
        $fahrenheit = ($celsius * 9 / 5) + 32;

        echo "<p>Temperatura em Fahrenheit: $fahrenheit °F</p>";
    }
    ?>
</body>
</html>
