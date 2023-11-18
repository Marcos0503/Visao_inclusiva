<?php
session_start();
include "conexao.php";
$id_empresa = isset($_SESSION['id']) ? $_SESSION['id'] : null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Visão inclusiva</title>
    <!-- Principal CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Estilos customizados para esse template -->
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

        /* Estilo personalizado para caixas de input */

        .custom-input {
            border-radius: 10px;
            /* Borda arredondada */
            background-color: #C2D7E8;
            /* Cor de fundo personalizada */
        }

        /* Estilo para o cabeçalho */

        header {
            background-color: #C2D7E8;
            color: #2C5DAE;
            display: flex;
            justify-content: space-between;
            /* Espaço entre os elementos para alinhar à esquerda e à direita */
            align-items: center;
            /* Centralize horizontalmente */
            padding: 10px;
            /* Adicione espaçamento interno */
            overflow: hidden;
            text-align: center;
            text-decoration: none;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
            font-family: 'Montserrat', sans-serif;
        }

        #menu {
            color: #2C5DAE;
            /* Adicione a cor do texto desejada */
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

        li {
            float: left;
            text-decoration: none;
            display: block;
            list-style-type: none;
        }

        /* Estilo para a imagem no cabeçalho */
        img {
            max-width: 150px;
            /* Define a largura máxima da imagem, ajuste conforme necessário */
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
            background-color: #4c4c4c;
            /* Adicione a cor de fundo desejada */
            color: #fff;
            /* Adicione a cor do texto desejada */
            border: none;
            padding: 10px 20px;
            /* Adicione espaçamento interno */
            margin: 10px;
            /* Adicione espaçamento vertical aos botões */
            text-decoration: none;
        }

        #logar,
        #cadastrar {
            background-color: #fff;
            /* Adicione a cor de fundo desejada */
            color: #1F78D1;
            /* Adicione a cor do texto desejada */
            border-radius: 8px;
            border: 1px solid #1F78D1;
            padding: 10px 20px;
            /* Adicione espaçamento interno */
            margin: 0 20px;
            /* Adicione espaçamento lateral aos botões */
            cursor: pointer;
        }

        a {
            text-decoration: none;
        }


        .custom-heading-responsive {
            color: #2C5DAE;
            font-size: 350%;
            font-style: normal;
            font-weight: 700;
            line-height: 36px;
            letter-spacing: -1.65px;
        }

        #picture__input {
            display: none;
        }

        .picture {
            width: 100%;
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
            margin-bottom: 30PX;
        }

        .picture:hover {
            color: #777;
            background: #ccc;
        }

        .box {
            color: rgb(82, 82, 82);
            position: absolute;
            top: 50%;
            right: 55%;
            transform: translate(-40%, -40%);
            padding: 4%;
            width: 20%;
        }

        .boxText {
            position: absolute;
            top: 50%;
            left: 70%;
            transform: translate(-40%, -40%);
            padding: 7, 5%;
            width: 20%;
            color: rgb(82, 82, 82);
        }

        .form-control {
            border-radius: 5%;
        }

        .inputBox {
            position: relative;
            margin-bottom: 15%;

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

        .button {
            margin-top: 5%;
            position: absolute;
            top: 112%;
            right: 132%;
            transform: translate(-50%, -50%);
        }

        #content-wrap {
            padding-bottom: 2.5rem;
            /* altura do rodapé */
        }

        footer {
            position: relative;
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
            margin-top: 35%;
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

        /*Estiliza botões de rede sociail*/

        .btn_social {
            width: 100%;
            float: left;
            display: flex;
            margin: auto;
        }

        .btn_social ul {
            width: auto;
            margin: auto;
            float: left;
            display: block;
        }

        .btn_social ul li {
            position: relative;
            background: #555555;
            list-style: none;
            float: left;
            margin: 5px;
            z-index: 1;
            overflow: hidden;
            border-radius: 3px;
            font-size: 1.5em;
            text-align: center;
        }

        .btn_social ul li a {
            width: 50px;
            height: 50px;
            line-height: 53px;
            display: block;
            text-decoration: none;
            color: #fff;
            transition: .4s;
        }

        .btn_social ul li::before {
            transition: 0.4s;
            position: absolute;
            content: '';
            width: 100%;
            height: 100%;
            top: 90%;
            left: 0;
            background: #2fc4cf;
            z-index: -1;
            transform: scale(1);
            transition: .4s;
        }

        .btn_social ul li:hover::before {
            transition: 0.4s;
            top: 0%;
        }

        .btn_social ul li a:hover {
            color: #555555;
        }
    </style>
</head>

<body>
    <header>
        <div>
            <img src="../telaVisualizacaoFisica/img/logo1.png" alt="Logo Final">
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

    <div class="container center-form">
        <!-- Adicione a classe "center-form" para centralizar -->
        <div class="py-5 text-center">
            <h2 class="custom-heading-responsive">Perfil</h2>
            <p class="lead"></p>
        </div>

        <div class="box">
            <form action="">

                <h6>Foto de Perfil</h6>
                <label class="picture" for="picture__input" tab="0">
                    <span class="picture__image">Inserir imagem</span>
                </label>
                <input type="file" accept="image/*" id="picture__input" />

                <?php
                if ($id) {
                    $sql = "SELECT * FROM cadastro_pessoal WHERE id = $id;";

                    if ($conexao) {
                        $result = mysqli_query($conexao, $sql);

                        if ($result && mysqli_num_rows($result) == 1) {
                            $row = mysqli_fetch_assoc($result);
                            echo "<p class='company-info'>Nome da pessoa: " . $row['nome_pessoa'] . "</p>";
                            echo "<p class='company-info'>E-mail: " . $row['email'] . "</p>";
                            echo "<p class='company-info'>Cid: " . $row['cid'] . "</p>";
                            echo "<p class='company-info'>Telefone: " . $row['telefone'] . "</p>";
                            echo "<p class='company-info'>Endereço: " . $row['rua'] . ", " . $row['bairro'] . ", " . $row['cidade'] . ", " . $row['estado'] . "</p>";

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
            </form>
        </div>
        <div class="boxText">
            <form action="">
                <div class="form-group">
                    <label for="sobre" class="txt">Sobre:</label>
                    <textarea class="form-control" id="sobre" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="formacao" class="txt">Formação Acadêmica:</label>
                    <textarea class="form-control" id="formacao" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="experiencia" class="txt">Experiência Profissional:</label>
                    <textarea class="form-control" id="experiencia" rows="3"></textarea>
                </div>
                <div class="button">
                    <a href="../editarPerfilCliente/editarUsuario.html"><button type="button"
                            class="btn btn-outline-info">Editar</button></a>
                </div>

            </form>

        </div>
    </div>

    <footer>
        <br>
        <div id="links">
            <ul>
                <li><a id="rodape" href="#mobile">Mobile App</a></li>
                <li><a id="rodape" href="#quemSomos">Quem Somos</a></li>
                <li><a id="rodape" href="#companhia">Companhia</a></li>

                <img src="../telaVisualizacaoFisica/img/logo1.png" alt="Logo Final">

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
</body>

</html>