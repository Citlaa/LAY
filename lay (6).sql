-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2015 a las 03:47:23
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `lay`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asuntos`
--

CREATE TABLE IF NOT EXISTS `asuntos` (
`idAsunto` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `asuntos`
--

INSERT INTO `asuntos` (`idAsunto`, `descripcion`) VALUES
(4, 'lkmlkmlkmlkmlkm'),
(5, 'No mamen ya que salga esto.'),
(6, 'hola y adios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudadanos`
--

CREATE TABLE IF NOT EXISTS `ciudadanos` (
`idCiudadano` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidoPa` varchar(50) NOT NULL,
  `apellidoMa` varchar(50) DEFAULT NULL,
  `tel1` varchar(20) NOT NULL,
  `tel2` varchar(20) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `ciudadanos`
--

INSERT INTO `ciudadanos` (`idCiudadano`, `nombre`, `apellidoPa`, `apellidoMa`, `tel1`, `tel2`) VALUES
(15, 'Diana', 'Saucedo', 'Lopez', '4491832246', ''),
(16, 'Annie', 'Herrera', 'Jara', '4499721225', ''),
(17, 'maria', 'juarez', 'teran', '9873651', '4497371254');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `denuncias`
--

CREATE TABLE IF NOT EXISTS `denuncias` (
`idRegistro` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `idDependencia` int(11) NOT NULL,
  `idEstatus` int(11) NOT NULL,
  `idRecepcion` int(11) NOT NULL,
  `idCiudadano` int(11) NOT NULL,
  `idDireccion` int(11) NOT NULL,
  `idAsunto` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `denuncias`
--

INSERT INTO `denuncias` (`idRegistro`, `fecha`, `idDependencia`, `idEstatus`, `idRecepcion`, `idCiudadano`, `idDireccion`, `idAsunto`) VALUES
(7, '2015-11-20', 1, 1, 1, 15, 0, 0),
(8, '1999-10-26', 1, 1, 2, 15, 7, 5),
(9, '1999-12-12', 1, 1, 1, 16, 8, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencias`
--

CREATE TABLE IF NOT EXISTS `dependencias` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `dependencias`
--

INSERT INTO `dependencias` (`idDependencia`, `dependencia`, `titular`, `calle`, `numExt`, `numInt`, `colonia`, `localidad`, `cp`, `tel1`, `tel2`) VALUES
(1, 'Salud- viva', 'kjlkjlk', '', 0, '', '', '', '', '9123441', ''),
(2, 'Seguridad', 'iuhiuhiuh', 'iuiuh', 55, 'a', 'kjkjh', 'kjhkjhkjh', '', 'jkhkjhkjh', 'kjhkjhkj'),
(3, 'Aiko', 'dayan saucedooooooooooo', 'los', 260, 'A-A', 'Parrassss', 'Aguascalientesn', '20000', '4491832246111', '1111'),
(4, 'Buena', 'Sonia', 'aqui', 21, 'A', 'La salud', 'Aguascalientes', '20145', '4491832246', '9785623');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE IF NOT EXISTS `direcciones` (
`idDireccion` int(11) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `noExt` int(11) NOT NULL,
  `noInt` varchar(11) DEFAULT NULL,
  `colonia` varchar(100) NOT NULL,
  `localidad` varchar(100) NOT NULL,
  `cp` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `direcciones`
--

INSERT INTO `direcciones` (`idDireccion`, `calle`, `noExt`, `noInt`, `colonia`, `localidad`, `cp`) VALUES
(5, 'joijoijoij', 55, 'ijoi', 'oioi', 'lkmlkm', 20157),
(6, 'joijoijoij', 55, 'ijoi', 'oioi', 'lkmlkm', 20157),
(7, 'Uva', 205, 'A', 'Uber', 'Jalisco', 20456),
(8, 'av Constitucion', 1104, 'A', 'Constitucion', 'Aguascalientes', 20126);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estaus`
--

CREATE TABLE IF NOT EXISTS `estaus` (
`idEstatus` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `estaus`
--

INSERT INTO `estaus` (`idEstatus`, `descripcion`) VALUES
(1, 'pendiente'),
(2, 'Resuelto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recepcion`
--

CREATE TABLE IF NOT EXISTS `recepcion` (
`idRecepcion` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `recepcion`
--

INSERT INTO `recepcion` (`idRecepcion`, `descripcion`) VALUES
(1, 'llamada'),
(2, 'sms'),
(3, 'whatsapp'),
(4, 'redes sociales'),
(5, 'otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temp_users`
--

CREATE TABLE IF NOT EXISTS `temp_users` (
`id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `temp_users`
--

INSERT INTO `temp_users` (`id`, `email`, `key`, `password`) VALUES
(3, 'hola', 'b959a725c15ad22a874d4801937ee5f1', '111'),
(4, 'aiko', '8b08fac1987ac45f2622890b6f1c4a66', '698d51a19d8a121ce581499d7b701668');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'citla', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'dayan', '4d186321c1a7f0f354b297e8914ab240'),
(3, 'Aiko', '698d51a19d8a121ce581499d7b701668'),
(6, 'lol', '698d51a19d8a121ce581499d7b701668'),
(7, 'lal', '698d51a19d8a121ce581499d7b701668'),
(8, 'll', '698d51a19d8a121ce581499d7b701668'),
(9, 'pp', '698d51a19d8a121ce581499d7b701668'),
(10, 'iii', '698d51a19d8a121ce581499d7b701668'),
(11, 'yyy', '698d51a19d8a121ce581499d7b701668'),
(12, 'tt', '6512bd43d9caa6e02c990b0a82652dca');

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
MODIFY `idAsunto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `ciudadanos`
--
ALTER TABLE `ciudadanos`
MODIFY `idCiudadano` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `denuncias`
--
ALTER TABLE `denuncias`
MODIFY `idRegistro` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `dependencias`
--
ALTER TABLE `dependencias`
MODIFY `idDependencia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
MODIFY `idDireccion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `estaus`
--
ALTER TABLE `estaus`
MODIFY `idEstatus` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `recepcion`
--
ALTER TABLE `recepcion`
MODIFY `idRecepcion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `temp_users`
--
ALTER TABLE `temp_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
