<?php
include('conexao.php');

if ($conexao->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
}

// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $conexao->real_escape_string($_POST['token']);
    $new_password = $conexao->real_escape_string($_POST['new_password']);
    $confirm_password = $conexao->real_escape_string($_POST['confirm_password']);

    // Verificar se as senhas coincidem
    if ($new_password !== $confirm_password) {
        die("As senhas não coincidem. Por favor, tente novamente.");
    }

    // Verificar se o token é válido e ainda está dentro do prazo de expiração
    $current_datetime = date('Y-m-d H:i:s');
    $sql = "SELECT * FROM tokens_recuperacao WHERE token = '$token' AND expires_at > '$current_datetime'";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        // Token válido, atualizar a senha do usuário
        $row = $result->fetch_assoc();
        $email = $row['email'];

        // Criptografar a nova senha (exemplo básico, use hash mais seguro na prática)
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Atualizar a senha na base de dados
        $sql_update_password = "UPDATE usuarios SET senha = '$hashed_password' WHERE email = '$email'";

        if ($conexao->query($sql_update_password) === TRUE) {
            // Remover o token de recuperação da base de dados
            $sql_delete_token = "DELETE FROM tokens_recuperacao WHERE token = '$token'";
            if ($conexao->query($sql_delete_token) === TRUE) {
                echo "Senha atualizada com sucesso.";
            } else {
                echo "Erro ao remover token de recuperação: " . $conexao->error;
            }
        } else {
            echo "Erro ao atualizar a senha: " . $conexao->error;
        }
    } else {
        echo "Token inválido ou expirado. Por favor, solicite a recuperação de senha novamente.";
    }

    // Fechar conexão com o banco de dados
    $conexao->close();
}
?>
