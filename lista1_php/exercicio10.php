<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 10</title>
</head>
<body>
    <h1>Exercício 10 - Perímetro do círculo</h1>

    <form method="post">
        <label>Raio:</label>
        <input type="number" step="any" name="raio" required><br><br>

        <input type="submit" value="Calcular perímetro">
    </form>

    <?php
    define('PI', 3.14);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $raio = (float) $_POST['raio'];
        $perimetro = 2 * PI * $raio;

        echo "<p>Perímetro do círculo: $perimetro</p>";
    }
    ?>
</body>
</html>
