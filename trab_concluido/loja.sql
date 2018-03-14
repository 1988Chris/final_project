-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 12-Mar-2018 às 03:31
-- Versão do servidor: 5.7.21-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `idestado` int(11) NOT NULL,
  `nome_estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`idestado`, `nome_estado`) VALUES
(1, 'RJ'),
(2, 'SP'),
(3, 'ES'),
(4, 'MG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idproduto` int(11) NOT NULL,
  `nome_produto` varchar(45) DEFAULT NULL,
  `descricao_produto` varchar(800) DEFAULT NULL,
  `preco_produto` varchar(45) DEFAULT NULL,
  `foto_produto` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idproduto`, `nome_produto`, `descricao_produto`, `preco_produto`, `foto_produto`) VALUES
(7, 'Curso Typescript', 'a', '500.00', '201803120308441565.png'),
(8, 'Curso HTML5 & CSS3', 'a', '750.00', '20180312031102933.jpg'),
(9, 'Curso PHP', 'a', '600.00', '201803120311359972.jpg'),
(10, 'Curso MySQL', 'a', '650.00', '201803120312245587.png'),
(11, 'Curso Python', 'a', '800.00', '201803120312566584.jpg'),
(12, 'Curso Java', 'a', '590.00', '201803120313261594.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nome_usuario` varchar(45) DEFAULT NULL,
  `sobrenome_usuario` varchar(45) DEFAULT NULL,
  `idade_usuario` varchar(45) DEFAULT NULL,
  `endereco_usuario` varchar(45) DEFAULT NULL,
  `cidade_usuario` varchar(45) DEFAULT NULL,
  `login_usuario` varchar(80) DEFAULT NULL,
  `senha_usuario` varchar(100) DEFAULT NULL,
  `perfil_usuario` enum('adm','usuario') DEFAULT NULL,
  `estado_idestado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome_usuario`, `sobrenome_usuario`, `idade_usuario`, `endereco_usuario`, `cidade_usuario`, `login_usuario`, `senha_usuario`, `perfil_usuario`, `estado_idestado`) VALUES
(1, 'Chris', 'Santos', '29', 'Rua C', 'Volta Redonda', 'chris@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `produto_idproduto` int(11) NOT NULL,
  `quantidade_venda` varchar(100) DEFAULT NULL,
  `nome_venda` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idestado`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idproduto`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `login_cliente_UNIQUE` (`login_usuario`),
  ADD KEY `fk_usuario_estado1_idx` (`estado_idestado`);

--
-- Indexes for table `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`produto_idproduto`),
  ADD KEY `fk_usuario_has_produto_produto1_idx` (`produto_idproduto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `idestado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_estado1` FOREIGN KEY (`estado_idestado`) REFERENCES `estado` (`idestado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `fk_usuario_has_produto_produto1` FOREIGN KEY (`produto_idproduto`) REFERENCES `produto` (`idproduto`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
