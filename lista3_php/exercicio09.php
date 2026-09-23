<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 9</title>
</head>
<body>
    <h1>Exercício 9 - Tratamento de espaços</h1>

    <form method="post">
        <label>Informe uma frase:</label>
        <input type="text" name="frase" required><br><br>

        <input type="submit" value="Exibir">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $frase = $_POST['frase'];
        $semEspacosExtras = trim($frase);
        $semEspacos = str_replace(" ", "", $frase);

        echo "<p>Frase original: $frase</p>";
        echo "<p>Sem espaços extras no início e no final: $semEspacosExtras</p>";
        echo "<p>Sem espaços: $semEspacos</p>";
    }
    ?>
</body>
</html>
