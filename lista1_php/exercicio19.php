<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 19</title>
</head>
<body>
    <h1>Exercício 19 - Velocidade média</h1>

    <form method="post">
        <label>Distância:</label>
        <input type="number" step="any" name="distancia" required><br><br>

        <label>Tempo:</label>
        <input type="number" step="any" min="0.01" name="tempo" required><br><br>

        <input type="submit" value="Calcular velocidade média">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $distancia = (float) $_POST['distancia'];
        $tempo = (float) $_POST['tempo'];
        $velocidadeMedia = $distancia / $tempo;

        echo "<p>Velocidade média: $velocidadeMedia</p>";
    }
    ?>
</body>
</html>
