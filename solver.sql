-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2019 a las 18:55:33
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

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
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_admi` int(11) NOT NULL,
  `correo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contraseña` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `Tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'administrador'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_admi`, `correo`, `contraseña`, `Tipo`) VALUES
(1, 'admi@solverhouse.com', 'solverhouse2019*', 'administrador');

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
(15, 2, 'Construir Pared'),
(16, 2, 'Construir Cerco Perimétrico'),
(17, 2, 'Colocar Loseta, mayólica, porcelana'),
(18, 2, 'Pequeños Trabajos Albañilería'),
(19, 2, 'Hacer Tragaluz'),
(20, 4, 'Mantener Jardín'),
(21, 4, 'Plantar Jardín'),
(22, 4, 'Podar Jardín'),
(23, 4, 'Instalar Sistemas de Riego'),
(24, 4, 'Pequeños trabajos de jardinería'),
(25, 3, 'Pintar Exterior Casa'),
(26, 3, 'Pintar Exterior Edificio'),
(27, 3, 'Pintar Interior Casa'),
(28, 3, 'Pintar Interior Edificio'),
(29, 3, 'Pintado de puertas'),
(30, 3, 'Pequeños trabajos pintores'),
(31, 1, 'Proveer Carpintería Madera'),
(32, 1, 'Instalar Puertas de Madera'),
(33, 1, 'Pequeños Trabajos Carpinteros'),
(34, 1, 'Hacer Muebles a Medida'),
(35, 1, 'Proveer e Instalar Carpintería  de Madera'),
(36, 1, 'Elaboración de puertas, repisas, etc'),
(37, 7, 'Limpieza Local Comercial'),
(38, 7, 'Limpieza Casa'),
(39, 7, 'Limpieza Oficina'),
(40, 7, 'Limpieza Edificios '),
(41, 7, 'Limpieza de Obra'),
(42, 7, 'Limpieza Alfombras y Tapices'),
(43, 7, 'Trabajos Limpieza en Altura'),
(44, 5, 'Hacer Instalación Completa Gasfitería'),
(45, 5, 'Revisar Instalación Gasfitería'),
(46, 5, 'Cambiar Gasfitería'),
(47, 5, 'Pequeños Trabajos Gasfitería'),
(48, 5, 'Desatascar Tuberías'),
(49, 6, 'Pequeños Trabajos Instalación Eléctrica'),
(50, 6, 'Cambiar Instalación Eléctrica General'),
(51, 6, 'Hacer Instalación Eléctrica Obra Nueva'),
(52, 6, 'Arreglos Electrodomésticos'),
(53, 6, 'Instalación de Medidores'),
(54, 6, 'Revisión Instalación Eléctrica'),
(55, 6, 'Portones Eléctricos / Automatización'),
(56, 6, 'Detección de fugas '),
(57, 6, 'Pozo a tierra'),
(58, 6, 'Instalación de alarmas'),
(59, 6, 'Corto circuito'),
(60, 10, 'Reparación de celulares'),
(61, 10, 'Reparación de computadoras'),
(62, 10, 'Reparación y mantenimiento de lavadoras'),
(63, 10, 'Reparación y mantenimiento de refrigeradoras'),
(64, 10, 'Reparación de cocinas '),
(65, 10, 'Reparación de termas  eléctricas y de gas'),
(66, 10, 'Reparación de aire acondicionado'),
(67, 10, 'Reparación de neveras'),
(68, 9, 'Ampliar Casa'),
(69, 9, 'Construir Casa'),
(70, 9, 'Proyecto y Construcción Casa'),
(71, 9, 'Construir Casa Prefabricada');

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
(27, 12, '20'),
(28, 12, '21'),
(29, 12, '22'),
(30, 12, '23'),
(31, 12, '24'),
(36, 13, '49'),
(37, 13, '50'),
(38, 13, '51'),
(39, 13, '52'),
(40, 13, '53'),
(41, 13, '54'),
(42, 13, '55'),
(43, 13, '56'),
(44, 13, '57'),
(45, 13, '58'),
(46, 13, '59'),
(50, 14, '15'),
(51, 14, '16'),
(52, 14, '17'),
(53, 14, '18'),
(54, 14, '19');

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
(2, 'Jose', 'Gutierrez Andrade', 'andrajose352@gmail.com', 987654321, 'Cercado de Lima', 'user.png', 'cabezona', 'Cliente'),
(3, 'boritz', 'zuchetti', 'enderson_123_10@hotmail.com', 982526780, 'Breña', 'user.png', '123456', 'Cliente');

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
  `celular` int(11) NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `can_credito` int(11) DEFAULT NULL,
  `Estado` varchar(10) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'off'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente_post`
--

INSERT INTO `cliente_post` (`id_post`, `id_cliente`, `Nombre`, `Descripcion`, `Foto1`, `Foto2`, `Foto3`, `Presupuesto`, `Solicitud`, `Tipo`, `Profesion`, `celular`, `correo`, `can_credito`, `Estado`) VALUES
(7, 2, 'Limpiar una casa de 4 pisos en la victoria', 'Hola buenas tardes necesito de alguien que me ayude con la limpieza de la casa de 4 pisos ya que la próxima semana tengo visitas  por es de suma urgencia  necesito personas responsables y muy proactivos muchas gracias espero me contacten pronto', 'slider1.png', 'slider2.jpg', '', 'S/300 - S/400', 'urgente', 'libre', '7', 0, '', 4, 'on'),
(8, 2, 'Arreglo de carro hiundai 2007  no prende  lo necesito ,urgente para mañana esper', 'Hola necesito un mecanico para que venga al distrito de la victoria para que me arregle un toyota en mal estado  el problema rádica q,ue se ha ,,deteriorado para que se quemo la radiación , espero venga con todas sus herramientas , muchas gracias ', 'slider3.jpg', 'trabajador.jpg', '', 'S/300 - S/400', 'urgente', 'libre', '8', 0, '', 3, 'on'),
(9, 2, 'INSPECCION DE SERVICIO ELECTRICO', 'Hola necesito un mecanico para que venga al distrito de la victoria para que me arregle un toyota en mal estado el problema rádica q,ue se ha ,,deteriorado para que se quemo la radiación , espero venga con todas sus herramientas , muchas gracias', 'slider1.jpg', 'slider1.png', 'slider2.jpg', 'S/600 +', 'urgente', 'libre', '6', 0, '', NULL, 'off'),
(10, 3, 'TOPOGRAFIA BANCO DE LA  NACION-JAVIER PRADO-COSAPI', 'Hola estoy buscando taller textil para confección a pedido y tercerizar servicios textiles y que brinden prendas en concesión\r\npueden mandarme un inbox — estoy buscando recomendaciones.', 'slider2.jpg', 'slider3.jpg', 'trabajador.jpg', 'S/200 - S/300', 'urgente', 'libre', '6', 982526780, 'enderson_123_10@hotmail.com', NULL, 'off');

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
(3, 12, 3),
(4, 13, 2),
(5, 14, 1);

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
(12, 12, 1, '<p>Hola gracias por comunicarte, le adjunto mis datos de contacto. </br>\r\n            Celular: 955443263 </br>\r\n            Correo: solverhouse@solverhouse.com </br>  \r\n	        </p>'),
(13, 12, 8, '<p>Hola gracias por comunicarte, le adjunto mis datos de contacto. </br>\r\n            Celular: 987654321 </br>\r\n            Correo: andrajose352@gmail.com </br>  \r\n	        </p>'),
(14, 13, 8, '<p>Hola gracias por comunicarte, le adjunto mis datos de contacto. </br>\r\n            Celular: 987654321 </br>\r\n            Correo: andrajose352@gmail.com </br>  \r\n	        </p>'),
(15, 13, 9, '<p>Hola gracias por comunicarte, le adjunto mis datos de contacto. </br>\r\n            Celular: 987654321 </br>\r\n            Correo: andrajose352@gmail.com </br>  \r\n	        </p>');

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
(5, 'Gasfitero', 'gasfitero.png'),
(6, 'Elèctrico', 'elec.png'),
(7, 'Limpieza', 'limpieza.png'),
(8, 'Mecànico', 'mecanico.png'),
(9, 'Construcciòn', 'construcciòn.png'),
(10, 'Tècnico', 'tecnico.png');

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
(8, 12, '4'),
(13, 13, '6'),
(16, 14, '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `segunda_categoria`
--

CREATE TABLE `segunda_categoria` (
  `id_c_trabajador` int(11) NOT NULL,
  `id_trabajador` int(11) NOT NULL,
  `Categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `segunda_categoria`
--

INSERT INTO `segunda_categoria` (`id_c_trabajador`, `id_trabajador`, `Categoria`) VALUES
(5, 14, 68),
(6, 14, 69),
(7, 14, 70),
(8, 14, 71);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `segunda_profesion`
--

CREATE TABLE `segunda_profesion` (
  `id_p_trabajador` int(11) NOT NULL,
  `id_trabajador` int(11) NOT NULL,
  `Profesion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `segunda_profesion`
--

INSERT INTO `segunda_profesion` (`id_p_trabajador`, `id_trabajador`, `Profesion`) VALUES
(2, 14, 9);

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
  `Tipo` varchar(20) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Trabajador',
  `Estado` varchar(10) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'off'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`id_trabajador`, `Nombre`, `Apellido`, `Descripcion`, `Correo`, `Celular`, `Distrito`, `Direcciòn`, `Perfil`, `Contraseña`, `Tipo`, `Estado`) VALUES
(12, 'Jheison', 'Zuchetti Arenas', 'Consejo: Describe uno de tus servicios aquí. Puedes cambiar el título por el servicio que ofreces y usar este espacio para detallarlo. También puedes cambiar la imagen.', 'jheisonzuchettiarenas@gmail.com', 955443263, 'Breña', 'Gamarra 819, int. 908 - 1er piso - la victoria', 'user.png', 'CABEZONA', 'Trabajador', 'on'),
(13, 'Jheison', 'Zuchetti Arenas', 'Un equipo informativo de ATV Noticias Edición Matinal, liderado por Karina Aliaga, visitó la unidad educativa, donde pudo recoger los testimonios de los alumnos y representantes del establecimiento.', 'megamarketperu@gmail.com', 955443263, 'Breña', 'Gamarra 819, int. 908 - 1er piso - la victoria', 'user.png', 'cabezona', 'Trabajador', 'on'),
(14, 'Jheison', 'Zuchetti Arenas', 'Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final.\r\n\r\nAunque no posee actualmente fuentes para justificar sus hipótesis, el profesor de filología clásica Richard McClintock asegura que su uso se remonta a los impresores de comienzos del siglo XVI.1​ Su uso en algunos editores de texto muy conocidos en la actualidad ha dado al texto lorem ipsum nueva popularidad.', '123@gmail.com', 955443263, 'Breña', 'Gamarra 819, int. 908 - 1er piso - la victoria', 'user.png', 'cabezona', 'Trabajador', 'on');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admi`);

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
-- Indices de la tabla `segunda_categoria`
--
ALTER TABLE `segunda_categoria`
  ADD PRIMARY KEY (`id_c_trabajador`);

--
-- Indices de la tabla `segunda_profesion`
--
ALTER TABLE `segunda_profesion`
  ADD PRIMARY KEY (`id_p_trabajador`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`id_trabajador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `categoria_trabajador`
--
ALTER TABLE `categoria_trabajador`
  MODIFY `id_c_trabajador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cliente_post`
--
ALTER TABLE `cliente_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `credito`
--
ALTER TABLE `credito`
  MODIFY `id_credito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id_postulado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `presupuesto`
--
ALTER TABLE `presupuesto`
  MODIFY `id_presupuesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `profesion`
--
ALTER TABLE `profesion`
  MODIFY `id_profesion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `profesion_trabajador`
--
ALTER TABLE `profesion_trabajador`
  MODIFY `id_p_trabajador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `segunda_categoria`
--
ALTER TABLE `segunda_categoria`
  MODIFY `id_c_trabajador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `segunda_profesion`
--
ALTER TABLE `segunda_profesion`
  MODIFY `id_p_trabajador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `id_trabajador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
