-- MySQL dump 10.13  Distrib 5.6.23, for Win32 (x86)
--
-- Host: br-cdbr-azure-south-b.cloudapp.net    Database: ecossistema
-- ------------------------------------------------------
-- Server version	5.5.45-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `atuacao_direta`
--

DROP TABLE IF EXISTS `atuacao_direta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `atuacao_direta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(100) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizacao_id` (`organizacao_id`),
  CONSTRAINT `atuacao_direta_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13431 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atuacao_direta`
--

LOCK TABLES `atuacao_direta` WRITE;
/*!40000 ALTER TABLE `atuacao_direta` DISABLE KEYS */;
/*!40000 ALTER TABLE `atuacao_direta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contatos`
--

DROP TABLE IF EXISTS `contatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `cargo` varchar(150) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `tipo` varchar(1) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizacao_id` (`organizacao_id`),
  CONSTRAINT `contatos_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7401 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contatos`
--

LOCK TABLES `contatos` WRITE;
/*!40000 ALTER TABLE `contatos` DISABLE KEYS */;
/*!40000 ALTER TABLE `contatos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empoderamento`
--

DROP TABLE IF EXISTS `empoderamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empoderamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `descricao` varchar(600) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizacao_id` (`organizacao_id`),
  CONSTRAINT `empoderamento_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8661 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empoderamento`
--

LOCK TABLES `empoderamento` WRITE;
/*!40000 ALTER TABLE `empoderamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `empoderamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enderecos`
--

DROP TABLE IF EXISTS `enderecos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enderecos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rua` varchar(105) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `complemento` varchar(500) DEFAULT NULL,
  `bairro` varchar(500) DEFAULT NULL,
  `cidade` varchar(500) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `regiao` varchar(45) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizacao_id` (`organizacao_id`),
  CONSTRAINT `enderecos_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1361 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enderecos`
--

LOCK TABLES `enderecos` WRITE;
/*!40000 ALTER TABLE `enderecos` DISABLE KEYS */;
/*!40000 ALTER TABLE `enderecos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `erro_logs`
--

DROP TABLE IF EXISTS `erro_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `erro_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `erro` text NOT NULL,
  `data` date NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `erro_logs`
--

LOCK TABLES `erro_logs` WRITE;
/*!40000 ALTER TABLE `erro_logs` DISABLE KEYS */;
INSERT INTO `erro_logs` VALUES (1,'SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column \'descricao\' at row 1','2017-01-15',371),(11,'SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column \'descricao\' at row 1','2017-01-15',371),(21,'SQLSTATE[22003]: Numeric value out of range: 1264 Out of range value for column \'valor\' at row 1','2017-01-15',841),(31,'SQLSTATE[22003]: Numeric value out of range: 1264 Out of range value for column \'valor\' at row 1','2017-01-15',841),(41,'SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column \'descricao\' at row 1','2017-01-15',371),(51,'SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column \'descricao\' at row 1','2017-01-15',371),(61,'SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column \'descricao\' at row 1','2017-01-15',371),(71,'SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column \'descricao\' at row 1','2017-01-15',371),(81,'SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column \'rua\' at row 1','2017-01-15',371),(91,'SQLSTATE[HY093]: Invalid parameter number: number of bound variables does not match number of tokens','2017-02-07',1091),(101,'SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column \'sigla\' at row 1','2017-02-14',1151),(111,'SQLSTATE[22003]: Numeric value out of range: 1264 Out of range value for column \'valor\' at row 1','2017-02-21',1441);
/*!40000 ALTER TABLE `erro_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcoes`
--

DROP TABLE IF EXISTS `funcoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(300) DEFAULT NULL,
  `complemento` varchar(500) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizacao_id` (`organizacao_id`),
  CONSTRAINT `funcoes_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcoes`
--

LOCK TABLES `funcoes` WRITE;
/*!40000 ALTER TABLE `funcoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `indicacoes`
--

DROP TABLE IF EXISTS `indicacoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `indicacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizacao_id` (`organizacao_id`),
  CONSTRAINT `indicacoes_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7861 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `indicacoes`
--

LOCK TABLES `indicacoes` WRITE;
/*!40000 ALTER TABLE `indicacoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `indicacoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orcamentos`
--

DROP TABLE IF EXISTS `orcamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orcamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ano` varchar(45) DEFAULT NULL,
  `valor` decimal(10,0) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizacao_id` (`organizacao_id`),
  CONSTRAINT `orcamentos_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9031 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orcamentos`
--

LOCK TABLES `orcamentos` WRITE;
/*!40000 ALTER TABLE `orcamentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `orcamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organizacoes`
--

DROP TABLE IF EXISTS `organizacoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `organizacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cnpj` varchar(45) DEFAULT NULL,
  `localizacao` varchar(45) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `sigla` varchar(45) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `inicio_atv` varchar(5) DEFAULT NULL,
  `qtde_pessoas` varchar(100) DEFAULT NULL,
  `recursos_financeiros` varchar(100) DEFAULT NULL,
  `descricao` text,
  `publico_atendido` varchar(300) DEFAULT NULL,
  `politicas_publicas` varchar(500) DEFAULT NULL,
  `monitoramento_atividades` varchar(500) DEFAULT NULL,
  `estrategia_comunicacao` varchar(500) DEFAULT NULL,
  `premiacao_certificacao` varchar(500) DEFAULT NULL,
  `organizacao_pai` varchar(45) DEFAULT NULL,
  `identifica_iniciativa` varchar(300) DEFAULT NULL,
  `usuario_id` int(10) unsigned NOT NULL,
  `inputnomeong` varchar(100) DEFAULT NULL,
  `pessoas_benefeciadas` varchar(100) DEFAULT NULL,
  `justificativa_orcamento` varchar(500) DEFAULT NULL,
  `identifica_organizacao_outros` varchar(100) DEFAULT NULL,
  `fonte_recursos_outros` varchar(100) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario_id_UNIQUE` (`usuario_id`),
  KEY `usuario_id` (`usuario_id`),
  CONSTRAINT `organizacoes_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2281 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organizacoes`
--

LOCK TABLES `organizacoes` WRITE;
/*!40000 ALTER TABLE `organizacoes` DISABLE KEYS */;
INSERT INTO `organizacoes` VALUES (1491,'99.999.999/9999-99','urbana','ong24','ong24','(99) 9999-9999','teste@gmail.com','academica','1903','6-10','nao','Santarém Santarem é um município brasileiro do estado do Pará, sendo o terceiro mais populoso do estado, atrás somente da capital, Belém e de Ananindeua, e o principal centro urbano, financeiro, comercial e cultural do oeste do estado.\r\n\r\nÉ sede da Região Metropolitana de Santarém, o segundo maior aglomerado urbano do Pará. Pertence à mesorregião do Baixo Amazonas e a microrregião de mesmo nome. Situa-se na confluência dos rios Tapajós e Amazonas. Localizada a cerca de 800 km das metrópole metrópo','Movimentos, coletivos, redes, fóruns','teste','','','',NULL,NULL,371,NULL,'2501-5000','Não tenho orçamento','','',NULL,'2017-01-16'),(1501,'99.999.999/9999-99','rural','hjhdfsjfhjhhj','hgjhsfhfjhjdfh','(81) 8888-8888','karina@womenwhocode.com','empresa_privada','2015','21-50','sim','jhgdhgjhgjhjghjfghdj','Adolescentes e jovens','hhghhfjghjhfhgdhgjh','hrghdgdgh','bhfhghfdhj','hghgjhhgghgfdh',NULL,NULL,381,NULL,'5001-10000','','','hfhgjhjfghfjdgh',NULL,'2017-02-12'),(1511,NULL,'rural','vhhfhdhjh','hjhfhhjsdhfjdsh','(77) 7777-7777','karina@womenwhocode.com','redes','1993','11-20','sim','bfbffbdgbfdb','Empresas','                   ','','',NULL,'66.666.666/6666-66','acao',401,'hgbfgbdfghjfdhjg','1001-2500','','','',NULL,NULL),(1531,'','rural','hvfvjhdfhjghjfghj','gfghfhdhjfh','(99) 9999-9999','machado@machado.com','outros','1975','1-5','sim','ghjfgfhjghjhfjhhdfjjd','Homens','','','','fhhfghgfhgehghghfghds',NULL,NULL,411,NULL,'50001-100000','','outros testando','',NULL,'2017-02-27'),(1541,'123-33','urbana','ponteAponte','pAp','(11) 2222','abc@abs.com','empresa_privada','2011','1-5','sim','nada','Organizações Sociais','nao sei ','1234','123','432',NULL,NULL,421,NULL,'até 50','Não tenho orçamento','','',NULL,NULL),(1551,NULL,'rural','wwcode recife','wwcode','(99) 9999-9999','recife@womenwhocode.com','negocio_social','1946','251-1000',NULL,'bbvfbhjbfhjhj','Homens','                   bhjbhbhjbhjbhbghfbhjgfgfhjghjf','','',NULL,'33.333.333/3333-33','acao',431,'wwcode ','5001-10000','','','',NULL,NULL),(1561,'99-99','rural','teste','teste','(81) 9999','teste@teste.com','investimento_social_privado','1991','21-50','nao','teste','Organizações Sociais','','','','',NULL,NULL,511,NULL,'1001-2500','Não tenho orçamento','','',NULL,NULL),(1571,'','rural','teste','teste','(99) 9999','teste@teste.com','fundos','1912','101-500','nao','teste','Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher','','','','',NULL,NULL,521,NULL,'5001-10000','Não tenho orçamento','','',NULL,NULL),(1572,'01.959.083/0001-03','urbana','Instituto Promundo','','(21) 2544-3114','promundo@promundo.org.br','ong_sociedade_civil','1997','21-50','sim','Promundo é uma organização não governamental que atua em diversos países do mundo buscando promover a igualdade de gênero e a prevenção da violência com foco no envolvimento de homens e mulheres na transformação de masculinidades.','Mulheres','Servidores públicos civis e militares do estado do Rio de Janeiro agora têm direito a 30 dias de licença-paternidade – e não mais cinco dias úteis, como previsto na Constituição Federal. O Promundo, junto à Rede Nacional Primeira Infância, defende a ampliação da licença-paternidade nacionalmente. ','As mudanças relatadas pelos homens nas diversas intervenções realizadas como mudança no modo de interagir com outros homens aumento da capacidade de discutir a sexualidade abertamente, reconhecimento dos direitos sexuais das mulheres são alguns dos resultados das avaliações de impacto dos programas propostos pelo Instituto Promundo que têm apontado para a eficácia de estratégias que buscam envolver homens no enfrentamento as violências e também na busca pela equidade de gênero. ','Todo o trabalho do Instituto tem como base campanhas com impacto local e nacional. Para ganhar escala desenvolvemos parcerias com outras organizações e redes','PREMIO JUSCELINO KUBITSCHEK - BID',NULL,NULL,581,NULL,'1001-2500','','','',NULL,NULL),(1581,'06.948.246/0001-76','urbana','associação de mulheres independentes na ativa','As marruas ','(67) 3245-1790','pontodeculturaamina@hotmail.com','ong_sociedade_civil','2004','11-20','sim','A AMINA foi criada com o intuito de promover o desenvolvimento humano, social, econômico e cultural de indivíduos e famílias em situação de exclusão, risco e vulnerabilidade social (principalmente mulheres que sofreram violência doméstica), residentes nos bairros e vilas da região urbana do Município de Anastácio, MS.','Mulheres','','Ao longo de 12 anos já foram beneficiadas mais de 2500 mulheres.','','',NULL,NULL,531,NULL,'51-250','','','',NULL,NULL),(1591,NULL,'rural','wwcode recife','wwcode','(81) 3314-5628','karina@womenwhocode.com','academica','1994','21-50','nao','testando','Empresas',' bvbvjvjvjvjjv                  ','','',NULL,'','acao',451,'','51-250','Não tenho orçamento','','',NULL,NULL),(1621,NULL,'rural','teste5','wwcode','(55) 5555-5555','machadokarina5@gmail.com','academica','1900','11-20','sim','teste5','Empresas','                   ','','',NULL,'','acao',621,'','251-500','','','',NULL,NULL),(1631,NULL,'urbana','machadokarina6@gmail.com','machadokarina6@gmail.com','(66) 6666-6666','machadokarina6@gmail.com','coletivo','1900','6-10','nao','teste6','Mulheres','                   ','','',NULL,'','projeto',631,'','51-250','Não tenho orçamento','','',NULL,NULL),(1651,'12.333.333/3333-33','rural','wwcode','wwcode','(81) 3314-5628','recife@womenwhocode.com','academica','1913','51-100','sim','vhvvjhjvhjhjhjhfjvhfj','Mulheres','bbhbhjbhjhhjhjhjh','','','',NULL,NULL,651,NULL,'2501-5000','Não tenho orçamento','','teste ',NULL,NULL),(1653,NULL,'ambas','hfgjhfd','fhfhhfhhjbjh','(81) 3333-3333','karina@womenwhocode.com','coletivo','1900','11-20','nao','jhhjghjghjfghjhfg','OrganizaÃ§Ãµes Sociais','                   ','','',NULL,'22.222.222/2222-22','acao',711,'wwww','51-250','NÃ£o tenho orÃ§amento','','',NULL,NULL),(1661,NULL,'ambas','bvbvbbvcb','bcdcdcvhdsc','(81) 0000-0000','karinamachado@msn.com','coletivo','1914','11-20',NULL,'hfghfghdjashdjdhsjhsdjhfjhgfhsgdhfg','Empresas','                   ','','',NULL,'11.118.888/8999-99','projeto',731,'wwcode','1001-2500','Não tenho orçamento','','',NULL,NULL),(1671,NULL,'ambas','wwcode','wwcode','(81) 3314-5628','iniciativaedge@hotmail.com','coletivo','1924','21-50','nao','bfbghbghhjggfhjghjg','Organizações Sociais','                   ','','',NULL,'22.222.222/2222-22',NULL,741,'wwcode','1000000+','Não tenho orçamento','','',NULL,NULL),(1681,NULL,'ambas','aaaaaaa bbbbbbbbbbbb','ab','(11) 1111-1111','aaaaaaaaaaa@bbbbbbbb.com','investimento_social_privado','1926','1001+','sim','aaaaaaaaaaaaaa bbbbbbbbbbbbb ccccccccccccc','Movimentos, coletivos, redes, fóruns','aaaaaaaaaaaaaaaaa\r\ncccccccccc\r\nbbbbbbbbbbbbb                   ','','aaaaaaaaaaaaa bbbbbbbbbbbb ccccccccccccccc',NULL,'22.222.222/2222-22','acao',691,'aaaaaaa bbbbbbbbb','50001-100000','','','aaaa bbbbbb cccccccccc ddddddddddd',NULL,NULL),(1691,'60.428.646/0001-04','urbana','Associação Feminina de Estudos Sociais e Universit','AFESU','(11) 3085-0919','afesu@afesu.org.br','ong_sociedade_civil','1963','51-100','sim','A AFESU trabalha para promover a dignidade humana por meio da formação cidadã, educacional, cultural e profissional de meninas e mulheres que vivem em situação de alta vulnerabilidade social. Trabalhamos pela inclusão da mulher no mercado de trabalho e pela igualdade de oportunidades, tornando-as protagonistas de suas próprias vidas com o alcance de sua independência e auto sustento.','Mulheres','','A AFESU iniciou em 2016 seu processo de monitoramento e avaliação de seus projetos com o apoio pro bono da Bain&Company. Como os dados ainda estão sendo apurados, ainda não temos dados fechamos para apresentar. Teremos em meados de abril. De qualquer forma, em 2017, já desenvolvemos um método de coleta de dados para todos os projetos/ aulas que irão iniciar.','Sim, a AFESU possui um profissional responsável pela área de comunicação e elaboramos anualmente estratégias de comunicação com o apoio pro bono das agências Revolution e MSL Andreoli.','CNAS – registrada conforme Processo nº 55.802/65; CEBAS – desde 1970, com inscrição nº 215.393/70; SEADS – certificado de inscrição nº 1639/66; CMDCA – registrada sob o nº 469/CMDC/95; SMADS – registrada sob o nº 16.1074/84; COMAS – certificado de inscrição nº 123/02; Declarada de Utilidade Pública Federal pelo Decreto nº 63.517 de 01/11/68; Declarada de Utilidade Pública Estadual pela Lei nº 8.082 de 29/01/64; Declarada de Utilidade Pública Municipal pelo Decreto nº 8.767 de 30/04/70',NULL,NULL,791,NULL,'251-500','','','Nota Fiscal Paulista, Eventos',NULL,NULL),(1701,'',NULL,'wef','','(22) 2222-2222','willany_lp@hotmail.com','redes','1900','6-10','nao','e','Empresas','','','','',NULL,NULL,841,NULL,'51-250','Não tenho orçamento','','',NULL,'2017-01-15'),(1711,'',NULL,'wwcode','wccode','(81) 9999-9999','karinamachado@msn.com','coletivo','2016','21-50','nao','As linhas acima poderiam ser obra de um escritor famoso, quem sabe Jorge Amado ou João do Rio. Mas na realidade, trata-se do artigo \\\"O jardim da Rua\r\n16\\\" produzido por um adolescente. Luiz Eduardo Lima Aguiar estuda no ensino médio em uma escola pública de Arapiraca, no interior de Alagoas, e foi um dos finalistas da última Olimpíada de Língua Portuguesa Escrevendo o Futuro, iniciativa do Ministério da Educação, Fundação Itaú Social e com coordenação técnica do Cenpec\r\nCriado em 2002, o programa p','Empresas','','','','',NULL,NULL,771,NULL,'251-500','Não tenho orçamento','','',NULL,'2017-01-16'),(1731,'88.899.999/9999-99','ambas','wwcode','wwcode','(88) 8888-8888','recife@womenwhocode.com','cooperativa','2014','11-20','nao','gjkjkgjkhkjjkhjkh','Organizações Sociais','','','','',NULL,NULL,851,NULL,'51-250','Não tenho orçamento','','','2017-01-15',NULL),(1741,'33.333.333/3333-33','rural','firefoxorg','firefoxorg','(77) 7777-7777','firefoxorg@gmail.com','movimento','1993','21-50','nao','bnnjbnbnnbnbvmn','Movimentos, coletivos, redes, fóruns','','','','',NULL,NULL,861,NULL,'51-250','Não tenho orçamento','','','2017-01-15',NULL),(1751,'12.345.678/9045-67','ambas','zsdxfcgvhbjnkmlg hjk 234567 @#$%¨&*(','ertyui','(22) 2222-2222','zzzzzzzzzzz@dddddddddddd.com','governo','1905','1001+','sim','asdfghjklçwertyuiop1234567890@#$%¨&*()_@#$%¨&*()sdfghjklxdcfvbhnmklbynumk,l','Organizações Sociais','xxxxxxxxxxxxxxxxxxxxxxxcccccccccccccccccccccccc 33333333333333333333333333333333333333333!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!','','zsxdcfvgbhnjmlkç,xcfvgbhnjm cvybunijmk,ltcvbyunim crvtbuynim!@#$%¨&*() 1234567890-=','WERTYUIOP SDfghjkxcvb234567890 @#$%¨&*()',NULL,NULL,901,NULL,'50001-100000','','','34567890--sdfghjkl@#$%¨&*(','2017-01-16',NULL),(1761,NULL,'rural','sobre a experiência de sua filha ','bsajciwc','(77) 7777-7777','ddddddd@ffffffffff.com.br','negocio_social','1920','501-1000','nao','wertyuio dfghjklç@#$%¨&*()_ 23456789#$%¨&*( \r\n\r\nO depoimento de Carolina Lopes sobre a experiência de sua filha em um dos sete parquinhos criados pelo Erê Lab ilustra a realidade arcaica no Brasil em relação à utilização de espaços lúdicos públicos que acabam condicionando as crianças a um certo tipo de brincar. Os poucos espaços existentes seguem, desde a década de 70, a mesma tipologia composta por cinco equipamentos básicos: gira-gira, trepa-trepa, balanço, gangorra e escorregador.  ','Movimentos, coletivos, redes, fóruns','sdfghjkl ERTYUIOP ertyuiop @#$%¨&*(234567890 ','ertyuiop $%¨&*() hbjhsbdacjnwkcnwknjnew 1234567890- bhbcuybweubycweib','aaaaaaaaaaaaaaaaaa rrrrrrrrrrrrrrrrrrrrr vvvvvvvvvvvvvvvv bcuybuqbuo #$%¨&*()',NULL,'','acao',911,'','2501-5000','','','ertyuh fghj 6789 #$%¨&*(','2017-01-16',NULL),(1771,'08.811.377/0001-32','urbana','Blossom','','(11) 2236-1731','elenicett@letitblossom.com','empresa_privada','2016','1-5','nao','A Blossom é dkjfal;fdjaljfd;aflafajfasjlfafa\r\n;aldalfjaljflajfajflafadadfa\r\na;ldaljflajflasjflasjflafajfdaf\r\nadljfal;djflajfdlasjdfajfa\r\ndalfjalfdja;fja;fa;fja;','Empresas','','','','',NULL,NULL,931,NULL,'51-250','Não tenho orçamento','','','2017-01-16',NULL),(1781,'','rural','margarida','marg','(22) 3456-9087','adm@letitblossom.com','coletivo','2012','6-10','sim','nonoonononfoanfaofnaofnaonfoafoanfaonfoanfaofaofnaofnaonfaosfnoanfoanfoanfoanfoanfoanfoanfoanfoanfafafjaljflajflajflajkfljaflajflajlfjalfjalfjalfjalfjalfjlajflajflajflasjflajflajflasjflajflajdlfajdflajdflakj;lfkjal;fjalfjaljfalskfjaskfjlasjflsajflasjdfl;sfjjjjjjflajdfaeorueromdofoaepvamvdaomaomeoiue aldajf;aljfladjflsafasddlkfa\r\nalkdajfafdajfdaljflajfas;l faldfj df','Organizações Sociais','','dkfajdfajf;lajlfjajfajf;af;a','adfja;fja;lflafla;fafa','1. adka;fa;dfa;fda;\r\n2. dakfja;ldjfa;lfja;',NULL,NULL,951,NULL,'51-250','','','skdjf;ajfd;adfa;fdjaldkjfa','2017-01-16',NULL),(1791,NULL,'ambas','Análise de testes','HTI','(11) 3994-7403','gisant99@gmail.com','empresa_privada','1995','1-5','nao','Teste Homologação','Organizações Sociais','                   ','','Redes sociais',NULL,'11.561.334/0001-14',NULL,991,'Gigi Coorp','51-250','Não tenho orçamento','','Doação Pessoa Física','2017-01-18',NULL),(1801,'','ambas','wwcode','wwcode','(88) 8888-8888','karinamachado@msn.com','academica','1913','6-10','nao','fhghfgjgjhhfjghjfhjhg','Empresas','','','','',NULL,NULL,1051,NULL,'1001-2500','','','','2017-02-06',NULL),(1811,NULL,'ambas','hgfghfghghj','hgfhgfhjghgh','(88) 8888-8888','karina@womenwhocode.com','academica','1906','51-100','nao','hfgjdhghgkhtknhgk','Organizações Sociais','                   ','','',NULL,'','projeto',1061,'','5001-10000','Não tenho orçamento','','','2017-02-06',NULL),(1831,'','ambas','wwcode','wwcode','(55) 5555-5555','recife@womenwhocode.com','academica','1903','21-50','nao','hghgfhdgfhgdhfjghdfghgdfhghjfdghdfghdgfghgfhdsgfhgdfhghfg','Organizações Sociais','vgrvghvghrvghfgrvghfgrvfgvgrfv','vbvjvbjkdbvjfjvbjbv','bbbhbgbhjbghbthgbhbthgbht v vj v fv f ','bjhvbjhbvbfhjvbvfgvfgfghvgfvgvrgfvrvgrgvfgrvfg',NULL,NULL,1111,NULL,'1001-2500','Não tenho orçamento','','','2017-02-13','2017-02-17'),(1841,NULL,'ambas','wwcode','wwcode','(88) 8888-8888','karinamachado@msn.com','investimento_social_privado','1905','51-100','nao','hgbhbgbhtgbrthjbghrtg','Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher','                   bhbhrbhfbrhbfhrebh','herbhgbhebghbhtbgh','fgfgfuerfugyurgfyurgfyu',NULL,'88.888.888/8888-88','projeto',1141,'wwcode','1001-2500','Não tenho orçamento','','','2017-02-13',NULL),(1851,NULL,'ambas','wwcode','wwcode','(88) 8888-8888','karinamachado@msn.com','empresa_privada','1911','51-100','nao','hwefhehwfhewhjfvhjefhje','Empresas','                   bbjbjgbjbgjbjgbjr','wvEFVHJEWVFEHWJFHJEW','VHFHVEHJVFHEHF',NULL,'2.222.222/2222-22','projeto',723,'wwcode','2501-5000','Não tenho orçamento','','','2017-02-13',NULL),(1861,'99.999.999/9999-99','ambas','testando testando testando','testando','(81) 9999-9999','org1@andreza.com','ong_sociedade_civil','1900','1001+','sim','Etapa 3 (endereço) - não retorna o estado e município informados mas estão cadastrados na base de dados','Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher','O Ecossistema de iniciativas para equidade de gênero e empoderamento da mulher é uma iniciativa da ONU Mulheres, Womanity Foundation, BrazilFoundation e Instituto C&A. Tem como objetivo principal mapear organizações e iniciativas que trabalham com direitos e empoderamento da mulher para ampliar as interconexões entre elas e seu impacto. Esta plataforma possibilita o cadastro das organizações e iniciativas para que as informações sejam utilizadas para traçar o perfil de cada organização e identif','O Ecossistema de iniciativas para equidade de gênero e empoderamento da mulher é uma iniciativa da ONU Mulheres, Womanity Foundation, BrazilFoundation e Instituto C&A. Tem como objetivo principal mapear organizações e iniciativas que trabalham com direitos e empoderamento da mulher para ampliar as interconexões entre elas e seu impacto. Esta plataforma possibilita o cadastro das organizações e iniciativas para que as informações sejam utilizadas para traçar o perfil de cada organização e identif','O Ecossistema de iniciativas para equidade de gênero e empoderamento da mulher é uma iniciativa da ONU Mulheres, Womanity Foundation, BrazilFoundation e Instituto C&A. Tem como objetivo principal mapear organizações e iniciativas que trabalham com direitos e empoderamento da mulher para ampliar as interconexões entre elas e seu impacto. Esta plataforma possibilita o cadastro das organizações e iniciativas para que as informações sejam utilizadas para traçar o perfil de cada organização e identif','O Ecossistema de iniciativas para equidade de gênero e empoderamento da mulher é uma iniciativa da ONU Mulheres, Womanity Foundation, BrazilFoundation e Instituto C&A. Tem como objetivo principal mapear organizações e iniciativas que trabalham com direitos e empoderamento da mulher para ampliar as interconexões entre elas e seu impacto. Esta plataforma possibilita o cadastro das organizações e iniciativas para que as informações sejam utilizadas para traçar o perfil de cada organização e identif',NULL,NULL,1151,NULL,'1000000+','','','testando testando testando testando testando testando','2017-02-14','2017-02-14'),(1871,NULL,'ambas','kmjqknmkjenjkne','nnnik','(11) 1111-1111','nn@mm.com','outros','1900','101-500','nao','jnjnwvnh nffiwnínjniwe nwnn 234567890 #$%¨&*()_','','                   errfnewjnj jnkfnkwfnk jnwenf','','',NULL,'11.111.111/1111-11','projeto',1211,'ninedqnednineiu','1001-2500','','jnjnjkmdeini','','2017-02-15',NULL),(1881,'','rural','aaaaaaa bbbbbbbbbbbb','bsajciwc','(77) 7777-7777','aa@bb.com','ong_sociedade_civil','1919','101-500','nao','qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq','','kcmwejnjcnwjeni \r\nEm quais estados sua iniciativa tem atuação direta?*','nqjencnjnjcnjennc jmerjcnneripw miemq 3456789 !@#$%¨&*()','jewnmnkjcwnerjvncierwnn \r\n4567890- 456789','jnjwkncjnwjvnjwenij ncjwnejciwenciwjc mcikmw',NULL,NULL,1231,NULL,'10001-50000','','','','2017-02-15',NULL),(1901,'','ambas','gwdhvgjehwvjhgwjhvg','hchhcvewhhefh','(77) 7777-8888','karinamachado@msn.com','coletivo','1910','51-100','nao','bvjewbvbewjkfbjwbj','','','','','',NULL,NULL,1171,NULL,'10001-50000','Não tenho orçamento','','','2017-02-15',NULL),(1911,'','urbana','elenice','cm','(11) 9876-5123','adm@together.co','coletivo','2014','1-5','sim','kjdfa;ljfd;ajflajfdlajfalfaj;fljalfkjalfjaljflajflaf\r\ndafkjal;fjal;kfjdkaljfalskjfklakjflasjf;af;a','','','','','',NULL,NULL,1291,NULL,'até 50','Não tenho orçamento','','','2017-02-15',NULL),(1921,'','ambas','t','t','(99) 9999-9999','teste@andreza.com','coletivo','1900','6-10','nao','1','Adolescentes e jovens','','','','',NULL,NULL,1161,NULL,'51-250','Não tenho orçamento','','','2017-02-15',NULL),(1931,'','ambas','bvhbjhvbbvjhbv','vbhfvbjvjbdbvjbvjf','(88) 8888-8888','karinamachado@msn.com','coletivo','2008','11-20','nao','bvjhfbvhfbvhjbhvbhfvhvfbhjfvh','Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher','bhdbhbhbfhjbsgbjhbgjhbjghbhjr','','','',NULL,NULL,1271,NULL,'50001-100000','Não tenho orçamento','','','2017-02-15',NULL),(1941,'','rural','ponteAponte','pAp','(22) 2222-2222','pAp@teste.com','empresa_privada','2011','6-10','nao','Somos uma empresa social focada no desenvolvimento e na implementação de projetos intra e intersetoriais colaborativos, que potencializam o impacto socioambiental de nossos parceiros (OSCs, empresas privadas e órgãos governamentais).','Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher','','qwertyuiop asdfghjklç~zxcvbnm,.\r\n123456789\r\n1234567890@#$%¨&*()_+','@#$%¨&*() 4567890 ertyuiop\r\nSomos uma empresa social focada no desenvolvimento e na implementação de projetos intra e intersetoriais colaborativos, que potencializam o impacto socioambiental de nossos parceiros (OSCs, empresas privadas e órgãos governamentais).','34567890- \r\nsdfghjklç\r\n@#$%¨&*()_',NULL,NULL,1311,NULL,'51-250','','','','2017-02-16',NULL),(1942,'16.571.439/0001-04','urbana','Mandala-É','não tem ','(33) 3333-3333','naotem@naotem.com.br','empresa_privada','1900','1-5','sim','Assessoria em pesquisa, sistematização de conhecimento, produção editorial e formação.','Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher','Criação de cursos permanentes de formação de equipes pedagógicas para o ensino de leitura. ','','Envio de prospectos para pessoas conhecidas. ','',NULL,NULL,921,NULL,'1000000+','Não tenho orçamento','','','2017-02-16',NULL),(1951,NULL,'ambas','aaaaa123456789@#$%¨&*()','a1$','(22) 2222-2222','aa@bb.com','academica','2017','251-500','sim','njqncjkenckqdkn @#$%¨&*(v 23456789','Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher','                   ubqfubqbubeub xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx','','',NULL,'','projeto',1361,'','500000-1000000','Não tenho orçamento','',NULL,'2017-02-17',NULL),(1961,'11.111.111/1111-11','rural','ponteAponte','pAp','(11) 1111-1111','pAp@teste.com','academica','1916','101-500','sim','aaaaaaaaaaaaaaaa bbbbbbbbbbbbbbbbbbb cccccccccccccc','','','','','',NULL,NULL,1401,NULL,'10001-50000','','',NULL,'2017-02-21',NULL),(1971,'','ambas','t','','(','t@andreza.com','cooperativa','1902','6-10','nao','t','Organizações Sociais','','','','',NULL,NULL,1341,NULL,'251-500','Não tenho orçamento','',NULL,'2017-02-21',NULL),(1981,'','ambas','dasdas','das','','das@gmail.com','investimento_social_privado','2004','6-10','sim','sldfjsodijf sdofijsdoifj sdofijo','Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher','','','kdsjvnksdnvsk dsivjsndij sdvjn','scfsdfsd',NULL,NULL,1421,NULL,'até 50','','','','2017-02-21','2017-02-21'),(1991,NULL,'ambas','jujuca','juca','','jujuca@hotmail.com','ong_sociedade_civil','1917','1001+','nao','ndcojfsdn sdconsdoic sdcokjsd csdcksodcksdnc  idvcsdnndcojfsdn sdconsdoic sdcokjsd csdcksodcksdnc  idvcsdnndcojfsdn sdconsdoic sdcokjsd csdcksodcksdnc  idvcsdnndcojfsdn sdconsdoic sdcokjsd csdcksodcksdnc  idvcsdnndcojfsdn sdconsdoic sdcokjsd csdcksodcksdnc  idvcsdnndcojfsdn sdconsdoic sdcokjsd csdcksodcksdnc  idvcsdnndcojfsdn sdconsdoic sdcokjsd csdcksodcksdnc  idvcsdnndcojfsdn sdconsdoic sdcokjsd csdcksodcksdnc  idvcsdn','Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher','                                      ','','xmcvn sck scvksndk',NULL,'','projeto',1431,'','1000000+','','','','2017-02-21','2017-02-21'),(2011,'33.333.333/3333-33','ambas','jojoca','jjk','','jojoca@gmail.com','empresa_privada','1916','1001+','sim','jhsdosncosd sdkfcnsdocksd ','Movimentos, coletivos, redes, fóruns','','','','dcnsijdnc',NULL,NULL,1441,NULL,'até 50','','',NULL,'2017-02-21',NULL),(2021,'','urbana','Teste','','','orgteste@gmail.com','movimento','2015','11-20','nao','Teste teste','Mulheres','','teste','teste','teste',NULL,NULL,1531,NULL,'51-250','Não tenho orçamento','',NULL,'2017-02-23',NULL),(2031,'','ambas','Teste','','','teste@teste.com','outros','2016','1-5','nao','Teste.','Adolescentes e jovens','','','','',NULL,NULL,1541,NULL,'até 50','','',NULL,'2017-02-23',NULL),(2041,NULL,'ambas','Women for Equality','WE','(81) 3444-5893','womenforequality@gmail.com','movimento','2010','11-20','nao','Promove palestras, oficinas e atividades correlatas com o objetivo de informar e empoderar as mulheres, criando uma consciência coletiva e gerando reflexão na organização social na qual estamos inseridos.','Mulheres','                   ','','',NULL,'','acao',1551,'','251-500','Não tenho orçamento','',NULL,'2017-02-23',NULL),(2051,'','urbana','Violência Domestica Jamais','VDJ','(81) 3455-8879','VDJOrganizacao@hotmail.com','redes','2005','6-10','sim','A V.D.J. busca e reconhece casos de violência domestica e tenta repassar para os órgãos competentes, esperando assim uma resolução eficaz.','Mulheres','','','','',NULL,NULL,1461,NULL,'até 50','Não tenho orçamento','',NULL,'2017-02-24',NULL),(2061,'','ambas','wwcode','vhvhbvhjdhj','(77) 7777-7777','recife@womenwhocode.com','cooperativa','1907','51-100','nao','ehghghgrhjghjrghgrhjjhrghj','Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher','hgjfjghjfhgjhgjfhgjhfjghjfhgjh','','','',NULL,NULL,1321,NULL,'1001-2500','Não tenho orçamento','',NULL,'2017-02-27',NULL),(2071,'','ambas','gvgvfgffgv',' fhb fhbvh','(77) 7777-7777','karinamachado@msn.com','cooperativa','1910','251-500','nao',' fb fv f vf v','Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher','','','','',NULL,NULL,1631,NULL,'1001-2500','Não tenho orçamento','',NULL,'2017-02-27',NULL),(2081,'','ambas','fjfhgjhjghfjghjfh','','(88) 8888-8888','karinamachado@msn.com','cooperativa','1905','21-50','nao','jhdjshfjhjghjghjh','Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher','','','','',NULL,NULL,1641,NULL,'5001-10000','Não tenho orçamento','',NULL,'2017-03-01',NULL),(2091,'','ambas','gwfggrfg','vfhvhfvh','(77) 7777-7777','karinamachado@msn.com','coletivo','1905','21-50','nao','gjrjgh','Organizações Sociais','','','','',NULL,NULL,1651,NULL,'1001-2500','Não tenho orçamento','',NULL,'2017-03-01',NULL),(2101,'','ambas','bvbvfbhvbfhbh','bvvbfbhb','(77) 7777-7777','karinamachado@msn.com','empresa_privada','1902','101-500','nao','bgbhhjbhgbhbh','Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher','','','','',NULL,NULL,1661,NULL,'2501-5000','Não tenho orçamento','',NULL,'2017-03-01',NULL),(2111,'','ambas','q','q','(22) 2222-2222','karina@womenwhocode.com','investimento_social_privado','1904','51-100','nao','evbvhb','Organizações Sociais','','','','',NULL,NULL,1671,NULL,'501-1000','Não tenho orçamento','',NULL,'2017-03-01',NULL),(2121,'','ambas','hhfghjbghjb','bhjfbghfbghj','(88) 8888-8888','karinamachado@msn.com','empresa_privada','1905','101-500','nao','fdjfdjjkfhdjgkhjfkdg','Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher','','','','',NULL,NULL,1681,NULL,'10001-50000','Não tenho orçamento','',NULL,'2017-03-01',NULL),(2131,'','ambas','hfdhfjghjg','','(33) 3333-3333','karinamachado@msn.com','cooperativa','1906','21-50','nao','rugurhrguihugh','Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher','','','','',NULL,NULL,1691,NULL,'501-1000','','',NULL,'2017-03-01',NULL),(2141,'','ambas','wefwefef','','','branco@teste.com','academica','1916','6-10','nao','safd','Organizações Sociais','','','','',NULL,NULL,1701,NULL,'501-1000','Não tenho orçamento','',NULL,'2017-03-01',NULL),(2151,'','ambas','erf4r','','','willteste@gmail.com','academica','1916','21-50','nao','wr3r','Organizações Sociais','','','','',NULL,NULL,1571,NULL,'251-500','Não tenho orçamento','',NULL,'2017-03-01',NULL),(2181,'','urbana','Rede de Mulheres Brasileiras Lideres pela Sustenta','Rede de Mulheres','(11) 3289-9811','rededemulheres@rededemulheres.org','redes','2010','1-5','sim','A REDE DE MULHERES BRASILEIRAS LÍDERES PELA SUSTENTABILIDADE é uma iniciativa que atrai e mobiliza lideranças femininas interessadas nas questões de sustentabilidade e que atuam em empresas privadas, instituições públicas, organizações governamentais, não governamentais e multilaterais. Sua missão é estimular ações relacionadas ao desenvolvimento sustentável, que promovam a equidade de Gênero e a sustentabilidade. \r\n\r\n','Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher','','','Site, Facebook, WhatsApp, Boletins eletronicos, artigos de Conselheiras para a midia em geral.','',NULL,NULL,1411,NULL,'501-1000','','',NULL,'2017-03-01',NULL),(2191,'26.207.442/0001-05','ambas','Escola de Você ','EDV ','(11) 3089-0740','contato@escoladevoce.com.br','negocio_social','2014','21-50','sim','Promove o empoderamento feminino por meio do autoconhecimento. Com metodologia própria, a Escola de Você oferece cursos em vídeos online e gratuitos. As aulas, com linguagem fácil e acessível, entregam, além das habilidades técnicas específicas de cada tema, as competências sócio-emocionais necessárias para que cada mulher possa se conhecer, se entender e superar os estereótipos culturais que a limitam.','Mulheres','','','A Escola de Você promove ações semanais em sua fan page no Facebook com lives de aproximadamente 30 minutos de duração sobre temas pertinentes ao universo do empoderamento feminino. Os lives reforçam ','Reconhecimento de Inovação Pedagógica da Academy of Management do Canadá (2015) ',NULL,NULL,1711,NULL,'1000000+','','',NULL,'2017-03-02',NULL),(2201,'','ambas','hbfhbhjfbghf','fbhjfbhj','(88) 8888-8888','karinamachado@msn.com','coletivo','1902','51-100','nao','gjfjgjgjhjghfjghjfhgj','Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher','','','','',NULL,NULL,1721,NULL,'1001-2500','Não tenho orçamento','',NULL,'2017-03-02',NULL),(2211,'','ambas','hghhghgh','hfhgfhghf','','karinamachado@msn.com','cooperativa','1910','11-20','nao','hfghjhghfghgfh','Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher','','','','',NULL,NULL,1731,NULL,'501-1000','Não tenho orçamento','',NULL,'2017-03-03',NULL),(2221,'','ambas','fhgfhhfghfdg','','(77) 7777-7777','karinamachado@msn.com','coletivo','1903','21-50','nao','hfhfhgfhgjhgh','Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher','','','','',NULL,NULL,1741,NULL,'251-500','Não tenho orçamento','',NULL,'2017-03-03',NULL),(2231,'','ambas','Ibeac Teste','IbeacT','(11) 1111-1111','ibeac@teste.com','ong_sociedade_civil','1901','6-10','sim','Um pouco de tudo. De tudo um pouco. ','Movimentos, coletivos, redes, fóruns','','Jovens e mulheres com autonomia econômica e cultural. ','','Super Bel recebeu!',NULL,NULL,1761,NULL,'1000000+','','',NULL,'2017-03-03',NULL),(2241,NULL,'ambas','escarola','alface','(11) 2236-1731','elenice.tamashiro@gmail.com','coletivo','2016','1-5','nao','lkfja;fja;lfjalfjaljfl;ajf;laskjfajf;laf;afa;fjdafa;sdfa','Adolescentes e jovens','                   ','','',NULL,'','projeto',1771,'','até 50','Não tenho orçamento','',NULL,'2017-03-03',NULL),(2251,NULL,'rural','asfafafafa','afafafaad','(11) 7654-3234','elenice@vgh.co','academica','2010','1-5','sim','aljdf;aljf;afjal;jfafa','Organizações Sociais','                   ','','',NULL,'','projeto',1781,'','até 50','','',NULL,'2017-03-03',NULL),(2261,'','ambas','wefwe','','','testedois@teste.com','grupos_produtivos','1916','21-50','nao','efqef','Organizações Sociais','','','','',NULL,NULL,1791,NULL,'251-500','Não tenho orçamento','','','2017-03-03','2017-03-03'),(2271,'','ambas','rthrth','','','teste@gmail.com','movimento','1914','21-50','nao','rgrh','Organizações Sociais','','','','',NULL,NULL,1801,NULL,'251-500','Não tenho orçamento','',NULL,'2017-03-03',NULL);
/*!40000 ALTER TABLE `organizacoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `origem_recursos`
--

DROP TABLE IF EXISTS `origem_recursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `origem_recursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(300) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizacao_id` (`organizacao_id`),
  CONSTRAINT `origem_recursos_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10161 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `origem_recursos`
--

LOCK TABLES `origem_recursos` WRITE;
/*!40000 ALTER TABLE `origem_recursos` DISABLE KEYS */;
/*!40000 ALTER TABLE `origem_recursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `politicas_publicas`
--

DROP TABLE IF EXISTS `politicas_publicas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `politicas_publicas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(150) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_idx` (`organizacao_id`),
  CONSTRAINT `id` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2281 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `politicas_publicas`
--

LOCK TABLES `politicas_publicas` WRITE;
/*!40000 ALTER TABLE `politicas_publicas` DISABLE KEYS */;
/*!40000 ALTER TABLE `politicas_publicas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `redes_sociais`
--

DROP TABLE IF EXISTS `redes_sociais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `redes_sociais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(500) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizacao_id` (`organizacao_id`),
  CONSTRAINT `redes_sociais_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15841 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `redes_sociais`
--

LOCK TABLES `redes_sociais` WRITE;
/*!40000 ALTER TABLE `redes_sociais` DISABLE KEYS */;
/*!40000 ALTER TABLE `redes_sociais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `relacionadas`
--

DROP TABLE IF EXISTS `relacionadas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `relacionadas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizacao_id` (`organizacao_id`),
  CONSTRAINT `relacionadas_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8161 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relacionadas`
--

LOCK TABLES `relacionadas` WRITE;
/*!40000 ALTER TABLE `relacionadas` DISABLE KEYS */;
/*!40000 ALTER TABLE `relacionadas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subtemas`
--

DROP TABLE IF EXISTS `subtemas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subtemas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subtema` varchar(150) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_idx` (`organizacao_id`),
  KEY `id_id_sub` (`organizacao_id`),
  CONSTRAINT `id_id_sub` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7251 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subtemas`
--

LOCK TABLES `subtemas` WRITE;
/*!40000 ALTER TABLE `subtemas` DISABLE KEYS */;
/*!40000 ALTER TABLE `subtemas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telefones`
--

DROP TABLE IF EXISTS `telefones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telefones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(45) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizacao_id` (`organizacao_id`),
  CONSTRAINT `telefones_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefones`
--

LOCK TABLES `telefones` WRITE;
/*!40000 ALTER TABLE `telefones` DISABLE KEYS */;
/*!40000 ALTER TABLE `telefones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temas`
--

DROP TABLE IF EXISTS `temas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tema` varchar(150) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  `regiao` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_id_tema` (`organizacao_id`),
  CONSTRAINT `id_id_tema` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8311 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temas`
--

LOCK TABLES `temas` WRITE;
/*!40000 ALTER TABLE `temas` DISABLE KEYS */;
/*!40000 ALTER TABLE `temas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  `carta_principios` tinyint(1) NOT NULL,
  `politica_privacidade` tinyint(1) NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=1811 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (371,NULL,'andreza.lba@gmail.com',1,1,1,'pajucara','0000-00-00 00:00:00','0000-00-00 00:00:00'),(381,NULL,'karinamachado@msn.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(391,NULL,'andreza_leite@hotmail.com',2,1,1,'pajucara','0000-00-00 00:00:00','0000-00-00 00:00:00'),(401,NULL,'iniciativatestekarina@teste.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(411,NULL,'willany_lp@hotmail.com',1,1,1,'1234','0000-00-00 00:00:00','0000-00-00 00:00:00'),(421,NULL,'vanessa@ponteaponte.com.br',1,1,1,'123mudar','0000-00-00 00:00:00','0000-00-00 00:00:00'),(431,NULL,'machadokarina@gmail.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(441,NULL,'willanylp@gmail.com',2,1,1,'1234','0000-00-00 00:00:00','0000-00-00 00:00:00'),(451,NULL,'recife@womenwhocode.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(461,NULL,'karinaorg@org.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(471,NULL,'karina@karina.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(481,NULL,'rafael.botelho@essilor.com.br',1,1,1,'essilor1','0000-00-00 00:00:00','0000-00-00 00:00:00'),(491,NULL,'mariana@raizesds.com.br',1,1,1,'2017$ucessoraizes','0000-00-00 00:00:00','0000-00-00 00:00:00'),(501,NULL,'cinthiagaban@gmail.com',1,1,1,'cin123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(511,NULL,'testeandreza@teste.com',1,1,1,'teste','0000-00-00 00:00:00','0000-00-00 00:00:00'),(521,NULL,'testeandreza2@teste.com',1,1,1,'teste','0000-00-00 00:00:00','0000-00-00 00:00:00'),(531,NULL,'pontodeculturaamina@hotmail.com',1,1,1,'25256476','0000-00-00 00:00:00','0000-00-00 00:00:00'),(541,NULL,'luciaoliveiracabral@gmail.com',1,1,1,'josejosefa','0000-00-00 00:00:00','0000-00-00 00:00:00'),(551,NULL,'contato@redepostinhodesaude.org.br',1,1,1,'redepostinho','0000-00-00 00:00:00','0000-00-00 00:00:00'),(561,NULL,'gabrielecbg@gmail.com',1,1,1,'030586','0000-00-00 00:00:00','0000-00-00 00:00:00'),(571,NULL,'deniseddora@gmail.com',1,1,1,'themis2017','0000-00-00 00:00:00','0000-00-00 00:00:00'),(581,NULL,'institucional@promundo.org.br',1,1,1,'promundo2016','0000-00-00 00:00:00','0000-00-00 00:00:00'),(591,NULL,'veridianadasilvameloxxi@gmail.com',1,1,1,'123456','0000-00-00 00:00:00','0000-00-00 00:00:00'),(601,NULL,'assorem@gmail.com',1,1,1,'autonomia17','0000-00-00 00:00:00','0000-00-00 00:00:00'),(611,NULL,'machadokarina4@gmail.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(621,NULL,'machadokarina5@gmail.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(631,NULL,'machadokarina6@gmail.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(641,NULL,'machadokarina7@gmail.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(651,NULL,'machadokarina8@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(661,NULL,'ceci@institutomariadapenha.org.br',1,1,1,'imp11340','0000-00-00 00:00:00','0000-00-00 00:00:00'),(671,NULL,'mapamulheres@ponteaponte.com.br',1,1,1,'empoderamento','0000-00-00 00:00:00','0000-00-00 00:00:00'),(681,NULL,'isabela.isis.alves@gmail.com',2,1,1,'elias','0000-00-00 00:00:00','0000-00-00 00:00:00'),(691,NULL,'alan@ponteaponte.com',2,1,1,'AlanpAp2016','0000-00-00 00:00:00','0000-00-00 00:00:00'),(701,NULL,'mmnepa.escritoriocentral@gmail.com',1,1,1,'capanema','0000-00-00 00:00:00','0000-00-00 00:00:00'),(711,NULL,'karinainiciativa@gmail.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(721,NULL,'josilene1126@gmail.com',1,1,1,'123456','0000-00-00 00:00:00','0000-00-00 00:00:00'),(723,NULL,'iniciativafirefox@gmail.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(731,NULL,'iniciativachrome@gmail.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(741,NULL,'iniciativaedge@hotmail.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(751,NULL,'iniciativa2@gmail.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(761,NULL,'edgeorganizacao@hotmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(771,NULL,'chromeorg@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(781,NULL,'organizacaochrome2@gamil.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(791,NULL,'fernanda.quintas@afesu.org.br',1,1,1,'afesu123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(801,NULL,'rita.mmnepa@hotmail.com',1,1,1,'familia123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(811,NULL,'redemulheresprodutorasdopajeu@gmail.com',1,1,1,'mulheres','0000-00-00 00:00:00','0000-00-00 00:00:00'),(821,NULL,'isabela.alves.texeira@gmail.com',1,1,1,'1234','0000-00-00 00:00:00','0000-00-00 00:00:00'),(831,NULL,'elizaugustonobre@gmail.com',1,1,1,'mulheres','0000-00-00 00:00:00','0000-00-00 00:00:00'),(841,NULL,'teste@teste.com',1,1,1,'1234','0000-00-00 00:00:00','0000-00-00 00:00:00'),(851,NULL,'safariorg@gmail.com',1,1,1,'123456','0000-00-00 00:00:00','0000-00-00 00:00:00'),(861,NULL,'firefoxorg@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(871,NULL,'fernandodeisis@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(881,NULL,'organizacao@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(891,NULL,'instituto.omolara@gmail.com',1,1,1,'ELIANA1961','0000-00-00 00:00:00','0000-00-00 00:00:00'),(901,NULL,'alan.ges.amb@gmail.com',1,1,1,'deni3364','0000-00-00 00:00:00','0000-00-00 00:00:00'),(911,NULL,'alan.ges.amb@gmail.com.br',2,1,1,'deni3364','0000-00-00 00:00:00','0000-00-00 00:00:00'),(921,NULL,'iranasci@gmail.com',1,1,1,'t3st@ndo','0000-00-00 00:00:00','0000-00-00 00:00:00'),(931,NULL,'elenicett@letitblossom.com',1,1,1,'Letie794@#$','0000-00-00 00:00:00','0000-00-00 00:00:00'),(941,NULL,'elenicett@gmail.com',2,1,1,'Letie722@#','0000-00-00 00:00:00','0000-00-00 00:00:00'),(951,NULL,'elenicett@letitblossom',1,1,1,'Letie118@#$','0000-00-00 00:00:00','0000-00-00 00:00:00'),(961,NULL,'luciana@cunhanfeminista.org.br',1,1,1,'luzmenina','0000-00-00 00:00:00','0000-00-00 00:00:00'),(971,NULL,'alicejtc@gmail.com',1,1,1,'licaecossistemamulheres','0000-00-00 00:00:00','0000-00-00 00:00:00'),(981,NULL,'iniciativa@gmail.com',2,1,1,'1234','0000-00-00 00:00:00','0000-00-00 00:00:00'),(991,NULL,'gisant99@gmail.com',2,1,1,'gigi0969','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1001,NULL,'karinaorg@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1011,NULL,'karinaini@gmail.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1021,NULL,'belinha_isis@hotmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1031,NULL,'iniciativa@hotmail.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1041,NULL,'mulheresdomaranhao@gmail.com',1,1,1,'bandequeiras2017','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1051,NULL,'testeorg@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1061,NULL,'chromeiniciativa@gmail.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1071,NULL,'teste2org@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1081,NULL,'teste10org@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1091,NULL,'teste20@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1101,NULL,'afonsopacifer@live.com',1,1,1,'raindance','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1111,NULL,'teste21org@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1121,NULL,'teste22org@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1131,NULL,'teste23@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1141,NULL,'teste21ini@gmail.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1151,NULL,'testeorg@andreza.com',1,1,1,'pajucara','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1161,NULL,'testeorg2@andreza.com',1,1,1,'pajucara','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1171,NULL,'teste23org@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1181,NULL,'aaaaaaaaaaaa@bbbbbbb.com',1,1,1,'11111','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1191,NULL,'amanda.acreditar@gmail.com',2,1,1,'acreditar','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1201,NULL,'aa@bb.com',2,1,1,'12345','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1211,NULL,'cc@dd.com',2,1,1,'12345','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1221,NULL,'camila@ponteaponte.com.br',1,1,1,'s','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1231,NULL,'ff@gg.com',1,1,1,'12345','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1241,NULL,'camilaaya@yahoo.com',2,1,1,'c','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1251,NULL,'akmkmkmo@ff.com',1,1,1,'deni','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1261,NULL,'testeini@andreza.com',2,1,1,'pajucara','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1271,NULL,'teste24@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1281,NULL,'diana@ponteaponte.com.br',1,1,1,'mulherespap','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1291,NULL,'elenice@together.co',1,1,1,'elenice','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1301,NULL,'teste23ini@gmail.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1311,NULL,'alan@teste.com',1,1,1,'12345','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1321,NULL,'teste25org@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1331,NULL,'testeorg3@gmail.com',1,1,1,'pajucara','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1341,NULL,'testeorg3@andreza.com',1,1,1,'pajucara','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1351,NULL,'ibeacdh@uol.com.br',2,1,1,'ibdh2017','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1361,NULL,'alan1@teste.com',2,1,1,'12345','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1371,NULL,'karinamachado@msn.co',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1381,NULL,'teste23org@gmailcom',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1391,NULL,'ee@ff.com',1,1,1,'12345','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1401,NULL,'alan2@teste.com',1,1,1,'12345','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1411,NULL,'inovais',1,1,1,'Jul15@2015','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1421,NULL,'das@hotmail.com',1,1,1,'123456','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1431,NULL,'juca@hotmail.com',2,1,1,'123456','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1441,NULL,'jojoca',1,1,1,'123456','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1451,NULL,'daanielvb@gmail.com',2,1,1,'picles1312','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1461,NULL,'mizael.egito@hotmail.com',1,1,1,'1234567','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1471,NULL,'marcio.hsdl@gmail.com',2,1,1,'s6g4sdfg5','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1481,NULL,'anderson.araujo.08@gmail.com',2,1,1,'evinho11','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1491,NULL,'marcela.domingues@gmail.com',1,1,1,'147852','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1501,NULL,'thiago123789@gmail.com',1,1,1,'thiago.123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1511,NULL,'juliana.lia@gmail.com',1,1,1,'juliana2017','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1521,NULL,'anaclaudia.rede@gmail.com',1,1,1,'tamandua','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1531,NULL,'dominguesmarcela@live.com',1,1,1,'147852','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1541,NULL,'jeanmacena@gmail.com',1,1,1,'bro160292','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1551,NULL,'yurinascimentofarias@gmail.com',2,1,1,'1','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1561,NULL,'erica@consuladodamulher.org.br',1,1,1,'consul@do','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1571,NULL,'willteste@gmail.com',1,1,1,'1234','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1581,NULL,'teste26@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1591,NULL,'teste27org@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1601,NULL,'teste28org@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1611,NULL,'teste29@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1621,NULL,'teste30@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1631,NULL,'teste30org@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1641,NULL,'teste32org@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1651,NULL,'2maikryuge@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1661,NULL,'teste33@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1671,NULL,'teste32@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1681,NULL,'teste33org@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1691,NULL,'eeeryuge@yahoo.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1701,NULL,'branco@teste.com',1,1,1,'1234','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1711,NULL,'guta.nascimento@escoladevoce.com.br',1,1,1,'driveedv','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1721,NULL,'1ryuge@yahoo.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1731,NULL,'3maikryuge@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1741,NULL,'ryuge@yahoo.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1751,NULL,'karina2org@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1761,NULL,'ibeac2017',1,1,1,'testando','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1771,NULL,'elenice.tamashiro@gmail.com',2,1,1,'Letie794@#$','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1781,NULL,'elenice@vgh.co',2,1,1,'elenice','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1791,NULL,'testedois@teste.com',1,1,1,'1234','0000-00-00 00:00:00','0000-00-00 00:00:00'),(1801,NULL,'teste',1,1,1,'1234','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'ecossistema'
--

--
-- Dumping routines for database 'ecossistema'
--
/*!50003 DROP PROCEDURE IF EXISTS `apagando_organizacao` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`b2e65ea0e96181`@`%` PROCEDURE `apagando_organizacao`(in organizacao_id int)
BEGIN
	delete from atuacao_direta where organizacao_id = organizacao_id;
    delete from contatos where organizacao_id = organizacao_id;
    delete from empoderamento where organizacao_id = organizacao_id;
    delete from enderecos where organizacao_id = organizacao_id;
    delete from funcoes where organizacao_id = organizacao_id;
    delete from indicacoes where organizacao_id = organizacao_id;
    delete from orcamentos where organizacao_id = organizacao_id;
    delete from origem_recursos where organizacao_id = organizacao_id;
    delete from politicas_publicas where organizacao_id = organizacao_id;
    delete from redes_sociais where organizacao_id = organizacao_id;
    delete from relacionadas where organizacao_id = organizacao_id;
    delete from subtemas where organizacao_id = organizacao_id;
    delete from telefones where organizacao_id = organizacao_id;
    delete from temas where organizacao_id = organizacao_id;
    delete from organizacoes where id = organizacao_id;
    commit;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-05 12:33:06
