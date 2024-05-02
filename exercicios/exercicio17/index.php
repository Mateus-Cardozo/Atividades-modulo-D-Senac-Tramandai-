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
    <p>Digite 10 valores númericos e armazene em um vetor. Em seguida, solicite ao usuário um número para multiplicar todos os elementos do vetor.
        <br>O programa deverá exibir o resultado da multiplicação do número dado pelo usuário em todos os elementos armazenados. </p>
    <form action="processar.php" method="post">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<label for='valor$i'>Valor $i:</label>";
            echo "<input type='number' name='valor$i'><br>";
        }
        ?>
        <label for="multiplicador">Número para Multiplicação:</label>
        <input type="number" name="multiplicador"><br>
        <input type="submit" value="Multiplicar">
    </form>
    <a class="back-link" href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
