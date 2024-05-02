<!-- Uma empresa precisa reajustar o salário dos seus funcionários,
dando um aumento de acordo com alguns fatores.
Faça um programa que leia o salário atual, o gênero do funcionário e
há quantos anos esse funcionário trabalha na empresa.
No final, mostre o seu novo salário, baseado na tabela a seguir:
- Mulheres
  - menos de 15 anos de empresa: +5%
  - de 15 até 20 anos de empresa: +12%
  - mais de 20 anos de empresa: +23%
- Homens
  - menos de 20 anos de empresa: +3%
  - de 20 até 30 anos de empresa: +13%
  - mais de 30 anos de empresa: +25% -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
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
    <h1>Exercício 9</h1>
    <p>Uma empresa precisa reajustar o salário dos seus funcionários, <br>
dando um aumento de acordo com alguns fatores.<br>
Faça um programa que leia o salário atual, o gênero do funcionário e<br>
há quantos anos esse funcionário trabalha na empresa.<br>
No final, mostre o seu novo salário, baseado na tabela a seguir:<br>
- Mulheres<br>
  - menos de 15 anos de empresa: +5%<br>
  - de 15 até 20 anos de empresa: +12%<br>
  - mais de 20 anos de empresa: +23%<br>
- Homens<br>
  - menos de 20 anos de empresa: +3%<br>
  - de 20 até 30 anos de empresa: +13%<br>
  - mais de 30 anos de empresa: +25%</p>
    <form action="processar.php" method="post">
        <label for="salarioAtual">Salário atual:</label>
        <input type="number" name="salarioAtual">
        <br>
        <label for="genero">Gênero:</label>
        <select name="genero">
            <option value="mulher">Mulher</option>
            <option value="homem">Homem</option>
        </select>
        <br>
        <label for="anosEmpresa">Anos de empresa:</label>
        <input type="number" name="anosEmpresa">
        <br>
        <input type="submit" value="Calcular">
    </form>
    <a href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>


