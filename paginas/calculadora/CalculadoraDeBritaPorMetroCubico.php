<?php
include("../verifica_login.php")
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/NavBar.css">
    <script defer src="../js/mobile-navbar.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Calculadora de Brita por Metro Cúbico</title>
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
            align-items: center;
        }

        nav .logo {
            color: white;
            font-size: 24px;
            text-decoration: none;
            margin-left: 10px;
        }

        nav ul li {
            display: inline-block;
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

        /* Estilos para o corpo e o formulário */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #99d3df; /* Nova cor de fundo */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding-top: 80px; /* Compensa o espaço da barra de navegação */
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }

        h1 {
            margin-bottom: 20px;
            color: #004A8D;
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
            background-color: #004A8D; /* Cor de fundo do botão */
            color: white; /* Texto branco */
            cursor: pointer;
            border: none;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #002D5A; /* Tom mais escuro de azul para hover */
        }

        h2 {
            margin-top: 20px;
            color: #004A8D;
        }
    </style>
</head>
<body>

<!-- Barra de navegação -->
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
    <h1>Calculadora de Brita por Metro Cúbico</h1>
    
    <form method="post" action="">
        <label for="quilosBrita">Insira a quantidade de brita (kg):</label>
        <input type="number" id="quilosBrita" name="quilosBrita" step="0.01" required>

        <label for="tipoBrita">Selecione a densidade da brita:</label>
        <select id="tipoBrita" name="tipoBrita" required>
            <option value="1450">Brita (1450 kg/m³)</option>
        </select>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe os valores inseridos pelo usuário
        $quilosBrita = $_POST["quilosBrita"];
        $densidadeBrita = $_POST["tipoBrita"];
    
        // Calcula a quantidade em metros cúbicos e em litros
        $metrosCubicos = $quilosBrita / $densidadeBrita;
        $litros = $metrosCubicos * 1000;
    
        // Formata os resultados para duas casas decimais
        $metrosCubicosFormatado = number_format($metrosCubicos, 6, ',', '.');
        $litrosFormatado = number_format($litros, 4, ',', '.');
    
        // Exibe o resultado
        echo "<h2>Resultado:</h2>";
        echo "<p>Para $quilosBrita kg de brita, você precisará comprar aproximadamente $metrosCubicosFormatado metros cúbicos, o que equivale a $litrosFormatado litros de brita.</p>";
    }
    ?>
</div>

</body>
</html>
