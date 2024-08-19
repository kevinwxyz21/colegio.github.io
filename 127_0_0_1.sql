-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-08-2024 a las 18:52:00
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdformulario`
--
CREATE DATABASE IF NOT EXISTS `bdformulario` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bdformulario`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_formm`
--
-- Creación: 19-08-2024 a las 16:10:29
-- Última actualización: 19-08-2024 a las 16:38:13
--

CREATE TABLE `tabla_formm` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `grado` varchar(12) NOT NULL,
  `seccion` varchar(5) NOT NULL,
  `f_nacimiento` date NOT NULL,
  `promedio` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tabla_formm`
--

INSERT INTO `tabla_formm` (`id`, `nombre`, `telefono`, `grado`, `seccion`, `f_nacimiento`, `promedio`) VALUES
(1, 'nayeli', '9515156165', '3ro', 'C', '0000-00-00', '14'),
(2, 'jose', '6516519', '2do', 'D', '1971-02-26', '15'),
(3, 'bertha', '990265870', '4to', 'E', '1976-09-29', '19'),
(4, 'Valery Peña', '926514851', '6to', 'F', '2006-05-09', '01'),
(10, 'gabriel', '10230210', '1ro', 'A', '0000-00-00', '10'),
(15, 'tais peña', '598498', '7mo', 'G', '2020-12-06', '05'),
(80, 'Kevin Espinoza', '920472369', '5to', 'B', '2006-05-21', '20'),
(100, 'kevin espinoza', '920472369', '5to', 'B', '0000-00-00', '18'),
(101, 'gabriel espinoza', '920472365', '5to', 'B', '2018-01-04', '20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla_formm`
--
ALTER TABLE `tabla_formm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla_formm`
--
ALTER TABLE `tabla_formm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
