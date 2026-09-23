<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 15</title>
</head>
<body>
    <h1>Exercício 15 - Domínio do e-mail</h1>

    <form method="post">
        <label>Informe um e-mail:</label>
        <input type="email" name="email" required><br><br>

        <input type="submit" value="Exibir domínio">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $posicao = strpos($email, "@");

        if ($posicao === false) {
            echo "<p>E-mail inválido.</p>";
        } else {
            $dominio = substr($email, $posicao + 1);
            echo "<p>Domínio: $dominio</p>";
        }
    }
    ?>
</body>
</html>
