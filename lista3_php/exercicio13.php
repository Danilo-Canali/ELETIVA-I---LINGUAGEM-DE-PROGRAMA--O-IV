<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 13</title>
</head>
<body>
    <h1>Exercício 13 - Palavras da frase</h1>

    <form method="post">
        <label>Informe uma frase:</label>
        <input type="text" name="frase" required><br><br>

        <input type="submit" value="Analisar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $frase = trim($_POST['frase']);
        $quantidade = 0;
        $maiorPalavra = "";
        $palavraAtual = "";

        for ($i = 0; $i < strlen($frase); $i++) {
            $caractere = substr($frase, $i, 1);

            if ($caractere != " ") {
                $palavraAtual = $palavraAtual . $caractere;
            } else {
                if ($palavraAtual != "") {
                    $quantidade++;

                    if (strlen($palavraAtual) > strlen($maiorPalavra)) {
                        $maiorPalavra = $palavraAtual;
                    }

                    $palavraAtual = "";
                }
            }
        }

        if ($palavraAtual != "") {
            $quantidade++;

            if (strlen($palavraAtual) > strlen($maiorPalavra)) {
                $maiorPalavra = $palavraAtual;
            }
        }

        echo "<p>Número total de palavras: $quantidade</p>";
        echo "<p>Maior palavra: $maiorPalavra</p>";
    }
    ?>
</body>
</html>
