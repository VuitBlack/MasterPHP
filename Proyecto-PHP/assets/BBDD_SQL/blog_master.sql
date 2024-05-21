-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-05-2024 a las 17:35:26
-- Versión del servidor: 11.3.2-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog_master`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(255) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Acción'),
(2, 'Rol'),
(3, 'Deportes'),
(4, 'Plataformas'),
(5, 'MMO RPG'),
(6, 'Nuevos Juegos'),
(8, 'Juegos Raros'),
(9, 'Programación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `id` int(255) NOT NULL,
  `usuario_id` int(255) NOT NULL,
  `categoria_id` int(255) NOT NULL,
  `titulo` varchar(64) NOT NULL,
  `descripcion` mediumtext DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`id`, `usuario_id`, `categoria_id`, `titulo`, `descripcion`, `fecha`) VALUES
(1, 1, 1, 'Novedades de GTA-5 online', 'Review de GTA-5', '2024-04-03'),
(2, 1, 2, 'Review de LoL online', 'Todo sobre League of Legends', '2024-04-02'),
(3, 1, 3, 'Nuevos players de FIFA 19', 'Review de Fifa 19', '2024-04-03'),
(4, 2, 1, 'Novedades de Assasins online', 'Review de Assasins', '2024-04-02'),
(5, 2, 2, 'Review de Wow online', 'Todo sobre Worl of Wordcraft', '2024-04-03'),
(6, 2, 3, 'Nuevos players de PES 19', 'Review de PES 19', '2024-04-03'),
(7, 3, 1, 'Novedades de Call of Duty online', 'Review de COD', '2024-04-02'),
(8, 3, 4, 'Review de Fortnite online', '\nFortnite es un popular videojuego de supervivencia y construcción desarrollado por Epic Games. Se distingue por su modo \"Battle Royale\", donde hasta 100 jugadores compiten para ser el último en pie en un mapa que se reduce con el tiempo. Además, ofrece el modo \"Salvar el Mundo\", donde los jugadores cooperan para defenderse de hordas de zombis. Fortnite se destaca por su estilo visual colorido, combinado con mecánicas de juego accesibles y la capacidad de construir estructuras defensivas y ofensivas. Su constante actualización con eventos en vivo y contenido nuevo ha contribuido a su enorme popularidad entre jugadores de todas las edades.', '2024-04-03'),
(9, 3, 3, 'Nuevos players de Formula 1 2k20', '\"Formula 1 2k20\" es un videojuego de carreras desarrollado por Codemasters, basado en el Campeonato Mundial de Fórmula 1. Ofrece una experiencia realista de competición de F1, con gráficos impresionantes y mecánicas de juego precisas. Los jugadores pueden competir como sus pilotos y equipos favoritos en circuitos icónicos de todo el mundo. El juego incluye modos de juego como carrera individual, modo carrera profesional y multijugador en línea. Con una amplia gama de opciones de personalización y un enfoque en la simulación de la conducción, \"Formula 1 2k20\" brinda una experiencia inmersiva para los entusiastas de las carreras.', '2024-04-03'),
(10, 4, 1, 'Guía de GTA Vice City', 'Grand Theft Auto (GTA) es una serie de videojuegos desarrollada por Rockstar Games. Se centra en la acción en un mundo abierto, donde los jugadores asumen roles de criminales que navegan por ciudades ficticias, realizando misiones y actividades delictivas. Desde su inicio en 1997, la franquicia ha evolucionado, ofreciendo experiencias inmersivas con narrativas complejas y un vasto mundo por explorar. Combina elementos de conducción, disparos y aventura, permitiendo a los jugadores tener una libertad considerable para explorar y tomar decisiones. GTA se ha convertido en un icono de la cultura de los videojuegos y una de las series más exitosas de la historia.', '2024-04-05'),
(11, 1, 9, 'Jugando con SQL', 'SQL (Structured Query Language) es un lenguaje de programación diseñado para administrar y manipular bases de datos relacionales. Permite realizar diversas operaciones, como consultar, insertar, actualizar y eliminar datos de una base de datos. SQL se utiliza ampliamente en la gestión de datos en aplicaciones y sistemas informáticos, desde pequeñas bases de datos personales hasta grandes sistemas empresariales. Su sintaxis clara y su capacidad para trabajar con conjuntos de datos hacen que sea una herramienta poderosa para la gestión y el análisis de información. Es un estándar en la industria de bases de datos y es fundamental para muchos desarrollos de software.', '2024-04-05'),
(13, 12, 3, 'Nuevo Videojuego 1', 'Es una prueba un video juego nuevo para ver que funciona todo correctamente', '2024-05-15'),
(14, 12, 5, 'Nuevo Juego 2', 'Es una prueba un video juego nuevo para ver que funciona todo correctamente', '2024-05-15'),
(15, 12, 4, 'Nuevo Juego 3', 'Otra prueba', '2024-05-15'),
(16, 11, 6, 'Nuevo Juego 4', 'Seguimos con las pruebas', '2024-05-15'),
(17, 12, 9, 'Aprendiendo PHP', '\r\nBienvenido al Máster en PHP, en el que aprenderemos todo lo necesario para dominar el lenguaje de programación del lado del servidor(backend) más popular en la actualidad y todas las tecnologías a su alrededor con más futuro y demanda laboral.\r\n\r\nEste no es un curso cualquiera, estás ante un máster completo', '2024-05-16'),
(18, 12, 9, 'Aprendiendo HTML', 'HTML (HyperText Markup Language) es el lenguaje estándar utilizado para crear y estructurar páginas web. Define la estructura básica de una página web mediante el uso de etiquetas y elementos que organizan el contenido en títulos, párrafos, listas, enlaces, imágenes y otros componentes multimedia. HTML permite a los desarrolladores web construir sitios web accesibles y organizados, estableciendo la base sobre la cual se aplican estilos (con CSS) y se añaden funcionalidades interactivas (con JavaScript). Desde su creación, HTML ha evolucionado con versiones más avanzadas, como HTML5, que incorporan nuevas características para mejorar la multimedia y la interacción del usuario en la web.', '2024-05-16'),
(19, 12, 9, 'JAVA from 0 to Master', 'Java es un lenguaje de programación de propósito general, orientado a objetos, desarrollado por Sun Microsystems (ahora propiedad de Oracle) en 1995. Es conocido por su portabilidad, ya que los programas Java pueden ejecutarse en cualquier dispositivo con una Máquina Virtual Java (JVM), lo que se resume en el lema \"escribe una vez, ejecuta en cualquier lugar\". Java es ampliamente utilizado para desarrollar aplicaciones empresariales, aplicaciones móviles (especialmente Android), servicios web y software de escritorio. Su sintaxis clara y robusta gestión de memoria lo hacen popular entre los desarrolladores, proporcionando una plataforma segura y escalable para una variedad de aplicaciones.', '2024-05-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellidos` varchar(32) DEFAULT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`, `fecha`) VALUES
(1, 'Ricardo', 'Sandoval', 'rsp@gmail.com', '1234', '2019-04-02'),
(2, 'Rosa', 'Pérez', 'rpl@gmail.com', '1234', '2020-04-01'),
(3, 'Ana', 'Pérez', 'apl@gmail.com', '1234', '2019-03-30'),
(4, 'Juan', 'González', 'jgp@gmail.com', '1234', NULL),
(6, 'Admin', 'Admin', 'admin@admin.com', 'admin', '2024-04-04'),
(8, 'Carmen', 'López Pérez', 'Carmen@gmail.com', '$2y$04$ZQqTDFPGvIfxV85n8sQDN.Jxljj2F1uQqaR3ctU3gjPm7AkfMCxBC', '2024-04-27'),
(9, 'Shaquille', 'O\'Neal', 'shackoneal@gmail.com', '$2y$04$kdpM2m4wqsez0LJt5g3qYu/pj4QsAF4uTeWvmcaiHxp3x0Tm1A42O', '2024-04-27'),
(10, 'Michael ', 'Jordan', 'mjordan@gmail.com', '$2y$04$3MXq7sluXKquz5wfoG5SMuNYJQlZ68AXxyedk34EO06whiY1bi3GK', '2024-04-27'),
(11, 'Tony', 'Stark el mejor', 'ironman@marvel.com', '$2y$04$SuyZM8dXznfAcoUN2rhaFup1N59e7Cmtp3gUK2VDGWNcuiH9v94ym', '2024-04-27'),
(12, 'Holas', 'Carambola', 'hola@hola.com', '$2y$04$eXPAPXdH2alYoIBERAcXqOI/XS.Tdewyw9eF3RkMZhnFtTLfLEUoW', '2024-05-08'),
(13, 'Bruce', 'Wayne', 'batman@dc-comics.com', '$2y$04$fxTQ/XlqWJhx1qlnsWw9G.4a88kyGurW.0Y2oPn4e7pr6dmeHtmJO', '2024-05-18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_entradas_usuarios` (`usuario_id`),
  ADD KEY `FK_entradas_categorias` (`categoria_id`);

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
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `FK_entradas_categorias` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `FK_entradas_usuarios` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
