<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 8</title>
</head>
<body>
    <h1>Exercício 8 - Área do círculo</h1>

    <form method="post">
        <label>Raio:</label>
        <input type="number" step="any" name="raio" required><br><br>

        <input type="submit" value="Calcular área">
    </form>

    <?php
    define('PI', 3.14);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $raio = (float) $_POST['raio'];
        $area = PI * ($raio ** 2);

        echo "<p>Área do círculo: $area</p>";
    }
    ?>
</body>
</html>
