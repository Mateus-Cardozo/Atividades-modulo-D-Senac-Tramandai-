<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
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
    <h1>Exercício 5</h1>
    <p>Criar um algoritmos que leia um número e imprima todos os número de 1 até ele</p>
    <form action="processar.php" method="post">
        <label for="numero">Digite um número: </label>
        <input type="number" name="numero" required>
        <br><br>
        <input type="submit" value="Exibir Números">
    </form>
    <br>
    <a href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>