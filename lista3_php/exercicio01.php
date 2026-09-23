<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 1</title>
</head>
<body>
    <h1>Exercício 1 - Número de caracteres</h1>

    <form method="post">
        <label>Informe uma palavra:</label>
        <input type="text" name="palavra" required><br><br>

        <input type="submit" value="Contar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $palavra = $_POST['palavra'];
        $quantidade = strlen($palavra);

        echo "<p>Número de caracteres: $quantidade</p>";
    }
    ?>
</body>
</html>
