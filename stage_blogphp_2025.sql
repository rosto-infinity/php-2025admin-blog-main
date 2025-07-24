-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 19 juil. 2025 à 12:34
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
(1, 'Lutresse', 'lulu@gmail.com', '$2y$10$w2AHgIDRHiepVf2AdWCH9uFU.GIUrjTJ/yqSzvJY6PEVn/HAKwagu', 'default', NULL, NULL),
(2, 'eva', 'eva@gmail.com', '$2y$10$doFDHXtJXIH68jrxGViKkeKof2gSmt1BaEnsTYx18v3H4ifDyEtim', 'admin', NULL, NULL),
(3, 'user', 'user@gmail.com', '$2y$10$7VSPBaeK6g70RuuKh3.88eO/FlDNDInEmkcsCXclUtBeF59WBG4v2', 'default', NULL, NULL),
(4, 'ema', 'waffo@gmail.com', '$2y$10$vtXc9vQCCIFu9wtziGO.E.VLb3e2WqmbAvcMnWS/4r/3VAskTjeRu', 'default', NULL, NULL),
(5, 'uytt', 'lgggulu@gmail.com', '$2y$10$Hr2cJawCkXRfyZJKJyKd1OTrgjqSQ2.xuvwFQdeJMvxbDK1A1/Swi', 'default', NULL, NULL),
(6, 'lolo', 'lolo@gmail.com', '$2y$10$ho3uc4QS3OL15kovj99T3OKBrNZX7NXUn3rb/Cv5EIZZYOgNNqyIa', 'default', NULL, NULL),
(7, 'ev', 'ev@gmail.com', '$2y$10$TnMtoknCvycWOdzk3.V5kO9N9QNV1h.KNs3E9tpMc5PwshuLZCK92', 'default', NULL, NULL),
(8, 'user2', 'user2@gmail.com', '$2y$10$jIiODDvewISsjIefYRWvZeDhwUwC3gNrgK4md88udP7JweD1wBRyC', 'default', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
