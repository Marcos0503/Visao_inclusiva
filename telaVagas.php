    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="keywords" content="visão, inclusiva, pcd, neurodivergente, igualdade, vagas, emprego, trabalho">
        <meta name="description" content="Seja bem vindo ao Visão Inclusiva, um site onde você pode encontrar vagas de emprego para pessoas com
        deficiência e neurodivergentes">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="css/telaVagas.css" media="screen" />
        

        <title>Vagas | Visão Inclusiva</title>
    </head>
    <body responsive>
        <header>
            <div>
                <img src="VI_Vagas\páginas\logoFinal.png" alt="Logo Final">
            </div>
            <nav>
                <ul id="navegacaoHeader">
                    <li><a id="menu" href="#home">Home</a></li>
                    <li><a id="menu" href="#sobre">Sobre Nós</a></li>
                    <li><a id="menu" href="#ajuda">Ajuda</a></li>
                </ul>
            </nav>
            <div>
                <button id="logar">Entrar</button>
                <button id="cadastrar">Cadastrar-se</button>
            </div>
        </header>
        <div id="page-container">

        <div id="content-wrap">
            <div id="divVagas">
            <!-- o resto do conteúdo da página -->
            <!-- <h3>Vagas Disponíveis</h3> -->
            <?php include("C:/xampp/htdocs/www/VI_Vagas/VI_Vagas/back/funcaoMostraVagas.php"); ?>
        </div>
        </div>

    <!-- parte de pesquisa e sugestão de vagas -->
    <div id="pesquisaSugestao">

        <div id="search-bar">
            <input type="text" id="search-input" placeholder="Pesquisar vagas...">
            <button onclick="searchVagas()" id="botaoVagas">
            <img src="VI_Vagas\páginas\iconePesquisa.png"alt="Ir">
        </button>
        </div>

        <h3>Vagas Sugeridas</h3>
        <div id="suggestions">
            <div id="suggested-vagas">
                <!-- Vagas sugeridas serão adicionadas aqui dinamicamente com JavaScript -->
            </div>
        </div>
    </div>


    <!-- rodapé da página -->
        <footer>
            <br>
            <div id="links">
                    <ul>
                        <li><a id="rodape" href="#mobile">Mobile App</a></li>
                        <li><a id="rodape" href="#quemSomos">Quem Somos</a></li>
                        <li><a id="rodape" href="#companhia">Companhia</a></li>

                        <img src="VI_Vagas\páginas\logoFinal.png" alt="Logo Final">

                        <li><a id="rodape" href="#helpDesk">Help Desk</a></li>
                        <li><a id="rodape" href="#blog">Blog</a></li>
                        <li><a id="rodape" href="#recursos">Recursos</a></li>
                    </ul>
                    <br>
                </div>

                <div id="redesSociais">
                    <nav class="btn_social">
                        
                        <ul>
                            <li><a href="#" target="_blank" title="facebook"><i class="icon icon-facebook"></i></a></li>
                            <li><a href="#" target="_blank" title="instagram"><i class="icon icon-instagram"></i></a></li>
                            <li><a href="#" target="_blank" title="youtube"><i class="icon icon-youtube"></i></a></li>
                            <li><a href="#" target="_blank" title="youtube"><i class="icon icon-whatsapp"></i></a></li>
                            <li><a href="#" target="_blank" title="linkdin"><i class="icon icon-linkedin"></i></a></li>
        
                        </ul>
                    </nav>
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

    // Adicione esta função no seu script JavaScript
// ...

function cadastrarVaga(vagaId) {
    // Chamar o script PHP para cadastrar o usuário na vaga
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'C:/xampp/htdocs/www/VI_Vagas/VI_Vagas/back/enviaCadastro.php?idVaga=' + vagaId, true);
    xhr.responseType = 'blob';

    xhr.onload = function () {
        // Verificar se a requisição foi bem-sucedida
        if (xhr.status === 200) {
            // Crie um link para baixar o currículo
            var url = window.URL.createObjectURL(new Blob([xhr.response]));
            var a = document.createElement('a');
            a.href = url;
            a.download = 'curriculo.pdf'; // Substitua pelo nome desejado do arquivo
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            window.URL.revokeObjectURL(url);
        } else {
            console.error('Erro ao cadastrar o usuário na vaga.');
        }
    };

    xhr.send();
}

</script>

    </body>
    </html>