<?php
session_start();
include('conexao.php');

//verifica se campos de textos estão vazios 
if (empty($_POST['usuario']) || empty($_POST['senha']) || empty($_POST['email'])) {
    header('location: index.php');
    exit();
}


//captura os dados do campo de texto
$email = mysqli_real_escape_string($conexao,$_POST['email']);
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);


//cria query para mandar no sql
$queryTeste = "select usuario_id, usuario from usuario where usuario = '{$usuario}'";

//executa a query
$result = mysqli_query($conexao, $queryTeste);

//retonar a quantidade de linhas retornada
$row = mysqli_num_rows($result);

if ($row >= 1) {
    $_SESSION["ja_cadastro"] = true;
    header('location: cadastro.php');
    exit();
}else{
    //cria query para mandar no sql
    $query = "INSERT INTO
    usuario
    (email, usuario, senha)
    VALUES
    ('{$email}','{$usuario}', md5('{$senha}'));";


    //executa a query
    mysqli_query($conexao, $query);
        $_SESSION['cadastrado'] = true;
        header('Location: cadastro.php');
    exit();
}

?>