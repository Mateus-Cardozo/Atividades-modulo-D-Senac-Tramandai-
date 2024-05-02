<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 - Resultado</title>
</head>
<body>
    <h1>Exercício 4 - Resultado</h1>
    <?php
    $vetorA = array();
    $vetorB = array();
    $resultado = array();

    for ($i = 1; $i <= 10; $i++) {
        $valorA = $_POST["vetorA$i"];
        $valorB = $_POST["vetorB$i"];
        $vetorA[] = $valorA;
        $vetorB[] = $valorB;
        $resultado[] = $valorA * $valorB;
    }

    echo "<p class='result'>Resultado da Multiplicação dos Vetores:</p>";
    echo "<ul>";
    foreach ($resultado as $i => $resultado_valor) {
        echo "<li>Vetor A[$i] * Vetor B[$i] = $resultado_valor</li>";
    }
    echo "</ul>";
    ?>
    <a class="back-link" href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
