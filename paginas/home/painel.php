<?php
include('../verifica_login.php');
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <!-- Navigation bar  -->
    <header>
        <nav>
			<!-- logo -->
            <div class="ajustaLogo">
                <img src="../img\logo.jpg" alt="Logo" class="logoImg">
                <a class="logo" href="#">ConstruMath</a>
            </div>
			<!-- fim logo -->
			<!-- Botão Mobile -->
            <div class="menu-btn">
                <i class="fas fa-bars fa-2x" onclick="menuShow();"></i>
            </div>
			<!-- Botão Mobile -->
			<!-- Lista de abas -->
            <ul class="nav-list">
                <!--  Links para proximas pag  -->
                <li><a href="painel.php" class="active">Home</a></li>
                <li><a href="../oQueConstruir/oQueConstruir.php">O que quer construir?</a></li>
                <li><a href="../materiais/materiais.php">Lista de Materiais</a></li>
                <li><a href="../calculadora/calculadora.php">Calculadora</a></li>
                <li><a href="../logout.php">Sair</a></li>
            </ul> 
			<!-- Fim Lista de abas -->
        </nav>
    </header>
    <!-- End navigation bar -->
    <!-- Quadrado de apresentação dos integrantes -->
	<section class="container">
		<main class="box">
			<p class="apresenteSite">
				Olá, para você que procura uma calculadora de materiais para sua construção,
				você está no site certo 
			</p>
			<img src="../img\bob construtor.jpg"/>
			<footer>
				<p>
					Desenvolvido por:
				</p>
				<div class="ptCreditos">
					<ul class="creditos">
						<li><a href="https://github.com/VianaGu" target="blank" class="name">Gustavo Viana</a></li>
						<li><a href="https://instagram.com/biel_caleffo" target="blank" class="name">Gabriel Caleffo</a></li>
						<li><a href="https://instagram.com/ghugo7895" target="blank" class="name">Hugo Rocha</a></li>
					</ul>
					<ul class="creditos">
						<li><a href="https://instagram.com/rodrigo.kenzo" target="blank" class="name">Rodrigo Kenzo</a></li>
						<li><a href="#" target="blank" class="name">Matheus Camargo</a></li>
						<li><a href="#" target="blank" class="name">Eduardo Augusto</a></li>
					</ul>
					<ul class="creditos">
						<li><a href="https://instagram.com/romao_deivid" target="blank" class="name">Deivid Romao</a></li>
						<li><a href="#" target="blank" class="name">Fabricio</a></li>
						<li><a href="#" target="blank" class="name">Juan</a></li>
					</ul>
				</div>
			</footer>
		</main>
	</div>
	<a href="#" id="linkTopo">&#9650;</a>
	<script src="../js/mobile-navbar.js"></script>
	<link rel="stylesheet" href="css/style.css">
</body>
</html>

