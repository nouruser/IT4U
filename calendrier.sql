-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 01 fév. 2023 à 05:52
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

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
-- Structure de la table `calendrier`
--

CREATE TABLE `calendrier` (
  `idCalendrier` int(20) NOT NULL,
  `nomFormation` varchar(50) NOT NULL,
  `nomFormateur` varchar(50) NOT NULL,
  `heure` time NOT NULL,
  `lieu` varchar(150) NOT NULL,
  `dateFormation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `calendrier`
--

INSERT INTO `calendrier` (`idCalendrier`, `nomFormation`, `nomFormateur`, `heure`, `lieu`, `dateFormation`) VALUES
(1, 'Temporibus odit anim', 'Vel excepturi recusa', '22:54:00', 'Voluptatem cupidatat', '2005-05-14'),
(2, 'Magnam vel aliqua B', 'Esse autem perspicia', '21:17:00', 'Veritatis totam plac', '1973-10-11'),
(3, 'Iure deserunt cupida', 'Qui culpa ipsam atq', '05:14:00', 'Nihil quibusdam pari', '1972-04-28'),
(4, 'Quidem est nesciunt', 'Iure aperiam esse qu', '02:57:00', 'Suscipit vitae Nam v', '2001-09-18'),
(5, 'Id ad aut qui illo', 'Eum praesentium ulla', '18:09:00', 'Ut pariatur Ducimus', '1977-11-13'),
(6, 'Beatae unde est mini', 'Nostrud modi aute fa', '15:00:00', 'Quasi ad qui consequ', '2014-07-15'),
(7, 'Sunt quia recusandae', 'Dolores nihil aliqua', '14:43:00', 'Itaque est veritatis', '2005-08-26'),
(8, 'Ut animi ut recusan', 'Iusto vel aliquam it', '02:07:00', 'Temporibus irure rep', '2022-07-08'),
(9, 'Quibusdam ipsum tota', 'Vitae omnis est repr', '15:48:00', 'Eligendi nobis error', '1974-01-29'),
(10, 'Dolorem enim sunt es', 'Eu modi at veritatis', '01:26:00', 'Quo non culpa deleni', '1978-04-27'),
(11, 'Fugiat qui molestiae', 'Quibusdam voluptatem', '08:13:00', 'Itaque nulla sit qui', '1973-12-21'),
(12, 'Consequatur et debi', 'Est est officiis do', '11:40:00', 'Illo et voluptas et ', '2011-10-20'),
(13, 'Veritatis temporibus', 'Nesciunt dicta nequ', '02:47:00', 'Non quos quam quo re', '2020-12-01'),
(14, '', '', '00:00:00', '', '0000-00-00'),
(15, 'Laborum quidem omnis', 'A vero temporibus ne', '08:02:00', 'Harum labore a maxim', '2017-04-27'),
(16, 'A qui labore culpa ', 'Qui cumque velit eu', '06:04:00', 'Qui incididunt vitae', '2000-10-19'),
(17, 'Eum repellendus Fug', 'Sit debitis eos et ', '13:29:00', 'Possimus nostrum im', '1973-11-20'),
(18, 'gcg', 'vv', '00:00:00', '', '0000-00-00'),
(19, 'Rerum non velit qui', 'Perferendis et corpo', '16:06:00', 'Eum accusamus incidi', '1987-12-13'),
(20, 'Libero recusandae I', 'Assumenda adipisicin', '00:58:00', 'Voluptas commodo ill', '1976-04-23'),
(21, 'Velit culpa et in e', 'Sed dolor omnis nisi', '18:58:00', 'Et omnis soluta qui ', '2003-10-03'),
(22, 'Minima ullamco magna', 'Consectetur sunt et', '12:29:00', 'Necessitatibus aut f', '0000-00-00'),
(23, 'Consectetur officia ', 'Placeat qui totam r', '09:49:00', 'Omnis ullam sunt to', 'Wed Feb 01 2023'),
(24, 'Architecto possimus', 'Sunt eiusmod labori', '14:03:00', 'Minus magna culpa q', 'Wed Feb 08 2023'),
(25, 'Quos est nisi iste ', 'Sint suscipit ea di', '18:54:00', 'Ea voluptas vitae qu', 'Wed Feb 08 2023'),
(26, 'Sed beatae ut velit', 'Inventore culpa atqu', '20:14:00', 'Exercitationem conse', 'Wed Feb 08 2023'),
(27, 'Illo rem velit nost', 'Dolorem aliqua Temp', '02:27:00', 'Maiores est do modi ', 'Wed Feb 08 2023'),
(28, 'Similique dicta dolo', 'Veritatis id magnam ', '00:00:00', 'Quaerat mollitia com', 'Wed Feb 01 2023'),
(29, 'Amet laboriosam of', 'Quia veniam dolore ', '08:06:00', 'Duis nesciunt ad vo', 'Wed Feb 01 2023'),
(30, 'Pariatur Voluptatem', 'Veniam ipsum et re', '05:36:00', 'Aut non tempora assu', 'Wed Feb 01 2023'),
(31, 'Delectus eiusmod ni', 'Consequatur molestia', '16:46:00', 'Laudantium eu cupid', 'Wed Feb 01 2023'),
(32, 'Delectus eiusmod ni', 'Consequatur molestia', '16:46:00', 'Laudantium eu cupid', 'Wed Feb 01 2023'),
(33, 'Aliquam sunt laboru', 'Ad expedita ex ut co', '12:03:00', 'Quidem quia accusamu', 'Wed Feb 08 2023'),
(34, 'Sit nemo duis dolor ', 'Ullamco sunt volupt', '01:40:00', 'Omnis in quidem est ', 'Wed Feb 01 2023'),
(35, 'Animi et vitae ea e', 'Facilis magni tenetu', '11:24:00', 'Non iure repudiandae', 'Wed Feb 08 2023'),
(36, 'Duis maxime irure ex', 'Nulla impedit occae', '20:45:00', 'Fugiat odit qui aliq', 'Wed Feb 08 2023'),
(37, 'Ullamco optio aute ', 'Quo ut nemo ut excep', '22:15:00', 'Dolor ad debitis min', 'Wed Feb 08 2023'),
(38, 'Qui dolorem cumque e', 'Adipisicing id quis ', '09:32:00', 'Laboris velit exerci', 'Wed Feb 01 2023'),
(39, 'Sed a est voluptas ', 'Amet eaque ipsum i', '12:48:00', 'Corrupti incidunt ', 'Wed Feb 01 2023'),
(40, 'Voluptatum natus imp', 'Sunt ea facilis aliq', '19:42:00', 'Incidunt qui assume', 'Wed Feb 01 2023'),
(41, 'Est cupidatat iure ', 'Rerum occaecat dolor', '00:51:00', 'Voluptatum sit eu b', 'Mon Feb 06 2023'),
(42, 'Excepturi ab incidun', 'Adipisicing eum culp', '02:46:00', 'Animi modi voluptat', 'Wed Feb 01 2023'),
(43, 'Reprehenderit tenet', 'Occaecat distinctio', '04:17:00', 'Sed veniam eligendi', 'Wed Feb 01 2023'),
(44, '', '', '00:00:00', '', ''),
(45, 'Architecto voluptate', 'Non consequuntur vel', '04:46:00', 'In amet laboris vol', 'Wed Feb 08 2023'),
(46, 'Magni magnam sed nob', 'Et dolor ut eu eveni', '14:37:00', 'Aliquid voluptas qui', 'Wed Feb 08 2023'),
(47, 'Ullamco hic culpa at', 'Sit enim incididunt', '01:20:00', 'Sed numquam totam no', 'Wed Feb 01 2023'),
(48, 'Incididunt saepe con', 'Nulla ut perspiciati', '07:33:00', 'Do qui magnam duis i', 'Wed Feb 08 2023'),
(49, 'Aut iure iure eaque ', 'Et tempore nobis al', '17:31:00', 'Esse voluptatibus im', 'Wed Feb 01 2023'),
(50, 'Officia perspiciatis', 'Asperiores iste quae', '13:51:00', 'Omnis quidem quia ne', 'Wed Feb 08 2023'),
(51, 'Sint qui quam distin', 'Quasi corporis accus', '16:33:00', 'Deleniti ut quidem a', 'Wed Feb 01 2023');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `calendrier`
--
ALTER TABLE `calendrier`
  ADD PRIMARY KEY (`idCalendrier`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `calendrier`
--
ALTER TABLE `calendrier`
  MODIFY `idCalendrier` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
