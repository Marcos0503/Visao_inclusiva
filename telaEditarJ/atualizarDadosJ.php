<?php
$host = "localhost";
$user = "root";
$password = ""; // Senha do seu banco de dados, se houver
$database = "visaoinclusiva"; // Nome do seu banco de dados

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_errno) {
    echo "Falha na conexão com o banco de dados: " . $conn->connect_error;
} else {
    echo "Conexão com o banco de dados bem-sucedida!";
}

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!isset($_POST['id_empresa']) || !is_numeric($_POST['id_empresa'])) {
        echo "<script>alert('ID do usuário ausente ou inválido. ID do usuário: " . $_POST['id_empresa'] . "');</script>";
        return;
    }

    // O ID do usuário é válido. Continue com o script.

    $id_empresa = $_POST['id_empresa'];

    // Obtém os dados do formulário
    $nome_empresa = $_POST['nome_empresa'];
    $telefone = $_POST['telefone'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $email = $_POST['email'];
    $sobre = $_POST['sobre'];

    // Atualiza os dados do usuário
    $sql = "UPDATE cadastro_pj
    SET nome_empresa = '$nome_empresa',
        telefone = '$telefone',
        rua = '$rua',
        bairro = '$bairro',
        email = '$email',
        sobre = '$sobre'
    WHERE id_empresa = $id_empresa;";

    $conn->query($sql);

    // Verifica se a atualização foi bem-sucedida
    if ($conn->affected_rows > 0) {
        // A atualização foi bem-sucedida
        echo "<p>Os dados do usuário foram atualizados com sucesso.</p>";
    } else {
        // A atualização falhou
        echo "<p>Ocorreu um erro ao atualizar os dados do usuário.</p>";
    }
}
?>