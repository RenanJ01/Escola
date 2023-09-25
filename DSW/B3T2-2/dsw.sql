-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 25-Set-2023 às 23:50
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
  `ID` int(11) NOT NULL,
  `NomeCategoria` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`ID`, `NomeCategoria`) VALUES
(1, 'Figuras de Ação'),
(2, 'Arte e Esculturas'),
(3, 'Colecionáveis de Cinema e TV'),
(4, 'Itens Históricos e Raros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `detalhesproduto`
--

DROP TABLE IF EXISTS `detalhesproduto`;
CREATE TABLE IF NOT EXISTS `detalhesproduto` (
  `ID` int(11) NOT NULL,
  `ProdutoID` int(11) DEFAULT NULL,
  `Preco` decimal(10,2) DEFAULT NULL,
  `Disponibilidade` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ProdutoID` (`ProdutoID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `detalhesproduto`
--

INSERT INTO `detalhesproduto` (`ID`, `ProdutoID`, `Preco`, `Disponibilidade`) VALUES
(1, 1, '19.99', 'Disponível'),
(2, 2, '24.99', 'Disponível'),
(3, 3, '29.99', 'Disponível'),
(4, 4, '22.99', 'Disponível'),
(5, 5, '199.99', 'Disponível'),
(6, 6, '299.99', 'Disponível'),
(7, 7, '399.99', 'Disponível'),
(8, 8, '49.99', 'Disponível'),
(9, 9, '89.99', 'Disponível'),
(10, 10, '49.99', 'Disponível');

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
(1, 'Figura de Ação do Super-Herói Capitão Estelar', 1),
(2, 'Figura de Ação do Vilão Senhor das Sombras', 1),
(3, 'Figura de Ação do Personagem de Anime Hikari Samurai', 1),
(4, 'Figura de Ação do Herói Clássico Super Aventura', 1),
(5, 'Escultura de Mármore A Dança da Vida', 2),
(6, 'Fragmento Autêntico de Papiro Egípcio Antigo', 4),
(7, 'Estátua de Bronze Cavaleiro da Eternidade', 2),
(9, 'Réplica da Espada Excalibur do Filme Rei Arthur', 3),
(10, 'Coleção de Miniaturas de Personagens de Game of Thrones', 3),
(8, 'Moeda de Prata Romana do Século II d.C.', 4);

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
