-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1:3306
-- Généré le :  Mar 21 Octobre 2014 à 15:54
-- Version du serveur :  5.5.39
-- Version de PHP :  5.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `voyage`
--

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
`id` int(11) NOT NULL,
  `pays` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=239 ;

--
-- Contenu de la table `pays`
--

INSERT INTO `pays` (`id`, `pays`) VALUES
(1, 'Afghanistan'),
(2, 'Afrique du Sud'),
(3, 'Albanie'),
(4, 'Algérie'),
(5, 'Allemagne'),
(6, 'Andorre'),
(7, 'Angola'),
(8, 'Anguilla'),
(9, 'Antarctique'),
(10, 'Antigua-et-Barbuda'),
(11, 'Antilles néerlandaises'),
(12, 'Arabie saoudite'),
(13, 'Argentine'),
(14, 'Arménie'),
(15, 'Aruba'),
(16, 'Australie'),
(17, 'Autriche'),
(18, 'Azerbaïdjan'),
(19, 'Bénin'),
(20, 'Bahamas'),
(21, 'Bahreïn'),
(22, 'Bangladesh'),
(23, 'Barbade'),
(24, 'Belau'),
(25, 'Belgique'),
(26, 'Belize'),
(27, 'Bermudes'),
(28, 'Bhoutan'),
(29, 'Biélorussie'),
(30, 'Birmanie'),
(31, 'Bolivie'),
(32, 'Bosnie-Herzégovine'),
(33, 'Botswana'),
(34, 'Brésil'),
(35, 'Brunei'),
(36, 'Bulgarie'),
(37, 'Burkina Faso'),
(38, 'Burundi'),
(39, 'Côte d''Ivoire'),
(40, 'Cambodge'),
(41, 'Cameroun'),
(42, 'Canada'),
(43, 'Cap-Vert'),
(44, 'Chili'),
(45, 'Chine'),
(46, 'Chypre'),
(47, 'Colombie'),
(48, 'Comores'),
(49, 'Congo'),
(50, 'Corée du Nord'),
(51, 'Corée du Sud'),
(52, 'Costa Rica'),
(53, 'Croatie'),
(54, 'Cuba'),
(55, 'Danemark'),
(56, 'Djibouti'),
(57, 'Dominique'),
(58, 'Égypte'),
(59, 'Émirats arabes unis'),
(60, 'Équateur'),
(61, 'Érythrée'),
(62, 'Espagne'),
(63, 'Estonie'),
(64, 'États-Unis'),
(65, 'Éthiopie'),
(66, 'Finlande'),
(67, 'France'),
(68, 'Géorgie'),
(69, 'Gabon'),
(70, 'Gambie'),
(71, 'Ghana'),
(72, 'Gibraltar'),
(73, 'Grèce'),
(74, 'Grenade'),
(75, 'Groenland'),
(76, 'Guadeloupe'),
(77, 'Guam'),
(78, 'Guatemala'),
(79, 'Guinée'),
(80, 'Guinée équatoriale'),
(81, 'Guinée-Bissao'),
(82, 'Guyana'),
(83, 'Guyane française'),
(84, 'Haïti'),
(85, 'Honduras'),
(86, 'Hong Kong'),
(87, 'Hongrie'),
(88, 'Ile Bouvet'),
(89, 'Ile Christmas'),
(90, 'Ile Norfolk'),
(91, 'Iles Cayman'),
(92, 'Iles Cook'),
(93, 'Iles Féroé'),
(94, 'Iles Falkland'),
(95, 'Iles Fidji'),
(96, 'Iles Géorgie du Sud et Sandwich du Sud'),
(97, 'Iles Heard et McDonald'),
(98, 'Iles Marshall'),
(99, 'Iles Pitcairn'),
(100, 'Iles Salomon'),
(101, 'Iles Svalbard et Jan Mayen'),
(102, 'Iles Turks-et-Caicos'),
(103, 'Iles Vierges américaines'),
(104, 'Iles Vierges britanniques'),
(105, 'Iles des Cocos (Keeling)'),
(106, 'Iles mineures éloignées des États-Unis'),
(107, 'Inde'),
(108, 'Indonésie'),
(109, 'Iran'),
(110, 'Iraq'),
(111, 'Irlande'),
(112, 'Islande'),
(113, 'Israël'),
(114, 'Italie'),
(115, 'Jamaïque'),
(116, 'Japon'),
(117, 'Jordanie'),
(118, 'Kazakhstan'),
(119, 'Kenya'),
(120, 'Kirghizistan'),
(121, 'Kiribati'),
(122, 'Koweït'),
(123, 'Laos'),
(124, 'Lesotho'),
(125, 'Lettonie'),
(126, 'Liban'),
(127, 'Liberia'),
(128, 'Libye'),
(129, 'Liechtenstein'),
(130, 'Lituanie'),
(131, 'Luxembourg'),
(132, 'Macao'),
(133, 'Madagascar'),
(134, 'Malaisie'),
(135, 'Malawi'),
(136, 'Maldives'),
(137, 'Mali'),
(138, 'Malte'),
(139, 'Mariannes du Nord'),
(140, 'Maroc'),
(141, 'Martinique'),
(142, 'Maurice'),
(143, 'Mauritanie'),
(144, 'Mayotte'),
(145, 'Mexique'),
(146, 'Micronésie'),
(147, 'Moldavie'),
(148, 'Monaco'),
(149, 'Mongolie'),
(150, 'Montserrat'),
(151, 'Mozambique'),
(152, 'Népal'),
(153, 'Namibie'),
(154, 'Nauru'),
(155, 'Nicaragua'),
(156, 'Niger'),
(157, 'Nigeria'),
(158, 'Nioué'),
(159, 'Norvège'),
(160, 'Nouvelle-Calédonie'),
(161, 'Nouvelle-Zélande'),
(162, 'Oman'),
(163, 'Ouganda'),
(164, 'Ouzbékistan'),
(165, 'Pérou'),
(166, 'Pakistan'),
(167, 'Panama'),
(168, 'Papouasie-Nouvelle-Guinée'),
(169, 'Paraguay'),
(170, 'Pays-Bas'),
(171, 'Philippines'),
(172, 'Pologne'),
(173, 'Polynésie française'),
(174, 'Porto Rico'),
(175, 'Portugal'),
(176, 'Qatar'),
(177, 'République centrafricaine'),
(178, 'République démocratique du Congo'),
(179, 'République dominicaine'),
(180, 'République tchèque'),
(181, 'Réunion'),
(182, 'Roumanie'),
(183, 'Royaume-Uni'),
(184, 'Russie'),
(185, 'Rwanda'),
(186, 'Sénégal'),
(187, 'Sahara occidental'),
(188, 'Saint-Christophe-et-Niévès'),
(189, 'Saint-Marin'),
(190, 'Saint-Pierre-et-Miquelon'),
(191, 'Saint-Siège '),
(192, 'Saint-Vincent-et-les-Grenadines'),
(193, 'Sainte-Hélène'),
(194, 'Sainte-Lucie'),
(195, 'Salvador'),
(196, 'Samoa'),
(197, 'Samoa américaines'),
(198, 'Sao Tomé-et-Principe'),
(199, 'Seychelles'),
(200, 'Sierra Leone'),
(201, 'Singapour'),
(202, 'Slovénie'),
(203, 'Slovaquie'),
(204, 'Somalie'),
(205, 'Soudan'),
(206, 'Sri Lanka'),
(207, 'Suède'),
(208, 'Suisse'),
(209, 'Suriname'),
(210, 'Swaziland'),
(211, 'Syrie'),
(212, 'Taïwan'),
(213, 'Tadjikistan'),
(214, 'Tanzanie'),
(215, 'Tchad'),
(216, 'Terres australes françaises'),
(217, 'Territoire britannique de l''Océan Indien'),
(218, 'Thaïlande'),
(219, 'Timor Oriental'),
(220, 'Togo'),
(221, 'Tokélaou'),
(222, 'Tonga'),
(223, 'Trinité-et-Tobago'),
(224, 'Tunisie'),
(225, 'Turkménistan'),
(226, 'Turquie'),
(227, 'Tuvalu'),
(228, 'Ukraine'),
(229, 'Uruguay'),
(230, 'Vanuatu'),
(231, 'Venezuela'),
(232, 'ViÃªt Nam'),
(233, 'Wallis-et-Futuna'),
(234, 'Yémen'),
(235, 'Yougoslavie'),
(236, 'Zambie'),
(237, 'Zimbabwe'),
(238, 'ex-République yougoslave de Macédoine');

-- --------------------------------------------------------

--
-- Structure de la table `programme`
--

CREATE TABLE `programme` (
`id` int(11) NOT NULL,
  `programme` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `programme`
--

INSERT INTO `programme` (`id`, `programme`) VALUES
(1, 'info');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
`id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'alex', '123', 'admin'),
(2, 'drgdf', 'gdfgdfg', 'dfgdfg');

-- --------------------------------------------------------

--
-- Structure de la table `users_information`
--

CREATE TABLE `users_information` (
`id` int(11) NOT NULL,
  `numero_da` varchar(7) NOT NULL,
  `pays_id` int(11) NOT NULL,
  `programme_id` int(11) NOT NULL,
  `voyage_id` int(11) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `numero_passeport` varchar(8) NOT NULL,
  `date_de_delivrance` date NOT NULL,
  `date_expiration` date NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `code_postal` varchar(7) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `cellulaire` varchar(10) NOT NULL,
  `courriel` varchar(100) NOT NULL,
  `session` int(11) NOT NULL,
  `cours_espagnol` tinyint(1) NOT NULL,
  `cours_espagnol_precise` varchar(1000) NOT NULL,
  `paiement` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users_information`
--

INSERT INTO `users_information` (`id`, `numero_da`, `pays_id`, `programme_id`, `voyage_id`, `prenom`, `nom`, `date_de_naissance`, `numero_passeport`, `date_de_delivrance`, `date_expiration`, `adresse`, `ville`, `code_postal`, `telephone`, `cellulaire`, `courriel`, `session`, `cours_espagnol`, `cours_espagnol_precise`, `paiement`) VALUES
(1, '1139001', 0, 1, 1, 'antoine', 'boutch', '2014-10-21', 'BOUA0511', '2014-10-21', '2014-10-21', '1011 de corinthe', 'mtl', 'H7K 3T3', '5144335269', '4509235689', 'antoine859@msn.com', 1, 1, 'Olla', 1);

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

CREATE TABLE `voyage` (
`id` int(11) NOT NULL,
  `voyage` varchar(30) NOT NULL,
  `date_depart` date NOT NULL,
  `date_retour` date NOT NULL,
  `prix` double NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `voyage`
--

INSERT INTO `voyage` (`id`, `voyage`, `date_depart`, `date_retour`, `prix`) VALUES
(1, 'maroc', '2014-10-21', '2014-10-22', 1000);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `programme`
--
ALTER TABLE `programme`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users_information`
--
ALTER TABLE `users_information`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `voyage`
--
ALTER TABLE `voyage`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=239;
--
-- AUTO_INCREMENT pour la table `programme`
--
ALTER TABLE `programme`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `users_information`
--
ALTER TABLE `users_information`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `voyage`
--
ALTER TABLE `voyage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
