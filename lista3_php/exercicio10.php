<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 10</title>
</head>
<body>
    <h1>Exercício 10 - Iniciais do nome</h1>

    <form method="post">
        <label>Informe o nome completo:</label>
        <input type="text" name="nome" required><br><br>

        <input type="submit" value="Exibir iniciais">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = trim($_POST['nome']);
        $iniciais = strtoupper(substr($nome, 0, 1));

        for ($i = 1; $i < strlen($nome); $i++) {
            $caractere = substr($nome, $i, 1);

            if ($caractere == " " && $i + 1 < strlen($nome)) {
                $proximo = substr($nome, $i + 1, 1);

                if ($proximo != " ") {
                    $iniciais = $iniciais . "." . strtoupper($proximo);
                }
            }
        }

        echo "<p>Iniciais: $iniciais</p>";
    }
    ?>
</body>
</html>
