-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-08-2024 a las 21:38:35
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `brcargo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brcargoregistro`
--

CREATE TABLE `brcargoregistro` (
  `id` int(100) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `documento` int(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `fechanacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `brcargoregistro`
--

INSERT INTO `brcargoregistro` (`id`, `nombres`, `apellidos`, `documento`, `correo`, `clave`, `fechanacimiento`) VALUES
(1, 'HILDEBRANDO', 'PINZON PINEDA', 1007491870, 'hipinzon2017@hotmail.com', '123789', '2024-07-01'),
(2, 'Manuel Alonso', 'Rodriguez Gacha', 123456789, 'gacha1234@hotmail.com', '789456123', '1993-06-21'),
(4, 'carlos', 'araujo', 1007491873, 'cararaujo@hotmail.com', 'neko123', '2024-08-12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `brcargoregistro`
--
ALTER TABLE `brcargoregistro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `brcargoregistro`
--
ALTER TABLE `brcargoregistro`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
