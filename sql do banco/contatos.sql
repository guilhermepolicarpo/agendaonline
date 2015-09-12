-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12-Set-2015 às 22:06
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE IF NOT EXISTS `contatos` (
  `idContato` int(11) NOT NULL AUTO_INCREMENT,
  `nomeContato` varchar(45) NOT NULL,
  `enderecoContato` varchar(255) DEFAULT NULL,
  `idCidade` int(11) DEFAULT NULL,
  `celularContato` varchar(12) NOT NULL,
  `emailContato` varchar(255) DEFAULT NULL,
  `empresaContato` varchar(255) DEFAULT NULL,
  `cargoContato` varchar(255) DEFAULT NULL,
  `cpf_cnpjContato` int(11) DEFAULT NULL,
  `rgContato` varchar(45) DEFAULT NULL,
  `websiteContato` varchar(255) DEFAULT NULL,
  `redesocialContato` varchar(255) DEFAULT NULL,
  `nascimentoContato` date DEFAULT NULL,
  `tagsContato` varchar(255) DEFAULT NULL,
  `apelidoContato` varchar(45) DEFAULT NULL,
  `anotacoesContato` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idContato`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
