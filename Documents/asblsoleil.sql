-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 15 Juin 2014 à 13:09
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `asblsoleil`
--
CREATE DATABASE IF NOT EXISTS `asblsoleil` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `asblsoleil`;

-- --------------------------------------------------------

--
-- Structure de la table `achats`
--

CREATE TABLE IF NOT EXISTS `achats` (
  `produits_id` int(11) DEFAULT NULL,
  `membres_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `paye` tinyint(1) DEFAULT NULL,
  `virement_paypal` binary(1) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9920924ECD11A2CF` (`produits_id`),
  KEY `fk_achats_membres1_idx` (`membres_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `achats`
--

INSERT INTO `achats` (`produits_id`, `membres_id`, `date`, `paye`, `virement_paypal`, `id`) VALUES
(3, 1, '2014-06-15', 0, NULL, 11);

-- --------------------------------------------------------

--
-- Structure de la table `agendas`
--

CREATE TABLE IF NOT EXISTS `agendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sites_id` int(11) DEFAULT NULL,
  `slugFr` varchar(255) NOT NULL,
  `slugEn` varchar(255) NOT NULL,
  `titre_fr` varchar(45) NOT NULL,
  `titre_en` varchar(45) DEFAULT NULL,
  `texte_fr` longtext NOT NULL,
  `texte_en` longtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D543C65C7838E496` (`sites_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `agendas`
--

INSERT INTO `agendas` (`id`, `sites_id`, `slugFr`, `slugEn`, `titre_fr`, `titre_en`, `texte_fr`, `texte_en`) VALUES
(1, 1, 'n-n', 'njknjknjk', 'n,n', 'njknjknjk', 'njknjknjk', 'njknjknjknk');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_fr` varchar(45) NOT NULL,
  `nom_en` varchar(45) DEFAULT NULL,
  `texte_fr` text NOT NULL,
  `texte_en` longtext,
  `image` varchar(45) DEFAULT NULL,
  `rubriques_id` int(11) DEFAULT NULL,
  `slugFr` varchar(255) NOT NULL,
  `slugEn` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_articles_rubriques1_idx` (`rubriques_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `nom_fr`, `nom_en`, `texte_fr`, `texte_en`, `image`, `rubriques_id`, `slugFr`, `slugEn`) VALUES
(21, 'article 1 alpha', 'article 1 alpha', 'texte 1 alpha', 'texte1 alpha', '0463e1d151b2f486804620881fb9655f23bc19a9.jpeg', 29, 'article-1-alpha', 'article-1-alpha'),
(22, 'titre 1 eft', 'titre 1 eft', 'texte1 eft', 'texte 1 eft', '0463e1d151b2f486804620881fb9655f23bc19a9.jpeg', 34, 'titre-1-eft', 'titre-1-eft'),
(23, 'titre1 ceramique', 'titre1 ceramique', 'texte1 ceramique', 'texte1 céramique', '991601b151a16f0220c51aa8592f108a5d8933ff.jpeg', 32, 'titre1-ceramique', 'titre1-ceramique'),
(24, 'titre1 EFT', 'titre1 EFT', 'texte1 EFT', 'texte1 EFT', '39563381718210abe0252563cf136bbf3fbd7268.jpeg', 33, 'titre1-eft', 'titre1-eft'),
(25, 'titre2 alpha', 'titre2 alpha', 'texte2 alpha', 'texte2 alpha', NULL, 31, 'titre2-alpha', 'titre2-alpha'),
(26, 'article Formations eft', 'article formations eft', 'hjkhjkhjk', 'hjhjkhjk', NULL, 35, 'article-formations-eft', 'article-formations-eft');

-- --------------------------------------------------------

--
-- Structure de la table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `valeur` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `dons`
--

CREATE TABLE IF NOT EXISTS `dons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prix` decimal(10,0) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `membres_id` int(11) DEFAULT NULL,
  `paye` tinyint(1) DEFAULT NULL,
  `virement_paypal` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_dons_membres1_idx` (`membres_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `dons`
--

INSERT INTO `dons` (`id`, `prix`, `date`, `membres_id`, `paye`, `virement_paypal`) VALUES
(1, '10', '2010-04-02', 2, 1, 1),
(2, '10', '2010-03-03', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `formations_ateliers`
--

CREATE TABLE IF NOT EXISTS `formations_ateliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_fr` varchar(45) NOT NULL,
  `nom_en` varchar(45) DEFAULT NULL,
  `description_fr` text NOT NULL,
  `description_en` varchar(45) DEFAULT NULL,
  `prix` decimal(10,0) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `debut` date NOT NULL,
  `fin` date NOT NULL,
  `nbMax` int(11) NOT NULL,
  `sites_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_formations_ateliers_sites1_idx` (`sites_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `formations_ateliers`
--

INSERT INTO `formations_ateliers` (`id`, `nom_fr`, `nom_en`, `description_fr`, `description_en`, `prix`, `date`, `debut`, `fin`, `nbMax`, `sites_id`) VALUES
(7, 'formation 1 céramique', 'formation 1 céramique', 'djk', 'njcdhj', '10', '0000-00-00', '2009-01-01', '2009-01-01', 10, 2),
(8, 'formation1 EFT', 'formation1 EFT', 'jghjghjg', 'jhgjhghj', '10', '0000-00-00', '2009-01-01', '2009-01-01', 10, 3),
(9, 'formation 2 céramique', 'formation 2 céramique', 'bvfvdf', 'vqfvqs', '10', NULL, '2009-01-01', '2009-01-01', 10, 2),
(10, 'formation2 EFT', 'formation2 EFT', 'bxjqkbxqj', 'bqjsbxqsjbxqj', '10', NULL, '2009-01-01', '2009-01-01', 10, 3);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE IF NOT EXISTS `inscription` (
  `membres_id` int(11) DEFAULT NULL,
  `formationsAteliers_id` int(11) DEFAULT NULL,
  `dateInscription` date DEFAULT NULL,
  `paye` tinyint(1) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `fk_inscription_membres1_idx` (`membres_id`),
  KEY `IDX_5E90F6D6751AA2BC` (`formationsAteliers_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `inscription`
--

INSERT INTO `inscription` (`membres_id`, `formationsAteliers_id`, `dateInscription`, `paye`, `id`) VALUES
(2, 7, '2014-06-02', 0, 10),
(1, 7, '2014-06-15', 0, 11);

-- --------------------------------------------------------

--
-- Structure de la table `liens`
--

CREATE TABLE IF NOT EXISTS `liens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `url` varchar(45) NOT NULL,
  `image` varchar(45) DEFAULT NULL,
  `rubriques_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_liens_rubriques1_idx` (`rubriques_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `telephonne` varchar(45) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `username_canonical` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_canonical` varchar(255) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_594AE39C92FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_594AE39CA0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`id`, `telephonne`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `adresse`, `nom`, `prenom`) VALUES
(1, NULL, 'marween', 'marween', 'a-mag13@hotmail.com', 'a-mag13@hotmail.com', 1, 'pwr48ehdaw0k48wcs080gg488swksk0', 'EINVrk19Uq8YTSrCmwfzf6wfV5MsdRXjVj2+0u5LV+Pek+n5gy957VcZUWL0A0bQBVJvRXers07+/4mO+vsoeg==', '2014-06-15 12:52:35', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, NULL, 'lulu', NULL),
(2, NULL, 'username', 'username', 'email@email', 'email@email', 1, 'o2akfcu4rvkg8o4wgcwwoggwwsw08kk', '9bMtf/hAXzrDR4bO85bzf0qxt6IcXj+2WQTjhALOkc6X1A/ps/WPTZEKMiejMGq8VXyxk/Jzdw4ce+6ReRgtew==', '2014-06-15 12:51:15', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL, NULL, NULL, NULL),
(3, NULL, 'test', 'test', 'lll@lll.com', 'lll@lll.com', 1, '589xlm99ifwgw0ooskosok8g80oggs0', 'fO1fr+xZb1zbTas1/0cfc/yerW65VRtZPA4YxMzBjssPpJGLZkpgLhgyGoFwqQ9SyEjbZSi4ErG9K4WE00IKQQ==', '2014-05-20 18:02:21', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, NULL, NULL, NULL),
(4, '121212313213', 'lulu', 'lulu', 'lulu@lulu.com', 'lulu@lulu.com', 1, '98we1oel5mgww4ck08s080sk8wcw8o8', 's5PJ0n0u2hbmcPnesKcjcfCV/PzW2DEbSuiUBfIikcmJvSaLhPm+d6YOqIsH4ONLBFcQOqGWPDutsbR0B7HZdw==', '2014-05-30 10:25:25', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'hjhjhkhkj', 'lulu', 'lulu'),
(5, '6556', 'rrr', 'rrr', 'rrr@rrr.com', 'rrr@rrr.com', 1, 'aq5xff0tssg0skw4wc4w44kcs4ks48g', 'oLRZDhkOhmqC/TOth8qsBm9i2T7gXaoedPvp/0IE0iTDy1vug7bhZ2W8IYBL25tj3hL941hiPEnLJxy3uyF2jQ==', '2014-05-30 14:12:55', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'ghjgjh', 'rrr', 'rrr');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_fr` varchar(45) NOT NULL,
  `nom_en` varchar(45) DEFAULT NULL,
  `description_fr` text,
  `description_en` varchar(45) DEFAULT NULL,
  `image` varchar(45) NOT NULL,
  `prix` decimal(10,0) DEFAULT NULL,
  `onoff` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`id`, `nom_fr`, `nom_en`, `description_fr`, `description_en`, `image`, `prix`, `onoff`) VALUES
(1, 'produit1', 'produit1', 'hjkhkjhkj', 'hkjhkjhkj', '19cbb03c758861863c3f61238baf7851734fe92b.jpeg', '20', 1),
(2, 'produit2', 'produit2', 'hjkhkj', 'hjhjhjk', '88c89329b8cc3ff7cab2831c440893481c1775df.jpeg', '10', 0),
(3, 'produit3', 'produit3', 'gdjshjhjk', 'hjkhjkhjkhk', '106f9355d8e379a4e32329a4131610918ecd32b3.jpeg', '30', 0);

-- --------------------------------------------------------

--
-- Structure de la table `rubriques`
--

CREATE TABLE IF NOT EXISTS `rubriques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_fr` varchar(45) NOT NULL,
  `nom_en` varchar(45) DEFAULT NULL,
  `sites_id` int(11) DEFAULT NULL,
  `slugFr` varchar(255) NOT NULL,
  `slugEn` varchar(255) NOT NULL,
  `choixFormation` tinyint(1) DEFAULT NULL,
  `choixProduit` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rubriques_sites1_idx` (`sites_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Contenu de la table `rubriques`
--

INSERT INTO `rubriques` (`id`, `nom_fr`, `nom_en`, `sites_id`, `slugFr`, `slugEn`, `choixFormation`, `choixProduit`) VALUES
(29, 'Accueil Alphabetisation', 'Accueil Alphabetisation', 1, 'accueil-alphabetisation', 'accueil-alphabetisation', 0, 0),
(31, 'rubrique2 Alphabetisation', 'rubrique2 Alphabetisation', 1, 'rubrique2-alphabetisation', 'rubrique2-alphabetisation', 0, 0),
(32, 'rubrique1 céramique', 'rubrique1 céramique', 2, 'rubrique1-ceramique', 'rubrique1-ceramique', 0, 0),
(33, 'rubrique1 EFT', 'rubrique1 EFT', 3, 'rubrique1-eft', 'rubrique1-eft', 0, 0),
(34, 'rubrique2 EFT', 'rubrique EFT', 3, 'rubrique2-eft', 'rubrique-eft', 0, 0),
(35, 'formation EFT', 'formation EFT', 3, 'formation-eft', 'formation-eft', 1, 0),
(36, 'formation ceramique', 'formations céramique', 2, 'formation-ceramique', 'formations-ceramique', 1, 0),
(37, 'produit ceramique', 'produits ceramique', 2, 'produit-ceramique', 'produit-ceramique', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_fr` varchar(45) NOT NULL,
  `nom_en` varchar(45) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `sites`
--

INSERT INTO `sites` (`id`, `nom_fr`, `nom_en`, `slug`) VALUES
(1, 'Alphabétisation', '1', 'alphabetisation'),
(2, 'céramique', '2', 'ceramique'),
(3, 'EFT', '3', 'eft');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `achats`
--
ALTER TABLE `achats`
  ADD CONSTRAINT `fk_achats_membres1` FOREIGN KEY (`membres_id`) REFERENCES `membres` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_achats_produits1` FOREIGN KEY (`produits_id`) REFERENCES `produits` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `agendas`
--
ALTER TABLE `agendas`
  ADD CONSTRAINT `FK_D543C65C7838E496` FOREIGN KEY (`sites_id`) REFERENCES `sites` (`id`);

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_articles_rubriques1` FOREIGN KEY (`rubriques_id`) REFERENCES `rubriques` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `dons`
--
ALTER TABLE `dons`
  ADD CONSTRAINT `fk_dons_membres1` FOREIGN KEY (`membres_id`) REFERENCES `membres` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `formations_ateliers`
--
ALTER TABLE `formations_ateliers`
  ADD CONSTRAINT `fk_formations_ateliers_sites1` FOREIGN KEY (`sites_id`) REFERENCES `sites` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `FK_5E90F6D6751AA2BC` FOREIGN KEY (`formationsAteliers_id`) REFERENCES `formations_ateliers` (`id`),
  ADD CONSTRAINT `fk_inscription_membres1` FOREIGN KEY (`membres_id`) REFERENCES `membres` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `liens`
--
ALTER TABLE `liens`
  ADD CONSTRAINT `fk_liens_rubriques1` FOREIGN KEY (`rubriques_id`) REFERENCES `rubriques` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `rubriques`
--
ALTER TABLE `rubriques`
  ADD CONSTRAINT `fk_rubriques_sites1` FOREIGN KEY (`sites_id`) REFERENCES `sites` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
