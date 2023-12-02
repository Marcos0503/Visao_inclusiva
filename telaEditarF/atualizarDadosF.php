<?php
$host = "localhost";
$user = "root";
$password = ""; // Senha do seu banco de dados, se houver
$database = "visãoinclusiva"; // Nome do seu banco de dados

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_errno) {
    echo "Falha na conexão com o banco de dados: " . $conn->connect_error;
} else {
    echo "Conexão com o banco de dados bem-sucedida!";
}

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!isset($_POST['id_usuario']) || !is_numeric($_POST['id_usuario'])) {
        echo "<script>alert('ID do usuário ausente ou inválido. ID do usuário: " . $_POST['id_usuario'] . "');</script>";
        return;
    }

    // O ID do usuário é válido. Continue com o script.

    $id_usuario = $_POST['id_usuario'];

    // Obtém os dados do formulário
    $nome_completo = $_POST['nome_completo'];
    $telefone = $_POST['telefone'];
    $CID = $_POST['CID'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $email = $_POST['email'];
    $sobre = $_POST['sobre'];

    // Atualiza os dados do usuário
    $sql = "UPDATE cadastro_pessoal
    SET nome_completo = '$nome_completo',
        telefone = '$telefone',
        CID = '$CID',
        rua = '$rua',
        bairro = '$bairro',
        email = '$email',
        sobre = '$sobre'
    WHERE id_usuario = $id_usuario;";

if (isset($_POST['id_usuario']) && is_numeric($_POST['id_usuario'])) {
    // Obtém o ID do usuário
    $id_usuario = $_POST['id_usuario'];

    // Consulta para recuperar os dados da pessoa
    $query = "SELECT nome_completo, telefone, CID, rua, bairro, email, sobre FROM cadastro_pessoal WHERE id_usuario = $id_usuario";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        // Atribuindo os valores recuperados para as variáveis
        $nome_completo = $row['nome_completo'];
        $telefone = $row['telefone'];
        $CID = $row['CID'];
        $rua = $row['rua'];
        $bairro = $row['bairro'];
        $email = $row['email'];
        $sobre = $row['sobre'];
    } else {
        echo "Erro ao buscar os dados da vaga.";
    }
}

    $conn->query($sql);

    // Verifica se a atualização foi bem-sucedida
    if ($conn->affected_rows > 0) {
        // A atualização foi bem-sucedida

        // Redireciona para a página desejada
        header("Location: ../telaPerfilF/visualizacaoFisica.php");
        exit();
    } else {
        // A atualização falhou
        echo "<p>Ocorreu um erro ao atualizar os dados do usuário.</p>";
    }
}
?>