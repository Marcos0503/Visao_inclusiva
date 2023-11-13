<?php
    $id='';
    $nome='';
    $telefone='';
    $CID='';
    $endereco='';
    $email='';
    $sobre='';
    $formacao='';
    $experiencia='';

    $codigo = filter_var($_POST["codigo"], filter_validate_int);

    
?>

<!--CREATE TABLE `cadastro_pessoal` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(255) NOT NULL,
  `CPF` char(11) NOT NULL,
  `date_nasc` date DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `recado` varchar(15) DEFAULT NULL,
  `CID` varchar(10) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `CEP` char(8) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `curriculo` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

