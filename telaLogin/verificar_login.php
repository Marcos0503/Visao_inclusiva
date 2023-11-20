<?php
session_start();

// Conectar ao banco de dados
$server = "localhost";
$usuario = "root";
$senha = "";
$banco = "visãoinclusiva";

$conn = new mysqli($server, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Obter dados do formulário
$email = $_POST['email'];
$senha_digitada = $_POST['senha'];

// Consultar na tabela cadastro_pj
$stmt = $conn->prepare("SELECT * FROM cadastro_pj WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Usuário encontrado na tabela cadastro_pj
    $row = $result->fetch_assoc();
    $senha_hash = $row['senha'];

    // Verificar a senha usando password_verify
    if (password_verify($senha_digitada, $senha_hash)) {
        $_SESSION['id_empresa'] = $row['id_empresa'];
        header("Location: ../telaPerfilJ/visualizacaoEmpresa.php");
        exit();
    }
}

// Se o usuário não foi encontrado na tabela cadastro_pj, verificar na tabela cadastro_pessoal
$stmt = $conn->prepare("SELECT * FROM cadastro_pessoal WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Usuário encontrado na tabela cadastro_pessoal
    $row = $result->fetch_assoc();
    $senha_hash = $row['senha'];

    // Verificar a senha usando password_verify
    if (password_verify($senha_digitada, $senha_hash)) {
        $_SESSION['id_usuario'] = $row['id_usuario'];
        header("Location: ../telaPerfilF/visualizacaoFisica.php");
        exit();
    }
}

// Credenciais inválidas
$_SESSION['login_error'] = "Email ou senha incorretos. Por favor, verifique suas credenciais.";

// Exibir a mensagem de erro na página atual
echo '<script>alert("Email ou senha incorretos. Por favor, verifique suas credenciais.");';
// Redirecionar de volta para a tela de login após a exibição da mensagem de erro
echo 'window.location.href="../telaLogin/login.php";</script>';
exit();

$stmt->close();
$conn->close();
?>
