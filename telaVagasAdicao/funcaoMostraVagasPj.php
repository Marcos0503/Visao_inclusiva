<?php
session_start();
include "conexao.php";


// Obtém o ID da empresa da sessão, se existir
$id_empresa = isset($_SESSION['id_empresa']) ? $_SESSION['id_empresa'] : null;

if ($id_empresa !== null) {
    // Consulta as vagas relacionadas à empresa específica
    $query = "SELECT id,empresa, titulo, localizacao, salario, periodo, tipo_contrato, descricao, atividades, beneficios FROM cadastro_vagas WHERE id_empresa = $id_empresa";
    $result = mysqli_query($conexao, $query) or die("Erro ao consultar as vagas: " . mysqli_error($conexao));

    // Inicializa um array para armazenar as vagas
    $vagas = array();

    // Adiciona as vagas ao array
    while ($row = mysqli_fetch_assoc($result)) {
        $vagas[] = $row;
    }

    // Fecha a conexão
    mysqli_close($conexao);
} else {
    echo "ID da empresa não encontrado na sessão.";
}
?>
