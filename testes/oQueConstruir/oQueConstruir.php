<?php
include("../verifica_login.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="../css/NavBar.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/006642858d.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O Que Construir?</title>
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
                <li><a href="oQueConstruir" class="active">O que quer construir?</a></li>
                <li><a href="materiais">Lista de Materiais</a></li>
                <li><a href="calculadora">Calculadora</a></li>
                <li><a href="logout.php">Sair</a></li>
            </ul> 
			<!-- Fim Lista de abas -->
        </nav>
    </header>
    <!-- End navigation bar -->
    <div class="Opções">
        <label for="Construção">O Que Pretende Construir?: </label>
            <select id="Construção" name="Construção">
                <option value="Parede">Parede</option>
                <option value="Piso">Piso</option>
                <option value="Laje">Laje</option>
        <label for="Portas">Tem Portas?: </label>
            
    </div>        
</body>
</html>