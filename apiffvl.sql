-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 24 jan. 2020 à 12:08
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `apiffvl`
--

-- --------------------------------------------------------

--
-- Structure de la table `balise`
--

DROP TABLE IF EXISTS `balise`;
CREATE TABLE IF NOT EXISTS `balise` (
  `ID_Balise` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `latitude` int(20) NOT NULL,
  `longitude` int(20) NOT NULL,
  PRIMARY KEY (`ID_Balise`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `balise`
--

INSERT INTO `balise` (`ID_Balise`, `nom`, `latitude`, `longitude`) VALUES
(1, 'Le Havre', 49484542, 103551),
(2, 'Dieppe', 49932039, 1081185),
(3, 'Fécamp', 49761909, 363125),
(4, 'Atelier - Lycée Raymond Queneau', 49611478, 770480);

-- --------------------------------------------------------

--
-- Structure de la table `mesure`
--

DROP TABLE IF EXISTS `mesure`;
CREATE TABLE IF NOT EXISTS `mesure` (
  `ID_Mesure` bigint(20) NOT NULL AUTO_INCREMENT,
  `vitesse` int(11) NOT NULL,
  `pression` int(11) NOT NULL,
  `humidite` int(11) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `temperature` int(11) NOT NULL,
  `direction` int(11) NOT NULL,
  `ID_Balise` bigint(20) NOT NULL,
  PRIMARY KEY (`ID_Mesure`),
  KEY `ID_Balise` (`ID_Balise`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `mesure`
--

INSERT INTO `mesure` (`ID_Mesure`, `vitesse`, `pression`, `humidite`, `date`, `heure`, `temperature`, `direction`, `ID_Balise`) VALUES
(1, 120, 1200, 63, '2020-02-02', '00:00:00', 254, 256, 1),
(2, 10, 450, 65, '2020-02-02', '00:00:00', 25, 25, 2),
(3, 125, 1205, 65, '2020-02-05', '22:06:09', 255, 255, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `mesure`
--
ALTER TABLE `mesure`
  ADD CONSTRAINT `mesure_ibfk_1` FOREIGN KEY (`ID_Balise`) REFERENCES `balise` (`ID_Balise`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
