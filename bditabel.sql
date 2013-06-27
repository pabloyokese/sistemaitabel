-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2013 a las 20:48:46
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bditabel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `id_adm` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) DEFAULT NULL,
  `cargo` varchar(300) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_adm`),
  KEY `id_persona` (`id_persona`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_adm`, `id_persona`, `cargo`, `password`, `fecha_inicio`, `fecha_fin`, `estado`) VALUES
(1, 1, 'Administrador', '123456', '2013-06-19', NULL, 'Activo'),
(2, 3, 'Direccion Academica', '789456', '2013-06-19', NULL, 'Activo'),
(3, 4, 'Caja', '321654', '2013-06-20', '2013-06-21', 'Inactivo'),
(4, 10, 'Caja', '951456', '2013-06-21', NULL, 'Activo'),
(6, 11, 'Direccion Academica', '9878', '2013-06-21', NULL, 'Activo'),
(10, 5, 'Caja', '5435', '2013-06-27', NULL, 'Activo'),
(12, 13, 'Administrador', '5646', '2013-06-27', NULL, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE IF NOT EXISTS `carrera` (
  `id_carrera` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) DEFAULT NULL,
  `matricula` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_carrera`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id_carrera`, `nombre`, `matricula`) VALUES
(1, 'Analista de Sistemas', 280),
(2, 'Algebra Lineal', 180),
(3, 'Enfermeria', 300),
(4, 'Cocina', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE IF NOT EXISTS `docente` (
  `id_docente` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_docente`),
  KEY `id_persona` (`id_persona`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id_docente`, `id_persona`, `fecha_inicio`, `fecha_fin`, `estado`) VALUES
(2, 15, '2013-06-27', NULL, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE IF NOT EXISTS `estudiante` (
  `id_estudiante` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `estado` varchar(30) NOT NULL,
  PRIMARY KEY (`id_estudiante`),
  KEY `id_persona` (`id_persona`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_estudiante`, `id_persona`, `password`, `estado`) VALUES
(1, 5, 'Caja', 'Activo'),
(2, 6, '93304', 'Activo'),
(3, 8, '618457', 'Inactivo'),
(4, 9, '111147', 'Activo'),
(5, 10, '67840', 'Activo'),
(6, 7, '57446', 'Activo'),
(7, 16, '40240', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habilitacion_materia`
--

CREATE TABLE IF NOT EXISTS `habilitacion_materia` (
  `id_habilitacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_docente` int(11) DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL,
  `fecha_1limite` date DEFAULT NULL,
  `fecha_2limite` date DEFAULT NULL,
  `mes` varchar(50) DEFAULT NULL,
  `turno` varchar(50) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_habilitacion`),
  KEY `id_docente` (`id_docente`),
  KEY `id_materia` (`id_materia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `habilitacion_materia`
--

INSERT INTO `habilitacion_materia` (`id_habilitacion`, `id_docente`, `id_materia`, `fecha_1limite`, `fecha_2limite`, `mes`, `turno`, `estado`) VALUES
(1, 2, 2, '2013-03-10', '2013-03-10', 'Marzo', 'mañana', 'Activo'),
(2, 2, 1, '2013-03-10', '2013-03-10', 'Marzo', 'tarde', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `sigla` varchar(50) DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `mensualidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id_materia`, `sigla`, `nombre`, `mensualidad`) VALUES
(1, 'INF-123', 'Tecnica Vocacional', 180),
(2, 'COC-454', 'Reposteria', 280);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriculacion`
--

CREATE TABLE IF NOT EXISTS `matriculacion` (
  `id_matriculacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_estudiante` int(11) DEFAULT NULL,
  `id_carrera` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `matricula` varchar(100) DEFAULT NULL,
  `turno` varchar(50) NOT NULL,
  PRIMARY KEY (`id_matriculacion`),
  KEY `id_estudiante` (`id_estudiante`),
  KEY `id_carrera` (`id_carrera`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `matriculacion`
--

INSERT INTO `matriculacion` (`id_matriculacion`, `id_estudiante`, `id_carrera`, `fecha`, `matricula`, `turno`) VALUES
(1, 4, 1, '2013-06-24', '280', 'noche'),
(2, 1, 3, '2013-06-25', '320', 'mañana'),
(3, 4, 1, '2013-06-25', '280', 'tarde'),
(5, 3, 2, '2013-06-25', '290', 'noche'),
(6, 3, 3, '2013-06-25', '290', 'noche'),
(7, 4, 2, '2013-06-25', '300', 'mañana'),
(8, 4, 1, '2013-06-26', '180', 'mañana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mat_car`
--

CREATE TABLE IF NOT EXISTS `mat_car` (
  `id_mat_car` int(11) NOT NULL AUTO_INCREMENT,
  `id_carrera` int(11) DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mat_car`),
  KEY `id_carrera` (`id_carrera`),
  KEY `id_materia` (`id_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `ci` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `ap` varchar(200) DEFAULT NULL,
  `am` varchar(200) DEFAULT NULL,
  `zona` varchar(200) DEFAULT NULL,
  `calle` varchar(200) DEFAULT NULL,
  `num` varchar(20) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `celular` varchar(30) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `cenombre` varchar(300) DEFAULT NULL,
  `cerelacion` varchar(200) DEFAULT NULL,
  `cedireccion` varchar(300) DEFAULT NULL,
  `cetelefono` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_persona`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `ci`, `nombre`, `ap`, `am`, `zona`, `calle`, `num`, `telefono`, `celular`, `email`, `cenombre`, `cerelacion`, `cedireccion`, `cetelefono`) VALUES
(1, 5798254, 'Jorge Noel', 'Vaquera', 'Vidaurre', 'Salamanca', 'Ma. de Torrejon', '899', '66-44410', '78955665', 'jorvaq@gmail.com', 'Juan Perez', 'Amigo', 'Zona Central, Calle Colon esq. Bolivar', '66425874'),
(3, 6794585, 'Antonio', 'Sandival', 'Perez', 'Central', 'Bolivar', '765', '455987', '72964851', 'Anton@lalala', 'Maria', 'hermana', 'cetral', '41321'),
(4, 6294873, 'Maria', 'Donaire', 'Jerez', 'San Jorge', 'Av. Victor Paz', 's/n', '35546', '6015428', 'MAria@hotmail.com', 'Cesar', 'Primo', 'Moto Mendez, Calle Bernal s/n', '76382223'),
(5, 58745545, 'Dario', 'Ferral', '', 'Cuarto Centario', 'Banda LA', '345', '6645875', '7924651', 'Dario@gmail.com', 'Jorge', 'Padre', 'La Loma', NULL),
(6, 1645852, 'Sara', 'Coimbra', 'Mendieta', 'Mercado Campesino', 'Las brazas', '587', '46785', '65874554', 'Sara@gmail.com', 'Beto', 'Hermano', 'San Roque esq. Gral. Trigo', '564467'),
(7, 74158255, 'Juancito', 'Velasquez', 'Doria', 'San Bernardo', 'Camaleon', '662', '467845', '77585422', 'Juan@gmail.com', 'Micaela', 'Esposa', 'San Bernardo', '433442'),
(8, 6985558, 'Hector', 'Pinilla', 'Juerez', 'San Marcos', 'Benedicto', '989', '446587', '7324851', 'Be@hotmail.com', 'Rene', 'Hijo', 'Tabladita etc...', '456222'),
(9, 112233, 'Marcelino', 'Kan', 'Fernandez', 'Mendez Arcos', 'Flores', '942', '4324324', '465469', 'Marcel@hotma.com', 'Jerman', 'Vecino', 'Mendez Arcos calle maria del antelo', '399191'),
(10, 9928273, 'Wendy', 'Guzman', 'Iriarte', 'La loma', 'funcio', '787', '454645', '1235487', 'jhds@goma.com', 'Fernando', 'Hermano', 'La loma esq. Manaco', '6768768'),
(11, 7418154, 'Vicente', 'Lopez', 'Amador', '14 Viviendas', 'Crnl. Barnardo', '511', '54878', '74156412', 'Ver@gifdg.com', 'Celia', 'Esposa', 'Camenterio', '78798454'),
(13, 45512, 'hfgh', 'fgh', 'fghg', 'fghgfhgf', 'khjl', '809', '90809', '0989', 'jhg', 'gfhdg', '55544', 'gfdsg', '6546546'),
(15, 7, 'Miguel', 'Alvares', 'Ramires', 'ghfdhgf', 'gfhgfh', '4657467', '657657', '65756', 'jhgjghj', 'jghjgh', 'dsfs', 'sdfds', '234324'),
(16, 8, 'fghfg', 'hfgh', 'fghfgh', 'fghfgh', 'fghgfh', '567', '567657', '56765', 'jhgjghjgh', 'jghjhj', 'ghjghjghfdgfd', 'gdfgfdgd', '36545');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`);

--
-- Filtros para la tabla `docente`
--
ALTER TABLE `docente`
  ADD CONSTRAINT `docente_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`);

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`);

--
-- Filtros para la tabla `habilitacion_materia`
--
ALTER TABLE `habilitacion_materia`
  ADD CONSTRAINT `habilitacion_materia_ibfk_1` FOREIGN KEY (`id_docente`) REFERENCES `docente` (`id_docente`),
  ADD CONSTRAINT `habilitacion_materia_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`);

--
-- Filtros para la tabla `matriculacion`
--
ALTER TABLE `matriculacion`
  ADD CONSTRAINT `matriculacion_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`),
  ADD CONSTRAINT `matriculacion_ibfk_2` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id_carrera`);

--
-- Filtros para la tabla `mat_car`
--
ALTER TABLE `mat_car`
  ADD CONSTRAINT `mat_car_ibfk_1` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id_carrera`),
  ADD CONSTRAINT `mat_car_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
