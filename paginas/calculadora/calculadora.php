<?php
include("../verifica_login.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/NavBar.css">
    <script defer src="../js/mobile-navbar.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Página de Cálculos</title>
    <style>
        /* Barra de navegação */
        nav {
            background-color: #004A8D;
            width: 100%;
            padding: 0 50px 0 30px;
            position: fixed; /* Fixar no topo */
            top: 0;
            left: 0;
            z-index: 1000; /* Para garantir que a barra fique no topo da camada */
        }

        nav .ajustaLogo {
            display: flex;
            align-items: left;
        }
    
        nav ul li a {
            color: white;
            text-decoration: none;
            padding: 15px;
            font-size: 18px;
        }

        nav ul li a:hover, nav ul li a.active {
            background-color: #002D5A; /* Um tom mais escuro de azul para hover */
            border-radius: 5px;
        }

        /* Estilos para o corpo e os botões */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding-top: 80px; /* Compensa o espaço da barra de navegação */
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            max-width: 600px;
        }

        .container button {
            padding: 15px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #004A8D; /* Cor de fundo do botão */
            color: white; /* Texto branco */
            transition: background-color 0.3s;
            margin-bottom: 10px;
            width: 100%; /* Botões ocupando toda a largura do container */
            max-width: 400px;
        }

        .container button:hover {
            background-color: #002D5A; /* Um tom mais escuro de azul para hover */
        }

        .bottom-buttons {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .bottom-button {
            padding: 15px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #004A8D; /* Cor de fundo do botão */
            color: white; /* Texto branco */
            transition: background-color 0.3s;
            width: 100%;
            max-width: 400px;
        }

        .bottom-button:hover {
            background-color: #002D5A; /* Um tom mais escuro de azul para hover */
        }
    </style>
</head>
<body>
<!-- Navigation bar  -->
<header>
    <nav>
        <div class="ajustaLogo">
            <img src="../img/logo.jpg" alt="Logo" class="logoImg" style="height: 50px;">
            <a class="logo" href="../home/painel.php">ConstruMath</a>
        </div>
        <!-- Botão Mobile -->
        <div class="menu-btn">
            <i class="fa fa-bars fa-2x" onclick="menuShow();"></i>
        </div>
        <!-- Botão Mobile -->
        <ul class="nav-list">
            <li><a href="../home/painel.php">Home</a></li>
            <li><a href="../oQueConstruir/oQueConstruir.php">O que quer construir?</a></li>
            <li><a href="../materiais/materiais.php">Lista de Materiais</a></li>
            <li><a href="../calculadora/calculadora.php" class="active">Calculadora</a></li>
            <li><a href="../logout.php">Sair</a></li>
        </ul> 
    </nav>
</header>

<!-- Conteúdo principal -->
<div class="container">
    <button onclick="location.href='CalculoDeMateriais.php'">Cálculo de materiais</button>
    <button onclick="location.href='PesoDoPedregulho.php'">Peso do pedregulho</button>
    <button onclick="location.href='CalculoDeCimento.php'">Cálculo de cimento</button>
    <button onclick="location.href='CalculoDeConcreto.php'">Cálculo de concreto</button>
</div>

<div class="bottom-buttons">
    <button class="bottom-button" onclick="location.href='CalculadoraDeAreiaPorMetroCubico.php'">Cálculo de areia por metro cúbico</button>
    <button class="bottom-button" onclick="location.href='CalculadoraDeBritaPorMetroCubico.php'">Cálculo de brita por metro cúbico</button>
</div>

</body>
</html>
