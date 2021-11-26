-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-11-2021 a las 23:17:21
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tramite`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencia`
--

DROP TABLE IF EXISTS `dependencia`;
CREATE TABLE IF NOT EXISTS `dependencia` (
  `id_dependencia` int(11) NOT NULL AUTO_INCREMENT,
  `nombredependencia` varchar(100) NOT NULL,
  PRIMARY KEY (`id_dependencia`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dependencia`
--

INSERT INTO `dependencia` (`id_dependencia`, `nombredependencia`) VALUES
(1, 'RECTORADO'),
(2, 'VICERECTORADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

DROP TABLE IF EXISTS `estado`;
CREATE TABLE IF NOT EXISTS `estado` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `nombreestado` varchar(100) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `nombreestado`) VALUES
(1, 'ENTREGADO'),
(2, 'RECIBIDO'),
(3, 'FINALIZADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expediente`
--

DROP TABLE IF EXISTS `expediente`;
CREATE TABLE IF NOT EXISTS `expediente` (
  `codfut` varchar(30) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `codusuario` int(11) NOT NULL,
  KEY `codfut` (`codfut`),
  KEY `id_estado` (`id_estado`),
  KEY `codusuario` (`codusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fut`
--

DROP TABLE IF EXISTS `fut`;
CREATE TABLE IF NOT EXISTS `fut` (
  `codfut` varchar(30) NOT NULL,
  `passfut` varchar(50) NOT NULL,
  `id_tipopersona` int(11) NOT NULL,
  `id_dependencia` int(11) NOT NULL,
  `apaterno` varchar(200) NOT NULL,
  `amaterno` varchar(200) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `nrodocumento` varchar(10) NOT NULL,
  `celular` varchar(9) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `fundamento` varchar(400) NOT NULL,
  `titulo_solicitud` varchar(50) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`codfut`),
  KEY `id_tipopersona` (`id_tipopersona`),
  KEY `id_dependencia` (`id_dependencia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fut`
--

INSERT INTO `fut` (`codfut`, `passfut`, `id_tipopersona`, `id_dependencia`, `apaterno`, `amaterno`, `nombres`, `nrodocumento`, `celular`, `correo`, `fundamento`, `titulo_solicitud`, `ruta`, `fecha`) VALUES
('2021-238', '5hfggf5h', 2, 1, 'erique', 'torres', 'zinedine', '70299227', '972080020', 'eriquezinedine@gmail.com', 'espero que funcione esta ves por favor', 'Funcionara', 'NO HAY RUTA', '2021-10-25'),
('2021-249', 'hsghgfgg', 1, 1, 'torres', 'torres', 'zinedine', '70299227', '942700655', 'eriquezinedine@gmail.com', 'OJALA FUNQUE', 'GANAR', 'NO HAY RUTA', '2021-11-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nombrerol` varchar(100) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombrerol`) VALUES
(1, 'Administrador'),
(2, 'Alumno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipopersona`
--

DROP TABLE IF EXISTS `tipopersona`;
CREATE TABLE IF NOT EXISTS `tipopersona` (
  `id_tipopersona` int(11) NOT NULL AUTO_INCREMENT,
  `tipopersona` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tipopersona`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipopersona`
--

INSERT INTO `tipopersona` (`id_tipopersona`, `tipopersona`) VALUES
(1, 'Docente'),
(2, 'Alumno'),
(3, 'Cesante'),
(4, 'Administrativo'),
(5, 'Egresado'),
(6, 'VIsitante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `codusuario` int(11) NOT NULL AUTO_INCREMENT,
  `passusuario` varchar(10) NOT NULL,
  `correousuario` varchar(100) NOT NULL,
  `id_rol` int(11) NOT NULL,
  PRIMARY KEY (`codusuario`),
  KEY `id_rol` (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `expediente`
--
ALTER TABLE `expediente`
  ADD CONSTRAINT `expediente_ibfk_1` FOREIGN KEY (`codfut`) REFERENCES `fut` (`codfut`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `expediente_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `expediente_ibfk_3` FOREIGN KEY (`codusuario`) REFERENCES `usuario` (`codusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fut`
--
ALTER TABLE `fut`
  ADD CONSTRAINT `fut_ibfk_1` FOREIGN KEY (`id_tipopersona`) REFERENCES `tipopersona` (`id_tipopersona`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fut_ibfk_2` FOREIGN KEY (`id_dependencia`) REFERENCES `dependencia` (`id_dependencia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
