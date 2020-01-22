-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Nov-2019 às 21:26
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
-- Estrutura da tabela `chamado`
--

CREATE TABLE `chamado` (
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

--
-- Extraindo dados da tabela `chamado`
--

INSERT INTO `chamado` (`chamado_id`, `chamado_id_cliente`, `chamado_atividade`, `chamado_duracao_hora`, `chamado_assunto`, `chamado_data`, `chamado_hora`, `chamado_duracao_minuto`, `chamado_atendente_rf`, `chamado_atendente_cliente`, `chamado_telefone`, `chamado_email`, `chamado_obs`) VALUES
(100, 1, 'teste', '123123', 'teste', '1', '1231', '123123', 'tsetqe', 'teste', 123123123, 'tsete', 'eretqe'),
(101, 0, 'adasdasda', 'teste', 'teste', 'teste', 'avteste', 'teste', 'teste', 'teste', 0, 'teste@teste', 'teste');

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

--
-- Extraindo dados da tabela `chamado_old`
--

INSERT INTO `chamado_old` (`chamado_id`, `chamado_id_cliente`, `chamado_atividade`, `chamado_duracao_hora`, `chamado_assunto`, `chamado_data`, `chamado_hora`, `chamado_duracao_minuto`, `chamado_atendente_rf`, `chamado_atendente_cliente`, `chamado_telefone`, `chamado_email`, `chamado_obs`) VALUES
(54, 12, 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 0, 'teste', 'teste'),
(55, 12, 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 0, 'teste', 'teste'),
(56, 12, 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 0, 'teste', 'teste'),
(97, 92, 'qwqweqweqwe', 'qweqweqweq', 'qeqeqwe', 'ewewewe', 'wwew', 'weqwewew', 'wqwqe', 'qwqwq', 2147483647, 'wewee@qawqweqwe', 'qweqweqwe'),
(98, 56, 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 0, 'teste@teste', 'teste'),
(99, 12, '12312313123', '134124141', 'teste', '143123', '1231231', '12431212', 'teste', 'teste', 0, 'teste@!teste', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cliente_id` int(11) NOT NULL,
  `cliente_contato_id` int(11) NOT NULL,
  `cod_cliente` int(10) NOT NULL,
  `cliente_nome` varchar(50) NOT NULL,
  `cliente_endereco` varchar(50) NOT NULL,
  `cliente_bairro` varchar(50) NOT NULL,
  `cliente_cidade` varchar(50) NOT NULL,
  `cliente_estado` varchar(50) NOT NULL,
  `cliente_pais` varchar(50) DEFAULT NULL,
  `cliente_cep` varchar(50) NOT NULL,
  `cliente_cnpj_cpf` varchar(50) DEFAULT NULL,
  `cliente_inscricao_estadual` varchar(50) NOT NULL,
  `cliente_categoria` varchar(50) DEFAULT NULL,
  `cliente_email` varchar(50) NOT NULL,
  `cliente_telefone` varchar(50) NOT NULL,
  `cliente_regiao` varchar(50) NOT NULL,
  `cliente_obs` varchar(50) NOT NULL,
  `cliente_contato_nome` varchar(50) DEFAULT NULL,
  `cliente_contato_telefone` varchar(50) DEFAULT NULL,
  `cliente_img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cliente_id`, `cliente_contato_id`, `cod_cliente`, `cliente_nome`, `cliente_endereco`, `cliente_bairro`, `cliente_cidade`, `cliente_estado`, `cliente_pais`, `cliente_cep`, `cliente_cnpj_cpf`, `cliente_inscricao_estadual`, `cliente_categoria`, `cliente_email`, `cliente_telefone`, `cliente_regiao`, `cliente_obs`, `cliente_contato_nome`, `cliente_contato_telefone`, `cliente_img`) VALUES
(0, 0, 4, 'Johann Kaltner', 'Estrada do Gabinal 313', 'Freguesia ', 'Rio de Janeiro', 'Rio de Janeiro', 'Brasil', '12312-312', '123.123.123-12', '123.123.123.123', 'Desenvolvedor', 'jkdoliveira@gmail.com', '(21) 98254-3102', '', '', NULL, NULL, NULL),
(1, 0, 0, 'Aisllan Oliveira', 'Est. Boiuna', 'Taquara', 'Rio de Janeiro', 'Rio de Janeiro', 'Brasil', '22723-018', '116.088.497-83', '', 'Jurídico', 'aisllan@ricardofurtado.com.br', '(21) 99776-3124', '', '', NULL, '', NULL),
(2, 0, 1, 'IESA - INSTITUTO DE EDUCACIONAL SANTO ANTONIO ', 'RUA DR. BARROS JÚNIOR, 1.124', 'CENTRO', 'NOVA IGUAÇU', '', 'BRASIL', '26215-071', '308.288.180-00', '111.111.100.011', '7OO- ASS. EDUC/JURÍDICO', 'ircleonice@gmail.com', '(21) 92765-9652', '', '', NULL, '(21) 99990-0012', NULL);

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

--
-- Extraindo dados da tabela `cliente_old`
--

INSERT INTO `cliente_old` (`cliente_id`, `cliente_nome`, `cliente_endereco`, `cliente_bairro`, `cliente_cidade`, `cliente_estado`, `cliente_pais`, `cliente_cep`, `cliente_cnpj_cpf`, `cliente_inscricao_estadual`, `cliente_categoria`, `cliente_email`, `cliente_telefone`, `cliente_regiao`, `cliente_obs`, `cliente_contato_nome`, `cliente_contato_telefone`) VALUES
(12, 'Trycia', '5185 Gregoria Roads', 'Frami Islands', 'Karinefort', 'Colorado', 'Anguilla', '88410', '684', '60707', 'Weimann and Sons', '', '(147)722-1438x3313', 'shire', 'Universal actuating capability', NULL, NULL),
(35, 'Devin', '923 Elgar Place', 'Acker', 'Brusque', '5100177674166271', 'Brazil', '88350-000', '646-09-4525', '4917279462834072', 'Health', 'kteaz0@examiner.com', '986-582-6005', '', 'Ergonomic heuristic hierarchy', 'Kenny', '934-160-0299'),
(36, 'Walden', '753 Gerald Alley', 'Hallows', 'Shah Alam', '6333361208148816318', 'Malaysia', '40726', '843-82-9818', '5602243209652574', 'Garden', 'fsambrok1@rakuten.co.jp', '222-725-5598', '', 'Assimilated tangible workforce', 'Fonz', '460-253-3346'),
(37, 'Chilton', '82 Oak Valley Lane', 'Delaware', 'Valcheta', '36183444749636', 'Argentina', '8536', '789-25-7192', '5492177533120739', 'Home', 'creddington4@utexas.edu', '749-538-6424', '', 'Open-source executive extranet', 'Cchaddie', '977-224-7682'),
(38, 'Hilary', '47260 Menomonie Point', 'Meadow Vale', 'Phoenix', '5545586387726044', 'United States', '85010', '182-01-9282', '3538895906366248', 'Sports', 'lwedderburn5@cnn.com', '602-468-9100', '', 'Profit-focused encompassing functionalities', 'Luce', '748-656-9976'),
(39, 'Ilyssa', '75 Blue Bill Park Place', 'Transport', 'Cabrela', '67061888343219823', 'Portugal', '7050-405', '150-33-0694', '490585139172529184', 'Clothing', 'equadri9@behance.net', '797-208-8893', '', 'Robust eco-centric alliance', 'Emery', '315-149-3768'),
(40, 'Jemmie', '63 Kennedy Hill', 'Superior', 'Buritis', '5602251075880197872', 'Brazil', '78967-800', '693-51-7752', '5602231119652859', 'Music', 'kcarlettid@bbc.co.uk', '584-295-4370', '', 'Extended static artificial intelligence', 'Kermy', '295-394-1977'),
(41, 'Leanora', '22 Kingsford Parkway', 'Bultman', 'Eskilstuna', '3564178211627183', 'Sweden', '633 47', '664-17-0649', '670674695040655252', 'Industrial', 'bedserf@people.com.cn', '958-625-0916', '', 'Polarised contextually-based neural-net', 'Bartolomeo', '719-711-4737'),
(42, 'Iris', '658 Bluestem Way', 'Cardinal', 'Marugame', '3567799298955747', 'Japan', '870-0122', '746-74-8655', '3575530295362433', 'Music', 'hwaszczykowskig@imageshack.us', '667-603-7368', '', 'Self-enabling multimedia functionalities', 'Herby', '652-799-3728'),
(43, 'Odelinda', '99 Wayridge Point', 'Loeprich', 'Paratunka', '3546835859199048', 'Russia', '659642', '461-61-9405', '337941601142879', 'Electronics', 'omarchingtonh@state.tx.us', '970-585-6497', '', 'Multi-tiered cohesive moderator', 'Onfre', '952-334-4546'),
(44, 'Ogden', '2379 Butterfield Court', 'Elmside', 'Bera', '5419657700737399', 'Bangladesh', '6680', '401-37-8839', '6390033679828224', 'Automotive', 'wmatzeln@amazon.co.uk', '374-518-9838', '', 'Decentralized solution-oriented product', 'Wiley', '214-808-9658'),
(45, 'Gardie', '91135 Brickson Park Alley', 'Hollow Ridge', 'Yamkino', '564182553313475710', 'Russia', '601231', '340-14-4924', '201684300767264', 'Computers', 'amcclureo@yellowbook.com', '589-826-0228', '', 'Reverse-engineered empowering standardization', 'Ahmad', '470-225-5092'),
(46, 'Mace', '3 Buena Vista Court', 'Judy', 'Vitoria-Gasteiz', '3587823641381488', 'Spain', '01005', '803-66-6315', '560224352750745125', 'Home', 'upaffettp@japanpost.jp', '310-980-6744', '', 'Diverse didactic portal', 'Ulises', '480-509-1115'),
(47, 'Larina', '09006 Cody Point', 'Nancy', 'La Plaine-Saint-Denis', '30434414188826', 'France', '93214 CEDEX', '401-20-6080', '3539598631586044', 'Home', 'ghuddlet@topsy.com', '867-323-3173', '', 'Reduced directional groupware', 'Garrick', '532-258-5891'),
(48, 'Etheline', '19 Caliangt Road', 'Eagan', 'Vila Fria', '5602215047158410', 'Portugal', '4935-804', '651-42-7769', '58934769473691110', 'Industrial', 'ghatzv@histats.com', '758-605-6174', '', 'Advanced dedicated extranet', 'Gunner', '656-264-0826'),
(49, 'Robbert', '735 Hoard Drive', 'Lerdahl', 'Vannes', '3574675042425545', 'France', '56902 CEDEX 9', '834-97-7857', '3558748114464245', 'Games', 'bscafew@kickstarter.com', '730-301-3369', '', 'Secured mobile archive', 'Brendis', '180-738-8314'),
(50, 'Crosby', '719 Sauthoff Circle', 'Pond', 'Richards Bay', '3537746426147876', 'South Africa', '3904', '245-95-8065', '3537563699858190', 'Shoes', 'bdesouzax@army.mil', '836-538-5857', '', 'Quality-focused bandwidth-monitored open system', 'Bondy', '139-145-8033'),
(51, 'Syd', '433 Pawling Terrace', 'Del Sol', 'Dzhiginka', '3547296581414768', 'Russia', '356830', '744-87-2451', '5007667269094072', 'Beauty', 'rstarsmore12@blogtalkradio.com', '854-425-8651', '', 'Open-source next generation monitoring', 'Raffaello', '997-342-1154'),
(52, 'Prudy', '499 Aberg Avenue', 'Badeau', 'Lefortovo', '5602233350072631', 'Russia', '461911', '774-75-6511', '675992258455015910', 'Kids', 'bsteabler14@timesonline.co.uk', '344-366-6147', '', 'Centralized asynchronous superstructure', 'Bartholomeo', '359-326-2584'),
(53, 'Nady', '50 Fallview Way', 'Merry', 'Kralupy nad Vltavou', '201588504787947', 'Czech Republic', '278 01', '242-80-6623', '372422718993401', 'Electronics', 'avalentino15@macromedia.com', '168-625-9348', '', 'Open-source client-driven emulation', 'Archibold', '163-256-9105'),
(54, 'Malcolm', '5 Golf Course Circle', 'Union', 'Lafayette', '201531538375123', 'United States', '70593', '626-82-3139', '3553105110861269', 'Music', 'lcanaan1c@telegraph.co.uk', '337-749-8505', '', 'Versatile asynchronous paradigm', 'Lemar', '621-801-6335'),
(55, 'Germayne', '531 Fieldstone Court', 'Brickson Park', 'Kun?ina', '5100142089655037', 'Czech Republic', '569 24', '215-60-0128', '6763828421874205', 'Music', 'cizzat1d@ted.com', '338-755-5128', '', 'Phased client-driven software', 'Conn', '424-872-1589'),
(56, 'Kristin', '73300 Ridgeway Place', 'Mccormick', '????????', '5020107772504551887', 'Macedonia', '1316', '491-88-9549', '5602219091997830', 'Baby', 'ckearford0@is.gd', '892-425-1197', '', 'Ameliorated systematic system engine', 'Cart', '795-336-4035'),
(57, 'Misha', '7665 Commercial Avenue', 'Stang', 'Daba', '3567730237078234', 'China', '6759443149529694379', '209-62-2416', '5547909904193480', 'Industrial', 'brendall0@nytimes.com', '452-928-2201', '', 'Future-proofed non-volatile infrastructure', 'Bartholomeus', '778-747-8374'),
(58, 'Starla', '7 Esch Lane', 'Jenna', 'Khorram?b?d', '67628758715381186', 'Iran', '5610253585159466', '525-11-0660', '3588593979088604', 'Jewelery', 'gcornelissen1@themeforest.net', '923-934-3459', '', 'Expanded mobile throughput', 'Gaelan', '745-369-0324'),
(59, 'Kelby', '3499 Fremont Avenue', 'Mayer', 'Tiên Lãng', '4508518143133163', 'Vietnam', '3588307915820511', '111-99-5688', '5002358615883211', 'Books', 'cblunt2@360.cn', '342-871-1572', '', 'Enterprise-wide intangible array', 'Costa', '340-841-8252'),
(60, 'Devland', '4345 Blaine Point', 'Packers', 'Quintela', '56100912172274547', 'Portugal', '633400815237026369', '207-05-0353', '5100175251435770', 'Jewelery', 'freasun3@hugedomains.com', '897-543-9095', '', 'Monitored composite initiative', 'Fonz', '312-152-8910'),
(61, 'Cherice', '11151 Sachtjen Pass', 'Fulton', 'Pinhão', '670923847456458536', 'Brazil', '5602248541486367', '334-23-6329', '201597560421044', 'Movies', 'ymcgarrity4@unesco.org', '159-804-4639', '', 'Assimilated attitude-oriented knowledge user', 'Yancy', '747-964-4130'),
(62, 'Micky', '59 Gulseth Center', 'Hooker', 'Gualeguay', '3531089392986043', 'Argentina', '3584504534783674', '883-57-1606', '3585511474963504', 'Toys', 'hstowell5@ow.ly', '806-311-4485', '', 'Re-engineered reciprocal customer loyalty', 'Heath', '634-814-2096'),
(63, 'Keri', '38 South Hill', 'Claremont', 'El Quetzal', '5010126938033222', 'Guatemala', '3563349374675704', '793-38-4797', '50206047935108488', 'Beauty', 'llenard6@histats.com', '571-109-1205', '', 'Organic exuding help-desk', 'Laurent', '875-927-9492'),
(64, 'Wade', '112 Fuller Plaza', 'Calypso', 'Ugep', '4175008043275340', 'Nigeria', '3587078324687681', '736-81-1631', '5018730636211322644', 'Toys', 'mmortlock7@taobao.com', '513-282-5177', '', 'Future-proofed local knowledge user', 'Matthew', '407-360-3409'),
(65, 'Oswell', '96069 Fuller Terrace', 'Delaware', 'Shuangchahe', '3570437722843677', 'China', '201895678462672', '893-64-7208', '67637315439430614', 'Baby', 'bgriston8@cdbaby.com', '559-633-0865', '', 'Implemented systemic definition', 'Buiron', '318-473-9178'),
(66, 'Wain', '76 Fairview Terrace', 'Moulton', 'Nässjö', '5100141712992205', 'Sweden', '3584505792403632', '740-51-7976', '5010128793692548', 'Beauty', 'eroan9@xing.com', '105-927-9312', '', 'Compatible interactive benchmark', 'Elsworth', '343-744-0620'),
(67, 'Talya', '870 Mosinee Alley', 'Arkansas', 'Zhoutou', '3564926753884897', 'China', '3570086263334420', '675-33-8613', '3568918678960858', 'Beauty', 'ibachelora@liveinternet.ru', '671-783-1976', '', 'Re-engineered leading edge internet solution', 'Ingra', '793-208-3552'),
(68, 'Rockie', '74 Buhler Drive', 'Dahle', 'Dinalongan', '374288355987776', 'Philippines', '4936578893912236818', '788-82-2633', '3533662073898816', 'Jewelery', 'gelandb@xing.com', '321-114-2998', '', 'Programmable systematic internet solution', 'Grant', '620-856-8902'),
(69, 'Brody', '07216 Northview Point', 'Pennsylvania', 'Arras', '201662854881236', 'France', '5545621049175882', '745-20-0484', '5641824408643366', 'Shoes', 'cjanssenc@eepurl.com', '569-185-8175', '', 'Realigned didactic hardware', 'Clerkclaude', '646-534-6918'),
(70, 'Chloette', '710 Garrison Center', 'Killdeer', 'Shreveport', '30293128448821', 'United States', '3584930423630009', '379-71-6505', '4508083635051597', 'Baby', 'amallyad@51.la', '318-349-1225', '', 'Quality-focused empowering instruction set', 'Aldus', '361-268-8659'),
(71, 'Sterne', '126 Canary Junction', 'Green', 'Gaohu', '201813681828581', 'China', '30368973595809', '279-61-3435', '6771493138705344234', 'Baby', 'mredsulle@baidu.com', '228-168-2464', '', 'Ameliorated homogeneous service-desk', 'Massimo', '240-811-5379'),
(72, 'Chancey', '7631 Claremont Alley', 'Esker', 'Cauayan', '30466638064649', 'Philippines', '3581760510108459', '195-28-7656', '3589251670626771', 'Jewelery', 'achaterf@pen.io', '820-734-3577', '', 'Compatible didactic pricing structure', 'Allistir', '551-173-5385'),
(73, 'Burnaby', '1 Vahlen Circle', 'New Castle', 'S?upno', '6377831917368953', 'Poland', '3551070964669154', '337-28-1380', '3570025992514456', 'Automotive', 'ddantesiag@arstechnica.com', '911-292-0456', '', 'Persevering zero administration local area network', 'Damien', '937-997-6319'),
(74, 'Orran', '4742 Hanson Lane', 'Sutteridge', 'Béboto', '6372270252946013', 'Chad', '3554962692734069', '846-46-2452', '3581846714752596', 'Music', 'gbarleeh@noaa.gov', '757-846-7092', '', 'Virtual didactic software', 'Gustave', '598-213-7464'),
(75, 'Miriam', '2904 Novick Alley', 'Paget', 'Khanino', '3553754179269342', 'Russia', '30296234341244', '568-52-7397', '3568729353631809', 'Health', 'wtrattoni@histats.com', '144-456-8576', '', 'Programmable needs-based conglomeration', 'Webster', '555-989-5393'),
(76, 'Aurie', '34 Sachtjen Lane', 'Summerview', 'Itápolis', '201455298035919', 'Brazil', '3530898407611342', '307-75-9025', '3544058927080957', 'Music', 'ddimitriouj@google.co.jp', '469-448-4867', '', 'Grass-roots clear-thinking array', 'Douglass', '188-856-7543'),
(77, 'Domini', '937 Delaware Park', 'Nobel', 'Zhongshan', '3539830280550785', 'China', '56022366674664678', '377-51-0932', '3566550170632990', 'Toys', 'peatesk@blog.com', '393-624-7196', '', 'Open-source directional solution', 'Parsifal', '653-880-8402'),
(78, 'Galvin', '748 Morningstar Pass', 'Boyd', 'Leicheng', '3580662571842524', 'China', '6706233380871161', '509-48-4392', '30331430149305', 'Beauty', 'ssaylorl@over-blog.com', '946-819-5067', '', 'Diverse secondary open architecture', 'Sollie', '770-652-2988'),
(79, 'Gasparo', '2631 Utah Pass', 'Pankratz', 'Gaotaizi', '3549077643569239', 'China', '201475517531001', '760-02-2800', '3575325022747729', 'Toys', 'msproulsm@rambler.ru', '272-878-6144', '', 'Optional asymmetric approach', 'Muffin', '763-330-9929'),
(80, 'Gasper', '43208 Merry Park', 'Ronald Regan', 'Eskifjörður', '5100148649064933', 'Iceland', '3574428837627028', '424-34-4978', '30200465931962', 'Baby', 'aiannittin@cbc.ca', '400-848-9051', '', 'Face to face disintermediate benchmark', 'Aldon', '418-849-8152'),
(81, 'Oran', '875 Corry Hill', 'Forster', 'Skolkovo', '4508843444452439', 'Russia', '3578505051141103', '252-90-9112', '5602236989097762', 'Toys', 'hjobbinso@netscape.com', '384-164-9343', '', 'Fully-configurable demand-driven array', 'Hermon', '780-494-9252'),
(82, 'Philippine', '66 Arkansas Street', 'Main', 'Briceni', '633435334250841083', 'Moldova', '4041598467306292', '446-43-9388', '4936555553952395', 'Health', 'ktomap@ycombinator.com', '504-194-4711', '', 'Seamless context-sensitive Graphical User Interfac', 'Keven', '780-689-3326'),
(83, 'Jaclyn', '8 Fuller Street', 'Harbort', 'Mlawat', '201524238954974', 'Indonesia', '3556259055720456', '126-01-8076', '3582472384878071', 'Grocery', 'crihanekq@twitter.com', '511-656-1088', '', 'Operative optimizing groupware', 'Chet', '582-231-9802'),
(84, 'Anne-corinne', '67 John Wall Park', 'Oriole', 'Lazaro Cardenas', '5010128588706586', 'Mexico', '3554306972865914', '160-97-2380', '6759297282749545274', 'Movies', 'abassanor@wikipedia.org', '909-891-2849', '', 'Function-based 24/7 architecture', 'Alasdair', '628-293-7936'),
(85, 'Felipe', '6956 Green Drive', 'Mallory', 'Washington', '3585796424630887', 'United States', '30193900897650', '645-22-8256', '30296703140176', 'Industrial', 'qaprahamians@blogspot.com', '202-996-4250', '', 'Enterprise-wide needs-based superstructure', 'Quill', '700-335-6969'),
(86, 'Paten', '84681 Debra Trail', 'Marquette', 'Tongshan', '675948411484765717', 'China', '347267094980346', '723-94-5701', '5010127648966529', 'Toys', 'cbigleyt@omniture.com', '523-215-4276', '', 'Re-engineered impactful database', 'Carny', '978-720-6966'),
(87, 'Wynnie', '5 Manley Junction', 'New Castle', 'Stoney Ground', '675943481616920378', 'Anguilla', '30019812599250', '141-96-8342', '5610248764004947', 'Grocery', 'battwateru@google.es', '829-693-7198', '', 'Pre-emptive bandwidth-monitored contingency', 'Benton', '347-728-0150'),
(88, 'Calv', '56802 Main Drive', 'Swallow', 'Kampungmasjid', '5007667695884765', 'Indonesia', '3572241400788693', '705-98-1959', '5007667225863099', 'Outdoors', 'smechanv@stanford.edu', '331-789-1840', '', 'Vision-oriented responsive website', 'Stanleigh', '282-596-3644'),
(89, 'Ninon', '4801 Jana Terrace', 'Ilene', 'Hoit Taria', '3551169406495390', 'China', '30331516321547', '729-14-7593', '6333078727795051162', 'Games', 'mwoolnoughw@si.edu', '882-266-4320', '', 'Ameliorated transitional data-warehouse', 'Milty', '844-151-2552'),
(90, 'Stephani', '42056 Buhler Road', 'Steensland', '?l Ma‘?dah', '5108757154620848', 'Yemen', '5602220301394024', '182-26-8663', '3560706308886116', 'Baby', 'dboothjarvisx@usnews.com', '988-148-7408', '', 'Optimized next generation model', 'Dugald', '387-894-6105'),
(91, 'Chloe', '9 Hauk Road', 'Village Green', 'Hässleholm', '6709750549791692591', 'Sweden', '3575847136759050', '480-88-0356', '3574720667980117', 'Kids', 'nsmoughtony@cbslocal.com', '553-879-1747', '', 'Pre-emptive high-level challenge', 'Noel', '163-476-2563'),
(92, 'Sherwood', '667 Gateway Alley', 'Old Gate', 'Luchegorsk', '5139277238878877', 'Russia', '3585006847988999', '335-75-9005', '3548088888862958', 'Health', 'grecordsz@naver.com', '503-930-0046', '', 'Reactive user-facing time-frame', 'Garry', '587-126-6536');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato_secundario`
--

CREATE TABLE `contato_secundario` (
  `contato_secundario_id` int(11) NOT NULL,
  `cliente_contato_id` int(11) NOT NULL,
  `contato_secundario_nome` varchar(200) NOT NULL,
  `contato_secundario_email` varchar(200) NOT NULL,
  `contato_secundario_telefone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato_secundario`
--

INSERT INTO `contato_secundario` (`contato_secundario_id`, `cliente_contato_id`, `contato_secundario_nome`, `contato_secundario_email`, `contato_secundario_telefone`) VALUES
(0, 0, 'teste', 'teste@teste', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `correcao_chamado`
--

CREATE TABLE `correcao_chamado` (
  `correcao_id` int(11) NOT NULL,
  `correcao_id_chamado` int(11) NOT NULL,
  `correcao_id_cliente` int(11) NOT NULL,
  `correcao_nome_cliente` int(11) NOT NULL,
  `correcao_data` int(11) NOT NULL,
  `correcao_operador` int(11) NOT NULL,
  `correcao_descricao` int(11) NOT NULL,
  `correcao_comentarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `usuario_nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario_nome`, `usuario_email`, `usuario_senha`, `usuario_setor`, `usuario_nivel`) VALUES
(5, 'Johann Kaltner', 'johann@rfcrm.com', '1234', '1234', 1),
(6, 'Aisllan', 'aisllan@rfcrm.com', '1234', 'Comercial', 1),
(8, 'Beth ', 'beth@rfcrm.com', '1234', 'Comercial', 1),
(9, 'convidado', 'convidado@rfcrm.com', '1234', 'Comercial', 1);

--
-- Índices para tabelas despejadas
--

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
-- Índices para tabela `correcao_chamado`
--
ALTER TABLE `correcao_chamado`
  ADD PRIMARY KEY (`correcao_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `chamado`
--
ALTER TABLE `chamado`
  MODIFY `chamado_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT de tabela `chamado_old`
--
ALTER TABLE `chamado_old`
  MODIFY `chamado_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `cliente_old`
--
ALTER TABLE `cliente_old`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT de tabela `correcao_chamado`
--
ALTER TABLE `correcao_chamado`
  MODIFY `correcao_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `contato_secundario`
--
ALTER TABLE `contato_secundario`
  ADD CONSTRAINT `contato_secundario_id_cliente` FOREIGN KEY (`cliente_contato_id`) REFERENCES `cliente` (`cliente_contato_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
