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
$senha = $_POST['senha'];

// Consultar na tabela cadastro_pj
$stmt = $conn->prepare("SELECT * FROM cadastro_pj WHERE email = ? AND senha = ?");
$stmt->bind_param("ss", $email, $senha);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Usuário autenticado - faça o que for necessário
    $row = $result->fetch_assoc();
    $_SESSION['id_empresa'] = $row['id_empresa'];
    
    // Redirecionar para a tela de perfil de pessoa jurídica
    header("Location: ../telaperfilpj/visualizacaoEmpresa.php");
    exit();
} else {
    // Se o usuário não for encontrado na tabela cadastro_pj, verifique na tabela cadastro_pessoal
    $stmt = $conn->prepare("SELECT * FROM cadastro_pessoal WHERE email = ? AND senha = ?");
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Usuário autenticado - faça o que for necessário
        $row = $result->fetch_assoc();
        $_SESSION['id_usuario'] = $row['id'];
        
        // Redirecionar para a tela de perfil de pessoa física
        header("Location: perfil_pf.php");
        exit();
    } else {
        // Credenciais inválidas
        echo "Login falhou. Verifique suas credenciais.";
    }
}

$stmt->close();
$conn->close();
?>