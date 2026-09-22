<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 7</title>
</head>
<body>
    <h1>Exercício 7 - Contagem regressiva</h1>

    <form method="post">
        <label>Informe um número:</label>
        <input type="number" min="1" name="numero" required><br><br>

        <input type="submit" value="Contar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero = (int) $_POST['numero'];
        $i = $numero;

        do {
            echo "$i<br>";
            $i--;
        } while ($i >= 1);
    }
    ?>
</body>
</html>
