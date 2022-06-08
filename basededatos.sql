-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2022 a las 01:29:00
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `basededatos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidato`
--

CREATE TABLE `candidato` (
  `nombre` varchar(100) DEFAULT NULL,
  `ci` varchar(100) DEFAULT NULL,
  `matricula` varchar(100) DEFAULT NULL,
  `cargo` int(2) DEFAULT NULL,
  `nombreFrente` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frente`
--

CREATE TABLE `frente` (
  `nombre` varchar(100) NOT NULL,
  `color1` varchar(100) DEFAULT NULL,
  `color2` varchar(100) DEFAULT NULL,
  `estado` int(2) DEFAULT NULL,
  `usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `frente`
--

INSERT INTO `frente` (`nombre`, `color1`, `color2`, `estado`, `usuario`) VALUES
('git', 'black', 'red', 1, 'wilder');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cod` int(3) NOT NULL,
  `user_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cod`, `user_type`) VALUES
(1, 'postulante'),
(2, 'comision');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cod_user` int(3) DEFAULT NULL,
  `user` varchar(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `inscripcion` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cod_user`, `user`, `email`, `password`, `inscripcion`) VALUES
(1, 'rony', 'rony@gmail.com', '123', 0),
(2, 'rosa', 'rosa@gmail.com', 'rosamachi', 0),
(1, 'wilder', 'wmayta@gmail.com', '12345678', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candidato`
--
ALTER TABLE `candidato`
  ADD KEY `nombreFrente` (`nombreFrente`);

--
-- Indices de la tabla `frente`
--
ALTER TABLE `frente`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`user`),
  ADD KEY `cod_user` (`cod_user`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `candidato`
--
ALTER TABLE `candidato`
  ADD CONSTRAINT `candidato_ibfk_1` FOREIGN KEY (`nombreFrente`) REFERENCES `frente` (`nombre`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`cod_user`) REFERENCES `usuario` (`cod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
