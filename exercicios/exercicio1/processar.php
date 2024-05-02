<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Resultado</title>
</head>
<body>
    <h1>Exercício 1 - Resultado</h1>
    <?php
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    if ($number1 > $number2) {
        echo "<p class='result'>O primeiro número é maior que o segundo número</p>";
    } elseif ($number1 < $number2) {
        echo "<p class='result'>O segundo número é maior que o primeiro número</p>";
    } else {
        echo "<p class='result'>Não existe valor maior, os dois são iguais</p>";
    }
    ?>
    <a class="back-link" href="index.php">Voltar para o exercício</a>
    <br>
    <a class="back-link" href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
