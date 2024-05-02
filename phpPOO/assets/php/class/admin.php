<?php
require_once "../../../config/config.php";
require_once "Usuario.php";
require_once "../DAO/UsuarioDAO.php";


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $idade = $_POST['idade'];
    $senha = $_POST['senha'];

    if (empty($nome) || empty($cpf) || empty($endereco) || empty($idade) || empty($senha)) {
        echo "Todos os campos são obrigatórios.";
    } else {
        $usuario = new Usuario($nome, $cpf, $endereco, $idade, $senha);

        $usuarioDAO = new UsuarioDAO($conn);

        try {
            $usuarioDAO->cadastrar($usuario);
            echo "Usuário cadastrado com sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao cadastrar usuário: " . $e->getMessage();
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['login'])) {
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    if (empty($cpf) || empty($senha)) {
        echo "Todos os campos são obrigatórios.";
        exit;
    }

    $db = require_once 'config.php';
    $usuarioDAO = new UsuarioDAO($db);

    $usuario = $usuarioDAO->buscarPorCpf($cpf);

    if ($usuario && $usuario->getSenhaUsuario() === $senha) {
    
        header("Location: main.php");
        exit;
    } else {
        echo "Credenciais inválidas. Tente novamente.";
        exit;
    }
}
?>
