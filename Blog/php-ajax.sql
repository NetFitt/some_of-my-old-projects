-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 28 mars 2022 à 21:44
-- Version du serveur :  8.0.28-0ubuntu0.20.04.3
-- Version de PHP : 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `php-ajax`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int NOT NULL,
  `GivenName` varchar(18) DEFAULT NULL,
  `FamilyName` varchar(10) DEFAULT NULL,
  `Email` varchar(31) DEFAULT NULL,
  `PhoneValue` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `GivenName`, `FamilyName`, `Email`, `PhoneValue`) VALUES
(1, 'ACHREF', 'BECHANE', 'achrefbechane55@gmail.com', '0668 16 21 19'),
(2, 'DHAI EDDINE', 'BENDJEDIA', 'dhia.eddine97@gmail.com', '0673680098'),
(3, 'FEYROUZ', 'DJEBBARA', 'feyrouzdjebbara2000@gmail.com', '0795351124'),
(4, 'Ibtissem', 'BENDOUHOU', 'Ibtissem.bendouhou754@gmail.com', '0674 60 78 80'),
(5, 'Lokmane', 'BATACHE', 'lokmanekatalonya@gmail.com', '0770191047'),
(6, 'Merouane', 'HAMTACHE', 'merouanehamtache@gmail.com', '0795 32 78 57'),
(7, 'MOHAMED', 'AHMANACHE', 'mohclache@gmail.com', '0541 57 92 55'),
(8, 'MOHAMMED-ELGHAZALI', 'MOHGUEN', 'ghazalimohguen2000@gmail.com', '0656536213'),
(9, 'MOUNKIDH', 'BOUCHAREB', 'mounkidhbouchareb@gmail.com', '0668373714'),
(10, 'RANIA', 'HAMADACHE', 'ranioya22@gmail.com', '0665 51 47 95'),
(11, 'RYM', 'TOUZOUT', 'r.touzout02@gmail.com', '0561 76 73 12'),
(12, 'Souad', 'ABDALLAH', 'sousouabdallah08@gmail.com', '0697892939'),
(13, 'WALID', 'BOUDILMI', 'walidboudilmi@gmail.com', '0697520620'),
(14, 'YOUNES', 'HAMITOUCHE', 'hamitoucheyounes20@gmail.com', '0673237351');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
