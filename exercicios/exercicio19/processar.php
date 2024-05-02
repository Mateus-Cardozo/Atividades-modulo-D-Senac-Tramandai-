<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - Resultado</title>
</head>

<body>
    <h1>Exercício 5 - Resultado</h1>
    <?php
    $numeroMes = $_POST["numeroMes"];
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
        12 => "Dezembro",
    ];

    if (isset($meses[$numeroMes])) {
        $nomeMes = $meses[$numeroMes];
        echo "<p class='result'>Mês correspondente ao número $numeroMes: $nomeMes</p>";
    } else {
        echo "<p class='result'>Número de mês inválido. Digite um número entre 1 e 12.</p>";
    }
    ?>
    <a class="back-link" href="../index.php">Voltar para a lista de exercícios</a>
</body>

</html>