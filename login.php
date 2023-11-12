<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="form-validation.css" rel="stylesheet">
    <style>
        body {
            background-image: url('img/fundo.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
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
            width: 60%;
        }

        .header-links-responsive {
            text-decoration: none;
            margin: 0 20px;
            font-size: 150%;
            color: #ffffff;
        }

        .custom-heading-responsive {
            color: #2C5DAE;
            font-size: 450%;
            font-weight: 700;
            margin-top: 10%;
            margin-bottom: -25%;
        }

        .d-flex {
            margin-top: 20px;
        }

        .btn-primary.btn-custom-sm {
            margin-left: 38%;
            width: 25%;
        }

    </style>
</head>

<body>
    <div class="container center-form">
        <div class="py-5 text-center">
            <h2 class="custom-heading-responsive">Login</h2>
            <p class="lead"></p>
        </div>
        <div class="col-md-8 order-md-1">
            <form class="needs-validation" novalidate action="processa_login.php" method="POST">
                <div class="mb-3">
                    <label for="email"></label>
                    <input type="text" class="form-control custom-input" id="email" name="email"
                        placeholder="E-mail ou CNPJ" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Este campo é obrigatório.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="senha"></label>
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
</body>

</html>