<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de nome de usuário </title>
</head>
<body>
    <h1> Gerador de nome de usuário </h1>
    <form method="post" action="">
        <label for="nome">Nome completo:</label>
        <input type="text" id="nome" name="nome" required>
        <button type="submit">Gerar usuário </button>
    </form>
    <section id="resultado">
        <?php
        $nome = trim($_POST['nome']);
        $semEspacos = str_replace(" ", "", $nome);
        $quantidade = strlen($semEspacos);

        $iniciais = strtoupper(substr($nome, 0, 1));
        for ($i = 1; $i < strlen($nome); $i++) {
            $caractere = substr($nome, $i, 1);

            if ($caractere == " " && $i + 1 < strlen($nome)) {
                $proximo = substr($nome, $i + 1, 1);

                if ($proximo != " ") {
                    $iniciais = $iniciais . "." . strtolower($proximo);
                }
            }
        }
        echo "<p>Iniciais: $iniciais</p>";

        echo "<p>Número de caracteres: $quantidade</p>";
        echo "<p>Minúsculo: " . strtolower($nome) . "</p>";
        ?>
    </section>
</body>
</html>
