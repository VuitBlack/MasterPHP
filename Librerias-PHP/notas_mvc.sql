-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 18-06-2024 a las 19:14:27
-- Versión del servidor: 10.6.16-MariaDB-0ubuntu0.22.04.1
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `notas_mvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id` int(255) NOT NULL,
  `usuario_id` int(255) NOT NULL,
  `titulo` varchar(64) NOT NULL,
  `descripcion` mediumtext DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id`, `usuario_id`, `titulo`, `descripcion`, `fecha`) VALUES
(1, 1, '1ª Nota de prueba', 'Una nota 1 representa el nivel más bajo de calificación en un sistema educativo. Generalmente indica que el estudiante no ha cumplido con los criterios mínimos requeridos para aprobar una asignatura. Esta calificación suele reflejar una falta significativa de comprensión del material, poca participación en clase y/o un desempeño insuficiente en exámenes y tareas. Recibir una nota 1 puede ser desalentador para el estudiante, pero también puede servir como una llamada de atención para redoblar esfuerzos y mejorar sus hábitos de estudio. Es esencial buscar ayuda adicional, como tutorías, para superar las dificultades y evitar futuras calificaciones bajas.', '2024-06-04'),
(2, 1, '2ª Nota de pureba', 'Una nota 2 de prueba es un documento breve utilizado para evaluar y proporcionar retroalimentación sobre el desempeño de un estudiante en un examen o prueba específica. Este tipo de nota detalla los aciertos y errores, permitiendo al estudiante identificar áreas de mejora. Además, ayuda a los profesores a entender el nivel de comprensión de sus alumnos respecto al contenido enseñado. Las notas de prueba son fundamentales para el proceso de aprendizaje, ya que ofrecen una oportunidad para corregir errores antes de los exámenes finales. Es importante revisar estas notas cuidadosamente y utilizar la información para mejorar en futuras evaluaciones.\n\n\n\n\n\n\n', '2024-06-10'),
(3, 1, '3ª Nota de prueba', 'Una tercera nota en un contexto académico puede ser crucial para determinar el progreso de un estudiante a lo largo del curso. A menudo, esta nota refleja el desempeño acumulado y puede influir significativamente en la calificación final. Si las dos primeras notas fueron bajas, una buena tercera nota puede mejorar el promedio y demostrar un avance positivo. Por otro lado, si las dos primeras notas fueron altas, mantener el nivel en la tercera nota es esencial para consolidar el éxito. Los estudiantes deben tomar esta evaluación en serio, revisando materiales y reforzando conceptos para asegurar un rendimiento consistente y exitoso.', '2024-06-16'),
(4, 1, '4ª Nota desde PHP MVC', 'Descripción de mi nota dede PHP MVC', '2024-06-16'),
(5, 1, '5ª Nota desde PHP MVC', 'Descripción de mi nota dede PHP MVC', '2024-06-16'),
(6, 1, '6ª Nota desde PHP MVC', 'Descripción de mi nota dede PHP MVC', '2024-06-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(16) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`, `fecha`) VALUES
(1, 'admin', 'admin ', 'admin@admin.com', 'admin', '2024-06-04'),
(3, 'Ricardo', 'SP', 'ricardo@ricardo.com', 'ricardo', '2024-06-10'),
(4, 'Rosa', 'PL', 'rosa@rosa.com', 'rosa', '2024-06-16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_entradas_usuarios` (`usuario_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `FK_entradas_usuarios` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
