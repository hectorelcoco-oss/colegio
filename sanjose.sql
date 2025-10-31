-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2025 a las 02:17:20
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sanjose`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_materia` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `curso` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `nombre`, `curso`) VALUES
(1, 'Matemática', '1A'),
(2, 'Lengua', '1A'),
(3, 'Ciencias Naturales', '1A'),
(4, 'Ciencias Sociales', '1A'),
(5, 'Educación Física', '1A'),
(6, 'Matemática', '2B'),
(7, 'Lengua', '2B'),
(8, 'Ciencias Naturales', '2B'),
(9, 'Ciencias Sociales', '2B'),
(10, 'Educación Física', '2B'),
(11, 'Matemática', '3A'),
(12, 'Lengua', '3A'),
(13, 'Ciencias Naturales', '3A'),
(14, 'Ciencias Sociales', '3A'),
(15, 'Educación Física', '3A'),
(16, 'Matemática', '1B'),
(17, 'Lengua', '1B'),
(18, 'Ciencias Naturales', '1B'),
(19, 'Ciencias Sociales', '1B'),
(20, 'Educación Física', '1B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `nota` float DEFAULT NULL,
  `fecha` date NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `sexo` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Editor'),
(3, 'Lector');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `dni` int(10) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `fecha_nac` varchar(10) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `apellido`, `nombre`, `dni`, `usuario`, `clave`, `fecha_nac`, `sexo`, `email`, `id_rol`) VALUES
(3, 'Rodríguez', 'Ana Maria', 31234567, 'arodriguez', '$2y$10$ORB3jeTdB5ZrW5vxBElxjOgajR9tUfMZ7.3u4JcaPWUIQgpCg7sta', '1976-06-03', 'Femenino', 'ana@gmail.com', 3),
(4, 'Fernández', 'Carlos', 27890123, 'cfernandez', '$2y$10$bJPVZME4NWFQkHkQiIrLluMOX96AdGc6CKsKxdWlBKku2FoXk2kRi', '1985-10-15', 'Masculino', 'carlos@hotmail.com', 2),
(5, 'López', 'María', 29543210, 'mlopez', '$2y$10$XiEAfwAl16PQW6MHHoqnsu61krFhVyqVcB0wVngRUwQMRdrO0u3ti', '1985-08-25', 'Femenino', 'maria@gmail.com', 3),
(9, 'Flores', 'Camila', 29876543, 'cflores', '$2y$10$DM.c2iQMdNXvweq6cZUK9uByya8eOUBkxQ2iViBkqWBWsC3wdOEae', '1999-05-10', 'Femenino', 'camila@hotmail.com', 3),
(46, 'Arias', 'Hector', 14528247, 'harias', '$2y$10$bPgl4sytpUaHqNm1iEnB8epkXdWXNFdAcNobiBUT32QPhurbOLrsC', '1962-08-26', 'Masculino', 'hectorelcoco@gmail.com', 1),
(64, 'Gonzalez', 'Pedro', 25698745, 'Pedro', '$2y$10$vPN/yr0erYHLEYPk7/jgqOY9i6h2iH5ENhkLSJOeqbcGwUltPKx1K', '1986-10-15', 'Masculino', 'pedro@gmail.com', 3),
(65, 'Juan', 'Jose', 28563498, 'Juan', '$2y$10$Bcnoj65PS2y4MPy7dubFDuaOMjht4Qrkm5H2017DcJYHioM1WxcOO', '1963-12-25', 'Masculino', 'juan@gmail.com', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `dni` (`dni`),
  ADD KEY `fk_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
