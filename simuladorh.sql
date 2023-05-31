-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2023 a las 02:16:30
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
  `mes2` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `desarrollo`
--

INSERT INTO `desarrollo` (`id_desarrollo`, `desarrollo`, `cluster`, `messi`, `mes1`, `mes2`) VALUES
(1, 'Portto Blanco Cimatario ', 'Estepa 1', 0, 0, 0),
(2, 'Portto Blanco Cimatario ', 'Estepa 2', 0, 0, 0),
(3, 'Portto Blanco Cimatario ', 'Estepa 3', 0, 0, 0),
(4, 'Portto Blanco Cimatario ', 'Desierto 1', 25, 95, 0),
(5, 'Portto Blanco Cimatario ', 'Desierto 2', 25, 95, 0),
(6, 'Portto Blanco Cimatario ', 'Desierto 3', 25, 95, 0),
(7, 'Portto Blanco Cimatario ', 'Desierto 4', 25, 95, 0),
(8, 'Portto Blanco Cimatario ', 'Taiga 1', 27, 93, 0),
(9, 'Portto Blanco Cimatario ', 'Taiga 2', 27, 93, 0),
(10, 'Portto Blanco Cimatario ', 'Taiga 3', 27, 93, 0),
(11, 'Portto Blanco Cimatario ', 'Paramo 1', 30, 90, 0),
(12, 'Portto Blanco Cimatario ', 'Paramo 2', 30, 90, 0),
(13, 'Portto Blanco Cimatario ', 'Paramo 3', 30, 90, 0),
(14, 'Portto Blanco Cimatario ', 'Selva 1', 36, 84, 60),
(15, 'Portto Blanco Cimatario ', 'Selva 2', 36, 84, 60),
(16, 'Portto Blanco Cimatario ', 'Selva 3', 36, 84, 60),
(17, 'Portto Blanco Cimatario ', 'Selva 4', 36, 84, 60),
(18, 'Portto Blanco Cimatario ', 'Bosque 1', 36, 84, 60),
(19, 'Portto Blanco Cimatario ', 'Bosque 2', 36, 84, 60),
(20, 'Portto Blanco Cimatario ', 'Bosque 3', 36, 84, 60),
(21, 'Portto Blanco Cimatario ', 'Bosque 4', 36, 84, 60),
(22, 'Portto Blanco Cimatario ', 'Lago 1', 40, 80, 120),
(23, 'Portto Blanco Cimatario ', 'Manglar 1', 48, 72, 120),
(24, 'Portto Blanco Cimatario ', 'Manglar 2', 48, 72, 120),
(25, 'Lomas de Porto Blanco Cimatario ', 'Lomas Estepa 1', 48, 72, 60),
(26, 'Lomas de Porto Blanco Cimatario ', 'Lomas Estepa 2', 48, 72, 60),
(27, 'Lomas de Porto Blanco Cimatario ', 'Lomas Estepa 3', 48, 72, 60),
(28, 'Portto Blanco Bernal', 'Amatista 1', 48, 72, 120),
(29, 'Portto Blanco Bernal', 'Amatista 2', 48, 72, 120),
(30, 'Portto Blanco Bernal', 'Zafiro 1', 48, 72, 120),
(31, 'Portto Blanco Bernal', 'Zafiro 2', 48, 72, 120),
(32, 'Portto Blanco Bernal', 'Malaquita 1', 48, 72, 120),
(33, 'Portto Blanco Bernal', 'Malaquita 2', 48, 72, 120);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `financiamiento`
--

CREATE TABLE `financiamiento` (
  `id_financiamiento` int(11) NOT NULL,
  `financiamiento` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `financiamiento`
--

INSERT INTO `financiamiento` (`id_financiamiento`, `financiamiento`) VALUES
(1, 0),
(2, 1),
(3, 1.25);

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
  MODIFY `id_desarrollo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `financiamiento`
--
ALTER TABLE `financiamiento`
  MODIFY `id_financiamiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
