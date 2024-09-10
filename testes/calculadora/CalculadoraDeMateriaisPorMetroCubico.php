<?php
include("../verifica_login.php");
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Materiais por Metro Cúbico</title>
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
            width: 80%;
            max-width: 600px;
            text-align: center;
        }

        input, select, button {
            margin-top: 10px;
            padding: 10px;
            font-size: 16px;
            width: 100%;
            max-width: 300px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
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
                <li><a href="../oQueConstruir/oQueConstruir.php" >O que quer construir?</a></li>
                <li><a href="../materiais/materiais.php">Lista de Materiais</a></li>
                <li><a href="../calculadora/calculadora.php" class="active">Calculadora</a></li>
                <li><a href="../logout.php">Sair</a></li>
            </ul> 
			<!-- Fim Lista de abas -->
        </nav>
    </header>
    <!-- End navigation bar -->
    <h1>Calculadora de Areia por Metro Cúbico</h1>
    
    <form method="post" action="">
        <label for="quilosAreia">Insira a quantidade de areia (kg):</label>
        <input type="number" id="quilosAreia" name="quilosAreia" step="0.01" required>

        <label for="tipoAreia">Selecione o tipo de areia:</label>
        <select id="tipoAreia" name="tipoAreia" required>
            <option value="1500">Grossa (1500 kg/m³)</option>
            <option value="1480">Média (1480 kg/m³)</option>
            <option value="1400">Fina (1400 kg/m³)</option>
        </select>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe os valores inseridos pelo usuário
        $quilosAreia = $_POST["quilosAreia"];
        $densidadeAreia = $_POST["tipoAreia"];

        // Calcula a quantidade em metros cúbicos e em litros
        $metrosCubicos = $quilosAreia / $densidadeAreia;
        $litros = $metrosCubicos * 1000;

        // Formata os resultados para duas casas decimais
        $metrosCubicosFormatado = number_format($metrosCubicos, 6, ',', '.');
        $litrosFormatado = number_format($litros, 3, ',', '.');

        // Exibe o resultado
        echo "<h2>Resultado:</h2>";
        echo "<p>Para $quilosAreia kg de areia, você precisará comprar aproximadamente $metrosCubicosFormatado metros cúbicos, o que equivale a $litrosFormatado litros de areia.</p>";      
    }
    ?>
</div>

</body>
</html>
