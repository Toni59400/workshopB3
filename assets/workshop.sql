-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 03 oct. 2023 à 17:07
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `workshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `avoirnote`
--

CREATE TABLE `avoirnote` (
  `id_services` int(11) NOT NULL,
  `id_note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom`) VALUES
(1, 'Prestation De Services');

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

CREATE TABLE `fonction` (
  `id_fonction` int(11) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id_note` int(11) NOT NULL,
  `valeur` int(11) DEFAULT NULL,
  `commentaire` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reserver`
--

CREATE TABLE `reserver` (
  `id_users` int(11) NOT NULL,
  `id_services` int(11) NOT NULL,
  `dateHeure` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id_services` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `cp` varchar(50) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `dispo` tinyint(1) DEFAULT NULL,
  `prix` varchar(50) DEFAULT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id_services`, `nom`, `cp`, `ville`, `adresse`, `dispo`, `prix`, `id_categorie`, `id_users`, `longitude`, `latitude`) VALUES
(47, 'Restaurant Le Gourmet', '62000', 'Arras', '12 Rue de la Taillerie', 1, '30', 1, 1, 2.77812, 50.2926),
(48, 'Hôtel Moderne', '62000', 'Arras', '1 Boulevard Faidherbe', 1, '80', 1, 1, 2.77966, 50.2922),
(49, 'Pharmacie du Beffroi', '62000', 'Arras', '18 Rue du Beffroi', 1, NULL, 1, 1, 2.77748, 50.2938),
(50, 'Cinéma Mega CGR', '62000', 'Arras', '3 Avenue Winston Churchill', 1, '12', 1, 1, 2.77624, 50.2923),
(51, 'Service 5', '62000', 'Arras', '5 Rue du Service', 1, '40', 1, 1, 2.7799, 50.2936),
(52, 'Service 6', '62000', 'Arras', '6 Rue des Services', 1, '25', 1, 1, 2.77916, 50.2921),
(53, 'Service 7', '62000', 'Arras', '7 Rue des Adresses', 1, '60', 1, 1, 2.78018, 50.2914),
(54, 'Service 8', '62000', 'Arras', '8 Rue des Numéros', 1, '35', 1, 1, 2.77582, 50.2939),
(55, 'Service 9', '62000', 'Arras', '9 Rue des Rues', 1, '20', 1, 1, 2.77742, 50.2918),
(56, 'Service 10', '62000', 'Arras', '10 Rue des Codes', 1, '45', 1, 1, 2.77854, 50.2918),
(57, 'Service 11', '62000', 'Arras', '11 Rue des Services', 1, '30', 1, 1, 2.77789, 50.2929),
(58, 'Service 12', '62000', 'Arras', '12 Rue des Adresses', 1, '55', 1, 1, 2.7795, 50.2931),
(59, 'Service 13', '62000', 'Arras', '13 Rue des Numéros', 1, '70', 1, 1, 2.77787, 50.2925),
(60, 'Service 14', '62000', 'Arras', '14 Rue des Rues', 1, '22', 1, 1, 2.77927, 50.2928),
(61, 'Service 15', '62000', 'Arras', '15 Rue des Services', 1, '18', 1, 1, 2.77922, 50.2915),
(62, 'Service 16', '62000', 'Arras', '16 Rue des Adresses', 1, '27', 1, 1, 2.77793, 50.2932),
(63, 'Service 17', '62000', 'Arras', '17 Rue des Numéros', 1, '38', 1, 1, 2.77935, 50.2922),
(64, 'Service 18', '62000', 'Arras', '18 Rue des Rues', 1, '50', 1, 1, 2.77679, 50.2924),
(65, 'Service 19', '62000', 'Arras', '19 Rue des Services', 1, '65', 1, 1, 2.7776, 50.2928),
(66, 'Service 20', '62000', 'Arras', '20 Rue des Adresses', 1, '28', 1, 1, 2.77896, 50.292),
(67, 'Service 31', '62000', 'Arras', 'Adresse 31', 1, '30', 1, 1, 2.80205, 50.284),
(68, 'Service 32', '62000', 'Arras', 'Adresse 32', 1, '40', 1, 1, 2.78644, 50.2753),
(69, 'Service 33', '62000', 'Arras', 'Adresse 33', 1, '25', 1, 1, 2.78695, 50.2717),
(70, 'Service 34', '62000', 'Arras', 'Adresse 34', 1, '12', 1, 1, 2.7821, 50.2716),
(71, 'Service 35', '62000', 'Arras', 'Adresse 35', 1, '30', 1, 1, 2.78118, 50.2841),
(72, 'Service 36', '62000', 'Arras', 'Adresse 36', 1, '45', 1, 1, 2.78458, 50.2862),
(73, 'Service 37', '62000', 'Arras', 'Adresse 37', 1, '60', 1, 1, 2.79439, 50.2856),
(74, 'Service 38', '62000', 'Arras', 'Adresse 38', 1, '35', 1, 1, 2.79668, 50.2772),
(75, 'Service 39', '62000', 'Arras', 'Adresse 39', 1, '20', 1, 1, 2.79461, 50.2767),
(76, 'Service 40', '62000', 'Arras', 'Adresse 40', 1, '45', 1, 1, 2.79077, 50.2797),
(77, 'Service 41', '62000', 'Arras', 'Adresse 41', 1, '30', 1, 1, 2.79614, 50.2808),
(78, 'Service 42', '62000', 'Arras', 'Adresse 42', 1, '55', 1, 1, 2.79996, 50.2783),
(79, 'Service 43', '62000', 'Arras', 'Adresse 43', 1, '70', 1, 1, 2.78915, 50.2745),
(80, 'Service 44', '62000', 'Arras', 'Adresse 44', 1, '22', 1, 1, 2.78847, 50.2731),
(81, 'Service 45', '62000', 'Arras', 'Adresse 45', 1, '18', 1, 1, 2.79201, 50.2707),
(82, 'Service 46', '62000', 'Arras', 'Adresse 46', 1, '27', 1, 1, 2.79965, 50.2758),
(83, 'Service 47', '62000', 'Arras', 'Adresse 47', 1, '38', 1, 1, 2.80286, 50.2801),
(84, 'Service 48', '62000', 'Arras', 'Adresse 48', 1, '50', 1, 1, 2.79129, 50.2822),
(85, 'Service 49', '62000', 'Arras', 'Adresse 49', 1, '65', 1, 1, 2.79908, 50.2797),
(86, 'Service 50', '62000', 'Arras', 'Adresse 50', 1, '28', 1, 1, 2.80144, 50.2814),
(87, 'Service 51', '62000', 'Arras', 'Adresse 51', 1, '42', 1, 1, 2.79419, 50.278),
(88, 'Service 52', '62000', 'Arras', 'Adresse 52', 1, '75', 1, 1, 2.79791, 50.2772),
(89, 'Service 53', '62000', 'Arras', 'Adresse 53', 1, '33', 1, 1, 2.79478, 50.2757);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pass` text NOT NULL,
  `verif` tinyint(1) DEFAULT NULL,
  `lastCo` datetime DEFAULT NULL,
  `registerAt` datetime DEFAULT NULL,
  `cp` varchar(50) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `mail`, `pass`, `verif`, `lastCo`, `registerAt`, `cp`, `ville`, `adresse`) VALUES
(1, 'nouvel_utilisateur@email.com', '$2y$10$IH6AUu6DN.3W6e/6q7vfLOt0n19FME1tsuLH693b8PjaMPqS1czYy', 1, '2023-10-03 09:03:22', '2023-10-03 09:03:22', '12345', 'VilleTest', '123 Rue de l\'Utilisateur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avoirnote`
--
ALTER TABLE `avoirnote`
  ADD PRIMARY KEY (`id_services`,`id_note`),
  ADD KEY `id_note` (`id_note`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `fonction`
--
ALTER TABLE `fonction`
  ADD PRIMARY KEY (`id_fonction`),
  ADD KEY `id_users` (`id_users`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id_note`);

--
-- Index pour la table `reserver`
--
ALTER TABLE `reserver`
  ADD PRIMARY KEY (`id_users`,`id_services`),
  ADD KEY `id_services` (`id_services`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id_services`),
  ADD KEY `id_categorie` (`id_categorie`),
  ADD KEY `id_users` (`id_users`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `fonction`
--
ALTER TABLE `fonction`
  MODIFY `id_fonction` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id_note` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id_services` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avoirnote`
--
ALTER TABLE `avoirnote`
  ADD CONSTRAINT `avoirnote_ibfk_1` FOREIGN KEY (`id_services`) REFERENCES `services` (`id_services`),
  ADD CONSTRAINT `avoirnote_ibfk_2` FOREIGN KEY (`id_note`) REFERENCES `note` (`id_note`);

--
-- Contraintes pour la table `fonction`
--
ALTER TABLE `fonction`
  ADD CONSTRAINT `fonction_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Contraintes pour la table `reserver`
--
ALTER TABLE `reserver`
  ADD CONSTRAINT `reserver_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`),
  ADD CONSTRAINT `reserver_ibfk_2` FOREIGN KEY (`id_services`) REFERENCES `services` (`id_services`);

--
-- Contraintes pour la table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`),
  ADD CONSTRAINT `services_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
