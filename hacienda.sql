-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-02-2016 a las 23:29:05
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
(44, '8987', '2016-01-01', 'femenino', '1234', '', 30, '2016-02-05', 80, 165, '', 300, '', 'bco cial'),
(44, '456', '2016-01-11', 'masculino', '419-2', 'no', 30, '2016-01-05', 50, 150, NULL, 250, '', 'Bco Cial');

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
(33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'a', 'esqueleto', 'aplomo', 'largo', 'a_pecho', 'a_lomo', 'a_anca', 'p_torax', 'p_calzon', 'desarrollo', 'temperamento', 'musculo', 'ap_general', 'u_pos', 'u_ant', '_pezon', 'irri', 'total');

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
(1, 'la sonora', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre_usuario`, `password`) VALUES
(1, 'admin', 'admin');

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
  `foto` text COLLATE utf8_spanish_ci,
  `observaciones` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `vaca`
--

INSERT INTO `vaca` (`hacienda`, `numero`, `nombre`, `registro`, `fecha_nacimiento`, `padre_numero`, `padre_registro`, `madre_numero`, `madre_registro`, `clasificacion`, `peso_205dias`, `altura_sacro_destete`, `peso_18meses`, `fecha_entrada_toro`, `peso_entrada_toro`, `foto`, `observaciones`) VALUES
(1, 12, 'asdf', 12, '2014-01-01', '34', '34', '43', '43', 'fadfa adf', 0, 0, 0, '0000-00-00', 0, '', ''),
(1, 33, 'pulgoso', 33, '2016-01-01', '987', '987', '789', '789', 'poer', 0, 0, 0, '0000-00-00', 0, '', ''),
(1, 44, 'josefa', 1234, '2015-09-06', '568', '568', '789', '789', 'Br Cial', 185, 50, 258, '2016-01-10', 250, '', NULL);

--
-- Índices para tablas volcadas
--

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
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

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
-- Filtros para la tabla `vaca`
--
ALTER TABLE `vaca`
  ADD CONSTRAINT `vaca_ibfk_1` FOREIGN KEY (`hacienda`) REFERENCES `hacienda` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
