-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2017 a las 21:04:46
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catalogo16`
--
CREATE DATABASE IF NOT EXISTS `catalogo16` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `catalogo16`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor_dj`
--

CREATE TABLE `autor_dj` (
  `cod_DJ` int(11) NOT NULL,
  `nombre_dj` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nacionalidad` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `genero_nusical` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `img_autor` varchar(20) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `autor_dj`
--

INSERT INTO `autor_dj` (`cod_DJ`, `nombre_dj`, `nacionalidad`, `descripcion`, `genero_nusical`, `img_autor`) VALUES
(1, 'armin van buuren', 'holandesa', 'Armin van Buuren DJ/Productor Holandes de Trance & Progressive-Trance nació en Leiden el 25 de diciembre de 1976 y creció en Koudekerk aan den Rijn', 'trance', 'armin.png'),
(2, 'tiesto', 'paises bajos', 'Tijs Michiel Verwest (n. Breda, Países Bajos, 17 de enero de 1969)4​ es un DJ y productor neerlandés. A pesar de que ha utilizado muchos alias en el pasado, es más conocido por su trabajo como DJ Tiësto o simplemente como Tiësto, un alias que proviene de su sobrenombre de la infancia.', 'dance', 'tiesto.png'),
(3, 'kshmr', 'californiana', 'Niles Hollowell-Dhar (n. Berkeley, California, 6 de octubre de 1988), más conocido como KSHMR (pronunciado como kashmir) es un DJ y productor indo-estadounidense de EDM, actualmente radicado en Berkeley, California. Desde 2013, comenzó a producir bajo el nombre de KSHMR después de haber dejado el dúo The Cataracs', 'dance', 'kshmr.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disco`
--

CREATE TABLE `disco` (
  `cod_disco` int(11) NOT NULL,
  `nombre_disco` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_salida` date NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `autor` int(11) NOT NULL,
  `img_disco` varchar(20) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `disco`
--

INSERT INTO `disco` (`cod_disco`, `nombre_disco`, `fecha_salida`, `descripcion`, `autor`, `img_disco`) VALUES
(1, 'A State of Trance ', '2017-04-21', 'A State of Trance 2017\r\nÁlbum musical de Armin van Buuren\r\nResultado de imagen de armin van buuren a state of trance 2017\r\nArtista: Armin van Buuren\r\nFecha de publicación: 21 de abril de 2017\r\nDiscográfica: Armada Music Bundles\r\nGénero: Dance/Música electrónica', 1, 'state.png'),
(2, 'shivers', '2008-08-08', 'Shivers es el segundo disco de estudio del DJ y productor holandés Armin van Buuren. Fue lanzado el 8 de agosto de 2005. El primer single lanzado fue \"Shivers\", con la colaboración de la cantante Susana. Wikipedia\r\nArtista: Armin van Buuren\r\nFecha de publicación: 8 de agosto de 2005\r\nDiscográfica: Ultra Records\r\nProductor: Armin van Buuren\r\nGéneros: Trance, Vocal trance, House progresivo', 1, 'shilvers.png'),
(3, 'Materia EP', '2017-08-18', 'Materia EP\r\nÁlbum musical de KSHMR\r\nArtista: KSHMR\r\nFecha de publicación: 18 de agosto de 2017\r\nGénero: Dance/Música electrónica\r\nDiscográfica: Dharma', 3, 'materia.png'),
(4, 'Kaleidoscope', '2009-10-06', 'Kaleidoscope\r\nÁlbum de música de Tiësto\r\nResultado de imagen de Tiësto Kaleidoscope\r\nKaleidoscope es el cuarto álbum de estudio del productor de música Trance neerlandés Tiësto, el cual fue lanzado el 6 de octubre de 2009. Wikipedia\r\nArtista: Tiësto\r\nFecha de publicación: 6 de octubre de 2009\r\nGrabación: 2008-2009\r\nDiscográfica: Musical Freedom\r\nGéneros: Trance, Electronic dance music, House, Electro, House progresivo, Electrónica, Electro house', 2, 'kaleidoscope.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `playlist`
--

CREATE TABLE `playlist` (
  `cod_cancion` int(11) NOT NULL,
  `nombre_cancion` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_salida` date NOT NULL,
  `disco` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `playlist`
--

INSERT INTO `playlist` (`cod_cancion`, `nombre_cancion`, `fecha_salida`, `disco`) VALUES
(1, 'wall of sound', '2005-08-08', 2),
(2, 'kolkata', '2017-08-18', 3),
(3, 'kaleidoscope', '2009-10-06', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `login` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `descripcion` text COLLATE utf8mb4_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`login`, `password`, `nombre`, `admin`, `descripcion`) VALUES
('sergio', 'sergio', 'sergio', 1, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor_dj`
--
ALTER TABLE `autor_dj`
  ADD PRIMARY KEY (`cod_DJ`);

--
-- Indices de la tabla `disco`
--
ALTER TABLE `disco`
  ADD PRIMARY KEY (`cod_disco`),
  ADD KEY `autor` (`autor`);

--
-- Indices de la tabla `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`cod_cancion`),
  ADD KEY `disco` (`disco`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`login`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `disco`
--
ALTER TABLE `disco`
  ADD CONSTRAINT `disco_ibfk_1` FOREIGN KEY (`autor`) REFERENCES `autor_dj` (`cod_DJ`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `playlist_ibfk_1` FOREIGN KEY (`disco`) REFERENCES `disco` (`cod_disco`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
