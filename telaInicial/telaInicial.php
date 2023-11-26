
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/logo1.png">

    <title>Tela Inicial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="form-validation.css" rel="stylesheet">
<style>
    body {
        background-image: url('../img/background.jpg');
        background-size: 10%; /* Ou 100% ou qualquer outro valor que pareça adequado */
        background-repeat: no-repeat;
        height: 100vh; /* Adiciona esta linha para definir a altura da tela inteira */
        margin: 0;
    }
    /* pra baixo nav bar */
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
    .btnlogin{
      margin-left: -50%;
      background-color: #ffffff;
    }

    /* pra cima nav bar */
      .titulo {
      color: #003a98;
      font-family: arial black;
      font-size: 300%;
      text-align: left;
      margin-top: 2%;
      margin-left: 1%;
    }

    .nome {
      color: #003a98; /* Cor da palavra VisãoInclusiva */
      display: inline;
    }

    .apresentacao {
      margin-top: 5%;
      position: relative;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      text-align: center;
      font-size: 1.2em;
      color: #2C5DAE;
      align-items: center;
      }
      .apresentacao2 {
      margin-top: 5%;
      position: relative;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      text-align: center;
      font-size: 35px;
      color: #2C5DAE;
      }
      .primeira-tela {
      background-color: #ffffff;
      padding: 20px;
      text-align: center;
      height: 100%; /* Faz com que a segunda tela ocupe 100% da altura do corpo */
      box-sizing: border-box; /* Inclui padding e borda na altura total */
    }
      .segunda-tela {
      padding: 20px;
      text-align: center;
      height: 100%; /* Faz com que a segunda tela ocupe 100% da altura do corpo */
      box-sizing: border-box; /* Inclui padding e borda na altura total */
    }

    .segunda-tela h2 {
      margin-top: 2%;
      font-size: 50px;
      position: relative;
      color: #2C5DAE;
      text-align: center;
    }
    .segunda-tela p{
      color: white;
      font-size: 20px;
      color: black;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      text-align: left;
    }
    .album {
      background-image: url('../img/backgrond2.png'); /* Alterado para transparente para remover o fundo branco */
    }
</style>
  </head>

  <body>
<!-- pra baixo nav bar -->
    <header>
      <div class="collapse bg" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Sobre nós</h4>
              <p class="text">A Visão Inclusiva é um site de empregabilidade exclusivo para Pessoas com Deficiência (PCD). Conectamos candidatos PCD a oportunidades de emprego, permitindo que empresas anunciem vagas direcionadas a esse público. Os candidatos criam perfis detalhados, enquanto as empresas podem cadastrar suas vagas especificamente para PCD, promovendo a inclusão e diversidade no ambiente de trabalho, facilitando o recrutamento e seleção de forma mais inclusiva..</p>
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
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <a href="#" class="text-white">Sobre nós</a>
          </button>
          <a href="../telaLogin/login.php" class="btn btnlogin btn-outline-primary">Login</a>
        </div>
      </div>
    </header>
    <!-- pra cima nav bar -->
    <div class="container-fluid primeira-tela"style= "background-image: url('../img/backgrond.jpeg');">
      <div class="row">
        <div class="col-md-12 d-flex">
          <div class="titulo">
            <p> Com <span class="nome">VisãoInclusiva</span></p>
            <p>Sua vida profissional vai além!</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 apresentacao align-items-center">
          <h2>Facilite as chances de mudar sua vida profissional aqui! Diversas empresas inclusivas esperam a sua inscrição!</h2>
          <button type="button" onclick="window.location.href='../telaCadastroF/pf.php'" class="btn btn-outline-primary">Cadastre-se</button>
        </div>
        <div class="col-md-6 al apresentacao2 align-items-center">
          <h2>Se você tem uma empresa que tem grandes planos inclusivos, anuncie suas vagas agora mesmo!</h2>
          <button type="button" onclick="window.location.href='../telaCadastroJ/pj.php'" class="btn btn-outline-primary">Cadastre sua empresa</button>
        </div>
      </div>
    </div>
  <div class="segunda-tela" style= "background-image: url('../img/backgrond.jpeg');">
    <h2>Não apenas tanto a oportunidades, mas a capacitação</h2>
    <div class="album py-5 bg-light">
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                      <iframe class="card-img-top" width="100%" height="225" src="https://www.youtube.com/embed/35UVzcC3qA0?si=l4Hll3IijBgn7NFd" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <div class="card-body">
                          <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional.</p>
                          <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-secondary" id="verMais1">Ver mais</button>
                              </div>
                              <small class="text-muted video-duration-1">Carregando...</small>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                      <iframe class="card-img-top" width="100%" height="225" src="https://www.youtube.com/embed/SaP1k83fIz8?si=_A1_BGc9jsRH4_Oy" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <div class="card-body">
                          <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional.</p>
                          <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-secondary" id="verMais2">Ver mais</button>
                              </div>
                              <small class="text-muted video-duration-2">Carregando...</small>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                      <iframe class="card-img-top" width="100%" height="225" src="https://www.youtube.com/embed/pf8KoWwW21I?autoplay=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <div class="card-body">
                          <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional.</p>
                          <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-secondary" id="verMais3">Ver mais</button>
                              </div>
                              <small class="text-muted video-duration-3">Carregando...</small>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                      <iframe class="card-img-top" width="100%" height="225" src="https://www.youtube.com/embed/tAQCmXvmvAk?si=u6vu2U4VMlMRH0XX" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <div class="card-body">
                          <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional.</p>
                          <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-secondary" id="verMais4">Ver mais</button>
                              </div>
                              <small class="text-muted video-duration-4">Carregando...</small>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                      <iframe class="card-img-top" width="100%" height="225" src="https://www.youtube.com/embed/ZbUWI-O7BQA?si=ykZj89TtYsFIVPSA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <div class="card-body">
                          <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional.</p>
                          <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-secondary" id="verMais5">Ver mais</button>
                              </div>
                              <small class="text-muted video-duration-5">Carregando...</small>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                      <iframe class="card-img-top" width="100%" height="225" src="https://www.youtube.com/embed/TSYK-iDxqW8?si=mBgkOWsM068npO1w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <div class="card-body">
                          <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional.</p>
                          <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-secondary" id="verMais6">Ver mais</button>
                              </div>
                              <small class="text-muted video-duration-6">Carregando...</small>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                      <iframe class="card-img-top" width="100%" height="225" src="https://www.youtube.com/embed/wi_0_J4Vp04?si=HlvBPxbzqhN1s-TF" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <div class="card-body">
                          <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional.</p>
                          <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-secondary" id="verMais7">Ver mais</button>
                              </div>
                              <small class="text-muted video-duration-7">Carregando...</small>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                      <iframe class="card-img-top" width="100%" height="225" src="https://www.youtube.com/embed/35UVzcC3qA0?si=l4Hll3IijBgn7NFd" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <div class="card-body">
                          <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional.</p>
                          <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-secondary" id="verMais8">Ver mais</button>
                              </div>
                              <small class="text-muted video-duration-8">Carregando...</small>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                      <iframe class="card-img-top" width="100%" height="225" src="https://www.youtube.com/embed/UNUEG31hIDg?si=jpc9Ia9UDaiUVaBc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <div class="card-body">
                          <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional.</p>
                          <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-secondary" id="verMais9">Ver mais</button>
                              </div>
                              <small class="text-muted video-duration-9">Carregando...</small>
                          </div>
                      </div>
                  </div>
              </div>
        </div>
      </div>
    </div>
  </div>
    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-Uo7DzGnMz9ATKxIep9tiCxS/Z9fNfEXZJT3MXP7iNH49yIexK3MciF8HZJ3Z5mwC" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.6/holder.min.js"></script>
    <script>
    // Função para obter a duração do vídeo do YouTube
    function getYouTubeVideoDuration(videoId, index) {
        var apiUrl = "https://www.googleapis.com/youtube/v3/videos";
        var apiKey = "AIzaSyCko6yYt8BYVdXH6aGsAWulc0wFnyiHqEA"; // Substitua pela sua chave de API

        var requestUrl = apiUrl + "?id=" + videoId + "&key=" + apiKey + "&part=contentDetails";

        fetch(requestUrl)
            .then(response => response.json())
            .then(data => {
                // A duração é retornada em um formato ISO8601
                var duration = data.items[0].contentDetails.duration;

                // Convertendo a duração para um formato mais legível
                var durationInSeconds = parseDuration(duration);
                var formattedDuration = formatDuration(durationInSeconds);

                // Exibindo a duração na página
                // Alterei para usar uma classe em vez de ID
                document.querySelector(".video-duration-" + index).textContent = formattedDuration;
            })
            .catch(error => console.error("Erro ao obter a duração do vídeo:", error));
    }

    // Função para analisar a duração do vídeo em formato ISO8601
    function parseDuration(duration) {
        var match = duration.match(/PT(\d+H)?(\d+M)?(\d+S)?/);

        var hours = parseInt(match[1]) || 0;
        var minutes = parseInt(match[2]) || 0;
        var seconds = parseInt(match[3]) || 0;

        return hours * 3600 + minutes * 60 + seconds;
    }

    // Função para formatar a duração em horas, minutos e segundos
    function formatDuration(durationInSeconds) {
        var hours = Math.floor(durationInSeconds / 3600);
        var minutes = Math.floor((durationInSeconds % 3600) / 60);
        var seconds = durationInSeconds % 60;

        return hours + "h " + minutes + "min " + seconds + "s";
    }

    // Substitua 'l4Hll3IijBgn7NFd' pelo ID do vídeo real
    var videoIds = ['35UVzcC3qA0', 'SaP1k83fIz8', 'pf8KoWwW21I', 'tAQCmXvmvAk', 'ZbUWI-O7BQA', 'TSYK-iDxqW8', 'wi_0_J4Vp04', '35UVzcC3qA0', 'UNUEG31hIDg'];

    // Itera sobre os IDs e chama a função para cada um
    videoIds.forEach(function (videoId, index) {
        // Adapte a classe para cada vídeo
        getYouTubeVideoDuration(videoId, index + 1);
    });
        // Função para redirecionar para o vídeo no YouTube
        function redirectToYouTube(videoId) {
        // Construa a URL do vídeo no YouTube
        var youtubeUrl = "https://www.youtube.com/watch?v=" + videoId;

        // Redirecione para a URL do YouTube
        window.location.href = youtubeUrl;
    }

    // Adicione um ouvinte de eventos de clique aos botões "Ver mais"
    document.getElementById('verMais1').addEventListener('click', function () {
        // Substitua '35UVzcC3qA0' pelo ID real do vídeo
        redirectToYouTube('35UVzcC3qA0');
    });

    document.getElementById('verMais2').addEventListener('click', function () {
        // Substitua 'SaP1k83fIz8' pelo ID real do vídeo
        redirectToYouTube('SaP1k83fIz8');
    });
    document.getElementById('verMais3').addEventListener('click', function () {
        // Substitua 'SaP1k83fIz8' pelo ID real do vídeo
        redirectToYouTube('pf8KoWwW21I');
    });
    document.getElementById('verMais4').addEventListener('click', function () {
        // Substitua 'SaP1k83fIz8' pelo ID real do vídeo
        redirectToYouTube('tAQCmXvmvAk');
    });
    document.getElementById('verMais5').addEventListener('click', function () {
        // Substitua 'SaP1k83fIz8' pelo ID real do vídeo
        redirectToYouTube('ZbUWI-O7BQA');
    });
    document.getElementById('verMais6').addEventListener('click', function () {
        // Substitua 'SaP1k83fIz8' pelo ID real do vídeo
        redirectToYouTube('TSYK-iDxqW8');
    });
    document.getElementById('verMais7').addEventListener('click', function () {
        // Substitua 'SaP1k83fIz8' pelo ID real do vídeo
        redirectToYouTube('wi_0_J4Vp04');
    });
    document.getElementById('verMais8').addEventListener('click', function () {
        // Substitua 'SaP1k83fIz8' pelo ID real do vídeo
        redirectToYouTube('35UVzcC3qA0');
    });
    document.getElementById('verMais9').addEventListener('click', function () {
        // Substitua 'SaP1k83fIz8' pelo ID real do vídeo
        redirectToYouTube('UNUEG31hIDg');
    });

    // Adicione ouvintes de eventos aos outros botões conforme necessário
</script>
  </body>
</html>
