<?php
include("../verifica_login.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Água</title>
    <link rel="stylesheet" href="../css/NavBar.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-container {
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
        }
        button {
            padding: 10px 15px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
        }
        button:hover {
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
                <li><a href="../oQueConstruir/oQueConstruir.php" >O que quer construir?</a></li>
                <li><a href="../materiais/materiais.php">Lista de Materiais</a></li>
                <li><a href="../calculadora/calculadora.php" class="active">Calculadora</a></li>
                <li><a href="../logout.php">Sair</a></li>
            </ul> 
			<!-- Fim Lista de abas -->
        </nav>
    </header>
    <!-- End navigation bar -->
    <h1>Calculadora de Água</h1>
    
    <form method="post" action="">
        <div class="form-container">
            <label for="quilosCimento">Insira a quantidade de cimento (kg):</label>
            <input type="number" id="quilosCimento" name="quilosCimento" step="0.01" required>
        </div>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe o valor inserido pelo usuário
        $quilosCimento = $_POST["quilosCimento"];

        // Definindo a relação de proporção entre cimento e água
        $valorAguaPorCimento = 0.5; // kg de água por kg de cimento

        // Calculando a quantidade total de água
        $quantidadeAgua = $quilosCimento * $valorAguaPorCimento;
        
        // Exibindo o resultado
        echo "<h2>Resultado:</h2>";
        echo "<p>A quantidade de água necessária para $quilosCimento kg de cimento é $quantidadeAgua litros.</p>";
    }
    ?>
</body>
</html>
