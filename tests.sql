-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 27 mars 2024 à 18:47
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
-- Base de données : `tests`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `admins_create_tests`
--

CREATE TABLE `admins_create_tests` (
  `id_tests` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `answers`
--

CREATE TABLE `answers` (
  `id_answers` int(11) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `id_questions` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id_questions` int(11) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `question` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tests`
--

CREATE TABLE `tests` (
  `id_tests` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tests_have_answers`
--

CREATE TABLE `tests_have_answers` (
  `id_tests` int(11) NOT NULL,
  `id_answers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tests_have_questions`
--

CREATE TABLE `tests_have_questions` (
  `id_tests` int(11) NOT NULL,
  `id_questions` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `name`, `email`, `password`) VALUES
(1, 'amine', 'mahdiamine@amine.com', 'aze12345'),
(5, 'test', 'test@test.com', '$2y$10$PGWgbcDUdm9avU/6GMFLo.huXvLIy7ygf3wcneYfEU4qu.jKW/CoS');

-- --------------------------------------------------------

--
-- Structure de la table `users_can_take_a_test`
--

CREATE TABLE `users_can_take_a_test` (
  `id_tests` int(11) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users_choose_answers`
--

CREATE TABLE `users_choose_answers` (
  `id_answers` int(11) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `admins_create_tests`
--
ALTER TABLE `admins_create_tests`
  ADD PRIMARY KEY (`id_tests`,`id_admin`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Index pour la table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id_answers`),
  ADD KEY `id_questions` (`id_questions`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id_questions`);

--
-- Index pour la table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id_tests`);

--
-- Index pour la table `tests_have_answers`
--
ALTER TABLE `tests_have_answers`
  ADD PRIMARY KEY (`id_tests`,`id_answers`),
  ADD KEY `id_answers` (`id_answers`);

--
-- Index pour la table `tests_have_questions`
--
ALTER TABLE `tests_have_questions`
  ADD PRIMARY KEY (`id_tests`,`id_questions`),
  ADD KEY `id_questions` (`id_questions`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- Index pour la table `users_can_take_a_test`
--
ALTER TABLE `users_can_take_a_test`
  ADD PRIMARY KEY (`id_tests`,`id_users`),
  ADD KEY `id_users` (`id_users`);

--
-- Index pour la table `users_choose_answers`
--
ALTER TABLE `users_choose_answers`
  ADD PRIMARY KEY (`id_answers`,`id_users`),
  ADD KEY `id_users` (`id_users`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `answers`
--
ALTER TABLE `answers`
  MODIFY `id_answers` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id_questions` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tests`
--
ALTER TABLE `tests`
  MODIFY `id_tests` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `admins_create_tests`
--
ALTER TABLE `admins_create_tests`
  ADD CONSTRAINT `admins_create_tests_ibfk_1` FOREIGN KEY (`id_tests`) REFERENCES `tests` (`id_tests`),
  ADD CONSTRAINT `admins_create_tests_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Contraintes pour la table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`id_questions`) REFERENCES `questions` (`id_questions`);

--
-- Contraintes pour la table `tests_have_answers`
--
ALTER TABLE `tests_have_answers`
  ADD CONSTRAINT `tests_have_answers_ibfk_1` FOREIGN KEY (`id_tests`) REFERENCES `tests` (`id_tests`),
  ADD CONSTRAINT `tests_have_answers_ibfk_2` FOREIGN KEY (`id_answers`) REFERENCES `answers` (`id_answers`);

--
-- Contraintes pour la table `tests_have_questions`
--
ALTER TABLE `tests_have_questions`
  ADD CONSTRAINT `tests_have_questions_ibfk_1` FOREIGN KEY (`id_tests`) REFERENCES `tests` (`id_tests`),
  ADD CONSTRAINT `tests_have_questions_ibfk_2` FOREIGN KEY (`id_questions`) REFERENCES `questions` (`id_questions`);

--
-- Contraintes pour la table `users_can_take_a_test`
--
ALTER TABLE `users_can_take_a_test`
  ADD CONSTRAINT `users_can_take_a_test_ibfk_1` FOREIGN KEY (`id_tests`) REFERENCES `tests` (`id_tests`),
  ADD CONSTRAINT `users_can_take_a_test_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Contraintes pour la table `users_choose_answers`
--
ALTER TABLE `users_choose_answers`
  ADD CONSTRAINT `users_choose_answers_ibfk_1` FOREIGN KEY (`id_answers`) REFERENCES `answers` (`id_answers`),
  ADD CONSTRAINT `users_choose_answers_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
