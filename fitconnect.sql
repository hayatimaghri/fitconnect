-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 24 juin 2026 à 16:08
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fitconnect`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

CREATE TABLE `abonnement` (
  `Id_ABONNEMENT` int(11) NOT NULL,
  `type_abonnement` varchar(50) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `Id_ADHERENT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `abonnement`
--

INSERT INTO `abonnement` (`Id_ABONNEMENT`, `type_abonnement`, `date_debut`, `date_fin`, `Id_ADHERENT`) VALUES
(1, 'Mensuel', '2025-06-01', '2025-06-30', 1),
(2, 'Trimestriel', '2025-05-01', '2025-07-31', 2),
(3, 'Annuel', '2025-01-01', '2025-12-31', 3),
(4, 'Mensuel', '2025-06-15', '2025-07-14', 4);

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

CREATE TABLE `adherent` (
  `Id_ADHERENT` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_inscription` date NOT NULL,
  `Id_Salle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `adherent`
--

INSERT INTO `adherent` (`Id_ADHERENT`, `nom`, `prenom`, `telephone`, `email`, `date_inscription`, `Id_Salle`) VALUES
(1, 'El Amrani', 'Ahmed', '612345678', 'ahmed@gmail.com', '2025-01-10', 1),
(2, 'Benali', 'Sara', '623456789', 'sara@gmail.com', '2025-02-15', 2),
(3, 'Alaoui', 'Youssef', '634567890', 'youssef@gmail.com', '2025-03-20', 3),
(4, 'Karimi', 'Imane', '645678901', 'imane@gmail.com', '2025-04-05', 4);

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `Id_Salle` int(11) NOT NULL,
  `nom_salle` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`Id_Salle`, `nom_salle`, `ville`, `adresse`) VALUES
(1, 'FitConnect Centre', 'Casablanca', 'Bd Hassan II'),
(2, 'FitConnect Maarif', 'Casablanca', 'Rue Socrate'),
(3, 'FitConnect Agdal', 'Rabat', 'Av. Mohammed V'),
(4, 'FitConnect Gueliz', 'Marrakech', 'Bd Zerktouni');

-- --------------------------------------------------------

--
-- Structure de la table `seance`
--

CREATE TABLE `seance` (
  `Id_SEANCE` int(11) NOT NULL,
  `date_seance` date NOT NULL,
  `type_activite` varchar(50) NOT NULL,
  `duree` int(11) NOT NULL,
  `equipement` varchar(50) DEFAULT NULL,
  `Id_Salle` int(11) NOT NULL,
  `Id_ADHERENT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `seance`
--

INSERT INTO `seance` (`Id_SEANCE`, `date_seance`, `type_activite`, `duree`, `equipement`, `Id_Salle`, `Id_ADHERENT`) VALUES
(1, '2025-06-20', 'Musculation', 60, 'Halteres', 1, 1),
(2, '2025-06-21', 'Cardio', 45, 'Tapis de course', 2, 2),
(3, '2025-06-22', 'CrossFit', 90, 'Kettlebell', 3, 3),
(4, '2025-06-23', 'Yoga', 50, 'Tapis Yoga', 4, 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`Id_ABONNEMENT`),
  ADD KEY `Id_ADHERENT` (`Id_ADHERENT`);

--
-- Index pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD PRIMARY KEY (`Id_ADHERENT`),
  ADD KEY `Id_Salle` (`Id_Salle`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`Id_Salle`);

--
-- Index pour la table `seance`
--
ALTER TABLE `seance`
  ADD PRIMARY KEY (`Id_SEANCE`),
  ADD KEY `Id_Salle` (`Id_Salle`),
  ADD KEY `Id_ADHERENT` (`Id_ADHERENT`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnement`
--
ALTER TABLE `abonnement`
  MODIFY `Id_ABONNEMENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `adherent`
--
ALTER TABLE `adherent`
  MODIFY `Id_ADHERENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `Id_Salle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `seance`
--
ALTER TABLE `seance`
  MODIFY `Id_SEANCE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD CONSTRAINT `abonnement_ibfk_1` FOREIGN KEY (`Id_ADHERENT`) REFERENCES `adherent` (`Id_ADHERENT`);

--
-- Contraintes pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD CONSTRAINT `adherent_ibfk_1` FOREIGN KEY (`Id_Salle`) REFERENCES `salle` (`Id_Salle`);

--
-- Contraintes pour la table `seance`
--
ALTER TABLE `seance`
  ADD CONSTRAINT `seance_ibfk_1` FOREIGN KEY (`Id_Salle`) REFERENCES `salle` (`Id_Salle`),
  ADD CONSTRAINT `seance_ibfk_2` FOREIGN KEY (`Id_ADHERENT`) REFERENCES `adherent` (`Id_ADHERENT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
