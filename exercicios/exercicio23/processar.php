<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Veículos</title>
</head>
<body>
    <h1>Listagem de Veículos</h1>
    <?php
    $veiculos = array(
        array("Modelo" => "Uno", "Fabricante" => "Fiat", "Cor" => "Prata", "Portas" => 4, "Ano" => 2014),
        array("Modelo" => "Fiesta", "Fabricante" => "Ford", "Cor" => "Preto", "Portas" => 2, "Ano" => 2015),
        array("Modelo" => "Doblo", "Fabricante" => "Fiat", "Cor" => "Verde", "Portas" => 4, "Ano" => 2013),
        array("Modelo" => "Celta", "Fabricante" => "GM", "Cor" => "Preto", "Portas" => 2, "Ano" => 2012),
        array("Modelo" => "March", "Fabricante" => "Nissan", "Cor" => "Prata", "Portas" => 2, "Ano" => 2015),
        array("Modelo" => "Corsa", "Fabricante" => "GM", "Cor" => "Branco", "Portas" => 2, "Ano" => 2010),
        array("Modelo" => "Ranger", "Fabricante" => "Ford", "Cor" => "Prata", "Portas" => 4, "Ano" => 2012),
        array("Modelo" => "Trail Blazer", "Fabricante" => "GM", "Cor" => "Branco", "Portas" => 4, "Ano" => 2014),
        array("Modelo" => "Ecosport", "Fabricante" => "Ford", "Cor" => "Preto", "Portas" => 4, "Ano" => 2013),
        array("Modelo" => "Tucson", "Fabricante" => "Hyundai", "Cor" => "Vinho", "Portas" => 4, "Ano" => 2012)
    );

    echo "<h2>Listagem de Veículos:</h2>";
    echo "<ul>";
    foreach ($veiculos as $veiculo) {
        echo "<li>Modelo: {$veiculo['Modelo']} - Fabricante: {$veiculo['Fabricante']} - Cor: {$veiculo['Cor']} - Portas: {$veiculo['Portas']} - Ano: {$veiculo['Ano']}</li>";
    }
    echo "</ul>";
    ?>
    <a class="back-link" href="index.php">Voltar para a lista de exercícios</a>
</body>
</html>
