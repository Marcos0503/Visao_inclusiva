-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/11/2023 às 17:03
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
  `id_usuario` int(11) NOT NULL,
  `nome_completo` varchar(255) NOT NULL,
  `CPF` char(11) NOT NULL,
  `RG` varchar(20) DEFAULT NULL,
  `date_nasc` date DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `CID` varchar(10) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `CEP` char(8) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `curriculo` longblob DEFAULT NULL,
  `sobre` text DEFAULT NULL,
  `caminho_foto_perfil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro_pessoal`
--

INSERT INTO `cadastro_pessoal` (`id_usuario`, `nome_completo`, `CPF`, `RG`, `date_nasc`, `telefone`, `CID`, `rua`, `cidade`, `bairro`, `estado`, `pais`, `CEP`, `email`, `senha`, `curriculo`, `sobre`, `caminho_foto_perfil`) VALUES
(5, 'João Guilherme', '698.741.233', '58.767.876-5', '2001-01-20', '(15) 9 9778-083', 'F20 + G19.', 'Travessa sua mãe, 70', 'São Paulo', 'jardim casa nova', 'São Paulo', 'Brasil', '18950-00', 'JoaoPCD@gmail.com', '$2y$10$8T1jIG0.RFNy6I4EF6kMgOiL1jhPp0iwP1XOPIONEtafJtwjNucGK', 0x4d6f64656c6f5f64655f437572726963756c756d5f315f507265656e636869646f2e706466, 'Texto de apresentação', '../imagem_perfil/images.jfif'),
(7, 'Rubens Nervoso', '698.741.233', '58.767.876-5', '2023-05-10', '(15) 9 9778-083', 'F20 + G19.', 'Travessa sua mãe, 70', 'São Paulo', 'jardim casa nova', 'São Paulo', 'Brasil', '18950-00', 'Robsonentregas@hotmail.com', '$2y$10$emjUBIfrq1eNSUaPzfY6b.MqkhfgaJ.wa7kGguuVUICden48kcOvu', 0x696d616765732e6a666966, 'texto', '../imagem_perfil/Design sem nome (2).png'),
(8, 'Alessandra', '303.721.138', '58.767.876-5', '1981-10-29', '(15) 9706-3057', 'F20 + G19.', 'joaquim gabriel soares, 70', 'Ibiuna', 'Vila lima', 'São Paulo', 'Brasil', '18150-00', 'alessandra@gmail.com', '$2y$10$QtAwTMawyZB2buuiyka0ouMHxJVMz6rV34i5VynNVBcX7i600r/F.', 0x4d6f64656c6f5f64655f437572726963756c756d5f315f507265656e636869646f2e706466, 'Eu sou alessandra', '../imagem_perfil/images.jfif');

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
  `senha` varchar(255) DEFAULT NULL,
  `sobre` text DEFAULT NULL,
  `caminho_foto_perfil` varchar(255) DEFAULT NULL,
  `caminho_banner` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro_pj`
--

INSERT INTO `cadastro_pj` (`id_empresa`, `nome_empresa`, `CNPJ`, `email`, `telefone`, `ramo_empresa`, `rua`, `pais`, `bairro`, `cidade`, `estado`, `CEP`, `senha`, `sobre`, `caminho_foto_perfil`, `caminho_banner`) VALUES
(70, 'Tecmundo', '89.654.321/800', 'Marcos@inforpro.com.br', '(15) 9 9778-083', 'Jornalismo', 'Travessa sua mãe, 70', 'Brasil', 'jardim casa nova', 'São Paulo', 'São Paulo', '18950-00', '$2y$10$xTpuIiMQZFg0PXNq1AybPevjPxhgNHlM6ehk4xbCkr.QlGE1WjB/2', '[Seu Nome] é alguém que ilumina qualquer ambiente com sua presença calorosa e sorriso contagiante. Apaixonado(a) por [mencionar um interesse ou hobby], [Seu Nome] transforma sua dedicação em verdadeiras obras de arte.\r\n\r\nSeu espírito aventureiro o(a) leva a explorar o mundo ao redor, sempre em busca de novas experiências e aprendizados. Com uma mente inquisitiva, [Seu Nome] encontra beleza nas pequenas coisas e inspiração nas complexidades da vida.', '../imagemPerfilEmpresa/perfil_70_images.jfif', '../banner/banner_70_Design sem nome (1).png'),
(71, 'Tecmundo', '89.654.321/800', 'as8196110@gmail.com', '(15) 9 9778-083', 'Jornalismo', 'Travessa sua mãe, 70', 'Brasil', 'jardim casa nova', 'São Paulo', 'São Paulo', '18950-00', '$2y$10$1wFPeChVFsZO0esyi.e3vewYk6SkwE24kdLfOVbzpK2fReINzglze', 'texto', '../imagemPerfilEmpresa/perfil_71_images.jfif', '../banner/banner_71_Design sem nome (1).png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_vagas`
--

CREATE TABLE `cadastro_vagas` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `empresa` varchar(255) DEFAULT NULL,
  `localizacao` varchar(100) DEFAULT NULL,
  `periodo` varchar(50) DEFAULT NULL,
  `salario` decimal(10,2) DEFAULT NULL,
  `tipo_contrato` varchar(50) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `atividades` text DEFAULT NULL,
  `beneficios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro_vagas`
--

INSERT INTO `cadastro_vagas` (`id`, `id_empresa`, `titulo`, `empresa`, `localizacao`, `periodo`, `salario`, `tipo_contrato`, `descricao`, `atividades`, `beneficios`) VALUES
(1, 70, 'GAROTO DE PROGRMA', 'Google', 'Ibiuna', 'Noite', 500.00, 'Eterno', 'venha fazer programa com a gente ', 'Programar', 'Vale Vips'),
(2, 70, 'GAROTO DE PROGRMA', 'Google', 'Ibiuna', 'Noite', 500.00, 'Eterno', 'venha fazer programa com a gente ', 'Programar', 'Vale Vips'),
(3, 71, 'Empresa 2', 'Google', 'Ibiuna', 'Noite', 500.00, 'Eterno', 'venha fazer programa com a gente ', 'Programar', 'Vale Vips'),
(4, 70, '', '', '', '', 0.00, '', '', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro_pessoal`
--
ALTER TABLE `cadastro_pessoal`
  ADD PRIMARY KEY (`id_usuario`);

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
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `cadastro_pj`
--
ALTER TABLE `cadastro_pj`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de tabela `cadastro_vagas`
--
ALTER TABLE `cadastro_vagas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
