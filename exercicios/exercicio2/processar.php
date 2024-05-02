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

    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $media = ($nota1 + $nota2) / 2;

    if ($media >= 7.0) {
        $mensagem = "Aprovado";
    } elseif ($media >= 5.0) {
        $mensagem = "Recuperação";
    } else {
        $mensagem = "Reprovado";
    }

    echo "<p>A média é: $media</p>";
    echo "<p>Resultado: $mensagem</p>";
    ?>
    <a class="back-link" href="index.php">Voltar para o exercício</a>
    <br>
    <a class="back-link" href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
