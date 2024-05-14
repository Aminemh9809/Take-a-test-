-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 14 mai 2024 à 19:27
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
(57, 'Venus', 10, 0),
(61, 'William Shakespeare', 11, 1),
(62, 'F. Scott Fitzgerald', 11, 0),
(63, 'Ernest Hemingway', 11, 0),
(64, 'Harper Lee', 12, 1),
(65, 'J.D. Salinger', 12, 0),
(66, 'George Orwell', 12, 0),
(67, 'Emily Dickinson', 13, 0),
(68, 'Edgar Allan Poe', 13, 1),
(69, 'Walt Whitman', 13, 0),
(70, 'George Orwell', 14, 1),
(71, 'Aldous Huxley', 14, 0),
(72, 'Ray Bradbury', 14, 0),
(73, 'Agatha Christie', 15, 0),
(74, 'Arthur Conan Doyle', 15, 1),
(75, 'Mark Twain', 15, 0),
(76, 'John Keats', 16, 0),
(77, 'William Wordsworth', 16, 0),
(78, 'John Milton', 16, 1),
(79, 'J.K. Rowling', 17, 0),
(80, 'J.D. Salinger', 17, 1),
(81, 'Harper Lee', 17, 0),
(82, 'Ernest Hemingway', 18, 0),
(83, 'F. Scott Fitzgerald', 18, 1),
(84, 'Mark Twain', 18, 0),
(85, 'Herman Melville', 19, 1),
(86, 'Emily Dickinson', 19, 0),
(87, 'Jane Austen', 19, 0),
(88, 'J.R.R. Tolkien', 20, 0),
(89, 'Charles Dickens', 20, 0),
(90, 'Mark Twain', 20, 1),
(91, 'Hyper Text Markup Language', 21, 1),
(92, 'Hyperlinks and Text Markup Language', 21, 0),
(93, 'Home Tool Markup Language', 21, 0),
(94, '16', 22, 0),
(95, '11', 22, 1),
(96, '10', 22, 0),
(97, 'Python', 23, 0),
(98, 'Java', 23, 0),
(99, 'JavaScript', 23, 1),
(100, 'Creating dynamic and interactive web pages', 24, 0),
(101, 'Defining the structure of web pages', 24, 0),
(102, 'Styling the appearance of web pages', 24, 1),
(103, 'Queue', 25, 0),
(104, 'Stack', 25, 1),
(105, 'Linked List', 25, 0),
(106, 'Structured Language', 26, 0),
(107, 'Sequential Language', 26, 0),
(108, 'Structured Query Language', 26, 1),
(109, 'Integrated Development Environment', 27, 1),
(110, 'Interactive Development Environment', 27, 0),
(111, 'Integrated Design Environment', 27, 0),
(112, 'Java', 28, 0),
(113, 'Python', 28, 1),
(114, 'C++', 28, 0),
(115, 'Hyper Transfer Protocol', 29, 0),
(116, 'Hyper Text Transfer Protocol', 29, 1),
(117, 'Hyper Text Transfer Process', 29, 0),
(118, 'Application Programming Interface', 30, 1),
(119, 'Application Process Interface', 30, 0),
(120, 'Application Program Interface', 30, 0);

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
(10, 'Astronomy', 'Which planet in our solar system is known as the \"Red Planet\"?', 1),
(11, 'Literature', 'Which author penned the famous play \"Romeo and Juliet\"?', 2),
(12, 'Literature', 'Who is the author of \"To Kill a Mockingbird\"?', 2),
(13, 'Literature', 'Which poet wrote \"The Raven\"?', 2),
(14, 'Literature', 'Who is the author of \"1984\"?', 2),
(15, 'Literature', 'Which writer created the character Sherlock Holmes?', 2),
(16, 'Literature', 'Who wrote the epic poem \"Paradise Lost\"?', 2),
(17, 'Literature', 'Which author is known for \"The Catcher in the Rye\"?', 2),
(18, 'Literature', 'Which author wrote \"The Great Gatsby\"?', 2),
(19, 'Literature', 'Who is the author of \"Moby-Dick\"?', 2),
(20, 'Literature', 'Which author wrote \"The Adventures of Tom Sawyer\"?', 2),
(21, 'Programming', 'What does HTML stand for?', 3),
(22, 'Programming', 'What is the output of the following Python code snippet? Print(5 + 3 * 2)', 3),
(23, 'Programming', 'Which programming language is commonly used for web development?', 3),
(24, 'Programming', 'What is the purpose of CSS?', 3),
(25, 'Programming', 'Which data structure follows the Last In, First Out (LIFO) principle?', 3),
(26, 'Programming', 'What does SQL stand for?', 3),
(27, 'Programming', 'What does IDE stand for?', 3),
(28, 'Programming', 'Which programming language is known for its use in data analysis and machine learning?', 3),
(29, 'Programming', 'What does HTTP stand for?', 3),
(30, 'Programming', 'What does API stand for?', 3);

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
(1, 'Celestial Bodies Quiz', 1, 'Embark on a cosmic journey through the \"Celestial Bodies Quiz\" and explore the wonders of our solar system!.'),
(2, 'Literary Legends Quiz', 2, 'dive into the enchanting world of literature with the \"Literary Legends Quiz\"!.'),
(3, 'Programming Quiz', 3, 'Embark on a journey into the realm of programming with the \"Programming Test\"! Test your knowledge of programming languages, concepts, and technologies with this comprehensive quiz.');

-- --------------------------------------------------------

--
-- Structure de la table `tests_have_answers`
--

CREATE TABLE `tests_have_answers` (
  `id_tests` int(11) NOT NULL,
  `id_answers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tests_have_answers`
--

INSERT INTO `tests_have_answers` (`id_tests`, `id_answers`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 10),
(1, 11),
(1, 12),
(1, 16),
(1, 17),
(1, 18),
(1, 22),
(1, 23),
(1, 24),
(1, 28),
(1, 29),
(1, 30),
(1, 34),
(1, 35),
(1, 36),
(1, 40),
(1, 41),
(1, 42),
(1, 46),
(1, 47),
(1, 48),
(1, 52),
(1, 53),
(1, 54),
(1, 55),
(1, 56),
(1, 57),
(2, 61),
(2, 62),
(2, 63),
(2, 64),
(2, 65),
(2, 66),
(2, 67),
(2, 68),
(2, 69),
(2, 70),
(2, 71),
(2, 72),
(2, 73),
(2, 74),
(2, 75),
(2, 76),
(2, 77),
(2, 78),
(2, 79),
(2, 80),
(2, 81),
(2, 82),
(2, 83),
(2, 84),
(2, 85),
(2, 86),
(2, 87),
(2, 88),
(2, 89),
(2, 90),
(3, 91),
(3, 92),
(3, 93),
(3, 94),
(3, 95),
(3, 96),
(3, 97),
(3, 98),
(3, 99),
(3, 100),
(3, 101),
(3, 102),
(3, 103),
(3, 104),
(3, 105),
(3, 106),
(3, 107),
(3, 108),
(3, 109),
(3, 110),
(3, 111),
(3, 112),
(3, 113),
(3, 114),
(3, 115),
(3, 116),
(3, 117),
(3, 118),
(3, 119),
(3, 120);

-- --------------------------------------------------------

--
-- Structure de la table `tests_have_questions`
--

CREATE TABLE `tests_have_questions` (
  `id_tests` int(11) NOT NULL,
  `id_questions` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tests_have_questions`
--

INSERT INTO `tests_have_questions` (`id_tests`, `id_questions`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(2, 15),
(2, 16),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(3, 21),
(3, 22),
(3, 23),
(3, 24),
(3, 25),
(3, 26),
(3, 27),
(3, 28),
(3, 29),
(3, 30);

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
  MODIFY `id_answers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id_questions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `tests`
--
ALTER TABLE `tests`
  MODIFY `id_tests` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
