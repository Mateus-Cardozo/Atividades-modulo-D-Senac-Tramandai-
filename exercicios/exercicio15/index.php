<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
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
    <h1>Exercício 1</h1>
    <p>Entre com os dados de 10 alunos de uma classe, recebendo as informações como nome e uma nota do aluno. 
        <br>Armazene estes dados em um vetor. Ao final do programa mostrar a média de nota da classe, 
        <br>e o nome do aluno que obteve maior nota. </p>
    <form action="processar.php" method="post">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<label for='nome$i'>Nome do Aluno $i:</label>";
            echo "<input type='text' name='nome$i'><br>";
            echo "<label for='nota$i'>Nota do Aluno $i:</label>";
            echo "<input type='number' name='nota$i'><br>";
        }
        ?>
        <input type="submit" value="Calcular Média e Maior Nota">
    </form>
    <a class="back-link" href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
