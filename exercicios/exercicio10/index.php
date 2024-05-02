<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
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
    <h1>Exercício 1</h1>
    <p>Construir um algoritmo que leia 2 números e efetue a adição. <br>
        Caso o valor somado seja maior que 20, este deverá ser apresentando somando-se a ele mais 8; <br>
        caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5</p>
        <form action="processar.php" method="post">
        <label for="numero1">Digite o primeiro número: </label>
        <input type="number" name="numero1" required>
        <br><br>
        <label for="numero2">Digite o segundo número: </label>
        <input type="number" name="numero2" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>
    <br>
    <a href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>