-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-04-2022 a las 08:37:06
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_fitness`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrosimc`
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
-- Volcado de datos para la tabla `registrosimc`
--

INSERT INTO `registrosimc` (`id`, `altura`, `peso`, `resultado`, `fecha`, `nombre`) VALUES
(32, 150, 50, 'Peso normal, tu IMC es 22.22', '2022-04-12', 'dane'),
(33, 170, 60, 'Peso normal, tu IMC es 20.76', '2022-04-12', 'dane'),
(34, 170, 60, 'Peso normal, tu IMC es 20.76', '2022-04-12', 'dane'),
(35, 170, 82, 'Sobrepeso, tu IMC es 28.37', '2022-04-12', 'dane');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registrosimc`
--
ALTER TABLE `registrosimc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registrosimc`
--
ALTER TABLE `registrosimc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
