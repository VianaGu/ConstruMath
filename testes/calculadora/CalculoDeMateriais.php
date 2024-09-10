<?php
include("../verifica_login.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Materiais</title>
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
        input[type="text"], input[type="number"] {
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

<h1>Cálculo de Materiais</h1>

<form method="post">
    <div class="form-container">
        <label for="area">Área do muro (m²):</label>
        <input type="number" id="area" name="area" step="0.01" required>
    </div>
    <button type="submit">Calcular</button>
</form>

<?php
// Definição das variáveis com os valores fornecidos
$cimento = 10.0; // kg/m²
$areia = 18.7;   // kg/m²
$brita = 31.9;   // kg/m²
$agua = 55.0;    // kg/m²

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a área fornecida pelo usuário
    $area = $_POST['area'];

    // Calcula a quantidade de materiais
    $cimento_total = $cimento * $area;
    $areia_total = $areia * $area;
    $brita_total = $brita * $area;
    $agua_total = $agua * $area;

    // Exibe os resultados
    echo "<h2>Quantidade de Materiais Necessários</h2>";
    echo "<p>Cimento: " . $cimento_total . " kg</p>";
    echo "<p>Areia: " . $areia_total . " kg</p>";
    echo "<p>Brita: " . $brita_total . " kg</p>";
    echo "<p>Água: " . $agua_total . " litros</p>";
}
?>

</body>
</html>
