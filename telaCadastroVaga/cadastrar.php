<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Verifica se o ID da empresa está na sessão
  if (isset($_SESSION['id_empresa'])) {
    // Obtém o ID da empresa da sessão
    $id_empresa = $_SESSION['id_empresa'];

    // Conecta-se ao banco de dados (substitua com suas credenciais)
    $servername = "seu_servidor";
    $username = "seu_usuario";
    $password = "sua_senha";
    $dbname = "seu_banco_de_dados";

    $conexao = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conexao->connect_error) {
      die("Conexão falhou: " . $conexao->connect_error);
    }

    // Consulta SQL para obter os dados da empresa
    $consulta_empresa = "SELECT * FROM cadastro_pj WHERE id_empresa = '$id_empresa'";
    $resultado_empresa = $conexao->query($consulta_empresa);

    if ($resultado_empresa->num_rows > 0) {
      // Extraindo os dados da empresa do resultado da consulta
      $row_empresa = $resultado_empresa->fetch_assoc();
      $email_da_empresa = $row_empresa["email"];
      // Você pode extrair outras informações da empresa conforme necessário

      // Restante do código para enviar o e-mail usando $id_empresa
      // ...

      // Resposta de sucesso para o AJAX
      echo 'E-mail enviado com sucesso!';
    } else {
      // Resposta de erro para o AJAX se a empresa não for encontrada
      http_response_code(400);
      echo 'Erro: Empresa não encontrada.';
    }

    // Feche a conexão com o banco de dados
    $conexao->close();
  } else {
    // Resposta de erro para o AJAX se o ID da empresa não estiver na sessão
    http_response_code(400);
    echo 'Erro: ID da empresa não encontrado na sessão.';
  }
} else {
  // Resposta de erro para o AJAX se o método da solicitação não for POST
  http_response_code(400);
  echo 'Erro ao processar a solicitação.';
}
?>
