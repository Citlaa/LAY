-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2015 a las 07:30:34
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lay`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asuntos`
--

CREATE TABLE `asuntos` (
  `idAsunto` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asuntos`
--

INSERT INTO `asuntos` (`idAsunto`, `descripcion`) VALUES
(7, 'No la hagan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudadanos`
--

CREATE TABLE `ciudadanos` (
  `idCiudadano` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidoPa` varchar(50) NOT NULL,
  `apellidoMa` varchar(50) DEFAULT NULL,
  `tel1` varchar(20) NOT NULL,
  `tel2` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudadanos`
--

INSERT INTO `ciudadanos` (`idCiudadano`, `nombre`, `apellidoPa`, `apellidoMa`, `tel1`, `tel2`) VALUES
(18, 'José', 'Cardona', 'Figueroa', '9772993', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `denuncias`
--

CREATE TABLE `denuncias` (
  `idRegistro` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `idDependencia` int(11) NOT NULL,
  `idEstatus` int(11) NOT NULL,
  `idRecepcion` int(11) NOT NULL,
  `idCiudadano` int(11) NOT NULL,
  `idDireccion` int(11) NOT NULL,
  `idAsunto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `denuncias`
--

INSERT INTO `denuncias` (`idRegistro`, `fecha`, `idDependencia`, `idEstatus`, `idRecepcion`, `idCiudadano`, `idDireccion`, `idAsunto`) VALUES
(13, '2015-11-23', 5, 3, 6, 18, 9, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencias`
--

CREATE TABLE `dependencias` (
  `idDependencia` int(11) NOT NULL,
  `dependencia` varchar(50) NOT NULL,
  `titular` varchar(100) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `numExt` int(11) NOT NULL,
  `numInt` varchar(20) NOT NULL,
  `colonia` varchar(100) NOT NULL,
  `localidad` varchar(100) NOT NULL,
  `cp` varchar(20) NOT NULL,
  `tel1` varchar(20) NOT NULL,
  `tel2` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dependencias`
--

INSERT INTO `dependencias` (`idDependencia`, `dependencia`, `titular`, `calle`, `numExt`, `numInt`, `colonia`, `localidad`, `cp`, `tel1`, `tel2`) VALUES
(5, 'ConAgua', 'Un wey', 'Av. Paseos', 123, '', 'Pedernal', 'Ags', '2321321', '123123233', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `idDireccion` int(11) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `noExt` int(11) NOT NULL,
  `noInt` varchar(11) DEFAULT NULL,
  `colonia` varchar(100) NOT NULL,
  `localidad` varchar(100) NOT NULL,
  `cp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `direcciones`
--

INSERT INTO `direcciones` (`idDireccion`, `calle`, `noExt`, `noInt`, `colonia`, `localidad`, `cp`) VALUES
(9, 'Primera Constitución', 232, NULL, 'Fracc Morelos', 'Aguascalientes', 22323);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estaus`
--

CREATE TABLE `estaus` (
  `idEstatus` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estaus`
--

INSERT INTO `estaus` (`idEstatus`, `descripcion`) VALUES
(3, 'Pendiente'),
(4, 'Atendido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recepcion`
--

CREATE TABLE `recepcion` (
  `idRecepcion` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `recepcion`
--

INSERT INTO `recepcion` (`idRecepcion`, `descripcion`) VALUES
(6, 'Telefono'),
(7, 'SMS'),
(8, 'WhatsApp'),
(9, 'Redes Sociales'),
(10, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temp_users`
--

CREATE TABLE `temp_users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asuntos`
--
ALTER TABLE `asuntos`
  ADD PRIMARY KEY (`idAsunto`);

--
-- Indices de la tabla `ciudadanos`
--
ALTER TABLE `ciudadanos`
  ADD PRIMARY KEY (`idCiudadano`);

--
-- Indices de la tabla `denuncias`
--
ALTER TABLE `denuncias`
  ADD PRIMARY KEY (`idRegistro`);

--
-- Indices de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  ADD PRIMARY KEY (`idDependencia`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`idDireccion`);

--
-- Indices de la tabla `estaus`
--
ALTER TABLE `estaus`
  ADD PRIMARY KEY (`idEstatus`);

--
-- Indices de la tabla `recepcion`
--
ALTER TABLE `recepcion`
  ADD PRIMARY KEY (`idRecepcion`);

--
-- Indices de la tabla `temp_users`
--
ALTER TABLE `temp_users`
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
-- AUTO_INCREMENT de la tabla `asuntos`
--
ALTER TABLE `asuntos`
  MODIFY `idAsunto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `ciudadanos`
--
ALTER TABLE `ciudadanos`
  MODIFY `idCiudadano` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `denuncias`
--
ALTER TABLE `denuncias`
  MODIFY `idRegistro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  MODIFY `idDependencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `idDireccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `estaus`
--
ALTER TABLE `estaus`
  MODIFY `idEstatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `recepcion`
--
ALTER TABLE `recepcion`
  MODIFY `idRecepcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `temp_users`
--
ALTER TABLE `temp_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
