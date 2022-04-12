-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-04-2022 a las 08:37:15
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
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `categoria` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `subcategoria` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `nombre`, `url`, `categoria`, `subcategoria`) VALUES
(28, 'Subir1', 'https://www.youtube.com/embed/pVFChSGmLt4', 'Ejercicios para subir de peso', 'aumentar masa corporal'),
(29, 'Subir2', 'https://www.youtube.com/embed/RrWxnQQvw7w', 'Ejercicios para subir de peso', 'aumentar masa corporal'),
(30, 'Subir3', 'https://www.youtube.com/embed/mlbPg9n1CUM', 'Ejercicios para subir de peso', 'aumentar masa corporal'),
(31, 'Subir4', 'https://www.youtube.com/embed/xv6pgALz3GA', 'Ejercicios para subir de peso', 'aumentar masa corporal'),
(32, 'Subir5', 'https://www.youtube.com/embed/NncmQk5a9Dg', 'Ejercicios para bajar de peso', 'cardio'),
(33, 'Subir6', 'https://www.youtube.com/embed/WNz9C_vyIB0', 'Ejercicios para bajar de peso', 'cardio'),
(35, 'Subir7', 'https://www.youtube.com/embed/vdNXHcbpJWA', 'Ejercicios para bajar de peso', 'cardio'),
(36, 'Subir8', 'https://www.youtube.com/embed/81Gp3rnwW2U', 'Ejercicios para bajar de peso', 'cardio'),
(37, 'Subir9', 'https://www.youtube.com/embed/0PumJ_Z0MuQ', 'Ejercicios para mantenerte en tu peso', 'tonificar'),
(38, 'Subir10', 'https://www.youtube.com/embed/diFjQVUL7wk', 'Ejercicios para mantenerte en tu peso', 'tonificar'),
(39, 'Subir11', 'https://www.youtube.com/embed/pQ3hRQzhXVI', 'Ejercicios para mantenerte en tu peso', 'tonificar'),
(40, 'Subir12', 'https://www.youtube.com/embed/ZCswMnwviEQ', 'Ejercicios para mantenerte en tu peso', 'tonificar'),
(41, 'Subir13', 'https://www.youtube.com/embed/gLs689Ep2-U', 'Ejercicios para mantenerte en tu peso', 'tonificar'),
(44, 'Subir15', 'https://www.youtube.com/embed/msTPZniCgR8', 'Ejercicios para mantenerte en tu peso', 'flexibilidad\r\n'),
(45, 'Subir16', 'https://www.youtube.com/embed/Gnbg88khUug', 'Ejercicios para mantenerte en tu peso', 'flexibilidad\r\n'),
(46, 'Subir17', 'https://www.youtube.com/embed/F2Dtubpg528', 'Ejercicios para mantenerte en tu peso', 'flexibilidad\r\n'),
(47, 'Subir18', 'https://www.youtube.com/embed/pDQ8M4T62NE', 'Ejercicios para mantenerte en tu peso', 'flexibilidad\r\n'),
(48, 'Subir19', 'https://www.youtube.com/embed/mL9XRuGZBE0', 'Ejercicios para mantenerte en tu peso', 'flexibilidad\r\n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
