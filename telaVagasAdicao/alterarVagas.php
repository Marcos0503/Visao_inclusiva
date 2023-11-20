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

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'], $_POST['titulo'])) {
        // Obtenha os valores do formulário
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $empresa = $_POST['empresa'];
        $localizacao = $_POST['localizacao'];
        $salario = $_POST['salario'];
        $periodo = $_POST['periodo'];
        $tipo_contrato = $_POST['tipo_contrato'];
        $descricao = $_POST['descricao'];
        $atividades = $_POST['atividades'];
        $beneficios = $_POST['beneficios'];
        // Obtenha outros valores do formulário

        // Query para atualização da vaga no banco de dados
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

        // Executa a query de atualização
        if (mysqli_query($con, $update_query)) {
            echo "<script>alert('Dados atualizados com sucesso.');</script>";
            /* Redireciona para a página desejada após a atualização
            header("Location: listaVagas.php");
            exit();*/
        } else {
            echo "<script>alert('Erro ao atualizar os dados.');</script>";
            echo "Erro de atualização: " . mysqli_error($con);
        }
    } else {
        echo "<script>alert('ID ou título da vaga ausente.');</script>";
    }
}

mysqli_close($con);
?>

    
