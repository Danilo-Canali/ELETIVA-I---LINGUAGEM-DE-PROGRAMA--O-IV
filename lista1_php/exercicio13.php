<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 13</title>
</head>
<body>
    <h1>Exercício 13 - Quilômetros para milhas</h1>

    <form method="post">
        <label>Valor em quilômetros:</label>
        <input type="number" step="any" name="quilometros" required><br><br>

        <input type="submit" value="Converter">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quilometros = (float) $_POST['quilometros'];
        $milhas = $quilometros * 0.621371;

        echo "<p>Valor em milhas: $milhas</p>";
    }
    ?>
</body>
</html>
