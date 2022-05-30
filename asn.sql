-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2022 a las 20:56:55
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asn`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datta`
--

CREATE TABLE `datta` (
  `id_datta` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `commentary` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datta`
--

INSERT INTO `datta` (`id_datta`, `id_user`, `commentary`) VALUES
(55, 60, 'Siempre que veo motos de 2da mano, independientemente el año o los km...me digo\r\n¿Cual es ese límite por la cual pagar o dejarla pasar?\r\n\r\nVeo a veces BMW R1100, K, etc, con unos 100.000km\r\n\r\nLuego ves otras con pocos...\r\nEl caso es....¿Vosotros compraríais una moto de 2da mano con...80.000km?\r\n¿Tenéis un límite en 40.000km?\r\n\r\n¿Cuál es vuestro límite de km?\r\nHacer hincapié también en tema de revisiones y accesorios en ella...soy más de máximo un escape, que no muchos accesorios. El baúl yo lo v'),
(56, 61, 'Depende de para qué quiera la moto y que uso quiera darle... 70.000 para mí ya es un número en el que probablemente no compraría ninguna moto a no ser o que estuviese muy bien, que fuese para coleccionar o que el motor esté rehecho y los km digamos que solo los tiene el chasis.\r\n\r\nUna con 50.000 todavía si vale sobre unos 3000€ y tiene las revisiones gordas hechas, me informaría de cuantos km le quedan de media a la moto.\r\n\r\nY ya algo perfecto para mi ronda entre 20 y 30k, obviamente si está por'),
(57, 62, '\r\nEn mi caso, creo que mi límite está en los 20.000... No más de 25.\r\n\r\nPero si tengo referencias y tal, lo mismo me animaría.\r\n\r\nLuego las mías, las he vendido ajustando mucho el precio, eso si, en torno a los 70.000-80.000 y me consta que no le han dado problemas a los que me las compraron.\r\n\r\nPero más depende de la unidad y su trato que de la cifra en sí. Prefiero kms a años, la verdad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `user` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` char(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `user`, `mail`, `password`) VALUES
(59, 'fran502', 'fran502@gmail.com', '$2y$10$l5NQbiq8As6/ag68lwnrY.X9xq1kvHhWQN73m86kYbOwkO2sNZiri'),
(60, 'carlos777', 'carlos777@gmail.com', '$2y$10$wrtDgwEryeYYyWtjKM70WuRCsOvnN5wvTbCKLbEptcOGTiCmwWAge'),
(61, 'Mulberry_92', 'Mulberry_92@gmail.com', '$2y$10$Cp6YHo1CStFevDD9ChgehOlPlpxt0dOjWneLl7T74J4SPntCMPLK.'),
(62, 'ETODEM', 'ETODEM@gmail.com', '$2y$10$sgK7WNluVn1qZRivF2a0aOIvg443ls1KHmt7cyUBx4hX5RZ.ywv7y');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datta`
--
ALTER TABLE `datta`
  ADD PRIMARY KEY (`id_datta`),
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `user` (`user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datta`
--
ALTER TABLE `datta`
  MODIFY `id_datta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datta`
--
ALTER TABLE `datta`
  ADD CONSTRAINT `id_user_datta` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
