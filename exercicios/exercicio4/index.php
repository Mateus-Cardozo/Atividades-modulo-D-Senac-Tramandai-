<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
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
    <h1>Exercício 4</h1>
    <p>Desenvolva um programa que leia o nome de um funcionário, seu salário,
<br>
quantos anos ele trabalha na empresa e mostre seu novo salário,
<br>
reajustado de acordo com a tabela a seguir:
<br>
   - Até 3 anos de empresa: aumento de 3%
   <br>
   - entre 3 e 10 anos: aumento de 12.5%
   <br>
   - 10 anos ou mais: aumento de 20%</p>
    <form action="processar.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">
        <br>
        <label for="salario">Salário:</label>
        <input type="number" name="salario">
        <br>
        <label for="anos">Anos de trabalho na empresa:</label>
        <input type="number" name="anos">
        <br>
        <input type="submit" value="Calcular">
    </form>
    <a href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
