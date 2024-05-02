<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Exercício 9</title>
</head>
<body>
    <h1>Resultado - Exercício 9</h1>
    <?php
    $salarioAtual = $_POST['salarioAtual'];
    $genero = $_POST['genero'];
    $anosEmpresa = $_POST['anosEmpresa'];

    if ($genero === "mulher") {
        if ($anosEmpresa < 15) {
            $aumento = 0.05;
        } elseif ($anosEmpresa <= 20) {
            $aumento = 0.12;
        } else {
            $aumento = 0.23;
        }
    } else {
        if ($anosEmpresa < 20) {
            $aumento = 0.03;
        } elseif ($anosEmpresa <= 30) {
            $aumento = 0.13;
        } else {
            $aumento = 0.25;
        }
    }

    $novoSalario = $salarioAtual * (1 + $aumento);

    echo "<p>Salário atual: R$ $salarioAtual</p>";
    echo "<p>Gênero: $genero</p>";
    echo "<p>Anos de empresa: $anosEmpresa</p>";
    echo "<p>Novo salário: R$ $novoSalario</p>";
    ?>
    <a href="index.php">Voltar para o exercício</a>
    <br>
    <a href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
