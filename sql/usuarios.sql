-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 02-06-2022 a las 19:39:11
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `apellidoPaterno` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `apellidoMaterno` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(200) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `direccion` varchar(150) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `ciudad` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `colonia` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `estado` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `codpos` varchar(10) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `pais` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `clave` varchar(200) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `email`, `direccion`, `ciudad`, `colonia`, `estado`, `codpos`, `pais`, `clave`) VALUES
(1, 'Yorlin', 'Quispe', 'Quispe', 'qyyorlin51@gmail.com', 'Calle Francisco Pizarro, lima', 'Lima', 'hhkjfhkjhsd', 'Municipalidad Metropolitana de Lima', '15818', 'Perú', 'bd3e68c4f833992a1585adce7fdf4258fb01b5bd8332d4a238395b1fd21fcaa3cd5ee2c91263f60443a0d1751d57cb98095a62fae16529e5da3c947808b03c22'),
(2, 'Yorlin', 'Quispe', 'fdfdfd', 'qyyorlin50@gmail.com', 'Calle Francisco Pizarro', 'Lima', 'gdgfg', 'Municipalidad Metropolitana de Lima', '15818', 'Perú', '61d04fd8d1c58cfa0469320496a5e60189b994f69732800d5b2eff4f59e7694e279483ec480ab0c093eb6ef84efe3a91fd710ce0535cf9b1d0cc8bec6f6d8b21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
