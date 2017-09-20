-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-09-2017 a las 21:10:05
-- Versión del servidor: 5.5.49-0+deb8u1
-- Versión de PHP: 5.6.27-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `soberano`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE IF NOT EXISTS `municipios` (
`id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `poblacion` int(11) NOT NULL,
  `abrebiar` varchar(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `organismos` (
`id` int(11) NOT NULL,
  `tipo` varchar(60) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `eliminar` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `parroquias` (
`id` int(11) NOT NULL,
  `nombre` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `municipio_id` int(11) NOT NULL,
  `poblacion` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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
-- Estructura de tabla para la tabla `solicitantes`
--

CREATE TABLE IF NOT EXISTS `solicitantes` (
`id` int(11) NOT NULL,
  `municipio_id` int(11) NOT NULL,
  `parroquia_id` int(11) NOT NULL,
  `nacionalidad` varchar(2) NOT NULL,
  `cedula` int(8) NOT NULL,
  `nombre_apellido` varchar(100) NOT NULL,
  `telefono_fijo` varchar(50) NOT NULL,
  `telefono_celular` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `urbanizacion_barrio` varchar(60) NOT NULL,
  `avenida_calle` varchar(60) NOT NULL,
  `casa_edificio_apartamento` varchar(60) NOT NULL,
  `fecha_nacimiento` varchar(50) NOT NULL,
  `fecha_registro` varchar(50) NOT NULL,
  `hora_registro` varchar(50) NOT NULL,
  `eliminar` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitantes`
--

INSERT INTO `solicitantes` (`id`, `municipio_id`, `parroquia_id`, `nacionalidad`, `cedula`, `nombre_apellido`, `telefono_fijo`, `telefono_celular`, `email`, `urbanizacion_barrio`, `avenida_calle`, `casa_edificio_apartamento`, `fecha_nacimiento`, `fecha_registro`, `hora_registro`, `eliminar`) VALUES
(5, 5, 19, 'V', 19881315, 'Silva Guevara Carlos Hugo', '02735338034', '04127624857', 'elmorochez22@gmail.com', 'SECTOR 2', '23', '03', '1989-5-30', '2017-09-12', '17:27:31', 0),
(6, 5, 1, 'V', 17997299, 'NIDIA YUDITH DIAZ BRACHE', '02735332110', '04263261581', 'dani@gmail.com', 'CAMBIO- CAMBIO 2', 'AV D', 'S/N', '1987-11-13', '2017-09-12', '18:41:39', 0),
(7, 5, 11, 'V', 30000000, 'locote maximo', '02735338034', '04127624857', 'elmorochez22@gmail.com', 'dominga ortiz de paez', '23', '03', '30-05-1989', '2017-09-12', '18:57:51', 0),
(8, 5, 11, 'V', 31000000, 'max power', '02735338034', '04127624857', 'elmorochez22@gmail.com', 'dominga oritz de paez', '23', '03', '30-05-1989', '2017-09-12', '19:04:55', 0),
(9, 5, 19, 'V', 19881316, 'Silva Guevara Carlos Daniel', '', '0273533803144', '', 'SECTOR 2', '23', '03', '1989-5-30', '2017-09-12', '19:06:47', 0),
(10, 5, 11, 'V', 40000000, 'oso', '02735338034', '04127624857', 'elmorochez22@gmail.com', 'acfsregtbh ty bnh', '23', '03', '30-05-1989', '2017-09-12', '19:08:04', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE IF NOT EXISTS `solicitudes` (
`id` int(11) NOT NULL,
  `solicitante_id` int(11) NOT NULL,
  `organismo_id` int(11) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `observacion` text NOT NULL,
  `estatus` int(11) NOT NULL,
  `eliminar` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitudes`
--

INSERT INTO `solicitudes` (`id`, `solicitante_id`, `organismo_id`, `fecha`, `observacion`, `estatus`, `eliminar`) VALUES
(1, 5, 0, '30-05-2017', '', 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_parroquia`
--

CREATE TABLE IF NOT EXISTS `tabla_parroquia` (
`id_parrouia` int(11) NOT NULL,
  `nombre_parroquia` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `poblacion` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `tabla_parroquia`
--

INSERT INTO `tabla_parroquia` (`id_parrouia`, `nombre_parroquia`, `id_municipio`, `poblacion`) VALUES
(1, 'PARROQUIA SABANETA', 2, 34148),
(2, 'PARROQUIA RODRIGUEZ DOMINGUEZ', 2, 7084),
(3, 'PARROQUIA TICOPORO', 3, 65801),
(4, 'PARROQUIA ANDRES BELLO', 3, 7147),
(5, 'PARROQUIA NICOLAS PULIDO', 3, 8717),
(6, 'PARROQUIA ARISMENDI', 4, 9327),
(7, 'PARROQUIA GUADARRAMA', 4, 2165),
(8, 'PARROQUIA LA UNION', 4, 7280),
(9, 'PARROQUIA SAN ANTONIO', 4, 4955),
(10, 'PARROQUIA BARINAS', 5, 7651),
(11, 'PARROQUIA ALFREDO ARVELO LARRIVA', 5, 9251),
(12, 'PARROQUIA SAN SILVESTRE', 5, 6905),
(13, 'PARROQUIA SANTA INES', 5, 3508),
(14, 'PARROQUIA SANTA LUCIA', 5, 5780),
(15, 'PARROQUIA TORUNOS', 5, 4882),
(16, 'PARROQUIA EL CARMEN', 5, 41527),
(17, 'PARROQUIA ROMULO BETANCOURT', 5, 40647),
(18, 'PARROQUIA CORAZON DE JESUS', 5, 58413),
(19, 'PARROQUIA RAMON IGNACIO MENDEZ', 5, 90464),
(20, 'PARROQUIA ALTO BARINAS', 5, 64194),
(21, 'PARROQUIA MANUEL PALACIO FAJARDO', 5, 9763),
(22, 'PARROQUIA JUAN ANTONIO RODRIGUEZ DOMINGUEZ', 5, 4110),
(23, 'PARROQUIA DOMINGA ORTIZ DE PAEZ', 5, 6748),
(24, 'PARROQUIA BARINITAS', 6, 43863),
(25, 'PARROQUIA ALTAMIRA', 6, 3045),
(26, 'PARROQUIA CALDERAS', 6, 5964),
(27, 'PARROQUIA BARRANCAS', 7, 21121),
(28, 'PARROQUIA EL SOCORRO', 7, 4345),
(29, 'PARROQUIA MASPARRITO', 7, 576),
(30, 'PARROQUIA SANTA BARBARA', 8, 40370),
(31, 'PARROQUIA JOSE IGNACIO DEL PUMAR', 8, 3343),
(32, 'PARROQUIA PEDRO BRICEÑO MENDEZ', 8, 5658),
(33, 'PARROQUIA RAMON IGNACIO MENDEZ', 8, 4209),
(34, 'PARROQUIA OBISPOS', 9, 15696),
(35, 'PARROQUIA EL REAL', 9, 2919),
(36, 'PARROQUIA LA LUZ', 9, 7581),
(37, 'PARROQUIA LOS GUASIMITOS', 9, 11297),
(38, 'PARROQUIA CIUDAD BOLIVIA', 10, 44975),
(39, 'PARROQUIA IGNACIO BRICE?O', 10, 6274),
(40, 'PARROQUIA JOSE FELIX RIBAS', 10, 7573),
(41, 'PARROQUIA PAEZ', 10, 6568),
(42, 'PARROQUIA LIBERTAD', 11, 11415),
(43, 'PARROQUIA DOLORES', 11, 8264),
(44, 'PARROQUIA PALACIOS FAJARDO', 11, 11855),
(45, 'PARROQUIA SANTA ROSA', 11, 8592),
(46, 'PARROQUIA CIUDAD DE NUTRIAS', 12, 15168),
(47, 'PARROQUIA EL REGALO', 12, 5454),
(48, 'PARROQUIA PUERTO DE NUTRIAS', 12, 15168),
(49, 'PARROQUIA SANTA CATALINA', 12, 1183),
(50, 'PARROQUIA EL CANTON', 13, 6466),
(51, 'PARROQUIA SANTA CRUZ DE GUACAS', 13, 5486),
(52, 'PARROQUIA PUERTO VIVAS', 13, 4192);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_solicitud`
--

CREATE TABLE IF NOT EXISTS `tipo_solicitud` (
`id` int(11) NOT NULL,
  `tipo` varchar(60) NOT NULL,
  `organismo_id` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_solicitud`
--

INSERT INTO `tipo_solicitud` (`id`, `tipo`, `organismo_id`) VALUES
(1, 'Ayudas Económicas', 1),
(2, 'Canastillas', 1),
(3, 'Medicamentos y Ayudas Técnicas', 1),
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
(15, 'Solicitud de Créditos', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `password`, `email`, `role`, `created_at`, `updated_at`) VALUES
(9, 'Miss Margaret Fay MD', '$2y$10$hC1orwKyRe0y.Qr2eNzRxOu9UN2GLj2bZ6Q0ajto37WdJEpDi0csK', 'carlos@gmail.com', 'admin', '2017-08-02 11:09:10', '2017-08-02 11:09:10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
 ADD PRIMARY KEY (`id`), ADD KEY `id_municipio` (`id`,`nombre`,`poblacion`,`abrebiar`);

--
-- Indices de la tabla `organismos`
--
ALTER TABLE `organismos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parroquias`
--
ALTER TABLE `parroquias`
 ADD PRIMARY KEY (`id`), ADD KEY `id_parrouia` (`id`,`nombre`,`municipio_id`,`poblacion`);

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
-- Indices de la tabla `tabla_parroquia`
--
ALTER TABLE `tabla_parroquia`
 ADD PRIMARY KEY (`id_parrouia`), ADD KEY `id_parrouia` (`id_parrouia`,`nombre_parroquia`,`id_municipio`,`poblacion`);

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
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `organismos`
--
ALTER TABLE `organismos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `parroquias`
--
ALTER TABLE `parroquias`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT de la tabla `solicitantes`
--
ALTER TABLE `solicitantes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tabla_parroquia`
--
ALTER TABLE `tabla_parroquia`
MODIFY `id_parrouia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT de la tabla `tipo_solicitud`
--
ALTER TABLE `tipo_solicitud`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
