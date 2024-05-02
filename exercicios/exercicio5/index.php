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
    <p>Escreva um programa para aprovar ou não o empréstimo bancário para a compra de uma casa. <br>
O programa vai perguntar o valor da casa, o salário do comprador e em quantos anos ele vai pagar. <br>
Calcule o valor da prestação mensal, sabendo que ela não pode exceder 30% do salário ou
então o empréstimo será negado.</p>
    <form action="processar.php" method="post">
        <label for="valorCasa">Valor da casa:</label>
        <input type="number" name="valorCasa">
        <br>
        <label for="salarioComprador">Salário do comprador:</label>
        <input type="number" name="salarioComprador">
        <br>
        <label for="anosPagar">Anos para pagamento:</label>
        <input type="number" name="anosPagar">
        <br>
        <input type="submit" value="Calcular">
    </form>
    <a href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
