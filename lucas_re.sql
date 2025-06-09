-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2025 a las 06:01:48
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lucas_re`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recuperar`
--

CREATE TABLE `recuperar` (
  `EMAIL` varchar(100) NOT NULL,
  `CLAVE_NUEVA` int(8) NOT NULL,
  `TOKEN` varchar(100) NOT NULL,
  `FECHA_ALTA` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `recuperar`
--

INSERT INTO `recuperar` (`EMAIL`, `CLAVE_NUEVA`, `TOKEN`, `FECHA_ALTA`) VALUES
('j@gmail.com', 68849441, '5a369d7ced9f1b16a1a78190a153c90c', '2025-06-05 21:55:35'),
('j@gmail.com', 81267636, '016cedfc2e44eac26aec23994f6cbf02', '2025-06-05 22:00:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass_cifrada` varchar(60) NOT NULL,
  `pass` varchar(51) NOT NULL,
  `user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `apellido`, `email`, `pass_cifrada`, `pass`, `user`) VALUES
('j', 'j', 'j@gmail.com', '$2y$10$sxxMSQ.4SYItmgyDaahTAuSUga0sh7meUBdWL7jeDXiVDKZGHTFoG', 'j', 'j'),
('j', 'j', 'j@gmail.com', '$2y$10$3J8oZqutQehP5QhDeMkpZef0Odtyq2619Jdqxt0HCYLSyx3AgGgvK', 'j', 'j'),
('j', 'j', 'j@gmail.com', '$2y$10$3gYZdkc2rg3SjTonXPIwl.gysGXsDIOoa6LMqW9ud6YkkwZhPMKam', 'j', 'j'),
('j', 'j', 'j@gmail.com', '$2y$10$Ks3dg.XgYSXPO8kYdNW.H.OPIB.G32czcUEPqaWUfXcfEuC/YXHfi', 'j', 'j'),
('B', 'B', 'B@gmail.com', '$2y$10$QSg2IH7.tUGx5.9R2ZLfPea02rCQSZ96XQQkMEyTNw85WjZCTJ9DC', 'B', 'b');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
