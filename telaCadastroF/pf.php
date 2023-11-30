<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="../img/logo1.png">
  <title>Cadastro</title>
  <!-- Principal CSS do Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Estilos customizados para esse template -->
  <link href="form-validation.css" rel="stylesheet">
  <style>
    /* Estilo do plano de fundo */
    body {
          background-image: url("../img/backgrond.jpeg");
          background-size: cover;
          /* Ajusta o tamanho da imagem ao tamanho da janela */
          background-repeat: no-repeat;
      }
      .bg {
          background-color: #2C5DAE;
          /* Cor de fundo do collapse */
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

            margin-left: 70%;
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
      .text {
          color: white;
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
    .custom-heading-responsive {
      color: #2C5DAE;
      font-size: 350%;
      font-style: normal;
      font-weight: 700;
      line-height: 36px;
      letter-spacing: -1.65px;
    }
    .rgdata{
     width: 156%;
    }
    .d-flex {
      margin-top: 20px; /* Afastar a frase do botão */
    }

    .btn-custom {
      margin-right: 10%;
      padding-left: 20px;
      padding-right: 20px;
      margin-top: -2%;
      width: 50%;
      background-color: #2C5DAE;
    }
      input[type="file"] {
      display: none;
    }
    .btnPerson {
      border-radius: 10px; /* Ajuste o valor conforme necessário */
      overflow: hidden;
      display: inline;
      font-family: Arial, Helvetica, sans-serif;
      color:#ffffff;
      padding: 10px;
      text-align: center;
      background-color: #2C5DAE;
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

                            </div>
                        </a>
                    </div>
                </div>
    </header>
  <div class="container center-form"> <!-- Adicione a classe "center-form" para centralizar -->
    <div class="py-5 text-center">
      <h2 class="custom-heading-responsive">Cadastro Pessoa Fisica</h2>
      <p class="lead"></p>
    </div>
    <div class="col-md-8 order-md-1">
    <form class="needs-validation" novalidate name="Cadastro" action="Cadastrar.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="nome_Completo"></label>
          <input type="text" class="form-control custom-input" id="nome_Completo" name="nome_Completo" placeholder="Nome Completo" required>
          <div class="invalid-feedback" style="width: 100%;">
            O Nome é obrigatório
          </div>
        </div>
        <div class="row rgdata">
            <div class="col-md-4 mb-3">
              <label for="RG"></label>
              <input type="text" class="form-control custom-input" id="RG" name="RG" placeholder="RG" required>
              <div class="invalid-feedback">
                Seu RG é obrigatório.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="date_nasc"></label>
              <input type="date" class="form-control custom-input" id="date_nasc" name="date_nasc" placeholder="Data de Nascimento" required>
              <div class="invalid-feedback">
                Sua data de nascimento é obrigatória.
              </div>
            </div>
          </div>
      <div class="mb-3">
        <label for="CPF"></label>
        <input type="text" class="form-control custom-input" id="CPF" name="CPF" placeholder="CPF" required>
        <div class="invalid-feedback" style="width: 100%;">
          Seu CPF é obrigatório.
        </div>
      </div>
      <div class="mb-3">
        <label for="telefone"></label>
        <input type="text" class="form-control custom-input".cel-sp-mask id="telefone" name="telefone" placeholder="Telefone" required>
        <div class="invalid-feedback" style="width: 100%;">
          Seu Telefone é obrigatório.
        </div>
      </div>
      <div class="mb-3">
        <label for="CID"></label>
        <input type="text" class="form-control custom-input".cel-sp-mask id="CID" name= "CID" placeholder="CID" required>
        <div class="invalid-feedback" style="width: 100%;">
          Seu CID é obrigatório.
        </div>
      </div>
      <div class="mb-3">
        <label for="email"><span class="text-muted"></span></label>
        <input type="email" class="form-control custom-input" id="email" name="email" placeholder="fulano@exemplo.com" required>
        <div class="invalid-feedback">
          Por favor, insira um endereço de e-mail válido.
        </div>
      </div>
      <div class="mb-3">
        <label for="rua"></label>
        <input type="text" class="form-control custom-input" id="rua" name="rua" placeholder="Rua, nº 0" required>
        <div class="invalid-feedback">
          Por favor, insira o nome e numero.
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
        <label for="sobre"></label>
        <textarea class="form-control custom-input" id="sobre" name="sobre" placeholder="Conte-nos um pouco sobre você"></textarea>
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
      <div class="mb-3">
        <label for="fotoPerfil"class="btnPerson">Adicionar Foto de perfil</label>
        <input type="file" class="form-control-file" id="fotoPerfil" name="fotoPerfil" accept="image/*" required>
        <div class="invalid-feedback" style="width: 100%;">
          Foto de perfil Obrigatorio.
        </div>
      </div>
     <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="salvar-info" required>
        <label class="custom-control-label" for="salvar-info">
          Eu li e concordo com os <a href="../politicaPrivacidade/Politica_Priv.php" target="_blank">termos de Privacidade</a>.
        </label>
      </div>
      <hr class="mb-4">
      <div id="senhaMismatch" style="color: red; display: none;">As senhas não coincidem.</div>
      <button class="btn btn-primary btn-lg btn-block" type="submit">Cadastre-se</button>
    </form>
  </div>
</div>
<footer class="my-5 pt-5 text-muted text-center text-small">
  <ul class="list-inline">
    <li class="list-inline-item"><a href="#">Privacidade</a></li>
    <li class="list-inline-item"><a href="#">Termos</a></li>
    <li class="list-inline-item"><a href="#">Suporte</a></li>
  </ul>
</footer>
<!-- Principal JavaScript do Bootstrap
  ================================================== -->
<!-- Foi colocado no final para a página carregar mais rápido -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-Uo7DzGnMz9ATKxIep9tiCxS/Z9fNfEXZJT3MXP7iNH49yIexK3MciF8HZJ3Z5mwC" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.6/holder.min.js"></script>
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
    document.addEventListener('DOMContentLoaded', function () {
  carregarPaises();
  carregarEstados();
  // Outras ações que você deseja realizar quando o DOM estiver totalmente carregado...

  // Função para carregar os países
  function carregarPaises() {
    // Substitua este código com a lógica para obter a lista de países da sua fonte de dados
    // Exemplo: const paises = obterListaDePaises();
    const paises = ["Brasil", "Estados Unidos", "Canadá", "Reino Unido", "Austrália", "Japão"]; // Exemplo de lista de países

    const selectPais = document.getElementById('pais');

    paises.forEach(function (pais) {
      const option = document.createElement('option');
      option.value = pais;
      option.text = pais;
      selectPais.add(option);
    });
  }

  // Função para carregar os estados
  function carregarEstados() {
    // Substitua este código com a lógica para obter a lista de estados da sua fonte de dados
    // Exemplo: const estados = obterListaDeEstados();
    const estados = [
      "Acre", "Alagoas", "Amapá", "Amazonas", "Bahia", "Ceará", "Distrito Federal",
      "Espírito Santo", "Goiás", "Maranhão", "Mato Grosso", "Mato Grosso do Sul",
      "Minas Gerais", "Pará", "Paraíba", "Paraná", "Pernambuco", "Piauí",
      "Rio de Janeiro", "Rio Grande do Norte", "Rio Grande do Sul", "Rondônia",
      "Roraima", "Santa Catarina", "São Paulo", "Sergipe", "Tocantins"
    ]; 

    // Substitua "estado" pelo ID correto do seu elemento de seleção de estados
    const selectEstado = document.getElementById('estado');

    estados.forEach(function (estado) {
      const option = document.createElement('option');
      option.value = estado;
      option.text = estado;
      selectEstado.add(option);
    });
  }
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
          const checkbox = document.getElementById('salvar-info');
          if (form.checkValidity() === false || senha.value !== confirmarSenha.value || !checkbox.checked) {
            alert('Por favor, preencha todos os campos e concorde com os termos de privacidade.');
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();

  document.getElementById('RG').addEventListener('input', function (e) {
    var value = e.target.value.replace(/\D/g, '');
    if (value.length === 9) {
      e.target.value = value.replace(/^(\d{2})(\d{3})(\d{3})(\d{1})$/, '$1.$2.$3-$4');
    } else {
      e.target.value = value;
    }
  });

  document.getElementById('CPF').addEventListener('input', function (e) {
    var value = e.target.value.replace(/\D/g, '');
    if (value.length === 11) {
      e.target.value = value.replace(/^(\d{3})(\d{3})(\d{3})(\d{2})$/, '$1.$2.$3-$4');
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