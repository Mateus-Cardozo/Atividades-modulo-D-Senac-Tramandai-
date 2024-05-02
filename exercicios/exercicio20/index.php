<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
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
        .back-link {
            margin-top: 20px;
            display: block;
            color: #007BFF;
        }
    </style>
</head>
<body>
    <h1>Exercício 6</h1>
    <p>Faça um programa que leia 10 valores e os escreva na ordem contrária à que foram digitados.</p>
    <form action="processar.php" method="post">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<label for='valor$i'>Valor $i:</label>";
            echo "<input type='number' name='valor$i'><br>";
        }
        ?>
        <input type="submit" value="Inverter Ordem">
    </form>
    <a class="back-link" href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
