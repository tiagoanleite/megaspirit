-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jul 02, 2014 at 01:42 PM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `megaspirit`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` int(11) NOT NULL,
  `line1` varchar(140) NOT NULL,
  `line2` varchar(140) NOT NULL,
  `city` varchar(70) NOT NULL,
  `region` varchar(70) NOT NULL,
  `postal` varchar(30) NOT NULL,
  `country` varchar(50) NOT NULL,
  `type` smallint(6) NOT NULL,
  `nick` varchar(140) NOT NULL,
  `notes` text NOT NULL,
  `state` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `company`, `line1`, `line2`, `city`, `region`, `postal`, `country`, `type`, `nick`, `notes`, `state`) VALUES
(1, 3, 'Rua Pádua Correia, 166', '', 'Vila Nova de Gaia', 'Porto', '4400-238', 'Portugal', 0, '', '', 1),
(2, 3, 'Rua da Bélgica, 140-155', '', 'Vila Nova de Gaia', 'Porto', '4400-194', 'Portugal', 1, 'Externato', 'É bastante escondido, tenham atenção aos números de portas.', 1),
(3, 4, 'Rua da Carne Picada', '180 Apartamento 13', 'Porto', 'Porto', '4400-100', 'Portugal', 0, '', '', 1),
(4, 4, 'Rua das Cenas', '304', 'Braga', 'Braga', '4201-132', 'Portugal', 1, 'Secundária', 'Tocar à campaínha no portão verde, por favor.', 1),
(5, 3, 'qwefqwef', 'qwefqwef', 'qwefqwe', 'wefqwef', 'fqwefqwefq', 'Mongolia', 1, 'qwefqwefqwef', 'qwefqwef', 0),
(7, 3, 'sdfsdfg', 'sdfgsdfg', 'sdfgsdfg', 'sdfgsdfg', 'sdfgsdfg', 'Algeria', 1, 'sdfgsdfgsdfg', 'drthsg', 0),
(8, 4, 'Rua das Cenas', '304', 'Braga', 'Braga', '4201-132', 'Portugal', 1, 'Tocar à campaínha no portão verde, por favor.', 'Secundária', 0),
(9, 0, 'Rua da Bélgica, 140-155', '', 'Vila Nova de Gaia', 'Porto', '4400-194', 'Portugal', 1, 'É bastante escondido, tenham atenção aos números de portas', 'Externato', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `link` varchar(255) DEFAULT NULL,
  `alternative` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `link`, `alternative`, `active`) VALUES
(2, 'http://d-datatech.com', 'Douro Data Tecnologies', 1),
(16, 'http://www.brooklandsmuseum.com', 'brooklands', 1),
(14, 'http://thegeeksociety.org', 'TheGeekSociety', 1),
(17, 'http://colgaia.pt', 'Teste', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `state` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `state`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories_lang`
--

CREATE TABLE `categories_lang` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category` int(11) DEFAULT NULL,
  `language` varchar(2) DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `categories_lang`
--

INSERT INTO `categories_lang` (`id`, `category`, `language`, `title`) VALUES
(1, 1, 'pt', 'Porco'),
(2, 1, 'en', 'Pork'),
(3, 2, 'pt', 'Vaca'),
(4, 2, 'en', 'Cow'),
(5, 3, 'pt', 'Peru'),
(6, 3, 'en', 'Turkey'),
(7, 4, 'pt', 'x'),
(8, 4, 'en', 'x');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(140) NOT NULL,
  `nif` int(9) NOT NULL,
  `username` varchar(140) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rep` varchar(140) NOT NULL,
  `email` varchar(140) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `state` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `company`, `nif`, `username`, `password`, `rep`, `email`, `phone`, `state`) VALUES
(3, 'Colégio de Gaia', 987654321, 'colgaia', '63a9f0ea7bb98050796b649e85481845', 'Dr. Joaquim Queirós', 'queiros@colgaia.pt', '00351912345678', 1),
(4, 'Carnes & Companhia, Lda.', 481956374, 'carnes', '63a9f0ea7bb98050796b649e85481845', 'Eng. Tiago Leite', 'leite@carnes.pt', '00351915493394', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `date`) VALUES
(1, '2014-03-19'),
(2, '2014-03-21'),
(3, '2014-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `news_lang`
--

CREATE TABLE `news_lang` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `news` int(11) DEFAULT NULL,
  `language` varchar(2) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `news_lang`
--

INSERT INTO `news_lang` (`id`, `news`, `language`, `title`, `text`) VALUES
(1, 1, 'en', 'Food testing firm announces acquisition', '<p>Yorkshire-based Genon undertook more than 25% of all the authentication tests carried out during the 2013 horsemeat scandal. Its services are widely used across the UK’s food manufacturing, processing and retail industries.<br><br>\nAccording to Synergy, it has also taken the lead in the application of polymerase chain reaction (PCR) testing, used for proving the DNA content of foods. Having developed its own PCR test techniques, the firm was in a position to respond immediately during the alarm that followed the discovery of horsemeat in UK supermarkets last year.<br><br>\nSynergy, a global provider of outsource clinical services, said it intended to invest in further developing Genon’s test technologies in the UK and extend its highly specialised services.<br><br>Angela Bromley, general manager, Genon, said: “Becoming part of Synergy Health means we will have the investment to create a global presence. We aim to keep, and further develop, our specialist focus for UK customers, but also take our services to much wider markets, including the establishment of laboratory facilities in mainland Europe. The overseas market has plenty of scope for growth and we are very excited about the possibilities.”<br><br>\nGenon was formed in 2006 by Manchester University molecular biologist and geneticist, Dr Mike Bromley, and microbiologist Dr Mike Birch.</p>'),
(2, 1, 'pt', 'Empresa de testes de alimentos anuncia aquisição', '<p>Genon baseado em Yorkshire empreendeu mais de 25% de todos os testes de autenticação realizadas durante o escândalo de cavalo 2013. Seus serviços são amplamente utilizados nas indústrias de fabricação de alimentos , processamento e varejo do Reino Unido.<br><br>\nDe acordo com a Synergy , ele também assumiu a liderança na aplicação de reação em cadeia da polimerase ( PCR) , usada para provar o conteúdo de DNA dos alimentos. Tendo desenvolvido suas próprias técnicas de teste de PCR , a empresa estava em posição de responder imediatamente durante o alarme que se seguiu à descoberta de carne de cavalo em supermercados do Reino Unido no ano passado.<br><br>\nSynergy , um fornecedor global de serviços clínicos de terceirização , disse que a intenção de investir no desenvolvimento de tecnologias de teste de Genon no Reino Unido e estender seus serviços altamente especializados .<br><br>\nAngela Bromley , gerente geral da Genon , disse: "Fazer parte da Synergy Saúde significa que teremos o investimento para criar uma presença global. Nosso objetivo é manter e desenvolver ainda mais , o nosso foco especializado para clientes do Reino Unido , mas também levar nossos serviços a mercados muito mais amplos , incluindo o estabelecimento de instalações de laboratório na Europa continental. O mercado externo tem muito espaço para crescimento e estamos muito animado com as possibilidades . "<br><br>\nGenon foi formada em 2006 pelo biólogo molecular da Universidade de Manchester e geneticista, Dr. Mike Bromley, e microbiologista Dr. Mike Birch.</p>'),
(3, 2, 'en', 'MTJ on hand to greet you at Foodex', '<p>Foodex and Food and Drink Expo are the UK’s premier trade events for the food and drink processing, packaging and logistics industries, running from 24-26 March at the NEC in Birmingham. <br><br>Come and say hello and put your name in the hat for some great prizes - a magnum of champagne for MTJ and an iPad Mini for GMN.<br><br>Follow us @MTJ_tweet and @globalmeatnews for regular updates, and keep checking meatinfo.co.uk and globalmeatnews.com for the latest Foodex news.<br><br>Group editor Ed Bedington will be compering a butchery masterclass with master butcher John Mettrick on the centre stage at 10.15am on Monday 24 March. On the same day, he will also be involved in a horsemeat debate on centre stage at 2.15pm.<br><br>We look forward to seeing you there. <br><br></p>'),
(4, 2, 'pt', 'TJ à disposição para cumprimentá-lo na Foodex', '<p>Foodex e Food and Drink Expo são eventos comerciais premier do Reino Unido para as indústrias de alimentos e bebidas de processamento, embalagem e logística, executando 24-26 de Março, no NEC em Birmingham. <br><br>\r\nVenha e dizer Olá e colocar seu nome no chapéu para alguns grandes prêmios - uma magnum de champanhe para MTJ e um Mini iPad para GMN. <br><br>\r\nSiga-nos @ MTJ_tweet e @ globalmeatnews para atualizações regulares e manter a verificação meatinfo.co.uk e globalmeatnews.com para as últimas notícias Foodex. \r\n<br><br>Editor Grupo Ed Bedington será compering uma masterclass carnificina com o mestre açougueiro John Mettrick no centro do palco em 10:15 na segunda-feira 24 de março. No mesmo dia, ele também estará envolvido em um debate de cavalo no centro do palco em 2:15.</p>'),
(5, 3, 'en', 'Funding approved for Isle of Man Meats factory', '<p>A £1.6 million investment package for Isle of Man Meats’ ailing factory has been approved by the parliament of the Isle of Man, Tynwald.<br><br>The Department of Environment, Food and Agriculture (DEFA) for the Isle of Man, which works closely with the meat firm, received approval for the expenditure, which will be used to refurbish the plant in Tromode.<br><br>The total cost of the refurbishment will come to just over £2m, with an additional £400,000 coming from the DEFA-administered ‘Agricultural Development Fund’ and £200,000 from Isle of Man Meats.<br><br>The existing plant is 18 years old and there was a large amount of equipment that had come to the end of its lifespan. The boilers required urgent attention, and the gas used in the current refrigeration units will become illegal after 2014, so needs to be replaced. &nbsp;<br><br>The plant’s landlord – the Department of Infrastructure – has also identified other areas for improvement in accordance with current animal welfare standards and health and safety obligations. <br><br>Phil Gawne MHK, Minister for DEFA, said: “The importance of this facility to the Isle of Man cannot be overstated. It is essential that we have a plant to meet the demands of the Manx food industry and to ensure food security and the existence of a self-reliant food chain. Economically, the plant provides an important route-to-market for local farmers; without it, the only alternative is live export.”<br><br>Graham Crowe, chairman of Isle of Man Meats said that although the company had undergone significant changes in recent years, becoming increasingly customer-focused, he said the refurbishment was essential to the continued operation of the business.<br><br>“To have been in a position where the island could not process its own meat animals and be self-reliant, would be unthinkable,” he said.<br><br>Brian Brumby, president, Manx National Farmers’ Union, added: “This refurbishment comes at a time when large investment is occurring at our competitors’ plants in the UK. The ability for the island to be able to process its own meat is likely to become more important in terms of food security.” <br><br>A new 15-year lease was also agreed for the plant last month, which currently delivers returns to the Treasury of more than £400,000 a year.</p>'),
(6, 3, 'pt', 'O financiamento aprovado para fábrica de carnes na Ilha de Man', '<p>Um pacote de £ 1.600.000 de investimento para Ilha de Man Carnes '' fábrica doente foi aprovada pelo parlamento da Ilha de Man, Tynwald .<br><br>\nO Departamento de Meio Ambiente, Alimentação e Agricultura ( DEFA ) para a Ilha de Man , que trabalha em estreita colaboração com a empresa de carne, receberam a aprovação para a despesa, que serão utilizados para a renovação da planta em Tromode .<br><br>\nO custo total da reforma virá a pouco mais de 2 milhões de libras , com um adicional de £ 400.000 proveniente da DEFA -administrado " Fundo de Desenvolvimento Agrícola " e R $ 200.000 de Ilha de Man Carnes .<br><br>\nA usina existente é de 18 anos de idade e havia uma grande quantidade de equipamento que tinha chegado ao fim de sua vida útil. As caldeiras necessário atenção urgente , eo gás utilizado nas unidades de refrigeração atuais se tornará ilegal a partir de 2014 , por isso precisa ser substituído .<br><br>\nSenhorio da planta - o Departamento de Infra-estrutura - também identificou outras áreas de melhoria , de acordo com os padrões de bem-estar animal atuais e obrigações de saúde e segurança .<br><br>\nPhil Gawne MHK , Ministro da DEFA , disse: " A importância deste recurso para a Ilha de Man não pode ser exagerada . É essencial que nós temos uma fábrica para atender a demanda da indústria de alimentos do Manx e garantir a segurança alimentar ea existência de uma cadeia alimentar auto-suficientes. Economicamente , a planta fornece um mercado de via para importante para os agricultores locais , sem ela , a única alternativa é a exportação ao vivo " .<br><br>\nGraham Crowe , presidente da Ilha de Man Carnes disse que, embora a empresa tinha sofrido mudanças significativas nos últimos anos , tornando-se cada vez mais focada no cliente , ele disse que a reforma foi essencial para a continuidade do funcionamento do negócio.<br><br>\n" Para ter estado em uma posição em que a ilha não poderia processar os seus próprios animais de carne e ser auto-suficientes , seria impensável ", disse ele .<br><br>\nBrian Brumby , presidente , Manx National Farmers '' Union, acrescentou: "Esta renovação vem num momento em que grande investimento está ocorrendo em nossos concorrentes das plantas no Reino Unido. A capacidade para a ilha para ser capaz de processar a sua própria carne é provável que se torne mais importante em termos de segurança alimentar. "<br><br>\nUm novo contrato de 15 anos , também foi acordado para a fábrica no mês passado , que atualmente oferece retorna para o Tesouro de mais de £ 400.000 por ano .</p>');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category` int(11) DEFAULT NULL,
  `state` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `state`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 0, 0),
(4, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products_lang`
--

CREATE TABLE `products_lang` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product` int(11) DEFAULT NULL,
  `language` varchar(2) DEFAULT NULL,
  `title` varchar(140) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `products_lang`
--

INSERT INTO `products_lang` (`id`, `product`, `language`, `title`) VALUES
(1, 1, 'pt', 'Bifanas'),
(2, 1, 'en', 'Bifanes'),
(3, 2, 'pt', 'Figado'),
(4, 2, 'en', 'Liver'),
(5, 3, 'pt', ''),
(6, 3, 'en', ''),
(7, 4, 'pt', 'Bifanas'),
(8, 4, 'en', 'Bifanas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `name` varchar(140) NOT NULL,
  `email` varchar(140) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `state` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `password`, `state`) VALUES
(1, 'leite', 'Tiago Leite', 'tiagoanleite@gmail.com', '63a9f0ea7bb98050796b649e85481845', 1),
(2, 'teste', 'Conta de testes', 'teste@teste.pt', '63a9f0ea7bb98050796b649e85481845', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
