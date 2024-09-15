<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Calculadora de Concreto</title>
    <style>
        /* Barra de navegação */
        nav {
            background-color: #004A8D;
            width: 100%;
            padding: 15px 0;
            position: fixed; /* Fixar no topo */
            top: 0;
            left: 0;
            z-index: 1000; /* Garantir que a barra fique no topo */
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

        nav ul {
            list-style: none;
            display: flex;
            justify-content: space-around;
            margin: 0;
            padding: 0;
            width: 100%;
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
            background-color: #f4f4f9;
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

        form {
            margin-bottom: 20px;
        }

        input[type="number"] {
            padding: 10px;
            width: 100%;
            max-width: 300px;
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
            background-color: #004A8D; /* Cor de fundo do botão */
            color: white; /* Texto branco */
            width: 100%;
            max-width: 300px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #002D5A; /* Tom mais escuro de azul para hover */
        }

        h2 {
            margin-top: 20px;
            color: #004A8D;
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
