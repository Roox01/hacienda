-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-03-2016 a las 04:55:22
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hacienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cambios`
--

CREATE TABLE `cambios` (
  `cambio` int(11) NOT NULL,
  `id_vaca` int(11) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `observaciones` text,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cambios`
--

INSERT INTO `cambios` (`cambio`, `id_vaca`, `estado`, `observaciones`, `fecha`) VALUES
(0, 44, 'Traslado', 'asdfah bfg dfghd h', '2016-03-24 03:10:48'),
(1, 44, 'viva', 'prueba', '2016-03-24 03:15:35'),
(2, 500, 'Viva', 'sdgsdfhb', '2016-03-24 03:18:47'),
(3, 500, 'Viva', 'sdgsdfhb', '2016-03-24 03:18:47'),
(4, 500, 'Viva', 'sdgsdfhb', '2016-03-24 03:18:47'),
(5, 500, 'Perdida', 'sdgsdfhb', '2016-03-24 03:18:51'),
(6, 500, 'Traslado', 'sdga ', '2016-03-24 03:18:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cria`
--

CREATE TABLE `cria` (
  `id_vaca` int(15) NOT NULL,
  `padre` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_parto` date NOT NULL,
  `sexo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `numero_cria` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `inter_parto` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `peso_nacimiento` int(5) NOT NULL,
  `fecha_destete` date DEFAULT NULL,
  `peso_destete` int(5) DEFAULT NULL,
  `peso_205dias` int(5) DEFAULT NULL,
  `indice1` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `peso_18meses` int(5) DEFAULT NULL,
  `indice2` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `observaciones` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cria`
--

INSERT INTO `cria` (`id_vaca`, `padre`, `fecha_parto`, `sexo`, `numero_cria`, `inter_parto`, `peso_nacimiento`, `fecha_destete`, `peso_destete`, `peso_205dias`, `indice1`, `peso_18meses`, `indice2`, `observaciones`) VALUES
(33, '852', '2015-01-31', 'femenino', '0254', 'No', 30, '2016-02-01', 0, 0, '', 0, 'sano', 'colorado'),
(44, '8987', '2016-01-01', 'femenino', '1234', '', 30, '2016-02-05', 65, 165, 'sano', 300, 'sano', 'bco cial'),
(44, '456', '2016-01-11', 'masculino', '419-2', 'no', 30, '2016-01-05', 33, 150, 'sano', 250, 'sano', 'Bco Cial'),
(12, '369', '2016-02-21', 'masculino', '852', 'no', 30, '0000-00-00', 0, 0, '', 0, '', ''),
(33, '852', '2015-01-31', 'femenino', '898', 'No', 30, '2016-02-12', 0, 0, 'sano', 300, 'sano', 'colorado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fenotipo`
--

CREATE TABLE `fenotipo` (
  `id_vaca` int(15) NOT NULL,
  `car_racial_ap_general` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `esqueleto` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `aplomos` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `largo` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `amplitud_pecho` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `amplitud_lomo` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `amplitud_anca` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `profundidad_torax` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `profundidad_calzon` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `desarrollo` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `temperamento` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `musculo_grasa` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ap_general` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `u_post` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `u_ant` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pezon` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `irrig` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `total` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `fenotipo`
--

INSERT INTO `fenotipo` (`id_vaca`, `car_racial_ap_general`, `esqueleto`, `aplomos`, `largo`, `amplitud_pecho`, `amplitud_lomo`, `amplitud_anca`, `profundidad_torax`, `profundidad_calzon`, `desarrollo`, `temperamento`, `musculo_grasa`, `ap_general`, `u_post`, `u_ant`, `pezon`, `irrig`, `total`) VALUES
(12, 'qwerty', 'asdfs', 'fdf', 'fasd', 'dsf', 'sdf', '1234', 'wertgf', 'gfgfg', '1341324', 'fgh', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, '78', '5', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'ap gen', 'esqueleto', 'aplomo', 'largo', 'a_pecho', 'a_lomo', 'a_anca', 'p_torax', 'p_calzon', 'desarrollo', 'temperamento', 'musculo', 'ap_general', 'u_pos', 'u_ant', '_pezon', 'irri', 'tot'),
(55, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(223, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hacienda`
--

CREATE TABLE `hacienda` (
  `id` int(15) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `hacienda`
--

INSERT INTO `hacienda` (`id`, `nombre`, `direccion`, `telefono`) VALUES
(1, 'la sonora', NULL, NULL),
(2, 'napoles', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_vaca` int(11) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `observaciones` text,
  `fecha_consulta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id_vaca`, `estado`, `observaciones`, `fecha_consulta`) VALUES
(44, 'viva', 'prueba', '2016-03-24 03:26:38'),
(500, 'Traslado', 'sdga ', '2016-03-24 03:18:58');

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
  `id_vaca` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `toro1` varchar(15) DEFAULT NULL,
  `toro2` varchar(15) DEFAULT NULL,
  `fecha_1ia` date DEFAULT NULL,
  `toro_1ia` varchar(15) DEFAULT NULL,
  `fecha_2ia` date DEFAULT NULL,
  `toro_2ia` varchar(15) DEFAULT NULL,
  `fecha_3iamn` date DEFAULT NULL,
  `toro_3iamn` varchar(15) DEFAULT NULL,
  `fecha_mn` date DEFAULT NULL,
  `toro_mn` varchar(15) DEFAULT NULL,
  `fecha_1pal` date DEFAULT NULL,
  `res_1pal` varchar(15) DEFAULT NULL,
  `fecha_2pal` date DEFAULT NULL,
  `res_2pal` varchar(15) DEFAULT NULL,
  `fecha_3pal` date DEFAULT NULL,
  `res_3pal` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reproduccion`
--

INSERT INTO `reproduccion` (`id`, `id_vaca`, `fecha`, `toro1`, `toro2`, `fecha_1ia`, `toro_1ia`, `fecha_2ia`, `toro_2ia`, `fecha_3iamn`, `toro_3iamn`, `fecha_mn`, `toro_mn`, `fecha_1pal`, `res_1pal`, `fecha_2pal`, `res_2pal`, `fecha_3pal`, `res_3pal`) VALUES
(1, 44, '2016-02-01', '1234', '', '2016-02-07', 'fghdhh', NULL, 'hhf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 44, '2016-02-23', '987', '987', '2016-02-23', '987', '2016-02-24', '987', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 44, '2016-02-01', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `hacienda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
  `numero` int(15) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `registro` int(15) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `padre_numero` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `padre_registro` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `madre_numero` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `madre_registro` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `clasificacion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `peso_205dias` int(5) DEFAULT NULL,
  `altura_sacro_destete` int(5) DEFAULT NULL,
  `peso_18meses` int(5) DEFAULT NULL,
  `fecha_entrada_toro` date DEFAULT NULL,
  `peso_entrada_toro` int(5) DEFAULT NULL,
  `foto` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `vaca`
--

INSERT INTO `vaca` (`hacienda`, `numero`, `nombre`, `registro`, `fecha_nacimiento`, `padre_numero`, `padre_registro`, `madre_numero`, `madre_registro`, `clasificacion`, `peso_205dias`, `altura_sacro_destete`, `peso_18meses`, `fecha_entrada_toro`, `peso_entrada_toro`, `foto`) VALUES
(1, 12, 'asdf', 12, '2014-01-01', '34', '34', '43', '43', 'fadfa adf', 0, 0, 0, '0000-00-00', 400, ''),
(1, 22, 'cvbn', 22, '2014-01-01', '65', '65', '45', '45', 'asd56', 0, 0, 0, '0000-00-00', 0, ''),
(1, 33, 'pulgoso', 33, '2016-01-01', '987', '987', '789', '789', 'rical', 200, 30, 310, '2016-01-13', 330, ''),
(1, 44, 'josefa', 1234, '2015-09-06', '568', '568', '789', '789', 'colorado', 185, 60, 300, '2016-01-10', 355, ''),
(1, 55, 'hola', 55, '2013-01-02', '741', '741', '147', '147', 'qwer', 0, 0, 0, '0000-00-00', 0, ''),
(1, 99, 'android', 99, '2016-02-01', '88', '88', '77', '77', 'poer', NULL, NULL, NULL, NULL, NULL, NULL),
(1, 100, 'dead', 100, '2013-01-01', '98', '98', '9', '9', 'res', 0, 0, 0, '0000-00-00', 0, ''),
(1, 223, 'cvbn', 223, '2014-01-01', '65', '65', '45', '45', 'asd56', 0, 0, 0, '0000-00-00', 0, ''),
(1, 500, 'qwer', 500, '2016-02-14', '878', '878', '78', '78', 'poer', NULL, NULL, NULL, NULL, NULL, NULL);

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
  MODIFY `cambio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `reproduccion`
--
ALTER TABLE `reproduccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
  ADD CONSTRAINT `cambios_ibfk_1` FOREIGN KEY (`id_vaca`) REFERENCES `vaca` (`numero`);

--
-- Filtros para la tabla `cria`
--
ALTER TABLE `cria`
  ADD CONSTRAINT `cria_ibfk_1` FOREIGN KEY (`id_vaca`) REFERENCES `vaca` (`numero`);

--
-- Filtros para la tabla `fenotipo`
--
ALTER TABLE `fenotipo`
  ADD CONSTRAINT `fenotipo_ibfk_1` FOREIGN KEY (`id_vaca`) REFERENCES `vaca` (`numero`);

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`id_vaca`) REFERENCES `vaca` (`numero`);

--
-- Filtros para la tabla `reproduccion`
--
ALTER TABLE `reproduccion`
  ADD CONSTRAINT `reproduccion_ibfk_1` FOREIGN KEY (`id_vaca`) REFERENCES `vaca` (`numero`);

--
-- Filtros para la tabla `vaca`
--
ALTER TABLE `vaca`
  ADD CONSTRAINT `vaca_ibfk_1` FOREIGN KEY (`hacienda`) REFERENCES `hacienda` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
