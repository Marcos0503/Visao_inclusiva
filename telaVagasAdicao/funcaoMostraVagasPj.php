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


// Verifica a conexão
if (!$conexao) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

// Consulta as vagas
$query = "SELECT id, titulo, empresa, localizacao, salario, periodo, tipo_contrato, descricao, atividades, beneficios FROM cadastro_vagas";
$result = mysqli_query($conexao, $query) or die("Erro ao consultar as vagas: " . mysqli_error($conexao));

// Inicializa um array para armazenar as vagas
$vagas = array();

// Adiciona as vagas ao array
while ($row = mysqli_fetch_assoc($result)) {
    $vagas[] = $row;
}

// Fecha a conexão
mysqli_close($conexao);
?>