-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-08-2017 a las 18:45:01
-- Versión del servidor: 5.6.36-cll-lve
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `codehaus_crm_dairmex`
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
(4, 'cemento', 'costal', '2', 'cementera', 'cementera', 'RE00-5', 5),
(5, 'aluminio', 'rollo', '1', 'Tlapec', 'Tlapec', 'RE00-6', 6),
(6, 'pintura azul', '1/2 litro', '2', 'Amex', 'comentarios', 'RE00-7', 7),
(7, 'test', 'teste', 'teste', 'teste', 'test', 'RE00-8', 8),
(8, 'test', 'test', 'test', 'test', 'test', 'RE00-9', 9),
(9, 'pintura azul', '1/2 litro', '2', 'Amex', 'akjsdhaksj', 'RE00-10', 10),
(10, 'pintura azul', '1/2 litro', '2', 'Amex', 'akjsdhaksj', 'RE00-11', 11),
(11, 'pintura azul', '1/2 litro', '2', 'Amex', 'akjsdhaksj', 'RE00-12', 12),
(12, 'cemento', 'costal', '1', 'cementera', 'asdasda', 'RE00-13', 13),
(13, 'pintura azul', '1/2 litro', '2', 'Amex', '', 'RE00-14', 14),
(14, 'aluminio', '1/2 litro', '2', 'Amex', 'asksajldk', 'RE00-15', 15),
(15, 'pintura amarilla', 'galon', '2', 'Remodelaci&oacute;n interna', 'Remodelaci&oacute;n interna', 'RE00-16', 16),
(16, 'pintura roja', 'galon', '1', 'Remodelaci&oacute;n interna', 'Remodelaci&oacute;n interna', 'RE00-17', 17),
(17, 'gas lp', 'tanque', '2', 'Remodelaci&oacute;n interna', 'Remodelaci&oacute;n interna', 'RE00-18', 18),
(18, 'cemento', 'costal', '2', 'Remodelaci&oacute;n interna', 'Remodelaci&oacute;n interna', 'RE00-19', 19),
(19, 'cemento', 'costal', '2', 'Remodelaci&oacute;n interna', 'Remodelaci&oacute;n interna', 'RE00-20', 20),
(20, 'pintura amarilla', '1/2 litro', '3', 'Remodelaci&oacute;n interna', 'Remodelaci&oacute;n interna', 'RE00-21', 21),
(21, 'pintura amarilla', '1/2 litro', '1', 'Remodelaci&oacute;n interna', 'Remodelaci&oacute;n interna', 'RE00-22', 22),
(22, 'codo', '1/2', '12', 'CERVANTES', '', 'RE00-23', 23),
(23, 'COPLE', '3/4', '25', 'CERVANTES', '', 'RE00-23', 23),
(24, 'TUBO', '1/2', '10', 'CERVANTES', '', 'RE00-23', 23),
(25, 'TEE', '5/8', '20', 'CERVANTES', 'JNNIUNUIU', 'RE00-23', 23),
(26, 'GUANTES', '7', '2', '2', '', 'RE00-23', 23),
(27, '4', '45', '4554', 'LKMK', '', 'RE00-23', 23),
(28, 'PP', 'PP', 'P', 'P', 'P', 'RE00-23', 23),
(29, 'codo', 'knk', 'k&ntilde;mkm', 'mm&ntilde;&ntilde;lm', '&ntilde;lmm&ntilde;l', 'RE00-24', 24),
(30, 'non', 'nono', 'non', 'onno', 'on', 'RE00-24', 24),
(31, 'Gasolina', 'Litro', '5', 'Uso personal', 'Uso personal', 'RE00-25', 25),
(32, 'Agua potable', 'litro', '5', 'Uso personal', 'n/a', 'RE00-26', 26),
(33, 'Jabon', 'pza', '10', 'Uso personal', 'mis comentarios', 'RE00-26', 26);

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
(4, 22, '2017-08-16 14:52:47', 1),
(5, 22, '2017-08-16 15:44:53', 1),
(6, 22, '2017-08-16 16:38:11', 1),
(7, 22, '2017-08-16 16:40:18', 1),
(8, 22, '2017-08-16 16:54:54', 1),
(9, 22, '2017-08-16 16:59:03', 1),
(10, 22, '2017-08-16 17:06:06', 1),
(11, 22, '2017-08-16 17:06:58', 1),
(12, 22, '2017-08-16 17:10:17', 1),
(13, 22, '2017-08-16 17:11:44', 1),
(14, 22, '2017-08-16 17:13:06', 1),
(15, 22, '2017-08-16 12:28:15', 1),
(16, 22, '2017-08-16 13:18:33', 1),
(17, 22, '2017-08-16 13:25:59', 1),
(18, 22, '2017-08-16 13:27:49', 1),
(19, 22, '2017-08-16 13:31:15', 1),
(20, 22, '2017-08-16 13:33:24', 1),
(21, 22, '2017-08-16 13:34:26', 1),
(22, 22, '2017-08-16 13:45:46', 1),
(23, 23, '2017-08-16 19:20:07', 1),
(24, 23, '2017-08-16 21:07:30', 1),
(25, 24, '2017-08-17 18:05:39', 1),
(26, 24, '2017-08-17 18:12:15', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `perfil` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apaterno` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `empresa` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
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

INSERT INTO `users` (`id`, `perfil`, `nombre`, `apaterno`, `empresa`, `telefono`, `email`, `username`, `password`, `registro`, `activo`) VALUES
(1, 'administrador', '', '', '', '', 'admin@admin.com', 'Admin', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '0000-00-00', 1),
(2, 'editor', '', '', '', '', '', 'vanessa78', 'ab41949825606da179db7c89ddcedcc167b64847', '0000-00-00', 1),
(3, 'suscriptor', '', '', '', '', '', 'jaime70', '1a248d7a471ad8d5993aa523c8397ce1d0bafe78', '0000-00-00', 1),
(18, 'suscriptor', 'pablo jaime', 'maya', 'lopez', '5577889966', 'pablo@montesdeocacp.com', 'pablo jaime', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2017-08-15', 1),
(19, 'suscriptor', 'jimmy', 'perez', 'gomez', '7223367184', 'jimmy123@hotmail.com', 'jimmy', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2017-08-15', 1),
(20, 'suscriptor', 'juan', 'perez', 'diaz', '5588774411', 'juanpd@hotmail.com', 'juan', '7c222fb2927d828af22f592134e8932480637c0d', '2017-08-15', 1),
(21, 'suscriptor', 'test', 'test', 'test', '5588774411', 'testt@hotmail.com', 'test', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2017-08-15', 1),
(22, 'suscriptor', 'julian', 'casa', 'blancas', '5588774422', 'julianc@gmail.com', 'julian', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2017-08-15', 1),
(23, 'suscriptor', 'RAMSES', 'JUAREZ', 'HERNANDEZ', '5585351413', 'ramses@dairmex.com', 'RAMSES', '3e2551af23f1e73e68e2649ea667c0b6a6708567', '2017-08-17', 1),
(24, 'suscriptor', 'pablo', 'maya', 'jiménez', '7223367184', 'mayajahir8@gmail.com', 'pablo', 'd52ef20e306b8aff53a89e9d2f928ad7c5f2a66d', '2017-08-17', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `requisicion`
--
ALTER TABLE `requisicion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
