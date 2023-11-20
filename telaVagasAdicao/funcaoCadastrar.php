<?php

$server = "localhost";
$usuario = "root";
$senha = "";
$banco = "visãoinclusiva";
$conexao = mysqli_connect($server, $usuario, $senha);
$db = mysqli_select_db($conexao, $banco);
// Verifica a conexão
if (!$conexao) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) 
{
  /* 

  teste para ver se ta enviando os dados  

  print_r($_POST['titulo']);
  print_r($_POST['empresa']);
  print_r($_POST['descricao']);
  print_r($_POST['localizacao']);
  print_r($_POST['salario']);
  print_r($_POST['periodo']);
  print_r($_POST['tipo_contrato']);
  print_r($_POST['atividades']);
  print_r($_POST['beneficios']); */

  $titulo = ( $_POST['titulo']);
  $empresa = ($_POST['empresa']);
  $localizacao = ( $_POST['localizacao']);
  $salario = ( $_POST['salario']);
  $periodo = ( $_POST['periodo']);
  $tipo_contrato = ( $_POST['tipo_contrato']);
  $descricao = ($_POST['descricao']);
  $atividades = ( $_POST['atividades']);
  $beneficios = ( $_POST['beneficios']);

  $result = "INSERT INTO cadastro_vagas (
    titulo,empresa, localizacao, salario, periodo , tipo_contrato, descricao,atividades,beneficios)
    VALUES ('$titulo','$empresa','$localizacao','$salario','$periodo','$tipo_contrato','$descricao','$atividades','$beneficios')";

if (mysqli_query($conexao, $result)) {
  echo "<script>alert('Registrado com sucesso');</script>";

} else {
  echo "<script>alert('Erro ao cadastrar. Por favor, tente novamente mais tarde.');</script>";
  echo "Erro de cadastro: " . $result . "<br>" . mysqli_error($conexao);
}
mysqli_close($conexao);

}







if (isset($_POST['delete'])) {
    // Verificar se o ID a ser removido foi fornecido pelo formulário (substitua 'id' pelo nome do seu campo identificador)
    if (isset($_POST['id_para_remover'])) {
        $id_para_remover = $_POST['id_para_remover'];

        // Query para apagar os dados com base no ID (neste exemplo)
        $delete_query = "DELETE FROM cadastro_vagas WHERE id = '$id_para_remover'";

        // Executa a query DELETE
        if (mysqli_query($conexao, $delete_query)) {
            echo "<script>alert('Registro apagado com sucesso');</script>";
        } else {
            echo "<script>alert('Erro ao apagar registro. Por favor, tente novamente mais tarde.');</script>";
            echo "Erro ao apagar registro: " . mysqli_error($conexao);
        }
    } else {
        echo "<script>alert('ID para remoção não fornecido');</script>";
    }
}

mysqli_close($conexao);

?>








