-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2016 a las 01:05:21
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `hacienda_hacienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cambios`
--

CREATE TABLE `cambios` (
  `cambio` int(11) NOT NULL,
  `id_vaca` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(30) CHARACTER SET latin1 NOT NULL,
  `observaciones` text CHARACTER SET latin1,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cria`
--

CREATE TABLE `cria` (
  `id_vaca` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `padre` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_parto` date NOT NULL,
  `sexo` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `numero_cria` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `inter_parto` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `peso_nacimiento` int(5) NOT NULL,
  `fecha_destete` date DEFAULT NULL,
  `peso_destete` int(5) DEFAULT NULL,
  `peso_205dias` int(5) DEFAULT NULL,
  `indice1` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `peso_18meses` int(5) DEFAULT NULL,
  `indice2` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `observaciones` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Disparadores `cria`
--
DELIMITER $$
CREATE TRIGGER `cria_vaca` AFTER INSERT ON `cria` FOR EACH ROW INSERT INTO `vaca`(`hacienda`, `numero`, `nombre`, `registro`, `fecha_nacimiento`, `padre_numero`, `padre_registro`, `madre_numero`, `madre_registro`, `clasificacion`, `peso_205dias`, `altura_sacro_destete`, `peso_18meses`, `fecha_entrada_toro`, `peso_entrada_toro`, `foto`)
SELECT h.id, new.numero_cria,'sin nombre',new.numero_cria,new.fecha_parto,new.padre,new.padre,new.id_vaca,new.id_vaca,'Sin clasif.','','','','','','' from vaca v, hacienda h where v.numero=new.id_vaca and v.hacienda=h.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fenotipo`
--

CREATE TABLE `fenotipo` (
  `id_vaca` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `car_racial_ap_general` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `esqueleto` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `aplomos` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `largo` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `amplitud_pecho` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `amplitud_lomo` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `amplitud_anca` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `profundidad_torax` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `profundidad_calzon` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `desarrollo` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `temperamento` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `musculo_grasa` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `ap_general` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `u_post` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `u_ant` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `pezon` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `irrig` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `total` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `fenotipo`
--

INSERT INTO `fenotipo` (`id_vaca`, `car_racial_ap_general`, `esqueleto`, `aplomos`, `largo`, `amplitud_pecho`, `amplitud_lomo`, `amplitud_anca`, `profundidad_torax`, `profundidad_calzon`, `desarrollo`, `temperamento`, `musculo_grasa`, `ap_general`, `u_post`, `u_ant`, `pezon`, `irrig`, `total`) VALUES
('11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hacienda`
--

CREATE TABLE `hacienda` (
  `id` int(15) NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(80) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `persona` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `hacienda`
--

INSERT INTO `hacienda` (`id`, `nombre`, `direccion`, `telefono`, `persona`) VALUES
(1, 'la sonora', NULL, NULL, NULL),
(2, 'napoles', '', '', ''),
(3, 'allana', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_vaca` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(30) CHARACTER SET latin1 NOT NULL,
  `observaciones` text CHARACTER SET latin1,
  `fecha_consulta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id_vaca`, `estado`, `observaciones`, `fecha_consulta`) VALUES
('11', 'viva', 'Creada en el inventario', '2016-11-03 14:23:10'),
('12', 'viva', 'Creada en el inventario', '2016-11-03 14:00:39'),
('44', 'vivia', 'creada en el invetario', '2016-01-01 05:00:00');

--
-- Disparadores `inventario`
--
DELIMITER $$
CREATE TRIGGER `cambios_inventario` AFTER UPDATE ON `inventario` FOR EACH ROW INSERT INTO `cambios` (`cambio`,`id_vaca`,`estado`,`observaciones`,`fecha`)
VALUES (null,NEW.id_vaca,NEW.estado,NEW.observaciones,NEW.fecha_consulta)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reproduccion`
--

CREATE TABLE `reproduccion` (
  `id` int(11) NOT NULL,
  `id_vaca` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `toro1` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `toro2` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `fecha_1ia` date DEFAULT NULL,
  `toro_1ia` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `fecha_2ia` date DEFAULT NULL,
  `toro_2ia` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `fecha_3iamn` date DEFAULT NULL,
  `toro_3iamn` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `fecha_mn` date DEFAULT NULL,
  `toro_mn` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `fecha_1pal` date DEFAULT NULL,
  `res_1pal` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `fecha_2pal` date DEFAULT NULL,
  `res_2pal` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `fecha_3pal` date DEFAULT NULL,
  `res_3pal` varchar(15) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `hacienda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre_usuario`, `password`, `hacienda`) VALUES
(1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vaca`
--

CREATE TABLE `vaca` (
  `hacienda` int(15) NOT NULL,
  `numero` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `registro` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `padre_numero` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `padre_registro` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `madre_numero` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `madre_registro` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `clasificacion` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `peso_205dias` int(5) DEFAULT NULL,
  `altura_sacro_destete` int(5) DEFAULT NULL,
  `peso_18meses` int(5) DEFAULT NULL,
  `fecha_entrada_toro` date DEFAULT NULL,
  `peso_entrada_toro` int(5) DEFAULT NULL,
  `foto` text CHARACTER SET utf8 COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `vaca`
--

INSERT INTO `vaca` (`hacienda`, `numero`, `nombre`, `registro`, `fecha_nacimiento`, `padre_numero`, `padre_registro`, `madre_numero`, `madre_registro`, `clasificacion`, `peso_205dias`, `altura_sacro_destete`, `peso_18meses`, `fecha_entrada_toro`, `peso_entrada_toro`, `foto`) VALUES
(1, '11', 'nana', '11', '2016-01-01', '987', '987', '789', '789', 'colorado', 0, 0, 0, '0000-00-00', 0, ''),
(1, '12', 'lola', '12', '2016-06-01', '987', '987', '789', '789', 'colorado', 0, 0, 0, '0000-00-00', 0, ''),
(1, '44', 'josefa', '44', '2016-01-01', '987', '987', '789', '789', 'rcial', 0, 0, 0, '0000-00-00', 0, '');

--
-- Disparadores `vaca`
--
DELIMITER $$
CREATE TRIGGER `vaca_fenotipo` AFTER INSERT ON `vaca` FOR EACH ROW INSERT INTO `fenotipo`(`id_vaca`) VALUES (NEW.numero)
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cambios`
--
ALTER TABLE `cambios`
  ADD PRIMARY KEY (`cambio`),
  ADD KEY `id_vaca` (`id_vaca`);

--
-- Indices de la tabla `cria`
--
ALTER TABLE `cria`
  ADD PRIMARY KEY (`numero_cria`),
  ADD KEY `id_vaca` (`id_vaca`) USING BTREE;

--
-- Indices de la tabla `fenotipo`
--
ALTER TABLE `fenotipo`
  ADD PRIMARY KEY (`id_vaca`);

--
-- Indices de la tabla `hacienda`
--
ALTER TABLE `hacienda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_vaca`);

--
-- Indices de la tabla `reproduccion`
--
ALTER TABLE `reproduccion`
  ADD PRIMARY KEY (`id`,`id_vaca`,`fecha`),
  ADD KEY `id_vaca` (`id_vaca`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hacienda` (`hacienda`),
  ADD KEY `hacienda_2` (`hacienda`);

--
-- Indices de la tabla `vaca`
--
ALTER TABLE `vaca`
  ADD PRIMARY KEY (`numero`),
  ADD UNIQUE KEY `registro` (`registro`),
  ADD KEY `hacienda` (`hacienda`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cambios`
--
ALTER TABLE `cambios`
  MODIFY `cambio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `hacienda`
--
ALTER TABLE `hacienda`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `reproduccion`
--
ALTER TABLE `reproduccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cambios`
--
ALTER TABLE `cambios`
  ADD CONSTRAINT `cambios_ibfk_1` FOREIGN KEY (`id_vaca`) REFERENCES `vaca` (`numero`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cria`
--
ALTER TABLE `cria`
  ADD CONSTRAINT `cria_ibfk_1` FOREIGN KEY (`id_vaca`) REFERENCES `vaca` (`numero`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fenotipo`
--
ALTER TABLE `fenotipo`
  ADD CONSTRAINT `fenotipo_ibfk_1` FOREIGN KEY (`id_vaca`) REFERENCES `vaca` (`numero`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`id_vaca`) REFERENCES `vaca` (`numero`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reproduccion`
--
ALTER TABLE `reproduccion`
  ADD CONSTRAINT `reproduccion_ibfk_1` FOREIGN KEY (`id_vaca`) REFERENCES `vaca` (`numero`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`hacienda`) REFERENCES `hacienda` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vaca`
--
ALTER TABLE `vaca`
  ADD CONSTRAINT `vaca_ibfk_1` FOREIGN KEY (`hacienda`) REFERENCES `hacienda` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
