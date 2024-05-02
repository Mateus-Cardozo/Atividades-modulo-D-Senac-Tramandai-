<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Exercício 2</title>
</head>
<body>
    <h1>Resultado - Exercício 2</h1>
    <?php
    $numero = $_POST['numero'];

    $divisiveis = [];

    if ($numero % 10 === 0) {
        $divisiveis[] = "10";
    }

    if ($numero % 5 === 0) {
        $divisiveis[] = "5";
    }

    if ($numero % 2 === 0) {
        $divisiveis[] = "2";
    }

    if (empty($divisiveis)) {
        $mensagem = "Não é divisível por 10, 5 ou 2.";
    } else {
        $mensagem = "É divisível por " . implode(", ", $divisiveis);
    }

    echo "<p>$mensagem</p>";
    ?>
    <a href="index.php">Voltar para o exercício</a>
    <br>
    <a href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
