-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-01-2022 a las 22:30:30
-- Versión del servidor: 8.0.27-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `coches`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` bigint UNSIGNED NOT NULL,
  `marca` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `marca`) VALUES
(1, 'Ford'),
(2, 'Seat'),
(3, 'Nissan'),
(4, 'Audi'),
(5, 'BMW'),
(6, 'Citroen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos`
--

CREATE TABLE `modelos` (
  `id` bigint UNSIGNED NOT NULL,
  `marca` bigint UNSIGNED NOT NULL,
  `modelo` varchar(75) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `modelos`
--

INSERT INTO `modelos` (`id`, `marca`, `modelo`) VALUES
(1, 1, 'Ka'),
(2, 1, 'Fiesta'),
(3, 1, 'Focus'),
(4, 1, 'Kuga'),
(5, 1, 'Mondeo'),
(6, 1, 'C-Max'),
(7, 1, 'Galaxy'),
(8, 2, 'Altea'),
(9, 2, 'Arosa'),
(10, 2, 'Córdoba'),
(11, 2, 'Exeo'),
(12, 2, 'Ibiza'),
(13, 2, 'León'),
(14, 3, 'Micra'),
(15, 3, 'Note'),
(16, 3, 'Pathfinder'),
(17, 3, 'Almera'),
(18, 3, 'Qashqai'),
(19, 4, 'A1'),
(20, 4, 'A2'),
(21, 4, 'A3'),
(22, 4, 'A4'),
(23, 4, 'A5'),
(24, 4, 'A6'),
(25, 4, 'A7'),
(26, 4, 'A8'),
(27, 5, 'Serie 1'),
(28, 5, 'Serie 3'),
(29, 5, 'Serie 5'),
(30, 5, 'Serie 6'),
(31, 5, 'Serie 7'),
(32, 6, 'C2'),
(33, 6, 'C3'),
(34, 6, 'C4'),
(35, 6, 'Xsara'),
(36, 6, 'Xsara Picasso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `url`
--

CREATE TABLE `url` (
  `id` int NOT NULL,
  `modeloUrl` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `url`
--

INSERT INTO `url` (`id`, `modeloUrl`) VALUES
(1, 'https://www.youtube.com/embed/-QDXTrh10yg'),
(2, 'https://www.youtube.com/embed/b8gGJSJeUTQ'),
(3, 'https://www.youtube.com/embed/Rl1JfMk_RTo'),
(4, 'https://www.youtube.com/embed/7JlXMpDBiuY'),
(5, 'https://www.youtube.com/embed/2eBAGKpf8p8'),
(6, 'https://www.youtube.com/embed/Tb0p1JOA-hI');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `url`
--
ALTER TABLE `url`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `modelos`
--
ALTER TABLE `modelos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `url`
--
ALTER TABLE `url`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
