<?php

session_start();
include "conexao.php";

$id_empresa = isset($_SESSION['id_empresa']) ? $_SESSION['id_empresa'] : null;

if ($id_empresa !== null) {
    // Recupera o ID da vaga a ser atualizada (suponha que esteja sendo passado por GET)
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    if ($id !== null) {
        // Constrói a consulta de atualização para atribuir o id_empresa à vaga específica
        $update_query = "UPDATE cadastro_vagas SET id_empresa = '$id_empresa' WHERE id = $id";

        // Executa a consulta de atualização
        if (mysqli_query($conexao, $update_query)) {
           
        }
      }
    }



include_once('cadastrarVagas.php');
include_once('alterarVagas.php');
include_once('excluirVagas.php');



?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">
  <title>Adicione Sua Vaga</title>
  <!-- Principal CSS do Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Estilos customizados para esse template -->
  <link href="form-validation.css" rel="stylesheet">
  <!-- link do  bootstrap css-->
  <link href="css\bootstrapfisico.css" rel="stylesheet">
  <!-- link do css-->
  <link href="css/adiçao.css" rel="stylesheet">
  
  <style>
    /* Estilo do plano de fundo */
    body {
      background-image: url('../img/Fundo_azul_claro.png');
      /* Substitua pelo nome da imagem correta */
      background-size: cover;
      /* Ajusta o tamanho da imagem ao tamanho da janela */
      background-repeat: no-repeat;
      /* Evita a repetição da imagem */
    }

    /* Estilo para o cabeçalho abaixo */
    .bg{
      background-color: #2C5DAE; /* Cor de fundo do collapse */
    }
    .text{
      color: white;
    }
    .navbar {
      background-color:  #2C5DAE; /* Cor de fundo do cabeçalho */
      min-height: 80px;
    }

    .logo{
        margin-right: 5px;
        width: 120px;
        height: 50px;
    }

    .profile-icon {
    width: 40px; /* Ajuste conforme necessário */
    height: 40px; /* Ajuste conforme necessário */
    overflow: hidden;
    border-radius: 50%;
    border: 1px solid #000;
}

.profile-icon img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Garante que a imagem cubra completamente o círculo */
}
    /* Estilo para o cabeçalho acima */
    /* Centralizar o formulário */
    .center-form {
      display: flex;
      justify-content: center;
      align-items: center;
      /* height: 100vh;
      margin: 0; */
    }

    .formBotao{
      padding: 0;
      display: flex;
      border-radius: 10px;
    }

    .bnt-link{
      justify-content: space-between;
      width: 40%;
      background-color: #1F78D1;
      color: #fff;
      border-radius: 10px;
      text-decoration: none;
      /* Remove o sublinhado padrão */
      /* Define como um elemento em linha com bloco */
      padding: 10px 20px;
      /* Adapte o preenchimento conforme necessário */
      text-align: center;
      /* Centraliza o texto */
      font-weight: bold;
      /* Define o peso da fonte como negrito */
      border: none;
      margin: 0.5%;
      height: 20%;
      cursor: pointer;
    }

    .bnt-voltar{
      justify-content: space-between;
      background-color: #1F78D1;
      color: #fff;
      border-radius: 10px;
      text-decoration: none;
      text-align: center;
      /* Centraliza o texto */
      font-weight: bold;
      /* Define o peso da fonte como negrito */
      border: none;
      margin-left:80%;
      cursor: pointer;

    }

    .botaoExcluir{
      justify-content: space-between;
      width: 100%;
      background-color: #1F78D1;
      color: #fff;
      border-radius: 10px;
      text-decoration: none;
      /* Remove o sublinhado padrão */
      /* Define como um elemento em linha com bloco */
      padding: 10px 20px;
      /* Adapte o preenchimento conforme necessário */
      text-align: center;
      /* Centraliza o texto */
      font-weight: bold;
      /* Define o peso da fonte como negrito */
      border: none;
      cursor: pointer;
    }

    .titulo {
      color: black;
      font-size: 24px;
      font-family: 'Montserrat', sans-serif;
      font-weight: 400;
      line-height: 24px;
      word-wrap: break-word;
    }

    .info {
      color: black;
      font-size: 20px;
      font-family: arial;
      font-weight: 400;
      line-height: 24px;
      word-wrap: break-word
    }

    .empresa {
      display: inline-block;
      margin-left: 5%;
    }

    .entrada, textarea{
      border-radius: 10px;
      border: none;
      width: 100%;
      margin-top: 2%;
      height: 6vh;
      background-color: #C2D7E8;
      padding-left: 2%; 
    }

    .bnt-exibir {
      width: 50%;
      height: 50%;
      background-color: #1F78D1;
      color: #fff;
      display: inline-block;
      margin-left: 30%;
    }

    .card {
      border-radius: 10px;
      background-color: rgba(245, 245, 220, 0.5);
      color: #000;
      font-family: 'Montserrat', sans-serif;
      margin: 2.5% auto; /* Centraliza horizontalmente com 'auto' e define a margem superior e inferior */
      padding: 2%;
      overflow: hidden;
      height: 20%;
      width: 65%;
      box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    }

    .botoes-container {
      display: flex;
      justify-content: space-between; /* Isso distribuirá os elementos igualmente na largura da caixa flexível */
      margin-top: 10px; /* Ajuste conforme necessário */
    }

  </style>

</head>

<body>
<header>
        <div class="collapse bg" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Sobre</h4>
              <p class="text">Adicione alguma informação sobre o álbum abaixo (autor ou qualquer outro background). Faça essas informações terem algumas frases, para a galera ter algumas informações que besliscar. Além disso, use link nelas para as redes sociais ou informações de contato.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contato</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Me siga no Twitter</a></li>
                <li><a href="#" class="text-white">Curta no Facebook</a></li>
                <li><a href="#" class="text-white">Me envie um e-mail</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
          <img class="logo" src="../img/logoFinal.png" alt="Logo Visão Inclusiva" height="35" width="85">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
            <div class="navbar-nav ml-auto">
                <!--o <a> é onde vai entrar o link para a tela de perfil da pessoa-->
                <a class="nav-link" href="C:\xampp\htdocs\www\Vi_inclusiva\Visao_inclusiva\telaEditarF\editarPessoaJuridica.php">
                    <div class="profile-icon">
                        <!-- Adicione uma imagem de perfil ou ícone de usuário padrão -->
                        <img src="../img/userBase.png" alt="Perfil">
                    </div>
                </a>
            </div>
      </div>
        </header>

   
        <div class="card">
        <a class="bnt-voltar" href="telaVagasPj.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="50" height="50">
  <path d="M256 73.82A182.18 182.18 0 1 0 438.18 256 182.18 182.18 0 0 0 256 73.82zm90.615 272.724a24.554 24.554 0 0 1-34.712 0l-54.664-54.667-57.142 57.146a24.544 24.544 0 0 1-34.704-34.717l57.138-57.128-53.2-53.209a24.547 24.547 0 0 1 34.712-34.717l53.196 53.208 50.717-50.72a24.547 24.547 0 0 1 34.713 34.716l-50.713 50.722 54.659 54.65a24.56 24.56 0 0 1 0 34.717z" data-name="Close"/>
</svg>
</a>

        <form action="processarVaga.php" method="POST">
    <input type="hidden" name="action" value="addOrUpdate">
    <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>">

        <div class="mb-3">
      
          <h1 class="titulo">Sobre a Vaga</h1>
          <input class="entrada" type="text" name="titulo" value="<?php echo isset($titulo) ? $titulo : ''; ?>"
            placeholder="Titulo da vaga">
          <input class="entrada" type="text" name="empresa" value="<?php echo isset($empresa) ? $empresa : ''; ?>"
            placeholder="Nome da empresa">
          <input class="entrada" type="text" name="localizacao" value="<?php echo isset($localizacao) ? $localizacao : ''; ?>"
            placeholder="Local">
          <input class="entrada" type="text" name="salario" value="<?php echo isset($salario) ? $salario : ''; ?>"
            placeholder="Salário">
          <input class="entrada" type="text" name="periodo" value="<?php echo isset($periodo) ? $periodo : ''; ?>"
            placeholder="Periodo">
          <datalist id="periodo">
            <input></input>
            <option value=" Tempo Integral">
            <option value=" Meio Período">
          </datalist>
          <input class="entrada" type="text" name="tipo_contrato" value="<?php echo isset($tipo_contrato) ? $tipo_contrato : ''; ?>"
            placeholder="Tipo de Contrato">
          <datalist id="tipo">
            <input></input>
            <option value=" Estagio">
            <option value="Assistente">
            <option value="analista">
          </datalist>
        </div>
        <div class="mb-3">
          <h1 class="titulo">Descrição</h1>
          <textarea name="descricao"><?php echo isset($descricao) ? $descricao : ''; ?></textarea>
        </div>
        <div class="mb-3">
          <h1 class="titulo">Atividades</h1>
          <textarea name="atividades"><?php echo isset($atividades) ? $atividades : ''; ?></textarea>
        </div>
        <div class="mb-3">
          <h1 class="titulo">Benefícios</h1>
          <textarea name="beneficios"><?php echo isset($beneficios) ? $beneficios : ''; ?></textarea>
          <div class="botoes-container">
          <input type="submit" name="submit" class="bnt-link" value="Enviar">

          
        <!-- Método excluir vagas -->
        <input type="hidden" name="delete" value="<?php echo $id; ?>">
            <a class="bnt-link" href="adicaoDeVagas.php?delete_id=<?php echo $id; ?>"
              onclick="return confirm('Tem certeza que deseja excluir esta vaga?')">Excluir</a>

    </form>
  </div>
</body>

</html>