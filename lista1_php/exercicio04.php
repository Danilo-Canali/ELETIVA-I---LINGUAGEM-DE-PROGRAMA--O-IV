<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 4</title>
</head>
<body>
    <h1>Exercício 4 - Média de três notas</h1>

    <form method="post">
        <label>Nota 1:</label>
        <input type="number" step="any" name="nota1" required><br><br>

        <label>Nota 2:</label>
        <input type="number" step="any" name="nota2" required><br><br>

        <label>Nota 3:</label>
        <input type="number" step="any" name="nota3" required><br><br>

        <input type="submit" value="Calcular média">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nota1 = (float) $_POST['nota1'];
        $nota2 = (float) $_POST['nota2'];
        $nota3 = (float) $_POST['nota3'];
        $media = ($nota1 + $nota2 + $nota3) / 3;

        echo "<p>Média: $media</p>";
    }
    ?>
</body>
</html>
