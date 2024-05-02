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
    <p>Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes)</p>
    <form action="processar.php" method="post">
        <label for="numero1">Digite o primeiro número: </label>
        <input type="number" name="numero1" required>
        <br><br>
        <label for="numero2">Digite o segundo número: </label>
        <input type="number" name="numero2" required>
        <br><br>
        <label for="numero3">Digite o terceiro número: </label>
        <input type="number" name="numero3" required>
        <br><br>
        <input type="submit" value="Ordenar">
    </form>
    <br>
    <a href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>