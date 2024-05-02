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
    <p>Crie dois vetores, cada um com capacidade para armazenar 10 números. Solicite ao usuário que entre com os valores nestes dois vetores. 
        <br>O programa deverá mostrar a multiplicação dos dados dos vetores, em cada um de suas respectivas posições. Ex. vetor_a[0] * vetor_b[0] e assim por diante. </p>
    <form action="processar.php" method="post">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<label for='vetorA$i'>Vetor A - Valor $i:</label>";
            echo "<input type='number' name='vetorA$i'><br>";
            echo "<label for='vetorB$i'>Vetor B - Valor $i:</label>";
            echo "<input type='number' name='vetorB$i'><br>";
        }
        ?>
        <input type="submit" value="Multiplicar Vetores">
    </form>
    <a class="back-link" href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
