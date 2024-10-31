<?php
// Inclui o arquivo 'verifica_login.php', que provavelmente contém a lógica de verificação de login do usuário
include('../verifica_login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 -->
    <link rel="stylesheet" href="../css/NavBar.css"> <!-- Inclui o CSS para a barra de navegação -->
    <link rel="stylesheet" href="../css/style.css"> <!-- Inclui o CSS principal do estilo da página -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"> <!-- Inclui ícones do Bootstrap -->
    <script src="https://kit.fontawesome.com/006642858d.js"></script> <!-- Inclui o kit do Font Awesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Inclui Font Awesome -->
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet"> <!-- Inclui uma fonte personalizada do Google Fonts -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Define a viewport para dispositivos móveis -->
    <title>Document</title> <!-- Título da página -->
</head>
<body>
     <header>
        <nav> <!-- Início da barra de navegação -->
            <div class="ajustaLogo"> <!-- Div que ajusta a logo -->
                <img src="../img/logo.jpg" alt="Logo" class="logoImg"> <!-- Imagem da logo -->
                <a class="logo" th:href="@{/index}">ConstruMath</a> <!-- Link para a página inicial -->
            </div>
            <div class="menu-btn"> <!-- Botão que ativa o menu -->
                <i class="fa fa-bars fa-2x" onclick="menuShow();"></i> <!-- Ícone de menu que chama a função menuShow() quando clicado -->
            </div>
            <ul class="nav-list"> <!-- Lista de navegação -->
                <li><a href="../home/painel.php">Home</a></li> <!-- Link para a página do painel -->
                <li><a href="../oQueConstruir/oQueConstruir.php">O que quer construir?</a></li> <!-- Link para a página de construção -->
                <li><a href="#" class="active">Lista de Materiais</a></li> <!-- Link para a lista de materiais, marcado como ativo -->
                <li><a href="../calculadora/calculadora.php">Calculadora</a></li> <!-- Link para a calculadora -->
                <li><a href="../logout.php">Sair</a></li> <!-- Link para sair (logout) -->
            </ul> 
        </nav> <!-- Fim da barra de navegação -->
    </header>
    
    <a href="#" id="linkTopo">&#9650;</a> <!-- Link para voltar ao topo da página -->
    
    <script src="../js/mobile-navbar.js"></script> <!-- Inclui o script para a funcionalidade da barra de navegação em dispositivos móveis -->
</body>
</html>
