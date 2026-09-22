<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 18</title>
</head>
<body>
    <h1>Exercício 18 - Dias para horas, minutos e segundos</h1>

    <form method="post">
        <label>Quantidade de dias:</label>
        <input type="number" step="any" name="dias" required><br><br>

        <input type="submit" value="Converter">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $dias = (float) $_POST['dias'];
        $horas = $dias * 24;
        $minutos = $horas * 60;
        $segundos = $minutos * 60;

        echo "<p>Horas: $horas</p>";
        echo "<p>Minutos: $minutos</p>";
        echo "<p>Segundos: $segundos</p>";
    }
    ?>
</body>
</html>
