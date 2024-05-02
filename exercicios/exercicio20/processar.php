<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6 - Resultado</title>
</head>
<body>
    <h1>Exercício 6 - Resultado</h1>
    <?php
    $valores = array();

    for ($i = 1; $i <= 10; $i++) {
        $valor = $_POST["valor$i"];
        $valores[] = $valor;
    }

    $valoresInvertidos = array_reverse($valores);

    echo "<p>Valores na Ordem Contrária:</p>";
    echo "<ul>";
    foreach ($valoresInvertidos as $i => $valor) {
        echo "<li>Valor " . ($i + 1) . ": $valor</li>";
    }
    echo "</ul>";
    ?>
    <a class="back-link" href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
