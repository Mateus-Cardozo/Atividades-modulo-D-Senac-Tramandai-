<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Resultado</title>
</head>
<body>
    <h1>Exercício 3 - Resultado</h1>
    <?php
    $valores = array();
    
    for ($i = 1; $i <= 10; $i++) {
        $valor = $_POST["valor$i"];
        $valores[] = $valor;
    }

    $multiplicador = $_POST["multiplicador"];

    $resultado = array_map(function ($valor) use ($multiplicador) {
        return $valor * $multiplicador;
    }, $valores);

    echo "<p class='result'>Resultado da Multiplicação:</p>";
    echo "<ul>";
    foreach ($resultado as $i => $resultado_valor) {
        echo "<li>Valor $i: $resultado_valor</li>";
    }
    echo "</ul>";
    ?>
    <a class="back-link" href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
