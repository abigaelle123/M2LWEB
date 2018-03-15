-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 08 fév. 2018 à 11:12
-- Version du serveur :  5.7.19
-- Version de PHP :  7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `m2l`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE IF NOT EXISTS `adresse` (
  `id_a` int(11) NOT NULL AUTO_INCREMENT,
  `rue` varchar(25) DEFAULT NULL,
  `commune` varchar(25) DEFAULT NULL,
  `code_postale` varchar(25) DEFAULT NULL,
  `numero` int(3) NOT NULL,
  PRIMARY KEY (`id_a`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`id_a`, `rue`, `commune`, `code_postale`, `numero`) VALUES
(3, 'test', 'test', '75009', 12),
(4, 'BD DE LIBERTE', 'CHARENTON', '94160', 28);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `id_f` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(25) DEFAULT NULL,
  `contenu` varchar(255) DEFAULT NULL,
  `date_d` date NOT NULL,
  `date_f` date NOT NULL,
  `NbJour` int(2) DEFAULT NULL,
  `credits` int(4) DEFAULT NULL,
  `id_p` int(11) DEFAULT NULL,
  `id_a` int(11) NOT NULL,
  PRIMARY KEY (`id_f`),
  KEY `FK_formation_id_p` (`id_p`),
  KEY `FK_formation_id_a` (`id_a`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id_f`, `libelle`, `contenu`, `date_d`, `date_f`, `NbJour`, `credits`, `id_p`, `id_a`) VALUES
(2, 'PHP', 'PHP: Hypertext Preprocessor4, plus connu sous son sigle PHP (acronyme récursif), est un langage de programmation libre5, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP', '2018-02-01', '2018-02-20', 20, 50, 1, 3),
(3, 'HTML/CSS', 'HTML est un langage ', '2018-01-31', '2018-02-06', 6, 30, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `prestataire`
--

DROP TABLE IF EXISTS `prestataire`;
CREATE TABLE IF NOT EXISTS `prestataire` (
  `id_p` int(11) NOT NULL AUTO_INCREMENT,
  `raison_s` varchar(25) DEFAULT NULL,
  `id_a` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_p`),
  KEY `FK_prestataire_id_a` (`id_a`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `prestataire`
--

INSERT INTO `prestataire` (`id_p`, `raison_s`, `id_a`) VALUES
(1, 'TEST', 3);

-- --------------------------------------------------------

--
-- Structure de la table `salarie`
--

DROP TABLE IF EXISTS `salarie`;
CREATE TABLE IF NOT EXISTS `salarie` (
  `id_s` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) DEFAULT NULL,
  `prenom` varchar(25) DEFAULT NULL,
  `mail` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `NbJour` int(11) DEFAULT NULL,
  `credits` int(4) DEFAULT NULL,
  `level` int(1) NOT NULL,
  `id_a` int(11) DEFAULT NULL,
  `id_s_1` int(11) DEFAULT NULL,
  `erreur` int(11) DEFAULT NULL,
  `date_fin_password` date DEFAULT NULL,
  PRIMARY KEY (`id_s`),
  KEY `FK_salarie_id_a` (`id_a`),
  KEY `FK_salarie_id_s_1` (`id_s_1`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `salarie`
--

INSERT INTO `salarie` (`id_s`, `nom`, `prenom`, `mail`, `password`, `NbJour`, `credits`, `level`, `id_a`, `id_s_1`, `erreur`, `date_fin_password`) VALUES
(1, 'admin', 'admin', 'admin@admin.fr', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 5000, 1, NULL, NULL, NULL, NULL),
(2, 'chef', 'chef', 'chef@chef.fr', 'd5f2e5c77054c44c2c72a1b017deca06fc637c99', 1, 5000, 2, NULL, NULL, 3, NULL),
(3, 'user1', 'user', 'user@user.fr', '9cf95dacd226dcf43da376cdb6cbba7035218921', 10, 5000, 3, 3, 2, 3, NULL),
(4, 'HOURI', 'ABIGAEL', 'aby@gmail.com', '3c81a121f93d44292e148be026ecf004d560de44', 8, 14, 1, 4, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `situer`
--

DROP TABLE IF EXISTS `situer`;
CREATE TABLE IF NOT EXISTS `situer` (
  `id_f` int(11) NOT NULL,
  `id_a` int(11) NOT NULL,
  PRIMARY KEY (`id_f`,`id_a`),
  KEY `FK_situer_id_a` (`id_a`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `situer`
--

INSERT INTO `situer` (`id_f`, `id_a`) VALUES
(3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `suivre`
--

DROP TABLE IF EXISTS `suivre`;
CREATE TABLE IF NOT EXISTS `suivre` (
  `etat` varchar(25) DEFAULT NULL,
  `id_s` int(11) NOT NULL,
  `id_f` int(11) NOT NULL,
  PRIMARY KEY (`id_s`,`id_f`),
  KEY `FK_suivre_id_f` (`id_f`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `suivre`
--

INSERT INTO `suivre` (`etat`, `id_s`, `id_f`) VALUES
('En attente', 2, 2),
('En attente', 2, 3),
('En attente', 3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `type_formation`
--

DROP TABLE IF EXISTS `type_formation`;
CREATE TABLE IF NOT EXISTS `type_formation` (
  `id_t` int(11) NOT NULL AUTO_INCREMENT,
  `nom_type` varchar(25) DEFAULT NULL,
  `id_f` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_t`),
  KEY `FK_type_formation_id_f` (`id_f`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_formation`
--

INSERT INTO `type_formation` (`id_t`, `nom_type`, `id_f`) VALUES
(1, 'alternance', 2);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `FK_formation_id_a` FOREIGN KEY (`id_a`) REFERENCES `adresse` (`id_a`),
  ADD CONSTRAINT `FK_formation_id_p` FOREIGN KEY (`id_p`) REFERENCES `prestataire` (`id_p`);

--
-- Contraintes pour la table `prestataire`
--
ALTER TABLE `prestataire`
  ADD CONSTRAINT `FK_prestataire_id_a` FOREIGN KEY (`id_a`) REFERENCES `adresse` (`id_a`);

--
-- Contraintes pour la table `salarie`
--
ALTER TABLE `salarie`
  ADD CONSTRAINT `FK_salarie_id_a` FOREIGN KEY (`id_a`) REFERENCES `adresse` (`id_a`),
  ADD CONSTRAINT `FK_salarie_id_s_1` FOREIGN KEY (`id_s_1`) REFERENCES `salarie` (`id_s`);

--
-- Contraintes pour la table `situer`
--
ALTER TABLE `situer`
  ADD CONSTRAINT `FK_situer_id_a` FOREIGN KEY (`id_a`) REFERENCES `adresse` (`id_a`),
  ADD CONSTRAINT `FK_situer_id_f` FOREIGN KEY (`id_f`) REFERENCES `formation` (`id_f`);

--
-- Contraintes pour la table `suivre`
--
ALTER TABLE `suivre`
  ADD CONSTRAINT `FK_suivre_id_f` FOREIGN KEY (`id_f`) REFERENCES `formation` (`id_f`),
  ADD CONSTRAINT `FK_suivre_id_s` FOREIGN KEY (`id_s`) REFERENCES `salarie` (`id_s`);

--
-- Contraintes pour la table `type_formation`
--
ALTER TABLE `type_formation`
  ADD CONSTRAINT `FK_type_formation_id_f` FOREIGN KEY (`id_f`) REFERENCES `formation` (`id_f`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;