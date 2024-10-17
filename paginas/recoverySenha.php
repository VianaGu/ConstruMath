<?php
// Inicia a sessão para manter as variáveis e dados entre diferentes páginas
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Define o conjunto de caracteres como UTF-8 para suportar caracteres especiais -->
    <meta charset="UTF-8">
    <!-- Garante que a página seja responsiva em dispositivos móveis -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha</title> <!-- Título que será exibido na aba do navegador -->
</head>

<body>
    <h1>Recuperar Senha</h1> <!-- Cabeçalho principal da página -->

    <!-- Formulário de recuperação de senha que envia o número de telefone via POST para 'enviar_sms.php' -->
    <form id="recoveryForm" method="POST" action="enviar_sms.php">
        <label for="phoneNumber">Número de Telefone:</label>
        <!-- Campo de entrada onde o usuário insere seu número de telefone -->
        <input type="text" id="phoneNumber" name="phoneNumber" required>
        <!-- Botão de envio do formulário -->
        <button type="submit">Enviar Código</button>
    </form>

    <!-- Verifica se existe o parâmetro 'status' na URL para exibir mensagens ao usuário -->
    <?php if (isset($_GET['status'])): ?>
        <!-- Exibe a mensagem de status (geralmente sucesso ou erro) com segurança usando 'htmlspecialchars' -->
        <p><?php echo htmlspecialchars($_GET['status']); ?></p>
    <?php endif; ?>

    <?php
    // Verifica se existe um código de verificação armazenado na sessão
    if (isset($_SESSION['codigo'])):
    ?>
        <!-- Se existir um código na sessão, exibe um formulário para o usuário inserir o código de verificação -->
        <h2>Verifique seu Código</h2>
        <!-- Formulário que envia o código inserido via POST para 'verificar_codigo.php' -->
        <form method="POST" action="verificar_codigo.php">
            <label for="codigo">Código:</label>
            <!-- Campo de entrada para o código de verificação -->
            <input type="text" id="codigo" name="codigo" required>
            <!-- Botão de envio para verificar o código -->
            <button type="submit">Verificar Código</button>
        </form>
    <?php endif; ?>
</body>

</html>
