<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Exercício 6</title>
</head>
<body>
    <h1>Resultado - Exercício 6</h1>
    <?php
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $imc = $peso / ($altura * $altura);

    if ($imc < 18.5) {
        $classificacao = "Abaixo do peso";
    } elseif ($imc < 25) {
        $classificacao = "Peso ideal";
    } elseif ($imc < 30) {
        $classificacao = "Sobrepeso";
    } elseif ($imc < 40) {
        $classificacao = "Obesidade";
    } else {
        $classificacao = "Obesidade mórbida";
    }
    echo "<p>Seu IMC é:". number_format($imc,2) ."</p>";
    echo "<p>Classificação: $classificacao</p>";
    ?>
    <a href="index.php">Voltar para o exercício</a>
    <br>
    <a href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
