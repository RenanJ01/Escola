-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Set-2023 às 17:45
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dsw`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NomeCategoria` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`ID`, `NomeCategoria`) VALUES
(1, 'Carros'),
(2, 'Caminhões'),
(3, 'Motos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cor`
--

DROP TABLE IF EXISTS `cor`;
CREATE TABLE IF NOT EXISTS `cor` (
  `CorID` int NOT NULL AUTO_INCREMENT,
  `CorNome` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`CorID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `descproduto`
--

DROP TABLE IF EXISTS `descproduto`;
CREATE TABLE IF NOT EXISTS `descproduto` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ProdutoID` int DEFAULT NULL,
  `Preco` decimal(10,2) DEFAULT NULL,
  `Cor` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lote` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ProdutoID` (`ProdutoID`),
  KEY `CorID` (`Cor`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `descproduto`
--

INSERT INTO `descproduto` (`ID`, `ProdutoID`, `Preco`, `Cor`, `Lote`, `Date`) VALUES
(1, 1, '1999.99', '1', '0820', '2023-09-13'),
(2, 2, '500000.00', '2', '0125', '2023-09-28'),
(3, 3, '700000.00', '3', '0705', '2023-09-17'),
(4, 4, '799999.99', '4', '0405', '2023-09-30'),
(5, 5, '15000.00', '5', '487', '2023-09-20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NomeProduto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CategoriaID` int DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `CategoriaID` (`CategoriaID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`ID`, `NomeProduto`, `CategoriaID`) VALUES
(1, 'Fusca', 1),
(2, 'Audi-TT', 1),
(3, 'VW/19.390 CTC 4X2 4X2 2014/2014', 2),
(4, 'MAN TGX 28.440 6X2 2017/2018\r\n', 2),
(5, 'XRE-330', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_users` int NOT NULL AUTO_INCREMENT,
  `nome_users` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_users` varchar(160) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha_users` varchar(240) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
