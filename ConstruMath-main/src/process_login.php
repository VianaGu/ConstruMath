<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root"; // Altere para o seu usuário do MySQL
$password = "root"; // Altere para a sua senha do MySQL
$dbname = "mydatabase"; // Altere para o nome do seu banco de dados

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Receber os dados do formulário
$user = $_POST['username'];
$pass = $_POST['password'];

// Preparar e executar a consulta SQL para buscar o usuário
$sql = "SELECT password FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($hashed_password);
$stmt->fetch();

if (password_verify($pass, $hashed_password)) {
    echo "Login realizado com sucesso! <a href='index.php'>Voltar à página principal</a>";
} else {
    echo "Nome de usuário ou senha incorretos. <a href='login.php'>Tente novamente</a>";
}

$stmt->close();
$conn->close();
?>
