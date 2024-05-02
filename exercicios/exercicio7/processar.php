<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Exercício 7</title>
</head>
<body>
    <h1>Resultado - Exercício 7</h1>
    <?php
    $tipoCarro = $_POST['tipoCarro'];
    $diasAluguel = $_POST['diasAluguel'];
    $kmPercorridos = $_POST['kmPercorridos'];

    if ($tipoCarro === "popular") {
        $valorBase = 90;
        if ($kmPercorridos <= 100) {
            $valorKm = 0.20;
        } else {
            $valorKm = 0.10;
        }
    } else {
        $valorBase = 150;
        if ($kmPercorridos <= 200) {
            $valorKm = 0.30;
        } else {
            $valorKm = 0.25;
        }
    }

    $valorTotal = ($valorBase * $diasAluguel) + ($valorKm * $kmPercorridos);

    echo "<p>Tipo de carro: $tipoCarro</p>";
    echo "<p>Dias de aluguel: $diasAluguel</p>";
    echo "<p>Km percorridos: $kmPercorridos</p>";
    echo "<p>Valor total a pagar: R$ $valorTotal</p>";
    ?>
    <a href="index.php">Voltar para o exercício</a>
    <br>
    <a href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>

