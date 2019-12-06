-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Dez-2019 às 16:00
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rfcrm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alerta`
--

CREATE TABLE `alerta` (
  `alerta_id` int(11) NOT NULL,
  `alerta_titulo` varchar(50) NOT NULL,
  `alerta_mensagem` varchar(1000) NOT NULL,
  `alerta_usuario` varchar(50) NOT NULL,
  `alerta_data` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alerta`
--

INSERT INTO `alerta` (`alerta_id`, `alerta_titulo`, `alerta_mensagem`, `alerta_usuario`, `alerta_data`) VALUES
(10, 'teste', 'teste', 'Johann Kaltner', '05-12-2019 16:49'),
(11, 'teste2', 'tste2', 'Johann Kaltner', '05-12-2019 16:51'),
(12, 'teste3', 'teste3', 'Johann Kaltner', '05-12-2019 16:51'),
(13, 'teste4', 'teste4', 'Johann Kaltner', '05-12-2019 16:51');

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamado`
--

CREATE TABLE `chamado` (
  `chamado_id` int(11) NOT NULL,
  `chamado_id_cliente` int(50) NOT NULL,
  `chamado_id_usuario` int(11) NOT NULL,
  `chamado_atividade` varchar(50) NOT NULL,
  `chamado_duracao_hora` varchar(50) DEFAULT NULL,
  `chamado_assunto` varchar(50) NOT NULL,
  `chamado_data` varchar(50) NOT NULL,
  `chamado_hora` varchar(50) DEFAULT NULL,
  `chamado_duracao_minuto` varchar(50) DEFAULT NULL,
  `chamado_atendente_rf` varchar(50) NOT NULL,
  `chamado_atendente_cliente` varchar(50) NOT NULL,
  `chamado_telefone` int(20) DEFAULT NULL,
  `chamado_email` varchar(50) DEFAULT NULL,
  `chamado_obs` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `chamado`
--

INSERT INTO `chamado` (`chamado_id`, `chamado_id_cliente`, `chamado_id_usuario`, `chamado_atividade`, `chamado_duracao_hora`, `chamado_assunto`, `chamado_data`, `chamado_hora`, `chamado_duracao_minuto`, `chamado_atendente_rf`, `chamado_atendente_cliente`, `chamado_telefone`, `chamado_email`, `chamado_obs`) VALUES
(6, 0, 5, 'Tirar duvida(s)', '1', 'TESTE', '05/12/2019', '11:39:36', '2', 'Johann Kaltner', 'fulano', 2147483647, 'teste@teste', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
(8, 0, 5, 'Tirar duvida(s)', '1', 'TESTE', '05/12/2019', '11:39:36', '2', 'Johann Kaltner', 'fulano', 2147483647, 'teste@teste', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
(9, 0, 5, 'Tirar duvida(s)', '1', 'TESTE', '05/12/2019', '11:39:36', '2', 'Johann Kaltner', 'fulano', 2147483647, 'teste@teste', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
(10, 0, 5, 'Tirar duvida(s)', '1', 'TESTE', '05/12/2019', '11:39:36', '2', 'Johann Kaltner', 'fulano', 2147483647, 'teste@teste', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
(11, 0, 5, 'Tirar duvida(s)', '1', 'TESTE', '05/12/2019', '11:39:36', '2', 'Johann Kaltner', 'fulano', 2147483647, 'teste@teste', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
(12, 0, 5, 'Tirar duvida(s)', '1', 'TESTE', '05/12/2019', '11:39:36', '2', 'Johann Kaltner', 'fulano', 2147483647, 'teste@teste', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
(13, 0, 5, 'Tirar duvida(s)', '1', 'TESTE', '05/12/2019', '11:39:36', '2', 'Johann Kaltner', 'fulano', 2147483647, 'teste@teste', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
(14, 0, 5, 'Tirar duvida(s)', '1', 'TESTE', '05/12/2019', '11:39:36', '2', 'Johann Kaltner', 'fulano', 2147483647, 'teste@teste', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
(15, 0, 5, 'Tirar duvida(s)', '1', 'teste', '05/12/2019', '15:12:09', '444', 'Johann Kaltner', 'Fulano', 0, 'delete@delete', 'cardcardcardcardcardcardcardcardcardcardcardcardcardcardcardcardcardcardcardcardcardcardcardcardcardcardcard'),
(16, 30, 5, 'Tirar duvida(s)', '1', 'teste30', '05/12/2019', '16:52:31', '3', 'Johann Kaltner', 'teste', 0, 'teste@teste', 'teste 1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamado_old`
--

CREATE TABLE `chamado_old` (
  `chamado_id` int(11) NOT NULL,
  `chamado_id_cliente` int(50) NOT NULL,
  `chamado_atividade` varchar(50) NOT NULL,
  `chamado_duracao_hora` varchar(50) DEFAULT NULL,
  `chamado_assunto` varchar(50) NOT NULL,
  `chamado_data` varchar(50) NOT NULL,
  `chamado_hora` varchar(50) DEFAULT NULL,
  `chamado_duracao_minuto` varchar(50) DEFAULT NULL,
  `chamado_atendente_rf` varchar(50) NOT NULL,
  `chamado_atendente_cliente` varchar(50) NOT NULL,
  `chamado_telefone` int(20) DEFAULT NULL,
  `chamado_email` varchar(50) DEFAULT NULL,
  `chamado_obs` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cliente_id` int(11) NOT NULL,
  `cliente_contato_id` int(11) NOT NULL,
  `cliente_id_usuario` int(11) NOT NULL,
  `cod_cliente` int(10) DEFAULT NULL,
  `cliente_nome` varchar(50) NOT NULL,
  `cliente_endereco` varchar(50) NOT NULL,
  `cliente_bairro` varchar(50) NOT NULL,
  `cliente_cidade` varchar(50) NOT NULL,
  `cliente_estado` varchar(50) NOT NULL,
  `cliente_pais` varchar(50) DEFAULT NULL,
  `cliente_cep` varchar(50) NOT NULL,
  `cliente_cpf` varchar(50) DEFAULT NULL,
  `cliente_cnpj` varchar(20) DEFAULT NULL,
  `cliente_inscricao_estadual` varchar(50) NOT NULL,
  `cliente_categoria` varchar(50) DEFAULT NULL,
  `cliente_email` varchar(50) NOT NULL,
  `cliente_telefone` varchar(50) NOT NULL,
  `cliente_regiao` varchar(50) NOT NULL,
  `cliente_obs` varchar(500) NOT NULL,
  `cliente_img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cliente_id`, `cliente_contato_id`, `cliente_id_usuario`, `cod_cliente`, `cliente_nome`, `cliente_endereco`, `cliente_bairro`, `cliente_cidade`, `cliente_estado`, `cliente_pais`, `cliente_cep`, `cliente_cpf`, `cliente_cnpj`, `cliente_inscricao_estadual`, `cliente_categoria`, `cliente_email`, `cliente_telefone`, `cliente_regiao`, `cliente_obs`, `cliente_img`) VALUES
(0, 0, 0, 4, 'Johann Kaltner', 'Estrada do Gabinal 313', 'Freguesia ', 'Rio de Janeiro', '', 'Brasil', '12312-312', '123.123.123-12', '', '123.123.123.123', 'Desenvolvedor', 'jkdoliveira@gmail.com', '', '', '', NULL),
(30, 0, 5, 0, 'TESTE', 'TESTE', 'TESTE', 'TESTE', 'TESTE', 'TESTE', '46956-465', '231.231.231-23', '12.312.312/3123-12', '654.545.454.646', 'ASS.EMPRES./JURÍDICO', 'TESTE@TESTE', '(65) 46546-5465', '', '', NULL),
(31, 0, 5, 0, '', '', '', '', '', '', '', '', '', '', 'Não Selecionado...', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_old`
--

CREATE TABLE `cliente_old` (
  `cliente_id` int(11) NOT NULL,
  `cliente_nome` varchar(50) NOT NULL,
  `cliente_endereco` varchar(50) NOT NULL,
  `cliente_bairro` varchar(50) NOT NULL,
  `cliente_cidade` varchar(50) NOT NULL,
  `cliente_estado` varchar(50) NOT NULL,
  `cliente_pais` varchar(50) DEFAULT NULL,
  `cliente_cep` varchar(50) NOT NULL,
  `cliente_cnpj_cpf` varchar(50) NOT NULL,
  `cliente_inscricao_estadual` varchar(50) NOT NULL,
  `cliente_categoria` varchar(50) DEFAULT NULL,
  `cliente_email` varchar(50) NOT NULL,
  `cliente_telefone` varchar(50) NOT NULL,
  `cliente_regiao` varchar(50) NOT NULL,
  `cliente_obs` varchar(50) NOT NULL,
  `cliente_contato_nome` varchar(50) DEFAULT NULL,
  `cliente_contato_telefone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato_secundario`
--

CREATE TABLE `contato_secundario` (
  `contato_secundario_id` int(11) NOT NULL,
  `cliente_contato_id` int(11) DEFAULT NULL,
  `contato_id_usuario` int(11) DEFAULT NULL,
  `contato_secundario_nome` varchar(200) DEFAULT NULL,
  `contato_secundario_email` varchar(200) DEFAULT NULL,
  `contato_secundario_telefone` int(11) DEFAULT NULL,
  `contato_secundario_funcao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato_secundario`
--

INSERT INTO `contato_secundario` (`contato_secundario_id`, `cliente_contato_id`, `contato_id_usuario`, `contato_secundario_nome`, `contato_secundario_email`, `contato_secundario_telefone`, `contato_secundario_funcao`) VALUES
(33, 0, 5, '12312312', '3123123123!@123123', 0, '23123213'),
(34, 31, 5, '', '', 0, ''),
(35, 0, 5, 'Fulano', 'fulano@teste', 0, 'Gerente'),
(36, 30, 5, 'teste', 'teste@tweasd', 0, 'tester');

-- --------------------------------------------------------

--
-- Estrutura da tabela `correcao`
--

CREATE TABLE `correcao` (
  `correcao_id` int(11) NOT NULL,
  `correcao_id_cliente` int(50) NOT NULL,
  `correcao_usuario_id` int(11) DEFAULT NULL,
  `correcao_id_chamado` int(11) NOT NULL,
  `correcao_atividade` varchar(50) NOT NULL,
  `correcao_duracao_hora` varchar(50) DEFAULT NULL,
  `correcao_assunto` varchar(50) NOT NULL,
  `correcao_data` varchar(50) NOT NULL,
  `correcao_hora` varchar(50) DEFAULT NULL,
  `correcao_duracao_minuto` varchar(50) DEFAULT NULL,
  `correcao_atendente_rf` varchar(50) NOT NULL,
  `correcao_atendente_cliente` varchar(50) NOT NULL,
  `correcao_telefone` int(20) DEFAULT NULL,
  `correcao_email` varchar(50) DEFAULT NULL,
  `correcao_obs` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `correcao`
--

INSERT INTO `correcao` (`correcao_id`, `correcao_id_cliente`, `correcao_usuario_id`, `correcao_id_chamado`, `correcao_atividade`, `correcao_duracao_hora`, `correcao_assunto`, `correcao_data`, `correcao_hora`, `correcao_duracao_minuto`, `correcao_atendente_rf`, `correcao_atendente_cliente`, `correcao_telefone`, `correcao_email`, `correcao_obs`) VALUES
(11, 0, 5, 1, 'primeiro chamado', '1', 'teste', '19/11/2019', '12:12:41', '10', 'nnahoj', 'johann', 0, NULL, 'teste'),
(12, 0, 5, 1, '', '', '', '27/11/2019', '12:59:00', '', 'Alexandre Furtado', '', 0, NULL, ''),
(13, 30, NULL, 16, '', '', '', '05/12/2019', '16:54:52', '', 'Johann Kaltner', '', 0, NULL, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `log`
--

CREATE TABLE `log` (
  `log_id` int(11) NOT NULL,
  `log_atividade` varchar(200) NOT NULL,
  `log_tipo` varchar(10) NOT NULL,
  `log_data` varchar(50) NOT NULL,
  `log_usuario_nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `log`
--

INSERT INTO `log` (`log_id`, `log_atividade`, `log_tipo`, `log_data`, `log_usuario_nome`) VALUES
(1, 'Registrou  um cliente com id = 15 ', '1', '10/08/2000 - 12:00', 'Johann Kaltner'),
(2, 'teste', '2', '08/10/2000 - 12:00', 'Johann Kaltner'),
(3, 'teste3', '3', '11/11/2000 - 12:00', 'Johann Kaltner'),
(4, 'Registrou um cliente com id = 15 ', '1', '10/08/2000 - 12:00', 'Johann Kaltner'),
(5, 'teste', '2', '08/10/2000 - 12:00', 'Johann Kaltner'),
(6, 'teste3', '3', '11/11/2000 - 12:00', 'Johann Kaltner'),
(7, 'Registrou um cliente com id = 15 ', '1', '10/08/2000 - 12:00', 'Johann Kaltner'),
(8, 'teste', '2', '08/10/2000 - 12:00', 'Johann Kaltner'),
(9, 'teste3', '3', '11/11/2000 - 12:00', 'Johann Kaltner'),
(10, 'Registrou um cliente com id = 15 ', '1', '10/08/2000 - 12:00', 'Johann Kaltner'),
(11, 'teste', '2', '08/10/2000 - 12:00', 'Johann Kaltner'),
(12, 'teste3', '3', '11/11/2000 - 12:00', 'Johann Kaltner'),
(13, 'Registrou um cliente com id = 15 ', '1', '10/08/2000 - 12:00', 'Johann Kaltner'),
(14, 'teste', '2', '08/10/2000 - 12:00', 'Johann Kaltner'),
(15, 'teste3', '3', '11/11/2000 - 12:00', 'Johann Kaltner'),
(16, 'Registrou um cliente com id = 15 ', '1', '10/08/2000 - 12:00', 'Johann Kaltner'),
(17, 'teste', '2', '08/10/2000 - 12:00', 'Johann Kaltner'),
(18, 'teste3', '3', '11/11/2000 - 12:00', 'Johann Kaltner'),
(19, 'Registrou um cliente com id = 15 ', '1', '10/08/2000 - 12:00', 'Johann Kaltner'),
(20, 'teste', '2', '08/10/2000 - 12:00', 'Johann Kaltner'),
(21, 'teste3', '3', '11/11/2000 - 12:00', 'Johann Kaltner'),
(22, 'Registrou um cliente com id = 15 ', '1', '10/08/2000 - 12:00', 'Johann Kaltner'),
(23, 'teste', '2', '08/10/2000 - 12:00', 'Johann Kaltner'),
(24, 'teste3', '3', '11/11/2000 - 12:00', 'Johann Kaltner'),
(25, 'Registrou um cliente com id = 15 ', '1', '10/08/2000 - 12:00', 'Johann Kaltner'),
(26, 'teste', '2', '08/10/2000 - 12:00', 'Johann Kaltner'),
(27, 'teste3', '3', '11/11/2000 - 12:00', 'Johann Kaltner'),
(28, 'Registrou um cliente com id = 15 ', '1', '10/08/2000 - 12:00', 'Johann Kaltner'),
(29, 'teste', '2', '08/10/2000 - 12:00', 'Johann Kaltner'),
(30, 'teste3', '3', '11/11/2000 - 12:00', 'Johann Kaltner'),
(31, 'Registrou um cliente com id = 15 ', '1', '10/08/2000 - 12:00', 'Johann Kaltner'),
(32, 'teste', '2', '08/10/2000 - 12:00', 'Johann Kaltner'),
(33, 'teste3', '3', '11/11/2000 - 12:00', 'Johann Kaltner'),
(34, 'Registrou um cliente com id = 15 ', '1', '10/08/2000 - 12:00', 'Johann Kaltner'),
(35, 'teste', '2', '08/10/2000 - 12:00', 'Johann Kaltner'),
(36, 'teste3', '3', '11/11/2000 - 12:00', 'Johann Kaltner'),
(37, 'Registrou um cliente com id = 15 ', '1', '10/08/2000 - 12:00', 'Johann Kaltner'),
(38, 'teste', '2', '08/10/2000 - 12:00', 'Johann Kaltner'),
(39, 'teste3', '3', '11/11/2000 - 12:00', 'Johann Kaltner'),
(40, 'Registrou um cliente com id = 15 ', '1', '10/08/2000 - 12:00', 'Johann Kaltner'),
(41, 'teste', '2', '08/10/2000 - 12:00', 'Johann Kaltner'),
(42, 'teste3', '3', '11/11/2000 - 12:00', 'Johann Kaltner'),
(43, 'Registrou um cliente com id = 15 ', '1', '10/08/2000 - 12:00', 'Johann Kaltner'),
(44, 'teste', '2', '08/10/2000 - 12:00', 'Johann Kaltner'),
(45, 'teste3', '3', '11/11/2000 - 12:00', 'Johann Kaltner'),
(46, 'Registrou um cliente com id = 15 ', '1', '10/08/2000 - 12:00', 'Johann Kaltner'),
(47, 'teste', '2', '08/10/2000 - 12:00', 'Johann Kaltner'),
(48, 'teste3', '3', '11/11/2000 - 12:00', 'Johann Kaltner'),
(49, 'Registrou um cliente com id = 15 ', '1', '10/08/2000 - 12:00', 'Johann Kaltner'),
(50, 'teste', '2', '08/10/2000 - 12:00', 'Johann Kaltner'),
(51, 'teste3', '3', '11/11/2000 - 12:00', 'Johann Kaltner'),
(52, 'testou', '3', '06/12/2020', 'Johann Kaltner'),
(53, 'testou', '3', '06/12/2021', 'Johann Kaltner'),
(54, 'testou', '3', '07/12/2021', 'Johann Kaltner');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario_nome` varchar(100) NOT NULL,
  `usuario_email` varchar(50) NOT NULL,
  `usuario_senha` varchar(50) NOT NULL,
  `usuario_setor` varchar(50) NOT NULL,
  `usuario_nivel` int(11) NOT NULL,
  `usuario_data_inicio` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario_nome`, `usuario_email`, `usuario_senha`, `usuario_setor`, `usuario_nivel`, `usuario_data_inicio`) VALUES
(5, 'Johann Kaltner', 'johann@rfcrm.com', '1234', 'Comercial', 1, '09/10/2019'),
(8, 'Beth ', 'beth@rfcrm.com', '1234', 'Comercial', 0, NULL),
(13, 'Alexandre Furtado', 'alexandrefurtado@rfcrm.com', '1234', 'Administração', 1, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alerta`
--
ALTER TABLE `alerta`
  ADD PRIMARY KEY (`alerta_id`);

--
-- Índices para tabela `chamado`
--
ALTER TABLE `chamado`
  ADD PRIMARY KEY (`chamado_id`),
  ADD KEY `chamado_id_cliente` (`chamado_id_cliente`);

--
-- Índices para tabela `chamado_old`
--
ALTER TABLE `chamado_old`
  ADD PRIMARY KEY (`chamado_id`),
  ADD KEY `chamado_id_cliente` (`chamado_id_cliente`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cliente_id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `cliente_contato_id` (`cliente_contato_id`);

--
-- Índices para tabela `cliente_old`
--
ALTER TABLE `cliente_old`
  ADD PRIMARY KEY (`cliente_id`),
  ADD KEY `cliente_id` (`cliente_id`);

--
-- Índices para tabela `contato_secundario`
--
ALTER TABLE `contato_secundario`
  ADD PRIMARY KEY (`contato_secundario_id`),
  ADD KEY `contato_secundario_id_cliente` (`cliente_contato_id`);

--
-- Índices para tabela `correcao`
--
ALTER TABLE `correcao`
  ADD PRIMARY KEY (`correcao_id`);

--
-- Índices para tabela `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`log_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alerta`
--
ALTER TABLE `alerta`
  MODIFY `alerta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `chamado`
--
ALTER TABLE `chamado`
  MODIFY `chamado_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `chamado_old`
--
ALTER TABLE `chamado_old`
  MODIFY `chamado_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `cliente_old`
--
ALTER TABLE `cliente_old`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `contato_secundario`
--
ALTER TABLE `contato_secundario`
  MODIFY `contato_secundario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `correcao`
--
ALTER TABLE `correcao`
  MODIFY `correcao_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `log`
--
ALTER TABLE `log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

DELIMITER $$
--
-- Eventos
--
CREATE DEFINER=`root`@`localhost` EVENT `apagarRegistroLimite` ON SCHEDULE EVERY 1 DAY STARTS '2019-12-03 15:20:07' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM alerta WHERE alerta_data <= DATE_SUB(NOW(), INTERVAL 10 DAY)$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
