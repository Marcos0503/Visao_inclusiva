<?php
    $server = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "visãoinclusiva";
    $conexao = mysqli_connect($server, $usuario, $senha);
    $db = mysqli_select_db($conexao, $banco);
?>