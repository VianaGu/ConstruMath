<?php
include("../verifica_login.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cálculos</title>
    <link rel="stylesheet" href="../css/NavBar.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            justify-content: space-between;
            width: 80%;
            max-width: 800px;
        }

        .container button {
            padding: 15px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            transition: background-color 0.3s;
        }

        .container button:hover {
            background-color: #45a049;
        }

        .bottom-button {
            margin-top: 20px;
            padding: 15px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            transition: background-color 0.3s;
        }

        .bottom-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<!-- Navigation bar  -->
<header>
        <nav>
			<!-- logo -->
            <div class="ajustaLogo">
                <img src="../img\logo.jpg" alt="Logo" class="logoImg">
                <a class="logo" href="../home/painel.php">ConstruMath</a>
            </div>
			<!-- fim logo -->
			<!-- Botão Mobile -->
            <div class="menu-btn">
                <i class="fa fa-bars fa-2x" onclick="menuShow();"></i>
            </div>
			<!-- Botão Mobile -->
			<!-- Lista de abas -->
            <ul class="nav-list">
                <!--  Links para proximas pag  -->
                <li><a href="../home/painel.php">Home</a></li>
                <li><a href="#" class="active">O que quer construir?</a></li>
                <li><a href="../materiais/materiais.php">Lista de Materiais</a></li>
                <li><a href="../calculadora/calculadora.php">Calculadora</a></li>
                <li><a href="../logout.php">Sair</a></li>
            </ul> 
			<!-- Fim Lista de abas -->
        </nav>
    </header>
    <!-- End navigation bar -->


<div class="container">
    <button onclick="location.href='CalculoDeMateriais.php'">Cálculo de materiais</button>
    <button onclick="location.href='PesoDoPedregulho.php'">Peso do pedregulho</button>
    <button onclick="location.href='CalculoDeCimento.php'">Cálculo de cimento</button>
    <button onclick="location.href='CalculoDeConcreto.php'">Cálculo de concreto</button>
</div>

<button class="bottom-button" onclick="location.href='CalculadoraDeMateriaisPorMetroCubico.php'">Cálculo de materiais por metro cúbico</button>

</body>
</html>
