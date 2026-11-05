<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta de energia </title>
</head>
<body>
    <h1> Conta de energia</h1>
    <form method="post" action="">
        <label for="consumo">Consumo em kWh:</label>
        <input type="number" id="consumo" name="consumo" required>
        <button type="submit">Calcular</button>
    </form>
    <section id="resultado">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $kWh1 = 0.65;
            $kWh2 = 0.85;
            $consumo = (float) $_POST['consumo'];
            if($consumo <= 100 && $consumo > 0){
            $resultado = ($consumo * $kWh1) + 12 ;
            $formatado = number_format($resultado, 2, ",", ".");
            } 
            elseif ($consumo <= 0){
                $formatado = "Consumo inválido";
            }
            else {
                $excedente = $consumo - 100;
                $resultado = ($excedente * $kWh2) + (100 * $kWh1) + 12;
                $formatado = number_format($resultado, 2, ",", ".");
            }
            echo "<p>Resultado: $formatado</p>";
        }
        ?>
    </section>

</body>
</html>