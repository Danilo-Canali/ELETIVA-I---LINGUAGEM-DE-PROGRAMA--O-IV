<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 12</title>
</head>
<body>
    <h1>Exercício 12 - Metros para centímetros</h1>

    <form method="post">
        <label>Valor em metros:</label>
        <input type="number" step="any" name="metros" required><br><br>

        <input type="submit" value="Converter">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $metros = (float) $_POST['metros'];
        $centimetros = $metros * 100;

        echo "<p>Valor em centímetros: $centimetros cm</p>";
    }
    ?>
</body>
</html>
