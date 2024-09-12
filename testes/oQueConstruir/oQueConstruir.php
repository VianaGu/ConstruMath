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
    <link rel="stylesheet" href="../css/OqConstruir1.css">
    <link rel="stylesheet" href="../css/oqConstruir.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/006642858d.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Autor Gabriel caleffo -->
    <script>
        

        function verificarCampo() {
            var campo1 = document.getElementById('campo1').value;/* Entrada de qual tipo de construção */
			var campo3 = document.getElementById ('campo3'); /* Campo de quantas portas Quantas portas? */
            var altura = document.getElementById('altura');
            var largura = document.getElementById('largura');
            var espessura = document.getElementById('espessura');
            var larguraPiso = document.getElementById('larguraPiso');
            var comprimento = document.getElementById('comprimento');

            // Condição para exibir o segundo campo se o campo1 tiver a palavra "parede"
            console.log("Valor de campo1:", campo1.toLowerCase());
            switch (campo1.toLowerCase()) {
                case 'parede':
                    console.log("Entrou no caso parede");
                    campo3.style.display = 'block';
                    altura.style.display = 'block';
                    largura.style.display = 'block';
                    break;
                case 'piso':
                    console.log("Entrou no caso piso");
                    espessura.style.display = 'block';
                    larguraPiso.style.display = 'block';
                    comprimento.style.display = 'block';
                    break;
                default:
                    console.log("Entrou no caso padrão");
                    campo3.style.display = 'none';
                    altura.style.display = 'none';
                    largura.style.display = 'none';

                    espessura.style.display = 'none';
                    larguraPiso.style.display = 'none';
                    comprimento.style.display = 'none';
                    break;
            }
           
        }
        
        function calculaMetragemParede() {
            console.log('Entrou na função de cálculo');

            var qtd = document.querySelector('#campo3 input').value;
            var alt = document.querySelector('#altura input').value;
            var larg = document.querySelector('#largura input').value;

            // Converter valores para números
            var fqtd = parseFloat(qtd);
            var falt = parseFloat(alt);
            var flarg = parseFloat(larg);

            // Verifique se a conversão foi bem-sucedida
            if (isNaN(fqtd)) fqtd = 0;
            if (isNaN(falt)) falt = 0;
            if (isNaN(flarg)) flarg = 0;

            console.log('Altura:', falt);
            console.log('Largura:', flarg);
            console.log('Quantidade de Portas:', fqtd);

            var multi;
            if (fqtd > 0) {
                multi = (falt * flarg) - (1.68/* M² de uma porta de 80cm de largura */ * fqtd);
            } else {
                multi = (falt * flarg);
            }

            // Exibir o resultado na página
            var resultM2Span = document.getElementById('resultM2');
            resultM2Span.textContent = multi.toFixed(2); // Exemplo de formatação, ajuste conforme necessário
        }
        function calculaMetragemPiso() {
            console.log('Entrou na função de cálculo piso');

            var esp = document.querySelector('#espessura input').value;
            var com = document.querySelector('#comprimento input').value;
            var larg = document.querySelector('#larguraPiso input').value;

            // Converter valores para números
            var fesp = parseFloat(esp);
            var fcom = parseFloat(com);
            var flarg = parseFloat(larg);

            // Verifique se a conversão foi bem-sucedida
            if (isNaN(fesp)) fesp = 0;
            if (isNaN(fcom)) fcom = 0;
            if (isNaN(flarg)) flarg = 0;

            console.log('espessura:', fesp);
            console.log('Largura:', flarg);
            console.log('Comprimento:', fcom);

            var multiM2;
            multiM2 = (flarg * fcom);
            // Exibir o resultado na página
            var resultM2Span = document.getElementById('resultM2');
            resultM2Span.textContent = multiM2.toFixed(2); // Exemplo de formatação, ajuste conforme necessário

            var multiM3;
            multiM3 = (flarg * fcom * fesp);
            //Exibir o resultado na página
            console.log("M³:" + multiM3);
            
            var resultM3Span = document.getElementById('resultM3');
            resultM3Span.textContent = multiM3.toFixed(2);
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
                <input type="text" autocomplete="off" id="campo1" name="campo1" onkeyup="verificarCampo()" placeholder="Parede ou Piso?">
                <br><br>
                <!-- Piso  -->
                <div id="larguraPiso" style="display:none;">
                    <label for="larguraPiso">Qual a largura?(Em metros): </label>
                    <input type="number" autocomplete="off" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="qaltura"> 
                </div>
                <div id="comprimento" style="display:none;">
                    <label for="comprimento">Qual a comprimento?:(Em metros) </label>
                    <input type="number" autocomplete="off" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="qlargura"> 
                </div>
                <div id="espessura" style="display:none;">
                    <label for="espessura">Qual a espessura?:(Em metros)</label>
                    <input type="number" autocomplete="off" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="espessura">
                    <br><br>
                <button type="button" onclick="calculaMetragemPiso()" value="Quantidade Material">Quantidade Material</button>
                </div>    
                <!-- fim piso  -->
                <!-- Parede  -->
                <div id="altura" style="display:none;">
                    <label for="altura">Qual a altura?:(Em metros) </label>
                    <input type="number" autocomplete="off" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="qaltura"> 
                </div>
                <div id="largura" style="display:none;">
                    <label for="largura">Qual a largura?:(Em metros) </label>
                    <input type="number" autocomplete="off" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="qlargura"> 
                </div>
                <div id="campo3" style="display:none;">
                    <label for="campo3">Tem portas? Quantas?: </label>
                    <input type="number" autocomplete="off" name="qtdPorta">
                    <label for="">Se não houver deixe em branco</label>
                <!-- Fim Parede -->    
                <br><br>
                <button type="button" onclick="calculaMetragemParede()" value="Quantidade Material">Quantidade Material</button>
                </div>
            </form>
            <!-- Autor Gabriel caleffo -->
        </div>
        <div class="op2">
            <label for="resultM2">Medida em M²: </label>
            <span id="resultM2"></span>
            <br>
            <label for="resultM3">Medida em M³: </label>
            <span id="resultM3"></span>
            <br>
            <label for="">Quantidade de cimento: </label>
            <span id="resultCimento"></span>
            <br>
            <label for="">Quantidade de areia: </label>
            <span id="resultAreia"></span>
            <br>
            <label for="">Quantidade de pedra: </label>
            <span id="resultPedra"></span>
            <br>
            <label for="">Quantidade de àgua: </label>
            <span id="resultAgua"></span>

        </div>
    </section> 
    <script src="../js/mobile-navbar.js"></script>    
</body>
</html>