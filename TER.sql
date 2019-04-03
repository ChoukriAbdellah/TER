-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 03 avr. 2019 à 18:16
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.2.16

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
  `nb_mc` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `type_linteaux` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etude_sol`
--

CREATE TABLE `etude_sol` (
  `id` int(11) NOT NULL,
  `type_sol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `largeur_fouille` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fondation`
--

CREATE TABLE `fondation` (
  `id` int(11) NOT NULL,
  `sismicite` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `menuiserie`
--

CREATE TABLE `menuiserie` (
  `id` int(11) NOT NULL,
  `dimensions_bois_rouge` int(11) DEFAULT NULL,
  `dimensions_bois_hetre` int(11) DEFAULT NULL,
  `dimensions_aluminium` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('20190325212809', '2019-04-03 13:50:12'),
('20190326154752', '2019-04-03 13:50:12'),
('20190327144924', '2019-04-03 13:50:12'),
('20190401154204', '2019-04-03 13:50:12'),
('20190401205752', '2019-04-03 13:50:12'),
('20190401211857', '2019-04-03 13:50:12'),
('20190403141725', '2019-04-03 14:19:08'),
('20190403160613', '2019-04-03 16:12:47');

-- --------------------------------------------------------

--
-- Structure de la table `plancher`
--

CREATE TABLE `plancher` (
  `id` int(11) NOT NULL,
  `plancher_vs` double NOT NULL,
  `plancher_etage` double NOT NULL,
  `plancher_terrasse` double NOT NULL,
  `longueur_entrevous` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `position_terrain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(69, 'materiau_aluminium', 12);

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
(1, 1, 1, 1, 'Maison');

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
(1);

-- --------------------------------------------------------

--
-- Structure de la table `soubassement`
--

CREATE TABLE `soubassement` (
  `id` int(11) NOT NULL,
  `type_soubassement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `toiture`
--

CREATE TABLE `toiture` (
  `id` int(11) NOT NULL,
  `type_toit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, 'test', '$2y$13$i/fWgrfY4.MlcQI75W0fduLqu1Obot4UTDAeipzpa3qvYZDcupdpu', 'test@mail.com', 1, 'a:1:{i:0;s:9:\"ROLE_USER\";}', '0000-00-00 00:00:00'),
(4, 'symfony', '$2y$13$cDcmc8ZqAcCX2u2IdCNCH.cuEFyHaul2CpdhGdmjcdiPcaj5pRqKG', 'symfony@sensio.com', 1, 'a:1:{i:0;s:9:\"ROLE_USER\";}', '0000-00-00 00:00:00');

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
  `distance_telephonique` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `elevation`
--
ALTER TABLE `elevation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etude_sol`
--
ALTER TABLE `etude_sol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `excavation`
--
ALTER TABLE `excavation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fondation`
--
ALTER TABLE `fondation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gros_oeuvre`
--
ALTER TABLE `gros_oeuvre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `menuiserie`
--
ALTER TABLE `menuiserie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `plancher`
--
ALTER TABLE `plancher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `preparation_et_acces`
--
ALTER TABLE `preparation_et_acces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `prix`
--
ALTER TABLE `prix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `second_oeuvre`
--
ALTER TABLE `second_oeuvre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `soubassement`
--
ALTER TABLE `soubassement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `toiture`
--
ALTER TABLE `toiture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `vrd`
--
ALTER TABLE `vrd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
