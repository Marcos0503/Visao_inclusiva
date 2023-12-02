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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="keywords" content="visão, inclusiva, pcd, neurodivergente, igualdade, vagas, emprego, trabalho">
  <meta name="description" content="Seja bem vindo ao Visão Inclusiva, um site onde você pode encontrar vagas de emprego para pessoas com
        deficiência e neurodivergentes">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="form-validation.css" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="\..\VI_Vagas\estilo\telaVagas.css" media="screen" /> -->

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

    /* pra baixo nav bar */
    .bg {
      background-color: #2C5DAE;
      /* Cor de fundo do collapse */
    }

    .text {
      color: white;
    }

    .navbar {
      background-color: #2C5DAE;
      /* Cor de fundo do cabeçalho */
      min-height: 80px;
    }

    .logo {
      margin-right: 5px;
    }

    .profile-icon {
      width: 40px;
      height: 40px;
      overflow: hidden;
      border-radius: 50%;
      border: 1px solid #000;
    }

    .profile-icon img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .navbar-nav .dropdown-toggle::after {
      display: none;
    }

    .navbar-nav .dropdown-toggle::before {
      display: none;
    }

    .navbar-nav .nav-link {
      display: flex;
      align-items: center;
    }


    .navbar-toggler {

      margin-left: 60%;
    }


    .dropdown-item {
      height: 100%;
    }

    .dropdown-menu {
      text-align: center;
      border-radius: 10px;
      display: none;
      background-color: #2C5DAE;
      border: none;
    }

    .dropdown-menu button {
      width: 100%;
      text-align: left;
      display: block;
      padding: 8px 16px;
      border-radius: 10px;
      margin-bottom: 8px;
      background-color: #C2D7E8;
      color: #fff;
    }

    /* pra cima nav bar */



    .profile-icon {
      width: 40px;
      /* Ajuste conforme necessário */
      height: 40px;
      /* Ajuste conforme necessário */
      overflow: hidden;
      border-radius: 50%;
      border: 1px solid #000;
    }

    .profile-icon img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      /* Garante que a imagem cubra completamente o círculo */
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

    .formBotao {
      padding: 0;
      display: flex;
      border-radius: 10px;
    }

    .bnt-link {
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

    .bnt-voltar {
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
      margin-left: 80%;
      cursor: pointer;
      width: 20%;

    }

    .botaoExcluir {
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

    .entrada,
    textarea {
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
      margin: 2.5% auto;
      /* Centraliza horizontalmente com 'auto' e define a margem superior e inferior */
      padding: 2%;
      overflow: hidden;
      height: 20%;
      width: 65%;
      box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    }

    .botoes-container {
      display: flex;
      justify-content: space-between;
      /* Isso distribuirá os elementos igualmente na largura da caixa flexível */
      margin-top: 10px;
      /* Ajuste conforme necessário */
    }
  </style>

</head>

<body>
  <!-- pra baixo nav bar -->
  <header>
    <div class="collapse bg" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">Sobre</h4>
            <p class="text">A Visão Inclusiva é um site de empregabilidade exclusivo para Pessoas com
              Deficiência (PCD). Conectamos candidatos PCD a oportunidades de emprego, permitindo que
              empresas anunciem vagas direcionadas a esse público. Os candidatos criam perfis detalhados,
              enquanto as empresas podem cadastrar suas vagas especificamente para PCD, promovendo a
              inclusão e diversidade no ambiente de trabalho, facilitando o recrutamento e seleção de
              forma mais inclusiva..</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contato</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Me siga no Instagram</a></li>
              <li><a href="#" class="text-white">Curta no Facebook</a></li>
              <li><a href="#" class="text-white">InclusivaVisao@gmail.com</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="navbar navbar-dark shadow-sm">
      <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand d-flex align-items-center"
          onclick="window.location.href='../telaInicial/telaInicial.php'">
          <img class="logo" src="../img/logo1.png" alt="Sua Logo" height="40" width="40">
          <strong>Visão Inclusiva</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
          aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <a href="#" class="text-white">Sobre nós</a>
        </button>
        <div class="navbar-nav ml-auto">

          <div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" id="perfilDropdown" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false"
              onclick="window.location.href='../telaPerfilJ/visualizacaoEmpresa.php'">
              <div class="profile-icon">
                <!-- Adicione uma imagem de perfil ou ícone de usuário padrão -->

                <?php
                include "conexao.php";
                $id_empresa = isset($_SESSION['id_empresa']) ? $_SESSION['id_empresa'] : null;


                if ($id_empresa) {
                  $sql = "SELECT * FROM cadastro_pj WHERE id_empresa = $id_empresa;";

                  if ($conexao) {
                    $result = mysqli_query($conexao, $sql);

                    if ($result && mysqli_num_rows($result) == 1) {
                      $row = mysqli_fetch_assoc($result);
                      echo "<p class='company-info'>";
                      echo "<div class='foto-perfil'>";
                      echo '<img src="' . $row['caminho_foto_perfil'] . '" alt="Foto de Perfil" width="50" height="50">';
                      echo "</p>";

                    }
                  }
                }
                ?>
              </div>
            </a>
          </div>
        </div>
  </header>
  <!-- pra cima nav bar -->


  <div class="card">
    <a class="bnt-voltar" href="telaVagasPj.php">Voltar</a>

    <form action="processarVaga.php" method="POST">
      <input type="hidden" name="action" value="addOrUpdate">
      <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>">

      <div class="mb-3">

        <h1 class="titulo">Sobre a Vaga</h1>
        <input class="entrada" type="text" name="titulo" value="<?php echo isset($titulo) ? $titulo : ''; ?>"
          placeholder="Titulo da vaga">
        <input class="entrada" type="text" name="empresa" value="<?php echo isset($empresa) ? $empresa : ''; ?>"
          placeholder="Nome da empresa">
        <input class="entrada" type="text" name="localizacao"
          value="<?php echo isset($localizacao) ? $localizacao : ''; ?>" placeholder="Local">
        <input class="entrada" type="text" name="salario" value="<?php echo isset($salario) ? $salario : ''; ?>"
          placeholder="Salário">
        <input class="entrada" type="text" name="periodo" value="<?php echo isset($periodo) ? $periodo : ''; ?>"
          placeholder="Periodo" list="periodo">
        <datalist id="periodo">
          <input></input>
          <option value=" Tempo Integral">
          <option value=" Meio Período">
        </datalist>
        <input class="entrada" type="text" name="tipo_contrato"
          value="<?php echo isset($tipo_contrato) ? $tipo_contrato : ''; ?>" placeholder="Tipo de Contrato" list="tipo">
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
<!-- codigo do bootstrap da navbar -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-Uo7DzGnMz9ATKxIep9tiCxS/Z9fNfEXZJT3MXP7iNH49yIexK3MciF8HZJ3Z5mwC" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>