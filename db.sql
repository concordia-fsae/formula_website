-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2024 at 05:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formula_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `sponsor_tier` varchar(255) NOT NULL,
  `sponsor_name` varchar(255) NOT NULL,
  `sponsor_website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `file_name`, `file_path`, `sponsor_tier`, `sponsor_name`, `sponsor_website`) VALUES
(6, 'DanaTM4.svg', 'assets/sponsors/DanaTM4.svg', 'platinum', 'DanaTM4', 'https://www.danatm4.com/'),
(7, 'artypac.svg', 'assets/sponsors/artypac.svg', 'platinum', 'Artypac', 'https://www.artypac.com/'),
(8, 'M1-Composites.png', 'assets/sponsors/M1-Composites.png', 'platinum', 'M1', 'https://m1composites.com/'),
(10, 'eca.png', 'assets/sponsors/eca.png', 'platinum', 'ECA', 'https://ecaconcordia.ca/'),
(12, 'haas.png', 'assets/sponsors/haas.png', 'gold', 'Haas', 'https://ghaasfoundation.org/content/ghf/en/home.html'),
(14, 'SSEV-CCSL-CMYK-VERT-ENG-HR[64].png', 'assets/sponsors/SSEV-CCSL-CMYK-VERT-ENG-HR[64].png', 'silver', 'CCSL', 'https://www.concordia.ca/offices/ccsl.html'),
(17, 'skf.svg', 'assets/sponsors/skf.svg', 'silver', 'SKF', 'https://www.skf.com/ca/en'),
(18, 'VVIVID.avif', 'assets/sponsors/VVIVID.avif', 'silver', 'VVIVID', 'https://vvividshop.ca/'),
(19, 'Hakko.png', 'assets/sponsors/Hakko.png', 'silver', 'Hakko', 'https://hakkousa.com/'),
(20, 'SH.png', 'assets/sponsors/SH.png', 'silver', 'SHKarting', 'https://www.shkarting.com/'),
(21, 'DaBologna.png', 'assets/sponsors/DaBologna.png', 'silver', 'DaBologna', 'https://www.dabologna.ca/'),
(22, 'landry.svg', 'assets/sponsors/landry.svg', 'bronze', 'Landry', 'https://landrysimulation.net/'),
(23, 'logoQSTC.png', 'assets/sponsors/logoQSTC.png', 'bronze', 'QSTC', 'https://www.qstc.space/'),
(25, 'SolidWorks.svg', 'assets/sponsors/SolidWorks.svg', 'bronze', 'Solidworks', 'https://www.solidworks.com/'),
(26, 'VR3.png', 'assets/sponsors/VR3.png', 'bronze', 'VR3', 'https://vr3.ca/'),
(27, 'fanelli.png', 'assets/sponsors/fanelli.png', 'bronze', 'BirraFanelli', 'https://www.birrafanelli.com/'),
(28, 'bmwLaval.png', 'assets/sponsors/bmwLaval.png', 'bronze', 'BmwLaval', 'https://www.bmwlaval.com/'),
(31, 'Lotus.svg', 'assets/sponsors/Lotus.svg', 'bronze', 'Lotus', 'https://www.lotuscars.com/en-CA'),
(32, 'vi-grade.png', 'assets/sponsors/vi-grade.png', 'bronze', 'ViGrade', 'https://www.vi-grade.com/'),
(33, 'ansys.png', 'assets/sponsors/ansys.png', 'bronze', 'Ansys', 'https://www.ansys.com/'),
(34, 'CSU.png', 'assets/sponsors/CSU.png', 'bronze', 'CSU', 'https://www.csu.qc.ca/'),
(35, 'MontrealPrinting.svg', 'assets/sponsors/MontrealPrinting.svg', 'bronze', 'MontrealPrinting', 'https://www.montrealprinting.com/'),
(36, 'calspan-logo.svg', 'assets/sponsors/calspan-logo.svg', 'bronze', 'Calspan', 'https://calspan.com/'),
(37, 'MiSUMi.png', 'assets/sponsors/MiSUMi.png', 'bronze', 'Misumi', 'https://us.misumi-ec.com/'),
(38, 'Metcor.svg', 'assets/sponsors/Metcor.svg', 'bronze', 'Metcor', 'https://www.metcorht.com/'),
(39, 'schroth.svg', 'assets/sponsors/schroth.svg', 'bronze', 'Schroth', 'https://www.schroth.com/en/'),
(40, 'rolltech.png', 'assets/sponsors/rolltech.png', 'bronze', 'Rolltech', 'https://rolltech.ca/'),
(41, 'remorqueLaval.png', 'assets/sponsors/remorqueLaval.png', 'bronze', 'RemorqueLaval', 'https://www.attachesremorquelaval.com/'),
(42, 'mathWorks.png', 'assets/sponsors/mathWorks.png', 'bronze', 'MathWorks', 'https://www.mathworks.com/'),
(43, 'FinitionMPC.png', 'assets/sponsors/FinitionMPC.png', 'bronze', 'FinitionMPC', 'https://www.finitionmpc.com/'),
(44, 'Bender.svg', 'assets/sponsors/Bender.svg', 'bronze', 'Bender', 'https://www.benderinc.com/'),
(71, 'ProEV.svg', 'assets/sponsors/ProEV.svg', 'platinum', 'ProEV', 'https://proelectricvehicle.com/'),
(76, 'Quaketek_360.png', 'assets/sponsors/Quaketek_360.png', 'title', 'Quaketek', 'https://quaketek.com/');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `file_name`, `file_path`, `category`, `position`, `first_name`, `last_name`, `linkedin`) VALUES
(24, 'Quaketek_360.png', 'assets/portraits/Quaketek_360.png', 'director', 'asdf', 'asdf', 'asdf', ''),
(25, 'ACME.png', 'assets/portraits/ACME.png', 'director', 'sdf', 'dfsd', 'sdfsd', ''),
(26, 'emptyProfile.png', 'assets/portraits/emptyProfile.png', 'subsystem_lead', 'sdfdsf', 'fdsaf', 'sdf', ''),
(27, 'Lucas.JPG', 'assets/portraits/Lucas.JPG', 'director', 'sdf', 'asdfds', 'fsadfsdf', ''),
(28, 'Peter.JPG', 'assets/portraits/Peter.JPG', 'subsystem_lead', 'asdfsad', 'dsfasdf', 'asdfasd', ''),
(29, 'Sabrina.JPG', 'assets/portraits/Sabrina.JPG', 'subsystem_lead', 'asdfasdfasd', 'asdfsdf', 'asdfasdfsda', ''),
(30, 'Joshua.JPG', 'assets/portraits/Joshua.JPG', 'subsystem_lead', 'wdfqwfe', 'asdfsdafadsf', 'sdafsdfdsafdsfw', ''),
(31, 'James.JPG', 'assets/portraits/James.JPG', 'subsystem_lead', 'hdsfd', 'thhfdghh', 'dfhfdd', ''),
(32, 'Austin.JPG', 'assets/portraits/Austin.JPG', 'subsystem_lead', 'gewrgfewrg', 'hdshgd', 'hdssd', 'gweger');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pwd`, `email`, `created_at`) VALUES
(1, 'admin', '$2y$12$mEd82eAozd1Oqy9l6jgUTettkSpUE10tQtQGP0ADETESOC.jTnxFu', 'leo.thomasson@mail.mcgill.ca', '2024-11-23 22:48:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

