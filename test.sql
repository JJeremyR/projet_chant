-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 09 déc. 2021 à 16:35
-- Version du serveur :  8.0.27-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `song`
--

CREATE TABLE `song` (
  `id` int NOT NULL,
  `titre` varchar(255) NOT NULL,
  `fichier` varchar(255) NOT NULL,
  `conf` tinyint(1) NOT NULL,
  `sup` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `song`
--

INSERT INTO `song` (`id`, `titre`, `fichier`, `conf`, `sup`) VALUES
(1, 'Y\'en a des bien (Didier Super) { 2:08} [2004] \"FR\" | 100 % |', '', 0, 0),
(2, 'Je collectionne des canards (vivants) (Ultra Vomit) { 3:20} [2008-01-07] \"FR\" | 100 % |', '', 0, 0),
(3, 'The Day That Never Comes (Metallica) { 8:16}  [2009-03-30]  \"XW\"  | 100 % | ', '', 0, 0),
(4, 'Go Forth & Die (Dethklok) { NaN:NaN} [2009-09-29] \"US\" | 100 % |', '', 0, 0),
(5, 'C’est quand le bonheur (Cali) { 4:33} [2003-09-01] \"FR\" | 100 % |', '', 0, 0),
(6, 'Caravane (Raphaël) { 3:30} [2009] \"FR\" | 100 % |', '', 1, 0),
(8, 'Dummies (Tom MacDonald) { 3:16} [2021-09-03] \"US\" | 100 % |', '', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `conf` tinyint(1) NOT NULL,
  `sup` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `mail`, `mdp`, `conf`, `sup`) VALUES
(1, 'jeremy', 'regniez', 'jeremyregniez@aol.com', 'jjr', 0, 0),
(2, 'andy', 'capet', 'andycapet@mail.com', 'ac', 0, 0),
(3, 'guillaume', 'tourneur', 'guillaumetourneur@gmail.com', 'rclens', 1, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `song`
--
ALTER TABLE `song`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
