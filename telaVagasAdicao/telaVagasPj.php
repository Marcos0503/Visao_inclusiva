<?php include("funcaoMostraVagasPj.php"); ?>

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
    <!-- <link rel="stylesheet" type="text/css" href="\..\VI_Vagas\estilo\telaVagas.css" media="screen" /> -->
    <style>
        /*Apenas arrumando o cabeçalho*/
        /* header{
        background-color: #C2D7E8;
        color: #2C5DAE;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        overflow: hidden;
        text-align: center;
        text-decoration: none;
        box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
        font-family: 'Montserrat', sans-serif;
    }
    */

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
            background-repeat: no-repeat;
            background-position: left, right;
            background-size: 69% 100%, 31% 100%;
            /* Ajuste as porcentagens conforme necessário */
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

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            display: flex;
            flex-direction: column;
            /* Coloca os elementos em coluna */
            justify-content: center;
            /* Centraliza o conteúdo verticalmente */
            align-items: center;
            /* Centraliza o conteúdo horizontalmente */
            background-color: #fff;
            border-top: 1px solid #4d4d4d80;
            margin-top: 10%;
        }

        #links {
            border-bottom: 1px solid #4d4d4d80;
            background-color: #fff;
            align-items: center;
            /* Centraliza o conteúdo verticalmente */
        }

        #links ul {
            color: #2C5DAE;
            font-family: 'Montserrat', sans-serif;
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 20px;
            /* Espaçamento entre os itens (ajuste conforme necessário) */
            justify-content: center;
            /* Centraliza o conteúdo horizontalmente */
            align-items: center;
            /* Centraliza o conteúdo verticalmente */
        }

        #page-container {
            position: relative;
            min-height: 100vh;
        }

        #redesSociais {
            background-color: #fff;
            margin: 0;
            color: #4c4c4c;
            font-size: smaller;
            border-top: 0;
            display: flex;
            align-items: center;
            /* Centraliza o conteúdo verticalmente */
            justify-content: center;
            /* Centraliza horizontalmente */
        }

        #links,
        #redesSociais {
            width: 100%;
            /* Ocupar toda a largura do rodapé */
            text-align: center;
            /* Centralizar o texto dentro das divs */

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

        button {
            height: 40px;
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
                    <img class="logo" src="../img/logoFinal.png" alt="Logo Visão Inclusiva" height="35" width="85">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-nav ml-auto">
                <!--o <a> é onde vai entrar o link para a tela de perfil da pessoa-->
                <a class="nav-link"
                    href="C:\xampp\htdocs\www\Vi_inclusiva\Visao_inclusiva\telaEditarF\editarPessoaFisica.php">
                    <div class="profile-icon">
                        <!-- Adicione uma imagem de perfil ou ícone de usuário padrão -->
                        <img src="../img/userBase.png" alt="Perfil">
                    </div>
                </a>
            </div>
        </div>
    </header>

    <div id="page-container">

        <div id="content-wrap">
            <div id="divVagas">
                <!-- o resto do conteúdo da página -->
                <!-- <h3>Vagas Disponíveis</h3> -->
            </div>
        </div>

        <!-- parte de pesquisa e sugestão de vagas -->
        <div id="pesquisaSugestao">

            <div id="search-bar">
                <input type="text" id="search-input" placeholder="Pesquisar vagas...">
                <button onclick="searchVagas()" id="botaoVagas">
                    <img src="../img/iconePesquisa.png" alt="Ir">
                </button>
            </div>


            <h3>Cadastre Uma Nova Vaga</h3>
            <form action="adicaoDeVagas.php">
                <input type="submit" value="Cadastrar Vagas" />
            </form>

        </div>

        <!-- rodapé da página -->
        <footer>
            <br>
            <div id="links">
                <ul>
                    <li><a id="rodape" href="#mobile">Mobile App</a></li>
                    <li><a id="rodape" href="#quemSomos">Quem Somos</a></li>
                    <li><a id="rodape" href="#companhia">Companhia</a></li>

                    <img src="../img/logoFinal.png" alt="Logo Final" id="logoRodape">

                    <li><a id="rodape" href="#helpDesk">Help Desk</a></li>
                    <li><a id="rodape" href="#blog">Blog</a></li>
                    <li><a id="rodape" href="#recursos">Recursos</a></li>
                </ul>
                <br>
            </div>
            <p>
                Obrigado por acessar o site. Nós amamos nossos usuários!
            </p>
        </footer>
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

        function alterarVagas() {
    // Redireciona para o link desejado
    window.location.href = 'adicaoDeVagas.php';
}
        // Array de vagas obtido do PHP
        var vagas = <?php echo json_encode($vagas); ?>;

        // Exibir vagas
        for (var i = 0; i < vagas.length; i++) {
            var vaga = vagas[i];
            var vagaElement = document.createElement("div");
            vagaElement.className = "vaga";
            vagaElement.setAttribute("onclick", "toggleDetalhes('vaga" + vaga.id + "')");

            vagaElement.innerHTML = "<h1>" + vaga.titulo + "</h1>" +
                "<h6> Vaga Criada pela Empresa: "  + vaga.empresa + "</h6>" +
                "<p> Descrição: " + vaga.descricao + "</p>" +
                "<p>Salário: R$ " + vaga.salario + "</p>" +
                "<div class='detalhes' id='vaga" + vaga.id + "' style='display: none;'>" +
                "<p>Localização: " + vaga.localizacao + "</p>" +
                "<p>Tipo de Contrato: " + vaga.tipo_contrato + "</p>" +
                "<p>Descrição: " + vaga.descricao + "</p>" +
                "<button class='cadastrar-button' onclick='alterarVagas(" + vaga.id + ")'>Cadastrar-se</button>" +

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
            // Obtenha o valor digitado na barra de pesquisa
            var searchTerm = document.getElementById("search-input").value.toLowerCase();

            // Limpe o conteúdo existente antes de exibir os resultados da pesquisa
            document.getElementById("content-wrap").innerHTML = "";

            // Exiba apenas as vagas que contêm o termo de pesquisa em tempo real
            for (var i = 0; i < vagas.length; i++) {
                var vaga = vagas[i];

                // Verifique se o título ou a descrição contêm o termo de pesquisa
                if (vaga.titulo.toLowerCase().includes(searchTerm) || vaga.descricao.toLowerCase().includes(searchTerm)) {
                    // ... (o resto do seu código de exibição de vagas permanece o mesmo)
                }
            }
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