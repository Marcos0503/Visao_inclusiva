<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="visão, inclusiva, pcd, neurodivergente, igualdade, vagas, emprego, trabalho">
    <meta name="description" content="Seja bem vindo ao Visão Inclusiva, um site onde você pode encontrar vagas de emprego para pessoas com
    deficiência e neurodivergentes">
    <link rel="stylesheet" type="text/css" href="\..\VI_Vagas\estilo\telaVagas.css" media="screen" />

    <title>Vagas | Visão Inclusiva</title>
</head>
<body>
    <header>
        <div>
            <img src="\..\VI_Vagas\imagens\logoFinal.png">
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
        <!-- a partir daqui é o conteúdo da página -->
        
        <?php
        // conecta ao banco de dados (substitua pelo MySQLi ou PDO)
        $con = mysql_connect("localhost", "root", "") or die("Erro ao conectar ao banco de dados");
        mysql_select_db("cadastro_vagas", $con) or die("Erro ao selecionar o banco de dados");
        
        // consulta as vagas
        $query = "SELECT id, titulo, descricao, data_publicacao, empresa, localizacao, salario, tipo_contrato, requisitos FROM cadastro_vagas";
        $result = mysql_query($query, $con) or die("Erro ao consultar as vagas");
        
        // exibe as vagas em divs
        if(mysql_num_rows($result) > 0) {
            while($row = mysql_fetch_assoc($result)) {
                echo "<div class='vaga' onclick=\"toggleDetalhes('vaga{$row['id']}')\">";
                echo "<h3>{$row['titulo']}</h3>";
                echo "<span>{$row['data_publicacao']}</span>";
                echo "<h4>{$row['empresa']}</h4>";
                echo "<p>{$row['descricao']}</p>";
                echo "<p>Salário: R$ {$row['salario']}</p>";
                echo "<div class='detalhes' id='vaga{$row['id']}'>";
                echo "<p>Localização: {$row['localizacao']}</p>";
                echo "<p>Tipo de Contrato: {$row['tipo_contrato']}</p>";
                echo "<p>Requisitos: {$row['requisitos']}</p>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "Nenhuma vaga encontrada";
        }
        
        // fecha a conexão
        mysql_close($con);
        ?>

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
    </script>

    <!--Em tese, o conteúdo termina aqui-->

    <footer>
        <br>
        <div id="links">
                <ul>
                    <li><a id="rodape" href="#mobile">Mobile App</a></li>
                    <li><a id="rodape" href="#quemSomos">Quem Somos</a></li>
                    <li><a id="rodape" href="#companhia">Companhia</a></li>

            <img src="\..\VI_Vagas\imagens\logoFinal.png">

                    <li><a id="rodape" href="#helpDesk">Help Desk</a></li>
                    <li><a id="rodape" href="#blog">Blog</a></li>
                    <li><a id="rodape" href="#recursos">Recursos</a></li>
                </ul>
                <br>
            </div>
        <div id="redesSociais">
            <p>
                Obrigado por acessar o site. Nós amamos nossos usuários!
            </p>
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
    </footer>
    </div>      
</body>
</html>