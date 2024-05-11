-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 11 mai 2024 à 17:07
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
  `id_questions` int(11) NOT NULL,
  `correct_answer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `answers`
--

INSERT INTO `answers` (`id_answers`, `answer`, `id_questions`, `correct_answer`) VALUES
(1, 'Jupiter', 1, 1),
(2, 'Mars', 1, 0),
(3, 'Neptune', 1, 0),
(10, 'Earth', 2, 0),
(11, 'Jupiter', 2, 1),
(12, 'Mars', 2, 0),
(16, 'Mercury', 3, 0),
(17, 'Uranus', 3, 0),
(18, 'Saturn', 3, 1),
(22, 'Neptune', 4, 0),
(23, 'Venus', 4, 0),
(24, 'Mercury', 4, 1),
(28, 'Mars', 5, 0),
(29, 'Jupiter', 5, 0),
(30, 'Venus', 5, 1),
(34, 'Jupiter', 6, 0),
(35, 'Uranus', 6, 1),
(36, 'Neptune', 6, 0),
(40, 'Earth', 7, 0),
(41, 'Saturn', 7, 1),
(42, 'Mars', 7, 0),
(46, 'Mars', 8, 0),
(47, 'Uranus', 8, 1),
(48, 'Mercury', 8, 0),
(52, 'Neptune', 9, 1),
(53, 'Jupiter', 9, 0),
(54, 'Mars', 9, 0),
(55, 'Earth', 10, 0),
(56, 'Mars', 10, 1),
(57, 'Venus', 10, 0);

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id_questions` int(11) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `id_tests` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id_questions`, `category`, `question`, `id_tests`) VALUES
(1, 'Astronomy', 'Which planet is known as the \"Giant Planet\"?', 1),
(2, 'Astronomy', 'What is the largest planet in our solar system?', 1),
(3, 'Astronomy', 'Which planet is famous for its spectacular rings?', 1),
(4, 'Astronomy', 'Which planet is closest to the Sun?', 1),
(5, 'Astronomy', 'Which planet is often called Earths sister planet?', 1),
(6, 'Astronomy', 'What is the coldest planet in our solar system?', 1),
(7, 'Astronomy', 'Which planet has the most moons in our solar system?', 1),
(8, 'Astronomy', 'Which planet is known for its distinct blue color?', 1),
(9, 'Astronomy', 'Which planet is nicknamed the \"Ice Giant\"?', 1),
(10, 'Astronomy', 'Which planet in our solar system is known as the \"Red Planet\"?', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tests`
--

CREATE TABLE `tests` (
  `id_tests` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` int(255) NOT NULL,
  `description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tests`
--

INSERT INTO `tests` (`id_tests`, `name`, `number`, `description`) VALUES
(1, 'Celestial Bodies Quiz', 1, 'Embark on a cosmic journey through the \"Celestial Bodies Quiz\" and explore the wonders of our solar system! Test your knowledge of planets, moons, and other celestial phenomena with this captivating quiz. From the fiery surface of the Sun to the icy depths of Neptune, each question offers a glimpse into the mysteries of space. Whether you\'re a seasoned astronomer or an aspiring stargazer, challenge yourself and uncover the secrets of the cosmos in this stellar quiz!'),
(2, 'Literary Legends Quiz', 2, 'dive into the enchanting world of literature with the \"Literary Legends Quiz\"! Explore the timeless creations of renowned authors and their unforgettable masterpieces. From classic novels to iconic poems, this quiz will challenge your knowledge of literary history. Whether you are a bookworm or just beginning your literary journey, embark on this adventure and discover the magic woven within the pages of these celebrated works.');

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
  ADD PRIMARY KEY (`id_questions`),
  ADD KEY `id_tests` (`id_tests`);

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
  MODIFY `id_answers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id_questions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `tests`
--
ALTER TABLE `tests`
  MODIFY `id_tests` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- Contraintes pour la table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`id_tests`) REFERENCES `tests` (`id_tests`);

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
