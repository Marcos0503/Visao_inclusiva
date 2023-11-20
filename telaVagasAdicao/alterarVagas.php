<?php
// Conexão com o banco de dados
$server = "localhost";
$usuario = "root";
$senha = "";
$banco = "visãoinclusiva";
$conexao = mysqli_connect($server, $usuario, $senha);
$db = mysqli_select_db($conexao, $banco);

if (!$conexao) {
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
        if (mysqli_query($conexao, $update_query)) {
            echo "<script>alert('Dados atualizados com sucesso.');</script>";
            header("Location: adicaoDeVagas.php?id=$id");
            exit(); // Certifique-se de parar a execução após o redirecionamento
            /* Redireciona para a página desejada após a atualização
            header("Location: listaVagas.php");
            exit();*/
        } else {
            echo "<script>alert('Erro ao atualizar os dados.');</script>";
            echo "Erro de atualização: " . mysqli_error($conexao);
        }
    } else {
        echo "<script>alert('ID ou título da vaga ausente.');</script>";
    }
}

mysqli_close($conexao);
?>

    
