<?php
session_start();

// Obtém o ID do usuário da sessão
$id_usuario = isset($_SESSION['id_usuario']) ? $_SESSION['id_usuario'] : '';

// Função para conectar ao banco de dados
function conectarBancoDados() {
    $server = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "visãoinclusiva";

    $conn = new mysqli($server, $usuario, $senha, $banco);

    if ($conn->connect_error) {
        die("Conexão com o banco de dados falhou: " . $conn->connect_error);
    }

    return $conn;
}

// Função para fechar a conexão com o banco de dados
function fecharConexao($conn) {
    $conn->close();
}

// Função para verificar se o usuário existe na tabela cadastro_pessoal
function usuarioExiste($conn, $id_usuario) {
    $sql = "SELECT COUNT(*) as total FROM cadastro_pessoal WHERE id_usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id_usuario);
    $stmt->execute();
    $result = $stmt->get_result();
    $total = $result->fetch_assoc()['total'];
    return $total > 0;
}

// Função para obter o ID do currículo se já existir
function obterIdCurriculo($conn, $id_usuario) {
    $sql = "SELECT id_curriculo FROM curriculo WHERE id_usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id_usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['id_curriculo'];
    }

    return false;
}

// Função para inserir dados principais do currículo
function inserirDadosPrincipais($conn, $id_usuario, $titulo) {
    $sql = "INSERT INTO curriculo (id_usuario, Objetivo) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $id_usuario, $titulo);

    if ($stmt->execute()) {
        return $conn->insert_id;
    } else {
        return false;
    }
}

// Função para inserir formação acadêmica
function inserirFormacaoAcademica($conn, $id_curriculo, $instituicao, $curso, $ano_conclusao) {
    $sql = "INSERT INTO formacao_academica (id_curriculo, instituicao, curso, ano_conclusao) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isss", $id_curriculo, $instituicao, $curso, $ano_conclusao);

    return $stmt->execute();
}

// Função para inserir experiência profissional
function inserirExperienciaProfissional($conn, $id_curriculo, $empresa, $cargo, $ano_inicio, $ano_fim) {
    $sql = "INSERT INTO experiencia_profissional (id_curriculo, empresa, cargo, ano_inicio, ano_fim) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssi", $id_curriculo, $empresa, $cargo, $ano_inicio, $ano_fim);

    return $stmt->execute();
}

// Função para inserir habilidades
function inserirHabilidades($conn, $id_curriculo, $habilidade, $nivel) {
    $sql = "INSERT INTO habilidades (id_curriculo, habilidade, nivel) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $id_curriculo, $habilidade, $nivel);

    return $stmt->execute();
}

// Conecta ao banco de dados
$conn = conectarBancoDados();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];

    // Verifica se o usuário existe
    if (usuarioExiste($conn, $id_usuario)) {
        $id_curriculo = obterIdCurriculo($conn, $id_usuario);

        // Se não existir um currículo, insere dados principais
        if (!$id_curriculo) {
            $id_curriculo = inserirDadosPrincipais($conn, $id_usuario, $titulo);

            if (!$id_curriculo) {
                echo "Erro ao inserir dados principais.";
                exit();
            }
        }

        // Inserir formações acadêmicas
        foreach ($_POST['instituicao'] as $key => $value) {
            $instituicao = $_POST['instituicao'][$key];
            $curso = $_POST['curso'][$key];
            $ano_conclusao = $_POST['ano_conclusao'][$key];

            inserirFormacaoAcademica($conn, $id_curriculo, $instituicao, $curso, $ano_conclusao);
        }

        // Inserir experiências profissionais
        foreach ($_POST['empresa'] as $key => $value) {
            $empresa = $_POST['empresa'][$key];
            $cargo = $_POST['cargo'][$key];
            $ano_inicio = $_POST['ano_inicio'][$key];
            $ano_fim = $_POST['ano_fim'][$key];

            // Se não existir um currículo, obtemos o id_curriculo
            if (!$id_curriculo) {
                $id_curriculo = obterIdCurriculo($conn, $id_usuario);
            }

            inserirExperienciaProfissional($conn, $id_curriculo, $empresa, $cargo, $ano_inicio, $ano_fim);
        }

        // Inserir habilidades
        foreach ($_POST['habilidade'] as $key => $value) {
            $habilidade = $_POST['habilidade'][$key];
            $nivel = $_POST['nivel'][$key];

            inserirHabilidades($conn, $id_curriculo, $habilidade, $nivel);
        }

        // Redirecionar para a página de vagas
        header("Location: ../telaVagas/telaVagas.php");
        exit();
    } else {
        echo "O usuário com o ID $id_usuario não existe na tabela cadastro_pessoal.<br>";
    }
}

// Fechar a conexão com o banco de dados
fecharConexao($conn);
?>
