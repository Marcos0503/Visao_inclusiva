<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Interesse</title>
</head>
<body>

<h2>Formulário de Interesse</h2>

<?php
$server = "localhost";
$usuario = "root";
$senha = "";
$banco = "visãoinclusiva";
$conn = new mysqli($server, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$corpo_email = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Processar o formulário automaticamente
    $nome_empresa = "Nome da Empresa Padrão";  // Substitua pelo valor desejado
    $nome_completo = "Nome Completo Padrão";  // Substitua pelo valor desejado

    $query_empresa = "SELECT * FROM cadastro_pj WHERE nome_empresa = '$nome_empresa'";
    $result_empresa = $conn->query($query_empresa);

    if ($result_empresa->num_rows > 0) {
        $dados_empresa = $result_empresa->fetch_assoc();

        $id_empresa = $dados_empresa["id_empresa"];
        $id_pessoa = $dados_empresa["id_pessoa"];

        // Construir o corpo do e-mail
        $corpo_email = "Prezado(a) " . $dados_empresa["nome_empresa"] . ",\n\n";
        $corpo_email .= "Me chamo " . $nome_completo . " e estou interessado(a) na oportunidade na " . $dados_empresa["nome_empresa"] . ". ";
        $corpo_email .= "Destaco o meu comprometimento em contribuir para o sucesso da equipe.\n";
        $corpo_email .= "Estou animado(a) com a possibilidade de integrar a " . $dados_empresa["nome_empresa"] . " e gostaria de discutir como minhas habilidades podem atender às necessidades da equipe em uma entrevista. ";
        $corpo_email .= "Agradeço a consideração do meu currículo.\n\n";
        $corpo_email .= "Atenciosamente,\n" . $nome_completo . "\n" . $dados_empresa["telefone"] . "\n" . $dados_empresa["email"];
    } else {
        echo "<p>Empresa não encontrada.</p>";
    }
}
?>

<form action="" method="post">
    <?php if (!empty($corpo_email)): ?>
        <p><strong>Corpo do E-mail:</strong></p>
        <pre><?php echo htmlspecialchars($corpo_email); ?></pre>
        <input type="submit" value="Enviar E-mail">
    <?php else: ?>
        <input type="submit" value="Cadastrar Interesse">
    <?php endif; ?>
</form>

</body>
</html>
