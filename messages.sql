-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 29 mai 2018 à 12:12
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

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
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id_m` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) DEFAULT NULL,
  `contenu` text,
  `id_exp` smallint(5) UNSIGNED NOT NULL,
  `id_dest` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_m`),
  KEY `id_exp` (`id_exp`),
  KEY `id_dest` (`id_dest`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id_m`, `titre`, `contenu`, `id_exp`, `id_dest`) VALUES
(25, 'user', '<p>usert</p>\r\n', 2, 3),
(26, 'azert', '<p>azerty</p>\r\n', 2, 3),
(27, 'azert', '<p>azerty</p>\r\n', 2, 3),
(28, 'usertrtkzjrizeuhr', '<p>eszlkrihgzkliehgrilzer</p>\r\n', 2, 3),
(29, 'azert-yèu_i', '<p>stephane</p>\r\n', 2, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
