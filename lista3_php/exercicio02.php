<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 2</title>
</head>
<body>
    <h1>Exercício 2 - Maiúsculas e minúsculas</h1>

    <form method="post">
        <label>Informe uma palavra:</label>
        <input type="text" name="palavra" required><br><br>

        <input type="submit" value="Exibir">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $palavra = $_POST['palavra'];

        echo "<p>Maiúsculo: " . strtoupper($palavra) . "</p>";
        echo "<p>Minúsculo: " . strtolower($palavra) . "</p>";
    }
    ?>
</body>
</html>
