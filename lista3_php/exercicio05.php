<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 5</title>
</head>
<body>
    <h1>Exercício 5 - Raiz quadrada</h1>

    <form method="post">
        <label>Informe um número:</label>
        <input type="number" step="any" min="0" name="numero" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero = (float) $_POST['numero'];
        $raiz = sqrt($numero);

        echo "<p>Raiz quadrada: $raiz</p>";
    }
    ?>
</body>
</html>
