-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-02-2021 a las 22:37:41
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crudneos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `dni` int(8) NOT NULL,
  `nombres` varchar(30) COLLATE utf8_bin NOT NULL,
  `apellidos` varchar(30) COLLATE utf8_bin NOT NULL,
  `celular` int(9) NOT NULL,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `ciudad` varchar(30) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`id`, `dni`, `nombres`, `apellidos`, `celular`, `email`, `ciudad`, `direccion`) VALUES
(9, 11111111, 'eduardo', 'duran', 0, '999999999', 'Lima', 'av Lima'),
(10, 99999999, 'luanito', 'juares', 988888883, '0', 'huancayo', 'China'),
(11, 44444444, 'junito', 'locual', 999900123, 'juanito@gmail.com', 'Huancayo', 'Avenida lima');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `nombres` varchar(50) COLLATE utf8_bin NOT NULL,
  `username` varchar(30) COLLATE utf8_bin NOT NULL,
  `passwords` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `rol` int(8) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombres`, `username`, `passwords`, `email`, `rol`) VALUES
(11, 'roger salazar', 'admin', '$2y$10$2HCPh5Gxa8F0rF6Xz3lKuOItT1J0jnoSEH8Fy9SgCGhHgmcTOGiti', 'aso@gmail.com', 1),
(12, 'eduardo duran', 'lol', '$2y$10$8gjwKz4S1Lcx1KRIwpO/SuE/KRp8Afp8M/5BPEQNAkMC2SoB4qF/e', 'lol@gmail.com', 1),
(13, 'gaa', 'aso1', '$2y$10$yl0C/UIvUJaW.Ul/Q7MhaurNeFC6lLlGyrQ.L6tFMJmUxIMTdl4US', 'aso@gmail.com', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
