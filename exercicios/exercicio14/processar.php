<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Exercício 5</title>
</head>
<body>
    <h1>Resultado - Exercício 5</h1>
    <?php
    $numero = $_POST['numero'];

    $numeros = range(1, $numero);

    echo "<p>Números de 1 até $numero: " . implode(", ", $numeros) . "</p>";
    ?>
    <a href="index.php">Voltar para o exercício</a>
    <br>
    <a href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
