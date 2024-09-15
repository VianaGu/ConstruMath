<?php
session_start();
include('conexao.php');

//verifica se campos de textos estão vazios 
if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('location: index.php');
    exit();
}


//captura os dados do campo de texto
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

//cria query para mandar no sql
$query = "select usuario_id, usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

//executa a query
$result = mysqli_query($conexao, $query);

//retonar a quantidade de linhas retornada
$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION["usuario"]= $usuario;
    header('location: home/painel.php');
    exit();
}else{
    $_SESSION['nao autenticado'] = true;
    header('Location: index.php');
    exit();
}

?>