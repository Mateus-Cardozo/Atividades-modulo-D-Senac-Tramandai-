<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
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
    <h1>Exercício 2</h1>
    <p>29/08/24</p>
    <p>Crie um programa que leia duas notas de um aluno e calcule a sua média,
        mostrando uma mensagem no final, de acordo com a média atingida:
        <br>
        - Média até 4.9: REPROVADO
        <br>
        - Média entre 5.0 e 6.9: RECUPERAÇÃO
        <br>
        - Média 7.0 ou superior: APROVADO</p>
    <form action="processar.php" method="post">
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1">
        <br>
        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2">
        <br>
        <input type="submit" value="Calcular">
    </form>
    <a class="back-link" href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>