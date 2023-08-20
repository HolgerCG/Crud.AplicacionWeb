-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2023 a las 09:52:10
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
-- Base de datos: `logindatos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrouser`
--

CREATE TABLE `registrouser` (
  `ID` int(3) NOT NULL,
  `Nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Genero` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `User` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Contraseña` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla de Registro de Usuarios';

--
-- Volcado de datos para la tabla `registrouser`
--

INSERT INTO `registrouser` (`ID`, `Nombre`, `Apellido`, `Genero`, `User`, `Contraseña`) VALUES
(1, 'Holger', 'Centeno', 'Masculino', 'admin', 'admin'),
(2, 'Holger', 'Guaman', 'Masculino', 'hcg', 'contra123'),
(3, 'Sonia', 'Carreño', 'Femenino', 'sc33', 'contra123'),
(4, 'Andres', 'Centeno', 'Masculino', 'apcg', 'zzzzz'),
(5, 'Rich', 'Peña', 'Masculino', 'alv', '123'),
(66, 'Arturo', 'Diablo', 'Masculino', 'diablo', 'sexo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registrouser`
--
ALTER TABLE `registrouser`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `User` (`User`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registrouser`
--
ALTER TABLE `registrouser`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
