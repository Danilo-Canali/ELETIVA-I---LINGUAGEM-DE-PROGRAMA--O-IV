<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 8</title>
</head>
<body>
    <h1>Exercício 8 - Fatorial</h1>

    <form method="post">
        <label>Informe um número:</label>
        <input type="number" min="0" name="numero" required><br><br>

        <input type="submit" value="Calcular fatorial">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero = (int) $_POST['numero'];
        $fatorial = 1;

        for ($i = 1; $i <= $numero; $i++) {
            $fatorial = $fatorial * $i;
        }

        echo "<p>Fatorial de $numero: $fatorial</p>";
    }
    ?>
</body>
</html>
