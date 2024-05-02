<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 - Resultado</title>
</head>
<body>
    <h1>Exercício 2 - Resultado</h1>
    <?php
    $numeros = array();
    $positivos = 0;
    $negativos = 0;
    $pares = 0;
    $impares = 0;

    for ($i = 1; $i <= 10; $i++) {
        $numero = $_POST["numero$i"];
        $numeros[] = $numero;

        if ($numero > 0) {
            $positivos++;
        } elseif ($numero < 0) {
            $negativos++;
        }

        if ($numero % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    echo "<p class='result'>Números Positivos: $positivos</p>";
    echo "<p class='result'>Números Negativos: $negativos</p>";
    echo "<p class='result'>Números Pares: $pares</p>";
    echo "<p class='result'>Números Ímpares: $impares</p>";
    ?>
    <a class="back-link" href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
