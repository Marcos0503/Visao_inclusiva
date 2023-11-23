<?php
session_start();
include "conexao.php";
$id_empresa = isset($_SESSION['id_empresa']) ? $_SESSION['id_empresa'] : null;

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/logo1.png">

    <title>Editar Perfil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="form-validation.css" rel="stylesheet">
    <style>
        body {
            background-image: url("img/background.png");
            background-size: cover;
            /* Ajusta o tamanho da imagem ao tamanho da janela */
            background-repeat: no-repeat;
            /* Evita a repetição da imagem */
            font-family: Arial, Helvetica, sans-serif;
        }

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

        .perfil-container {

            border-radius: 15px;
            padding: 20px;
            margin: 0 auto;
            width: 80%;
            margin-top: 1%;
            left: 40%;
        }

        .custom-heading-responsive {
            color: #2C5DAE;
            font-size: 450%;
            font-weight: 700;
            margin-bottom: -6%;
        }


        .box {
            margin-right: 0%;
            width: 30%;
        }

        .boxText {
            width: 30%;
        }

        .inputBox {
            position: relative;
            margin-bottom: 10%;

        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid rgb(82, 82, 82);
            outline: none;
            font-size: 93%;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput {
            position: absolute;
            top: 0;
            left: 0;
            pointer-events: none;
            transition: .5s;

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

        button {
            align-items: center;
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
                        <p class="text">Adicione alguma informação sobre o álbum abaixo (autor ou qualquer outro
                            background). Faça essas informações terem algumas frases, para a galera ter algumas
                            informações que besliscar. Além disso, use link nelas para as redes sociais ou informações
                            de contato.</p>
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
                    <img class="logo" src="../img/logo1.png" alt="Sua Logo" height="40" width="40">
                    <strong>Visão Inclusiva</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>
    <div class="container center-form">
        <!-- Adicione a classe "center-form" para centralizar -->
        <div class="py-5 text-center">
            <h2 class="custom-heading-responsive">Empresa</h2>
            <p class="lead"></p>
        </div>

        <div class="box">
            <form action="atualizarDadosJ.php" method="POST">
                <input type="hidden" name="action" value="addOrUpdate">
                <input type="hidden" name="id_empresa" value="<?php echo isset($id_empresa) ? $id_empresa : ''; ?>">
                <div class="mb-3">
                    <input type="text" name="nome_empresa" class="inputUser" placeholder="Nome" required>
                    <label for="nome_empresa" class="labelInput"></label>
                </div>
                <div class="mb-3">
                    <input type="text" name="telefone" class="inputUser" placeholder="Telefone" required>
                    <label for="telefone" class="labelInput"></label>
                </div>
                <div class="mb-3">
                    <input type="text" name="rua" class="inputUser" placeholder="Rua" required>
                    <label for="rua" class="labelInput"></label>
                </div>
                <div class="mb-3">
                    <input type="text" name="bairro" class="inputUser" placeholder="Bairro" required>
                    <label for="bairro" class="labelInput"></label>
                </div>
                <div class="mb-3">
                    <input type="email" name="email" class="inputUser" placeholder="Email" required>
                    <label for="email" class="labelInput"></label>
                </div>
                <div class="form-group">
                    <label for="sobre" name="sobre" class="txt">Sobre:</label>
                    <textarea class="form-control" id="sobre" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-info">Salvar</button>
            </form>

        </div>



    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <!--  mascara dos inputs-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


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
            <p>Novo no Bootstrap? <a href="../../">Visite a página principal</a> ou leia nosso guia <a
                    href="../../getting-started/">getting started</a>.</p>
        </div>
    </footer>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-Uo7DzGnMz9ATKxIep9tiCxS/Z9fNfEXZJT3MXP7iNH49yIexK3MciF8HZJ3Z5mwC"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.6/holder.min.js"></script>
</body>

</html>