<?php
    $nome = $_POST ['nome'];
    $curso = $_POST ['curso'];
    $strcon = mysqli_connect ("localhost","root","123","sga4") or die ("Erro ao conectar com o banco");
    $sql = "INSERT INTO aluno VALUES ('".$nome."' , '".$curso."');"; 
    mysqli_query($strcon, $sql) or die ('Erro ao tentar cadastrar registro'); 
    echo "Aluno cadastrado com sucesso";


?>