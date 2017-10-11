-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-10-2017 a las 22:05:13
-- Versión del servidor: 5.7.17-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `soberano`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiarios`
--

CREATE TABLE `beneficiarios` (
  `id` int(11) NOT NULL,
  `solicitud_id` int(11) NOT NULL,
  `nombre_apellido` varchar(100) NOT NULL,
  `cedula` int(8) NOT NULL,
  `fecha_nacimiento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `beneficiarios`
--

INSERT INTO `beneficiarios` (`id`, `solicitud_id`, `nombre_apellido`, `cedula`, `fecha_nacimiento`) VALUES
(4, 10, 'Silva Guevara Carlos Hugo', 19881315, '1989-5-30'),
(5, 13, 'Silva Guevara Carlos Hugo', 19881315, '1989-5-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_solicitud`
--

CREATE TABLE `detalle_solicitud` (
  `id` int(11) NOT NULL,
  `solicitud_id` int(11) NOT NULL,
  `requerimiento_categoria_id` int(11) NOT NULL,
  `requerimiento_id` int(11) NOT NULL,
  `observacion` varchar(250) DEFAULT NULL,
  `consignado` int(1) NOT NULL,
  `eliminar` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_solicitud`
--

INSERT INTO `detalle_solicitud` (`id`, `solicitud_id`, `requerimiento_categoria_id`, `requerimiento_id`, `observacion`, `consignado`, `eliminar`) VALUES
(1, 1, 23, 1, NULL, 1, 0),
(2, 1, 23, 2, NULL, 1, 0),
(3, 1, 23, 4, NULL, 1, 0),
(4, 1, 23, 5, NULL, 1, 0),
(5, 1, 23, 6, NULL, 1, 0),
(6, 1, 23, 7, NULL, 1, 0),
(7, 2, 0, 8, NULL, 1, 0),
(8, 2, 0, 9, NULL, 1, 0),
(9, 2, 0, 10, NULL, 1, 0),
(10, 2, 0, 11, NULL, 1, 0),
(11, 2, 0, 12, NULL, 1, 0),
(12, 2, 0, 13, NULL, 1, 0),
(13, 2, 0, 14, NULL, 1, 0),
(14, 2, 0, 15, NULL, 1, 0),
(15, 3, 24, 1, NULL, 1, 0),
(16, 3, 24, 2, NULL, 1, 0),
(17, 3, 24, 3, NULL, 1, 0),
(18, 3, 24, 4, NULL, 1, 0),
(19, 3, 24, 5, NULL, 1, 0),
(20, 3, 24, 6, NULL, 1, 0),
(21, 3, 24, 7, NULL, 1, 0),
(22, 4, 23, 1, NULL, 1, 0),
(23, 4, 23, 2, NULL, 1, 0),
(24, 4, 23, 3, NULL, 1, 0),
(25, 4, 23, 4, NULL, 1, 0),
(26, 4, 23, 5, NULL, 1, 0),
(27, 4, 23, 6, NULL, 1, 0),
(28, 4, 23, 7, NULL, 1, 0),
(29, 5, 1, 16, NULL, 1, 0),
(30, 5, 1, 17, NULL, 1, 0),
(31, 5, 1, 18, NULL, 1, 0),
(32, 5, 1, 19, NULL, 1, 0),
(33, 5, 1, 20, NULL, 1, 0),
(34, 7, 1, 16, NULL, 1, 0),
(35, 7, 1, 17, NULL, 1, 0),
(36, 7, 1, 18, NULL, 1, 0),
(37, 7, 1, 19, NULL, 1, 0),
(38, 7, 1, 20, NULL, 1, 0),
(39, 8, 23, 1, NULL, 1, 0),
(40, 8, 23, 2, NULL, 1, 0),
(41, 8, 23, 3, NULL, 1, 0),
(42, 8, 23, 4, NULL, 1, 0),
(43, 8, 23, 5, NULL, 1, 0),
(44, 8, 23, 6, NULL, 1, 0),
(45, 8, 23, 7, NULL, 1, 0),
(46, 9, 1, 16, NULL, 1, 0),
(47, 9, 1, 17, NULL, 1, 0),
(48, 9, 1, 18, NULL, 1, 0),
(49, 9, 1, 19, NULL, 1, 0),
(50, 9, 1, 20, NULL, 1, 0),
(51, 10, 23, 1, NULL, 1, 0),
(52, 10, 23, 2, NULL, 1, 0),
(53, 10, 23, 3, NULL, 1, 0),
(54, 10, 23, 4, NULL, 1, 0),
(55, 10, 23, 5, NULL, 1, 0),
(56, 10, 23, 6, NULL, 1, 0),
(57, 10, 23, 7, NULL, 1, 0),
(58, 11, 1, 16, NULL, 1, 0),
(59, 11, 1, 17, NULL, 1, 0),
(60, 11, 1, 18, NULL, 1, 0),
(61, 11, 1, 19, NULL, 1, 0),
(62, 11, 1, 20, NULL, 1, 0),
(63, 12, 16, 16, NULL, 1, 0),
(64, 12, 16, 17, NULL, 1, 0),
(65, 12, 16, 18, NULL, 1, 0),
(66, 12, 16, 19, NULL, 1, 0),
(67, 12, 16, 20, NULL, 1, 0),
(68, 13, 1, 16, NULL, 1, 0),
(69, 13, 1, 17, NULL, 1, 0),
(70, 13, 1, 18, NULL, 1, 0),
(71, 13, 1, 19, NULL, 1, 0),
(72, 13, 1, 20, NULL, 1, 0),
(73, 14, 3, 16, NULL, 1, 0),
(74, 14, 3, 17, NULL, 1, 0),
(75, 14, 3, 18, NULL, 1, 0),
(76, 14, 3, 19, NULL, 1, 0),
(77, 14, 3, 20, NULL, 1, 0),
(78, 15, 1, 16, NULL, 1, 0),
(79, 15, 1, 17, NULL, 1, 0),
(80, 15, 1, 18, NULL, 1, 0),
(81, 15, 1, 19, NULL, 1, 0),
(82, 15, 1, 20, NULL, 1, 0),
(83, 16, 1, 16, NULL, 1, 0),
(84, 16, 1, 17, NULL, 1, 0),
(85, 16, 1, 18, NULL, 1, 0),
(86, 16, 1, 19, NULL, 1, 0),
(87, 16, 1, 20, NULL, 1, 0),
(88, 17, 2, 16, NULL, 1, 0),
(89, 17, 2, 17, NULL, 1, 0),
(90, 17, 2, 18, NULL, 1, 0),
(91, 17, 2, 19, NULL, 1, 0),
(92, 17, 2, 20, NULL, 1, 0),
(93, 18, 2, 16, NULL, 1, 0),
(94, 18, 2, 17, NULL, 1, 0),
(95, 18, 2, 18, NULL, 1, 0),
(96, 18, 2, 19, NULL, 1, 0),
(97, 18, 2, 20, NULL, 1, 0),
(98, 19, 1, 16, NULL, 1, 0),
(99, 19, 1, 17, NULL, 1, 0),
(100, 19, 1, 18, NULL, 1, 0),
(101, 19, 1, 19, NULL, 1, 0),
(102, 19, 1, 20, NULL, 1, 0),
(103, 20, 1, 16, NULL, 1, 0),
(104, 20, 1, 17, NULL, 1, 0),
(105, 20, 1, 18, NULL, 1, 0),
(106, 20, 1, 19, NULL, 1, 0),
(107, 20, 1, 20, NULL, 1, 0),
(108, 21, 1, 16, NULL, 1, 0),
(109, 21, 1, 17, NULL, 1, 0),
(110, 21, 1, 18, NULL, 1, 0),
(111, 21, 1, 19, NULL, 1, 0),
(112, 21, 1, 20, NULL, 1, 0),
(113, 22, 2, 16, NULL, 1, 0),
(114, 22, 2, 17, NULL, 1, 0),
(115, 22, 2, 18, NULL, 1, 0),
(116, 22, 2, 19, NULL, 1, 0),
(117, 22, 2, 20, NULL, 1, 0),
(118, 23, 1, 16, NULL, 1, 0),
(119, 23, 1, 17, NULL, 1, 0),
(120, 23, 1, 18, NULL, 1, 0),
(121, 23, 1, 19, NULL, 1, 0),
(122, 23, 1, 20, NULL, 1, 0),
(123, 24, 1, 16, NULL, 1, 0),
(124, 24, 1, 17, NULL, 1, 0),
(125, 24, 1, 18, NULL, 1, 0),
(126, 24, 1, 19, NULL, 1, 0),
(127, 24, 1, 20, NULL, 1, 0),
(128, 25, 2, 16, NULL, 1, 0),
(129, 25, 2, 17, NULL, 1, 0),
(130, 25, 2, 18, NULL, 1, 0),
(131, 25, 2, 19, NULL, 1, 0),
(132, 25, 2, 20, NULL, 1, 0),
(133, 26, 1, 16, NULL, 1, 0),
(134, 26, 1, 17, NULL, 1, 0),
(135, 26, 1, 18, NULL, 1, 0),
(136, 26, 1, 19, NULL, 1, 0),
(137, 26, 1, 20, NULL, 1, 0),
(138, 27, 2, 16, NULL, 1, 0),
(139, 27, 2, 17, NULL, 1, 0),
(140, 27, 2, 18, NULL, 1, 0),
(141, 27, 2, 19, NULL, 1, 0),
(142, 27, 2, 20, NULL, 1, 0),
(143, 28, 1, 16, NULL, 1, 0),
(144, 28, 1, 17, NULL, 1, 0),
(145, 28, 1, 18, NULL, 1, 0),
(146, 28, 1, 19, NULL, 1, 0),
(147, 28, 1, 20, NULL, 1, 0),
(148, 29, 1, 16, NULL, 1, 0),
(149, 29, 1, 17, NULL, 1, 0),
(150, 29, 1, 18, NULL, 1, 0),
(151, 29, 1, 19, NULL, 1, 0),
(152, 29, 1, 20, NULL, 1, 0),
(153, 30, 1, 16, NULL, 1, 0),
(154, 30, 1, 17, NULL, 1, 0),
(155, 30, 1, 18, NULL, 1, 0),
(156, 30, 1, 19, NULL, 1, 0),
(157, 30, 1, 20, NULL, 1, 0),
(158, 31, 2, 16, NULL, 1, 0),
(159, 31, 2, 17, NULL, 1, 0),
(160, 31, 2, 18, NULL, 1, 0),
(161, 31, 2, 19, NULL, 1, 0),
(162, 31, 2, 20, NULL, 1, 0),
(163, 1, 4, 16, NULL, 1, 0),
(164, 1, 4, 17, NULL, 1, 0),
(165, 1, 4, 18, NULL, 1, 0),
(166, 1, 4, 19, NULL, 1, 0),
(167, 1, 4, 20, NULL, 1, 0),
(168, 2, 1, 16, NULL, 1, 0),
(169, 2, 1, 17, NULL, 1, 0),
(170, 2, 1, 18, NULL, 1, 0),
(171, 2, 1, 19, NULL, 1, 0),
(172, 2, 1, 20, NULL, 1, 0),
(173, 7, 1, 16, NULL, 1, 0),
(174, 7, 1, 17, NULL, 1, 0),
(175, 7, 1, 18, NULL, 1, 0),
(176, 7, 1, 19, NULL, 1, 0),
(177, 7, 1, 20, NULL, 1, 0),
(178, 8, 5, 16, NULL, 1, 0),
(179, 8, 5, 17, NULL, 1, 0),
(180, 8, 5, 18, NULL, 1, 0),
(181, 8, 5, 19, NULL, 1, 0),
(182, 8, 5, 20, NULL, 1, 0),
(183, 9, 13, 16, NULL, 1, 0),
(184, 9, 13, 17, NULL, 1, 0),
(185, 9, 13, 18, NULL, 1, 0),
(186, 9, 13, 19, NULL, 1, 0),
(187, 9, 13, 20, NULL, 1, 0),
(188, 10, 7, 16, NULL, 1, 0),
(189, 10, 7, 17, NULL, 1, 0),
(190, 10, 7, 18, NULL, 1, 0),
(191, 10, 7, 19, NULL, 1, 0),
(192, 10, 7, 20, NULL, 1, 0),
(193, 11, 1, 16, NULL, 1, 0),
(194, 11, 1, 17, NULL, 1, 0),
(195, 11, 1, 18, NULL, 1, 0),
(196, 11, 1, 19, NULL, 1, 0),
(197, 11, 1, 20, NULL, 1, 0),
(198, 12, 1, 16, NULL, 1, 0),
(199, 12, 1, 17, NULL, 1, 0),
(200, 12, 1, 18, NULL, 1, 0),
(201, 12, 1, 19, NULL, 1, 0),
(202, 12, 1, 20, NULL, 1, 0),
(203, 13, 7, 16, NULL, 1, 0),
(204, 13, 7, 17, NULL, 1, 0),
(205, 13, 7, 18, NULL, 1, 0),
(206, 13, 7, 19, NULL, 1, 0),
(207, 13, 7, 20, NULL, 1, 0),
(208, 14, 0, 8, NULL, 1, 0),
(209, 14, 0, 9, NULL, 1, 0),
(210, 14, 0, 10, NULL, 1, 0),
(211, 14, 0, 11, NULL, 1, 0),
(212, 14, 0, 12, NULL, 1, 0),
(213, 14, 0, 13, NULL, 1, 0),
(214, 14, 0, 14, NULL, 1, 0),
(215, 14, 0, 15, NULL, 1, 0),
(216, 15, 1, 16, NULL, 1, 0),
(217, 15, 1, 17, NULL, 1, 0),
(218, 15, 1, 18, NULL, 1, 0),
(219, 15, 1, 19, NULL, 1, 0),
(220, 15, 1, 20, NULL, 1, 0),
(221, 16, 1, 16, NULL, 1, 0),
(222, 16, 1, 17, NULL, 1, 0),
(223, 16, 1, 18, NULL, 1, 0),
(224, 16, 1, 19, NULL, 1, 0),
(225, 16, 1, 20, NULL, 1, 0),
(226, 17, 1, 16, NULL, 1, 0),
(227, 17, 1, 17, NULL, 1, 0),
(228, 17, 1, 18, NULL, 1, 0),
(229, 17, 1, 19, NULL, 1, 0),
(230, 17, 1, 20, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `poblacion` int(11) NOT NULL,
  `abrebiar` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id`, `nombre`, `poblacion`, `abrebiar`) VALUES
(2, 'ALBERTO ARVELO TORREALBA', 41232, 'AA'),
(3, 'ANTONIO JOSE DE SUCRE', 81665, 'AJ'),
(4, 'ARISMENDI', 23727, 'AR'),
(5, 'BARINAS', 353852, 'BA'),
(6, 'BOLIVAR', 52872, 'BO'),
(7, 'CRUZ PAREDES', 26042, 'CP'),
(8, 'EZEQUIEL ZAMORA', 53580, 'EZ'),
(9, 'OBISPOS', 37493, 'OB'),
(10, 'PEDRAZA', 65390, 'PE'),
(11, 'ROJAS', 40126, 'RO'),
(12, 'SOSA', 24142, 'SO'),
(13, 'ANDRES ELOY BLANCO', 16144, 'AE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organismos`
--

CREATE TABLE `organismos` (
  `id` int(11) NOT NULL,
  `tipo` varchar(60) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `eliminar` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `organismos`
--

INSERT INTO `organismos` (`id`, `tipo`, `nombre`, `eliminar`) VALUES
(1, 'ATENCIÓN AL CIUDADANO ', 'SOBERANO', 0),
(2, 'ZONA EDUCATIVA DEL ESTADO BARINAS', 'ZEB', 0),
(3, 'SECRETARIA EJECUTIVA DE EDUCACION', 'SEE', 0),
(4, 'INSTITUTO AUTONOMO DE LA VIVIENDA Y EQUIPAMIENTO DE BARRIOS	', 'IAVEB', 0),
(5, 'SECRETARIA EJECUTIVA DE SALUD			', 'SALUD', 0),
(6, 'FUNDACION PARA LA SALUD DEL ESTADO BARINAS			', 'FUNSALUD', 0),
(7, 'SECRETARIA EJECUTIVA DE DESARROLLO SOCIAL			', 'DESARROLLO SOCIAL', 0),
(8, 'SECRETARIA EJECUTIVA DEL DESPACHO', 'DESPACHO DEL GOBERNADOR', 0),
(9, 'SECRETARIA GENERAL DE GOBIERNO			', 'SECRETARIA GENERAL DE GOBIERNO', 0),
(10, 'SECRETARIA EJECUTIVA DE DESARROLLO ECONOMICO', 'DESARROLLO ECONOMICO', 0),
(11, 'INTERMISIONES', 'INTERMISIONES', 0),
(12, 'BARRIO NUEVO BARRIO TRICOLOR', 'BNBT', 0),
(13, 'SECRETARIA EJECUTIVA DE RECURSOS HUMANOS', 'RRHH', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parroquias`
--

CREATE TABLE `parroquias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `municipio_id` int(11) NOT NULL,
  `poblacion` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `parroquias`
--

INSERT INTO `parroquias` (`id`, `nombre`, `municipio_id`, `poblacion`) VALUES
(1, ' SABANETA', 2, 34148),
(2, ' RODRIGUEZ DOMINGUEZ', 2, 7084),
(3, ' TICOPORO', 3, 65801),
(4, ' ANDRES BELLO', 3, 7147),
(5, ' NICOLAS PULIDO', 3, 8717),
(6, ' ARISMENDI', 4, 9327),
(7, ' GUADARRAMA', 4, 2165),
(8, ' LA UNION', 4, 7280),
(9, ' SAN ANTONIO', 4, 4955),
(10, ' BARINAS', 5, 7651),
(11, ' ALFREDO ARVELO LARRIVA', 5, 9251),
(12, ' SAN SILVESTRE', 5, 6905),
(13, ' SANTA INES', 5, 3508),
(14, ' SANTA LUCIA', 5, 5780),
(15, ' TORUNOS', 5, 4882),
(16, ' EL CARMEN', 5, 41527),
(17, ' ROMULO BETANCOURT', 5, 40647),
(18, ' CORAZON DE JESUS', 5, 58413),
(19, ' RAMON IGNACIO MENDEZ', 5, 90464),
(20, ' ALTO BARINAS', 5, 64194),
(21, ' MANUEL PALACIO FAJARDO', 5, 9763),
(22, ' JUAN ANTONIO RODRIGUEZ DOMINGUEZ', 5, 4110),
(23, ' DOMINGA ORTIZ DE PAEZ', 5, 6748),
(24, ' BARINITAS', 6, 43863),
(25, ' ALTAMIRA', 6, 3045),
(26, ' CALDERAS', 6, 5964),
(27, ' BARRANCAS', 7, 21121),
(28, ' EL SOCORRO', 7, 4345),
(29, ' MASPARRITO', 7, 576),
(30, ' SANTA BARBARA', 8, 40370),
(31, ' JOSE IGNACIO DEL PUMAR', 8, 3343),
(32, ' PEDRO BRICEÑO MENDEZ', 8, 5658),
(33, ' RAMON IGNACIO MENDEZ', 8, 4209),
(34, ' OBISPOS', 9, 15696),
(35, ' EL REAL', 9, 2919),
(36, ' LA LUZ', 9, 7581),
(37, ' LOS GUASIMITOS', 9, 11297),
(38, ' CIUDAD BOLIVIA', 10, 44975),
(39, ' IGNACIO BRICE?O', 10, 6274),
(40, ' JOSE FELIX RIBAS', 10, 7573),
(41, ' PAEZ', 10, 6568),
(42, ' LIBERTAD', 11, 11415),
(43, ' DOLORES', 11, 8264),
(44, ' PALACIOS FAJARDO', 11, 11855),
(45, ' SANTA ROSA', 11, 8592),
(46, ' CIUDAD DE NUTRIAS', 12, 15168),
(47, ' EL REGALO', 12, 5454),
(48, ' PUERTO DE NUTRIAS', 12, 15168),
(49, ' SANTA CATALINA', 12, 1183),
(50, ' EL CANTON', 13, 6466),
(51, ' SANTA CRUZ DE GUACAS', 13, 5486),
(52, ' PUERTO VIVAS', 13, 4192);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasos`
--

CREATE TABLE `pasos` (
  `id` int(11) NOT NULL,
  `solicitud_id` int(11) NOT NULL,
  `paso` int(11) NOT NULL,
  `eliminar` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pasos`
--

INSERT INTO `pasos` (`id`, `solicitud_id`, `paso`, `eliminar`) VALUES
(1, 1, 2, 0),
(2, 2, 2, 0),
(3, 3, 2, 0),
(4, 4, 2, 0),
(5, 5, 2, 0),
(6, 6, 2, 0),
(7, 7, 2, 0),
(8, 8, 2, 0),
(9, 9, 2, 0),
(10, 10, 2, 0),
(11, 11, 2, 0),
(12, 12, 2, 0),
(13, 13, 2, 0),
(14, 14, 2, 0),
(15, 15, 2, 0),
(16, 16, 2, 0),
(17, 17, 2, 0),
(18, 18, 2, 0),
(19, 19, 2, 0),
(20, 20, 2, 0),
(21, 21, 2, 0),
(22, 22, 2, 0),
(23, 23, 2, 0),
(24, 24, 2, 0),
(25, 25, 2, 0),
(26, 26, 2, 0),
(27, 27, 2, 0),
(28, 28, 2, 0),
(29, 29, 2, 0),
(30, 30, 2, 0),
(31, 31, 2, 0),
(32, 1, 2, 0),
(33, 2, 2, 0),
(34, 7, 2, 0),
(35, 8, 2, 0),
(36, 9, 2, 0),
(37, 10, 2, 0),
(38, 11, 2, 0),
(39, 12, 2, 0),
(40, 13, 2, 0),
(41, 14, 2, 0),
(42, 15, 2, 0),
(43, 16, 2, 0),
(44, 17, 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requerimientos`
--

CREATE TABLE `requerimientos` (
  `id` int(11) NOT NULL,
  `tipo_solicitud_id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `prioridad` int(1) NOT NULL,
  `digital` int(1) NOT NULL,
  `eliminar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `requerimientos`
--

INSERT INTO `requerimientos` (`id`, `tipo_solicitud_id`, `nombre`, `prioridad`, `digital`, `eliminar`) VALUES
(1, 1, 'CARTA AL GOBERNADOR', 1, 1, 0),
(2, 1, 'COPIA DE LA CÉDULA DE IDENTIDAD', 1, 1, 0),
(3, 1, 'COPIA DE LA CÉDULA DE IDENTIDAD DEL PADRE, MADRE O REPRESENTANTE', 0, 0, 0),
(4, 1, 'COPIA DE LA CÉDULA DEL REPRESENTADO', 0, 0, 0),
(5, 1, 'PARTIDA DE NACIMIENTO', 0, 0, 0),
(6, 1, 'INFORME MEDICO (Original)', 1, 0, 0),
(7, 1, 'PRESUPUESTO (Original)', 1, 0, 0),
(8, 2, 'CARTA AL GOBERNADOR', 1, 0, 0),
(9, 2, 'INFORME MEDICO', 1, 0, 0),
(10, 2, 'ECO (Original)', 1, 0, 0),
(11, 2, 'COPIA DE LA CÉDULA DEL SOLICITANTE', 1, 0, 0),
(12, 2, 'COPIA DE LA CÉDULA DE IDENTIDAD DEL REPRESENTANTE', 0, 0, 0),
(13, 2, 'COPIA DE LA CÉDULA DEL REPRESENTADO', 0, 0, 0),
(14, 2, 'INFORME MEDICO (Original)', 1, 0, 0),
(15, 2, 'PRESUPUESTO (Original)', 1, 0, 0),
(16, 3, 'CARTA AL GOBERNADOR', 1, 0, 0),
(17, 3, 'COPIA DE LA CÉDULA DE IDENTIDAD', 1, 0, 0),
(18, 3, 'INFORME MEDICO', 1, 0, 0),
(19, 3, 'ECO', 1, 0, 0),
(20, 3, 'EXAMENES', 0, 0, 0),
(21, 4, 'CARTA AL GOBERNADOR', 1, 0, 0),
(22, 4, 'COPIA DE LA CÉDULA DE IDENTIDAD', 1, 0, 0),
(23, 4, 'COPIA DE LA CÉDULA DE IDENTIDAD DEL PADRE, MADRE O REPRESENTANTE', 0, 0, 0),
(24, 4, 'PARTIDA DE NACIMIENTO', 0, 0, 0),
(25, 4, 'INFORME MEDICO (Original)', 1, 0, 0),
(26, 4, 'ECO (Original)', 1, 0, 0),
(27, 4, 'PRESUPUESTO (Original)', 1, 0, 0),
(28, 4, 'RELACIÓN DE GASTOS', 1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requerimientos_categorias`
--

CREATE TABLE `requerimientos_categorias` (
  `id` int(11) NOT NULL,
  `tipo_solicitud_id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `eliminar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `requerimientos_categorias`
--

INSERT INTO `requerimientos_categorias` (`id`, `tipo_solicitud_id`, `nombre`, `eliminar`) VALUES
(1, 3, 'ANALGÉSICOS ', 0),
(2, 3, 'ANTIBIÓTICOS ', 0),
(3, 3, 'VACUNAS', 0),
(4, 3, 'ANTICEPTICOS', 0),
(5, 3, 'ANTINFLAMATORIOS', 0),
(6, 3, 'ANTIHISTAMINICO', 0),
(7, 3, 'ANESTÉSICO ', 0),
(8, 3, 'ANTIDEPRESIVO ', 0),
(9, 3, 'DIURETICO', 0),
(10, 3, 'LAXANTE', 0),
(11, 3, 'BRONCODILATADOR', 0),
(12, 3, 'ANTIPIRETICO', 0),
(13, 3, 'ANTIFUNGINICO', 0),
(14, 3, 'ANTICONCEPTIVOS', 0),
(15, 3, 'ANTIHIPERTENSIVOS', 0),
(16, 3, 'CARDIOVASCULARES', 0),
(17, 3, 'ONCOLÓGICOS ', 0),
(18, 16, 'MULETAS', 0),
(19, 16, 'SILLAS DE RUEDA (Adultos)', 0),
(20, 16, 'SILLAS DE RUEDA (Niños)', 0),
(21, 16, 'ANDADERAS', 0),
(22, 16, 'BASTONES', 0),
(23, 1, 'OPERACIÓN DE CORAZON', 0),
(24, 1, 'OPERACIÓN DE RIÑON', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitantes`
--

CREATE TABLE `solicitantes` (
  `id` int(11) NOT NULL,
  `municipio_id` int(11) NOT NULL,
  `parroquia_id` int(11) NOT NULL,
  `nacionalidad` varchar(2) NOT NULL,
  `cedula` int(8) NOT NULL,
  `nombre_apellido` varchar(100) NOT NULL,
  `telefono1` varchar(20) DEFAULT NULL,
  `telefono2` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `urbanizacion_barrio` varchar(60) NOT NULL,
  `avenida_calle` varchar(60) NOT NULL,
  `casa_edificio_apartamento` varchar(60) NOT NULL,
  `fecha_nacimiento` varchar(50) NOT NULL,
  `fecha_registro` varchar(50) NOT NULL,
  `hora_registro` varchar(50) NOT NULL,
  `eliminar` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitantes`
--

INSERT INTO `solicitantes` (`id`, `municipio_id`, `parroquia_id`, `nacionalidad`, `cedula`, `nombre_apellido`, `telefono1`, `telefono2`, `email`, `urbanizacion_barrio`, `avenida_calle`, `casa_edificio_apartamento`, `fecha_nacimiento`, `fecha_registro`, `hora_registro`, `eliminar`) VALUES
(1, 5, 19, 'V', 19881315, 'Silva Guevara Carlos Hugo', '(0412) 762-4857', '', 'elmorochez22@gmail.com', 'SECTOR 2', '23', '03', '1989-5-30', '2017-09-21', '15:53:29', 0),
(2, 5, 10, 'V', 17000000, 'edison hernandez', '(0412) 762-4857', '', 'edison@gmail.com', 'lorem ', 'lorem', 'lorem', '30/09/1974', '2017-09-26', '14:51:30', 0),
(3, 5, 20, 'V', 20407640, 'EDUARDO JOSE QUINTERO PEROZA', '(0412) 762-4857', '', '', 'LA HORMIGA CALLE 3, CASA 248', 'PRINCIPAL ', 'C-170', '1992-12-4', '2017-09-28', '12:10:38', 0),
(4, 5, 20, 'V', 14171053, 'YOHANA KARINA CANO', '(0412) 762-4857', '', '', 'SIMÓN BOLIVAR, PRADOS DE ALTO BARINAS C20 C1350', 'AVENIDA 1', '150', '1978-10-15', '2017-09-28', '12:29:51', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `id` int(11) NOT NULL,
  `cod` varchar(50) NOT NULL,
  `solicitante_id` int(11) NOT NULL,
  `tipo_solicitud_id` int(11) NOT NULL,
  `requerimiento_categoria_id` int(11) DEFAULT NULL,
  `organismo_id` int(11) NOT NULL,
  `municipio_id` int(11) NOT NULL,
  `parroquia_id` int(11) NOT NULL,
  `fecha_hora_registrado` varchar(50) DEFAULT NULL,
  `fecha_hora_asignado_consignado` varchar(100) DEFAULT NULL,
  `fecha_hora_cerrado` varchar(50) DEFAULT NULL,
  `fecha_hora_entregado` varchar(100) DEFAULT NULL,
  `monto_solicitado` varchar(100) NOT NULL,
  `monto_aprobado` varchar(100) DEFAULT NULL,
  `observacion` text,
  `observacion_solicitud` text,
  `estatus` int(11) NOT NULL,
  `eliminar` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitudes`
--

INSERT INTO `solicitudes` (`id`, `cod`, `solicitante_id`, `tipo_solicitud_id`, `requerimiento_categoria_id`, `organismo_id`, `municipio_id`, `parroquia_id`, `fecha_hora_registrado`, `fecha_hora_asignado_consignado`, `fecha_hora_cerrado`, `fecha_hora_entregado`, `monto_solicitado`, `monto_aprobado`, `observacion`, `observacion_solicitud`, `estatus`, `eliminar`) VALUES
(11, '112017', 1, 3, 1, 1, 5, 19, '2017-10-10 21:41:32', '2017-10-10 21:41:32', '2017-10-10 21:42:47', '2017-10-10 21:43:38', '', NULL, '', NULL, 4, NULL),
(12, '122017', 1, 3, 1, 1, 5, 19, '2017-10-10 21:50:04', '2017-10-10 21:50:04', '2017-10-10 21:50:14', '2017-10-10 21:51:37', '', NULL, '', NULL, 4, NULL),
(13, '132017', 1, 3, 7, 1, 5, 19, '2017-10-10 21:52:43', '2017-10-10 21:52:43', '2017-10-10 21:52:55', '2017-10-10 21:53:31', '', NULL, '', NULL, 4, NULL),
(14, '142017', 1, 2, 0, 1, 5, 19, '2017-10-10 21:54:27', '2017-10-10 21:54:27', '2017-10-10 21:54:33', '2017-10-10 21:55:06', '', NULL, '', NULL, 4, NULL),
(15, '152017', 1, 3, 1, 1, 5, 19, '2017-10-10 21:58:26', '2017-10-10 21:58:26', '2017-10-10 21:58:32', '2017-10-10 21:59:07', '', NULL, '', NULL, 4, NULL),
(16, '162017', 1, 3, 1, 1, 5, 19, '2017-10-10 22:00:17', '2017-10-10 22:00:17', '2017-10-10 22:00:26', '2017-10-10 22:00:55', '', NULL, '', NULL, 4, NULL),
(17, '172017', 1, 3, 1, 1, 5, 19, '2017-10-10 22:01:46', '2017-10-10 22:01:46', '2017-10-10 22:01:56', '2017-10-10 22:02:23', '', NULL, '', NULL, 4, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes_entregas`
--

CREATE TABLE `solicitudes_entregas` (
  `id` int(11) NOT NULL,
  `solicitud_id` int(11) NOT NULL,
  `responsable` varchar(100) NOT NULL,
  `lugar` varchar(100) NOT NULL,
  `observacion` text NOT NULL,
  `fecha_entrega` varchar(100) NOT NULL,
  `portada` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitudes_entregas`
--

INSERT INTO `solicitudes_entregas` (`id`, `solicitud_id`, `responsable`, `lugar`, `observacion`, `fecha_entrega`, `portada`) VALUES
(6, 11, 'carlos', 'barinas', 'lorem ipsum', '10/10/2017', 1),
(7, 12, 'asd', 'asd', 'sdfsdf', '10/10/2017', 1),
(8, 13, 'carlos', 'barinas', 'lorem ipsum', '10/10/2017', 1),
(9, 14, 'carlos', 'barinas', 'lorem ipsum', '10/10/2017', 1),
(10, 15, 'carlos', 'barinas', 'lorem ipsum', '10/10/2017', 1),
(11, 16, 'carlos', 'barinas', 'lorem ipsum', '10/10/2017', 1),
(12, 17, 'carlos', 'barinas', 'lorem ipsum', '10/10/2017', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes_entregas_imagenes`
--

CREATE TABLE `solicitudes_entregas_imagenes` (
  `id` int(11) NOT NULL,
  `solicitudes_entregas_id` int(11) NOT NULL,
  `imagen_original` varchar(200) NOT NULL,
  `imagen_grande` varchar(200) NOT NULL,
  `imagen_medio` varchar(200) NOT NULL,
  `imagen_miniatura` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitudes_entregas_imagenes`
--

INSERT INTO `solicitudes_entregas_imagenes` (`id`, `solicitudes_entregas_id`, `imagen_original`, `imagen_grande`, `imagen_medio`, `imagen_miniatura`) VALUES
(3, 6, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507686223/edgdqg2ktulipsqz5ryg.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507686234/oa54lyayeuedi4w4ppmk.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507686239/lodbsuqjmspl1kcghham.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507686241/z9ihtch8d6quhduq1p8p.jpg'),
(4, 7, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507686701/vip7xixx8vw03gxvbdyu.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507686703/wlabzopmnpovgj18nkvi.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507686704/nmgfkbuwglgyrjccena6.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507686705/pcpnx2kregdpoz76qn6n.jpg'),
(5, 8, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507686813/mwkj5b5nfxhvsd6o8lin.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507686815/hcznipvzptargdanab8a.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507686818/o5xfzdfg8l1fp7kfxbax.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507686819/bgpm2s0rqrlal67jsx5o.jpg'),
(6, 9, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507686916/j6pwqqova4eflktndmjy.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507686919/ehuveyitflrisfn81maq.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507686928/sskzt5qbiwkitiruu3fw.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507686929/hresy3q9n2ejv3adpyn2.jpg'),
(7, 10, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507687152/bjxus3g7loqkncqfr8so.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507687155/fe412d9lykircfskrjkr.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507687157/wrjg1nhonkbxpjjmr8ie.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507687159/hjdusukhhgrq97nl5act.jpg'),
(8, 11, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507687259/ebre2dvlarvjmbkcx9uh.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507687262/oylqzku6c21a5rx758fz.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507687263/wbind9cd63ehezdcjrdi.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507687265/kwdods4c4iw7dv5cnrzb.jpg'),
(9, 12, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507687346/yxux8yu4m7r2cxuadhor.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507687349/ojin5mr7gepsdhnqvxxc.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507687352/kv6kxlmgzayke48gu2hx.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1507687354/p6dg6ui410yfaorn5jon.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_solicitud`
--

CREATE TABLE `tipo_solicitud` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `organismo_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_solicitud`
--

INSERT INTO `tipo_solicitud` (`id`, `nombre`, `organismo_id`) VALUES
(1, 'Ayudas Económicas', 1),
(2, 'Canastillas', 1),
(3, 'Medicamentos', 1),
(4, 'Gastos de Traslado, Alimentación y Estadia', 1),
(5, 'Mercados', 1),
(6, 'Pañales', 1),
(7, 'Empleo', 13),
(8, 'Becas Estudiantiles', 7),
(9, 'Becas por Discapacidad', 7),
(10, 'Amor Mayor', 11),
(11, 'Tarjeta Hogares de la Patria', 11),
(12, 'Chamba Juvenil', 11),
(13, 'Solicitud de Viviendas', 4),
(14, 'Mejoramiento de Viviendas', 12),
(15, 'Solicitud de Créditos', 8),
(16, 'Ayudas Técnicas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `organismo_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `password`, `email`, `role`, `organismo_id`, `created_at`, `updated_at`) VALUES
(9, 'carlos silva', '$2y$10$hC1orwKyRe0y.Qr2eNzRxOu9UN2GLj2bZ6Q0ajto37WdJEpDi0csK', 'admin', 'admin', 1, '2017-08-02 11:09:10', '2017-08-02 11:09:10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `beneficiarios`
--
ALTER TABLE `beneficiarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_solicitud`
--
ALTER TABLE `detalle_solicitud`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_municipio` (`id`,`nombre`,`poblacion`,`abrebiar`);

--
-- Indices de la tabla `organismos`
--
ALTER TABLE `organismos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parroquias`
--
ALTER TABLE `parroquias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_parrouia` (`id`,`nombre`,`municipio_id`,`poblacion`);

--
-- Indices de la tabla `pasos`
--
ALTER TABLE `pasos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `requerimientos`
--
ALTER TABLE `requerimientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `requerimientos_categorias`
--
ALTER TABLE `requerimientos_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitantes`
--
ALTER TABLE `solicitantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitudes_entregas`
--
ALTER TABLE `solicitudes_entregas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitudes_entregas_imagenes`
--
ALTER TABLE `solicitudes_entregas_imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_solicitud`
--
ALTER TABLE `tipo_solicitud`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `beneficiarios`
--
ALTER TABLE `beneficiarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `detalle_solicitud`
--
ALTER TABLE `detalle_solicitud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;
--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `organismos`
--
ALTER TABLE `organismos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `parroquias`
--
ALTER TABLE `parroquias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT de la tabla `pasos`
--
ALTER TABLE `pasos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT de la tabla `requerimientos`
--
ALTER TABLE `requerimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `requerimientos_categorias`
--
ALTER TABLE `requerimientos_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `solicitantes`
--
ALTER TABLE `solicitantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `solicitudes_entregas`
--
ALTER TABLE `solicitudes_entregas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `solicitudes_entregas_imagenes`
--
ALTER TABLE `solicitudes_entregas_imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `tipo_solicitud`
--
ALTER TABLE `tipo_solicitud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
