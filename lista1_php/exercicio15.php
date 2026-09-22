<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 15</title>
</head>
<body>
    <h1>Exercício 15 - Desconto</h1>

    <form method="post">
        <label>Preço:</label>
        <input type="number" step="any" name="preco" required><br><br>

        <label>Percentual de desconto:</label>
        <input type="number" step="any" name="desconto" required><br><br>

        <input type="submit" value="Calcular preço final">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $preco = (float) $_POST['preco'];
        $desconto = (float) $_POST['desconto'];
        $valorDesconto = $preco * ($desconto / 100);
        $precoFinal = $preco - $valorDesconto;

        echo "<p>Preço com desconto: R$ $precoFinal</p>";
    }
    ?>
</body>
</html>
