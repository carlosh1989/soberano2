-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-09-2017 a las 17:03:54
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
-- Estructura de tabla para la tabla `detalle_solicitud`
--

CREATE TABLE IF NOT EXISTS `detalle_solicitud` (
`id` int(11) NOT NULL,
  `solicitud_id` int(11) NOT NULL,
  `requerimiento_categoria_id` int(11) NOT NULL,
  `requerimiento_id` int(11) NOT NULL,
  `observacion` varchar(250) NOT NULL,
  `consignado` int(1) NOT NULL,
  `eliminar` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Estructura de tabla para la tabla `requerimientos`
--

CREATE TABLE IF NOT EXISTS `requerimientos` (
`id` int(11) NOT NULL,
  `tipo_solicitud_id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `prioridad` int(1) NOT NULL,
  `digital` int(1) NOT NULL,
  `eliminar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `requerimientos_categorias` (
`id` int(11) NOT NULL,
  `tipo_solicitud_id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `eliminar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

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
(22, 16, 'BASTONES', 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE IF NOT EXISTS `solicitudes` (
`id` int(11) NOT NULL,
  `solicitante_id` int(11) NOT NULL,
  `tipo_solicitud_id` int(11) NOT NULL,
  `requerimiento_categoria_id` int(11) NOT NULL,
  `organismo_id` int(11) NOT NULL,
  `fecha_hora_registrado` varchar(50) NOT NULL,
  `fecha_hora_consignado` varchar(50) NOT NULL,
  `fecha_hora_asignado` varchar(50) NOT NULL,
  `fecha_hora_procesado` varchar(50) NOT NULL,
  `observacion` text NOT NULL,
  `estatus` int(11) NOT NULL,
  `eliminar` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_solicitud`
--

CREATE TABLE IF NOT EXISTS `tipo_solicitud` (
`id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `organismo_id` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

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
-- Indices de la tabla `detalle_solicitud`
--
ALTER TABLE `detalle_solicitud`
 ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `detalle_solicitud`
--
ALTER TABLE `detalle_solicitud`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT de la tabla `requerimientos`
--
ALTER TABLE `requerimientos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `requerimientos_categorias`
--
ALTER TABLE `requerimientos_categorias`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `solicitantes`
--
ALTER TABLE `solicitantes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_solicitud`
--
ALTER TABLE `tipo_solicitud`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
