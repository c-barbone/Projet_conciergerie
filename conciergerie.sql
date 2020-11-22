-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 22 nov. 2020 à 13:52
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `conciergerie`
--

-- --------------------------------------------------------

--
-- Structure de la table `intervention`
--

DROP TABLE IF EXISTS `intervention`;
CREATE TABLE IF NOT EXISTS `intervention` (
  `Id_Intervention` bigint(20) NOT NULL AUTO_INCREMENT,
  `Type_Intervention` varchar(255) DEFAULT NULL,
  `Floor_Intervention` bigint(20) DEFAULT NULL,
  `Date_Intervention` date DEFAULT NULL,
  PRIMARY KEY (`Id_Intervention`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `intervention`
--

INSERT INTO `intervention` (`Id_Intervention`, `Type_Intervention`, `Floor_Intervention`, `Date_Intervention`) VALUES
(1, 'Changement ampoule', 1, '2020-11-16'),
(2, 'Remplacement serrure', 3, '2020-11-10'),
(3, 'Changement ampoule', 2, '2020-11-16'),
(4, 'Changement ampoule', 3, '2020-11-06'),
(5, 'Peinture palier', 3, '2020-10-31'),
(6, 'Peinture palier', 5, '2020-09-04'),
(7, 'Réparation rampe d\'escalier', 2, '2020-11-17'),
(8, 'Nettoyage tapis', 1, '2020-11-19'),
(9, 'Peinture palier', 2, '2020-11-18'),
(10, 'Changement ampoule', 2, '2020-11-18'),
(11, 'Peinture palier', 1, '2020-11-19'),
(12, 'Changement ampoule', 1, '2020-11-19'),
(13, 'Changement ampoule', 3, '2020-01-20'),
(14, 'Nettoyage tapis', 3, '2020-02-05'),
(15, 'Changement ampoule', 4, '2020-11-20'),
(16, 'Peinture palier', 4, '2020-11-20'),
(17, 'Peinture palier', 2, '2020-11-20'),
(18, 'Nettoyage tapis', 1, '2020-11-20'),
(19, 'Changement ampoule', 4, '2020-11-20'),
(20, 'Nettoyage tapis', 5, '2020-11-20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
