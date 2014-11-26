-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 26-07-2014 a las 10:24:17
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `muni`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `adhesiones`
-- 

CREATE TABLE `adhesiones` (
  `camp0` int(11) NOT NULL auto_increment,
  `idprod` int(11) NOT NULL default '0',
  `idautordes` int(11) NOT NULL default '0',
  `nomautordes` char(50) collate utf8_unicode_ci default NULL,
  `idautorori` int(11) NOT NULL default '0',
  `nomautorori` char(50) collate utf8_unicode_ci default NULL,
  `preg` text collate utf8_unicode_ci NOT NULL,
  `estado` char(50) collate utf8_unicode_ci default NULL,
  `tipo` char(50) collate utf8_unicode_ci default NULL,
  `fecha` char(50) collate utf8_unicode_ci default NULL,
  `link` text collate utf8_unicode_ci NOT NULL,
  KEY `camp0` (`camp0`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `adhesiones`
-- 

INSERT INTO `adhesiones` VALUES (1, 1, 0, '', 4, 'carlos21', '', '', NULL, '2014-06-25', '');
INSERT INTO `adhesiones` VALUES (2, 1, 0, '', 7, 'Alfonso40', '', '', NULL, '2014-06-25', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `cantantes`
-- 

CREATE TABLE `cantantes` (
  `camp0` int(11) NOT NULL auto_increment,
  `id1` int(11) NOT NULL default '0',
  `nombre` char(50) default NULL,
  `descripcion` text NOT NULL,
  `biografia` text NOT NULL,
  `recomendacion` text NOT NULL,
  `tipo` char(50) default NULL,
  `decada` char(50) default NULL,
  `estilo` char(50) default NULL,
  `fecha` char(50) default NULL,
  `autor` char(50) default NULL,
  `foto` varchar(50) NOT NULL,
  `region` varchar(30) NOT NULL,
  `partido` varchar(40) NOT NULL,
  `partidosiglas` varchar(10) NOT NULL,
  `grupoparla` varchar(30) NOT NULL,
  `pase` tinyint(3) NOT NULL,
  `i1` int(11) NOT NULL,
  `i2` int(11) NOT NULL,
  `i3` int(11) NOT NULL,
  `i4` int(11) NOT NULL,
  KEY `camp0` (`camp0`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=362 ;

-- 
-- Volcar la base de datos para la tabla `cantantes`
-- 

INSERT INTO `cantantes` VALUES (361, 0, 'Chiclayo', '', '', '', NULL, NULL, 'LAMBAYEQUE', '11-07-2014', 'ADMIN', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (360, 0, 'Ferreñafe', '', '', '', NULL, NULL, 'LAMBAYEQUE', '11-07-2014', 'ADMIN', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (359, 0, 'Lambayeque', '', '', '', NULL, NULL, 'LAMBAYEQUE', '11-07-2014', 'ADMIN', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (358, 0, 'Islay', '', '', '', NULL, NULL, 'AREQUIPA', '11-07-2014', 'ADMIN', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (357, 0, 'Arequipa', '', '', '', NULL, NULL, 'AREQUIPA', '11-07-2014', 'ADMIN', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (356, 0, 'Camana', '', '', '', NULL, NULL, 'AREQUIPA', '11-07-2014', 'ADMIN', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (355, 0, 'Caraveli', '', '', '', NULL, NULL, 'AREQUIPA', '11-07-2014', 'ADMIN', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (354, 0, 'Ascope', '', '', '', NULL, NULL, 'LA LIBERTAD', '11-07-2014', 'ADMIN', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (295, 0, 'Ancon', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (296, 0, 'Ate', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (297, 0, 'Barranco', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (298, 0, 'Bre&ntilde;a', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (299, 0, 'Carabayllo', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (300, 0, 'Chaclacayo', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (301, 0, 'Chorrillos', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (302, 0, 'Comas', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (303, 0, 'El Agustino', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (304, 0, 'Independencia', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (305, 0, 'Jesus Maria', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (306, 0, 'La Molina', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (307, 0, 'La Victoria', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (308, 0, 'Cercado', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (309, 0, 'Lince', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (310, 0, 'Los Olivos', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (311, 0, 'Lurigancho', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (312, 0, 'Chosica', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (313, 0, 'Magdalena', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (314, 0, 'Miraflores', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (315, 0, 'Pueblo Libre', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (316, 0, 'Puente Piedra', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (317, 0, 'Rimac', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (318, 0, 'San Borja', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (319, 0, 'San Isidro', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (320, 0, 'San Juan de Lurigancho', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (321, 0, 'San Juan de Miraflores', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (322, 0, 'San Luis', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (323, 0, 'San Martin de Porres', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (324, 0, 'San Miguel', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (325, 0, 'Santa Anita', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (326, 0, 'Surco', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (327, 0, 'Surquillo', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (328, 0, 'Villa El Salvador', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (329, 0, 'Villa Maria del Triunfo', '', '', '', NULL, NULL, 'LIMA', '07 Jun 2014', 'user4', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (353, 0, 'Viru', '', '', '', NULL, NULL, 'LA LIBERTAD', '11-07-2014', 'ADMIN', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (352, 0, 'Otuzco', '', '', '', NULL, NULL, 'LA LIBERTAD', '11-07-2014', 'ADMIN', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (351, 0, 'Santiago de Chuco', '', '', '', NULL, NULL, 'LA LIBERTAD', '11-07-2014', 'ADMIN', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (350, 0, 'Pacasmayo', '', '', '', NULL, NULL, 'LA LIBERTAD', '11-07-2014', 'ADMIN', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (349, 0, 'Trujillo', '', '', '', NULL, NULL, 'LA LIBERTAD', '11-07-2014', 'ADMIN', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (348, 0, 'Recuay', '', '', '', NULL, NULL, 'ANCASH', '11-07-2014', 'ADMIN', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (347, 0, 'Casma', '', '', '', NULL, NULL, 'ANCASH', '11-07-2014', 'ADMIN', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (346, 0, 'Huarmey', '', '', '', NULL, NULL, 'ANCASH', '11-07-2014', 'ADMIN', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (345, 0, 'Huaraz', '', '', '', NULL, NULL, 'ANCASH', '11-07-2014', 'ADMIN', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `cantantes` VALUES (344, 0, 'Chimbote', '', '', '', NULL, NULL, 'ANCASH', '11-07-2014', 'ADMIN', '', '', '', '', '', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `contacto`
-- 

CREATE TABLE `contacto` (
  `camp0` int(11) NOT NULL auto_increment,
  `titulo` char(50) default NULL,
  `descripcion` text NOT NULL,
  `fecha` char(50) default NULL,
  `autor` char(50) default NULL,
  KEY `camp0` (`camp0`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `contacto`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `distritos`
-- 

CREATE TABLE `distritos` (
  `camp0` int(11) NOT NULL auto_increment,
  `id1` int(11) NOT NULL default '0',
  `id2` int(11) NOT NULL default '0',
  `id3` int(11) NOT NULL default '0',
  `nombre` char(50) default NULL,
  `visible` int(11) NOT NULL default '0',
  KEY `camp0` (`camp0`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

-- 
-- Volcar la base de datos para la tabla `distritos`
-- 

INSERT INTO `distritos` VALUES (1, 1, 1, 0, 'Ancon', 0);
INSERT INTO `distritos` VALUES (2, 2, 1, 0, 'Ate', 0);
INSERT INTO `distritos` VALUES (3, 3, 1, 0, 'Barranco', 0);
INSERT INTO `distritos` VALUES (4, 4, 0, 0, 'Bre&ntilde;a', 0);
INSERT INTO `distritos` VALUES (5, 5, 0, 0, 'Carabayllo', 0);
INSERT INTO `distritos` VALUES (6, 6, 0, 0, 'Chaclacayo', 0);
INSERT INTO `distritos` VALUES (7, 7, 0, 0, 'Chorrillos', 0);
INSERT INTO `distritos` VALUES (8, 8, 0, 0, 'Comas', 0);
INSERT INTO `distritos` VALUES (9, 9, 0, 0, 'El Agustino', 0);
INSERT INTO `distritos` VALUES (10, 10, 1, 0, 'Independencia', 0);
INSERT INTO `distritos` VALUES (11, 11, 1, 0, 'Jesus Maria', 0);
INSERT INTO `distritos` VALUES (12, 12, 0, 0, 'La Molina', 0);
INSERT INTO `distritos` VALUES (13, 16, 1, 0, 'La Victoria', 0);
INSERT INTO `distritos` VALUES (14, 17, 1, 0, 'Cercado', 0);
INSERT INTO `distritos` VALUES (15, 18, 0, 0, 'Lince', 0);
INSERT INTO `distritos` VALUES (16, 19, 1, 0, 'Los Olivos', 0);
INSERT INTO `distritos` VALUES (17, 20, 0, 0, 'Lurigancho', 0);
INSERT INTO `distritos` VALUES (18, 21, 1, 0, 'Chosica', 0);
INSERT INTO `distritos` VALUES (19, 22, 0, 0, 'Magdalena', 0);
INSERT INTO `distritos` VALUES (20, 23, 1, 0, 'Miraflores', 0);
INSERT INTO `distritos` VALUES (21, 24, 0, 0, 'Pueblo Libre', 0);
INSERT INTO `distritos` VALUES (22, 25, 1, 0, 'Puente Piedra', 0);
INSERT INTO `distritos` VALUES (23, 0, 0, 0, NULL, 0);
INSERT INTO `distritos` VALUES (24, 26, 0, 0, 'Rimac', 0);
INSERT INTO `distritos` VALUES (25, 27, 1, 0, 'San Borja', 0);
INSERT INTO `distritos` VALUES (26, 28, 1, 0, 'San Isidro', 0);
INSERT INTO `distritos` VALUES (27, 29, 1, 0, 'San Juan de Lurigancho', 0);
INSERT INTO `distritos` VALUES (28, 30, 0, 0, 'San Juan de Miraflores', 0);
INSERT INTO `distritos` VALUES (29, 31, 0, 0, 'San Luis', 0);
INSERT INTO `distritos` VALUES (30, 32, 0, 0, 'San Martin de Porres', 0);
INSERT INTO `distritos` VALUES (31, 33, 0, 0, 'San Miguel', 0);
INSERT INTO `distritos` VALUES (32, 34, 0, 0, 'Santa Anita', 0);
INSERT INTO `distritos` VALUES (33, 35, 0, 0, 'Surco', 0);
INSERT INTO `distritos` VALUES (34, 36, 0, 0, 'Surquillo', 0);
INSERT INTO `distritos` VALUES (35, 37, 1, 0, 'Villa El Salvador', 0);
INSERT INTO `distritos` VALUES (36, 38, 0, 0, 'Villa Maria del Triunfo', 0);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `estilos`
-- 

CREATE TABLE `estilos` (
  `camp0` int(11) NOT NULL auto_increment,
  `idestilo` varchar(20) NOT NULL default '0',
  `nombre` char(50) default NULL,
  `descripcion` text NOT NULL,
  `orden` tinyint(3) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  KEY `camp0` (`camp0`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

-- 
-- Volcar la base de datos para la tabla `estilos`
-- 

INSERT INTO `estilos` VALUES (3, 'al', 'ANCASH', '', 0, '');
INSERT INTO `estilos` VALUES (23, 'min', 'LIMA', '', 2, '');
INSERT INTO `estilos` VALUES (22, 'otr', 'Otros', '', 0, '');
INSERT INTO `estilos` VALUES (21, 'cand', 'LA LIBERTAD', '', 1, '');
INSERT INTO `estilos` VALUES (19, 'cong', 'AREQUIPA', '', 2, '');
INSERT INTO `estilos` VALUES (20, 'mun', 'LAMBAYEQUE', '', 2, '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `mensajes`
-- 

CREATE TABLE `mensajes` (
  `camp0` int(11) NOT NULL auto_increment,
  `idprod` int(11) NOT NULL default '0',
  `idautordes` int(11) NOT NULL default '0',
  `nomautordes` char(50) collate utf8_unicode_ci default NULL,
  `idautorori` int(11) NOT NULL default '0',
  `nomautorori` char(50) collate utf8_unicode_ci default NULL,
  `preg` text collate utf8_unicode_ci NOT NULL,
  `estado` char(50) collate utf8_unicode_ci default NULL,
  `tipo` char(50) collate utf8_unicode_ci default NULL,
  `fecha` char(50) collate utf8_unicode_ci default NULL,
  KEY `camp0` (`camp0`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `mensajes`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `operaciones`
-- 

CREATE TABLE `operaciones` (
  `camp0` int(11) NOT NULL auto_increment,
  `idor` int(11) NOT NULL default '0',
  `iddes` int(11) NOT NULL default '0',
  `loginor` char(50) default NULL,
  `logindes` char(50) default NULL,
  `producto` varchar(80) NOT NULL,
  `idprod` int(11) NOT NULL,
  `tipo` char(50) default NULL,
  `precio` char(50) default NULL,
  `cant` char(50) default NULL,
  `fecha` char(50) default NULL,
  `fechan` varchar(15) NOT NULL,
  `album` char(50) default NULL,
  KEY `camp0` (`camp0`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

-- 
-- Volcar la base de datos para la tabla `operaciones`
-- 

INSERT INTO `operaciones` VALUES (12, 3, 3, 'user4', 'user4', 'titulo queja', 17, '', NULL, NULL, '16 May 2014', '', NULL);
INSERT INTO `operaciones` VALUES (13, 3, 3, 'user4', 'user4', 'titulo queja', 17, '', NULL, NULL, '16 May 2014', '', NULL);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `preguntas`
-- 

CREATE TABLE `preguntas` (
  `camp0` int(11) NOT NULL auto_increment,
  `idprod` int(11) NOT NULL default '0',
  `idautordes` int(11) NOT NULL default '0',
  `nomautordes` char(50) collate utf8_unicode_ci default NULL,
  `idautorori` int(11) NOT NULL default '0',
  `nomautorori` char(50) collate utf8_unicode_ci default NULL,
  `preg` text collate utf8_unicode_ci NOT NULL,
  `estado` char(50) collate utf8_unicode_ci default NULL,
  `tipo` char(50) collate utf8_unicode_ci default NULL,
  `fecha` char(50) collate utf8_unicode_ci default NULL,
  KEY `camp0` (`camp0`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `preguntas`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `puntos`
-- 

CREATE TABLE `puntos` (
  `camp0` int(11) NOT NULL auto_increment,
  `idor` int(11) NOT NULL default '0',
  `iddes` int(11) NOT NULL default '0',
  `puntos` int(11) NOT NULL default '0',
  `loginor` char(50) default NULL,
  `logindes` char(50) default NULL,
  `tipo` char(50) default NULL,
  `fecha` char(50) default NULL,
  `fechan` varchar(15) NOT NULL,
  `album` char(50) default NULL,
  KEY `camp0` (`camp0`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `puntos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tienda`
-- 

CREATE TABLE `tienda` (
  `camp0` int(11) NOT NULL auto_increment,
  `idcant` int(11) NOT NULL default '0',
  `autor` char(50) collate utf8_unicode_ci default NULL,
  `idautor` int(11) NOT NULL,
  `nombre` char(50) collate utf8_unicode_ci default NULL,
  `stock` tinyint(6) NOT NULL,
  `descripcion` text collate utf8_unicode_ci NOT NULL,
  `tipo` char(50) collate utf8_unicode_ci default NULL,
  `precio` char(50) collate utf8_unicode_ci default NULL,
  `moneda` varchar(10) collate utf8_unicode_ci NOT NULL,
  `precio1` decimal(8,2) NOT NULL,
  `precio2` decimal(8,2) NOT NULL,
  `fecha` char(50) collate utf8_unicode_ci default NULL,
  `fechan` varchar(15) collate utf8_unicode_ci NOT NULL,
  `foto` char(50) collate utf8_unicode_ci default NULL,
  `album` char(50) collate utf8_unicode_ci default NULL,
  `decada` char(50) collate utf8_unicode_ci default NULL,
  `estilo` char(50) collate utf8_unicode_ci default NULL,
  `estado` tinyint(3) NOT NULL,
  `pais` varchar(30) collate utf8_unicode_ci NOT NULL,
  `obs` text collate utf8_unicode_ci NOT NULL,
  `duracion` tinyint(3) NOT NULL,
  `idcat` tinyint(3) NOT NULL,
  `estadoprod` varchar(50) collate utf8_unicode_ci NOT NULL,
  `apoyos` varchar(10) collate utf8_unicode_ci NOT NULL,
  `respuesta` text collate utf8_unicode_ci NOT NULL,
  `resplink` text collate utf8_unicode_ci NOT NULL,
  `lugarref` varchar(200) collate utf8_unicode_ci NOT NULL,
  KEY `camp0` (`camp0`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `tienda`
-- 

INSERT INTO `tienda` VALUES (1, 295, 'jimenez', 2, ' indiferencia de burgomaestre de Ancon.', 0, 'Últimamente, la queja de los vecinos es generalizada, por el total desencanto que tienen con su alcalde John Barrera Bernui, quien al parecer se ha olvidado de las antiguas calles están deterioradas por el tiempo y que hasta hoy ningún alcalde se ha preocupado por renovarlas.\r\nEs más, el burgomaestre no invierte en obras prioritarias que requiere la población, aduciendo que no hay presupuesto. En cuanto a seguridad ciudadana se han colocado casetas de seguridad ciudadana y no cuenta con ningún sereno en dicho el lugar, están abandonados; incluso los efectivos de serenazgo se llevan a sus casas las motos lineales, camionetas de la municipalidad como si fuesen de su propiedad, prueba de ello hace unos meses falleció un sereno, quien luego de haber cumplido sus servicio se fue a libar licor con la moto del municipio hasta el día siguiente  y, por la mañana en el trayecto al km. 39 murió en un aparatoso choque. Y, de los fumones, drogadictos,  ni que hablar, cada día se incrementa  al 100% de adolescentes y jóvenes de la zona.', '', '25.00', '', 0.00, 0.00, '25 Jun 2014', '', '', NULL, NULL, NULL, 0, '', '', 0, 0, '', '2', '', '', 'antiguas calles de Ancon');
INSERT INTO `tienda` VALUES (2, 296, 'jimenez', 2, 'BARES-CANTINA Y PROSTITUCION.', 0, 'ALERTA:   \r\n\r\nNOS HAN INFORMADO CON PRUEBAS  ., SOBRE 04 BARES-CANTINA Y PROSTITUCION., CERCA A LOS PORTALES DE JAVIER PRADO 2DA Y 3RA ET., VIRGEN DE CARMEN Y URB.LOS ANGELES., SIN AUTORIZACION MUNICIPAL., LOS INGREIDOS DE FISCALIZACION DE LA MUNICIPALIDAD DE ATE .\r\nADEMAS DEPOSITOS Y TALLERES CLANDESTINOS., NUEVAMENTE , EN LUGARES NO AUTORIZADOS., Y SIN LICENCIAS., IGUALMENTE PROTEGIDOS POR LA MUNICIPALIDAD DE ATE., EN LOS ALREDEDORES., DE LA URB LOS PORTALES DE JAVIER PRADO 2DA Y 3RA ETAPA EN ATE (UNA UBICADA EN LA MISMA CALLE HOLANDA Y ALREDEDORES)....\r\n\r\nESTAREMOS DENUNCIANDO Y PUBLICANDO LAS UBICACIONES , NOMBRES Y LUGARES...EN LA QUE LA MUNICIPALIDAD DE ATE LOS PROTEJA¡¡¡¡¡', '', '25.00', '', 0.00, 0.00, '25 Jun 2014', '', '', NULL, NULL, NULL, 0, '', '', 0, 0, '', '', '', '', 'ERCA A LOS PORTALES DE JAVIER PRADO 2DA Y 3RA ET., VIRGEN DE CARMEN Y URB.LOS ANGELES');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuarios`
-- 

CREATE TABLE `usuarios` (
  `camp0` int(11) NOT NULL auto_increment,
  `id1` int(11) NOT NULL default '1',
  `nombre` char(50) collate utf8_unicode_ci default NULL,
  `email` char(50) collate utf8_unicode_ci default NULL,
  `login` char(50) collate utf8_unicode_ci default NULL,
  `pass` char(50) collate utf8_unicode_ci default NULL,
  `nombrereal` varchar(50) collate utf8_unicode_ci NOT NULL,
  `descripcion` text collate utf8_unicode_ci NOT NULL,
  `direccion` char(50) collate utf8_unicode_ci default NULL,
  `pais` char(50) collate utf8_unicode_ci default NULL,
  `prov` char(50) collate utf8_unicode_ci default NULL,
  `distrito` varchar(30) collate utf8_unicode_ci NOT NULL,
  `telefono` char(50) collate utf8_unicode_ci default NULL,
  `puntos` int(11) NOT NULL default '0',
  `tventas` int(11) NOT NULL default '0',
  `tcompras` int(11) NOT NULL default '0',
  `fecha` char(50) collate utf8_unicode_ci default NULL,
  `edad` char(50) collate utf8_unicode_ci default NULL,
  `ultfecha` char(50) collate utf8_unicode_ci default NULL,
  `dni` varchar(15) collate utf8_unicode_ci NOT NULL,
  `face` varchar(100) collate utf8_unicode_ci NOT NULL,
  `verificado` tinyint(3) NOT NULL,
  `repre` varchar(50) collate utf8_unicode_ci NOT NULL,
  `retorno` varchar(120) collate utf8_unicode_ci NOT NULL,
  `advertencias` tinyint(3) NOT NULL,
  KEY `camp0` (`camp0`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

-- 
-- Volcar la base de datos para la tabla `usuarios`
-- 

INSERT INTO `usuarios` VALUES (2, 0, 'jimenez', 'jimenez', 'jimenez', 'jimenez', '', '', NULL, '', NULL, '', NULL, 0, 0, 0, '', '', NULL, '', '', 0, '', '', 0);
INSERT INTO `usuarios` VALUES (3, 0, 'user4', 'user4', 'user4', 'user4', '', '', NULL, '', '', '', NULL, 0, 0, 0, '', '', NULL, '', '', 0, '295', '', 0);
INSERT INTO `usuarios` VALUES (4, 0, 'carlos21', 'carlos21', 'carlos21', 'carlos21', '', '', NULL, '', NULL, '', NULL, 0, 0, 0, '', '', NULL, '', '', 0, '', '', 0);
INSERT INTO `usuarios` VALUES (7, 0, 'Alfonso40', 'Alfonso40', 'Alfonso40', 'Alfonso40', '', '', NULL, 'PERU', NULL, '', NULL, 0, 0, 0, 'PERU', '', NULL, '', '', 0, '', '', 0);
