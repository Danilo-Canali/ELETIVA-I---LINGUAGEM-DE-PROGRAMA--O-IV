<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 9</title>
</head>
<body>
    <h1>Exercício 9 - Tabuada</h1>

    <form method="post">
        <label>Informe um número:</label>
        <input type="number" name="numero" required><br><br>

        <input type="submit" value="Exibir tabuada">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero = (int) $_POST['numero'];

        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado<br>";
        }
    }
    ?>
</body>
</html>
