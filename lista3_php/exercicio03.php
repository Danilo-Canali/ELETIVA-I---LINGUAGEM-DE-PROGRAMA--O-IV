<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
</head>
<body>
    <h1>Exercício 3 - Palavra contida</h1>

    <form method="post">
        <label>Primeira palavra:</label>
        <input type="text" name="palavra1" required><br><br>

        <label>Segunda palavra:</label>
        <input type="text" name="palavra2" required><br><br>

        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $palavra1 = $_POST['palavra1'];
        $palavra2 = $_POST['palavra2'];

        if (strpos($palavra1, $palavra2) === false) {
            echo "<p>A segunda palavra não está contida na primeira.</p>";
        } else {
            echo "<p>A segunda palavra está contida na primeira.</p>";
        }
    }
    ?>
</body>
</html>
