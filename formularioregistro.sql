-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2023 a las 17:58:50
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formularioregistro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formularioregistro`
--

CREATE TABLE `formularioregistro` (
  `NOMBRE` varchar(20) NOT NULL,
  `PRIMER APELLIDO` varchar(20) NOT NULL,
  `SEGUNDO APELLIDO` varchar(20) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `USUARIO` varchar(20) NOT NULL,
  `CONTRASEÑA` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formularioregistro`
--

INSERT INTO `formularioregistro` (`NOMBRE`, `PRIMER APELLIDO`, `SEGUNDO APELLIDO`, `EMAIL`, `USUARIO`, `CONTRASEÑA`) VALUES
('gerardo', 'morales', 'monclus', 'gm@gmail.com', 'gero', '123456'),
('lucas', 'gonzalez', 'ramirez', 'lucas@hotmail.com', 'lucas', '5554sS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
