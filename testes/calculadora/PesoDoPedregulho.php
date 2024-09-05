<?php
include("../verifica_login.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Pedregulho</title>
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
</body>
</html>
