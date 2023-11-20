
<?php

// Função para buscar o caminho do currículo no banco de dados
function buscarCaminhoCurriculoNoBD($idVaga) {
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

    // Consulta SQL para obter o caminho do currículo com base no ID da vaga
    $sql = "SELECT caminho_curriculo FROM tabela_vagas WHERE id = $idVaga";

    // Executar a consulta
    $resultado = mysqli_query($con, $sql);

    // Verificar se a consulta foi bem-sucedida
    if ($resultado) {
        // Obter o caminho do currículo a partir do resultado da consulta
        $linha = mysqli_fetch_assoc($resultado);
        $caminhoCurriculo = $linha['caminho_curriculo'];

        // Fechar a conexão com o banco de dados
        mysqli_close($con);

        return $caminhoCurriculo;
    } else {
        // Em caso de falha na consulta, você pode adotar uma abordagem apropriada, como registrar o erro
        echo "Erro na consulta SQL: " . mysqli_error($con);
        mysqli_close($con);
        return false;
    }
}

// Lógica para conectar ao banco de dados e buscar o currículo com base no idVaga
// Suponha que você tenha uma função como buscarCaminhoCurriculoNoBD($idVaga) que retorna o caminho do currículo

$idVaga = $_GET["idVaga"];
$caminhoCurriculo = buscarCaminhoCurriculoNoBD($idVaga);

// Verifique se o caminho do currículo foi encontrado
if ($caminhoCurriculo !== false) {
    // Configurar os cabeçalhos para forçar o download do arquivo
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($caminhoCurriculo));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($caminhoCurriculo));

    // Ler e enviar o arquivo
    readfile($caminhoCurriculo);
    exit;
} else {
    echo "Currículo não encontrado.";
}
