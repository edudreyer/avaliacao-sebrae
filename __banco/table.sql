-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql:3306
-- Tempo de geração: 09-Ago-2022 às 14:36
-- Versão do servidor: 8.0.27
-- versão do PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `table`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscricoes`
--

CREATE TABLE `inscricoes` (
  `codigo` int NOT NULL,
  `codigo_palestra` int NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `data_nascimento` varchar(15) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `cep` varchar(10) NOT NULL,
  `logradouro` varchar(255) DEFAULT NULL,
  `numero` varchar(10) NOT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `data_cad` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `inscricoes`
--

INSERT INTO `inscricoes` (`codigo`, `codigo_palestra`, `nome`, `cpf`, `data_nascimento`, `telefone`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `data_cad`) VALUES
(2, 1, '1', '1', '0012-12-12', '1', '1', '1', '1', '1', '1', '1', '1', '2022-08-09 14:17:54'),
(3, 1, 'asdasd', '123123123123', '1212-12-12', '123123123', '78144-020', 'Rua Pancararé', '12', '12', 'Petrópolis', 'Várzea Grande', 'MT', '2022-08-09 14:32:26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `palestras`
--

CREATE TABLE `palestras` (
  `codigo` int NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `palestras`
--

INSERT INTO `palestras` (`codigo`, `nome`) VALUES
(1, 'Palestras Online pelo YouTube do Sebrae/MT (Gravado e transmitido)'),
(2, 'Oficinas Presenciais e Masteclass Presencial no Centro de Eventos do Pantanal');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `inscricoes`
--
ALTER TABLE `inscricoes`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `palestras`
--
ALTER TABLE `palestras`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `inscricoes`
--
ALTER TABLE `inscricoes`
  MODIFY `codigo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `palestras`
--
ALTER TABLE `palestras`
  MODIFY `codigo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
