<?php
    $razaoSocial = $_POST['nome_empresa'];
    $cnpj = $_POST['CNPJ'];
    $ramo = $_POST['ramo_empresa'];
    $email = $_POST['email_empresa'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['rua'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $pais = $_POST['pais'];
    $estado = $_POST['estado'];
    $cep = $_POST['CEP'];
    $senha = $_POST['senha'];
    // Adicione o mesmo para os outros campos do formulário

    $strcon = mysqli_connect("localhost", "root", "", "visãoinclusiva") or die("Erro ao conectar com o banco");

    $sql = "INSERT INTO cadastro_pj (razaoSocial, cnpj, ramo, email, telefone, endereco, cidade, bairro, pais, estado, cep, senha) VALUES ('$razaoSocial', '$cnpj', '$ramo', '$email', '$telefone', '$endereco', '$cidade', '$bairro', '$pais', '$estado', '$cep', '$senha')";

    mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');

    echo "Cadastro Pessoa Jurídica realizado com sucesso";
?>
