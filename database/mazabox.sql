-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Jun-2015 às 16:14
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mazabox`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL COMMENT 'codigo do cliente',
  `nome_cliente` varchar(50) NOT NULL,
  `sobrenome_cliente` varchar(50) NOT NULL,
  `email_cliente` varchar(50) NOT NULL,
  `nasc_cliente` varchar(20) NOT NULL,
  `cpf_cliente` varchar(20) NOT NULL,
  `rg_cliente` varchar(20) NOT NULL,
  `nomepai_cliente` varchar(60) NOT NULL,
  `nomemae_cliente` varchar(60) NOT NULL,
  `tel_cliente` varchar(20) NOT NULL,
  `cel_cliente` varchar(20) NOT NULL,
  `cep_cliente` varchar(20) NOT NULL,
  `rua_cliente` varchar(60) NOT NULL,
  `num_cliente` varchar(10) NOT NULL,
  `cidade_cliente` varchar(80) NOT NULL,
  `bairro_cliente` varchar(80) NOT NULL,
  `estado_cliente` varchar(80) NOT NULL,
  `complemento_cliente` varchar(50) NOT NULL,
  `facebook_cliente` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome_cliente`, `sobrenome_cliente`, `email_cliente`, `nasc_cliente`, `cpf_cliente`, `rg_cliente`, `nomepai_cliente`, `nomemae_cliente`, `tel_cliente`, `cel_cliente`, `cep_cliente`, `rua_cliente`, `num_cliente`, `cidade_cliente`, `bairro_cliente`, `estado_cliente`, `complemento_cliente`, `facebook_cliente`) VALUES
(4, 'Francisco de Assis', 'D.Amorim', 'franktransporte@hotmail.com', '13/01/1976', '94416290497', '29.156.415-0', '', '', '(21)2736-9400', '(21)97815-2866', '24813-099', 'Rua Ministro Joaquim Antunes - de Quadra 5 a Quadra 9', '17', 'ItaboraÃ­', 'Retiro SÃ£o Joaquim', 'RJ', 'quadra 137', ''),
(5, 'Rayla Almeida', 'de Sirqueira', 'franktransporte@hotmail.com', '20/05/1980', '10836520440', '9001528', '', '', '(21)2736-9400', '(21)97815-2866', '24813-099', 'Rua Ministro Joaquim Antunes - de Quadra 5 a Quadra 9', '17', 'ItaboraÃ­', 'Retiro SÃ£o Joaquim', 'RJ', 'quadra 137', ''),
(6, 'Carmem Dolores', 'L. Machedo', 'franktransporte@hotmail.com', '31/03/1967', '02796462404', '43709888', '', '', '', '(21)97359-2134', '24813-099', 'Rua Ministro Joaquim Antunes - de Quadra 5 a Quadra 9', '17', 'ItaboraÃ­', 'Retiro SÃ£o Joaquim', 'RJ', 'quadra 137', ''),
(7, 'Tamires', 'S. Silva', '', '30/01/1996', '16926227730', '', '', '', '(21)2636-0637', '(21)99928-0999', '24840-448', 'Rua Dois (Lot Ch B Vista)', '27', 'ItaboraÃ­', 'ChÃ¡caras Bela Vista (Sambaetiba)', 'RJ', 'quadra 61', ''),
(8, 'Euclides', 'Silva Santos', 'euclidessilvasantos@bol.com.br', '11/12/1968', '50524054568', '04.210.045-3', '', '', '(21)0000-0000', '(21)98322-5646', '24801-048', 'Rua Liajane Carvalho da Silva', '20', 'ItaboraÃ­', 'NancilÃ¢ndia', 'RJ', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cupons`
--

CREATE TABLE IF NOT EXISTS `cupons` (
  `id` int(11) NOT NULL COMMENT 'codigo cupon',
  `cliente_id` int(11) NOT NULL,
  `promocao_id` int(11) NOT NULL,
  `notafiscal` varchar(340) NOT NULL,
  `dt_compra` varchar(20) NOT NULL,
  `valor_compra` varchar(20) NOT NULL,
  `data_cupons` varchar(50) NOT NULL,
  `hora_cupons` varchar(50) NOT NULL,
  `obs_cupon` varchar(30) DEFAULT NULL,
  `aceitar_email` varchar(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cupons`
--

INSERT INTO `cupons` (`id`, `cliente_id`, `promocao_id`, `notafiscal`, `dt_compra`, `valor_compra`, `data_cupons`, `hora_cupons`, `obs_cupon`, `aceitar_email`) VALUES
(20, 5, 7, '2586', '22/22/0222', '222,22', '10/06/2015', '02:23:16', '', 'sim'),
(21, 5, 7, '585656', '56/56/5656', '5656,56', '10/06/2015', '02:33:07', '', 'sim'),
(22, 7, 7, '444444', '44/44/4444', '444444,44', '10/06/2015', '02:36:17', '', 'sim'),
(23, 6, 7, '65465465', '15/15/2515', '51515151,51', '10/06/2015', '03:17:44', '', 'sim'),
(24, 7, 7, '12121212', '45/54/5444', '1212,12', '10/06/2015', '03:20:28', '', 'sim'),
(25, 6, 7, '56.56.5', '56/12/6253', '35,26', '10/06/2015', '03:27:27', '', 'sim'),
(26, 7, 7, '26.54', '43/32/1323', '452341341,35', '10/06/2015', '03:28:10', '', 'sim'),
(27, 5, 7, '26.54', '43/32/1323', '452341341,35', '10/06/2015', '03:28:45', '', 'sim'),
(28, 4, 7, '26.54', '43/32/1323', '452341341,35', '10/06/2015', '03:29:26', '', 'sim'),
(29, 8, 8, '152495', '28/02/2015', '552,71', '10/06/2015', '03:46:22', '', 'sim'),
(30, 7, 8, '23232323', '23/23/2322', '233,23', '10/06/2015', '03:47:39', '', 'sim'),
(31, 4, 8, '54564545', '45/45/5454', '454,54', '10/06/2015', '03:49:01', '', 'sim'),
(32, 4, 8, '152212', '12/12/2122', '121,21', '10/06/2015', '04:10:06', '', 'sim'),
(33, 4, 8, '4545', '54/55/4545', '55,45', '10/06/2015', '04:10:47', '', 'sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `promocoes`
--

CREATE TABLE IF NOT EXISTS `promocoes` (
  `id` int(11) NOT NULL,
  `promocao` varchar(60) NOT NULL,
  `data` varchar(50) NOT NULL,
  `hora` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `promocoes`
--

INSERT INTO `promocoes` (`id`, `promocao`, `data`, `hora`) VALUES
(1, 'Namorados', '01/06/2015', '00:00:39');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL COMMENT 'codigo do usuario',
  `nome` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `perfil` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `login`, `senha`, `perfil`) VALUES
(1, 'Christian de Ornellas', 'chris', '123', 'ADMIN'),
(2, 'João Vitor Silva Mendes ', 'joao', '123', 'USER'),
(3, 'Maza Box', 'mazabox', '123456', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf_cliente` (`cpf_cliente`);

--
-- Indexes for table `cupons`
--
ALTER TABLE `cupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promocoes`
--
ALTER TABLE `promocoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'codigo do cliente',AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cupons`
--
ALTER TABLE `cupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'codigo cupon',AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `promocoes`
--
ALTER TABLE `promocoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'codigo do usuario',AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
