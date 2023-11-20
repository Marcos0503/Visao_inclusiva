<?php

include_once('D:\xampp\htdocs\www\Visao_inclusiva\telaVagasAdicao\cadastrarVagas.php');
include_once('D:\xampp\htdocs\www\Visao_inclusiva\telaVagasAdicao\alterarVagas.php');
include_once('D:\xampp\htdocs\www\Visao_inclusiva\telaVagasAdicao\excluirVagas.php');


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
      background-image: url('img/Fundoazulclaro.png');
      /* Substitua pelo nome da imagem correta */
      background-size: cover;
      /* Ajusta o tamanho da imagem ao tamanho da janela */
      background-repeat: no-repeat;
      /* Evita a repetição da imagem */
    }

    /* Estilo para o cabeçalho abaixo */
    .header {
      background-color: #C2D7E8;
      padding: 20px 0;
      border-radius: 0 0 10px 10px;
      box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
      text-align: center;
      display: flex;
      justify-content: space-between;
      /* Alinhe à direita */
      align-items: center;
      /* Alinhe verticalmente ao centro */
    }

    .header-logo-responsive {
      margin-left: 1%;
      width: 10%;
      /* Tamanho da logo */
      height: auto;
      float: left;
      /* Alinhar a logo à esquerda */
    }

    .header-links-responsive {
      text-decoration: none;
      margin: 0 20px;
      font-size: 150%;
      color: #ffffff;
      /* Cor dos links */
    }

    .custom-heading-responsive {
      color: #2C5DAE;
      font-size: 350%;
      font-style: normal;
      font-weight: 700;
      line-height: 36px;
      letter-spacing: -1.65px;
    }



    .d-flex {
      margin-top: 20px;
      /* Afastar a frase do botão */
    }

    .btn-custom {
      margin-right: 10%;
      padding-left: 20px;
      padding-right: 20px;
      margin-top: -2%;
    }

    /* Estilo para o cabeçalho acima */


    /* Centralizar o formulário */
    .center-form {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }

    /* Estilo personalizado para caixas de input */
    .custom-input {
      border-radius: 10px;
      /* Borda arredondada */
      background-color: white;
      /* Cor de fundo personalizada */
    }


    .quadradoBranco {
      width: 100%;
      height: 100%;
      border-radius: 15px;
      background: #FFF;
      box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
      margin-top: 10%;
    }

    .bnt {
      width: 40%;
      background-color: #1F78D1;
      color: #fff;
      border-radius: 15px;
      margin-left: 5%;
    }

    .bnt-link {
      width: 40%;
      background-color: #1F78D1;
      color: #fff;
      border-radius: 15px;
      margin-left: 5%;
      text-decoration: none;
      /* Remove o sublinhado padrão */
      display: inline-block;
      /* Define como um elemento em linha com bloco */
      padding: 10px 20px;
      /* Adapte o preenchimento conforme necessário */
      text-align: center;
      /* Centraliza o texto */
      font-weight: bold;
      /* Define o peso da fonte como negrito */
    }

    .titulo {
      color: black;
      font-size: 24px;
      font-family: arial;
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

    textarea {
      width: 100%;
      height: 100%;
    }


    .empresa {

      display: inline-block;
      margin-left: 5%;
    }

    .bnt-exibir {
      width: 50%;
      height: 50%;
      background-color: #1F78D1;
      color: #fff;
      display: inline-block;
      margin-left: 30%;

    }

    .picture_perfil {
      width: 100%;
      aspect-ratio: 8/8;
      background: #ddd;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #aaa;
      border: 2px dashed #aaa;
      cursor: pointer;
      transition: color 300ms ease-in-out, background 300ms ease-in-out;
      border-radius: 5%;
      margin-bottom: 25px;
      margin-top: 30px;
      position: relative;
    }
  </style>


</head>

<body>
  <div class="header">
    <img class="header-logo-responsive" src="img/logo1.png" alt="">
    <div class="header-links-responsive">
      <a class="header-links-responsive" href="#">Home</a>
      <a class="header-links-responsive" href="#">Sobre nós</a>
      <a class="header-links-responsive" href="#">Ajuda</a>
    </div>
    <div class="d-flex align-items-center ml-4" style="width: 300px;"> <!-- Aumente a largura do contêiner -->
      <h3 class="frase-responsive" style="font-size: 18px;">Já possui cadastro?</h3>
      <button class="btn btn-primary btn-custom ml-2">Login</button>
    </div>
  </div>
  <div class="container center-form"> <!-- Adicione a classe "center-form" para centralizar -->
    <div class="quadradoBranco">
      <div class="mb-3">
        <br>
    
        <form action="processarVaga.php" method="POST">
    <input type="hidden" name="action" value="addOrUpdate">
    <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>">

        <div class="mb-3">
          <h1 class="titulo">Sobre a Vaga</h1>
          <input type="text" name="titulo" value="<?php echo isset($titulo) ? $titulo : ''; ?>"
            placeholder="Titulo da vaga">
          <input type="text" name="empresa" value="<?php echo isset($empresa) ? $empresa : ''; ?>"
            placeholder="Nome da empresa">
          <input type="text" name="localizacao" value="<?php echo isset($localizacao) ? $localizacao : ''; ?>"
            placeholder="Local">
          <input type="text" name="salario" value="<?php echo isset($salario) ? $salario : ''; ?>"
            placeholder="Salário">
          <input type="text" name="periodo" value="<?php echo isset($periodo) ? $periodo : ''; ?>"
            placeholder="Periodo">
          <datalist id="periodo">
            <input></input>
            <option value=" Tempo Integral">
            <option value=" Meio Período">
          </datalist>
          <input type="text" name="tipo_contrato" value="<?php echo isset($tipo_contrato) ? $tipo_contrato : ''; ?>"
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
          <h1 class="titulo">benefícios</h1>
          <textarea name="beneficios"><?php echo isset($beneficios) ? $beneficios : ''; ?></textarea>
          <input type="submit" name="submit" class="bnt-link" value="Enviar">
  </form>

<form action="excluirVagas.php" method="POST">
          <input type="hidden" value="delete">
          <button type="submit" class="bnt">
            <a class="bnt-link" href="adicaoDeVagas.php?delete_id=<?php echo $id; ?>"
              onclick="return confirm('Tem certeza que deseja excluir esta vaga?')">Excluir
              <svg xmlns="http://www.w3.org/2000/svg" width="39" height="38" viewBox="0 0 39 38" fill="none">
                <path d="M5.95703 6.44165V37.276H33.4296V6.44165H5.95703Z" fill="#1F78D1" stroke="white"
                  stroke-linejoin="round" />
                <path d="M16.0293 15.5103V27.2999" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M23.3574 15.5103V27.2999" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M1.37891 6.44165H38.0089" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12.3672 6.44135L15.3791 1H24.0678L27.0192 6.44135H12.3672Z" fill="#1F78D1" stroke="white"
                  stroke-linejoin="round" />
              </svg>
            </a>
          </button>
        </form>
      </div>
</body>

</html>