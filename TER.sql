-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  sam. 13 avr. 2019 à 20:57
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
-- Structure de la table `charpente`
--

CREATE TABLE `charpente` (
  `id` int(11) NOT NULL,
  `type_charpente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forme_charpente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nb_mc` double NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `charpente`
--

INSERT INTO `charpente` (`id`, `type_charpente`, `forme_charpente`, `nb_mc`, `prix`) VALUES
(1, 'METALLIQUE', 'L', 40, 0),
(2, 'METALLIQUE', 'L', 20, 0),
(3, 'charpente_metallique', 'charpente_4_pentes', 25, 1295);

-- --------------------------------------------------------

--
-- Structure de la table `elevation`
--

CREATE TABLE `elevation` (
  `id` int(11) NOT NULL,
  `nb_poutres` int(11) NOT NULL,
  `longueur_poutre` double NOT NULL,
  `taille_poutre` double NOT NULL,
  `type_materiaux_mur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hauteur_mur` double NOT NULL,
  `nombre_fenetre` int(11) NOT NULL,
  `type_fenetre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_linteaux` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `elevation`
--

INSERT INTO `elevation` (`id`, `nb_poutres`, `longueur_poutre`, `taille_poutre`, `type_materiaux_mur`, `hauteur_mur`, `nombre_fenetre`, `type_fenetre`, `type_linteaux`, `prix`) VALUES
(2, 10, 10, 10, 'Stuporeux', 10, 4, 'fgfdgfd', 'gdfgfdg', 0),
(3, 15, 10, 10, 'Bloc_pense', 10, 4, 'fenetre_battante', '3', 268);

-- --------------------------------------------------------

--
-- Structure de la table `etude_sol`
--

CREATE TABLE `etude_sol` (
  `id` int(11) NOT NULL,
  `type_sol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etude_sol`
--

INSERT INTO `etude_sol` (`id`, `type_sol`, `prix`) VALUES
(5, 'ARGILEUX', 1000),
(6, 'ARGILEUX', 1000),
(7, 'ARGILEUX', 1000),
(8, 'HUMIFERE', 1100);

-- --------------------------------------------------------

--
-- Structure de la table `excavation`
--

CREATE TABLE `excavation` (
  `id` int(11) NOT NULL,
  `type_terrassement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `materiel_utilise` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cout_sol_plan` double DEFAULT NULL,
  `murs_peripherique` double DEFAULT NULL,
  `murs_refont` double DEFAULT NULL,
  `profondeur_fouille` double DEFAULT NULL,
  `largeur_fouille` double DEFAULT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `excavation`
--

INSERT INTO `excavation` (`id`, `type_terrassement`, `materiel_utilise`, `cout_sol_plan`, `murs_peripherique`, `murs_refont`, `profondeur_fouille`, `largeur_fouille`, `prix`) VALUES
(1, 'FILANTE', NULL, NULL, 10, 10, 10, 10, 0),
(2, 'LONGRINES', NULL, NULL, 10, 10, 10, 10, 0),
(3, 'LONGRINES', NULL, NULL, 10, 10, 15, 15, 1615);

-- --------------------------------------------------------

--
-- Structure de la table `fondation`
--

CREATE TABLE `fondation` (
  `id` int(11) NOT NULL,
  `sismicite` tinyint(1) NOT NULL,
  `prix` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fondation`
--

INSERT INTO `fondation` (`id`, `sismicite`, `prix`) VALUES
(3, 1, 0);

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
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(9, 6, 1, 1, 3, 3, 1, 1, 2, 2, NULL, NULL),
(10, 7, NULL, 2, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL),
(11, 8, 2, 3, NULL, 4, 2, 3, 3, 3, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `menuiserie`
--

CREATE TABLE `menuiserie` (
  `id` int(11) NOT NULL,
  `dimensions_bois_rouge` int(11) DEFAULT NULL,
  `dimensions_bois_hetre` int(11) DEFAULT NULL,
  `dimensions_aluminium` int(11) DEFAULT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `menuiserie`
--

INSERT INTO `menuiserie` (`id`, `dimensions_bois_rouge`, `dimensions_bois_hetre`, `dimensions_aluminium`, `prix`) VALUES
(1, 15, 15, 15, 525);

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
('20190327144924', '2019-03-27 14:49:34'),
('20190401154204', '2019-04-01 15:42:12'),
('20190401205752', '2019-04-01 20:57:58'),
('20190401211857', '2019-04-01 21:19:01'),
('20190404121751', '2019-04-04 12:18:46'),
('20190404124857', '2019-04-04 12:49:09'),
('20190409091353', '2019-04-09 09:14:04'),
('20190411115111', '2019-04-11 11:51:28');

-- --------------------------------------------------------

--
-- Structure de la table `plancher`
--

CREATE TABLE `plancher` (
  `id` int(11) NOT NULL,
  `plancher_vs` double NOT NULL,
  `plancher_etage` double NOT NULL,
  `plancher_terrasse` double NOT NULL,
  `longueur_entrevous` double NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `plancher`
--

INSERT INTO `plancher` (`id`, `plancher_vs`, `plancher_etage`, `plancher_terrasse`, `longueur_entrevous`, `prix`) VALUES
(1, 20, 40, 10, 4, 0),
(2, 20, 20, 20, 4, 0),
(3, 25, 25, 25, 10, 4950);

-- --------------------------------------------------------

--
-- Structure de la table `preparation_et_acces`
--

CREATE TABLE `preparation_et_acces` (
  `id` int(11) NOT NULL,
  `nb_pins` int(11) NOT NULL,
  `nb_sapins` int(11) NOT NULL,
  `nb_bouleaux` int(11) NOT NULL,
  `nb_chenes` int(11) NOT NULL,
  `nb_erables` int(11) NOT NULL,
  `nb_frenes` int(11) NOT NULL,
  `nb_noyers` int(11) NOT NULL,
  `nb_autres` int(11) NOT NULL,
  `taille_pins` double NOT NULL,
  `taille_sapins` double NOT NULL,
  `taille_bouleaux` double NOT NULL,
  `taille_chenes` double NOT NULL,
  `taille_erables` double NOT NULL,
  `taille_frenes` double NOT NULL,
  `taille_noyers` double NOT NULL,
  `taille_autres` double NOT NULL,
  `position_terrain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `preparation_et_acces`
--

INSERT INTO `preparation_et_acces` (`id`, `nb_pins`, `nb_sapins`, `nb_bouleaux`, `nb_chenes`, `nb_erables`, `nb_frenes`, `nb_noyers`, `nb_autres`, `taille_pins`, `taille_sapins`, `taille_bouleaux`, `taille_chenes`, `taille_erables`, `taille_frenes`, `taille_noyers`, `taille_autres`, `position_terrain`, `prix`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'TERRAIN PLAT', 0),
(2, 15, 4, 0, 0, 0, 7, 0, 4, 10, 10, 15, 5, 0, 4, 0, 0, 'RELIEF MONTANT', 3982.45);

-- --------------------------------------------------------

--
-- Structure de la table `prix`
--

CREATE TABLE `prix` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `prix`
--

INSERT INTO `prix` (`id`, `nom`, `montant`) VALUES
(1, 'sol_argileux', 1000),
(2, 'sol_calcaire', 1200),
(3, 'sol_humifere', 1100),
(4, 'sol_limoneux', 1300),
(5, 'sol_sableux', 950),
(6, 'terrain_couper_pin', 25),
(7, 'terrain_couper_sapin', 26),
(8, 'terrain_couper_bouleaux', 15),
(9, 'terrain_couper_chene', 44),
(10, 'terrain_couper_erable', 27),
(11, 'terrain_couper_frene', 11),
(12, 'terrain_couper_noyer', 15),
(13, 'terrain_couper_autre', 20),
(14, 'terrain_acces', 500),
(15, 'terrain_emblai', 727.45),
(16, 'type_terrassement_semelle_filante', 250),
(17, 'type_terrassement_longrines', 300),
(18, 'tractopelle', 400),
(19, 'camion_benne', 350),
(20, 'betonniere', 420),
(21, 'mur_peripherique', 12),
(22, 'mur_refont', 10),
(23, 'profondeur_fouille', 42),
(24, 'largeur_fouille', 31),
(25, 'garage_radier', 95),
(26, 'beton_armee', 55),
(27, 'main_doeuvre', 8),
(28, 'coup_herisson', 90),
(29, 'agglo', 22),
(30, 'grille', 40),
(32, 'pompe_relevage', 300),
(33, 'fosse_septique', 350),
(34, 'micro_station', 500),
(35, 'etude_hydro', 800),
(36, 'reseau_electricite', 18),
(37, 'reseau_telephonique', 1000),
(38, 'plancher_VS', 50),
(39, 'plancher_etage', 75),
(40, 'plancher_tt', 55),
(41, 'poutrelle', 15),
(42, 'entrevous', 30),
(43, 'poutre_longueur', 2),
(44, 'poutre_largeur', 5),
(45, 'mur_agglo', 10),
(46, 'mur_brique', 13),
(47, 'mur_bloc_pense', 11),
(48, 'mur_stuporeux', 8.5),
(49, 'mur_bois', 6),
(50, 'fenetre_fixe', 40),
(51, 'fenetre_soufflet', 35),
(52, 'fenetre_battante', 27),
(53, 'linteau', 40),
(54, 'charpente_traditionnelle', 30),
(55, 'charpente_industrielle', 35),
(56, 'charpente_metallique', 50),
(57, 'charpente_maconnee', 45),
(58, 'charpente_2_pentes', 25),
(59, 'charpente_3_pentes', 35),
(60, 'charpente_4_pentes', 45),
(61, 'charpente_L', 60),
(62, 'tuile_classique', 15),
(63, 'tuile_moderne', 20),
(64, 'tuile_degre', 3),
(65, 'tuile_renforcement', 40),
(66, 'materiau_bois_rouge', 8),
(68, 'materiau_bois_hetre', 15),
(69, 'materiau_aluminium', 12),
(70, 'sismicite', 100),
(71, 'PENTE MONTANTE', 150),
(72, 'PENTE DESCENDANTE', 140),
(73, 'RELIEF MONTANT', 180),
(76, 'RELIEF DESCENDANT', 175),
(77, 'DENIVELE MONTANT', 170),
(78, 'DENIVELE DESCENDANT', 190),
(79, 'TERRAIN PLAT', 100),
(82, 'poutreCategotieA', 30),
(83, 'poutreCategotieB', 60),
(84, 'ventilation_simple_flux', 500),
(85, 'ventilation_double_flux', 1000),
(86, 'puits_climatique', 1200),
(87, 'Monobloc_mobile', 500),
(88, 'Monobloc_fixe', 800),
(89, 'Monobloc_windows', 600),
(90, 'Split_mobile', 1200),
(91, 'split_mural', 1000),
(92, 'Split_console', 1000),
(93, 'Split_gainable', 1500),
(94, 'regularisationChauffage', 300),
(95, 'eclairageAuto', 700),
(96, 'ouvertureFermetureAuto', 1500),
(97, 'autonomieEau', 800),
(98, 'detecteurEtAlarme', 1699);

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
(1, 1, 1, 1, 'Maison'),
(6, 5, 7, 7, 'Villa sur Montpellier'),
(7, 1, 8, 8, 'Villa Montpellier'),
(8, 2, 9, 9, 'Villa Turin'),
(9, 2, 10, 10, 'Villa Madrid'),
(10, 2, 11, 11, 'Test test');

-- --------------------------------------------------------

--
-- Structure de la table `second_oeuvre`
--

CREATE TABLE `second_oeuvre` (
  `id` int(11) NOT NULL,
  `id_enduit_facade` int(11) DEFAULT NULL,
  `id_isolation` int(11) DEFAULT NULL,
  `id_revetement` int(11) DEFAULT NULL,
  `id_cloisons` int(11) DEFAULT NULL,
  `id_evacuation` int(11) DEFAULT NULL,
  `id_menuiseries_int` int(11) DEFAULT NULL,
  `id_escaliers` int(11) DEFAULT NULL,
  `id_plomberie` int(11) DEFAULT NULL,
  `id_electricite` int(11) DEFAULT NULL,
  `id_ventilation` int(11) DEFAULT NULL,
  `id_climatisation` int(11) DEFAULT NULL,
  `id_domotique` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `second_oeuvre`
--

INSERT INTO `second_oeuvre` (`id`, `id_enduit_facade`, `id_isolation`, `id_revetement`, `id_cloisons`, `id_evacuation`, `id_menuiseries_int`, `id_escaliers`, `id_plomberie`, `id_electricite`, `id_ventilation`, `id_climatisation`, `id_domotique`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `soubassement`
--

CREATE TABLE `soubassement` (
  `id` int(11) NOT NULL,
  `type_soubassement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materiel_utilise` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prix` float NOT NULL,
  `tractopelle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camion_benne` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `betonniere` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `soubassement`
--

INSERT INTO `soubassement` (`id`, `type_soubassement`, `materiel_utilise`, `prix`, `tractopelle`, `camion_benne`, `betonniere`) VALUES
(4, 'sous-sol', NULL, 0, '1', '1', '');

-- --------------------------------------------------------

--
-- Structure de la table `toiture`
--

CREATE TABLE `toiture` (
  `id` int(11) NOT NULL,
  `type_toit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deg_pente` int(11) NOT NULL,
  `renforcement` tinyint(1) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `toiture`
--

INSERT INTO `toiture` (`id`, `type_toit`, `deg_pente`, `renforcement`, `prix`) VALUES
(1, 'CLASSIQUE', 15, 1, 100);

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

-- --------------------------------------------------------

--
-- Structure de la table `vrd`
--

CREATE TABLE `vrd` (
  `id` int(11) NOT NULL,
  `distance_eau_potable` double DEFAULT NULL,
  `pompe_relevage` tinyint(1) DEFAULT NULL,
  `fosse_septique` tinyint(1) DEFAULT NULL,
  `micro_station` tinyint(1) DEFAULT NULL,
  `etude_hydrogeologique` tinyint(1) DEFAULT NULL,
  `distance_electricite` double NOT NULL,
  `distance_telephonique` double NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `vrd`
--

INSERT INTO `vrd` (`id`, `distance_eau_potable`, `pompe_relevage`, `fosse_septique`, `micro_station`, `etude_hydrogeologique`, `distance_electricite`, `distance_telephonique`, `prix`) VALUES
(1, 10, 0, 1, 1, 0, 10, 10, 0),
(2, 50, 1, 0, 1, 1, 50, 50, 52500);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `charpente`
--
ALTER TABLE `charpente`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `elevation`
--
ALTER TABLE `elevation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etude_sol`
--
ALTER TABLE `etude_sol`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `excavation`
--
ALTER TABLE `excavation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fondation`
--
ALTER TABLE `fondation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gros_oeuvre`
--
ALTER TABLE `gros_oeuvre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menuiserie`
--
ALTER TABLE `menuiserie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `plancher`
--
ALTER TABLE `plancher`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `preparation_et_acces`
--
ALTER TABLE `preparation_et_acces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `prix`
--
ALTER TABLE `prix`
  ADD PRIMARY KEY (`id`);

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
-- Index pour la table `soubassement`
--
ALTER TABLE `soubassement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `toiture`
--
ALTER TABLE `toiture`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- Index pour la table `vrd`
--
ALTER TABLE `vrd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `charpente`
--
ALTER TABLE `charpente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `elevation`
--
ALTER TABLE `elevation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `etude_sol`
--
ALTER TABLE `etude_sol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `excavation`
--
ALTER TABLE `excavation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `fondation`
--
ALTER TABLE `fondation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `gros_oeuvre`
--
ALTER TABLE `gros_oeuvre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `menuiserie`
--
ALTER TABLE `menuiserie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `plancher`
--
ALTER TABLE `plancher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `preparation_et_acces`
--
ALTER TABLE `preparation_et_acces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `prix`
--
ALTER TABLE `prix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `second_oeuvre`
--
ALTER TABLE `second_oeuvre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `soubassement`
--
ALTER TABLE `soubassement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `toiture`
--
ALTER TABLE `toiture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `vrd`
--
ALTER TABLE `vrd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
