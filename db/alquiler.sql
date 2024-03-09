-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2023 a las 15:53:26
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alquilercochera`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler`
--

CREATE TABLE `alquiler` (
  `idalquiler` int(11) NOT NULL,
  `idusuario` varchar(11) NOT NULL,
  `idcochera` varchar(11) NOT NULL,
  `idpropietario` varchar(11) NOT NULL,
  `fechai` date NOT NULL,
  `horai` varchar(5) NOT NULL,
  `fechaf` date NOT NULL,
  `horaf` varchar(5) NOT NULL,
  `monto` int(10) NOT NULL,
  `tiempo` varchar(10) NOT NULL,
  `torre` varchar(20) NOT NULL,
  `piso` varchar(2) NOT NULL,
  `dpto` varchar(2) NOT NULL,
  `estatus` varchar(20) NOT NULL,
  `vehiculo` varchar(20) NOT NULL,
  `dominio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alquiler`
--

INSERT INTO `alquiler` (`idalquiler`, `idusuario`, `idcochera`, `idpropietario`, `fechai`, `horai`, `fechaf`, `horaf`, `monto`, `tiempo`, `torre`, `piso`, `dpto`, `estatus`, `vehiculo`, `dominio`) VALUES
(1, '1', '1', '1', '2023-02-02', '23:00', '2023-02-03', '23:00', 100, '12 Horas', 'Aconcagua', '12', 'A', 'Disponible', 'Toyota', 'ASS234'),
(2, '1', '1', '1', '2023-02-02', '23:00', '2023-02-03', '23:00', 100, '12 Horas', 'Aconcagua', '12', 'A', 'Disponible', '', ''),
(3, '2', '5', '2', '2023-02-01', '10:23', '2023-02-02', '12:00', 1500, '24 horas', 'Champaquin', '10', 'B', 'Disponible', '', ''),
(4, '2', '5', '2', '2023-01-28', '10:23', '2023-02-02', '12:00', 1500, '24 horas', 'Champaquin', '10', 'B', 'Disponible', '', ''),
(5, '6', '5', '1', '2023-02-01', '10:23', '2023-02-02', '10:23', 1500, '24 horas', 'Bastion', '9', 'C', 'Disponible', '', ''),
(6, '1', '1', '1', '2023-02-28', '12:12', '2023-02-28', '12:12', 300, '3 horas', 'Aconcagua', '12', 'A', 'Dispinible', 'Chevrolet', 'ASD123'),
(7, '1', '1', '1', '2023-02-28', '12:12', '2023-02-28', '12:12', 300, '3 horas', 'Aconcagua', '12', 'A', 'Dispinible', 'Chevrolet', 'ASD123'),
(8, '1', '1', '1', '2023-02-28', '12:12', '2023-02-28', '12:12', 300, '3 horas', 'Aconcagua', '12', 'A', 'Dispinible', 'Chevrolet', 'ASD123'),
(9, '1', '1', '1', '2023-02-28', '12:12', '2023-02-28', '12:12', 300, '6 horas', 'Aconcagua', '12', 'A', 'Dispinible', 'Chevrolet', 'ASD123'),
(10, '', '', '', '0000-00-00', '', '0000-00-00', '', 0, '', '', '0', '', '', '', ''),
(11, '1', '1', '1', '0000-00-00', '', '0000-00-00', '', 0, '', '', '', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD PRIMARY KEY (`idalquiler`),
  ADD KEY `idusuario` (`idusuario`),
  ADD KEY `idcochera` (`idcochera`),
  ADD KEY `idpropietario` (`idpropietario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  MODIFY `idalquiler` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
