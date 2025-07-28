-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 28 juil. 2025 à 13:40
-- Version du serveur : 8.0.30
-- Version de PHP : 8.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `stage_blogphp_2025`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `slug` varchar(255) NOT NULL,
  `introduction` text NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `image`, `title`, `slug`, `introduction`, `content`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Excepteur rerum quis', 'Excepteur rerum quis', 'In molestiae est qua', 'Perferendis id quis', '2025-07-24 14:24:00', NULL),
(2, NULL, 'Recusandae Pariatur', 'Recusandae Pariatur', 'Quis aut quo est qui', 'Et aperiam nemo magn', '2025-07-24 15:04:13', NULL),
(3, NULL, 'Minim esse eveniet', 'minim-esse-eveniet', 'Commodi maxime deser', 'Soluta excepteur qui', '2025-07-24 15:30:10', NULL),
(5, NULL, 'ffffffffffffffffffftryyyyyyyyy', 'ffffffffffffffffffftryyyyyyyyy', 'fhhhhhhhhhhhhh', 'hffffngjh', '2025-07-24 15:31:50', NULL),
(6, NULL, 'lele', 'lele', 'lllliool', 'loloollolloolo', '2025-07-24 15:33:42', NULL),
(11, NULL, 'Consequuntur velit s', 'consequuntur-velit-s', 'Sit corrupti volupt', 'Omnis nisi mollitia', '2025-07-28 13:22:42', NULL),
(12, NULL, 'Dolore eum sit dolo', 'dolore-eum-sit-dolo', 'Eius voluptatibus om', 'Quaerat consectetur', '2025-07-28 14:05:40', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('default','admin') NOT NULL DEFAULT 'default',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(10, 'admin', 'admin@gmail.com', '$2y$10$Nv/QU2SpivIr4x/hO7Cr4e.ekBmAjlxolDenzYOg9JLuoWe7KGtfK', 'admin', NULL, NULL),
(11, 'user', 'user@gmail.com', '$2y$10$YYj/lkMGC8/aRpN36ULbou//aMA3mlfZX1f0.iYZ03wTNmFvRxCaW', 'default', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
