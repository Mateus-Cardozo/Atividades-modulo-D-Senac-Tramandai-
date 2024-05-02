<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Resultado</title>
</head>
<body>
    <h1>Exercício 1 - Resultado</h1>
    <?php
    $notas = array();
    $alunos = array();

    for ($i = 1; $i <= 10; $i++) {
        $nome = $_POST["nome$i"];
        $nota = $_POST["nota$i"];
        $alunos[$nome] = $nota;
        $notas[] = $nota;
    }

    $media = array_sum($notas) / count($notas);

    $aluno_maior_nota = array_search(max($notas), $alunos);

    echo "<p class='result'>Média de Notas da Classe: $media</p>";
    echo "<p class='result'>Aluno com a Maior Nota: $aluno_maior_nota</p>";
    ?>
    <a class="back-link" href="../index.php">Voltar para a lista de exercícios</a>
</body>
</html>
