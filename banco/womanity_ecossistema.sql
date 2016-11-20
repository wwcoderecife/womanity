-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Nov-2016 às 00:54
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `womanity_ecossistema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alcances_trabalho`
--

CREATE TABLE `alcances_trabalho` (
  `id` int(11) NOT NULL,
  `descricao` text,
  `tipo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `areas_atuacao`
--

CREATE TABLE `areas_atuacao` (
  `id` int(11) NOT NULL,
  `descricao` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atende`
--

CREATE TABLE `atende` (
  `id` int(11) NOT NULL,
  `publico_alvo_id` int(11) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atua`
--

CREATE TABLE `atua` (
  `id` int(11) NOT NULL,
  `area_atuacao_id` int(11) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id` int(11) NOT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  `tipo_colaborador_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(11) NOT NULL,
  `rg` varchar(9) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `celular` varchar(12) DEFAULT NULL,
  `cargo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato_organizacao`
--

CREATE TABLE `contato_organizacao` (
  `id` int(11) NOT NULL,
  `contato_id` int(11) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `id` int(11) NOT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  `av` varchar(50) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `complemento` varchar(30) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `regiao` varchar(15) DEFAULT NULL,
  `rua` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fontes_investimento`
--

CREATE TABLE `fontes_investimento` (
  `id` int(11) NOT NULL,
  `descricao` text,
  `tipo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `organizacao_preenchido_por`
--

CREATE TABLE `organizacao_preenchido_por` (
  `id` int(11) NOT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  `preenchido_por_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `organizacoes`
--

CREATE TABLE `organizacoes` (
  `id` int(11) NOT NULL,
  `cnpj` varchar(19) DEFAULT NULL,
  `sigla` varchar(20) DEFAULT NULL,
  `formal_informal` varchar(8) DEFAULT NULL,
  `inicio_atv` date DEFAULT NULL,
  `descricao` text,
  `nome` varchar(50) DEFAULT NULL,
  `questoes_genero_descricao` text,
  `trabalha_questoes_genero` tinyint(1) DEFAULT NULL,
  `tipo_organizacao_id` int(11) DEFAULT NULL,
  `alcance_trabalho_id` int(11) DEFAULT NULL,
  `fonte_investimento_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `preenchido_por`
--

CREATE TABLE `preenchido_por` (
  `id` int(11) NOT NULL,
  `cargo_funcao` varchar(50) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicos_alvo`
--

CREATE TABLE `publicos_alvo` (
  `id` int(11) NOT NULL,
  `descricao` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `publicos_alvo`
--

INSERT INTO `publicos_alvo` (`id`, `descricao`) VALUES
(1, 'Mulheres'),
(2, 'Meninas'),
(3, 'Homens'),
(4, 'Meninos'),
(5, 'Outros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `redes_sociais`
--

CREATE TABLE `redes_sociais` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE `telefone` (
  `id` int(11) NOT NULL,
  `numero` varchar(15) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_colaboradores`
--

CREATE TABLE `tipos_colaboradores` (
  `id` int(11) NOT NULL,
  `descricao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipos_colaboradores`
--

INSERT INTO `tipos_colaboradores` (`id`, `descricao`) VALUES
(1, 'Funcionários'),
(2, 'Voluntários');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_organização`
--

CREATE TABLE `tipo_organização` (
  `id` int(11) NOT NULL,
  `descricao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_organização`
--

INSERT INTO `tipo_organização` (`id`, `descricao`) VALUES
(1, 'Público'),
(2, 'Corporativo'),
(3, 'Coletivo'),
(4, 'Rede'),
(5, 'Organização Social');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  `carta_principios` tinyint(1) NOT NULL,
  `politica_privacidade` tinyint(1) NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `tipo`, `carta_principios`, `politica_privacidade`, `password`, `created_at`, `updated_at`) VALUES
(13, 'willany', 'willanylp@gmail.com', 0, 0, 0, '1234', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '', 'willany_lp@hotmail.com', 1, 1, 1, '1234', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, '', 'willany@hoesf', 1, 1, 1, 'afaf', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alcances_trabalho`
--
ALTER TABLE `alcances_trabalho`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas_atuacao`
--
ALTER TABLE `areas_atuacao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `atende`
--
ALTER TABLE `atende`
  ADD PRIMARY KEY (`id`),
  ADD KEY `publico_alvo_id` (`publico_alvo_id`),
  ADD KEY `organizacao_id` (`organizacao_id`);

--
-- Indexes for table `atua`
--
ALTER TABLE `atua`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organizacao_id` (`organizacao_id`),
  ADD KEY `area_atuacao_id` (`area_atuacao_id`);

--
-- Indexes for table `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organizacao_id` (`organizacao_id`),
  ADD KEY `tipo_colaborador_id` (`tipo_colaborador_id`);

--
-- Indexes for table `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contato_organizacao`
--
ALTER TABLE `contato_organizacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contato_id` (`contato_id`),
  ADD KEY `organizacao_id` (`organizacao_id`);

--
-- Indexes for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organizacao_id` (`organizacao_id`);

--
-- Indexes for table `fontes_investimento`
--
ALTER TABLE `fontes_investimento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizacao_preenchido_por`
--
ALTER TABLE `organizacao_preenchido_por`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organizacao_id` (`organizacao_id`),
  ADD KEY `preenchido_por_id` (`preenchido_por_id`);

--
-- Indexes for table `organizacoes`
--
ALTER TABLE `organizacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alcance_trabalho_id` (`alcance_trabalho_id`),
  ADD KEY `fonte_investimento_id` (`fonte_investimento_id`),
  ADD KEY `tipo_organizacao_id` (`tipo_organizacao_id`);

--
-- Indexes for table `preenchido_por`
--
ALTER TABLE `preenchido_por`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publicos_alvo`
--
ALTER TABLE `publicos_alvo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redes_sociais`
--
ALTER TABLE `redes_sociais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telefone`
--
ALTER TABLE `telefone`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organizacao_id` (`organizacao_id`);

--
-- Indexes for table `tipos_colaboradores`
--
ALTER TABLE `tipos_colaboradores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_organização`
--
ALTER TABLE `tipo_organização`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `atende`
--
ALTER TABLE `atende`
  ADD CONSTRAINT `atende_ibfk_1` FOREIGN KEY (`publico_alvo_id`) REFERENCES `publicos_alvo` (`id`),
  ADD CONSTRAINT `atende_ibfk_2` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`);

--
-- Limitadores para a tabela `atua`
--
ALTER TABLE `atua`
  ADD CONSTRAINT `atua_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`),
  ADD CONSTRAINT `atua_ibfk_2` FOREIGN KEY (`area_atuacao_id`) REFERENCES `areas_atuacao` (`id`);

--
-- Limitadores para a tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD CONSTRAINT `colaboradores_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`),
  ADD CONSTRAINT `colaboradores_ibfk_2` FOREIGN KEY (`tipo_colaborador_id`) REFERENCES `tipos_colaboradores` (`id`);

--
-- Limitadores para a tabela `contato_organizacao`
--
ALTER TABLE `contato_organizacao`
  ADD CONSTRAINT `contato_organizacao_ibfk_1` FOREIGN KEY (`contato_id`) REFERENCES `contatos` (`id`),
  ADD CONSTRAINT `contato_organizacao_ibfk_2` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`);

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `enderecos_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`);

--
-- Limitadores para a tabela `organizacao_preenchido_por`
--
ALTER TABLE `organizacao_preenchido_por`
  ADD CONSTRAINT `organizacao_preenchido_por_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`),
  ADD CONSTRAINT `organizacao_preenchido_por_ibfk_2` FOREIGN KEY (`preenchido_por_id`) REFERENCES `preenchido_por` (`id`);

--
-- Limitadores para a tabela `organizacoes`
--
ALTER TABLE `organizacoes`
  ADD CONSTRAINT `organizacoes_ibfk_1` FOREIGN KEY (`alcance_trabalho_id`) REFERENCES `alcances_trabalho` (`id`),
  ADD CONSTRAINT `organizacoes_ibfk_2` FOREIGN KEY (`fonte_investimento_id`) REFERENCES `fontes_investimento` (`id`),
  ADD CONSTRAINT `organizacoes_ibfk_3` FOREIGN KEY (`tipo_organizacao_id`) REFERENCES `tipo_organização` (`id`);

--
-- Limitadores para a tabela `telefone`
--
ALTER TABLE `telefone`
  ADD CONSTRAINT `telefone_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
