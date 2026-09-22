<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 5</title>
</head>
<body>
    <h1>Exercício 5 - Números de 1 até N</h1>

    <form method="post">
        <label>Informe um número:</label>
        <input type="number" min="1" name="numero" required><br><br>

        <input type="submit" value="Exibir">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero = (int) $_POST['numero'];

        for ($i = 1; $i <= $numero; $i++) {
            echo "$i<br>";
        }
    }
    ?>
</body>
</html>
