<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Exercício 3</title>
</head>
<body>
    <h1>Resultado - Exercício 3</h1>
    <?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];

    $numeros = [$numero1, $numero2, $numero3];

    sort($numeros, SORT_NUMERIC);

    echo "<p>Números em ordem decrescente: " . implode(", ", $numeros) . "</p>";
    ?>
    <a href="index.php">Voltar para o exercício</a>
    <br>
    <a href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
