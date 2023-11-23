<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "visaoinclusiva";
    $conexao = mysqli_connect($servername, $username, $password);
    $dbname = mysqli_select_db($conexao, $dbname);
?>