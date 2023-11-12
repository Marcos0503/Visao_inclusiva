<?php
    $razaoSocial = $_POST['nome_empresa'];
    $cnpj = $_POST['CNPJ'];
    $email = $_POST['email_empresa'];
    $telefone = $_POST['telefone'];
    $ramo = $_POST['ramo_empresa'];
    $endereco = $_POST['rua'];
    $pais = $_POST['pais'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['CEP'];
    $senha = $_POST['senha'];
    // Adicione o mesmo para os outros campos do formulário

    $strcon = mysqli_connect("localhost", "root", "", "visãoinclusiva") or die("Erro ao conectar com o banco");

    $sql = "INSERT INTO cadastro_pj (razaoSocial, cnpj, ramo, email, telefone, endereco, cidade, bairro, pais, estado, cep, senha) VALUES ('$razaoSocial', '$cnpj', '$ramo', '$email', '$telefone', '$endereco', '$cidade', '$bairro', '$pais', '$estado', '$cep', '$senha')";

    mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');

    echo "Cadastro Pessoa Jurídica realizado com sucesso";
?>
