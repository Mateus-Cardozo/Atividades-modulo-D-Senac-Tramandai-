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
        .back-link {
            margin-top: 20px;
            display: block;
            color: #007BFF;
        }
    </style>
</head>
<body>
    <h1>Exercício 7 - Cadastro de Pessoas</h1>
    <p>Utilizando vetores, cadastre 10 pessoas, sendo que você deverá utilizar um vetor para cadastrar cada pessoa. 
        <br> Obtenha seguintes dados do usuário: nome, cidade, idade, sexo. Ao final do cadastro e armazenamento seu programa deverá exibir: 
        <br> 1. Uma listagem de todos os nomes e idades das pessoas cadastradas; 2. Uma listagem de todos os nomes de quem mora em Santos; 
        <br>3. Uma listagem de todos os nomes de quem tem mais de 18 anos; 4. E quantas pessoas cadastradas são do sexo masculino.</p>
    <form action="processar.php" method="post">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<h3>Cadastro da Pessoa $i</h3>";
            echo "<label for='nome$i'>Nome:</label>";
            echo "<input type='text' name='nome$i'><br>";
            echo "<label for='cidade$i'>Cidade:</label>";
            echo "<input type='text' name='cidade$i'><br>";
            echo "<label for='idade$i'>Idade:</label>";
            echo "<input type='number' name='idade$i'><br>";
            echo "<label for='sexo$i'>Sexo:</label>";
            echo "<select name='sexo$i'>";
            echo "<option value='Masculino'>Masculino</option>";
            echo "<option value='Feminino'>Feminino</option>";
            echo "</select><br>";
        }
        ?>
        <input type="submit" value="Cadastrar">
    </form>
    <a class="back-link" href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
