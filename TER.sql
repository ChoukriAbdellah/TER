-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 27 mars 2019 à 16:36
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `TER`
--

-- --------------------------------------------------------

--
-- Structure de la table `etude_sol`
--

CREATE TABLE `etude_sol` (
  `id` int(11) NOT NULL,
  `type_sol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etude_sol`
--

INSERT INTO `etude_sol` (`id`, `type_sol`) VALUES
(5, 'ARGILEUX');

-- --------------------------------------------------------

--
-- Structure de la table `gros_oeuvre`
--

CREATE TABLE `gros_oeuvre` (
  `id` int(11) NOT NULL,
  `id_etude_sol` int(11) DEFAULT NULL,
  `id_prep_terrain` int(11) DEFAULT NULL,
  `id_excavation` int(11) DEFAULT NULL,
  `id_fondations` int(11) DEFAULT NULL,
  `id_soubassement` int(11) DEFAULT NULL,
  `id_vrd` int(11) DEFAULT NULL,
  `id_plancher` int(11) DEFAULT NULL,
  `id_elevation` int(11) DEFAULT NULL,
  `id_charpente` int(11) DEFAULT NULL,
  `id_toiture` int(11) DEFAULT NULL,
  `id_menuiseries_ext` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `gros_oeuvre`
--

INSERT INTO `gros_oeuvre` (`id`, `id_etude_sol`, `id_prep_terrain`, `id_excavation`, `id_fondations`, `id_soubassement`, `id_vrd`, `id_plancher`, `id_elevation`, `id_charpente`, `id_toiture`, `id_menuiseries_ext`) VALUES
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20190311184326', '2019-03-20 18:22:33'),
('20190320182218', '2019-03-20 18:22:33'),
('20190325212809', '2019-03-25 21:28:58'),
('20190326154752', '2019-03-26 15:48:14'),
('20190327144924', '2019-03-27 14:49:34');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id` int(11) NOT NULL,
  `id_proprio` int(11) NOT NULL,
  `id_gros_oeuvre` int(11) NOT NULL,
  `id_second_oeuvre` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `id_proprio`, `id_gros_oeuvre`, `id_second_oeuvre`, `nom`) VALUES
(6, 5, 7, 7, 'Villa sur Montpellier'),
(7, 1, 8, 8, 'Villa Montpellier');

-- --------------------------------------------------------

--
-- Structure de la table `second_oeuvre`
--

CREATE TABLE `second_oeuvre` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `second_oeuvre`
--

INSERT INTO `second_oeuvre` (`id`) VALUES
(7),
(8);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `date_inscription` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `is_active`, `roles`, `date_inscription`) VALUES
(1, 'anaschetouan', '$2y$13$gzlfwUvz6k3FGTE4oAcsjeiFbuLZl4PZsZx1.XzUhMiMsLwo05dQS', 'anas.chetouan@gmail.com', 1, 'a:1:{i:0;s:9:\"ROLE_USER\";}', '0000-00-00 00:00:00'),
(2, 'cr7', '$2y$13$TQKjgNT8ixAoBAeXowqnfOIU841JFIVW6NAZ1WNwvLlIJQH36ojUS', 'cronaldo@gmail.com', 1, 'a:1:{i:0;s:9:\"ROLE_USER\";}', '0000-00-00 00:00:00'),
(4, 'test', '$2y$13$p0a4.oDf2cLtTitSFNbER.rs9WiIWf4r57h.bb7gP.uoiVo1ElQA6', 'test@mail.com', 1, 'a:1:{i:0;s:9:\"ROLE_USER\";}', '2019-03-26 16:49:28'),
(5, 'CHK-34', '$2y$13$CH7AEoG7v7Jv.VonXVv12Ox0Dn5/6ZKLh9V2/NWv73n9yHWMn785W', 'choukri@gmail.com', 1, 'a:1:{i:0;s:9:\"ROLE_USER\";}', '2019-03-26 18:57:39');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etude_sol`
--
ALTER TABLE `etude_sol`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gros_oeuvre`
--
ALTER TABLE `gros_oeuvre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `second_oeuvre`
--
ALTER TABLE `second_oeuvre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etude_sol`
--
ALTER TABLE `etude_sol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `gros_oeuvre`
--
ALTER TABLE `gros_oeuvre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `second_oeuvre`
--
ALTER TABLE `second_oeuvre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
