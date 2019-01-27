-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-01-2019 a las 17:06:22
-- Versión del servidor: 5.7.25-0ubuntu0.16.04.2
-- Versión de PHP: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `idalumno` int(11) NOT NULL,
  `nombre_alumno` varchar(45) DEFAULT NULL,
  `edad` int(20) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nombre_responsable` varchar(100) DEFAULT NULL,
  `celular_responsable` int(25) DEFAULT NULL,
  `correo_responsable` varchar(45) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `parentesco_responsable` varchar(45) DEFAULT NULL,
  `idasesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`idalumno`, `nombre_alumno`, `edad`, `fecha_registro`, `nombre_responsable`, `celular_responsable`, `correo_responsable`, `direccion`, `parentesco_responsable`, `idasesor`) VALUES
(4, 'Robero Bonilla Ibarra', 21, '2019-01-27 22:32:25', 'de2', 2, 'whhew@gmail.com', 'W', '1W', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesor`
--

CREATE TABLE `asesor` (
  `idasesor` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido_paterno` varchar(45) NOT NULL,
  `apellido_materno` varchar(45) NOT NULL,
  `celular` varchar(25) NOT NULL,
  `email` varchar(45) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `horas` int(11) NOT NULL,
  `idcarrera` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asesor`
--

INSERT INTO `asesor` (`idasesor`, `nombre`, `apellido_paterno`, `apellido_materno`, `celular`, `email`, `direccion`, `horas`, `idcarrera`, `password`) VALUES
(1, 'Roberto', 'Bonilla', 'Ibarra', '4423780146', 'roberto2@gmail.com', 'Hacienda Guadalupe', 240, 7, '7993e11204b215b27694b6f139e34ce8'),
(2, 'Marí­a del Mar', 'Planas', 'Rego', '4423780136', 'admin@gmail.com', 'r', 120, 10, '7993e11204b215b27694b6f139e34ce8'),
(7, 'Manuel', 'García', 'Mortras', '5524249898', 'manuel@gmail.com', 'atlacomulco', 14, 11, '7993e11204b215b27694b6f139e34ce8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `idcarrera` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`idcarrera`, `nombre`) VALUES
(1, 'Ingeniería'),
(2, 'Turismo y Gastronomía'),
(3, 'Ciencias de la salud'),
(4, 'Derecho'),
(5, 'Responsabilidad Social'),
(6, 'Comunicación'),
(7, 'Humanidades, filosofía y letras'),
(8, 'Ciencias Sociales'),
(9, 'Economía y Negocios'),
(10, 'Escuela de artes'),
(11, 'Ciencias actuariales'),
(12, 'Otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nombre`, `descripcion`) VALUES
(1, 'Primaria Superior', 'Niños entre 9-12 años'),
(2, 'Primaria Inferior', NULL),
(3, 'Secundaria', NULL),
(4, 'Preparatoria', NULL),
(5, 'Universidad', NULL),
(6, 'Kinder-Babies', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `idmateria` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`idmateria`, `nombre`, `descripcion`) VALUES
(1, 'Inglés', 'Inglés avanzado'),
(2, 'Matemáticas', 'Matemáticas en la literatura.'),
(3, 'Historia', 'Historia en México'),
(4, 'Español', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete`
--

CREATE TABLE `paquete` (
  `idpaquete` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paquete`
--

INSERT INTO `paquete` (`idpaquete`, `nombre`, `precio`, `descripcion`) VALUES
(1, 'Clase entre semana.', 350, 'Clase de diversas materias'),
(2, 'Clases fin de semana', 400, 'Diversas materias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parentesco`
--

CREATE TABLE `parentesco` (
  `idparentesco` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `parentesco`
--

INSERT INTO `parentesco` (`idparentesco`, `nombre`) VALUES
(1, 'Papá'),
(2, 'Mamá'),
(3, 'Hermano'),
(4, 'Familiar'),
(5, 'Tutor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `idventa` int(11) NOT NULL,
  `horas` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `idpaquete` int(11) NOT NULL,
  `idasesor` int(11) NOT NULL,
  `idzona` int(11) NOT NULL,
  `idalumno` int(11) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `idmateria` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`idventa`, `horas`, `fecha`, `descripcion`, `idpaquete`, `idasesor`, `idzona`, `idalumno`, `idcategoria`, `idmateria`, `cantidad`, `fecha_registro`) VALUES
(1, 2, '2019-01-10', 'w', 2, 1, 1, 4, 1, 2, 500, '2019-01-27 21:51:08'),
(3, 1, '2019-01-29', 'df', 1, 1, 2, 4, 1, 1, 250, '2019-01-27 22:32:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

CREATE TABLE `zona` (
  `idzona` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `zona`
--

INSERT INTO `zona` (`idzona`, `nombre`) VALUES
(1, 'Santa Fe'),
(2, 'Interlomas'),
(4, 'Bosques de las Lomas'),
(5, 'Otra zona'),
(8, 'Pedregal');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`idalumno`),
  ADD KEY `fk_alumno_asesor_idx` (`idasesor`);

--
-- Indices de la tabla `asesor`
--
ALTER TABLE `asesor`
  ADD PRIMARY KEY (`idasesor`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_asesor_carrera_idx` (`idcarrera`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`idcarrera`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`idmateria`);

--
-- Indices de la tabla `paquete`
--
ALTER TABLE `paquete`
  ADD PRIMARY KEY (`idpaquete`);

--
-- Indices de la tabla `parentesco`
--
ALTER TABLE `parentesco`
  ADD PRIMARY KEY (`idparentesco`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`idventa`),
  ADD KEY `fk_venta_paquete1_idx` (`idpaquete`),
  ADD KEY `fk_venta_asesor1_idx` (`idasesor`),
  ADD KEY `fk_venta_zona1_idx` (`idzona`),
  ADD KEY `fk_venta_categoria1_idx` (`idcategoria`),
  ADD KEY `fk_venta_materia1_idx` (`idmateria`),
  ADD KEY `fk_venta_alumno1_idx` (`idalumno`);

--
-- Indices de la tabla `zona`
--
ALTER TABLE `zona`
  ADD PRIMARY KEY (`idzona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `idalumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `asesor`
--
ALTER TABLE `asesor`
  MODIFY `idasesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `idcarrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `idmateria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `paquete`
--
ALTER TABLE `paquete`
  MODIFY `idpaquete` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `parentesco`
--
ALTER TABLE `parentesco`
  MODIFY `idparentesco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `idventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `zona`
--
ALTER TABLE `zona`
  MODIFY `idzona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `fk_alumno_asesor` FOREIGN KEY (`idasesor`) REFERENCES `asesor` (`idasesor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `asesor`
--
ALTER TABLE `asesor`
  ADD CONSTRAINT `fk_asesor_carrera1` FOREIGN KEY (`idcarrera`) REFERENCES `carrera` (`idcarrera`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `fk_venta_alumno1` FOREIGN KEY (`idalumno`) REFERENCES `alumno` (`idalumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_venta_asesor1` FOREIGN KEY (`idasesor`) REFERENCES `asesor` (`idasesor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_venta_categoria1` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_venta_materia1` FOREIGN KEY (`idmateria`) REFERENCES `materia` (`idmateria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_venta_paquete1` FOREIGN KEY (`idpaquete`) REFERENCES `paquete` (`idpaquete`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
