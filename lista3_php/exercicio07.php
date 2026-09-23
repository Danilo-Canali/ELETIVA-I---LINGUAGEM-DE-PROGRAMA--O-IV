<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 7</title>
</head>
<body>
    <h1>Exercício 7 - Palavra invertida</h1>

    <form method="post">
        <label>Informe uma palavra:</label>
        <input type="text" name="palavra" required><br><br>

        <input type="submit" value="Inverter">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $palavra = $_POST['palavra'];
        $invertida = "";

        for ($i = strlen($palavra) - 1; $i >= 0; $i--) {
            $invertida = $invertida . substr($palavra, $i, 1);
        }

        echo "<p>Palavra invertida: $invertida</p>";
    }
    ?>
</body>
</html>
