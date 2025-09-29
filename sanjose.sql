-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2025 a las 21:25:32
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
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(11) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `dni` int(10) NOT NULL,
  `domicilio` varchar(50) NOT NULL,
  `curso` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `apellido`, `nombre`, `dni`, `domicilio`, `curso`) VALUES
(1, 'Gómez', 'Lucía', 45123456, 'Av. Belgrano 123', ''),
(2, 'Pérez', 'Martín', 46234567, 'Calle Mitre 456', ''),
(3, 'Rodríguez', 'Ana', 47345678, 'San Martín 789', ''),
(4, 'Fernández', 'Carlos', 48456789, 'Av. Rivadavia 101', ''),
(5, 'López', 'María', 49567890, 'Calle Sarmiento 202', ''),
(6, 'Sánchez', 'Javier', 45678901, 'Av. Independencia 303', ''),
(7, 'Torres', 'Valentina', 46789012, 'Calle Moreno 404', ''),
(8, 'Ramírez', 'Diego', 47890123, 'Av. La Plata 505', ''),
(9, 'Flores', 'Camila', 48901234, 'Calle Lavalle 606', ''),
(10, 'Gutiérrez', 'Tomás', 49012345, 'Av. Córdoba 707', ''),
(11, 'Díaz', 'Sofía', 45123457, 'Calle Salta 808', ''),
(12, 'Martínez', 'Lucas', 46234568, 'Av. Santa Fe 909', ''),
(13, 'Silva', 'Julieta', 47345679, 'Calle Tucumán 111', ''),
(14, 'Castro', 'Mateo', 48456780, 'Av. Entre Ríos 222', ''),
(15, 'Rojas', 'Bianca', 49567891, 'Calle Catamarca 333', ''),
(16, 'Molina', 'Agustín', 45678902, 'Av. Jujuy 444', ''),
(17, 'Suárez', 'Martina', 46789013, 'Calle Mendoza 555', ''),
(18, 'Ortega', 'Facundo', 47890124, 'Av. Corrientes 666', ''),
(19, 'Vega', 'Renata', 48901235, 'Calle Formosa 777', ''),
(20, 'Cabrera', 'Emilia', 49012346, 'Av. San Juan 888', '');

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
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `dni` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `funcion` varchar(30) NOT NULL,
  `curso` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id_personal`, `apellido`, `nombre`, `dni`, `email`, `funcion`, `curso`) VALUES
(1, 'Gómez', 'Lucía', 30123456, 'lucia.gomez@escuela.edu.ar', 'profesor', '1A'),
(2, 'Pérez', 'Martín', 28987654, 'martin.perez@escuela.edu.ar', 'profesor', '2B'),
(3, 'Rodríguez', 'Ana', 31234567, 'ana.rodriguez@escuela.edu.ar', 'profesor', '3A'),
(4, 'Fernández', 'Carlos', 27890123, 'carlos.fernandez@escuela.edu.ar', 'profesor', '1B'),
(5, 'López', 'María', 29543210, 'maria.lopez@escuela.edu.ar', 'profesor', '2A'),
(6, 'Sánchez', 'Javier', 30987654, 'javier.sanchez@escuela.edu.ar', 'profesor', '3B'),
(7, 'Torres', 'Valentina', 31456789, 'valentina.torres@escuela.edu.ar', 'profesor', '1A'),
(8, 'Ramírez', 'Diego', 28765432, 'diego.ramirez@escuela.edu.ar', 'profesor', '2B'),
(9, 'Flores', 'Camila', 29876543, 'camila.flores@escuela.edu.ar', 'profesor', '3A'),
(10, 'Gutiérrez', 'Tomás', 30567890, 'tomas.gutierrez@escuela.edu.ar', 'profesor', '1B'),
(11, 'Díaz', 'Sofía', 29345678, 'sofia.diaz@escuela.edu.ar', 'preceptor', '1A'),
(12, 'Martínez', 'Lucas', 31098765, 'lucas.martinez@escuela.edu.ar', 'preceptor', '2A'),
(13, 'Silva', 'Julieta', 29901234, 'julieta.silva@escuela.edu.ar', 'preceptor', '3B'),
(14, 'Castro', 'Mateo', 28432109, 'mateo.castro@escuela.edu.ar', 'preceptor', '1B'),
(15, 'Rojas', 'Bianca', 31345678, 'bianca.rojas@escuela.edu.ar', 'preceptor', '2B'),
(16, 'Molina', 'Agustín', 29765432, 'agustin.molina@escuela.edu.ar', 'preceptor', '3A'),
(17, 'Suárez', 'Martina', 30678901, 'martina.suarez@escuela.edu.ar', 'bibliotecario', 'Biblioteca'),
(18, 'Ortega', 'Facundo', 29012345, 'facundo.ortega@escuela.edu.ar', 'director', 'Dirección'),
(19, 'Vega', 'Renata', 30876543, 'renata.vega@escuela.edu.ar', 'secretario', 'Secretaría'),
(20, 'Cabrera', 'Emilia', 29654321, 'emilia.cabrera@escuela.edu.ar', 'profesor', '3B');

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
  `clave` varchar(50) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `apellido`, `nombre`, `dni`, `usuario`, `clave`, `rol`) VALUES
(1, 'Gómez', 'Lucía', 30123456, 'lgomez', 'clave123', 'admin'),
(2, 'Pérez', 'Martín', 28987654, 'mperez', 'martin2023', 'usuario'),
(3, 'Rodríguez', 'Ana', 31234567, 'arodriguez', 'anaClave!', 'editor'),
(4, 'Fernández', 'Carlos', 27890123, 'cfernandez', 'carlosPass', 'usuario'),
(5, 'López', 'María', 29543210, 'mlopez', 'maria2024', 'admin'),
(6, 'Sánchez', 'Javier', 30987654, 'jsanchez', 'javPass99', 'editor'),
(7, 'Torres', 'Valentina', 31456789, 'vtorres', 'valenClave', 'usuario'),
(8, 'Ramírez', 'Diego', 28765432, 'dramirez', 'diego2025', 'admin'),
(9, 'Flores', 'Camila', 29876543, 'cflores', 'camilaPass', 'usuario'),
(10, 'Gutiérrez', 'Tomás', 30567890, 'tgutierrez', 'tomasClave', 'editor'),
(11, 'Díaz', 'Sofía', 29345678, 'sdiaz', 'sofia2023', 'usuario'),
(12, 'Martínez', 'Lucas', 31098765, 'lmartinez', 'lucasClave', 'admin'),
(13, 'Silva', 'Julieta', 29901234, 'jsilva', 'julietaPass', 'editor'),
(14, 'Castro', 'Mateo', 28432109, 'mcastro', 'mateo2024', 'usuario'),
(15, 'Rojas', 'Bianca', 31345678, 'brojas', 'biancaClave', 'editor'),
(16, 'Molina', 'Agustín', 29765432, 'amolina', 'agusPass', 'usuario'),
(17, 'Suárez', 'Martina', 30678901, 'msuarez', 'martina2025', 'admin'),
(18, 'Ortega', 'Facundo', 29012345, 'fortega', 'facundoClave', 'usuario'),
(19, 'Vega', 'Renata', 30876543, 'rvega', 'renataPass', 'editor'),
(20, 'Cabrera', 'Emilia', 29654321, 'ecabrera', 'emilia2024', 'usuario'),
(21, '', '', 28596314, '', '', ''),
(22, '', '', 0, '', 'clave69874', ''),
(32, '', '', 14528247, '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`),
  ADD UNIQUE KEY `dni` (`dni`);

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
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_personal`),
  ADD UNIQUE KEY `dni` (`dni`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `dni` (`dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `materias` (`id_materia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
