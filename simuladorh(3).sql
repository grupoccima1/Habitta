-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2023 a las 21:48:29
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `simuladorh`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desarrollo`
--

CREATE TABLE `desarrollo` (
  `id_desarrollo` int(3) NOT NULL,
  `desarrollo` varchar(50) NOT NULL,
  `cluster` varchar(50) NOT NULL,
  `messi` int(3) NOT NULL,
  `mes1` int(3) NOT NULL,
  `mes2` int(3) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `desarrollo`
--

INSERT INTO `desarrollo` (`id_desarrollo`, `desarrollo`, `cluster`, `messi`, `mes1`, `mes2`, `estado`) VALUES
(1, 'Porttoblanco Cimatario ', 'Estepa', 0, 0, 0, 'inactivo'),
(2, 'Porttoblanco Cimatario ', 'Desierto', 25, 95, 0, 'activo'),
(3, 'Porttoblanco Cimatario ', 'Taiga', 27, 93, 0, 'inactivo'),
(4, 'Porttoblanco Cimatario ', 'Paramo', 30, 90, 0, 'activo'),
(5, 'Porttoblanco Cimatario ', 'Selva', 36, 84, 60, 'activo'),
(6, 'Porttoblanco Cimatario ', 'Bosque', 36, 84, 60, 'activo'),
(7, 'Porttoblanco Cimatario ', 'Lago', 40, 80, 120, 'activo'),
(8, 'Porttoblanco Cimatario ', 'Manglar', 48, 72, 120, 'activo'),
(9, 'Lomas de Porto Blanco Cimatario ', 'Lomas', 48, 72, 60, 'activo'),
(10, 'Portto Blanco Bernal', 'Amatista', 48, 72, 120, 'activo'),
(11, 'Portto Blanco Bernal', 'Zafiro', 48, 72, 120, 'activo'),
(12, 'Portto Blanco Bernal', 'Malaquita', 48, 72, 120, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `financiamiento`
--

CREATE TABLE `financiamiento` (
  `id_financiamiento` int(11) NOT NULL,
  `financiamiento1` double NOT NULL,
  `financiamiento2` double NOT NULL,
  `financiamiento3` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `financiamiento`
--

INSERT INTO `financiamiento` (`id_financiamiento`, `financiamiento1`, `financiamiento2`, `financiamiento3`) VALUES
(1, 0, 1, 1.25);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `desarrollo`
--
ALTER TABLE `desarrollo`
  ADD PRIMARY KEY (`id_desarrollo`);

--
-- Indices de la tabla `financiamiento`
--
ALTER TABLE `financiamiento`
  ADD PRIMARY KEY (`id_financiamiento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `desarrollo`
--
ALTER TABLE `desarrollo`
  MODIFY `id_desarrollo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT de la tabla `financiamiento`
--
ALTER TABLE `financiamiento`
  MODIFY `id_financiamiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
