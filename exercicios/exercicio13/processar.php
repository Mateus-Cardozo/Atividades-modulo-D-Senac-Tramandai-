<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Exercício 4</title>
</head>
<body>
    <h1>Resultado - Exercício 4</h1>
    <?php
    $numero = $_POST['numero'];

    $meses = [
        1 => "Janeiro",
        2 => "Fevereiro",
        3 => "Março",
        4 => "Abril",
        5 => "Maio",
        6 => "Junho",
        7 => "Julho",
        8 => "Agosto",
        9 => "Setembro",
        10 => "Outubro",
        11 => "Novembro",
        12 => "Dezembro"
    ];

    if (isset($meses[$numero])) {
        $mes = $meses[$numero];
    } else {
        $mes = "Mês inválido";
    }

    echo "<p>O mês correspondente é: $mes</p>";
    ?>
    <a href="index.php">Voltar para o exercício</a>
    <br>
    <a href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
