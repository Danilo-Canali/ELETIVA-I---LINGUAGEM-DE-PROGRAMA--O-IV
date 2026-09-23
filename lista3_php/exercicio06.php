<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 6</title>
</head>
<body>
    <h1>Exercício 6 - Arredondamentos</h1>

    <form method="post">
        <label>Informe um número:</label>
        <input type="number" step="any" name="numero" required><br><br>

        <input type="submit" value="Exibir">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero = (float) $_POST['numero'];

        echo "<p>Arredondado para cima: " . ceil($numero) . "</p>";
        echo "<p>Arredondado para baixo: " . floor($numero) . "</p>";
        echo "<p>Arredondado normalmente: " . round($numero) . "</p>";
    }
    ?>
</body>
</html>
