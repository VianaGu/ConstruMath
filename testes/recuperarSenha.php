<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Recuperação de Senha</title>
</head>
<body>
    <h2>Recuperação de Senha</h2>
    <form action="send_recovery_email.php" method="post">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Enviar E-mail de Recuperação</button>
    </form>
</body>
</html>
