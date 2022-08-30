-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2022 a las 02:58:30
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
-- Base de datos: `plataforma`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cabecera_ventas`
--

CREATE TABLE `cabecera_ventas` (
  `id_ventas` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `total_ventas` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cabecera_ventas`
--

INSERT INTO `cabecera_ventas` (`id_ventas`, `fecha`, `id_usuario`, `total_ventas`) VALUES
(305, '2022-07-01', 6, 92000.00),
(306, '2022-07-01', 6, 270000.00),
(307, '2022-07-01', 6, 0.00),
(308, '2022-07-01', 6, 0.00),
(309, '2022-07-01', 6, 270000.00),
(310, '2022-07-02', 6, 175000.00),
(311, '2022-07-11', 6, 1500.00),
(312, '2022-07-13', 6, 45700.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `categoria_prod` varchar(50) NOT NULL,
  `estado_categoria` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria_prod`, `estado_categoria`) VALUES
(1, 'Cable USB', 1),
(4, 'Cargadores Celular', 1),
(5, 'PC de escritorio', 1),
(6, 'Notebooks', 1),
(7, 'Herramientas', 1),
(8, 'Modulos Celular', 1),
(10, 'Sistema Operativos', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` int(18) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(70) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `cod_postal` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `email`, `telefono`, `nombre`, `apellido`, `direccion`, `ciudad`, `cod_postal`) VALUES
(200, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(201, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(202, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(203, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(204, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(205, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(206, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(207, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(208, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(209, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(210, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(211, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(212, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(213, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(214, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(215, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(216, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(217, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(218, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(219, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(220, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(221, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(222, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(223, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(224, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(225, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(226, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(227, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(228, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(229, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(230, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(231, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(232, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(233, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(234, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(235, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(236, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(237, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(238, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(239, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(240, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(241, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(242, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(243, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(244, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(245, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(246, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(247, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(248, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(249, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(250, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(251, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(252, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(253, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(254, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(255, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(256, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(257, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(258, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(259, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(260, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(261, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(262, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(263, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(264, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(265, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(266, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(267, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(268, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(269, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(270, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(271, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(272, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(273, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(274, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(275, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(276, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(277, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(278, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(279, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(280, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(281, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(282, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(283, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(284, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(285, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(286, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(287, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(288, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(289, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(290, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(291, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(292, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(293, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400),
(294, 'marian2022@gmail.com', 768768768, 'marian', 'ojeda', 'ihiohsdiohas', 'jfshndofiho', 3400);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id_consultas` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefono` int(11) NOT NULL,
  `consulta` text NOT NULL,
  `fecha` datetime NOT NULL,
  `estado_consulta` int(11) NOT NULL,
  `registrado` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id_consultas`, `nombre`, `apellido`, `email`, `telefono`, `consulta`, `fecha`, `estado_consulta`, `registrado`) VALUES
(45, 'marian', 'ojeda', 'marian2022@gmail.com', 37965655, 'probando consulta usuario registrado', '2022-06-21 13:13:37', 1, 'SI'),
(46, 'jose ', 'lopez', 'jose@gmail.com', 768768768, 'probando consulta no registrado', '2022-06-21 13:14:23', 1, 'No'),
(50, 'yesica', 'ramirez', 'yesi@gmail.com', 768768768, 'probando no registrado', '2022-06-21 13:17:20', 1, 'No'),
(51, 'marian', 'ojeda', 'marian2022@gmail.com', 768768768, 'hola', '2022-06-30 15:07:56', 1, 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ventas`
--

CREATE TABLE `detalle_ventas` (
  `id_detalle` int(11) NOT NULL,
  `id_ventas` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precio` double(10,2) NOT NULL,
  `total` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_ventas`
--

INSERT INTO `detalle_ventas` (`id_detalle`, `id_ventas`, `id_producto`, `id_cliente`, `cantidad`, `precio`, `total`) VALUES
(237, 305, 6, 287, 1, 2000.00, 2000.00),
(238, 305, 8, 287, 1, 90000.00, 90000.00),
(239, 306, 8, 288, 3, 90000.00, 270000.00),
(240, 309, 8, 291, 3, 90000.00, 270000.00),
(241, 310, 8, 292, 1, 90000.00, 90000.00),
(242, 310, 7, 292, 1, 85000.00, 85000.00),
(243, 311, 16, 293, 1, 1500.00, 1500.00),
(244, 312, 9, 294, 1, 45000.00, 45000.00),
(245, 312, 15, 294, 1, 700.00, 700.00);

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
(5, 23, 'Cable USB', 1, 'Cable USB', 'cable usb carga rapida 4.2', 'Only', 2700, '60', '1657665009_9274fce7cc520f76a9b8.png', '1'),
(6, 23, 'Turbo Cargador', 4, 'Turbo Cargador', 'turbo cargador 25w', 'Huawei', 2000, '60', '1657664996_ca066179804efc8abcf5.png', '1'),
(7, 55, 'Notebook', 6, 'Notebook lenovo', 'Notebook Lenovo 4gb RAM SSD 120 15\' Core i3', 'Lenovo', 85000, '40', '1657664968_7acb7d7044048522b46f.png', '1'),
(8, 21, 'Notebook', 6, 'Notebook Acer', 'Notebook Asus 4gb RAM SSD 120 15\'', 'Acer', 90000, '45', '1657664952_69ee00feb1ce4309222e.png', '1'),
(9, 76, 'PC de escritorio', 5, 'PC de escritorio', 'PC de escritorio HP 4gb RAM SSD 240 intel core i5 ', 'HP', 45000, '69', '1657664936_e0494039c6f587c5a445.png', '1'),
(10, 63, 'PC de escritorio', 5, 'PC de escritorio', 'PC de escritorio Lenovo 8gb RAM intel core i5', 'Lenovo', 55000, '60', '1657664923_87c1e3e43a91bbb57cab.png', '1'),
(11, 45, 'Cable USB', 1, 'Cable USB', 'cable usb carga rapida 4.2', 'Only', 4999, '83', '1655852317_3fd99bb5b23970e506ff.jpg', '0'),
(12, 23, 'Modulo ', 8, 'Modulo J5 ', 'Modulo J5 dorado ', 'Samsung', 76000, '100', '1657664904_546a57595d8fac31d724.png', '1'),
(13, 24, 'Modulo ', 8, 'Modulo A10', 'Modulo Samsung A10 original', 'Samsung', 8500, '100', '1657664885_fd1d7436bd80698d7d6d.png', '1'),
(14, 25, 'Modulo ', 8, 'Modulo A21', 'Modulo Samsung A21 original', 'Samsung', 9000, '60', '1657664868_2a068142263041f9b660.png', '1'),
(15, 55, 'Cable USB', 1, 'Cable USB tipo C', 'cable usb carga rapida 5A', 'Only', 700, '99', '1657664848_ab29292c807558b35705.png', '1'),
(16, 56, 'Cable USB', 1, 'Cable USB tipo C', 'cable usb carga rapida 4.2', 'Turbo', 1500, '99', '1657664829_7799bf47e8f7278622d9.png', '1'),
(17, 67, 'Kit herramienta', 7, 'Kit herramienta', 'Kit de herramienta profesional', 'Yaxun', 4500, '100', '1657664811_93a9f37f9b18d202380e.png', '1'),
(18, 89, 'Windows 10pro', 10, 'Windows 10pro', 'Sistema operativo windows 10pro', 'windows', 3400, '10', '1657664794_dc1aeb2f45d9f06fa7b7.png', '1'),
(19, 84, 'Windows 11', 10, 'Windows 11', 'Sistema operativo windows 11', 'windows', 5000, '10', '1657664774_66437d23d79b5a7cf4bc.png', '1'),
(20, 82, 'Windows 7', 10, 'Windows 7', 'Sistema operativo windows 7', 'windows', 3000, '10', '1657664750_df7f1ecd53c3ed2f02e2.png', '1'),
(21, 81, 'Windows 8', 10, 'Windows 8', 'Sistema operativo windows 8', 'windows', 3900, '10', '1657664702_d3d1980f073f56994fae.png', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(300) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 1,
  `baja` varchar(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `email`, `usuario`, `password`, `perfil_id`, `baja`) VALUES
(5, 'Alfredo', 'Ramirez', 'ramirezalfredoagustin80@gmail.com', 'agustin2022', '$2y$10$Uitw4Yr0aTC25K4sYuq0cux6n749wZdX3t34s/pNlxcZ1/ni9DZGi', 2, '1'),
(6, 'marian', 'ojeda', 'marian2022@gmail.com', '', '$2y$10$kKWKmlcnEEOYgtTUkBQaWuoRUcp1jy8UIhKPLEbrovOHWfd7gemLe', 1, '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cabecera_ventas`
--
ALTER TABLE `cabecera_ventas`
  ADD PRIMARY KEY (`id_ventas`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id_consultas`);

--
-- Indices de la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  ADD PRIMARY KEY (`id_detalle`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cabecera_ventas`
--
ALTER TABLE `cabecera_ventas`
  MODIFY `id_ventas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=295;

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id_consultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
