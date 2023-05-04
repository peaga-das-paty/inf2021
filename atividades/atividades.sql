-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 11-Abr-2023 às 02:45
-- Versão do servidor: 5.7.25
-- versão do PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atividades`
--
CREATE DATABASE IF NOT EXISTS `atividades` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `atividades`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pesquisa`
--

CREATE TABLE `pesquisa` (
  `pesquisaid` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `musica` tinyint(1) DEFAULT NULL,
  `esporte` tinyint(1) DEFAULT NULL,
  `filme` tinyint(1) DEFAULT NULL,
  `estudo` tinyint(1) DEFAULT NULL,
  `politica` tinyint(1) DEFAULT NULL,
  `danca` tinyint(1) DEFAULT NULL,
  `tecnologia` tinyint(1) DEFAULT NULL,
  `game` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pesquisa`
--

INSERT INTO `pesquisa` (`pesquisaid`, `nome`, `email`, `musica`, `esporte`, `filme`, `estudo`, `politica`, `danca`, `tecnologia`, `game`) VALUES
(1, 'Luis', 'luis.tavares@msn.com', 0, 1, 0, 1, 0, 0, 1, 0),
(2, 'Mariana Pereira', 'mariana@gmail.com', 1, 0, 1, 0, 0, 1, 0, 1),
(3, 'Fernando Souza', 'fsouza@hotmail.com', 0, 1, 1, 0, 1, 0, 1, 0),
(4, 'Matheus Alves', 'matheus@gmail.com', 0, 1, 0, 1, 1, 0, 1, 1),
(5, 'Thaís Mendes', 'thais@hotmail.com', 1, 0, 1, 0, 0, 1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesquisa`
--
ALTER TABLE `pesquisa`
  ADD PRIMARY KEY (`pesquisaid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesquisa`
--
ALTER TABLE `pesquisa`
  MODIFY `pesquisaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
