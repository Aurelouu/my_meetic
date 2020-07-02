-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 31 jan. 2020 à 15:39
-- Version du serveur :  5.7.29-0ubuntu0.18.04.1
-- Version de PHP :  7.2.24-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `my_meetic`
--

-- --------------------------------------------------------

--
-- Structure de la table `fiche_loisir`
--

CREATE TABLE `fiche_loisir` (
  `personne` int(100) NOT NULL,
  `loisir` int(100) NOT NULL,
  `nom_loisir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `fiche_membre`
--

CREATE TABLE `fiche_membre` (
  `personne` int(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `date_inscription` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fiche_membre`
--

INSERT INTO `fiche_membre` (`personne`, `nom`, `prenom`, `ville`, `genre`, `mail`, `mot_de_passe`, `date_naissance`, `date_inscription`) VALUES
(1, 'Roth', 'Aurélie', 'Lyon', 'Feminin', 'aurelie.roth@epitech.eu', 'aurelie', '1998-04-14', '2020-01-21 00:00:00.000000'),
(21, 'grgrg', 'grgrgr', 'lyon', 'Feminin', 'test@gmail.com', '9cf95dacd226dcf43da376cdb6cbba7035218921', '2020-01-15', '2020-01-31 15:31:06.000000'),
(22, 'grgrg', 'grgrgr', 'lyon', 'Feminin', 'test@gmail.com', '9cf95dacd226dcf43da376cdb6cbba7035218921', '2020-01-15', '2020-01-31 15:31:07.000000');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `fiche_loisir`
--
ALTER TABLE `fiche_loisir`
  ADD PRIMARY KEY (`personne`,`loisir`);

--
-- Index pour la table `fiche_membre`
--
ALTER TABLE `fiche_membre`
  ADD PRIMARY KEY (`personne`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `fiche_loisir`
--
ALTER TABLE `fiche_loisir`
  MODIFY `personne` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fiche_membre`
--
ALTER TABLE `fiche_membre`
  MODIFY `personne` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
