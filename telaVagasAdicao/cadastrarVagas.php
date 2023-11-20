<?php
$host = "localhost";
$user = "root";
$password = ""; // Senha do seu banco de dados, se houver
$database = "visaoinclusiva"; // Nome do seu banco de dados

$con = mysqli_connect($host, $user, $password, $database);

if (!$con) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $titulo = $_POST['titulo'];
    $empresa = $_POST['empresa'];
    $localizacao = $_POST['localizacao'];
    $salario = $_POST['salario'];
    $periodo = $_POST['periodo'];
    $tipo_contrato = $_POST['tipo_contrato'];
    $descricao = $_POST['descricao'];
    $atividades = $_POST['atividades'];
    $beneficios = $_POST['beneficios'];

    $result = "INSERT INTO cadastro_vagas (
        titulo, empresa, localizacao, salario, periodo, tipo_contrato, descricao, atividades, beneficios)
        VALUES ('$titulo', '$empresa', '$localizacao', '$salario', '$periodo', '$tipo_contrato', '$descricao', '$atividades', '$beneficios')";

    if (mysqli_query($con, $result)) {
        $ultimo_id = mysqli_insert_id($con);
        echo "<script>alert('Registrado com sucesso. ID: $ultimo_id');</script>";
        // Redirecionar para a nova página usando o último ID inserido
        header("Location: adicaoDeVagas.php?id=$ultimo_id");
        exit(); // Certifique-se de parar a execução após o redirecionamento
    } else {
        echo "<script>alert('Erro ao cadastrar. Por favor, tente novamente mais tarde.');</script>";
        echo "Erro de cadastro: " . $result . "<br>" . mysqli_error($con);
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta para recuperar os dados da vaga específica
    $query = "SELECT titulo, empresa, localizacao, salario, periodo, tipo_contrato, descricao, atividades, beneficios FROM cadastro_vagas WHERE id = $id";
    $result = mysqli_query($con, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        // Atribuindo os valores recuperados para as variáveis
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
        echo "Erro ao buscar os dados da vaga.";
    }
}


?>