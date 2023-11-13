<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="visão, inclusiva, pcd, neurodivergente, igualdade, vagas, emprego, trabalho">
    <meta name="description" content="Seja bem vindo ao Visão Inclusiva, um site onde você pode encontrar vagas de emprego para pessoas com
    deficiência e neurodivergentes">

    <!-- <link rel="stylesheet" type="text/css" href="\..\VI_Vagas\estilo\telaVagas.css" media="screen" /> -->

    <title>Vagas | Visão Inclusiva</title>
</head>
<body>
    <header>
        <div>
            <img src="..\VI_Vagas\páginas\logoFinal.png" alt="Logo Final">
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
        <!-- o resto do conteúdo da página -->
        <?php include("C:/xampp/htdocs/www/VI_Vagas/back/funcaoMostraVagas.php"); ?>
      </div>

    <div id="search-bar">
        <input type="text" id="search-input" placeholder="Pesquisar vagas...">
        <button onclick="searchVagas()">
        <img src="\..\VI_Vagas\páginas\big-search-len (1).png"alt="Ícone de pesquisa">
    </button>
    </div>

    <div id="suggestions">
        <h2>Vagas Sugeridas</h2>
        <div id="suggested-vagas">
            <!-- Vagas sugeridas serão adicionadas aqui dinamicamente com JavaScript -->
        </div>
    </div>


<style>
        /*Apenas arrumando o cabeçalho*/
header{
    background-color: #C2D7E8;
    color: #2C5DAE;
    display: flex;
    justify-content: space-between; /* Espaço entre os elementos para alinhar à esquerda e à direita */
    align-items: center; /* Centralize horizontalmente */
    padding: 10px; /* Adicione espaçamento interno */
    overflow: hidden;
    text-align: center;
    text-decoration: none;
    box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
    font-family: 'Montserrat', sans-serif;
}

#menu {
    color: #2C5DAE; /* Adicione a cor do texto desejada */
    padding: 30px 50px 30px 50px;
    text-decoration: none;
    list-style: none;
    list-style-type: none;
    font-size: 25px;
}

/* Estilo para a lista <ul> que contém a imagem, no canto esquerdo */
ul #ul-imagem {
    list-style-type: none;
    margin: 0;
    padding: 0;
    text-decoration: none;
}

li{
    float: left;
    text-decoration: none;
    display: block;
    list-style-type: none;
}

/* Estilo para a imagem no cabeçalho */
img {
    max-width: 150px; /* Define a largura máxima da imagem, ajuste conforme necessário */
}

/* Estilo para a lista <ul> que contém os botões, no canto direito */
ul#ul-botoes {
    list-style: none;
    margin: 0;
    padding: 0;
    text-decoration: none;

}

/* Estilo para os botões de "Entrar" e "Cadastrar-se" no cabeçalho */
ul#ul-botoes button {
    background-color: #4c4c4c; /* Adicione a cor de fundo desejada */
    color: #fff; /* Adicione a cor do texto desejada */
    border: none;
    padding: 10px 20px; /* Adicione espaçamento interno */
    margin: 10px; /* Adicione espaçamento vertical aos botões */
    text-decoration: none;
}

#logar, #cadastrar {
    background-color: #fff; /* Adicione a cor de fundo desejada */
    color: #1F78D1; /* Adicione a cor do texto desejada */
    border-radius: 8px;
    border: 1px solid #1F78D1;
    padding: 10px 20px; /* Adicione espaçamento interno */
    margin: 0 20px; /* Adicione espaçamento lateral aos botões */
    cursor: pointer;
}

a{
    text-decoration: none;
}

/*Aplicando em todo documento*/

html {
    -webkit-locale: "pt-BR";
}

body{
    margin: 0;
    background-image: url('/../VI_Vagas/páginas/background.png'), url('/../VI_Vagas/páginas/Fundo_azul_claro.png');
    background-repeat: no-repeat;
    background-position: left, right;   
    background-size: 66% 100%, 33% 100%; /* Ajuste as porcentagens conforme necessário */
}

body, html {
    height: 100%;
}


/*Ajeitando o rodapé*/
#content-wrap {
    padding-bottom: 2.5rem;    /* altura do rodapé */
}

footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    display: flex;
    flex-direction: column; /* Coloca os elementos em coluna */
    justify-content: center; /* Centraliza o conteúdo verticalmente */
    align-items: center; /* Centraliza o conteúdo horizontalmente */
    background-color: #fff;
    border-top: 1px solid #4d4d4d80;
}


#links {
    border-bottom: 1px solid #4d4d4d80;
    background-color: #fff;
    align-items: center; /* Centraliza o conteúdo verticalmente */
}

#links ul {
    color: #2C5DAE;
    font-family: 'Montserrat', sans-serif;
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    gap: 20px; /* Espaçamento entre os itens (ajuste conforme necessário) */
    justify-content: center; /* Centraliza o conteúdo horizontalmente */
    align-items: center; /* Centraliza o conteúdo verticalmente */
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
    align-items: center; /* Centraliza o conteúdo verticalmente */
    justify-content: center; /* Centraliza horizontalmente */
}

#links, #redesSociais {
    width: 100%; /* Ocupar toda a largura do rodapé */
    text-align: center; /* Centralizar o texto dentro das divs */


/*Estiliza botões de rede sociail*/

.btn_social { 
	width:100%; 
	float:left; 
	display:flex; 
	margin:auto; 
}
.btn_social ul  { 
	width:auto; 
	margin:auto; 
	float:left; 
	display:block; 
}
.btn_social ul li  { 
	position:relative; 
	background:#555555; 
	list-style:none; 
	float:left; 
	margin:5px; 
	z-index:1; 
	overflow:hidden; 
	border-radius:3px; 
	font-size:1.5em; 
	text-align:center; 
}
.btn_social ul li a  { 
	width:50px; 
	height:50px; 
	line-height:53px; 
	display:block; 
	text-decoration:none; 
	color:#fff; 
	transition:.4s;
}
.btn_social ul li::before { 
	transition:0.4s; 
	position:absolute; 
	content:''; 
	width:100%; 
	height:100%; 
	top:90%; 
	left:0; 
	background:#2fc4cf; 
	z-index:-1; 
	transform: scale(1); 
	transition:.4s; 
}
.btn_social ul li:hover::before { transition:0.4s; top:0%; }
.btn_social ul li a:hover       { color:#555555; }

/*Estiliza as DIVs que aparece as vagas*/

.vaga {
    border-radius: 15px;
    background-color: rgba(245, 245, 220, 0.5);
    color: #000;
    font-family: Georgia, 'Times New Roman', Times, serif;
    justify-content: left;
    margin: 35px;
    padding: 10px;
    overflow: hidden;
    height: 20%;
    width: 35%;
}

/* Estilos CSS para ocultar os detalhes das vagas inicialmente */
.vaga .detalhes {
    display: none;
}

/* Estilização da barra de pesquisa */
#search-bar {
    width: 100%;
    display: flex;
    justify-content: flex-end; /* Alinha os itens à direita */
    margin-right: 20px; /* Adiciona margem à direita para afastar da borda da página */
  }

#search-input {
    width: 28%;
    height: 40px;
    margin-right: 1%;
}

button {
    height: 40px;
}

#search-bar button img {
    width: 100%; /* Ajuste o tamanho da imagem conforme necessário */
    height: 100%;
  }

}
</style>

    <footer>
        <br>
        <div id="links">
                <ul>
                    <li><a id="rodape" href="#mobile">Mobile App</a></li>
                    <li><a id="rodape" href="#quemSomos">Quem Somos</a></li>
                    <li><a id="rodape" href="#companhia">Companhia</a></li>

                    <img src="..\VI_Vagas\páginas\logoFinal.png" alt="Logo Final">

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
                        function toggleDetalhes(vagaId) {
                    var detalhes = document.getElementById(vagaId);
                    if (detalhes.style.display === "none") {
                        detalhes.style.display = "block";
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
                        "<div class='detalhes' id='vaga" + vaga.id + "'>" +
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
                "<div class='detalhes' id='vaga" + vaga.id + "'>" +
                "<p>Localização: " + vaga.localizacao + "</p>" +
                "<p>Tipo de Contrato: " + vaga.tipo_contrato + "</p>" +
                "<p>Requisitos: " + vaga.requisitos + "</p>" +
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


    </script>
</body>
</html>