-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2019 at 12:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TER`
--

-- --------------------------------------------------------

--
-- Table structure for table `charpente`
--

CREATE TABLE `charpente` (
  `id` int(11) NOT NULL,
  `type_charpente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forme_charpente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nb_mc` double NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `charpente`
--

INSERT INTO `charpente` (`id`, `type_charpente`, `forme_charpente`, `nb_mc`, `prix`) VALUES
(1, 'METALLIQUE', 'L', 40, 0),
(2, 'METALLIQUE', 'L', 20, 0),
(3, 'charpente_metallique', 'charpente_4_pentes', 25, 1295);

-- --------------------------------------------------------

--
-- Table structure for table `climatisation`
--

CREATE TABLE `climatisation` (
  `id` int(11) NOT NULL,
  `type_climatisation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `climatisation`
--

INSERT INTO `climatisation` (`id`, `type_climatisation`, `prix`) VALUES
(1, 'Monobloc_windows', 600),
(2, 'split_mural', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `cloison`
--

CREATE TABLE `cloison` (
  `id` int(11) NOT NULL,
  `prix` double NOT NULL,
  `cloisons_amovibles` double DEFAULT NULL,
  `cloisons_seches` double DEFAULT NULL,
  `cloisons_pieces_humides` double DEFAULT NULL,
  `cloisons_verre` double DEFAULT NULL,
  `cloisons_japonaises` double DEFAULT NULL,
  `claustra_interieur` double DEFAULT NULL,
  `cloisons_vitrees_style_atelier` double DEFAULT NULL,
  `cloisons_vegetales` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cloison`
--

INSERT INTO `cloison` (`id`, `prix`, `cloisons_amovibles`, `cloisons_seches`, `cloisons_pieces_humides`, `cloisons_verre`, `cloisons_japonaises`, `claustra_interieur`, `cloisons_vitrees_style_atelier`, `cloisons_vegetales`) VALUES
(4, 4180.05, 5, 14, 18, 17, 25, 0, 0, 0),
(5, 3451.35, 0, 8, 0, 20, 15, 0, 17, 0);

-- --------------------------------------------------------

--
-- Table structure for table `domotique`
--

CREATE TABLE `domotique` (
  `id` int(11) NOT NULL,
  `regularisation_chauffage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eclairage_auto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ouverture_fermeture_auto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `autonomie_eau` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prix` double NOT NULL,
  `detecteur_et_alarme` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `domotique`
--

INSERT INTO `domotique` (`id`, `regularisation_chauffage`, `eclairage_auto`, `ouverture_fermeture_auto`, `autonomie_eau`, `prix`, `detecteur_et_alarme`) VALUES
(1, '', '1', '1', '', 3899, '1'),
(2, '1', '', '', '1', 2799, '1');

-- --------------------------------------------------------

--
-- Table structure for table `electricite`
--

CREATE TABLE `electricite` (
  `id` int(11) NOT NULL,
  `prix` double NOT NULL,
  `nb_chauffage` int(11) NOT NULL,
  `nb_interrupteur` int(11) NOT NULL,
  `nb_sortie_lumieres` int(11) NOT NULL,
  `nb_prise_electrique` int(11) NOT NULL,
  `nb_volet_roulant` int(11) NOT NULL,
  `dimension_cable` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `electricite`
--

INSERT INTO `electricite` (`id`, `prix`, `nb_chauffage`, `nb_interrupteur`, `nb_sortie_lumieres`, `nb_prise_electrique`, `nb_volet_roulant`, `dimension_cable`) VALUES
(1, 5853, 2, 15, 8, 4, 10, 15),
(2, 7819, 5, 12, 7, 8, 7, 10);

-- --------------------------------------------------------

--
-- Table structure for table `elevation`
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
-- Dumping data for table `elevation`
--

INSERT INTO `elevation` (`id`, `nb_poutres`, `longueur_poutre`, `taille_poutre`, `type_materiaux_mur`, `hauteur_mur`, `nombre_fenetre`, `type_fenetre`, `type_linteaux`, `prix`) VALUES
(2, 10, 10, 10, 'Stuporeux', 10, 4, 'fgfdgfd', 'gdfgfdg', 0),
(3, 15, 10, 10, 'Bloc_pense', 10, 4, 'fenetre_battante', '3', 268);

-- --------------------------------------------------------

--
-- Table structure for table `enduit`
--

CREATE TABLE `enduit` (
  `id` int(11) NOT NULL,
  `nb_couches` int(11) NOT NULL,
  `surface` int(11) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enduit`
--

INSERT INTO `enduit` (`id`, `nb_couches`, `surface`, `prix`) VALUES
(1, 3, 25, 187),
(2, 3, 25, 187),
(3, 4, 120, 1200);

-- --------------------------------------------------------

--
-- Table structure for table `escaliers`
--

CREATE TABLE `escaliers` (
  `id` int(11) NOT NULL,
  `type_escalier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `materiaux` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dimensions` double NOT NULL,
  `prix` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `escaliers`
--

INSERT INTO `escaliers` (`id`, `type_escalier`, `materiaux`, `dimensions`, `prix`) VALUES
(1, 'DROIT', 'BOISTENDRE', 10, 510),
(2, 'DROIT', 'BOISTENDRE', 1445, 73695),
(3, 'HELIDOIDAL', 'BOISEXOTIQUE', 15, 1065);

-- --------------------------------------------------------

--
-- Table structure for table `etude_sol`
--

CREATE TABLE `etude_sol` (
  `id` int(11) NOT NULL,
  `type_sol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `etude_sol`
--

INSERT INTO `etude_sol` (`id`, `type_sol`, `prix`) VALUES
(5, 'ARGILEUX', 1000),
(6, 'ARGILEUX', 1000),
(7, 'ARGILEUX', 1000),
(8, 'HUMIFERE', 1100),
(11, 'HUMIFERE', 1100),
(12, 'ARGILEUX', 1000),
(13, 'CALCAIRE', 1200),
(14, 'CALCAIRE', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `evacuation_fumees`
--

CREATE TABLE `evacuation_fumees` (
  `id` int(11) NOT NULL,
  `materieau_utilise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_cheminee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `evacuation_fumees`
--

INSERT INTO `evacuation_fumees` (`id`, `materieau_utilise`, `forme`, `type_cheminee`, `prix`) VALUES
(2, 'CHEMINEE_CERAMIQUE', 'CHEMINEE_SUSPENDUE', 'CHEMINEE_4_FACES', 3310),
(3, 'CHEMINEE_CERAMIQUE', 'CHEMINEE_SUSPENDUE', 'CHEMINEE_PANORAMIQUE', 3360);

-- --------------------------------------------------------

--
-- Table structure for table `excavation`
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
-- Dumping data for table `excavation`
--

INSERT INTO `excavation` (`id`, `type_terrassement`, `materiel_utilise`, `cout_sol_plan`, `murs_peripherique`, `murs_refont`, `profondeur_fouille`, `largeur_fouille`, `prix`) VALUES
(1, 'FILANTE', NULL, NULL, 10, 10, 10, 10, 0),
(2, 'LONGRINES', NULL, NULL, 10, 10, 10, 10, 0),
(3, 'LONGRINES', NULL, NULL, 10, 10, 15, 15, 1615);

-- --------------------------------------------------------

--
-- Table structure for table `fondation`
--

CREATE TABLE `fondation` (
  `id` int(11) NOT NULL,
  `sismicite` tinyint(1) NOT NULL,
  `prix` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fondation`
--

INSERT INTO `fondation` (`id`, `sismicite`, `prix`) VALUES
(3, 1, 0),
(4, 1, 1380);

-- --------------------------------------------------------

--
-- Table structure for table `gros_oeuvre`
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
-- Dumping data for table `gros_oeuvre`
--

INSERT INTO `gros_oeuvre` (`id`, `id_etude_sol`, `id_prep_terrain`, `id_excavation`, `id_fondations`, `id_soubassement`, `id_vrd`, `id_plancher`, `id_elevation`, `id_charpente`, `id_toiture`, `id_menuiseries_ext`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(9, 6, 1, 1, 3, 5, 1, 1, 2, 2, 2, 2),
(10, 7, NULL, 2, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL),
(11, 8, 2, 3, 4, 4, 2, 3, 3, 3, 1, 1),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 11, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 12, 3, NULL, NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 13, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 14, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `isolation`
--

CREATE TABLE `isolation` (
  `id` int(11) NOT NULL,
  `surface_thermique` int(11) NOT NULL,
  `surface_phonique` int(11) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `isolation`
--

INSERT INTO `isolation` (`id`, `surface_thermique`, `surface_phonique`, `prix`) VALUES
(1, 25, 190, 125),
(2, 25, 190, 125),
(3, 25, 190, 1455),
(4, 50, 26, 432),
(5, 80, 70, 890);

-- --------------------------------------------------------

--
-- Table structure for table `menuiserie`
--

CREATE TABLE `menuiserie` (
  `id` int(11) NOT NULL,
  `dimensions_bois_rouge` int(11) NOT NULL,
  `dimensions_bois_hetre` int(11) NOT NULL,
  `dimensions_aluminium` int(11) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menuiserie`
--

INSERT INTO `menuiserie` (`id`, `dimensions_bois_rouge`, `dimensions_bois_hetre`, `dimensions_aluminium`, `prix`) VALUES
(1, 15, 15, 15, 525),
(2, 10, 20, 15, 560);

-- --------------------------------------------------------

--
-- Table structure for table `menuiseries_int`
--

CREATE TABLE `menuiseries_int` (
  `id` int(11) NOT NULL,
  `portes_pleines` int(11) NOT NULL,
  `portes_vitrees` int(11) NOT NULL,
  `portes_battantes` int(11) NOT NULL,
  `portes_coulissantes` int(11) NOT NULL,
  `portes_placard_pliantes` int(11) NOT NULL,
  `portes_placard_battantes` int(11) NOT NULL,
  `portes_placard_coulissantes` int(11) NOT NULL,
  `materieau_rampes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taille_rampes` double NOT NULL,
  `materieau_balustrades` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taille_balustrades` double NOT NULL,
  `prix` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menuiseries_int`
--

INSERT INTO `menuiseries_int` (`id`, `portes_pleines`, `portes_vitrees`, `portes_battantes`, `portes_coulissantes`, `portes_placard_pliantes`, `portes_placard_battantes`, `portes_placard_coulissantes`, `materieau_rampes`, `taille_rampes`, `materieau_balustrades`, `taille_balustrades`, `prix`) VALUES
(1, 4, 2, 1, 1, 0, 0, 4, 'RAMPE_CERAMIQUE', 12, 'BALUSTRADE_CERAMIQUE', 6, 6910),
(2, 1, 0, 5, 4, 4, 0, 0, 'RAMPE_MARBRE', 8, 'BALUSTRADE_MARBRE', 8, 7480);

-- --------------------------------------------------------

--
-- Table structure for table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migration_versions`
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
('20190411115111', '2019-04-11 11:51:28'),
('20190419135946', '2019-04-19 16:34:29'),
('20190419163540', '2019-04-19 16:35:44'),
('20190422201011', '2019-04-22 20:10:19'),
('20190422213152', '2019-04-22 21:31:55'),
('20190422215229', '2019-04-22 21:52:32'),
('20190422220302', '2019-04-22 22:03:04'),
('20190423143152', '2019-04-23 14:32:16'),
('20190423153031', '2019-04-23 15:30:40'),
('20190423154803', '2019-04-23 15:48:13'),
('20190423162427', '2019-04-23 16:24:35'),
('20190423170953', '2019-04-23 17:10:01'),
('20190424155034', '2019-04-26 15:33:40'),
('20190426152650', '2019-04-26 15:34:37'),
('20190426192516', '2019-04-26 19:25:25');

-- --------------------------------------------------------

--
-- Table structure for table `plancher`
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
-- Dumping data for table `plancher`
--

INSERT INTO `plancher` (`id`, `plancher_vs`, `plancher_etage`, `plancher_terrasse`, `longueur_entrevous`, `prix`) VALUES
(1, 20, 40, 10, 4, 0),
(2, 20, 20, 20, 4, 0),
(3, 25, 25, 25, 10, 4950);

-- --------------------------------------------------------

--
-- Table structure for table `plomberie`
--

CREATE TABLE `plomberie` (
  `id` int(11) NOT NULL,
  `nb_metre_tuyau` double NOT NULL,
  `type_tuyau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nb_robinets` int(11) NOT NULL,
  `nb_wc` int(11) NOT NULL,
  `type_chauffage_eau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_compteur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nb_baignoire` int(11) NOT NULL,
  `nb_douche` int(11) NOT NULL,
  `prix` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plomberie`
--

INSERT INTO `plomberie` (`id`, `nb_metre_tuyau`, `type_tuyau`, `nb_robinets`, `nb_wc`, `type_chauffage_eau`, `type_compteur`, `nb_baignoire`, `nb_douche`, `prix`) VALUES
(1, 10, 'CUIVRE', 3, 3, 'BALLONEAU', 'VOLUMETRIQUE', 1, 2, 7290),
(2, 10, 'ACIER', 3, 2, 'CHAUDIERE', 'VOLUMETRIQUE', 1, 3, 9390);

-- --------------------------------------------------------

--
-- Table structure for table `preparation_et_acces`
--

CREATE TABLE `preparation_et_acces` (
  `id` int(11) NOT NULL,
  `nb_pins` int(11) DEFAULT NULL,
  `nb_sapins` int(11) DEFAULT NULL,
  `nb_bouleaux` int(11) DEFAULT NULL,
  `nb_chenes` int(11) DEFAULT NULL,
  `nb_erables` int(11) DEFAULT NULL,
  `nb_frenes` int(11) DEFAULT NULL,
  `nb_noyers` int(11) DEFAULT NULL,
  `nb_autres` int(11) DEFAULT NULL,
  `taille_pins` double DEFAULT NULL,
  `taille_sapins` double DEFAULT NULL,
  `taille_bouleaux` double DEFAULT NULL,
  `taille_chenes` double DEFAULT NULL,
  `taille_erables` double DEFAULT NULL,
  `taille_frenes` double DEFAULT NULL,
  `taille_noyers` double DEFAULT NULL,
  `taille_autres` double DEFAULT NULL,
  `position_terrain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `preparation_et_acces`
--

INSERT INTO `preparation_et_acces` (`id`, `nb_pins`, `nb_sapins`, `nb_bouleaux`, `nb_chenes`, `nb_erables`, `nb_frenes`, `nb_noyers`, `nb_autres`, `taille_pins`, `taille_sapins`, `taille_bouleaux`, `taille_chenes`, `taille_erables`, `taille_frenes`, `taille_noyers`, `taille_autres`, `position_terrain`, `prix`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'TERRAIN PLAT', 0),
(2, 15, 4, 0, 0, 0, 7, 0, 4, 10, 10, 15, 5, 0, 4, 0, 0, 'RELIEF MONTANT', 3982.45),
(3, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PENTE MONTANTE', 3602.45),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 55, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'RELIEF MONTANT', 4077.45),
(5, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PENTE DESCENDANTE', 4097.45);

-- --------------------------------------------------------

--
-- Table structure for table `prix`
--

CREATE TABLE `prix` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prix`
--

INSERT INTO `prix` (`id`, `nom`, `montant`) VALUES
(1, 'ARGILEUX', 100),
(3, 'HUMIFERE', 1100),
(4, 'LIMONEUX', 1300),
(5, 'SABLEUX', 950),
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
(32, 'pompe_relevage', 3500),
(33, 'fosse_septique', 2890),
(34, 'micro_station', 1789),
(35, 'etude_hydro', 960),
(36, 'reseau_electricite', 18),
(37, 'reseau_telephonique', 25),
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
(82, 'poutreCategorieA', 30),
(83, 'poutreCategorieB', 60),
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
(98, 'detecteurEtAlarme', 1699),
(99, 'feraillage_sol_argileux', 100),
(100, 'feraillage_sol_calcaire', 125),
(101, 'feraillage_sol_humifere', 115),
(102, 'feraillage_sol_limoneux', 110),
(103, 'feraillage_sol_sableux', 90),
(104, 'escalier_droit', 1),
(105, 'escalier_droit', 1.2),
(106, 'escalier_helicoidal', 1),
(107, 'escalier_helicoidal', 1.3),
(108, 'escalier_tournant', 1.4),
(109, 'bois_tendre', 50),
(110, 'bois_exotique', 70),
(111, 'escalier_beton', 60),
(112, 'pvc', 7),
(113, 'cuivre', 9),
(114, 'acier', 9),
(115, 'chaudiere', 800),
(116, 'ballon_eau', 700),
(117, 'chauffe_eau', 700),
(118, 'compteur_vitesse', 100),
(119, 'compteur_volumetrique', 1500),
(120, 'baignoire', 1000),
(121, 'douche', 2000),
(122, 'tableau_electrique', 350),
(123, 'pose_tableau_electrique', 900),
(124, 'cable_electrique', 20),
(125, 'interrupteurs ', 15),
(126, 'pose_interrupteur', 78),
(127, 'prise_electrique', 5),
(128, 'pose_prise', 100),
(129, 'sortie_lumiere', 6),
(130, 'prise_de_terre', 700),
(131, 'electricien ', 40),
(132, 'chauffage_electrique', 800),
(133, 'compteur_electrique', 250),
(134, 'pose_chauffage', 250),
(135, 'volets_roulant', 100),
(136, 'cloisonsAmovibles', 40),
(137, 'cloisonsSeches', 35),
(138, 'cloisonsPiecesHumides', 45),
(139, 'cloisonsVerre', 45.9),
(140, 'cloisonsJaponaises', 75.99),
(141, 'claustraInterieur', 39.95),
(142, 'cloisonsVitreesStyleAtelier', 65.5),
(143, 'cloisonsVegetales', 37.5),
(144, 'CHEMINEE_BOIS', 1200),
(145, 'CHEMINEE_PIERRE', 800),
(146, 'CHEMINEE_MARBRE', 3200),
(147, 'CHEMINEE_BRIQUE', 1400),
(148, 'CHEMINEE_BETON', 1500),
(149, 'CHEMINEE_METAL', 1890),
(150, 'CHEMINEE_CERAMIQUE', 2480),
(151, 'CHEMINEE_CENTRALE', 200),
(152, 'CHEMINEE_MURALE', 350),
(153, 'CHEMINEE_SUSPENDUE', 180),
(154, 'CHEMINEE_ANGLE', 199),
(155, 'CHEMINEE_DOUBLE', 450),
(156, 'CHEMINEE_3_FACES', 600),
(157, 'CHEMINEE_4_FACES', 650),
(158, 'CHEMINEE_PANORAMIQUE', 700),
(159, 'portesPleines', 150),
(160, 'portesVitrees', 300),
(161, 'portesBattantes', 250),
(162, 'portesCoulissantes', 400),
(163, 'portesPlacardPliantes', 600),
(164, 'portesPlacardBattantes', 750),
(165, 'portesPlacardCoulissantes', 800),
(166, 'RAMPE_BOIS', 60),
(167, 'RAMPE_MARBRE', 140),
(168, 'RAMPE_METAL', 90),
(169, 'RAMPE_CERAMIQUE', 110),
(170, 'BALUSTRADE_BOIS', 40),
(171, 'BALUSTRADE_MARBRE', 120),
(172, 'BALUSTRADE_METAL', 70),
(173, 'BALUSTRADE_CERAMIQUE', 90),
(174, 'enduit_metre', 2.5),
(175, 'isolation_t', 5),
(176, 'isolation_p', 7),
(177, 'revet_clas', 15),
(178, 'revet_motif', 22),
(179, 'vide-sanitaire', 500),
(180, 'sous-sol', 90),
(181, 'CALCAIRE', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `projet`
--

CREATE TABLE `projet` (
  `id` int(11) NOT NULL,
  `id_proprio` int(11) NOT NULL,
  `id_gros_oeuvre` int(11) NOT NULL,
  `id_second_oeuvre` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projet`
--

INSERT INTO `projet` (`id`, `id_proprio`, `id_gros_oeuvre`, `id_second_oeuvre`, `nom`) VALUES
(6, 5, 7, 7, 'Villa sur Montpellier'),
(8, 2, 9, 9, 'Villa Turin'),
(9, 2, 10, 10, 'Villa Madrid'),
(10, 2, 11, 11, 'Test test'),
(11, 4, 12, 12, 'heythem'),
(12, 6, 15, 15, 'Maison de l\'admin'),
(13, 2, 16, 16, 'un projet teste'),
(14, 6, 17, 17, 'projet nano'),
(15, 6, 18, 18, 'teste projet');

-- --------------------------------------------------------

--
-- Structure de la table `remove_user`
--

CREATE TABLE `remove_user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `revetement`
--

CREATE TABLE `revetement` (
  `id` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `surf_revet_classique` int(11) NOT NULL,
  `surf_revet_motif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `revetement`
--

INSERT INTO `revetement` (`id`, `prix`, `surf_revet_classique`, `surf_revet_motif`) VALUES
(1, 1695, 25, 60),
(2, 2435, 45, 80);

-- --------------------------------------------------------

--
-- Table structure for table `second_oeuvre`
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
-- Dumping data for table `second_oeuvre`
--

INSERT INTO `second_oeuvre` (`id`, `id_enduit_facade`, `id_isolation`, `id_revetement`, `id_cloisons`, `id_evacuation`, `id_menuiseries_int`, `id_escaliers`, `id_plomberie`, `id_electricite`, `id_ventilation`, `id_climatisation`, `id_domotique`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1),
(10, NULL, NULL, NULL, 5, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 3, 5, 2, 4, 3, 2, 3, 2, 2, 2, 2, 2),
(12, 2, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `soubassement`
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
-- Dumping data for table `soubassement`
--

INSERT INTO `soubassement` (`id`, `type_soubassement`, `materiel_utilise`, `prix`, `tractopelle`, `camion_benne`, `betonniere`) VALUES
(4, 'sous-sol', NULL, 0, '1', '1', ''),
(5, 'vide-sanitaire', NULL, 0, '1', '1', ''),
(6, 'vide-sanitaire', NULL, 1360, '1', '1', '1'),
(7, 'vide-sanitaire', NULL, 590, '1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `toiture`
--

CREATE TABLE `toiture` (
  `id` int(11) NOT NULL,
  `type_toit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deg_pente` int(11) NOT NULL,
  `renforcement` tinyint(1) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `toiture`
--

INSERT INTO `toiture` (`id`, `type_toit`, `deg_pente`, `renforcement`, `prix`) VALUES
(1, 'CLASSIQUE', 15, 1, 100),
(2, 'CLASSIQUE', 20, 1, 115);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `date_inscription` datetime NOT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `is_active`, `roles`, `date_inscription`, `password_requested_at`, `token`) VALUES
(2, 'cr7', '$2y$13$TQKjgNT8ixAoBAeXowqnfOIU841JFIVW6NAZ1WNwvLlIJQH36ojUS', 'cronaldo@gmail.com', 1, 'a:1:{i:0;s:9:\"ROLE_USER\";}', '0000-00-00 00:00:00', NULL, NULL),
(4, 'test', '$2y$13$p0a4.oDf2cLtTitSFNbER.rs9WiIWf4r57h.bb7gP.uoiVo1ElQA6', 'test@mail.com', 1, 'a:1:{i:0;s:9:\"ROLE_USER\";}', '2019-03-26 16:49:28', NULL, NULL),
(5, 'CHK-34', '$2y$13$CH7AEoG7v7Jv.VonXVv12Ox0Dn5/6ZKLh9V2/NWv73n9yHWMn785W', 'choukri@gmail.com', 1, 'a:1:{i:0;s:9:\"ROLE_USER\";}', '2019-03-26 18:57:39', NULL, NULL),
(6, 'admin', '$2y$13$.HVQ6qmZwQo9MFc5hqZ8lewjUHTKv4B4Ir1LbvH9ZlN2gkYmns12y', 'admin@test.fr', 1, 'a:2:{i:0;s:10:\"ROLE_ADMIN\";i:1;s:9:\"ROLE_USER\";}', '2019-04-23 16:53:25', NULL, NULL),
(7, 'anasito34', '$2y$13$xo0.gg/Ji4a0HM537MXRb.vvYvkGs4c5ftQfNZUhe9lRZmxsoVbFO', 'anas@hotmail.fr', 1, 'a:1:{i:0;s:9:\"ROLE_USER\";}', '2019-04-24 21:00:46', NULL, NULL),
(11, 'anaschetouan', '$2y$13$G8XS81lpvbA2pN3blwUwD.ApmfkrLxh2ym73TvMvHJVOxl9BzKOtS', 'anas.chetouan@gmail.com', 1, 'a:2:{i:0;s:15:\"ROLE_COMMERCIAL\";i:1;s:9:\"ROLE_USER\";}', '2019-04-24 21:39:17', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ventilation`
--

CREATE TABLE `ventilation` (
  `id` int(11) NOT NULL,
  `type_ventilation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surface_chambre_salon` int(11) NOT NULL,
  `surface_cuisine_wc` int(11) NOT NULL,
  `prix` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ventilation`
--

INSERT INTO `ventilation` (`id`, `type_ventilation`, `surface_chambre_salon`, `surface_cuisine_wc`, `prix`) VALUES
(1, 'ventilation_double_flux', 25, 30, 1550),
(2, 'ventilation_double_flux', 10, 15, 1250);

-- --------------------------------------------------------

--
-- Table structure for table `vrd`
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
-- Dumping data for table `vrd`
--

INSERT INTO `vrd` (`id`, `distance_eau_potable`, `pompe_relevage`, `fosse_septique`, `micro_station`, `etude_hydrogeologique`, `distance_electricite`, `distance_telephonique`, `prix`) VALUES
(1, 10, 0, 1, 1, 0, 10, 10, 0),
(2, 50, 1, 0, 1, 1, 50, 50, 52500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charpente`
--
ALTER TABLE `charpente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `climatisation`
--
ALTER TABLE `climatisation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cloison`
--
ALTER TABLE `cloison`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domotique`
--
ALTER TABLE `domotique`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electricite`
--
ALTER TABLE `electricite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elevation`
--
ALTER TABLE `elevation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enduit`
--
ALTER TABLE `enduit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `escaliers`
--
ALTER TABLE `escaliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etude_sol`
--
ALTER TABLE `etude_sol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evacuation_fumees`
--
ALTER TABLE `evacuation_fumees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excavation`
--
ALTER TABLE `excavation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fondation`
--
ALTER TABLE `fondation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gros_oeuvre`
--
ALTER TABLE `gros_oeuvre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isolation`
--
ALTER TABLE `isolation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menuiserie`
--
ALTER TABLE `menuiserie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menuiseries_int`
--
ALTER TABLE `menuiseries_int`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `plancher`
--
ALTER TABLE `plancher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plomberie`
--
ALTER TABLE `plomberie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preparation_et_acces`
--
ALTER TABLE `preparation_et_acces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prix`
--
ALTER TABLE `prix`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `revetement`
--
ALTER TABLE `revetement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `second_oeuvre`
--
ALTER TABLE `second_oeuvre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soubassement`
--
ALTER TABLE `soubassement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toiture`
--
ALTER TABLE `toiture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- Indexes for table `ventilation`
--
ALTER TABLE `ventilation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vrd`
--
ALTER TABLE `vrd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `charpente`
--
ALTER TABLE `charpente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `climatisation`
--
ALTER TABLE `climatisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cloison`
--
ALTER TABLE `cloison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `domotique`
--
ALTER TABLE `domotique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `electricite`
--
ALTER TABLE `electricite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `elevation`
--
ALTER TABLE `elevation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enduit`
--
ALTER TABLE `enduit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `escaliers`
--
ALTER TABLE `escaliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `etude_sol`
--
ALTER TABLE `etude_sol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `evacuation_fumees`
--
ALTER TABLE `evacuation_fumees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `excavation`
--
ALTER TABLE `excavation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fondation`
--
ALTER TABLE `fondation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gros_oeuvre`
--
ALTER TABLE `gros_oeuvre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `isolation`
--
ALTER TABLE `isolation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menuiserie`
--
ALTER TABLE `menuiserie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menuiseries_int`
--
ALTER TABLE `menuiseries_int`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `plancher`
--
ALTER TABLE `plancher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `plomberie`
--
ALTER TABLE `plomberie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `preparation_et_acces`
--
ALTER TABLE `preparation_et_acces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prix`
--
ALTER TABLE `prix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `remove_user`
--
ALTER TABLE `remove_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `revetement`
--
ALTER TABLE `revetement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `second_oeuvre`
--
ALTER TABLE `second_oeuvre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `soubassement`
--
ALTER TABLE `soubassement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `toiture`
--
ALTER TABLE `toiture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ventilation`
--
ALTER TABLE `ventilation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vrd`
--
ALTER TABLE `vrd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
