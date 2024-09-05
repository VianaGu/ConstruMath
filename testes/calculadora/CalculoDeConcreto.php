<?php
include("../verifica_login.php");
?>

<?php
function calcularProporcaoConcrete($cimentoKg) {
    // Densidade do cimento em kg/m³
    $densidadeCimento = 1400; // kg/m³
    
    // Convertendo cimento de kg para m³
    $cimentoM3 = $cimentoKg / $densidadeCimento;
    
    // Proporções
    $proporcao = [1, 2, 4]; // cimento, areia, brita
    
    // Calculando a quantidade de cimento, areia e brita em m³
    $cimentoQuantidade = $cimentoM3;
    $areiaQuantidade = $cimentoM3 * ($proporcao[1] / $proporcao[0]);
    $britaQuantidade = $cimentoM3 * ($proporcao[2] / $proporcao[0]);
    
    return [
        'cimento' => $cimentoQuantidade,
        'areia' => $areiaQuantidade,
        'brita' => $britaQuantidade
    ];
}

// Verifica se o valor foi passado pelo terminal ou via GET/POST
if (isset($argv)) {
    // No caso de execução via terminal (CLI)
    if (isset($argv[1])) {
        $cimentoKg = $argv[1];
    } else {
        echo "Por favor, insira a quantidade de cimento em kg como argumento.\n";
        exit();
    }
} else {
    // No caso de execução via navegador (GET ou POST)
    if (isset($_POST['cimentoKg'])) {
        $cimentoKg = $_POST['cimentoKg'];
    } elseif (isset($_GET['cimentoKg'])) {
        $cimentoKg = $_GET['cimentoKg'];
    } else {
        echo "Por favor, insira a quantidade de cimento em kg.\n";
        exit();
    }
}

// Chama a função para calcular a proporção
$resultado = calcularProporcaoConcrete($cimentoKg);

// Exibe o resultado
echo "Para $cimentoKg kg de cimento, você precisará de:\n";
echo "Cimento: " . number_format($resultado['cimento'], 3) . " m³\n";
echo "Areia: " . number_format($resultado['areia'], 3) . " m³ (" . number_format($resultado['areia'] * 1000, 0) . " litros)\n";
echo "Brita: " . number_format($resultado['brita'], 3) . " m³ (" . number_format($resultado['brita'] * 1000, 0) . " litros)\n";
?>