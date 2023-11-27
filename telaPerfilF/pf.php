<?php
session_start();
include "conexao.php";
$id_usuario = isset($_SESSION['id_usuario']) ? $_SESSION['id_usuario'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/logo1.png">

    <title>Perfil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="form-validation.css" rel="stylesheet">
    <style>
        body {
            background-image: url("../img/backgrond.jpeg");
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

        .box {
            margin-left: 5%;
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

        #picture__input {
            display: none;
        }

        .picture {
            width: 25%;
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

        }

        .picture:hover {
            color: #777;
            background: #ccc;
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
        .label{
            padding: 5px;
            margin-bottom: 10px;
            font-family: Arial, Helvetica, sans-serif;
            color: #2C5DAE;
            font-size: x-large;
            font-weight: 700;
        }
        .value{
            border-bottom: 2px solid #2C5DAE;
            padding: 5px;
            margin-bottom: 10px;
            font-family: Arial, Helvetica, sans-serif;
            color: black;
            font-size: x-large;
        }
        .editable {
        background-color:azurey;
        border: 2px solid #2C5DAE;;
        padding: 8px;
        min-height: 100px;
        border-radius: 10px;
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
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <img class="logo" src="../img/logo1.png" alt="Sua Logo" height="40" width="40">
                    <strong>Visão Inclusiva</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <a href="#" class="text-white">Sobre nós</a>
                </button>
            </div>
        </div>
    </header>
    <div class="container center-form">
        <div class="perfil-container">
            <div class="py-5 text-center">
                <h2 class="custom-heading-responsive">Perfil</h2>
                <p class="lead"></p>
            </div>
            <div class="box">
                <form>
                    <label class="picture" for="picture__input" tab="0">
                        <span class="picture__image">Inserir imagem</span>
                    </label>
                    <input type="file" accept="image/*" id="picture__input" />

                    <?php
                    if ($id_usuario) {
                        $sql = "SELECT * FROM cadastro_pessoal WHERE id_usuario = $id_usuario;";

                        if ($conexao) {
                            $result = mysqli_query($conexao, $sql);

                            if ($result && mysqli_num_rows($result) == 1) {
                                $row = mysqli_fetch_assoc($result);
                                ?>
                                <p class='company-info'>
                                    <span class="label">Nome da Pessoa:</span>
                                    <span class="value"><?php echo $row['nome_completo']; ?></span>
                                </p>
                                <p class='company-info'>
                                    <span class="label">E-mail:</span>
                                    <span class="value"><?php echo $row['email']; ?></span>
                                </p>
                                <p class='company-info'>
                                    <span class="label">CID:</span>
                                    <span class="value"><?php echo $row['CID']; ?></span>
                                </p>
                                <p class='company-info'>
                                    <span class="label">Telefone:</span>
                                    <span class="value"><?php echo $row['telefone']; ?></span>
                                </p>
                                <p class='company-info'>
                                    <span class="label">Endereço:</span>
                                    <span class="value"><?php echo $row['rua'] . ", " . $row['bairro'] . ", " . $row['cidade'] . ", " . $row['estado']; ?></span>
                                </p>
                                <?php
                            } else {
                                echo "Pessoa não encontrada.";
                            }
                        } else {
                            echo "Erro na conexão com o banco de dados.";
                        }
                        mysqli_close($conexao);
                    } else {
                        echo "ID da pessoa não definido na sessão.";
                    }
                    ?>
                    <div class="form-group">
                        <label for="sobre" class="label">Sobre:</label>
                        <div contenteditable="true" class="editable" id="sobre"><?php echo $row['sobre']; ?></div>
                    </div>
                </form>
            </div>

            <button class="btn btn-primary btn-custom-sm">Editar</button>
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