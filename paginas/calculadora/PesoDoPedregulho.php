<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/NavBar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Calculadora de Pedregulho</title>
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
/* 
        nav ul {
            list-style: none;
            display: flex;
            justify-content: space-around;
            margin: 0;
            padding: 0;
            width: 100%;
        } */

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
            padding-top: 80px; /* Espaço para a barra de navegação */
        }

        /* Centralização da calculadora */
        .calculator-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            max-width: 600px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .form-container {
            width: 100%;
            margin-bottom: 20px;
        }

        label, input {
            display: block;
            margin-bottom: 10px;
        }

        input[type="number"] {
            padding: 8px;
            width: 100%;
            max-width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px 15px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #004A8D; /* Cor de fundo do botão */
            color: white; /* Texto branco */
            width: 100%;
            max-width: 300px;
        }

        button:hover {
            background-color: #002D5A; /* Um tom mais escuro de azul para hover */
        }

        /* Título centralizado */
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #004A8D;
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

<!-- Conteúdo principal centralizado -->
<div class="calculator-container">
    <h1>Calculadora de Pedregulho</h1>

    <form method="post" action="">
        <div class="form-container">
            <label for="metrosCubicos">Insira a quantidade de metros cúbicos:</label>
            <input type="number" id="metrosCubicos" name="metrosCubicos" step="0.01" required>
        </div>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe o valor inserido pelo usuário
        $metrosCubicos = $_POST["metrosCubicos"];

        // Definindo o valor do metro cúbico em kg/m³
        $valorPorMetroCubico = 1400; // kg/m³
        
        // Calculando a quantidade total de pedregulho
        $quantidadePedregulho = $metrosCubicos * $valorPorMetroCubico;
        
        // Exibindo o resultado
        echo "<h2>Resultado:</h2>";
        echo "<p>A quantidade de pedregulho necessária para $metrosCubicos metros cúbicos é $quantidadePedregulho kg.</p>";
    }
    ?>
</div>

</body>
</html>
