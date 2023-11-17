<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">
  <title>Visão inclusiva</title>
  <!-- Principal CSS do Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Estilos customizados para esse template -->
  <link href="form-validation.css" rel="stylesheet">
  <style>
    /* Estilo do plano de fundo */
    body {
      background-image: url('img/fundo.jpeg'); /* Substitua pelo nome da imagem correta */
      background-size: cover; /* Ajusta o tamanho da imagem ao tamanho da janela */
      background-repeat: no-repeat; /* Evita a repetição da imagem */
    }

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
      background-color: #C2D7E8;
      /* Cor de fundo personalizada */
    }

    /* Estilo para o cabeçalho */
    .header {
      background-color: #C2D7E8;
      padding: 20px 0;
      border-radius: 0 0 10px 10px;
      text-align: center;
      display: flex;
      justify-content: space-between; /* Alinhe à direita */
      align-items: center; /* Alinhe verticalmente ao centro */
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
      margin-top: 20px; /* Afastar a frase do botão */
    }

    .btn-custom {
      margin-right: 10%;
      padding-left: 20px;
      padding-right: 20px;
      margin-top: -2%;
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
    <div class="py-5 text-center">
      <h2 class="custom-heading-responsive">Cadastro Pessoa Jurídica</h2>
      <p class="lead"></p>
    </div>
    <div class="col-md-8 order-md-1">
      <form class="needs-validation" novalidate name = "Cadastro" action = "Cadastrar.php" method = "POST">
        <div class="mb-3">
          <label for="nome_empresa"></label>
          <input type="text" class="form-control custom-input" id="nome_empresa" name="nome_empresa" placeholder="Razão Social" required>
          <div class="invalid-feedback" style="width: 100%;">
            A Razão Social é obrigatória.
          </div>
        </div>
      <div class="mb-3">
        <label for="CNPJ"></label>
        <input type="text" class="form-control custom-input" id="CNPJ" name="CNPJ" placeholder="CNPJ" required>
        <div class="invalid-feedback" style="width: 100%;">
          Seu CNPJ é obrigatório.
        </div>
      </div>
      <div class="mb-3">
        <label for="ramo_empresa"></label>
        <input type="text" class="form-control custom-input" id="ramo_empresa" name="ramo_empresa" placeholder="Ramo de Atividade" required>
        <div class="invalid-feedback" style="width: 100%;">
          O ramo é obrigatória.
        </div>
      </div>
      <div class="mb-3">
        <label for="email_empresa"><span class="text-muted"></span></label>
        <input type="email" class="form-control custom-input" id="email" name="email" placeholder="rh@empresa.com" required>
        <div class="invalid-feedback">
          Por favor, insira um endereço de e-mail válido.
        </div>
      </div>
      <div class="mb-3">
        <label for="telefone"></label>
        <input type="tel" class="form-control custom-input" id="telefone" name="telefone" placeholder="Telefone" required>
        <div class="invalid-feedback" style="width: 100%;">
          O telefone para contrato é obrigatória.
        </div>
      </div>
      <div class="mb-3">
        <label for="rua"></label>
        <input type="text" class="form-control custom-input" id="rua" name="rua" placeholder="Rua, nº 0" required>
        <div class="invalid-feedback">
          Por favor, insira seu endereço.
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="cidade"></label>
          <input type="text" class="form-control custom-input" id="cidade" name="cidade" placeholder="Cidade" required>
          <div class="invalid-feedback">
            Por favor, insira uma cidade válida.
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="bairro"></label>
          <input type="text" class="form-control custom-input" id="bairro" name="bairro" placeholder="Bairro" required>
          <div class="invalid-feedback">
            Por favor, insira um bairro válido.
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mb-3">
          <label for="pais">País</label>
          <select class="custom-select d-block w-100" id="pais" name="pais" required>
            <option value="">Escolha...</option>
          </select>
          <div class="invalid-feedback">
            Por favor, escolha um país válido.
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="estado">Estado</label>
          <select class="custom-select d-block w-100" id="estado" name="estado" required>
            <option value="">Escolha...</option>
          </select>
          <div class="invalid-feedback">
            Por favor, insira um estado válido.
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="CEP">CEP</label>
          <input type="text" class="form-control custom-input" id="CEP" name="CEP" placeholder="" required>
          <div class="invalid-feedback">
            É obrigatório inserir um CEP.
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label for="senha"></label>
        <input type="password" class="form-control custom-input" id="senha" name="senha" placeholder="Senha" required>
        <div class="invalid-feedback" style="width: 100%;">
          A senha é obrigatória.
        </div>
      </div>
      <div class="mb-3">
        <label for="confirmarSenha"></label>
        <input type="password" class="form-control custom-input" id="confirmarSenha" placeholder="Confirmar Senha"
          required>
        <div class="invalid-feedback" style="width: 100%;">
          A confirmação de senha é obrigatória.
        </div>
      </div>
      <hr class="mb-4">
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="mesmo-endereco">
        <label class="custom-control-label" for="mesmo-endereco">Lembrar desta informação, na próxima vez.</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="salvar-info">
        <label class="custom-control-label" for="salvar-info">Li e concordo com os termos de Privacidade.</label>
      </div>
      <hr class="mb-4">
      <div id="senhaMismatch" style="color: red; display: none;">As senhas não coincidem.</div>
      <button class="btn btn-primary btn-lg btn-block" type="submit">Cadastre-se</button>
    </form>
  </div>
</div>
<footer class="my-5 pt-5 text-muted text-center text-small">
  <p class="mb-1">&copy; 2017-2018 Nome da companhia</p>
  <ul class="list-inline">
    <li class="list-inline-item"><a href="#">Privacidade</a></li>
    <li class="list-inline-item"><a href="#">Termos</a></li>
    <li class="list-inline-item"><a href="#">Suporte</a></li>
  </ul>
</footer>
<!-- Principal JavaScript do Bootstrap
  ================================================== -->
<!-- Foi colocado no final para a página carregar mais rápido -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script>
// Verificar se as senhas coincidem
const senha = document.getElementById('senha');
  const confirmarSenha = document.getElementById('confirmarSenha');
  const senhaMismatch = document.getElementById('senhaMismatch');

  senha.addEventListener('input', function () {
    if (senha.value !== confirmarSenha.value) {
      senhaMismatch.style.display = 'block';
    } else {
      senhaMismatch.style.display = 'none';
    }
  });

  confirmarSenha.addEventListener('input', function () {
    if (senha.value !== confirmarSenha.value) {
      senhaMismatch.style.display = 'block';
    } else {
      senhaMismatch.style.display = 'none';
    }
  });
  // Carrega as opções de países a partir do arquivo "paises.json"
  fetch('js/paises.json')
    .then(response => response.json())
    .then(data => {
      const selectPais = document.getElementById('pais');
      data.forEach(pais => {
        const option = document.createElement('option');
        option.textContent = pais;
        option.value = pais;
        selectPais.appendChild(option);
      });
    });

  // Carrega as opções de estados a partir do arquivo "estados.json"
  fetch('js/estados.json')
    .then(response => response.json())
    .then(data => {
      const selectEstado = document.getElementById('estado');
      data.forEach(estado => {
        const option = document.createElement('option');
        option.textContent = estado;
        option.value = estado;
        selectEstado.appendChild(option);
      });
    });

  // Exemplo de JavaScript para desativar o envio do formulário, se tiver algum campo inválido.
  (function () {
    'use strict';

    window.addEventListener('load', function () {
      // Selecione todos os campos que nós queremos aplicar estilos Bootstrap de validação customizados.
      var forms = document.getElementsByClassName('needs-validation');

      // Faz um loop neles e previne envio
      var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener('submit', function (event) {
          if (form.checkValidity() === false || senha.value !== confirmarSenha.value) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  document.getElementById('CNPJ').addEventListener('input', function (e) {
    var value = e.target.value.replace(/\D/g, '');
    if (value.length === 14) {
      e.target.value = value.replace(/^(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})$/, '$1.$2.$3/$4-$5');
    } else {
      e.target.value = value;
    }
  });
  document.getElementById('telefone').addEventListener('input', function (e) {
    var value = e.target.value.replace(/\D/g, '');
    if (value.length === 11) {
      e.target.value = value.replace(/^(\d{2})(\d{1})(\d{4})(\d{4})$/, '($1) $2 $3-$4');
    } else if (value.length === 10) {
      e.target.value = value.replace(/^(\d{2})(\d{4})(\d{4})$/, '($1) $2-$3');
    } else {
      e.target.value = value;
    }
  });
  document.getElementById('CEP').addEventListener('input', function (e) {
    var value = e.target.value.replace(/\D/g, '');
    if (value.length === 8) {
      e.target.value = value.replace(/^(\d{5})(\d{3})$/, '$1-$2');
    } else {
      e.target.value = value;
    }
  });
  document.addEventListener('DOMContentLoaded', function () {
      <?php
      // Se o cadastro foi bem-sucedido, exibir o pop-up
      if (isset($_GET['success']) && $_GET['success'] == 'true') {
      ?>
        alert('Cadastro realizado com sucesso');
      <?php
      }
      ?>
    });
</script>
</body>

</html>