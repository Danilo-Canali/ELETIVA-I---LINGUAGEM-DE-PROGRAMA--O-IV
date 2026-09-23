<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 4</title>
</head>
<body>
    <h1>Exercício 4 - Data válida</h1>

    <form method="post">
        <label>Dia:</label>
        <input type="number" min="1" max="31" name="dia" required><br><br>

        <label>Mês:</label>
        <input type="number" min="1" max="12" name="mes" required><br><br>

        <label>Ano:</label>
        <input type="number" min="1" name="ano" required><br><br>

        <input type="submit" value="Verificar data">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $dia = (int) $_POST['dia'];
        $mes = (int) $_POST['mes'];
        $ano = (int) $_POST['ano'];

        if (checkdate($mes, $dia, $ano)) {
            if ($dia < 10) {
                $dia = "0" . $dia;
            }

            if ($mes < 10) {
                $mes = "0" . $mes;
            }

            echo "<p>Data válida: $dia/$mes/$ano</p>";
        } else {
            echo "<p>Data inválida.</p>";
        }
    }
    ?>
</body>
</html>
