<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7 - Resultado</title>
</head>
<body>
    <h1>Exercício 7 - Resultado</h1>
    <?php
    $pessoas = array();

    for ($i = 1; $i <= 10; $i++) {
        $nome = $_POST["nome$i"];
        $cidade = $_POST["cidade$i"];
        $idade = $_POST["idade$i"];
        $sexo = $_POST["sexo$i"];
        $pessoas[] = array("Nome" => $nome, "Cidade" => $cidade, "Idade" => $idade, "Sexo" => $sexo);
    }

    echo "<h2>1. Listagem de Nomes e Idades</h2>";
    echo "<ul>";
    foreach ($pessoas as $pessoa) {
        echo "<li>{$pessoa['Nome']} - {$pessoa['Idade']} anos</li>";
    }
    echo "</ul>";

    echo "<h2>2. Listagem de Nomes de quem Mora em Santos</h2>";
    echo "<ul>";
    foreach ($pessoas as $pessoa) {
        if (strtolower($pessoa['Cidade']) === 'santos') {
            echo "<li>{$pessoa['Nome']}</li>";
        }
    }
    echo "</ul>";

    echo "<h2>3. Listagem de Nomes de quem Tem mais de 18 anos</h2>";
    echo "<ul>";
    foreach ($pessoas as $pessoa) {
        if ($pessoa['Idade'] > 18) {
            echo "<li>{$pessoa['Nome']}</li>";
        }
    }
    echo "</ul>";

    $contagemMasculino = 0;
    foreach ($pessoas as $pessoa) {
        if (strtolower($pessoa['Sexo']) === 'masculino') {
            $contagemMasculino++;
        }
    }
    echo "<h2>4. Quantidade de Pessoas do Sexo Masculino: $contagemMasculino</h2>";
    ?>
    <a href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
</html>
