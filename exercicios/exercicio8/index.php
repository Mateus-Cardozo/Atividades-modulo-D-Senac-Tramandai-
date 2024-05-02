<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
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
    <h1>Exercício 8</h1>
    <p>Um programa de vida saudável quer dar pontos atividades físicas que podem ser trocados por dinheiro. <br>
O sistema funciona assim:<br>
- Cada hora de atividade física no mês vale pontos<br>
  - até 10h de atividade no mês: ganha 2 pontos por hora<br>
  - de 10h até 20h de atividade no mês: ganha 5 pontos por hora<br>
  - acima de 20h de atividade no mês: ganha 10 pontos por hora<br>
- A cada ponto ganho, o cliente fatura R$0,05 (5 centavos)<br>
Faça um programa que leia quantas horas de atividade uma pessoa teve por mês,<br>
calcule e mostre quantos pontos ela teve e quanto dinheiro ela conseguiu ganhar.</p>
    <form action="processar.php" method="post">
        <label for="horasAtividade">Horas de atividade física no mês:</label>
        <input type="number" name="horasAtividade">
        <br>
        <input type="submit" value="Calcular">
    </form>
    <a href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
