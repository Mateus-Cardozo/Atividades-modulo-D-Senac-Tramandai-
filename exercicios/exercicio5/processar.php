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
    $valorCasa = $_POST['valorCasa'];
    $salarioComprador = $_POST['salarioComprador'];
    $anosPagar = $_POST['anosPagar'];

    $prestacaoMaxima = 0.3 * $salarioComprador;
    $prestacaoMensal = $valorCasa / ($anosPagar * 12);

    if ($prestacaoMensal <= $prestacaoMaxima) {
        $mensagem = "Empréstimo Aprovado";
    } else {
        $mensagem = "Empréstimo Negado";
    }

    echo "<p>Valor da casa: R$ " . number_format($valorCasa, 2, ',', '.') . "</p>";
    echo "<p>Salário do comprador: R$ " . number_format($salarioComprador, 2, ',', '.') . "</p>";
    echo "<p>Prestação máxima permitida: R$ " . number_format($prestacaoMaxima, 2, ',', '.') . "</p>";
    echo "<p>$mensagem</p>";
    ?>
    <a href="index.php">Voltar para o exercício</a>
    <br>
    <a href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>

