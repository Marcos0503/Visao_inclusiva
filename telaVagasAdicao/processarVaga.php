<?php
// Conexão com o banco de dados
$host = "localhost";
$user = "root";
$password = ""; // Senha do seu banco de dados, se houver
$database = "visaoinclusiva"; // Nome do seu banco de dados

$con = mysqli_connect($host, $user, $password, $database);

if (!$con) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'addOrUpdate') {
        // Verifique se é uma adição ou atualização
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            // Se existir um ID, é uma atualização
            include 'alterarVagas.php';
        } else {
            // Se não houver ID, é uma adição
            include 'cadastrarVagas.php';
        }
    }
}
?>
