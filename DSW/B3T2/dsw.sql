-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 25-Set-2023 às 16:13
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dsw`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NomeCategoria` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`ID`, `NomeCategoria`) VALUES
(1, 'Cuidados com a Pele'),
(2, 'Cabelo Saudavel'),
(3, 'Beleza Natural'),
(4, 'Relaxamento e Bem-Estar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `descproduto`
--

DROP TABLE IF EXISTS `descproduto`;
CREATE TABLE IF NOT EXISTS `descproduto` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ProdutoID` int(11) DEFAULT NULL,
  `Preco` decimal(10,2) DEFAULT NULL,
  `TamanhoID` int(11) DEFAULT NULL,
  `Disponibilidade` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ProdutoID` (`ProdutoID`),
  KEY `TamanhoID` (`TamanhoID`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `descproduto`
--

INSERT INTO `descproduto` (`ID`, `ProdutoID`, `Preco`, `TamanhoID`, `Disponibilidade`) VALUES
(1, 1, '19.99', 1, 'Em Estoque'),
(2, 2, '9.99', 2, 'Em Estoque'),
(3, 3, '12.99', 3, 'Em Estoque'),
(4, 4, '29.99', 4, 'Em Estoque'),
(5, 5, '15.99', 5, 'Em Estoque'),
(6, 6, '14.99', 2, 'Em Estoque'),
(7, 7, '7.99', 1, 'Em Estoque'),
(8, 8, '12.99', 5, 'Em Estoque'),
(9, 9, '8.99', 5, 'Em Estoque'),
(10, 10, '6.99', 3, 'Em Estoque');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NomeProduto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CategoriaID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `CategoriaID` (`CategoriaID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`ID`, `NomeProduto`, `CategoriaID`) VALUES
(1, 'Creme Hidratante Facial	', 1),
(2, 'Sabonete Liquido', 1),
(3, 'Mascara de Argila', 1),
(4, 'Creme Antirrugas', 1),
(5, 'Shampoo para Cabelos Cacheados', 2),
(6, 'Mascara Capilar Reparadora', 2),
(7, 'Esmalte de Unha', 3),
(8, 'Batom', 3),
(9, 'Oleo Essencial Lavanda', 4),
(10, 'Sal de Banho Relaxante', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tamanhos`
--

DROP TABLE IF EXISTS `tamanhos`;
CREATE TABLE IF NOT EXISTS `tamanhos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Tamanho` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tamanhos`
--

INSERT INTO `tamanhos` (`ID`, `Tamanho`) VALUES
(1, '50ml'),
(2, '250ml'),
(3, '100ml'),
(4, '100g'),
(5, '5g');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `nome_users` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_users` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha_users` varchar(240) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_users` date NOT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_users`, `nome_users`, `email_users`, `senha_users`, `data_users`) VALUES
(1, 'CTII448', 'trabalho@dsw.ifsp', 'e10adc3949ba59abbe56e057f20f883e', '2023-09-23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
