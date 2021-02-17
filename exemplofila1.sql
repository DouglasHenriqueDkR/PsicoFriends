-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Dez-2020 às 20:42
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `exemplofila1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `ADMINISTRADORID` int(11) NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `SENHA` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`ADMINISTRADORID`, `NOME`, `EMAIL`, `SENHA`) VALUES
(1, 'Administrador', 'Administrador', 'adm1'),
(2, 'Administrador', 'Administrador', '12345'),
(5, 'Julia Lira Lopes', 'Julia Lira Lopes', '102030');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendentes`
--

CREATE TABLE `atendentes` (
  `ATENDENTEID` int(11) NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `DATADENASCIMENTO` datetime NOT NULL,
  `GENERO` varchar(20) NOT NULL,
  `CELULAR` varchar(12) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `SENHA` varchar(10) NOT NULL,
  `DATADOCADASTRO` datetime NOT NULL,
  `DATADOULTIMOLOGIN` datetime NOT NULL,
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `atendentes`
--

INSERT INTO `atendentes` (`ATENDENTEID`, `NOME`, `DATADENASCIMENTO`, `GENERO`, `CELULAR`, `EMAIL`, `SENHA`, `DATADOCADASTRO`, `DATADOULTIMOLOGIN`, `STATUS`) VALUES
(1, 'KARINA DE ARAUJO DA SILVA FLORENCIO', '0000-00-00 00:00:00', '', '', 'karina@etec.sp.gov.br', '102030', '2020-09-15 20:35:02', '0000-00-00 00:00:00', 0),
(2, 'Douglas Henrique', '0000-00-00 00:00:00', '', '', 'douglas@henrique', 'douglas', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(10, 'Ana Beatriz', '2000-02-20 00:00:00', 'F', '20022000', 'ana@atendente', '202020', '2020-11-27 10:39:19', '0000-00-00 00:00:00', 1),
(15, 'Julia Lira Lopes', '2003-03-31 00:00:00', 'F', '31032003', 'julia@lopes', '3103', '2020-12-09 15:09:20', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimentomensagens`
--

CREATE TABLE `atendimentomensagens` (
  `atendimentoid` int(11) NOT NULL,
  `origem` varchar(1) NOT NULL,
  `datahora` datetime NOT NULL,
  `mensagem` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `atendimentomensagens`
--

INSERT INTO `atendimentomensagens` (`atendimentoid`, `origem`, `datahora`, `mensagem`) VALUES
(24, 'A', '2020-11-23 21:30:11', 'oi'),
(25, 'A', '2020-11-23 21:33:15', 'oi'),
(25, 'A', '2020-11-23 21:33:41', 'ola'),
(25, 'A', '2020-11-23 21:33:50', 'oi'),
(25, 'A', '2020-11-23 21:35:46', 'ola eu sou o atendente'),
(25, 'A', '2020-11-23 21:36:09', 'ola eu sou usuario'),
(25, 'U', '2020-11-23 21:38:44', 'SOU USUARIO'),
(25, 'U', '2020-11-23 21:39:24', 'SOU ATENDENTE'),
(25, 'U', '2020-11-23 21:45:05', 'SOU ATENDENTE'),
(26, 'U', '2020-11-23 21:45:28', 'SOU ATENDENTE'),
(26, 'U', '2020-11-23 21:46:53', 'SOU USUARIO'),
(28, 'A', '2020-11-24 23:13:41', 'oi sou atendente'),
(26, 'U', '2020-11-24 23:16:40', 'ola eu sou o usuario'),
(28, 'U', '2020-11-24 23:18:06', 'usuário'),
(28, 'U', '2020-11-24 23:18:22', 'tudo'),
(28, 'U', '2020-11-24 23:18:29', 'jdbjskbdkjsbd'),
(28, 'A', '2020-11-24 23:18:44', 'beleza'),
(30, 'A', '2020-11-26 20:57:47', 'hello, i am volun'),
(37, 'A', '2020-11-27 20:48:42', 'ola sou voluntário'),
(37, 'A', '2020-11-27 20:49:59', 'ola sou usuario'),
(37, 'A', '2020-11-27 20:51:12', 'ola sou usuario22'),
(37, 'A', '2020-11-27 20:52:07', 'ioiooie'),
(39, 'A', '2020-11-30 20:58:57', 'ndjks'),
(39, 'A', '2020-11-30 21:01:51', 'ndjks'),
(39, 'A', '2020-11-30 21:03:16', 'ndjks'),
(39, 'A', '2020-11-30 21:07:15', 'ndjks'),
(39, 'A', '2020-11-30 21:07:37', 'ndjks'),
(39, 'A', '2020-11-30 21:08:50', 'ndjks'),
(39, 'A', '2020-11-30 21:10:45', 'ndjks'),
(45, 'A', '2020-12-01 19:43:31', 'ola eu sou o atendente'),
(45, 'A', '2020-12-01 19:44:00', 'SOU USUARIO'),
(42, 'U', '2020-12-03 21:43:58', 'Olá somos o PsicoFriends'),
(42, 'U', '2020-12-03 21:43:58', 'Olá somos o PsicoFriends'),
(45, 'U', '2020-12-04 16:00:27', 'oie sou usuário'),
(45, 'U', '2020-12-04 16:00:27', 'oie sou usuário]'),
(45, 'A', '2020-12-04 16:06:33', 'olá sou voluntário'),
(45, 'U', '2020-12-07 13:44:44', 'i am user'),
(45, 'U', '2020-12-08 22:38:52', 'oi tudo bem'),
(56, 'A', '2020-12-09 15:51:06', 'hello i am volun'),
(45, 'U', '2020-12-09 15:54:59', 'ola eu sou usuario'),
(56, 'U', '2020-12-09 15:55:30', 'hello iam user'),
(56, 'A', '2020-12-09 15:55:41', 'hello i am volun'),
(56, 'A', '2020-12-09 15:56:55', 'as mensagens estão sendo duplicadas'),
(56, 'U', '2020-12-09 15:57:05', 'hello iam user'),
(56, 'U', '2020-12-09 15:57:14', 'aqui também'),
(56, 'A', '2020-12-09 15:58:08', 'não pode atualizar por f5 só por enter'),
(56, 'U', '2020-12-09 15:59:06', 'iaao mesmo, a rolagem do usuario esta com problemas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimentos`
--

CREATE TABLE `atendimentos` (
  `ATENDIMENTOID` int(11) NOT NULL,
  `FILAID` int(11) NOT NULL,
  `DATADOINICIO` datetime NOT NULL,
  `DATADOTERMINO` datetime NOT NULL,
  `ATENDENTEID` int(11) NOT NULL,
  `AVALIACAOATENDENTE` int(11) NOT NULL,
  `AVALIACAOATENDIDO` int(11) NOT NULL,
  `OBSERVACAOATENDENTE` text NOT NULL,
  `OBSERVACAOATENDIDO` text NOT NULL,
  `ENCERRADOPOR` varchar(1) NOT NULL,
  `MOTIVO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `filadeespera`
--

CREATE TABLE `filadeespera` (
  `FILAID` int(11) NOT NULL,
  `USUARIOID` int(11) NOT NULL,
  `DATADEENTRADA` datetime NOT NULL,
  `TIPODESAIDA` int(11) NOT NULL,
  `DATADESAIDA` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `logins`
--

CREATE TABLE `logins` (
  `USUARIOID` int(11) NOT NULL,
  `DATALOGIN` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `USUARIOID` int(11) NOT NULL,
  `LOGINUSUARIO` varchar(50) NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `DATADENASCIMENTO` datetime NOT NULL,
  `GENERO` varchar(20) NOT NULL,
  `CELULAR` varchar(12) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `SENHA` varchar(10) NOT NULL,
  `DATADOCADASTRO` datetime NOT NULL,
  `DATADOULTIMOLOGIN` datetime NOT NULL,
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`USUARIOID`, `LOGINUSUARIO`, `NOME`, `DATADENASCIMENTO`, `GENERO`, `CELULAR`, `EMAIL`, `SENHA`, `DATADOCADASTRO`, `DATADOULTIMOLOGIN`, `STATUS`) VALUES
(1, 'jose', 'JOSE RONARIO LEMOS VIEIRA', '0000-00-00 00:00:00', '', '', 'joseronario@yahoo.com', '123456', '2020-09-14 22:23:45', '2020-09-14 22:23:45', 1),
(2, '', 'Julia Lira Lopes', '2003-03-31 00:00:00', '0', '70707070', 'julia@lopes', 'liralopes', '2020-10-13 21:38:27', '0000-00-00 00:00:00', 1),
(14, '', 'Teste2', '2002-02-02 00:00:00', 'O', '2222222', 'teste@2', 'teste2', '2020-11-06 20:07:37', '0000-00-00 00:00:00', 1),
(20, '', 'Stephany Usuario', '1995-05-05 00:00:00', 'F', '05051995', 'stephany@usuario', '050595', '2020-11-27 10:46:28', '0000-00-00 00:00:00', 1),
(21, '', 'Ricardão Carbonara', '2003-02-01 00:00:00', 'M', '01022003', 'ricardao@gmail.com', 'ricardao', '2020-11-27 20:44:41', '0000-00-00 00:00:00', 1),
(25, '', 'usuario teste2', '2002-02-02 00:00:00', 'O', '02022002', 'usuario@teste', '0202', '2020-12-09 13:58:20', '0000-00-00 00:00:00', 1),
(27, '', 'usuarioadm teste', '2001-01-01 00:00:00', 'F', '01012001', 'usuarioadm@teste', '0101', '2020-12-09 14:14:53', '0000-00-00 00:00:00', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ADMINISTRADORID`);

--
-- Índices para tabela `atendentes`
--
ALTER TABLE `atendentes`
  ADD PRIMARY KEY (`ATENDENTEID`);

--
-- Índices para tabela `atendimentos`
--
ALTER TABLE `atendimentos`
  ADD PRIMARY KEY (`ATENDIMENTOID`);

--
-- Índices para tabela `filadeespera`
--
ALTER TABLE `filadeespera`
  ADD PRIMARY KEY (`FILAID`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`USUARIOID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `ADMINISTRADORID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `atendentes`
--
ALTER TABLE `atendentes`
  MODIFY `ATENDENTEID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `atendimentos`
--
ALTER TABLE `atendimentos`
  MODIFY `ATENDIMENTOID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de tabela `filadeespera`
--
ALTER TABLE `filadeespera`
  MODIFY `FILAID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `USUARIOID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
