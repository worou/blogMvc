-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 04 oct. 2018 à 11:32
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `monblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_billet`
--

DROP TABLE IF EXISTS `t_billet`;
CREATE TABLE IF NOT EXISTS `t_billet` (
  `BIL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `BIL_DATE` datetime NOT NULL,
  `BIL_TITRE` varchar(100) NOT NULL,
  `BIL_CONTENU` varchar(400) NOT NULL,
  PRIMARY KEY (`BIL_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_billet`
--

INSERT INTO `t_billet` (`BIL_ID`, `BIL_DATE`, `BIL_TITRE`, `BIL_CONTENU`) VALUES
(1, '2018-10-01 15:38:34', 'Premier billet', 'Bonjour monde ! Ceci est le premier billet sur mon blog.'),
(2, '2018-10-01 15:38:34', 'Au travail', 'Il faut enrichir ce blog dès maintenant.');

-- --------------------------------------------------------

--
-- Structure de la table `t_commentaire`
--

DROP TABLE IF EXISTS `t_commentaire`;
CREATE TABLE IF NOT EXISTS `t_commentaire` (
  `COM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COM_DATE` datetime NOT NULL,
  `COM_AUTEUR` varchar(100) NOT NULL,
  `COM_CONTENU` varchar(200) NOT NULL,
  `BIL_ID` int(11) NOT NULL,
  PRIMARY KEY (`COM_ID`),
  KEY `fk_com_bil` (`BIL_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_commentaire`
--

INSERT INTO `t_commentaire` (`COM_ID`, `COM_DATE`, `COM_AUTEUR`, `COM_CONTENU`, `BIL_ID`) VALUES
(1, '2018-10-01 15:38:35', 'A. Nonyme', 'Bravo pour ce début', 1),
(2, '2018-10-01 15:38:35', 'Moi', 'Merci ! Je vais continuer sur ma lancée', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `t_commentaire`
--
ALTER TABLE `t_commentaire`
  ADD CONSTRAINT `fk_com_bil` FOREIGN KEY (`BIL_ID`) REFERENCES `t_billet` (`BIL_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
