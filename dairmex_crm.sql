-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 17-08-2017 a las 21:15:16
-- Versión del servidor: 10.1.24-MariaDB
-- Versión de PHP: 7.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dairmex_crm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_requisicion`
--

CREATE TABLE `detalle_requisicion` (
  `id` int(11) NOT NULL,
  `articulo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `medida` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `proyecto` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `comentarios` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `folio` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `requesicion_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `detalle_requisicion`
--

INSERT INTO `detalle_requisicion` (`id`, `articulo`, `medida`, `cantidad`, `proyecto`, `comentarios`, `folio`, `requesicion_id`) VALUES
(1, 'pintura azul', '1/2 litro', '2', 'Amex', '', 'RE00-3', 3),
(2, 'libreta', 'pza', '3', 'Amex', 'libreta economica para notas', 'RE00-3', 3),
(3, 'cemento', 'costal', '1', 'cementera', 'cemento para colado', 'RE00-4', 4),
(4, 'pintura azul', '1/2 litro', '1', 'Amex', 'comentarios', 'RE00-5', 5),
(5, 'pintura azul', '1/2 litro', '1', 'Amex', 'comentarios', 'RE00-6', 6),
(6, 'test', 'test', 'test', 'test', 'test', 'RE00-7', 7),
(7, 'test', 'test', 'test', 'test', 'test', 'RE00-8', 8),
(8, 'pintura azul', '1/2 litro', '4', 'Remodelaci&oacute;n interna', 'Remodelaci&oacute;n interna', 'RE00-9', 9),
(9, '&aacute;&Aacute;&eacute;&Eacute;&iacute;&Iacute;&oacute;&Oacute;&uacute;&Uacute;&Ntilde;&ntilde;', '1 pulgadas', '10', 'Remodelaci&oacute;n interna', 'Remodelaci&oacute;n interna', 'RE00-10', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisicion`
--

CREATE TABLE `requisicion` (
  `id` int(11) NOT NULL,
  `autor` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `estatus` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `requisicion`
--

INSERT INTO `requisicion` (`id`, `autor`, `fecha`, `estatus`) VALUES
(1, 19, '2017-08-16 02:59:19', 1),
(2, 19, '2017-08-16 03:12:29', 1),
(3, 19, '2017-08-16 03:15:54', 1),
(4, 19, '2017-08-16 17:42:10', 1),
(5, 19, '2017-08-16 18:41:28', 1),
(6, 19, '2017-08-16 18:48:17', 1),
(7, 19, '2017-08-16 18:53:23', 1),
(8, 19, '2017-08-16 18:56:42', 1),
(9, 19, '2017-08-16 20:36:30', 1),
(10, 19, '2017-08-16 20:40:25', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `perfil` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apaterno` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `amaterno` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `registro` date NOT NULL,
  `activo` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `perfil`, `nombre`, `apaterno`, `amaterno`, `telefono`, `email`, `username`, `password`, `registro`, `activo`) VALUES
(1, 'administrador', '', '', '', '', 'admin@admin.com', 'Admin', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '0000-00-00', 1),
(2, 'editor', '', '', '', '', '', 'vanessa78', 'ab41949825606da179db7c89ddcedcc167b64847', '0000-00-00', 1),
(3, 'suscriptor', '', '', '', '', '', 'jaime70', '1a248d7a471ad8d5993aa523c8397ce1d0bafe78', '0000-00-00', 1),
(18, 'suscriptor', 'pablo jamex', 'maya', 'lopez', '5577889958', 'pablo@montesdeocacp.com', 'pablo jamex', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2017-08-15', 1),
(19, 'suscriptor', 'jimmy', 'perez', 'gomez', '7223367184', 'jimmy123@hotmail.com', 'jimmy', 'd52ef20e306b8aff53a89e9d2f928ad7c5f2a66d', '2017-08-15', 1),
(20, 'suscriptor', 'juan', 'perez', 'diaz', '5588774411', 'juanpd@hotmail.com', 'juan', '7c222fb2927d828af22f592134e8932480637c0d', '2017-08-15', 1),
(21, 'suscriptor', 'test', 'test', 'test', '5588774411', 'testt@hotmail.com', 'test', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2017-08-15', 1),
(22, 'suscriptor', 'marco', 'jovial', 'montes', '5577889944', 'marcosjm@gmail.com', 'marco', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2017-08-15', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_requisicion`
--
ALTER TABLE `detalle_requisicion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `requisicion`
--
ALTER TABLE `requisicion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle_requisicion`
--
ALTER TABLE `detalle_requisicion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `requisicion`
--
ALTER TABLE `requisicion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
