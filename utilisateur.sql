-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 20 déc. 2022 à 17:28
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gformation`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `password1` varchar(50) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`nom`, `prenom`, `tel`, `email`, `password`, `password1`, `date`) VALUES
('Anim officia quia al', 'Quaerat officia qui ', '0000000000', 'kexelan@mailinator.com', '10', '10', '2022-12-20 17:25:48'),
('Esse qui molestiae ', 'Saepe maiores corpor', '0000000000', 'losileva@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '2022-12-20 17:05:28'),
('Eum quo iusto ducimu', 'Illo perferendis com', '0000000000', 'mypin@mailinator.com', '', '', '0000-00-00 00:00:00'),
('Provident aute eum ', 'Iste beatae amet eu', '+1 (509) 928-9646', 'sehol@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', NULL),
('Nostrud omnis quia h', 'Aliquid alias maxime', '+1 (996) 599-6099', 'sixa@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', NULL),
('Incidunt qui rerum ', 'Vel esse praesentiu', '0000000000', 'syla@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '2022-12-19 17:30:13'),
('Officia consequatur ', 'Incididunt deserunt ', '+1 (359) 934-6802', 'wehyjohy@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', NULL),
('kawtarita', 'Labore commodi sunt ', '+1 (468) 584-2541', 'xidaci@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '2022-12-19 18:37:55'),
('Explicabo In fugiat', 'Aut asperiores nobis', '0000000000', 'zylewabu@mailinator.com', '00', '00', '2022-12-19 15:36:19'),
('Non magna minus obca', 'Enim in voluptate co', '+1 (324) 385-2883', 'zypa@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
