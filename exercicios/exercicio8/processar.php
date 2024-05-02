<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Exercício 8</title>
</head>
<body>
    <h1>Resultado - Exercício 8</h1>
    <?php
    $horasAtividade = $_POST['horasAtividade'];

    if ($horasAtividade <= 10) {
        $pontos = $horasAtividade * 2;
    } elseif ($horasAtividade <= 20) {
        $pontos = $horasAtividade * 5;
    } else {
        $pontos = $horasAtividade * 10;
    }

    $dinheiro = $pontos * 0.05;
    
    echo "<p>Horas de atividade física no mês: $horasAtividade</p>";
    echo "<p>Pontos ganhos: $pontos</p>";
    echo "<p>Dinheiro ganho: R$ $dinheiro</p>";
    ?>
    <a href="index.php">Voltar para o exercício</a>
    <br>
    <a href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
