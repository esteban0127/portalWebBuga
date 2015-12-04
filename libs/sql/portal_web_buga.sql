-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2015 a las 03:42:32
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `portal_web_buga`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_categoria`
--

CREATE TABLE IF NOT EXISTS `bdp_categoria` (
  `cat_id` int(11) NOT NULL,
  `cat_nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `cat_activo` tinyint(1) NOT NULL,
  `cat_cat_id` int(11) NOT NULL,
  `cat_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cat_update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cat_delete` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`cat_id`),
  KEY `cat_cat_id` (`cat_cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bdp_categoria`
--

INSERT INTO `bdp_categoria` (`cat_id`, `cat_nombre`, `cat_activo`, `cat_cat_id`, `cat_created`, `cat_update`, `cat_delete`) VALUES
(1, 'Cultural', 1, 1, '2015-12-04 02:33:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Deportes', 1, 2, '2015-12-04 02:33:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Historia', 1, 1, '2015-12-04 02:35:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Religion', 1, 2, '2015-12-04 02:35:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'ecoturismo', 1, 3, '2015-12-04 02:35:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_dato_usuario`
--

CREATE TABLE IF NOT EXISTS `bdp_dato_usuario` (
  `dus_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `dus_nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `dus_apellidos` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `dus_correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `dus_genero` tinyint(1) NOT NULL,
  `dus_fecha_nacimiento` date NOT NULL,
  `dus_facebook` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `dus_twitter` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `dus_google_plus` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `dus_avatar` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `dus_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dus_update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dus_delete_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`dus_id`),
  KEY `usu_id` (`usu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bdp_dato_usuario`
--

INSERT INTO `bdp_dato_usuario` (`dus_id`, `usu_id`, `dus_nombre`, `dus_apellidos`, `dus_correo`, `dus_genero`, `dus_fecha_nacimiento`, `dus_facebook`, `dus_twitter`, `dus_google_plus`, `dus_avatar`, `dus_created_at`, `dus_update_at`, `dus_delete_at`) VALUES
(1, 1, 'lizeth', 'giraldo', 'liz@gmail.com', 0, '1993-02-15', 'liz', 'lize', 'lizeth', '12294731_1637710353163639_2184491027267341504_n.jpg', '2015-12-03 00:06:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 'q', 'q', 'q@j.vom', 0, '2015-12-03', 'q', 'q', 'q', '2723-un-maquillaje-sobrecargado-no-hara-que-680x0-2.jpg', '2015-12-03 14:43:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_estado`
--

CREATE TABLE IF NOT EXISTS `bdp_estado` (
  `est_id` int(11) NOT NULL,
  `est_nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `est_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `est_delete_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`est_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bdp_estado`
--

INSERT INTO `bdp_estado` (`est_id`, `est_nombre`, `est_created_at`, `est_delete_at`) VALUES
(1, 'activo', '2015-12-04 02:36:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_etiqueta`
--

CREATE TABLE IF NOT EXISTS `bdp_etiqueta` (
  `eti_id` int(11) NOT NULL,
  `eti_nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `sit_id` int(11) NOT NULL,
  `eve_id` int(11) NOT NULL,
  `eti_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `eti_updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `eti_deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`eti_id`),
  KEY `sit_id` (`sit_id`),
  KEY `eve_id` (`eve_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_evento`
--

CREATE TABLE IF NOT EXISTS `bdp_evento` (
  `eve_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `eve_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `eve_fecha_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `eve_direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `eve_nombre_contacto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `eve_correo_contacto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `eve_telefono_contacto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `eve_valor_boleta` int(11) NOT NULL,
  `eve_latitud` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `eve_longitud` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_inicio_publicacion` date NOT NULL,
  `fecha_fin_publicacion` date NOT NULL,
  `est_id` int(11) NOT NULL,
  `eve_created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `eve_updted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `eve_deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`eve_id`),
  KEY `usu_id` (`usu_id`),
  KEY `cat_id` (`cat_id`),
  KEY `est_id` (`est_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_imagen`
--

CREATE TABLE IF NOT EXISTS `bdp_imagen` (
  `img_id` int(11) NOT NULL,
  `eve_id` int(11) NOT NULL,
  `sit_id` int(11) NOT NULL,
  `img_ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `img_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`img_id`),
  KEY `sit_id` (`sit_id`),
  KEY `eve_id` (`eve_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_itinerario`
--

CREATE TABLE IF NOT EXISTS `bdp_itinerario` (
  `iti_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `sit_id` int(11) NOT NULL,
  `iti_posicion` int(11) NOT NULL,
  `iti_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `iti_updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `iti_deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`iti_id`),
  KEY `usu_id` (`usu_id`),
  KEY `sit_id` (`sit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_pqrsf`
--

CREATE TABLE IF NOT EXISTS `bdp_pqrsf` (
  `pqrsf_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `est_id` int(11) NOT NULL,
  `pqrsf_mensaje` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `pqrsf_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pqrsf_updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `pqrsf_deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`pqrsf_id`),
  KEY `usu_id` (`usu_id`),
  KEY `est_id` (`est_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_pqrsf_respuesta`
--

CREATE TABLE IF NOT EXISTS `bdp_pqrsf_respuesta` (
  `res_id` int(11) NOT NULL,
  `pqrsf_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `res_resuesta` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `res_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `res_updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `res_deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`res_id`),
  KEY `pqrsf_id` (`pqrsf_id`),
  KEY `usu_id` (`usu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_rol`
--

CREATE TABLE IF NOT EXISTS `bdp_rol` (
  `rol_id` int(11) NOT NULL,
  `rol_rol` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `rol_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rol_update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rol_delete_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`rol_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bdp_rol`
--

INSERT INTO `bdp_rol` (`rol_id`, `rol_rol`, `rol_created_at`, `rol_update_at`, `rol_delete_at`) VALUES
(1, 'admin', '2015-12-01 05:11:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'usuario', '2015-12-04 02:31:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'cliente', '2015-12-04 02:31:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_sitio`
--

CREATE TABLE IF NOT EXISTS `bdp_sitio` (
  `sit_id` int(11) NOT NULL,
  `sit_nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `sit_descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sit_direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sit_telefono` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `sit_latitud` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `sit_longitud` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `est_id` int(11) NOT NULL,
  `sit_facebook` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `sit_twitter` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `sit_google_plus` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `sit_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sit_update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sit_delete_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `usu_id` int(11) NOT NULL,
  PRIMARY KEY (`sit_id`),
  KEY `cat_id` (`cat_id`),
  KEY `est_id` (`est_id`),
  KEY `usu_id` (`usu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_usuario`
--

CREATE TABLE IF NOT EXISTS `bdp_usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `usu_password` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `usu_activado` tinyint(1) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `usu_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usu_update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `usu_deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`usu_id`),
  KEY `rol_id` (`rol_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bdp_usuario`
--

INSERT INTO `bdp_usuario` (`usu_id`, `usu_usuario`, `usu_password`, `usu_activado`, `rol_id`, `usu_created_at`, `usu_update_at`, `usu_deleted_at`) VALUES
(1, 'lizeth', '123', 1, 1, '2015-12-03 00:06:19', '0000-00-00 00:00:00', NULL),
(2, 'q', 'q', 1, 1, '2015-12-03 14:43:24', '0000-00-00 00:00:00', NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bdp_categoria`
--
ALTER TABLE `bdp_categoria`
  ADD CONSTRAINT `bdp_categoria_ibfk_1` FOREIGN KEY (`cat_cat_id`) REFERENCES `bdp_categoria` (`cat_id`);

--
-- Filtros para la tabla `bdp_dato_usuario`
--
ALTER TABLE `bdp_dato_usuario`
  ADD CONSTRAINT `bdp_dato_usuario_ibfk_1` FOREIGN KEY (`usu_id`) REFERENCES `bdp_usuario` (`usu_id`);

--
-- Filtros para la tabla `bdp_etiqueta`
--
ALTER TABLE `bdp_etiqueta`
  ADD CONSTRAINT `bdp_etiqueta_ibfk_1` FOREIGN KEY (`sit_id`) REFERENCES `bdp_sitio` (`sit_id`),
  ADD CONSTRAINT `bdp_etiqueta_ibfk_2` FOREIGN KEY (`eve_id`) REFERENCES `bdp_evento` (`eve_id`),
  ADD CONSTRAINT `bdp_etiqueta_ibfk_3` FOREIGN KEY (`eve_id`) REFERENCES `bdp_evento` (`eve_id`);

--
-- Filtros para la tabla `bdp_evento`
--
ALTER TABLE `bdp_evento`
  ADD CONSTRAINT `bdp_evento_ibfk_1` FOREIGN KEY (`usu_id`) REFERENCES `bdp_usuario` (`usu_id`),
  ADD CONSTRAINT `bdp_evento_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `bdp_categoria` (`cat_id`),
  ADD CONSTRAINT `bdp_evento_ibfk_3` FOREIGN KEY (`est_id`) REFERENCES `bdp_estado` (`est_id`);

--
-- Filtros para la tabla `bdp_imagen`
--
ALTER TABLE `bdp_imagen`
  ADD CONSTRAINT `bdp_imagen_ibfk_1` FOREIGN KEY (`sit_id`) REFERENCES `bdp_sitio` (`sit_id`),
  ADD CONSTRAINT `bdp_imagen_ibfk_2` FOREIGN KEY (`eve_id`) REFERENCES `bdp_evento` (`eve_id`),
  ADD CONSTRAINT `bdp_imagen_ibfk_3` FOREIGN KEY (`eve_id`) REFERENCES `bdp_evento` (`eve_id`);

--
-- Filtros para la tabla `bdp_itinerario`
--
ALTER TABLE `bdp_itinerario`
  ADD CONSTRAINT `bdp_itinerario_ibfk_1` FOREIGN KEY (`usu_id`) REFERENCES `bdp_usuario` (`usu_id`),
  ADD CONSTRAINT `bdp_itinerario_ibfk_2` FOREIGN KEY (`sit_id`) REFERENCES `bdp_sitio` (`sit_id`);

--
-- Filtros para la tabla `bdp_pqrsf`
--
ALTER TABLE `bdp_pqrsf`
  ADD CONSTRAINT `bdp_pqrsf_ibfk_1` FOREIGN KEY (`usu_id`) REFERENCES `bdp_usuario` (`usu_id`),
  ADD CONSTRAINT `bdp_pqrsf_ibfk_2` FOREIGN KEY (`est_id`) REFERENCES `bdp_estado` (`est_id`);

--
-- Filtros para la tabla `bdp_pqrsf_respuesta`
--
ALTER TABLE `bdp_pqrsf_respuesta`
  ADD CONSTRAINT `bdp_pqrsf_respuesta_ibfk_1` FOREIGN KEY (`pqrsf_id`) REFERENCES `bdp_pqrsf` (`pqrsf_id`),
  ADD CONSTRAINT `bdp_pqrsf_respuesta_ibfk_2` FOREIGN KEY (`usu_id`) REFERENCES `bdp_usuario` (`usu_id`);

--
-- Filtros para la tabla `bdp_sitio`
--
ALTER TABLE `bdp_sitio`
  ADD CONSTRAINT `bdp_sitio_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `bdp_categoria` (`cat_id`),
  ADD CONSTRAINT `bdp_sitio_ibfk_2` FOREIGN KEY (`est_id`) REFERENCES `bdp_estado` (`est_id`),
  ADD CONSTRAINT `bdp_sitio_ibfk_3` FOREIGN KEY (`usu_id`) REFERENCES `bdp_usuario` (`usu_id`);

--
-- Filtros para la tabla `bdp_usuario`
--
ALTER TABLE `bdp_usuario`
  ADD CONSTRAINT `bdp_usuario_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `bdp_rol` (`rol_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
