-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2025 a las 02:37:33
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass_cifrada` varchar(60) NOT NULL,
  `user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `apellido`, `email`, `pass_cifrada`, `user`) VALUES
('lucas', 're', 'lucas@gmail.com', 'pedo123', 'luqui'),
('lucas', 're', 're@gmail.com', '', 'luqui'),
('lucas', 're', 're@gmail.com', '59919086', 'luqui'),
('Nuevo', 'Final', 'n@n.com', '$2y$10$W8RBHxqoUYMWLB7zRJ7/FO18HbZFSoDFM9cNucXR9i8Eot.o9ZgZW', 'n'),
('Juan Domingo', 'Peron', 'jdperon@gmail.com', '$2y$10$rPKKFmh2bfCybbtPFOlD6uNZwoLiWj2lpEBasBy86/TfZZ0IZ.xYS', 'jdperon');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
