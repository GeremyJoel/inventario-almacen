-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2020 a las 21:36:43
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

DROP DATABASE IF EXISTS `almacen`;
CREATE DATABASE `almacen`;
USE `almacen`;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `almacen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradaproducto`
--

CREATE TABLE `entradaproducto` (
  `idEP` int(11) NOT NULL,
  `numLote` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_caducidad` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `costo_unitario` decimal(10,2) DEFAULT NULL,
  `entrada` int(11) NOT NULL,
  `producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `idEntrada` int(11) NOT NULL,
  `numPrograma` int(11) NOT NULL,
  `fFinanciamiento` int(11) NOT NULL,
  `movimiento` enum('Transferencia','Donacion','Compra Directa') NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `folio` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ffinanciamiento`
--

CREATE TABLE `ffinanciamiento` (
  `idFuente` int(11) NOT NULL,
  `numFuente` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `importe` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ffinanciamiento`
--

INSERT INTO `ffinanciamiento` (`idFuente`, `numFuente`, `descripcion`, `importe`) VALUES
(1, 1, 'Primer Financiamiento', '2355.00'),
(2, 2, 'Otro Financiamiento', '0.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partida`
--

CREATE TABLE `partida` (
  `idPartida` int(11) NOT NULL,
  `partidaAnt` int(11) NOT NULL,
  `numPartida` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `importe` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `partida`
--

INSERT INTO `partida` (`idPartida`, `partidaAnt`, `numPartida`, `nombre`, `importe`) VALUES
(1, 12, 12, 'cualquier nombre', '300.00'),
(2, 23, 23, 'Geremy Joel', '374.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(11) NOT NULL,
  `clave` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `existencia` int(11) NOT NULL,
  `unidad_medida` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `clave`, `descripcion`, `existencia`, `unidad_medida`) VALUES
(1, '3u32ur', 'Aspirina', 0, 'Caja'),
(2, 'dvsvewvds', 'Metformina', 0, 'Caja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `idPrograma` int(11) NOT NULL,
  `numPrograma` int(11) NOT NULL,
  `nomPrograma` varchar(50) DEFAULT NULL,
  `importe` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`idPrograma`, `numPrograma`, `nomPrograma`, `importe`) VALUES
(1, 1241, 'Primer Programa Presupuestal', '0.00'),
(2, 13, 'Este es el segundo programa', '0.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas`
--

CREATE TABLE `salidas` (
  `idSalida` int(11) NOT NULL,
  `producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entradaproducto`
--
ALTER TABLE `entradaproducto`
  ADD PRIMARY KEY (`idEP`);

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`idEntrada`);

--
-- Indices de la tabla `ffinanciamiento`
--
ALTER TABLE `ffinanciamiento`
  ADD PRIMARY KEY (`idFuente`);

--
-- Indices de la tabla `partida`
--
ALTER TABLE `partida`
  ADD PRIMARY KEY (`idPartida`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`idPrograma`);

--
-- Indices de la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD PRIMARY KEY (`idSalida`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `entradaproducto`
--
ALTER TABLE `entradaproducto`
  MODIFY `idEP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `idEntrada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `ffinanciamiento`
--
ALTER TABLE `ffinanciamiento`
  MODIFY `idFuente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `partida`
--
ALTER TABLE `partida`
  MODIFY `idPartida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `idPrograma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `salidas`
--
ALTER TABLE `salidas`
  MODIFY `idSalida` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
