<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 8</title>
</head>
<body>
    <h1>Exercício 8 - Quantidade de vogais</h1>

    <form method="post">
        <label>Informe uma frase:</label>
        <input type="text" name="frase" required><br><br>

        <input type="submit" value="Contar vogais">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $frase = strtolower($_POST['frase']);
        $quantidade = 0;

        for ($i = 0; $i < strlen($frase); $i++) {
            $letra = substr($frase, $i, 1);

            if ($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u") {
                $quantidade++;
            }
        }

        echo "<p>Quantidade de vogais: $quantidade</p>";
    }
    ?>
</body>
</html>
