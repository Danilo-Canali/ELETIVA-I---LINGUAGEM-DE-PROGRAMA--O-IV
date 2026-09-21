<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 2</title>
</head>
<body>
    <h1>Exercício 2 - Subtração</h1>

    <form method="post">
        <label>Primeiro número:</label>
        <input type="number" step="any" name="numero1" required><br><br>

        <label>Segundo número:</label>
        <input type="number" step="any" name="numero2" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero1 = (float) $_POST['numero1'];
        $numero2 = (float) $_POST['numero2'];
        $resultado = $numero1 - $numero2;

        echo "<p>Resultado: $resultado</p>";
    }
    ?>
</body>
</html>
