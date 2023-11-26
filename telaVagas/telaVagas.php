<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="visão, inclusiva, pcd, neurodivergente, igualdade, vagas, emprego, trabalho">
    <meta name="description" content="Seja bem vindo ao Visão Inclusiva, um site onde você pode encontrar vagas de emprego para pessoas com
        deficiência e neurodivergentes">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="form-validation.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-r4W5EeVvqpvj6Z1Fz5ATqa5AqOKVbl6bNQQl3h3D6Zs5STevB7uOs6bB8rXOBn1u" crossorigin="anonymous">

    <style>
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
            position: relative;
            /* Adicione a propriedade position */
            z-index: 1000;
        }

        .logo {
            margin-right: 5px;
            width: 120px;
            height: 50px;
        }

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
            border-bottom: 10%;
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
            height: 10%;
            padding-left: 10px;
        }

        #search-input {
            width: 100%;
            height: 5%;
            margin-right: 1%;
            border-radius: 15px;
            border: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            /* Adiciona uma sombra sutil */
            z-index: 999;
            /* Adicione um z-index menor que o do header */
        }

        button {
            height: 10%;
            border: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            /* Adiciona uma sombra sutil */
            z-index: 999;
            /* Adicione um z-index menor que o do header */
        }

        #search-bar button img {
            width: 18px;
            height: 18px;
            z-index: 999;
            /* Adicione um z-index menor que o do header */
        }

        #pesquisaSugestao {
            width: 30%;
            float: right;
            position: absolute;
            top: 15%;
            right: 0;
            border-radius: 15px;
            z-index: 999;
            /* Adicione um z-index menor que o do header */
        }

        #pesquisaSugestao h3 {
            padding-left: 10px;
            z-index: 999;
            /* Adicione um z-index menor que o do header */
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

        /* Remova a seta padrão e personalize a seta do dropdown */
        .navbar-nav .dropdown-toggle::after {
            display: none;

        }

        .navbar-nav .dropdown-toggle::before {
            display: none;
        }

        a,
        img {
            display: block;
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
            /* Arredonda as bordas da caixa do dropdown, ajuste conforme necessário */
            display: none;
            /* Torna o dropdown inicialmente não visível */
            background-color: #2C5DAE;
            border: none;
        }

        /* Estilizando os botões do dropdown */
        .dropdown-menu button {
            width: 100%;
            text-align: left;
            display: block;
            padding: 8px 16px;
            /* Ajuste o padding conforme necessário para o espaçamento desejado */
            border-radius: 10px;
            /* Arredonda as bordas dos botões, ajuste conforme necessário */
            margin-bottom: 8px;
            /* Adiciona um espaçamento inferior entre os botões, ajuste conforme necessário */
            background-color: #C2D7E8;
            color: #fff;
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
                    <img class="logo" src="../img/logoFinal.png" alt="Logo Visão Inclusiva" height="35" width="85">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-nav ml-auto">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="perfilDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="toggleDropdown()">
                        <div class="profile-icon">
                            <!-- Adicione uma imagem de perfil ou ícone de usuário padrão -->
                            <img src="../img/userBase.png" alt="Perfil">
                        </div>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="perfilDropdown">
                        <button class="dropdown-item" onclick="window.location.href='../curriculo/telaCurriculo.php'">Currículo</button>
                        <button class="dropdown-item" onclick="window.location.href='../telaPerfilF/visualizacaoFisica.php'">Perfil</button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="page-container">

        <div id="content-wrap">
            <div id="divVagas">
                <!-- o resto do conteúdo da página -->
                <!-- <h3>Vagas Disponíveis</h3> -->
                <?php include("C:/xampp/htdocs/www/Vi_inclusiva/Visao_inclusiva/telaVagas/funcaoMostraVagas.php"); ?>
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
        function toggleDetalhes(vagaId) {
            var detalhes = document.getElementById(vagaId);
            if (detalhes.style.display === "none") {
                detalhes.style.display = "block";
                var botaoCadastrar = detalhes.querySelector(".cadastrar-button");
                botaoCadastrar.style.display = "block"; // Exibir o botão quando os detalhes são mostrados
            } else {
                detalhes.style.display = "none";
            }
        }

        // Array de vagas obtido do PHP
        var vagas = <?php echo json_encode($vagas); ?>;

        // Exibir vagas
        for (var i = 0; i < vagas.length; i++) {
            var vaga = vagas[i];
            var vagaElement = document.createElement("div");
            vagaElement.className = "vaga";
            vagaElement.setAttribute("onclick", "toggleDetalhes('vaga" + vaga.id + "')");

            vagaElement.innerHTML = "<h3>" + vaga.titulo + "</h3>" +
                "<span>" + vaga.data_publicacao + "</span>" +
                "<h4>" + vaga.empresa + "</h4>" +
                "<p>" + vaga.descricao + "</p>" +
                "<p>Salário: R$ " + vaga.salario + "</p>" +
                "<button class='cadastrar-button' onclick='cadastrarVaga(" + vaga.id + ")'>Cadastrar-se</button>" +
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
                        "<button onclick='cadastrarVaga(" + vaga.id + ")'>Cadastrar-se</button>" +
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
            var vagasNaoExibidas = vagas.filter(function(vaga) {
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
        document.getElementById("search-input").addEventListener("keyup", function() {
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
            // Simulando a obtenção do ID do usuário logado (substitua por sua lógica real)
            var usuarioLogadoId = obterUsuarioLogadoId(); // Implemente a função para obter o ID do usuário logado

            // Simulando a obtenção do currículo do usuário a partir do BD (substitua por sua lógica real)
            obterCurriculoDoBD(usuarioLogadoId)
                .then(curriculoDoUsuario => {
                    // Simulando o envio do currículo para a empresa (substitua por sua lógica real)
                    fetch('URL_da_empresa', {
                            method: 'POST',
                            body: JSON.stringify({
                                curriculo: curriculoDoUsuario,
                                vagaId: vagaId
                            }), // Enviando o currículo e o ID da vaga
                            headers: {
                                'Content-Type': 'application/json'
                            }
                        })
                        .then(response => {
                            if (response.ok) {
                                // Exibindo um alerta ao usuário após o envio bem-sucedido do currículo
                                alert("Currículo enviado com sucesso para a empresa!");
                            } else {
                                alert("Erro ao enviar o currículo para a empresa.");
                            }
                        })
                        .catch(error => {
                            console.error('Erro ao enviar o currículo:', error);
                            alert("Erro ao enviar o currículo para a empresa. Verifique sua conexão ou tente novamente mais tarde.");
                        });
                })
                .catch(error => {
                    console.error('Erro ao obter o currículo do usuário:', error);
                    alert("Erro ao obter o currículo do usuário. Tente novamente mais tarde.");
                });
        }

        document.addEventListener('DOMContentLoaded', function() {
            const irparacurriculoButton = document.getElementById('irparacurriculo');

            if (irparacurriculoButton) {
                irparacurriculoButton.addEventListener('click', function() {
                    window.location.href = 'caminho/para/curriculo.html';
                });
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const irparaperfilButton = document.getElementById('irparaperfil');

            if (irparaperfilButton) {
                irparaperfilButton.addEventListener('click', function() {
                    window.location.href = 'caminho/para/perfil.html';
                });
            }
        });

        function toggleDropdown() {
            var dropdown = document.querySelector('.dropdown-menu');
            dropdown.style.display = (dropdown.style.display === 'none' || dropdown.style.display === '') ? 'block' : 'none';
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-Uo7DzGnMz9ATKxIep9tiCxS/Z9fNfEXZJT3MXP7iNH49yIexK3MciF8HZJ3Z5mwC" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>