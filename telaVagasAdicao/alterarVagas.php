<?php
$host = "localhost";
$user = "root";
$password = ""; // Senha do seu banco de dados, se houver
$database = "visaoinclusiva"; // Nome do seu banco de dados

$con = mysqli_connect($host, $user, $password, $database);

if (!$con) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}
// Verifica se o formulário de atualização foi submetido
if (isset($_POST['update'])) {
    $id = $_POST['id']; // Recupera o ID da vaga a ser atualizada

    // Recupera os novos valores dos campos do formulário
    $titulo = $_POST['titulo'];
    $empresa = $_POST['empresa'];
    $localizacao = $_POST['localizacao'];
    $salario = $_POST['salario'];
    $periodo = $_POST['periodo'];
    $tipo_contrato = $_POST['tipo_contrato'];
    $descricao = $_POST['descricao'];
    $atividades = $_POST['atividades'];
    $beneficios = $_POST['beneficios'];

    // Query para atualizar os dados da vaga no banco de dados
    $update_query = "UPDATE cadastro_vagas SET
                     titulo = '$titulo',
                     empresa = '$empresa',
                     localizacao = '$localizacao',
                     salario = '$salario',
                     periodo = '$periodo',
                     tipo_contrato = '$tipo_contrato',
                     descricao = '$descricao',
                     atividades = '$atividades',
                     beneficios = '$beneficios'
                     WHERE id = $id";

    if (mysqli_query($con, $update_query)) {
        echo "<script>alert('Vaga atualizada com sucesso.');</script>";
        // Redirecionar para evitar o reenvio do formulário após a atualização
        header("Location: adicaoDeVagas.php?id=$id");
        exit();
    } else {
        echo "<script>alert('Erro ao atualizar a vaga.');</script>";
        echo "Erro de atualização: " . $update_query . "<br>" . mysqli_error($con);
    }
}
?>