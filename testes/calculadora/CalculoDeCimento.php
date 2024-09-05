<?php
include("../verifica_login.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Água</title>
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
