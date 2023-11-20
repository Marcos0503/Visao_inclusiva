<?php
// ... Código para se conectar ao banco de dados ...

if (isset($_POST['submit'])) {
    $vaga_id = $_POST['vaga_id'];
    $novo_titulo = $_POST['titulo'];
    // Outros campos que você deseja atualizar

    // Query SQL para atualizar os dados da vaga
    $sql = "UPDATE cadastro_vagas SET titulo='$novo_titulo' WHERE id='$vaga_id'";
    
    // Executar a query de atualização
    if (mysqli_query($con, $sql)) {
        echo "Dados da vaga atualizados com sucesso.";
        // Redirecionar para uma página ou fazer algo após a atualização
    } else {
        echo "Erro ao atualizar os dados da vaga: " . mysqli_error($con);
    }
}
?>
