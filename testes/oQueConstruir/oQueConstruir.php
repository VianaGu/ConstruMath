<?php
include("../verifica_login.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta autor="Gustavo Viana">
    <link rel="stylesheet" href="../css/NavBar.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/oqConstruir.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/006642858d.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Autor Gabriel caleffo -->
    <script>
        /* var temPorta = document.getElementById('campo2').value; */
        var qtd = document.getElementById('campo3');
        var alt = document.getElementById('altura');
        var larg = document.getElementById('largura');

        function verificarCampo() {
            var campo1 = document.getElementById('campo1').value;
            var campo2 = document.getElementById('campo2');
			var campo3 = document.getElementById ('campo3');
            var altura = document.getElementById('altura');
            var largura = document.getElementById('largura');

            // Condição para exibir o segundo campo se o campo1 tiver a palavra "parede"
            if (campo1.toLowerCase() == 'parede') {
                campo2.style.display = 'block';
				campo3.style.display = 'block';
                altura.style.display = 'block';
                largura.style.display = 'block';
            } else {
                campo2.style.display = 'none';
				campo3.style.display = 'none';
                altura.style.display = 'none';
                largura.style.display = 'none';
            }
        }
        
        function CalculaMetragemParede() {
            if (qtd.value > 0) {
                multi = (alt.value*larg.value)-(1.68*qtd.value);
            } else {
                multi = (alt.value*larg.value);
            }
            console.log(multi);
        }
    </script>
    <!-- Autor Gabriel caleffo -->
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
                <li><a href="#" class="active">O que quer construir?</a></li>
                <li><a href="../materiais/materiais.php">Lista de Materiais</a></li>
                <li><a href="../calculadora/calculadora.php">Calculadora</a></li>
                <li><a href="../logout.php">Sair</a></li>
            </ul> 
			<!-- Fim Lista de abas -->
        </nav>
    </header>
    <!-- End navigation bar -->
    <section class="cntflex">
        <div class="op1">
            <!-- Autor Gabriel caleffo -->
            <form method="post" action="">
                <label for="campo1">O que Pretende Construir?: </label>
                <input type="text" id="campo1" name="campo1" onkeyup="verificarCampo()" placeholder="Parede, Piso ou Laje?">
                <br><br>
                <div id="altura" style="display:none;">
                    <label for="altura">Qual a altura?: </label>
                    <input type="float" name="altura">
                </div>
                <div id="largura" style="display:none;">
                    <label for="largura">Qual a largura?: </label>
                    <input type="float" name="largura">
                </div>
                <div id="campo2" style="display:none;">
                    <label for="campo2">Tem portas?: </label>
                    <input type="text" name="campo2">
                </div>
                <div id="campo3" style="display:none;">
                    <label for="campo3">Quantas Portas?: </label>
                    <input type="number" name="campo3">
                <br><br>
                <input type="submit" onclick="CalculaMetragemParede()" value="Quantidade Material">
                </div>
            </form>
            <!-- Autor Gabriel caleffo -->
        </div>
        <div class="op2">
            <label for="">Medida em M²: </label>
            <label id="Valor"></label>
        </div>
    </section>
    <a href="#" id="linkTopo">&#9650;</a>   
    <script src="../js/mobile-navbar.js"></script>    
</body>
</html>