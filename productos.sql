-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2022 a las 19:39:22
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `cod` int(11) NOT NULL,
  `titulo` varchar(70) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `copete` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `marca` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio` float NOT NULL,
  `stock` decimal(11,0) NOT NULL,
  `imagen` varchar(350) COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado` varchar(2) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `cod`, `titulo`, `id_categoria`, `copete`, `descripcion`, `marca`, `precio`, `stock`, `imagen`, `estado`) VALUES
(22, 33, 'Zapato Dama', 14, 'Zapato Dama', 'Zapato Dama Color Blanco', 'Zarkany', 15000, '30', '1658766881_af9dd8bcf6a453996e79.png', '1'),
(23, 34, 'Zapato Dama', 14, 'Zapato Dama', 'Zapato Dama Color Negro', 'Zarkany', 15000, '30', '1658766790_47936e0a1e0d33b30da0.png', '1'),
(24, 22, 'Remera Dama', 13, 'Remera Dama', 'Remera Dama Color Verde', 'Zarkany', 5000, '30', '1658767578_1c00343feacd8fe399dd.png', '1'),
(25, 23, 'Remera Dama', 13, 'Remera Dama', 'Remera Dama Color Negro', 'Zarkany', 5000, '30', '1658767562_f1af18c4ca66b267117b.png', '1'),
(26, 12, 'Vestido Dama', 11, 'Vestido Dama', 'Vestido Dama Color Rojo', 'Zarkany', 20000, '30', '1658767412_d8e1c230046694eb7a2c.png', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
