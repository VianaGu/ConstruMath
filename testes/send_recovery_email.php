<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Carregar a classe do PHPMailer
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php'; // Se necessário

include('conexao.php');

if ($conexao->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
}

// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conexao->real_escape_string($_POST['email']);

    // Verificar se o e-mail existe na base de dados
    $sql = "SELECT * FROM usuario WHERE email = '$email'";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        // Gerar token de recuperação
        $token = bin2hex(random_bytes(32)); // Exemplo de geração de token seguro

        // Inserir o token na base de dados com um tempo de expiração (1 hora neste exemplo)
        $expires_at = date('Y-m-d H:i:s', strtotime('+1 hour'));
        $sql_insert_token = "INSERT INTO tokens_recuperacao (email, token, expires_at) VALUES ('$email', '$token', '$expires_at')";
        if ($conexao->query($sql_insert_token) === TRUE) {
            $emailDestinatario = $email;
            $assunto = 'Recuperação de Senha';
            $mensagem = 'Olá,<br><br>Para recuperar sua senha, acesse o seguinte link:<br><br>';
            $mensagem .= '<a href="http://localhost/ConstruMath/testes/reset_password.php?token=' . $token . '">Clique aqui para redefinir sua senha</a><br><br>';
            $mensagem .= 'Este link expirará em 1 hora.<br><br>';
            $mensagem .= 'Atenciosamente,<br>Sua Empresa';

            // Configurações do PHPMailer
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'guviana.ti@gmail.com'; // Coloque seu e-mail do Gmail
            $mail->Password = 'a4gy8695'; // Coloque sua senha do Gmail
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Remetente e destinatário
            $mail->setFrom('guviana.ti@gmail.com', 'Gustavo');
            $mail->addAddress($emailDestinatario);

            // Conteúdo do e-mail
            $mail->isHTML(true);
            $mail->Subject = $assunto;
            $mail->Body = $mensagem;

            // Enviar e-mail
            if ($mail->send()) {
                echo 'E-mail enviado com sucesso.';
            } else {
                echo 'Erro ao enviar o e-mail: ' . $mail->ErrorInfo;
            }
        } else {
            echo "Erro ao gerar token de recuperação.";
        }
    } else {
        echo "Não encontramos nenhum usuário com esse e-mail.";
    }

    // Fechar conexão com o banco de dados
    $conexao->close();
}
?>
