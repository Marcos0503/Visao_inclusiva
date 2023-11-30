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
    <style>


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
            display: flex; /* pra baixo nav bar */
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

        #titulo {
            width: 100%;
            padding: 5%;
            box-sizing: border-box;
            border-radius: 10px;
            border: 2px #C2D7E8;
        }

        #titulo::placeholder {
            text-align: left;
        }

        .Container h3 {
            margin-top: 0;
        }

        .Container {
            border: 2px solid #2C5DAE;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 10px 10px 10px 10px;
        }

        .nivel {
            width: 40%;
        }

        .rgdata {
            width: 156%;
        }

        .d-flex {
            margin-top: 20px;
            /* Afastar a frase do botão */
        }

        .btn-custom {
            margin-top: 2%;
            width: 50%;
            background-color: #2C5DAE;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        input[type="file"] {
            display: none;
        }

        .btnPerson {
            border-radius: 10px;
            overflow: hidden;
            display: inline;
            font-family: Arial, Helvetica, sans-serif;
            color: #ffffff;
            padding: 10px;
            text-align: center;
            background-color: #2C5DAE;
        }

        .experienceContainer td {
            width: 100%;
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

                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="perfilDropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            onclick="window.location.href='../telaPerfilF/visualizacaoFisica.php'">
                            </div>
                        </a>
                    </div>
                </div>
    </header>
    <div class="container center-form">
        <div class="py-5 text-center">
            <h2 class="custom-heading-responsive">Curriculo</h2>
            <p class="lead"></p>
        </div>

        <!-- Line with the color of the header -->
        <hr class="section-divider">

        <div class="col-md-8 order-md-1">
            <form class="needs-validation" novalidate name="Cadastro" action="Cadastrar.php" method="POST"
                enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="titulo"></label>
                    <textarea type="text" class="form-control custom-input inputObj" id="titulo" name="titulo"
                        placeholder="O objetivo do currículo é fornecer uma visão rápida e clara sobre quem você é como profissional e o que você busca alcançar em sua carreira. Ele geralmente é colocado no início do currículo e serve como uma declaração concisa de seus objetivos profissionais."
                        required></textarea>
                </div>

                <!-- Formação Acadêmica -->
                <div id="academicContainer" class="Container">
                    <h3>Formação Acadêmica 1</h3>
                    <div class="mb-3">
                        <label for="instituicao"></label>
                        <input type="text" class="form-control custom-input" id="instituicao" name="instituicao[]"
                            placeholder="Instituição" required>

                        <label for="curso"></label>
                        <input type="text" class="form-control custom-input" id="curso" name="curso[]"
                            placeholder="Curso" required>

                        <label for="ano_conclusao"></label>
                        <input type="date" class="form-control custom-input" id="ano_conclusao" name="ano_conclusao[]"
                            placeholder="Ano de Conclusão" required>
                    </div>
                </div>
                <!-- Formação Acadêmica -->
                <div id="academicContainer" class="Container">
                    <h3>Formação Acadêmica 2</h3>
                    <div class="mb-3">
                        <label for="instituicao"></label>
                        <input type="text" class="form-control custom-input" id="instituicao" name="instituicao[]"
                            placeholder="Instituição" required>

                        <label for="curso"></label>
                        <input type="text" class="form-control custom-input" id="curso" name="curso[]"
                            placeholder="Curso" required>

                        <label for="ano_conclusao"></label>
                        <input type="date" class="form-control custom-input" id="ano_conclusao" name="ano_conclusao[]"
                            placeholder="Ano de Conclusão" required>

                    </div>
                </div>
                <div id="experienceContainer" class="Container">
                    <h3>Experiência Profissional 1</h3>
                    <div class="mb-3">
                        <label for="empresa"></label>
                        <input type="text" class="form-control custom-input" id="empresa" name="empresa[]"
                            placeholder="Empresa" required>

                        <label for="cargo"></label>
                        <input type="text" class="form-control custom-input" id="cargo" name="cargo[]"
                            placeholder="Cargo" required>

                        <div class="row" id="experienceContainerrow">
                            <div class="col-md-6 mb-3">
                                <label for="ano_inicio"></label>
                                <input type="date" class="form-control custom-input" id="ano_inicio" name="ano_inicio[]"
                                    placeholder="Ano de Início" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="ano_fim"></label>
                                <input type="text" class="form-control custom-input" id="ano_fim" name="ano_fim[]"
                                    placeholder="Ano de Fim">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Experiência Profissional 2 -->
                <div id="experienceContainer" class="Container">
                    <h3>Experiência Profissional 2</h3>
                    <div class="mb-3">
                        <label for="empresa"></label>
                        <input type="text" class="form-control custom-input" id="empresa" name="empresa[]"
                            placeholder="Empresa" required>

                        <label for="cargo"></label>
                        <input type="text" class="form-control custom-input" id="cargo" name="cargo[]"
                            placeholder="Cargo" required>

                        <div class="row" id="experienceContainerrow">
                            <div class="col-md-6 mb-3">
                                <label for="ano_inicio"></label>
                                <input type="date" class="form-control custom-input" id="ano_inicio" name="ano_inicio[]"
                                    placeholder="Ano de Início" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="ano_fim"></label>
                                <input type="text" class="form-control custom-input" id="ano_fim" name="ano_fim[]"
                                    placeholder="Ano de Fim">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="skillsContainer" class="Container">
                    <h3>Habilidade 1</h3>
                    <div class="mb-3">
                        <label for="habilidade[]"></label>
                        <input type="text" class="form-control custom-input" id="habilidade" name="habilidade[]"
                            placeholder="Habilidade">
                        <label for="nivel[]"></label>
                        <select class="form-control custom-input nivel" id="nivel" name="nivel[]" required>
                            <option value="Iniciante">Iniciante</option>
                            <option value="Intermediário">Intermediário</option>
                            <option value="Avançado">Avançado</option>
                        </select>
                    </div>
                </div>

                <!-- Habilidade 2 -->
                <div id="skillsContainer" class="Container">
                    <h3>Habilidade 2</h3>
                    <div class="mb-3">
                        <label for="habilidade[]"></label>
                        <input type="text" class="form-control custom-input" id="habilidade" name="habilidade[]"
                            placeholder="Habilidade">
                        <label for="nivel[]"></label>
                        <select class="form-control custom-input nivel" id="nivel" name="nivel[]" required>
                            <option value="Iniciante">Iniciante</option>
                            <option value="Intermediário">Intermediário</option>
                            <option value="Avançado">Avançado</option>
                        </select>
                    </div>
                </div>

                <!-- Habilidade 3 -->
                <div id="skillsContainer" class="Container">
                    <h3>Habilidade 3</h3>
                    <div class="mb-3">
                        <label for="habilidade[]"></label>
                        <input type="text" class="form-control custom-input" id="habilidade" name="habilidade[]"
                            placeholder="Habilidade">
                        <label for="nivel[]"></label>
                        <select class="form-control custom-input nivel" id="nivel" name="nivel[]" required>
                            <option value="Iniciante">Iniciante</option>
                            <option value="Intermediário">Intermediário</option>
                            <option value="Avançado">Avançado</option>
                        </select>
                        <hr class="section-divider">
                    </div>
                </div>
                <div>
                    <button class="btn btn-custom btn-lg btn-block" type="submit"
                        onclick="exibirAlerta()">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <ul class="list-inline">
            <!-- Footer content... -->
        </ul>
    </footer>
    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.6/holder.min.js"></script>

    <script>
        function exibirAlerta() {
            alert("Currículo enviado!");
        }
    </script>
</body>

</html>