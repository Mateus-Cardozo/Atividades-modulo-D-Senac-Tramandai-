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
    $nome = $_POST['nome'];
    $salario = $_POST['salario'];
    $anos = $_POST['anos'];

    if ($anos < 3) {
        $aumento = $salario * 0.03;
    } elseif ($anos <= 10) {
        $aumento = $salario * 0.125;
    } else {
        $aumento = $salario * 0.20;
    }
    $novoSalario = $salario + $aumento;
    echo "<p>Nome: $nome</p>";
    echo "<p>Salário atual: R$ $salario</p>";
    echo "<p>Novo salário: R$ $novoSalario</p>";
    ?>
    <a href="index.php">Voltar para o exercício</a>
    <br>
    <a href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>