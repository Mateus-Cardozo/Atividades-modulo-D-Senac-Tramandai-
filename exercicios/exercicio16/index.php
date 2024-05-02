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
    <p>Entre com 10 números e armazene em um vetor. Ao final o programa deverá mostrar: 
        <br>- quantos negativos foram digitados; 
        <br>- quantos positivos foram digitados; 
        <br>- quantos pares e ímpares.</p>
    <form action="processar.php" method="post">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<label for='numero$i'>Número $i:</label>";
            echo "<input type='number' name='numero$i'><br>";
        }
        ?>
        <input type="submit" value="Contar">
    </form>
    <a class="back-link" href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
