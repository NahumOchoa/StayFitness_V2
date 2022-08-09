-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 07:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `contraseña` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nombre` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `edad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registros`
--

INSERT INTO `registros` (`id`, `email`, `contraseña`, `nombre`, `edad`) VALUES
(19, '1930140@upv.edu.mx', '$2y$04$S6Mhb33Holpm2U9fcL3K8O1W0OewzzxsGNCqdmXplOVCEJch94y/C', '1930140', 21),
(20, 'marianpinedabvb@gmail.com', '$2y$10$TYCy0T2fTBus8M9oHXlZ8OoIa1tcbM3Elnp1G03Bxtco4QTFwFTJq', 'marian', 20),
(22, 'pikiypiqhamaabulct@kvhrw.com', '$2y$10$xQsKsHpayLzivGlvXBmaiOpViQs4fgqGBtPzQrAOYirlMQEWUeJze', 'usuarioNuevecito', 18),
(23, 'kvohqqegtfgafchdhh@kvhrs.com', '$2y$04$cauN8WB/rbjZJJcjqwVfOOU8KAz/AXZ/siDgM4xFFbomzfGvrfKS.', 'NuevecitoUser', 18),
(25, 'ielotlgzwbceqrswse@kvhrr.com', '$2y$04$B/tDoRdf5MT5gKwWGgbZwetST2i2nMaakn9eQTaMjtOk7ZHn1k8TG', 'yo', 25),
(29, 'zahrjbzdmpxmllohff@kvhrr.com', '$2y$10$GEP.7J7Uf7VxbBC4iaZ1AuXXdM8UglZkYr.STYxyNrbmTFXmezEJK', 'zahrjbzdmpxmllohff', 21),
(30, 'stay.fitnessv2@gmail.com', '$2y$04$cNjOxgsaJh4B0TvUMB1cTuBPMZUnAg1nQLNlVFrNpWwjvAi8GYwwS', 'admin', 18);

-- --------------------------------------------------------

--
-- Table structure for table `registrosimc`
--

CREATE TABLE `registrosimc` (
  `id` int(11) NOT NULL,
  `altura` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `resultado` text NOT NULL,
  `fecha` text NOT NULL,
  `nombre` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrosimc`
--

INSERT INTO `registrosimc` (`id`, `altura`, `peso`, `resultado`, `fecha`, `nombre`) VALUES
(32, 150, 50, 'Peso normal, tu IMC es 22.22', '2022-04-12', 'dane'),
(33, 170, 60, 'Peso normal, tu IMC es 20.76', '2022-04-12', 'dane'),
(34, 170, 60, 'Peso normal, tu IMC es 20.76', '2022-04-12', 'dane'),
(35, 170, 82, 'Sobrepeso, tu IMC es 28.37', '2022-04-12', 'dane'),
(37, 167, 65, 'Peso normal, tu IMC es 23.31', '2022-06-30', 'marian');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `categoria` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `subcategoria` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `nombre`, `url`, `categoria`, `subcategoria`) VALUES
(29, 'Subir2', 'RrWxnQQvw7w', 'gain-weight', 'increase-b-mass'),
(30, 'Subir3', 'mlbPg9n1CUM', 'gain-weight', 'increase-b-mass'),
(31, 'Subir4', 'xv6pgALz3GA', 'gain-weight', 'increase-b-mass'),
(32, 'Subir5', 'NncmQk5a9Dg', 'lose-weight', 'cardio'),
(33, 'Subir6', 'WNz9C_vyIB0', 'lose-weight', 'cardio'),
(35, 'Subir7', 'vdNXHcbpJWA', 'lose-weight', 'cardio'),
(36, 'Subir8', '81Gp3rnwW2U', 'lose-weight', 'cardio'),
(37, 'Subir9', '0PumJ_Z0MuQ', 'maintain-weight', 'tone-body'),
(38, 'Subir10', 'diFjQVUL7wk', 'maintain-weight', 'tone-body'),
(39, 'Subir11', 'pQ3hRQzhXVI', 'maintain-weight', 'tone-body'),
(40, 'Subir12', 'ZCswMnwviEQ', 'maintain-weight', 'tone-body'),
(41, 'Subir13', 'gLs689Ep2-U', 'maintain-weight', 'tone-body'),
(44, 'Subir15', 'msTPZniCgR8', 'maintain-weight', 'flex'),
(45, 'Subir16', 'Gnbg88khUug', 'maintain-weight', 'flex'),
(46, 'Subir17', 'F2Dtubpg528', 'maintain-weight', 'flex'),
(47, 'Subir18', 'pDQ8M4T62NE', 'maintain-weight', 'flex'),
(48, 'Subir19', 'mL9XRuGZBE0', 'maintain-weight', 'flex');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indexes for table `registrosimc`
--
ALTER TABLE `registrosimc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `registrosimc`
--
ALTER TABLE `registrosimc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
