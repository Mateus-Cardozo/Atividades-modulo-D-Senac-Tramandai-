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
    <p>Escreva um algoritmo que leia dois números inteiros e compare-os,
mostrando na tela uma das mensagens abaixo:
<br>
   - O primeiro valor é o maior
   <br>
   - O segundo valor é o maior
   <br>
   - Não existe valor maior, os dois são iguais</p>
    <form action="processar.php" method="post">
        <label for="number1">Número 1:</label>
        <input type="number" name="number1">
        <br>
        <label for="number2">Número 2:</label>
        <input type="number" name="number2">
        <br>
        <input type="submit" value="Comparar">
    </form>
    <a class="back-link" href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
