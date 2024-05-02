<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8 - Resultado</title>
</head>
<body>
    <h1>Exercício 8 - Resultado</h1>
    <?php
    $veiculos = array();

    for ($i = 0; $i < 10; $i++) {
        $modelo = $_POST["modelo$i"];
        $fabricante = $_POST["fabricante$i"];
        $cor = $_POST["cor$i"];
        $portas = $_POST["portas$i"];
        $ano = $_POST["ano$i"];
        $veiculos[] = array("Modelo" => $modelo, "Fabricante" => $fabricante, "Cor" => $cor, "Portas" => $portas, "Ano" => $ano);
    }

    echo "<h2>a) Todos os Modelos e Anos dos Veículos</h2>";
    echo "<ul>";
    foreach ($veiculos as $veiculo) {
        echo "<li>Modelo: {$veiculo['Modelo']} - Ano: {$veiculo['Ano']}</li>";
    }
    echo "</ul>";

    echo "<h2>b) Todos os Veículos com Cor Prata</h2>";
    echo "<ul>";
    foreach ($veiculos as $veiculo) {
        if (strtolower($veiculo['Cor']) === 'prata') {
            echo "<li>Modelo: {$veiculo['Modelo']} - Cor: Prata</li>";
        }
    }
    echo "</ul>";

    echo "<h2>c) Todos os Veículos com Cor e Quantidade de Portas</h2>";
    echo "<ul>";
    foreach ($veiculos as $veiculo) {
        echo "<li>Modelo: {$veiculo['Modelo']} - Cor: {$veiculo['Cor']} - Portas: {$veiculo['Portas']}</li>";
    }
    echo "</ul>";

    echo "<h2>d) Todos os Veículos da Ford</h2>";
    echo "<ul>";
    foreach ($veiculos as $veiculo) {
        if (strtolower($veiculo['Fabricante']) === 'ford') {
            echo "<li>Modelo: {$veiculo['Modelo']} - Fabricante: Ford</li>";
        }
    }
    echo "</ul>";

    echo "<h2>e) Todos os Veículos com Ano de Fabricação Igual ou Superior a 2013</h2>";
    echo "<ul>";
    foreach ($veiculos as $veiculo) {
        if ($veiculo['Ano'] >= 2013) {
            echo "<li>Modelo: {$veiculo['Modelo']} - Ano: {$veiculo['Ano']}</li>";
        }
    }
    echo "</ul>";
    ?>
    <a class="back-link" href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
