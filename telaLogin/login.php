
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Exemplo de álbum Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="form-validation.css" rel="stylesheet">
<style>
    body {
        background-image: url('img/fundo.jpeg');
        background-size: cover;
        background-repeat: no-repeat;
    }
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
    }
    .login-container {
        background-color: rgba(222, 222, 222, 0.8);
        border-radius: 15px;
        padding: 20px;
        margin: 0 auto;
        width: 60%;
        margin-top: 5%;
    }

    .center-form {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
    }

    .custom-input {
        border-radius: 10px;
        background-color: #C2D7E8;
        width: 100%;
        margin-top: 5%;
    }

    .custom-heading-responsive {
        color: #2C5DAE;
        font-size: 450%;
        font-weight: 700;
        margin-bottom: -6%;
    }

    .btn-primary.btn-custom-sm {
        width: 30%;
        margin-top: 10px;
        margin-left: 35%;
        margin-bottom: 8%;
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
          <img class="logo" src="img/logo.png" alt="Sua Logo" height="40" width="40">
          <strong>Visão Inclusiva</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>
    <div class="container center-form">
        <div class="login-container">
            <div class="py-5 text-center">
                <h2 class="custom-heading-responsive">Login</h2>
                <p class="lead"></p>
            </div>
            <div class="col-md-8 order-md-1 mx-auto">
                <form class="needs-validation" novalidate action="verificar_login.php" method="POST">
                    <div class="form-group d-flex align-items-center">
                        <label for="email" class="sr-only">E-mail</label>
                        <input type="text" class="form-control custom-input" id="email" name="email"
                            placeholder="E-mail" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            Este campo é obrigatório.
                        </div>
                    </div>
                    <div class="form-group d-flex align-items-center">
                        <label for="senha" class="sr-only">Senha</label>
                        <input type="password" class="form-control custom-input" id="senha" name="senha"
                            placeholder="Senha" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            A senha é obrigatória.
                        </div>
                    </div>
                    <button class="btn btn-primary btn-custom-sm" type="submit">Entrar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
        // Exemplo de JavaScript para desativar o envio do formulário, se tiver algum campo inválido.
        (function () {
            'use strict';

            window.addEventListener('load', function () {
                var forms = document.getElementsByClassName('needs-validation');

                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Voltar ao topo</a>
        </p>
        <p>Este exemplo de álbum é &copy; Bootstrap, mas, por favor, baixe e customize por conta própria.</p>
        <p>Novo no Bootstrap? <a href="../../">Visite a página principal</a> ou leia nosso guia <a href="../../getting-started/">getting started</a>.</p>
      </div>
    </footer>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-Uo7DzGnMz9ATKxIep9tiCxS/Z9fNfEXZJT3MXP7iNH49yIexK3MciF8HZJ3Z5mwC" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.6/holder.min.js"></script>
  </body>
</html>