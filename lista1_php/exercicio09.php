<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 9</title>
</head>
<body>
    <h1>Exercício 9 - Perímetro do retângulo</h1>

    <form method="post">
        <label>Largura:</label>
        <input type="number" step="any" name="largura" required><br><br>

        <label>Altura:</label>
        <input type="number" step="any" name="altura" required><br><br>

        <input type="submit" value="Calcular perímetro">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $largura = (float) $_POST['largura'];
        $altura = (float) $_POST['altura'];
        $perimetro = 2 * ($largura + $altura);

        echo "<p>Perímetro do retângulo: $perimetro</p>";
    }
    ?>
</body>
</html>
