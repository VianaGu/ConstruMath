<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root"; // Altere para o seu usuário do MySQL
$password = ""; // Altere para a sua senha do MySQL
$dbname = "mydatabase"; // Altere para o nome do seu banco de dados

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Receber os dados do formulário
$user = $_POST['username'];
$pass = $_POST['password'];

// Preparar e executar a consulta SQL para inserção
$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$hashed_password = password_hash($pass, PASSWORD_DEFAULT); // Hash da senha
$stmt->bind_param("ss", $user, $hashed_password);

if ($stmt->execute()) {
    echo "Cadastro realizado com sucesso! <a href='index.php'>Voltar à página principal</a>";
} else {
    echo "Erro ao cadastrar: " . $stmt->error . " <a href='register.php'>Tente novamente</a>";
}

$stmt->close();
$conn->close();
?>
