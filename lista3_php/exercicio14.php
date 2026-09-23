<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 14</title>
</head>
<body>
    <h1>Exercício 14 - Palíndromo</h1>

    <form method="post">
        <label>Informe uma palavra:</label>
        <input type="text" name="palavra" required><br><br>

        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $palavra = strtolower($_POST['palavra']);
        $invertida = "";

        for ($i = strlen($palavra) - 1; $i >= 0; $i--) {
            $invertida = $invertida . substr($palavra, $i, 1);
        }

        if ($palavra == $invertida) {
            echo "<p>$palavra é palíndromo.</p>";
        } else {
            echo "<p>$palavra não é palíndromo.</p>";
        }
    }
    ?>
</body>
</html>
