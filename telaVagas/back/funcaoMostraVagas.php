<?php

$host = "localhost";
$user = "root";
$password = ""; // Senha do seu banco de dados, se houver
$database = "visaoinclusiva"; // Nome do seu banco de dados

// Cria a conexão
$con = mysqli_connect($host, $user, $password, $database);

// Verifica a conexão
if (!$con) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

// Consulta as vagas
$query = "SELECT id, titulo, descricao, data_publicacao, empresa, localizacao, salario, tipo_contrato, requisitos FROM cadastro_vagas";
$result = mysqli_query($con, $query) or die("Erro ao consultar as vagas: " . mysqli_error($con));

// Inicializa um array para armazenar as vagas
$vagas = array();

// Adiciona as vagas ao array
while ($row = mysqli_fetch_assoc($result)) {
    $vagas[] = $row;
}

// Fecha a conexão
mysqli_close($con);
?>