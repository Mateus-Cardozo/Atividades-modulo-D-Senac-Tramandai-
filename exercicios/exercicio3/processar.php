<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Exercício 3</title>
</head>
<body>
    <h1>Resultado - Exercício 3</h1>
    <?php
    $largura = $_POST['largura'];
    $comprimento = $_POST['comprimento'];
    $area = $largura * $comprimento;

    if ($area < 100) {
        $classificacao = "Terreno Popular";
    } elseif ($area <= 500) {
        $classificacao = "Terreno Master";
    } else {
        $classificacao = "Terreno VIP";
    }

    echo "<p>A área do terreno é: $area m²</p>";
    echo "<p>Classificação: $classificacao</p>";
    ?>
    <a href="index.php">Voltar para o exercício</a>
    <br>
    <a href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
