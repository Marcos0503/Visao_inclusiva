<?php
session_start();

$nome_completo = $_POST['nome_Completo'];
$telefone = $_POST['telefone'];
$date_nasc = $_POST['date_nasc'];
$CID = $_POST['CID'];
$email = $_POST['email'];
$rua = $_POST['rua'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$pais = $_POST['pais'];
$estado = $_POST['estado'];
$CEP = $_POST['CEP'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$sobre = $_POST['sobre'];

$uploadDirImagem = '../imagem_perfil/';
$fotoPerfilName = $_FILES['fotoPerfil']['name'];
$id_usuario = uniqid();
$fotoPerfilName = $id_usuario . '_' . $fotoPerfilName;
$fotoPerfilPath = $uploadDirImagem . $fotoPerfilName;

if ($_FILES['fotoPerfil']['error'] !== UPLOAD_ERR_OK) {
    die('Erro no upload da imagem');
}

$strcon = mysqli_connect("localhost", "root", "", "visãoinclusiva") or die("Erro ao conectar com o banco");

$verificarEmail = "SELECT COUNT(*) as total FROM cadastro_pessoal WHERE email = '$email'";
$resultadoEmail = mysqli_query($strcon, $verificarEmail);
$totalEmail = mysqli_fetch_assoc($resultadoEmail)['total'];

if ($totalEmail > 0) {
    echo '<script>alert("O e-mail já está cadastrado. Por favor, use um e-mail diferente ou faça login.");';
    echo 'window.location.href = "../telalogin/login.php";</script>';
    exit();
}

// Salva o ID do usuário na sessão
$_SESSION['id_usuario'] = $id_usuario;

$stmt = $strcon->prepare("INSERT INTO cadastro_pessoal (nome_completo, telefone ,date_nasc,  CID, email, rua, cidade, bairro, pais, estado, CEP, senha, sobre, caminho_foto_perfil) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssssssss", $nome_completo,$telefone, $date_nasc, $CID, $email, $rua, $cidade, $bairro, $pais, $estado, $CEP, $senha, $sobre, $fotoPerfilPath);

if ($stmt->execute()) {
    move_uploaded_file($_FILES['fotoPerfil']['tmp_name'], $fotoPerfilPath);

    echo '<script>alert("Cadastro Pessoa Física realizado com sucesso.");';
    echo 'window.location.href = "../telalogin/login.php";</script>';
    exit();
} else {
    echo "Erro ao tentar cadastrar registro: " . $stmt->error;
}

mysqli_close($strcon);
?>
