-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 04 mai 2023 à 12:26
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `voitures`
--

-- --------------------------------------------------------

--
-- Structure de la table `carpark`
--

CREATE TABLE `carpark` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `carburant` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `carpark`
--

INSERT INTO `carpark` (`id`, `code`, `modele`, `carburant`) VALUES
(1, 873784, 'Nissan', 'essence'),
(3, 873785, 'Nissan', 'electrique'),
(4, 793136, 'Meriva', 'gpl'),
(5, 22, 'Opel', 'gpl');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `carpark`
--
ALTER TABLE `carpark`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `carpark`
--
ALTER TABLE `carpark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
