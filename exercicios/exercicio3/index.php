<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
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
    <h1>Exercício 3</h1>
    <p>Faça um programa que leia a largura e o comprimento de um terreno retangular,
        calculando e mostrando a sua área em m². O programa também deve mostrar a classificação
        desse terreno, de acordo com a lista abaixo:
        <br>
        - Abaixo de 100m² = TERRENO POPULAR
        <br>
        - Entre 100m² e 500m² = TERRENO MASTER
        <br>
        - Acima de 500m² = TERRENO VIP
    </p>
    <form action="processar.php" method="post">
        <label for="largura">Largura (m):</label>
        <input type="number" name="largura">
        <br>
        <label for="comprimento">Comprimento (m):</label>
        <input type="number" name="comprimento">
        <br>
        <input type="submit" value="Calcular">
    </form>
    <a href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>