-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Jun 07, 2011 as 03:39 AM
-- Versão do Servidor: 5.1.46
-- Versão do PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `portal_noticias`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administracao`
--

CREATE TABLE IF NOT EXISTS `administracao` (
  `cod_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(100) NOT NULL,
  `login_usuario` varchar(50) NOT NULL,
  `senha_usuario` varchar(50) NOT NULL,
  `Nivel_acesso` varchar(20) NOT NULL,
  PRIMARY KEY (`cod_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `administracao`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `cod_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `nome_autor` varchar(100) DEFAULT '',
  `data_noticia` varchar(20) DEFAULT '',
  `titulo_noticia` varchar(50) DEFAULT '',
  `subtitulo_noticia` varchar(80) DEFAULT '',
  `categoria` varchar(50) DEFAULT '',
  `texto_noticia` varchar(200) DEFAULT '',
  PRIMARY KEY (`cod_noticia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`cod_noticia`, `nome_autor`, `data_noticia`, `titulo_noticia`, `subtitulo_noticia`, `categoria`, `texto_noticia`) VALUES
(3, 'a', 'a', 'aaa', 'a', 'Televisao', ''),
(4, 'eeee', 'eeee', 'eeee', 'eeee', 'Todas', ''),
(5, 'eeee', 'eeee', 'eeee', 'eeee', 'Todas', 'ffffffffff'),
(6, '', '', '', '', 'Todas', ''),
(7, '', '', '', '', 'Todas', ''),
(8, 'XCZDF', 'FFF', 'WEWEW', 'DSSAX', 'Humor', 'VCVXCC'),
(9, 'XCZDF', 'FFF', 'WEWEW', 'DSSAX', 'Humor', '<p><b>^</b> Clique aqui para expandir</p>\r\n<p>mcasdasdSADD</p>');