<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
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
    <h1>Exercício 7</h1>
    <p>Uma empresa de aluguel de carros precisa cobrar pelos seus serviços. <br>
        O aluguel de um carro custa R$90 por dia para carro popular e R$150 por dia para carro de luxo. <br>
        Além disso, o cliente paga por Km percorrido. Faça um programa que leia o tipo de carro alugado (popular ou luxo), <br>
        quantos dias de aluguel e quantos Km foram percorridos. No final, mostre o preço a ser pago de acordo com a tabela a seguir:<br>
        - Carros populares (aluguel de R$90 por dia)<br>
        - Até 100Km percorridos: R$0,20 por Km<br>
        - Acima de 100Km percorridos: R$0,10 por Km<br>
        - Carros de luxo (aluguel de R$150 por dia)<br>
        - Até 200Km percorridos: R$0,30 por Km<br>
        - Acima de 200Km percorridos: R$0,25 por Km</p>
    <form action="processar.php" method="post">
        <label for="tipoCarro">Tipo de carro:</label>
        <select name="tipoCarro">
            <option value="popular">Popular</option>
            <option value="luxo">Luxo</option>
        </select>
        <br>
        <label for="diasAluguel">Dias de aluguel:</label>
        <input type="number" name="diasAluguel">
        <br>
        <label for="kmPercorridos">Km percorridos:</label>
        <input type="number" name="kmPercorridos">
        <br>
        <input type="submit" value="Calcular">
    </form>
    <a href="../index.php">Voltar para a lista de exercícios</a>
</body>

</html>