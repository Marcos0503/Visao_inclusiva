<?php
session_start();
include "conexao.php";
$id_usuario = isset($_SESSION['id_usuario']) ? $_SESSION['id_usuario'] : null;

include("funcaoMostraVagas.php");

?>


<!DOCTYPE html>
<html lang="pt-BR">

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-r4W5EeVvqpvj6Z1Fz5ATqa5AqOKVbl6bNQQl3h3D6Zs5STevB7uOs6bB8rXOBn1u" crossorigin="anonymous">

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
            display: flex;
            align-items: center;
        }


        .navbar-toggler {

            margin-left: 40%;
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

        /*Aplicando em todo documento*/

        html {
            -webkit-locale: "pt-BR";
        }

        body {
            margin: 0;
            background-image: url('../img/background.png'), url('../img/Fundo_azul_claro.png');
            background-repeat: repeat-y;
            background-position: left top, right top;
            background-size: 69% 100%, 31% 100%;
            /* 50% para cada imagem */
            width: 100%;
            height: 100vh;
            /* Adicionando altura de 100% da viewport */
        }

        body,
        html {
            height: 100%;
        }


        /*Ajeitando o rodapé*/
        #content-wrap {
            max-height: 100vh;
            /* Defina a altura máxima como a altura da viewport (100% da altura visível) */
            overflow-y: auto;
            /* Adiciona uma barra de rolagem vertical quando o conteúdo excede a altura máxima */
            padding-bottom: 2.5rem;
            /* Adicione espaço para o rodapé */
        }

        /* Estilização da barra de rolagem para navegadores WebKit (Chrome, Safari) */
        #content-wrap::-webkit-scrollbar {
            width: 12px;
            /* Largura da barra de rolagem */
        }

        #content-wrap::-webkit-scrollbar-thumb {
            background-color: #2C5DAE;
            /* Cor do botão de rolagem */
            border-radius: 6px;
            /* Borda do botão de rolagem */
        }

        #content-wrap::-webkit-scrollbar-track {
            background-color: #f1f1f1;
            /* Cor da trilha da barra de rolagem */
        }

        /* Estilização da barra de rolagem para o Firefox */
        #content-wrap::-moz-scrollbar {
            width: 12px;
        }

        #content-wrap::-moz-scrollbar-thumb {
            background-color: #2C5DAE;
            border-radius: 6px;
        }

        #content-wrap::-moz-scrollbar-track {
            background-color: #f1f1f1;
        }


        #page-container {
            position: relative;
            min-height: 100vh;
        }



        /*Estiliza as DIVs que aparece as vagas*/

        .vaga {
            border-radius: 15px;
            background-color: rgba(245, 245, 220, 0.5);
            color: #000;
            font-family: Georgia, 'Times New Roman', Times, serif;
            justify-content: left;
            margin: 2.5%;
            padding: 2%;
            overflow: hidden;
            height: 20%;
            width: 65%;
            cursor: pointer;
            height: 20%;
            /* Defina a altura desejada para cada vaga */
        }

        /* Estilos CSS para ocultar os detalhes das vagas inicialmente */
        .vaga .detalhes {
            display: none;
        }

        /* Estilização da barra de pesquisa */
        #search-bar {
            width: 95%;
            display: flex;
            justify-content: flex-end;
            /* Alinha os itens à direita */
            margin-right: 20px;
            /* Adiciona margem à direita para afastar da borda da página */
            margin-top: 2.5%;
        }

        #search-input {
            width: 100%;
            height: 5%;
            margin-right: 1%;
            border-radius: 15px;
        }


        #search-bar button img {
            width: 20px;
            height: 20px;
        }

        #pesquisaSugestao {
            width: 30%;
            float: right;
            position: absolute;
            top: 0;
            right: 0;
            border-radius: 15px;
        }

        #pesquisaSugestao h3 {
            padding-left: 10px;
        }

        #botaoVagas {
            border-radius: 15px;
            width: 10%;
            /* Ajuste o tamanho da imagem conforme necessário */
            height: 5%;
        }

        #suggestions {
            border-radius: 15px;
            background-color: rgba(245, 245, 220, 0.5);
            color: #000;
            font-family: Georgia, 'Times New Roman', Times, serif;
            justify-content: left;
            margin: 20px;
            padding: 10px;
            overflow: hidden;
            height: 20%;
            width: 90%;
        }

        #logoRodape {
            width: 120px;
            height: 50px;
        }

        .bnt-link {
            justify-content: space-between;
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

        .cadastrar-button {
            background-color: #4CAF50;
            /* Cor de fundo do botão */
            color: white;
            /* Cor do texto do botão */
            border: none;
            /* Remova a borda */
            padding: 10px 20px;
            /* Adicione preenchimento ao botão */
            text-align: center;
            /* Alinhe o texto ao centro */
            text-decoration: none;
            /* Remova a decoração de texto */
            display: inline-block;
            /* Faça o botão comportar-se como um elemento em linha */
            font-size: 16px;
            /* Tamanho da fonte */
            margin: 4px 2px;
            /* Adicione margem ao botão */
            cursor: pointer;
            /* Adicione um cursor ao passar o mouse sobre o botão */
            border-radius: 8px;
            /* Adicione borda arredondada */
        }

        .cadastrar-button:hover {
            background-color: #45a049;
            /* Mudar cor de fundo ao passar o mouse sobre o botão */
        }
    </style>
    <title>Vagas | Visão Inclusiva</title>
</head>

<body responsive>
    <header>
        <div class="collapse bg" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">Sobre</h4>
                        <p class="text">Adicione alguma informação sobre o álbum abaixo (autor ou qualquer outro
                            background).
                            Faça essas informações terem algumas frases, para a galera ter algumas informações que
                            besliscar. Além
                            disso, use link nelas para as redes sociais ou informações de contato.</p>
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
                            <div class="profile-icon">

                                <!-- Adicione uma imagem de perfil ou ícone de usuário padrão -->
                                <?php


                                include "conexao.php";
                                $id_usuario = isset($_SESSION['id_usuario']) ? $_SESSION['id_usuario'] : null;
                                if ($id_usuario) {
                                    $sql = "SELECT * FROM cadastro_pessoal WHERE id_usuario = $id_usuario;";

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

    <div class="dropdown">
        <div class="dropdown-menu" aria-labelledby="perfilDropdown">
            <button class="dropdown-item" onclick="irParaCurriculo()">Ir para Currículo</button>
            <button class="dropdown-item" onclick="irParaPerfil()">Ir para Perfil</button>
        </div>
    </div>
    </div>

    <div id="page-container">

        <div id="content-wrap">
            <div id="divVagas">
                <!-- o resto do conteúdo da página -->
                <!-- <h3>Vagas Disponíveis</h3> -->
            </div>
        </div>

        <div class="header-container">
            <!-- parte de pesquisa e sugestão de vagas -->
            <div id="pesquisaSugestao">

                <div id="search-bar">
                    <input type="text" id="search-input" placeholder=" Pesquisar vagas...">
                    <button onclick="searchVagas()" id="botaoVagas">
                        <img src="../img/iconePesquisa.png" alt="Ir">
                    </button>
                </div>

                <h3>Vagas Sugeridas</h3>
                <div id="suggestions">
                    <div id="suggested-vagas">
                        <!-- Vagas sugeridas serão adicionadas aqui dinamicamente com JavaScript -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Função para mostrar ou ocultar os detalhes quando uma DIV é clicada
        // Função para mostrar ou ocultar os detalhes quando uma DIV é clicada
        function toggleDetalhes(vagaId, event) {
            var detalhes = document.getElementById(vagaId);

            // Verificar se o clique ocorreu no botão
            var isButtonClicked = event.target.tagName.toLowerCase() === 'button';

            if (detalhes.style.display === "none" && !isButtonClicked) {
                detalhes.style.display = "block";
                var botaoCadastrar = detalhes.querySelector(".cadastrar-button");
                botaoCadastrar.style.display = "block"; // Exibir o botão quando os detalhes são mostrados
            } else {
                detalhes.style.display = "none";

                // Se o clique ocorreu no botão, redirecione
                if (isButtonClicked) {
                    cadastrarVaga(vagaId);
                }
            }
        }


        // Array de vagas obtido do PHP
        var vagas = <?php echo json_encode($vagas); ?>;

        // Exibir vagas
        for (var i = 0; i < vagas.length; i++) {
            var vaga = vagas[i];
            var vagaElement = document.createElement("div");
            vagaElement.className = "vaga";
            vagaElement.setAttribute("onclick", "toggleDetalhes('vaga" + vaga.id + "', event)");

            vagaElement.innerHTML = "<h3>" + vaga.titulo + "</h3>" +
                "<span>" + vaga.data_publicacao + "</span>" +
                "<h4>" + vaga.empresa + "</h4>" +
                "<p>" + vaga.descricao + "</p>" +
                "<p>Salário: R$ " + vaga.salario + "</p>" +
                "<button class='cadastrar-button' onclick=\"window.location.href='../telaCurriculo/telaCurriculo/curriculo.php'\">Cadastrar-se</button>" +
                "<div class='detalhes' id='vaga" + vaga.id + "' style='display: none;'>" +
                "<p>Localização: " + vaga.localizacao + "</p>" +
                "<p>Tipo de Contrato: " + vaga.tipo_contrato + "</p>" +
                "<p>Requisitos: " + vaga.requisitos + "</p>" +
                "</div>";

            document.getElementById("content-wrap").appendChild(vagaElement);
        }

        function searchVagas() {
            // Obtenha o valor digitado na barra de pesquisa
            var searchTerm = document.getElementById("search-input").value.toLowerCase();

            // Limpe o conteúdo existente antes de exibir os resultados da pesquisa
            document.getElementById("content-wrap").innerHTML = "";

            // Exiba apenas as vagas que contêm o termo de pesquisa
            for (var i = 0; i < vagas.length; i++) {
                var vaga = vagas[i];

                // Verifique se o título ou a descrição contêm o termo de pesquisa
                if (vaga.titulo.toLowerCase().includes(searchTerm) || vaga.descricao.toLowerCase().includes(searchTerm)) {
                    var vagaElement = document.createElement("div");
                    vagaElement.className = "vaga";
                    vagaElement.setAttribute("onclick", "toggleDetalhes('vaga" + vaga.id + "')");

                    vagaElement.innerHTML = "<h3>" + vaga.titulo + "</h3>" +
                        "<span>" + vaga.data_publicacao + "</span>" +
                        "<h4>" + vaga.empresa + "</h4>" +
                        "<p>" + vaga.descricao + "</p>" +
                        "<p>Salário: R$ " + vaga.salario + "</p>" +
                        "<div class='detalhes' id='vaga" + vaga.id + "' style='display: none;'>" +
                        "<p>Localização: " + vaga.localizacao + "</p>" +
                        "<p>Tipo de Contrato: " + vaga.tipo_contrato + "</p>" +
                        "<p>Requisitos: " + vaga.requisitos + "</p>" +
                        "<button class='cadastrar-button' onclick='cadastrarVaga(" + vaga.id + ")'>Cadastrar-se</button>" +
                        "</div>";

                    document.getElementById("content-wrap").appendChild(vagaElement);
                }
            }
        }

        // Supondo que você tenha um array de todas as vagas (vagas) e o array de vagas já exibidas (exibidas)
        // Você pode ajustar esses arrays conforme necessário

        // Função para obter vagas sugeridas com base nas vagas já exibidas
        function getSuggestedVagas(exibidas) {
            // Limite o número de sugestões para evitar repetição
            var limiteSugestoes = 3;

            // Filtrar vagas que ainda não foram exibidas
            var vagasNaoExibidas = vagas.filter(function (vaga) {
                return !exibidas.includes(vaga.id);
            });

            // Embaralhar as vagas não exibidas para tornar as sugestões mais dinâmicas
            vagasNaoExibidas = shuffleArray(vagasNaoExibidas);

            // Retornar um número limitado de sugestões
            return vagasNaoExibidas.slice(0, limiteSugestoes);
        }

        // Função para embaralhar um array (algoritmo de Fisher-Yates)
        function shuffleArray(array) {
            for (var i = array.length - 1; i > 0; i--) {
                var j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
            }
            return array;
        }

        // Função para exibir sugestões de vagas
        function exibirSugestoes(exibidas) {
            var suggestedVagasElement = document.getElementById("suggested-vagas");
            suggestedVagasElement.innerHTML = "";

            var sugestoes = getSuggestedVagas(exibidas);

            for (var i = 0; i < sugestoes.length; i++) {
                var sugestao = sugestoes[i];
                var sugestaoElement = document.createElement("div");
                sugestaoElement.className = "suggested-vaga";

                sugestaoElement.innerHTML = "<h3>" + sugestao.titulo + "</h3>" +
                    "<span>" + sugestao.empresa + "</span>" +
                    "<p>" + sugestao.descricao.substring(0, 100) + "...</p>";

                suggestedVagasElement.appendChild(sugestaoElement);
            }
        }

        // Chamada inicial para exibir sugestões quando a página carrega
        exibirSugestoes([]);

        // Adicione a seguinte função para ouvir eventos de teclas no campo de pesquisa
        document.getElementById("search-input").addEventListener("keyup", function () {
            searchVagas();
        });

        // Atualize a função searchVagas() para suportar pesquisa em tempo real
        function searchVagas() {
            var searchTerm = document.getElementById("search-input").value.toLowerCase();
            var contentWrap = document.getElementById("content-wrap");
            contentWrap.innerHTML = ""; // Limpe o conteúdo existente

            for (var i = 0; i < vagas.length; i++) {
                var vaga = vagas[i];

                if (
                    vaga.titulo.toLowerCase().includes(searchTerm) ||
                    vaga.descricao.toLowerCase().includes(searchTerm)
                ) {
                    var vagaElement = document.createElement("div");
                    vagaElement.className = "vaga";
                    vagaElement.setAttribute(
                        "onclick",
                        "toggleDetalhes('vaga" + vaga.id + "')"
                    );

                    vagaElement.innerHTML =
                        "<h3>" +
                        vaga.titulo +
                        "</h3>" +
                        "<span>" +
                        vaga.data_publicacao +
                        "</span>" +
                        "<h4>" +
                        vaga.empresa +
                        "</h4>" +
                        "<p>" +
                        vaga.descricao +
                        "</p>" +
                        "<p>Salário: R$ " +
                        vaga.salario +
                        "</p>" +
                        "<div class='detalhes' id='vaga" +
                        vaga.id +
                        "' style='display: none;'>" +
                        "<p>Localização: " +
                        vaga.localizacao +
                        "</p>" +
                        "<p>Tipo de Contrato: " +
                        vaga.tipo_contrato +
                        "</p>" +
                        "<p>Requisitos: " +
                        vaga.requisitos +
                        "</p>" +
                        "<button onclick='cadastrarVaga(" +
                        vaga.id +
                        ")'>Cadastrar-se</button>" +
                        "</div>";

                    contentWrap.appendChild(vagaElement);
                }
            }
        }
        // Adicione esta função no seu script JavaScript
        // ...

        function cadastrarVaga(vagaId) {
            var usuarioLogadoId = obterUsuarioLogadoId(id);

            window.location.href = '../telaCurriculo/telaCurriculo/curriculo.php';
        }



        function toggleDropdown() {
            var dropdownMenu = document.querySelector('.dropdown-menu');
            dropdownMenu.classList.toggle('show');
        }


        function irParaCurriculo() {
            window.location.href = '../telaCurriculo/telaCurriculo/curriculo.php';
        }

        function irParaPerfil() {
            window.location.href = '../telaPerfilF/visualizacaoFisica.php';
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-Uo7DzGnMz9ATKxIep9tiCxS/Z9fNfEXZJT3MXP7iNH49yIexK3MciF8HZJ3Z5mwC"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>


</body>

</html>