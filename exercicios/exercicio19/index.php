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
    <p>Crie um vetor que armazene o nome de todos os meses do ano. Peça ao usuário que digite um número e ele informe qual o nome do mês correspondente. </p>
    <form action="processar.php" method="post">
        <label for="numeroMes">Número do Mês:</label>
        <input type="number" name="numeroMes" min="1" max="12">
        <br>
        <input type="submit" value="Encontrar Mês">
    </form>
    <a class="back-link" href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
