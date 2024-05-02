<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Exercício 1</title>
</head>
<body>
    <h1>Resultado - Exercício 1</h1>
    <?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    $soma = $numero1 + $numero2;

    if ($soma > 20) {
        $resultado = $soma + 8;
    } else {
        $resultado = $soma - 5;
    }

    echo "<p>O resultado da operação é: $resultado</p>";
    ?>
    <a href="index.php">Voltar para o exercício</a>
    <br>
    <a href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>

