<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 11</title>
</head>
<body>
    <h1>Exercício 11 - Potência</h1>

    <form method="post">
        <label>Base:</label>
        <input type="number" step="any" name="base" required><br><br>

        <label>Expoente:</label>
        <input type="number" step="any" name="expoente" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $base = (float) $_POST['base'];
        $expoente = (float) $_POST['expoente'];
        $resultado = $base ** $expoente;

        echo "<p>Resultado: $resultado</p>";
    }
    ?>
</body>
</html>
