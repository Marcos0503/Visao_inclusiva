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
$senha = $_POST['senha'];

// Conectar ao banco de dados MySQL
$strcon = mysqli_connect("localhost", "root", "", "visãoinclusiva") or die("Erro ao conectar com o banco");

// Preparar a consulta SQL para inserir os dados
$sql = "INSERT INTO cadastro_pj (nome_empresa, CNPJ, email, telefone, ramo_empresa, rua, pais, bairro, cidade, estado, CEP, senha) 
        VALUES ('$nome_empresa', '$CNPJ', '$email', '$telefone', '$ramo_empresa', '$rua', '$pais', '$bairro', '$cidade', '$estado', '$cep', '$senha')";

if (mysqli_query($strcon, $sql)) {
   echo "Cadastro Pessoa Jurídica realizado com sucesso";
   header("Location: ../telalogin/login.php");
   exit();
} else {
   die('Erro ao tentar cadastrar registro');
}

print_r($_POST);
?>

