
<?php
session_start(); // Inicia a sessão

require_once './twilio-php/src/Twilio/autoload.php'; // Ajuste o caminho conforme necessário
use Twilio\Rest\Client;

function enviar_sms($numero, $mensagem)
{
    $account_sid = 'AC9ffe5b0fb8c8b1c82b821d19240e8f04'; // Coloque seu SID aqui
    $auth_token = '9026a6f888640d0327130adaeac6e3f0';     // Coloque seu Auth Token aqui
    $twilio_number = '+18142001126'; // Coloque seu número Twilio aqui
    $client = new Client($account_sid, $auth_token);
    $client->messages->create($numero, ['from' => $twilio_number, 'body' => $mensagem]);

    return true;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero = $_POST['phoneNumber'];
    $codigo = rand(100000, 999999); // Gera um código de 6 dígitos
    $_SESSION['codigo'] = $codigo; // Armazena o código na sessão
    $mensagem = "Seu código de recuperação de senha é: $codigo";

    try {
        enviar_sms($numero, $mensagem);
        header('Location: recoverySenha.php?status=Mensagem enviada com sucesso!');
        exit;
    } catch (Exception $e) {
        header('Location: index.php?status=Erro: ' . htmlspecialchars($e->getMessage()));
        exit;
    }
}
?>
