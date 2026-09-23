<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 12</title>
</head>
<body>
    <h1>Exercício 12 - Senha aleatória</h1>

    <form method="post">
        <input type="submit" value="Gerar senha">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $letras = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $numeros = "0123456789";
        $todos = $letras . $numeros;
        $senha = "";

        $senha = $senha . substr($letras, rand(0, strlen($letras) - 1), 1);
        $senha = $senha . substr($numeros, rand(0, strlen($numeros) - 1), 1);

        for ($i = 2; $i < 8; $i++) {
            $senha = $senha . substr($todos, rand(0, strlen($todos) - 1), 1);
        }

        echo "<p>Senha gerada: $senha</p>";
    }
    ?>
</body>
</html>
