<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha</title>
</head>

<body>
    <h1>Recuperar Senha</h1>
    <form id="recoveryForm" method="POST" action="enviar_sms.php">
        <label for="phoneNumber">Número de Telefone:</label>
        <input type="text" id="phoneNumber" name="phoneNumber" required>
        <button type="submit">Enviar Código</button>
    </form>

    <?php if (isset($_GET['status'])): ?>
        <p><?php echo htmlspecialchars($_GET['status']); ?></p>
    <?php endif; ?>

    <?php
    if (isset($_SESSION['codigo'])): // Verifica se o código está na sessão 
    ?>
        <h2>Verifique seu Código</h2>
        <form method="POST" action="verificar_codigo.php">
            <label for="codigo">Código:</label>
            <input type="text" id="codigo" name="codigo" required>
            <button type="submit">Verificar Código</button>
        </form>
    <?php endif; ?>
</body>

</html>