-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2015 at 12:02 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lay`
--

-- --------------------------------------------------------

--
-- Table structure for table `asuntos`
--

CREATE TABLE IF NOT EXISTS `asuntos` (
  `idAsunto` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(500) NOT NULL,
  PRIMARY KEY (`idAsunto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `asuntos`
--

INSERT INTO `asuntos` (`idAsunto`, `descripcion`) VALUES
(5, 'robo y así'),
(6, 'kkkkkkkkkkkkkkk'),
(7, 'iuhiuhiuhi'),
(8, 'jkjijhgdfiop'),
(9, 'dfsdfsfd'),
(10, '545454adsds fddfdf'),
(11, 'iojoij oijoiuoui oi uio u'),
(12, 'kjhkjh uh iu'),
(13, 'lkjlkjlkjlkjlkj'),
(14, 'sksksksks'),
(15, 'lksdflksdjflks'),
(16, 'ksjdkfjdkjf');

-- --------------------------------------------------------

--
-- Table structure for table `ciudadanos`
--

CREATE TABLE IF NOT EXISTS `ciudadanos` (
  `idCiudadano` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellidoPa` varchar(50) NOT NULL,
  `apellidoMa` varchar(50) DEFAULT NULL,
  `tel1` varchar(20) NOT NULL,
  `tel2` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idCiudadano`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `ciudadanos`
--

INSERT INTO `ciudadanos` (`idCiudadano`, `nombre`, `apellidoPa`, `apellidoMa`, `tel1`, `tel2`) VALUES
(7, 'Diana', 'Saucedo', 'Lopez', '497697031', '497697031'),
(8, 'byron', 'll', 'llll', '44444444', '44444444'),
(9, 'Natalia', 'Saucedo', 'Villalpando', '5455454', '5455454'),
(10, 'quetzalli', 'jara', 'diaz', '454545', '454545'),
(11, 'Adriana', 'Jara', 'Díaz de León', '55456', '55456'),
(12, 'aiko', 'Sayuri', 'Dallegos', '68687', '68687'),
(13, 'aiko', 'Sayuri', 'Dallegos', '68687', '68687');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `denuncias`
--

CREATE TABLE IF NOT EXISTS `denuncias` (
  `idRegistro` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `idDependencia` int(11) NOT NULL,
  `idEstatus` int(11) NOT NULL,
  `idRecepcion` int(11) NOT NULL,
  `idCiudadano` int(11) NOT NULL,
  `idDireccion` int(11) NOT NULL,
  `idAsunto` int(11) NOT NULL,
  `idMedios` int(11) NOT NULL,
  PRIMARY KEY (`idRegistro`),
  KEY `fk_ciudadanos` (`idCiudadano`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `denuncias`
--

INSERT INTO `denuncias` (`idRegistro`, `fecha`, `idDependencia`, `idEstatus`, `idRecepcion`, `idCiudadano`, `idDireccion`, `idAsunto`, `idMedios`) VALUES
(16, '2015-12-04', 3, 1, 1, 7, 1, 6, 0),
(17, '2015-12-04', 3, 2, 2, 8, 2, 7, 0),
(18, '2015-12-04', 3, 1, 1, 7, 3, 8, 0),
(19, '2015-12-04', 3, 1, 1, 8, 1, 9, 0),
(20, '2015-12-03', 5, 1, 1, 7, 1, 5, 0),
(27, '2015-12-05', 7, 1, 4, 12, 13, 16, 2);

-- --------------------------------------------------------

--
-- Table structure for table `dependencias`
--

CREATE TABLE IF NOT EXISTS `dependencias` (
  `idDependencia` int(11) NOT NULL AUTO_INCREMENT,
  `dependencia` varchar(50) NOT NULL,
  `titular` varchar(100) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `numExt` int(11) NOT NULL,
  `numInt` varchar(20) NOT NULL,
  `colonia` varchar(100) NOT NULL,
  `localidad` varchar(100) NOT NULL,
  `cp` varchar(20) NOT NULL,
  `tel1` varchar(20) NOT NULL,
  `tel2` varchar(20) DEFAULT NULL,
  `Cumpleaños` date NOT NULL,
  `comNombre` varchar(500) NOT NULL,
  `comMail` varchar(100) NOT NULL,
  `comTel` varchar(100) NOT NULL,
  PRIMARY KEY (`idDependencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `dependencias`
--

INSERT INTO `dependencias` (`idDependencia`, `dependencia`, `titular`, `calle`, `numExt`, `numInt`, `colonia`, `localidad`, `cp`, `tel1`, `tel2`, `Cumpleaños`, `comNombre`, `comMail`, `comTel`) VALUES
(3, 'Seguridad Vial', 'Jose cardona ', 'la paz', 200, 'A', 'La salud', 'Aguascalientes', '20156', '4491832256', '9784563', '0000-00-00', '', '', ''),
(4, 'SCT', 'Sunny Sup', 'lkjlkjlkj', 555, '', 'Kjlkjlk', 'Aguascalientes', '696687', '687687678', NULL, '0000-00-00', '', '', ''),
(5, 'IEA', 'ASDÑLKFJ', 'ASLÑDKJF', 332323, '', 'Morelos', 'Aguascalientes', '20298', '123123123', NULL, '0000-00-00', '', '', ''),
(6, 'lola', 'lola', 'calal', 545, 'a', 'klklk', 'lklklk', '86565', '5412121', NULL, '0000-00-00', '', '', ''),
(7, 'lulu', 'lklkmlkm', 'lkmlkmlkm', 777, 'm', 'kjnojnon', 'ojnojno', '687687', '687687687', NULL, '0000-00-00', '', '', ''),
(8, 'ere', 'llklklk', 'lklklk', 444, 'j', 'oijoij', 'oijoij', '', '', NULL, '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `direcciones`
--

CREATE TABLE IF NOT EXISTS `direcciones` (
  `idDireccion` int(11) NOT NULL AUTO_INCREMENT,
  `calle` varchar(100) NOT NULL,
  `noExt` int(11) NOT NULL,
  `noInt` varchar(11) DEFAULT NULL,
  `colonia` varchar(100) NOT NULL,
  `localidad` varchar(100) NOT NULL,
  `cp` int(11) NOT NULL,
  PRIMARY KEY (`idDireccion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `direcciones`
--

INSERT INTO `direcciones` (`idDireccion`, `calle`, `noExt`, `noInt`, `colonia`, `localidad`, `cp`) VALUES
(1, 'kkkk', 444, '', 'mmmmm', 'Aguascalientes', 4444),
(2, 'llll', 4, 'k', 'kkkkk', 'Aguascalientes', 444),
(3, 'lllll', 555, 'l', 'ololol', 'Aguascalientes', 545454);

-- --------------------------------------------------------

--
-- Table structure for table `estatus`
--

CREATE TABLE IF NOT EXISTS `estatus` (
  `idEstatus` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`idEstatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `estatus`
--

INSERT INTO `estatus` (`idEstatus`, `descripcion`) VALUES
(1, 'Pendiente'),
(2, 'Atendida');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `medios`
--

CREATE TABLE IF NOT EXISTS `medios` (
  `idMedios` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`idMedios`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `medios`
--

INSERT INTO `medios` (`idMedios`, `descripcion`) VALUES
(1, 'Televisión'),
(2, 'Radio'),
(5, 'Internet');

-- --------------------------------------------------------

--
-- Table structure for table `recepcion`
--

CREATE TABLE IF NOT EXISTS `recepcion` (
  `idRecepcion` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`idRecepcion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `recepcion`
--

INSERT INTO `recepcion` (`idRecepcion`, `descripcion`) VALUES
(1, 'Llamada'),
(2, 'SMS'),
(3, 'WhatsApp'),
(4, 'Redes Sociales'),
(5, 'Otros');

-- --------------------------------------------------------

--
-- Table structure for table `temp_users`
--

CREATE TABLE IF NOT EXISTS `temp_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(5, 'citla_jara', '$2a$08$gIZ9cxsqpL44ZSg6S3RXDesnZBJ465m7B6wt2wXpRY2wtmK39w.1i', 'citla.jadi@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2015-12-03 22:41:26', '2015-12-03 22:41:19', '2015-12-03 21:41:26'),
(6, 'admin', '$2a$08$dcCBtC1saSz7SAz6ezEj8u6IoNa5JW0Gu96Mug/5qUJh9GHu6rqtm', 'aiko.sga@hotmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2015-12-21 22:06:12', '2015-12-05 16:23:39', '2015-12-21 21:06:12');

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

CREATE TABLE IF NOT EXISTS `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`key_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE IF NOT EXISTS `user_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `country`, `website`) VALUES
(3, 5, NULL, NULL),
(4, 6, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `denuncias`
--
ALTER TABLE `denuncias`
  ADD CONSTRAINT `fk_ciudadanos` FOREIGN KEY (`idCiudadano`) REFERENCES `ciudadanos` (`idCiudadano`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
