<?php
session_start();
include('conexao.php');

// Verifica se campos de textos estão vazios 
if (empty($_POST['usuario']) || empty($_POST['senha']) || empty($_POST['email'])) {
    header('location: cadastro.php');
    exit();
} elseif (valida_email($_POST['email']) == false) {
    $_SESSION["emailInvalido"] = true;
    header('location: cadastro.php');
    exit(); 
}

function valida_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Captura os dados do campo de texto
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

// Cria query para mandar no SQL
$queryTeste = "SELECT usuario_id, usuario FROM usuario WHERE usuario = '{$usuario}'";

// Executa a query
$result = mysqli_query($conexao, $queryTeste);

// Retorna a quantidade de linhas retornadas
$row = mysqli_num_rows($result);

if ($row >= 1) {
    $_SESSION["ja_cadastro"] = true;
    header('location: cadastro.php');
    exit();
} elseif (isset($_SESSION["emailInvalido"]) && $_SESSION["emailInvalido"] === true) {
    header('location: cadastro.php');
    exit();
} else {
    // Cria query para mandar no SQL
    $query = "INSERT INTO usuario (email, usuario, senha) VALUES ('{$email}', '{$usuario}', MD5('{$senha}'));";

    // Executa a query
    if (mysqli_query($conexao, $query)) {
        $_SESSION['cadastrado'] = true;
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conexao);
    }
    header('Location: cadastro.php');
    exit();
}
?>