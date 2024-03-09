-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2023 a las 15:49:31
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquilercochera`
--

CREATE TABLE `alquilercochera` (
  `idalquiler` int(11) NOT NULL,
  `idcochera` varchar(11) NOT NULL,
  `idpropietario` varchar(11) NOT NULL,
  `fechai` varchar(11) NOT NULL,
  `horai` varchar(11) NOT NULL,
  `fechaf` varchar(11) NOT NULL,
  `horaf` varchar(11) NOT NULL,
  `tiempo` varchar(11) NOT NULL,
  `torre` varchar(11) NOT NULL,
  `piso` int(2) NOT NULL,
  `dpto` varchar(2) NOT NULL,
  `vehiculo` varchar(20) NOT NULL,
  `dominio` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alquilercochera`
--

INSERT INTO `alquilercochera` (`idalquiler`, `idcochera`, `idpropietario`, `fechai`, `horai`, `fechaf`, `horaf`, `tiempo`, `torre`, `piso`, `dpto`, `vehiculo`, `dominio`) VALUES
(1, '1', '1', '2023-02-28', '12:12:12', '2023-02-28', '12:12:12', '3 horas', 'Aconcagua', 12, 'A', 'Chevrolet', 'ASD123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cochera`
--

CREATE TABLE `cochera` (
  `idcochera` int(11) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `piso` varchar(10) NOT NULL,
  `estatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cochera`
--

INSERT INTO `cochera` (`idcochera`, `numero`, `piso`, `estatus`) VALUES
(1, '165', 'SUB_2', 'Ocupado'),
(2, '164', 'SUB_1', 'Ocupado'),
(3, '187', 'SUB_2', 'Disponible'),
(4, '339', 'SUB_2', 'Disponible'),
(5, '349', 'SUB_2', 'Disponible'),
(6, '347', 'SUB_2', 'Disponible'),
(7, '346', 'SUB_2', 'Disponible'),
(8, '369', 'SUB_2', 'Disponible'),
(9, '357', 'SUB_2', 'Disponible'),
(10, '395', 'SUB_2', 'Disponible'),
(11, '407', 'SUB_1', 'Disponible'),
(13, '384', 'SUB_2', 'Disponible'),
(14, '413', 'SUB_2', 'Disponible'),
(15, '396', 'SUB_2', 'Disponible'),
(16, '353', 'SUB_2', 'Disponible'),
(17, '355', 'SUB_2', 'Disponible'),
(18, '419', 'SUB_1', 'Disponible'),
(19, '420', 'SUB_1', 'Disponible'),
(20, '431', 'SUB_1', 'Disponible'),
(22, '334', 'SUB_1', 'Disponible'),
(25, '333', 'SUB_1', 'Disponible'),
(26, '2323', 'SUB_1', 'Ocupado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infraccion`
--

CREATE TABLE `infraccion` (
  `idinfraccion` int(11) NOT NULL,
  `infraccion` varchar(255) NOT NULL,
  `fechainfraccion` date NOT NULL,
  `hora` varchar(6) NOT NULL,
  `vehiculo` varchar(20) NOT NULL,
  `dominio` varchar(10) NOT NULL,
  `nombrep` varchar(30) NOT NULL,
  `apellidop` varchar(30) NOT NULL,
  `torre` varchar(20) NOT NULL,
  `piso` varchar(10) NOT NULL,
  `dpto` varchar(10) NOT NULL,
  `responsable` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `infraccion`
--

INSERT INTO `infraccion` (`idinfraccion`, `infraccion`, `fechainfraccion`, `hora`, `vehiculo`, `dominio`, `nombrep`, `apellidop`, `torre`, `piso`, `dpto`, `responsable`) VALUES
(1, 'USURPACIÓN DE COCHERA Nº 419 DE ALQUILER. NO SE POSEE DATOS DEL SISTEMA.', '2023-03-01', '22:15', 'VOLKSWAGEN', 'FUT836', 'pablo', 'gutierrez', 'Aconcagua', '12', 'A', 'OCTAVIO CARRASCO'),
(2, 'USURPACION DE COCHERA Nº 523, NO SE ENCUETRARN DATOS EN EL SISTEMA.', '2023-03-02', '12:05', 'CITROEN', 'AE423XC', 'SABRINA', 'GIARDI', 'ACONCAGUA', '12', 'G', 'OCTAVIO CARRASCO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--

CREATE TABLE `propietario` (
  `idpropietario` int(11) NOT NULL,
  `nombrep` varchar(30) NOT NULL,
  `apellidop` varchar(30) NOT NULL,
  `torre` varchar(20) NOT NULL,
  `piso` varchar(2) NOT NULL,
  `dpto` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `propietario`
--

INSERT INTO `propietario` (`idpropietario`, `nombrep`, `apellidop`, `torre`, `piso`, `dpto`) VALUES
(1, 'PABLO', 'GUTIERREZ', 'Aconcagua', '06', 'A'),
(2, 'ROBERTO', 'LOPEZ', 'Aconcagua', '09', 'B'),
(4, 'OCTAVIO', 'CARRASCO', 'Catedral', '09', 'D'),
(5, 'TITO', 'ESPINOZA', 'Catedral', '06', 'C'),
(6, 'MATEO', 'GONZALEZ', 'Aconcagua', '03', 'B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombreu` varchar(30) NOT NULL,
  `apellidou` varchar(30) NOT NULL,
  `estatus` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombreu`, `apellidou`, `estatus`, `usuario`, `clave`, `rol`) VALUES
(1, 'administrador', 'administrador', 'Activo', 'admin', 'admin123', 'Administrador'),
(2, 'Octavio', 'Carrasco', 'Activo', 'OCarrasco', 'OCarrasco123', 'Trabajador'),
(5, 'Claudio', 'Palacio', 'Activo', 'CPalacio', 'CPalacio123', 'Trabajador'),
(6, 'Mariano', 'Peludero', 'Activo', 'MPeludero', '123', 'Usuario'),
(7, 'Leandro', 'Cazajoz', 'Activo', 'LCazajoz', 'LCazajoz123', 'Usuario'),
(11, 'A', 'C', 'Activo', 'O', 'R', 'Administrador');

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
-- Indices de la tabla `alquilercochera`
--
ALTER TABLE `alquilercochera`
  ADD PRIMARY KEY (`idalquiler`);

--
-- Indices de la tabla `cochera`
--
ALTER TABLE `cochera`
  ADD PRIMARY KEY (`idcochera`);

--
-- Indices de la tabla `infraccion`
--
ALTER TABLE `infraccion`
  ADD PRIMARY KEY (`idinfraccion`);

--
-- Indices de la tabla `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`idpropietario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  MODIFY `idalquiler` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `alquilercochera`
--
ALTER TABLE `alquilercochera`
  MODIFY `idalquiler` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cochera`
--
ALTER TABLE `cochera`
  MODIFY `idcochera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `infraccion`
--
ALTER TABLE `infraccion`
  MODIFY `idinfraccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `propietario`
--
ALTER TABLE `propietario`
  MODIFY `idpropietario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
