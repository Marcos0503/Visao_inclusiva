<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Conecte-se ao banco de dados (use as configurações apropriadas)
    $strcon = mysqli_connect("localhost", "root", "", "visãoinclusiva") or die("Erro ao conectar com o banco");

    // Consulta para verificar se o usuário existe em cadastro_pj ou cadastro_pessoal
    $sql_pj = "SELECT * FROM cadastro_pj WHERE email_empresa = '$email'";
    $result_pj = mysqli_query($strcon, $sql_pj);

    $sql_pessoal = "SELECT * FROM cadastro_pessoal WHERE email = '$email'";
    $result_pessoal = mysqli_query($strcon, $sql_pessoal);

    if ($result_pj && $result_pessoal) {
        $usuario_pj = mysqli_fetch_assoc($result_pj);
        $usuario_pessoal = mysqli_fetch_assoc($result_pessoal);

        if ($usuario_pj && password_verify($senha, $usuario_pj['senha'])) {
            echo "Login bem-sucedido para pessoa jurídica!";
        } elseif ($usuario_pessoal && password_verify($senha, $usuario_pessoal['senha'])) {
            echo "Login bem-sucedido para pessoa física!";
        } else {
            echo "Senha incorreta ou usuário não encontrado. Tente novamente.";
        }
    } else {
        echo "Erro ao consultar o banco de dados. Tente novamente.";
    }

    mysqli_close($strcon);
}
?>
