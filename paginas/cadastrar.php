<?php
session_start();
include('conexao.php');

// Função para validar e-mail
function valida_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Verifica se campos de textos estão vazios 
if (empty($_POST['usuario']) || empty($_POST['senha']) || empty($_POST['email'])) {
    header('location: cadastro.php');
    exit();
}

// Verifica se o e-mail é válido
if (valida_email($_POST['email']) === false) {
    $_SESSION["emailInvalido"] = true;
    header('location: cadastro.php');
    exit();
}

// Captura os dados do campo de texto
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

// Verifica se o usuário já está cadastrado
$queryTeste = "SELECT usuario_id, usuario FROM usuario WHERE usuario = '{$usuario}'";
$result = mysqli_query($conexao, $queryTeste);
$row = mysqli_num_rows($result);

if ($row >= 1) {
    $_SESSION["ja_cadastro"] = true;
    header('location: cadastro.php');
    exit();
}

// Se o e-mail foi validado e não há usuário duplicado
// Limpa a variável de sessão emailInvalido
unset($_SESSION["emailInvalido"]);

// Cria query para mandar no SQL
$query = "INSERT INTO usuario (email, usuario, senha) 
VALUES ('{$email}', '{$usuario}', MD5('{$senha}'));";

// Executa a query
if (mysqli_query($conexao, $query)) {
    $_SESSION['cadastrado'] = true;
} else {
    echo "Erro ao cadastrar: " . mysqli_error($conexao);
}
// Redireciona para a página de cadastro
header('Location: cadastro.php');
exit();

?>
