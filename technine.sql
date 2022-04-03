-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 03 avr. 2022 à 18:21
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `technine`
--

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(3, '2021_09_04_152151_create_students_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `tel`, `image`, `created_at`, `updated_at`) VALUES
(3, 'muhamed ali', 'ali@gmail.com', '7584254002', NULL, '2022-04-03 07:24:37', '2022-04-03 12:35:36'),
(2, 'priya thomas', 'popo@yahoo.fr', '0214559662', NULL, '2022-04-03 06:55:33', '2022-04-03 06:55:33'),
(5, 'test', 'papa@gmail.com', '78547456457', NULL, '2022-04-03 12:11:48', '2022-04-03 12:11:48'),
(6, 'john malick', 'john@gmail.com', '7854012559', NULL, '2022-04-03 12:36:09', '2022-04-03 12:36:09');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'abdoul karim', 'test@gmail.com', '$2y$10$wSMzEAqz6/lN0nAmyJpE4O2bDfVN7POrd7nBbjZO.679wVzLw10b.', NULL, NULL, '2022-04-03 04:38:48', '2022-04-03 04:38:48'),
(2, 'pooja br', 'pooja@gmail.com', '$2y$10$xFuN6oJvvThq3NGp2LXgleIIAzYXh8nyBZ1FoJ8SLqIZUNuvM2iL2', NULL, NULL, '2022-04-03 12:04:22', '2022-04-03 12:04:22'),
(3, 'paul', 'paul@gmail.com', '$2y$10$7Q6zCT3k/BXP2LsqBH4o5uPBhResO8WuYuELOVdgRx.WZ8f3hWd.a', NULL, NULL, '2022-04-03 12:36:55', '2022-04-03 12:36:55');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
