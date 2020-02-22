-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2019 a las 21:11:51
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `solverhouse`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `id_profesion` int(11) NOT NULL,
  `Categoria` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `id_profesion`, `Categoria`) VALUES
(5, 1, 'Restauración de muebles'),
(6, 1, 'Diseño de muebles'),
(7, 1, 'Muebles a medida'),
(8, 1, 'Laqueado de muebles'),
(9, 1, 'Patinado de muebles'),
(10, 1, 'Persianas o cortinas de madera'),
(11, 1, 'Laca de agua para pisos de madera'),
(12, 1, 'Plastificado pisos de madera'),
(13, 1, 'Colocación pisos de madera'),
(14, 1, 'Pulido de pisos de madera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_trabajador`
--

CREATE TABLE `categoria_trabajador` (
  `id_c_trabajador` int(11) NOT NULL,
  `id_trabajador` int(11) NOT NULL,
  `Categoria` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria_trabajador`
--

INSERT INTO `categoria_trabajador` (`id_c_trabajador`, `id_trabajador`, `Categoria`) VALUES
(13, 9, '5'),
(14, 9, '9'),
(15, 9, '10'),
(16, 9, '11'),
(17, 9, '13'),
(18, 11, '5'),
(19, 11, '6'),
(20, 11, '7'),
(21, 11, '8'),
(22, 11, '9'),
(23, 11, '10'),
(24, 11, '11'),
(25, 11, '12'),
(26, 11, '13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `Nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Celular` int(11) NOT NULL,
  `Distrito` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `Perfil` varchar(1000) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'user.png',
  `Contraseña` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `Tipo` varchar(20) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Cliente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `Nombre`, `Apellido`, `Correo`, `Celular`, `Distrito`, `Perfil`, `Contraseña`, `Tipo`) VALUES
(1, 'Jheison', 'Zuchetti Arenas', 'solverhouse@solverhouse.com', 955443263, 'Breña', 'user.png', 'cabezona', 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_post`
--

CREATE TABLE `cliente_post` (
  `id_post` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `Nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `Foto1` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Foto2` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Foto3` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Presupuesto` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `Solicitud` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Tipo` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `Profesion` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `can_credito` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente_post`
--

INSERT INTO `cliente_post` (`id_post`, `id_cliente`, `Nombre`, `Descripcion`, `Foto1`, `Foto2`, `Foto3`, `Presupuesto`, `Solicitud`, `Tipo`, `Profesion`, `can_credito`) VALUES
(1, 1, 'TOPOGRAFIA BANCO DE LA  NACION-JAVIER PRADO-COSAPI', 'we need a person who is good at teaching students in cybersecurity skills and penetration testing especially in ceh and SIEM like splunk or logrhythm , you must have excellent knowledge in cybersecurity , the timings for the class will be 19:00 to 21:00 uk time 3 days a week so a total of 6 hours a week please put the words i Understand in your proposal', 'slider1.jpg', 'slider2.jpg', '', 'S/100 - S/200', 'urgente', 'libre', '2', 4),
(3, 1, 'INSPECCION DE SERVICIO ELECTRICO', 'we need a person who is good at teaching students in cybersecurity skills and penetration testing especially in ceh and SIEM like splunk or logrhythm , you must have excellent knowledge in cybersecurity , the timings for the class will be 19:00 to 21:00 uk time 3 days a week so a total of 6 hours a week please put the words i Understand in your proposal', 'slider1.jpg', 'slider2.jpg', 'start.png', 'S/100 - S/200', 'urgente', 'libre', '2', NULL),
(4, 1, 'INSPECCION DE SERVICIO ELECTRICO', 'i have small problem , using this script : [iniciar sesión para ver URL] everything working good , until i add Arabic language using php-ar using : ImagePrintBuffer from : [iniciar sesión para ver URL] so before i can send multi commands to printers without any problem now the problem after i add php-ar , after first command the script stop working and [iniciar sesión para ...', 'slider2.jpg', '', '', 'S/100 - S/200', 'urgente', 'libre', '1', 3),
(5, 1, 'TOPOGRAFIA BANCO DE LA  NACION-JAVIER PRADO-COSAPI', 'holaaaaaaa', 'slider1.jpg', 'slider2.jpg', '', 'S/100- S/200', 'urgente', 'libre', '2', NULL),
(6, 1, 'Cortar cesped y podar algunas plantas ', 'Requiero de un jardinero que me ayude en labor de la cas apara poder podar el cesped y aparte de eso tenemos un árbol al frente de nuestra casa que temo se puede caer ,por eso quiero que un experto pueda cortarlo sin  causar daños en nuestra casa , espero su respuesta de manera urgente ', 'slider1.jpg', 'slider2.jpg', 'start.png', 'S/200 - S/300', 'urgente', 'libre', '4', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `credito`
--

CREATE TABLE `credito` (
  `id_credito` int(11) NOT NULL,
  `id_trabajador` int(11) NOT NULL,
  `credito` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `credito`
--

INSERT INTO `credito` (`id_credito`, `id_trabajador`, `credito`) VALUES
(1, 9, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distrito`
--

CREATE TABLE `distrito` (
  `id_distrito` int(11) NOT NULL,
  `Distrito` varchar(80) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `distrito`
--

INSERT INTO `distrito` (`id_distrito`, `Distrito`) VALUES
(1, 'Cercado de Lima'),
(2, 'Breña');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portafolio`
--

CREATE TABLE `portafolio` (
  `id_portafolio` int(11) NOT NULL,
  `id_trabajador` int(11) NOT NULL,
  `foto` varchar(1000) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulado`
--

CREATE TABLE `postulado` (
  `id_postulado` int(11) NOT NULL,
  `id_trabajador` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `mensaje` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `postulado`
--

INSERT INTO `postulado` (`id_postulado`, `id_trabajador`, `id_post`, `mensaje`) VALUES
(9, 9, 4, '<p>Hola gracias por comunicarte, le adjunto mis datos de contacto. </br>\r\n            Celular: 955443263 </br>\r\n            Correo: solverhouse@solverhouse.com </br>  \r\n	        </p>'),
(11, 9, 6, '<p>Hola gracias por comunicarte, le adjunto mis datos de contacto. </br>\r\n            Celular: 955443263 </br>\r\n            Correo: solverhouse@solverhouse.com </br>  \r\n	        </p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuesto`
--

CREATE TABLE `presupuesto` (
  `id_presupuesto` int(11) NOT NULL,
  `presupuesto` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `presupuesto`
--

INSERT INTO `presupuesto` (`id_presupuesto`, `presupuesto`) VALUES
(1, 'S/0 - S/100'),
(2, 'S/100- S/200'),
(3, 'S/200 - S/300'),
(4, 'S/300 - S/400'),
(5, 'S/400 - S/500'),
(6, 'S/500 - S/600'),
(7, 'S/600 +');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesion`
--

CREATE TABLE `profesion` (
  `id_profesion` int(11) NOT NULL,
  `Profesion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Foto` varchar(1000) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `profesion`
--

INSERT INTO `profesion` (`id_profesion`, `Profesion`, `Foto`) VALUES
(1, 'Carpintero', 'carp.png'),
(2, 'Albañil', 'albañil.png'),
(3, 'Pintor', 'pintor.png'),
(4, 'Jardinero', 'Jardinero.png'),
(5, 'Gasfitero', 'gasfitero.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesion_trabajador`
--

CREATE TABLE `profesion_trabajador` (
  `id_p_trabajador` int(11) NOT NULL,
  `id_trabajador` int(11) NOT NULL,
  `Profesion` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `profesion_trabajador`
--

INSERT INTO `profesion_trabajador` (`id_p_trabajador`, `id_trabajador`, `Profesion`) VALUES
(6, 9, '1'),
(7, 11, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `id_trabajador` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` text COLLATE utf8_spanish_ci,
  `Correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Celular` int(11) NOT NULL,
  `Distrito` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Direcciòn` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `Perfil` varchar(500) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'user.png',
  `Contraseña` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Tipo` varchar(20) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Trabajador'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`id_trabajador`, `Nombre`, `Apellido`, `Descripcion`, `Correo`, `Celular`, `Distrito`, `Direcciòn`, `Perfil`, `Contraseña`, `Tipo`) VALUES
(9, 'Jheison', 'Zuchetti Arenas', 'i have small problem , using this script : [iniciar sesión para ver URL] everything working good , until i add Arabic language using php-ar using : ImagePrintBuffer from : [iniciar sesión para ver URL] so before i can send multi commands to printers without any problem now the problem after i add php-ar , after first command the script stop working and [iniciar sesión para ...', 'megamarketperu@gmail.com', 955443263, 'Breña', 'Gamarra 819, int. 908 - 1er piso - la victoria', 'user.png', 'cabezona', 'Trabajador'),
(10, 'Jheison', 'Zuchetti Arenas', NULL, 'megamarketperu@gmail.com', 955443263, 'Cercado de Lima', 'Gamarra 819, int. 908 - 1er piso - la victoria', 'user.png', 'cabezona', 'Trabajador'),
(11, 'JHEISON', 'Zuchetti Arenas', NULL, 'jheisonzuchettiarenas@gmail.com', 955443263, 'Breña', 'Gamarra 819, int. 908 - 1er piso - la victoria', 'user.png', 'cabezona', 'Trabajador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`),
  ADD KEY `id_profesion` (`id_profesion`);

--
-- Indices de la tabla `categoria_trabajador`
--
ALTER TABLE `categoria_trabajador`
  ADD PRIMARY KEY (`id_c_trabajador`),
  ADD KEY `id_trabajador` (`id_trabajador`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `cliente_post`
--
ALTER TABLE `cliente_post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `credito`
--
ALTER TABLE `credito`
  ADD PRIMARY KEY (`id_credito`);

--
-- Indices de la tabla `distrito`
--
ALTER TABLE `distrito`
  ADD PRIMARY KEY (`id_distrito`);

--
-- Indices de la tabla `portafolio`
--
ALTER TABLE `portafolio`
  ADD PRIMARY KEY (`id_portafolio`);

--
-- Indices de la tabla `postulado`
--
ALTER TABLE `postulado`
  ADD PRIMARY KEY (`id_postulado`);

--
-- Indices de la tabla `presupuesto`
--
ALTER TABLE `presupuesto`
  ADD PRIMARY KEY (`id_presupuesto`);

--
-- Indices de la tabla `profesion`
--
ALTER TABLE `profesion`
  ADD PRIMARY KEY (`id_profesion`);

--
-- Indices de la tabla `profesion_trabajador`
--
ALTER TABLE `profesion_trabajador`
  ADD PRIMARY KEY (`id_p_trabajador`),
  ADD KEY `id_trabajador` (`id_trabajador`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`id_trabajador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `categoria_trabajador`
--
ALTER TABLE `categoria_trabajador`
  MODIFY `id_c_trabajador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cliente_post`
--
ALTER TABLE `cliente_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `credito`
--
ALTER TABLE `credito`
  MODIFY `id_credito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `distrito`
--
ALTER TABLE `distrito`
  MODIFY `id_distrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `portafolio`
--
ALTER TABLE `portafolio`
  MODIFY `id_portafolio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `postulado`
--
ALTER TABLE `postulado`
  MODIFY `id_postulado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `presupuesto`
--
ALTER TABLE `presupuesto`
  MODIFY `id_presupuesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `profesion`
--
ALTER TABLE `profesion`
  MODIFY `id_profesion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `profesion_trabajador`
--
ALTER TABLE `profesion_trabajador`
  MODIFY `id_p_trabajador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `id_trabajador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`id_profesion`) REFERENCES `profesion` (`id_profesion`);

--
-- Filtros para la tabla `categoria_trabajador`
--
ALTER TABLE `categoria_trabajador`
  ADD CONSTRAINT `categoria_trabajador_ibfk_1` FOREIGN KEY (`id_trabajador`) REFERENCES `trabajador` (`id_trabajador`);

--
-- Filtros para la tabla `cliente_post`
--
ALTER TABLE `cliente_post`
  ADD CONSTRAINT `cliente_post_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `profesion_trabajador`
--
ALTER TABLE `profesion_trabajador`
  ADD CONSTRAINT `profesion_trabajador_ibfk_1` FOREIGN KEY (`id_trabajador`) REFERENCES `trabajador` (`id_trabajador`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
