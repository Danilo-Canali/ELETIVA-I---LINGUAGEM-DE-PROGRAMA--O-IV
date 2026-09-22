<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 6</title>
</head>
<body>
    <h1>Exercício 6 - Soma de 1 até N</h1>

    <form method="post">
        <label>Informe um número:</label>
        <input type="number" min="1" name="numero" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero = (int) $_POST['numero'];
        $i = 1;
        $soma = 0;

        while ($i <= $numero) {
            $soma = $soma + $i;
            $i++;
        }

        echo "<p>Resultado da soma: $soma</p>";
    }
    ?>
</body>
</html>
