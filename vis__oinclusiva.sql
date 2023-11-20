-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/11/2023 às 00:59
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `visãoinclusiva`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_pessoal`
--

CREATE TABLE `cadastro_pessoal` (
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

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_pj`
--

CREATE TABLE `cadastro_pj` (
  `id_empresa` int(11) NOT NULL,
  `nome_empresa` varchar(255) NOT NULL,
  `CNPJ` char(14) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `ramo_empresa` varchar(100) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `CEP` char(8) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro_pj`
--

INSERT INTO `cadastro_pj` (`id_empresa`, `nome_empresa`, `CNPJ`, `email`, `telefone`, `ramo_empresa`, `rua`, `pais`, `bairro`, `cidade`, `estado`, `CEP`, `senha`) VALUES
(20, 'inforpro', '84.668.864/000', 'marcos@google.com.br', '(15) 9 9778-083', 'Venda', 'joaquim gabriel soares, 70', 'Brasil', 'Eden', 'São Paulo', 'São Paulo', '97850-00', 'Sandra10'),
(21, 'inforpro', '84.668.864/000', 'marcos@google.com.br', '(15) 9 9778-083', 'Venda', 'joaquim gabriel soares, 70', 'Brasil', 'Eden', 'São Paulo', 'São Paulo', '97850-00', 'Sandra10'),
(22, 'Robson entregas', '13.131.313/000', 'Robsonentregas@hotmail.com', '(15) 9 9731-762', 'Entregas', 'João PCD,13', 'Brasil', 'Vanel', 'Sorocaba', 'São Paulo', '18023-00', 'Bolacha123'),
(23, 'Fênix Materiais para construção', '69.502.498/000', 'Vanderlei@fenix.com.br', '(15) 9 9334-806', 'Materiais para construção', 'Rua central, 205', 'Brasil', 'Centro comercial', 'Taubaté', 'São Paulo', '26482-00', 'Abobora2314');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_vagas`
--

CREATE TABLE `cadastro_vagas` (
  `id` int(11) NOT NULL KEY AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `empresa` varchar(255) DEFAULT NULL,
  `localizacao` varchar(100) DEFAULT NULL,
  `periodo` varchar(50) DEFAULT NULL,
  `salario` decimal(10,2) DEFAULT NULL,
  `tipo_contrato` varchar(50) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `atividades` text DEFAULT NULL,
  `beneficios` text DEFAULT NULL

); ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro_pessoal`
--
ALTER TABLE `cadastro_pessoal`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cadastro_pj`
--
ALTER TABLE `cadastro_pj`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Índices de tabela `cadastro_vagas`
--
ALTER TABLE `cadastro_vagas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_pessoal`
--
ALTER TABLE `cadastro_pessoal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cadastro_pj`
--
ALTER TABLE `cadastro_pj`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `cadastro_vagas`
--
ALTER TABLE `cadastro_vagas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
