-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-10-2015 a las 01:46:59
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ejemploabm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `Vehiculo` (
  `id` int(11) NOT NULL,
  `patente` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `fechaEntrada` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `fechaSalida` varchar(50) COLLATE utf8_spanish2_ci  NULL,
  `foto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `Vehiculo` (`id`, `patente`, `fechaEntrada`, `fechaSalida`, `foto`) VALUES
(4, 'asd123', 'datetime', '333333', '333333.jpg'),
(5, 'Bañera', 'Giratoria', '222222', '222222.jpg'),
(6, 'Julieta', 'Roberto', '888888', '888888.jpg'),
(7, 'Tomas', 'Crucero', '777777', '777777.jpg'),
(8, 'Alfredo', 'Mercurio', '999999', '999999.jpg'),
(9, 'Jaime', 'Marrón', '555555', '555555.jpg'),
(10, 'Esteban', 'Trabajos', '111111', '111111.jpg'),
(11, 'Miguel', 'Zorro', '444444', '444444.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
