<?php
$nome_completo = $_POST['nome_Completo'];
$RG = $_POST['RG'];
$date_nasc = $_POST['date_nasc'];
$CPF = $_POST['CPF'];
$telefone = $_POST['telefone'];
$CID = $_POST['CID'];
$email = $_POST['email'];
$rua = $_POST['rua'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$pais = $_POST['pais'];
$estado = $_POST['estado'];
$CEP = $_POST['CEP'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Hash da senha para maior segurança
$sobre = $_POST['sobre'];

// Diretórios para salvar os arquivos (ajuste conforme necessário)
$uploadDirCurriculo = '../curriculo/';
$uploadDirImagem = '../imagem_perfil/';

// Nome dos arquivos
$curriculoName = $_FILES['curriculo']['name'];
$fotoPerfilName = $_FILES['fotoPerfil']['name'];

// Caminhos completos dos arquivos
$curriculoPath = $uploadDirCurriculo . $curriculoName;
$fotoPerfilPath = $uploadDirImagem . $fotoPerfilName;

// Verifica se o currículo e a imagem foram enviados corretamente
if ($_FILES['curriculo']['error'] !== UPLOAD_ERR_OK || $_FILES['fotoPerfil']['error'] !== UPLOAD_ERR_OK) {
    die('Erro no upload do currículo ou da imagem');
}

// Conectar ao banco de dados MySQL
$strcon = mysqli_connect("localhost", "root", "", "visãoinclusiva") or die("Erro ao conectar com o banco");

// Verificar duplicidade de email
$verificarEmail = "SELECT COUNT(*) as total FROM cadastro_pessoal WHERE email = '$email'";
$resultadoEmail = mysqli_query($strcon, $verificarEmail);
$totalEmail = mysqli_fetch_assoc($resultadoEmail)['total'];

if ($totalEmail > 0) {
    echo '<script>alert("O e-mail já está cadastrado. Por favor, use um e-mail diferente ou faça login.");';
    echo 'window.location.href = "../telalogin/login.php";</script>';
    exit();
}

// Preparar a consulta SQL para inserir os dados usando Prepared Statements
$stmt = $strcon->prepare("INSERT INTO cadastro_pessoal (nome_completo, RG, date_nasc, CPF, telefone, CID, email, rua, cidade, bairro, pais, estado, CEP, senha, curriculo, sobre, caminho_foto_perfil) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssssssssssss", $nome_completo, $RG, $date_nasc, $CPF, $telefone, $CID, $email, $rua, $cidade, $bairro, $pais, $estado, $CEP, $senha, $curriculoName, $sobre, $fotoPerfilPath);

// Executar a consulta SQL
if ($stmt->execute()) {
    // Obter o ID recém-inserido
    $id_usuario = mysqli_insert_id($strcon);

    // Modificar os nomes dos arquivos para incluir o ID
    $curriculoName = $id_usuario . '_' . $curriculoName;
    $fotoPerfilName = $id_usuario . '_' . $fotoPerfilName;

    // Atualizar os caminhos completos dos arquivos
    $curriculoPath = $uploadDirCurriculo . $curriculoName;
    $fotoPerfilPath = $uploadDirImagem . $fotoPerfilName;

    // Mover os arquivos para os diretórios de upload com os novos nomes
    move_uploaded_file($_FILES['curriculo']['tmp_name'], $curriculoPath);
    move_uploaded_file($_FILES['fotoPerfil']['tmp_name'], $fotoPerfilPath);

    echo '<script>alert("Cadastro Pessoa Física realizado com sucesso.");';
    echo 'window.location.href = "../telalogin/login.php";</script>';
    exit();
} else {
    echo "Erro ao tentar cadastrar registro: " . $stmt->error;
}

// Fechar a conexão com o banco de dados
mysqli_close($strcon);
?>
