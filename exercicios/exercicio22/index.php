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
        .back-link {
            margin-top: 20px;
            display: block;
            color: #007BFF;
        }
    </style>
</head>
<body>
    <h1>Exercício 8 - Cadastro de Veículos</h1>
    <p>Crie um programa para cadastrar 10 registros (em uma matriz), conforme abaixo:
        <br> no. registro, modelo, fabricante, cor,portas,ano 0.Uno, Fiat, prata, 4, 2014 1.Fiesta, Ford, preto, 2, 2015 Prof. Andrea Garcia 2.Doblo, Fiat, verde, 4, 2013 3.
        <br>Celta, GM, preto, 2,2012 4.March, Nissan, prata,2,2015 5.Corsa, GM, branco,2,2010 6.Ranger, Ford,prata 4,2012 7.Trail Blazer, branco,GM,4,2014 8.Ecosport, Ford,preto, 4, 2013 </p>
    <form action="processar.php" method="post">
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo "<h3>Cadastro do Veículo " . ($i + 1) . "</h3>";
            echo "<label for='modelo$i'>Modelo:</label>";
            echo "<input type='text' name='modelo$i'><br>";
            echo "<label for='fabricante$i'>Fabricante:</label>";
            echo "<input type='text' name='fabricante$i'><br>";
            echo "<label for='cor$i'>Cor:</label>";
            echo "<input type='text' name='cor$i'><br>";
            echo "<label for='portas$i'>Quantidade de Portas:</label>";
            echo "<input type='number' name='portas$i' min='2'><br>";
            echo "<label for='ano$i'>Ano:</label>";
            echo "<input type='number' name='ano$i' min='1900'><br>";
        }
        ?>
        <input type="submit" value="Cadastrar">
    </form>
    <a class="back-link" href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
