<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Concreto</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="number"] {
            padding: 10px;
            width: 200px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        h2 {
            margin-top: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            text-align: left;
            margin-bottom: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Calculadora de Concreto</h1>
    
    <form method="POST">
        <label for="concretoKg">Quantidade de Concreto em Kg:</label><br>
        <input type="number" id="concretoKg" name="concretoKg" step="0.01" required><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $concretoKg = $_POST['concretoKg'];

        // Proporções e densidades
        $proporcao = [1, 2, 4]; // cimento, areia, brita
        $densidadeCimento = 0.035; // m³/kg para cimento
        $densidadeAreia = 0.070; // m³/kg para areia
        $densidadeBrita = 0.140; // m³/kg para brita

        // Calculando a quantidade necessária de cada material em kg
        $cimentoKg = $concretoKg * ($proporcao[0] / array_sum($proporcao));
        $areiaKg = $concretoKg * ($proporcao[1] / array_sum($proporcao));
        $britaKg = $concretoKg * ($proporcao[2] / array_sum($proporcao));

        // Convertendo para m³
        $cimentoM3 = $cimentoKg * $densidadeCimento;
        $areiaM3 = $areiaKg * $densidadeAreia;
        $britaM3 = $britaKg * $densidadeBrita;

        // Convertendo de m³ para litros (1 m³ = 1000 litros)
        $cimentoLitros = $cimentoM3 * 1000;
        $areiaLitros = $areiaM3 * 1000;
        $britaLitros = $britaM3 * 1000;

        echo "<h2>Resultados:</h2>";
        echo "<p>Para produzir <strong>$concretoKg kg</strong> de concreto, você precisará de:</p>";
        echo "<ul>";
        echo "<li><strong>Cimento:</strong> " . number_format($cimentoLitros, 2) . " litros</li>";
        echo "<li><strong>Areia:</strong> " . number_format($areiaLitros, 2) . " litros</li>";
        echo "<li><strong>Brita:</strong> " . number_format($britaLitros, 2) . " litros</li>";
        echo "</ul>";
    }
    ?>
</div>

</body>
</html>
