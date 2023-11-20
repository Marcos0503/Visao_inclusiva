<?php
$host = "localhost";
$user = "root";
$password = ""; // Senha do seu banco de dados, se houver
$database = "visaoinclusiva"; // Nome do seu banco de dados

$con = mysqli_connect($host, $user, $password, $database);

if (!$con) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

// ... (Outras partes do seu código)

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST['id']; // ID da vaga a ser atualizada
    $titulo = $_POST['titulo'];
    $empresa = $_POST['empresa'];
    $localizacao = $_POST['localizacao'];
    $salario = $_POST['salario'];
    $periodo = $_POST['periodo'];
    $tipo_contrato = $_POST['tipo_contrato'];
    $descricao = $_POST['descricao'];
    $atividades = $_POST['atividades'];
    $beneficios = $_POST['beneficios'];

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
        // Redirecionar para a página de detalhes da vaga
        header("Location: detalhesVaga.php?id=$id");
        exit();
    } else {
        echo "<script>alert('Erro ao atualizar a vaga. Por favor, tente novamente mais tarde.');</script>";
        echo "Erro de atualização: " . mysqli_error($con);
    }
}

// Recuperar os detalhes da vaga para edição
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM cadastro_vagas WHERE id = $id";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $titulo = $row['titulo'];
        $empresa = $row['empresa'];
        $localizacao = $row['localizacao'];
        $salario = $row['salario'];
        $periodo = $row['periodo'];
        $tipo_contrato = $row['tipo_contrato'];
        $descricao = $row['descricao'];
        $atividades = $row['atividades'];
        $beneficios = $row['beneficios'];
    } else {
        echo "Nenhum resultado encontrado.";
    }
}



mysqli_close($con); // Fechar a conexão com o banco de dados
?>
