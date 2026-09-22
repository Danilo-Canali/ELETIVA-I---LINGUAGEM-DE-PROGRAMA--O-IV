<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 17</title>
</head>
<body>
    <h1>Exercício 17 - Juros compostos</h1>

    <form method="post">
        <label>Capital:</label>
        <input type="number" step="any" name="capital" required><br><br>

        <label>Taxa de juros (ex.: 0.05 para 5%):</label>
        <input type="number" step="any" name="taxa" required><br><br>

        <label>Período:</label>
        <input type="number" step="any" name="periodo" required><br><br>

        <input type="submit" value="Calcular montante">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $capital = (float) $_POST['capital'];
        $taxa = (float) $_POST['taxa'];
        $periodo = (float) $_POST['periodo'];
        $montante = $capital * ((1 + $taxa) ** $periodo);

        echo "<p>Montante: R$ $montante</p>";
    }
    ?>
</body>
</html>
