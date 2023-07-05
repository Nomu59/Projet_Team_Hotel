-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 05 juil. 2023 à 08:45
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `teamhotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `code_Categorie` varchar(50) COLLATE utf8_bin NOT NULL,
  `designation` varchar(50) COLLATE utf8_bin NOT NULL,
  `num_Chamb` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`code_Categorie`, `designation`, `num_Chamb`) VALUES
('1', 'UltraLuxe', '100'),
('2', 'SuperLuxe', '110'),
('3', 'Luxe', '120');

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `num_Chamb` varchar(50) COLLATE utf8_bin NOT NULL,
  `etage` varchar(50) COLLATE utf8_bin NOT NULL,
  `prix` varchar(50) COLLATE utf8_bin NOT NULL,
  `emplacement` varchar(50) COLLATE utf8_bin NOT NULL,
  `code_Categorie` varchar(50) COLLATE utf8_bin NOT NULL,
  `num_Reservation` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`num_Chamb`, `etage`, `prix`, `emplacement`, `code_Categorie`, `num_Reservation`) VALUES
('100', '1', '3700', 'Nord', '1', NULL),
('101', '1', '3795', 'Nord', '1', NULL),
('102', '1', '3572', 'Nord', '1', NULL),
('103', '1', '3758', 'Nord', '1', NULL),
('104', '1', '3773', 'Nord', '1', NULL),
('105', '1', '3438', 'Nord', '1', NULL),
('106', '1', '3323', 'Nord', '1', NULL),
('107', '1', '3506', 'Nord', '1', NULL),
('108', '1', '3567', 'Nord', '1', NULL),
('109', '1', '3734', 'Nord', '1', NULL),
('110', '2', '1220', 'Sud', '2', NULL),
('111', '2', '1112', 'Sud', '2', NULL),
('112', '2', '1264', 'Sud', '2', NULL),
('113', '2', '1009', 'Sud', '2', NULL),
('114', '2', '1323', 'Sud', '2', NULL),
('115', '2', '1020', 'Sud', '2', NULL),
('116', '2', '1004', 'Sud', '2', NULL),
('117', '2', '1025', 'Sud', '2', NULL),
('118', '2', '1164', 'Sud', '2', NULL),
('119', '2', '1035', 'Sud', '2', NULL),
('120', '3', '646', 'Est', '3', NULL),
('121', '3', '710', 'Est', '3', NULL),
('122', '3', '699', 'Est', '3', NULL),
('123', '3', '520', 'Est', '3', NULL),
('124', '3', '620', 'Est', '3', NULL),
('125', '3', '676', 'Est', '3', NULL),
('126', '3', '612', 'Est', '3', NULL),
('127', '3', '709', 'Est', '3', NULL),
('128', '3', '736', 'Est', '3', NULL),
('129', '3', '542', 'Est', '3', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `cod_Client` int(11) NOT NULL,
  `prenom_Client` varchar(50) COLLATE utf8_bin NOT NULL,
  `adress_Client` varchar(50) COLLATE utf8_bin NOT NULL,
  `tele_Client` varchar(50) COLLATE utf8_bin NOT NULL,
  `nationalite` varchar(50) COLLATE utf8_bin NOT NULL,
  `num_Passe` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `num_Reservation` int(11) NOT NULL,
  `date_Reservation` varchar(50) COLLATE utf8_bin NOT NULL,
  `num_Chamb` varchar(50) COLLATE utf8_bin NOT NULL,
  `date_Entree` varchar(50) COLLATE utf8_bin NOT NULL,
  `date_Sortie` varchar(50) COLLATE utf8_bin NOT NULL,
  `cod_Client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `mot_De_Passe` varchar(150) COLLATE utf8_bin NOT NULL,
  `cod_Client` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`code_Categorie`),
  ADD KEY `num_chamb` (`num_Chamb`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`num_Chamb`),
  ADD KEY `Num_reservation` (`num_Reservation`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`cod_Client`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`num_Reservation`),
  ADD KEY `cod_Client` (`cod_Client`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`login`),
  ADD UNIQUE KEY `cod_Client` (`cod_Client`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `cod_Client` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `num_Reservation` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `categorie_ibfk_1` FOREIGN KEY (`num_Chamb`) REFERENCES `chambre` (`num_Chamb`);

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `chambre_ibfk_1` FOREIGN KEY (`num_Reservation`) REFERENCES `reservation` (`Num_reservation`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`cod_Client`) REFERENCES `client` (`cod_Client`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`cod_Client`) REFERENCES `client` (`cod_Client`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
