<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
        }

        .result {
            font-weight: bold;
        }

        .back-link {
            margin-top: 20px;
            display: block;
            color: #007BFF;
        }
    </style>
</head>
<body>
    <h1>Exercício 6</h1>
    <p>O Índice de Massa Corpórea (IMC) é um valor calculado baseado na altura e no peso de uma pessoa. <br>
De acordo com o valor do IMC, podemos classificar o indivíduo dentro de certas faixas. <br>
- abaixo de 18.5: Abaixo do peso <br>
- entre 18.5 e 25: Peso ideal <br>
- entre 25 e 30: Sobrepeso<br>
- entre 30 e 40: Obesidade<br>
- acima de 40: Obseidade mórbida<br>
O IMC é calculado pela expressão peso/altura² (peso dividido pelo quadrado da altura) </p>
    <form action="processar.php" method="post">
        <label for="peso">Peso (kg):</label>
        <input type="number" step="0.01" name="peso">
        <br>
        <label for="altura">Altura (m):</label>
        <input type="number" step="0.01" name="altura">
        <br>
        <input type="submit" value="Calcular">
    </form>
    <a href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>

