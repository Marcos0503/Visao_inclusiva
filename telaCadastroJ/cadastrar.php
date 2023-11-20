<?php
$nome_empresa = $_POST['nome_empresa'];
$CNPJ = $_POST['CNPJ'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$ramo_empresa = $_POST['ramo_empresa'];
$rua = $_POST['rua'];
$pais = $_POST['pais'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['CEP'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Hash da senha para maior segurança
$sobre = $_POST['sobre'];

// Conectar ao banco de dados MySQL
$strcon = mysqli_connect("localhost", "root", "", "visãoinclusiva") or die("Erro ao conectar com o banco");

// Verificar duplicidade de email
$verificarEmail = "SELECT COUNT(*) as total FROM cadastro_pj WHERE email = '$email'";
$resultadoEmail = mysqli_query($strcon, $verificarEmail);
$totalEmail = mysqli_fetch_assoc($resultadoEmail)['total'];

if ($totalEmail > 0) {
    // Email já cadastrado, exiba uma mensagem amigável
    echo '<script>alert("O e-mail já está cadastrado. Por favor, use um e-mail diferente ou faça o login.");';
    echo 'window.location.href = "../telalogin/login.php";</script>';
    exit();
}

// Preparar a consulta SQL para inserir os dados usando Prepared Statements
$stmt = $strcon->prepare("INSERT INTO cadastro_pj (nome_empresa, CNPJ, email, telefone, ramo_empresa, rua, pais, bairro, cidade, estado, CEP, senha, sobre) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssssssss", $nome_empresa, $CNPJ, $email, $telefone, $ramo_empresa, $rua, $pais, $bairro, $cidade, $estado, $cep, $senha, $sobre);

if ($stmt->execute()) {
    // Obter o ID da empresa recém-inserida
    $idEmpresa = mysqli_insert_id($strcon);

    // Diretórios de upload para fotoPerfil e banner
    $uploadDirPerfil = '../imagemPerfilEmpresa/'; // Substitua pelo caminho real da sua pasta de upload para fotoPerfil
    $uploadDirBanner = '../banner/'; // Substitua pelo caminho real da sua pasta de upload para banner

    $fotoPerfil = isset($_FILES['fotoPerfil']) ? $_FILES['fotoPerfil'] : null;
    $banner = isset($_FILES['banner']) ? $_FILES['banner'] : null;

    // Verifique se os arquivos foram enviados sem erros
    if ($fotoPerfil && $banner && $fotoPerfil['error'] == 0 && $banner['error'] == 0) {
        // Gere nomes de arquivo únicos com o ID da empresa
        $fotoPerfilName = 'perfil_' . $idEmpresa . '_' . $fotoPerfil['name'];
        $bannerName = 'banner_' . $idEmpresa . '_' . $banner['name'];

        // Mova os arquivos para os diretórios de upload correspondentes
        move_uploaded_file($fotoPerfil['tmp_name'], $uploadDirPerfil . $fotoPerfilName);
        move_uploaded_file($banner['tmp_name'], $uploadDirBanner . $bannerName);

        // Atualize os caminhos dos arquivos no seu SQL
        $sqlUpdate = "UPDATE cadastro_pj SET caminho_foto_perfil = '$uploadDirPerfil$fotoPerfilName', caminho_banner = '$uploadDirBanner$bannerName' WHERE id_empresa = $idEmpresa";

        // Execute a atualização no banco de dados
        if (mysqli_query($strcon, $sqlUpdate)) {
            echo '<script>alert("Cadastro Pessoa Jurídica realizado com sucesso.");';
            echo 'window.location.href = "../telalogin/login.php";</script>';
            exit();
        } else {
            echo "Erro na atualização do SQL: " . mysqli_error($strcon);
        }
    } else {
        // Se houver erros no upload dos arquivos
        echo "Erro nos arquivos enviados";
    }
} else {
    die('Erro ao tentar cadastrar registro');
}

print_r($_POST);
?>
