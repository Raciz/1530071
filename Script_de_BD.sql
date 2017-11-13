-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-11-2017 a las 06:07:01
-- Versión del servidor: 5.7.20-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `SuKarne`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_admin`) VALUES
('GOFLOS'),
('ROCHMA'),
('TOPERA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` varchar(4) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`, `descripcion`) VALUES
('Cond', 'Condimentos', 'sal, ajo, salsa'),
('Prod', 'Productos derivados del cerdo', 'Jamon, Salchicas, etc.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `usuario` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `id_persona` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`usuario`, `password`, `correo`, `id_persona`) VALUES
('jingo', '12345678', 'jingo@SuKarne.com', 'TOPERA'),
('lizt', 'qwerty', 'lizt@SuKarne.com', 'DERILI'),
('mario', 'mario', 'mario@SuKarne.com', 'ROCHMA'),
('mike', 'MIKE', 'Miguel@SuKarne.com', 'PESAMI'),
('osiel', 'osiel', 'osiel@SuKarne.com', 'GOFLOS'),
('raciz', '1234', 'raciz@SuKarne.com', 'PEMOFR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`) VALUES
('DERILI'),
('PEMOFR'),
('PESAMI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `id_mensaje` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mensaje` varchar(200) NOT NULL,
  `admin` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`id_mensaje`, `nombre`, `email`, `mensaje`, `admin`) VALUES
(16, '12321321', '312312312', '3123123', 'GOFLOS'),
(18, 'Francisco Isaac', 'paco@upv.edu.mx', '<ol><li>Hola Mi <b>Problema <u>es que no </u></b><span style="background-color: rgb(255, 255, 0);"><u>Puedo Agregar</u> Un Nuevo Producto</span></li></ol>', 'ROCHMA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` varchar(6) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido_paterno` varchar(20) NOT NULL,
  `apellido_materno` varchar(20) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `hora_entrada` time NOT NULL,
  `hora_salida` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombre`, `apellido_paterno`, `apellido_materno`, `fecha_nac`, `hora_entrada`, `hora_salida`) VALUES
('DERILI', 'list', 'De La Cruz', 'Rios', '1994-06-14', '00:00:00', '07:00:00'),
('GOFLOS', 'Osiel', 'Gomez', 'Flores', '1997-04-05', '07:00:00', '15:00:00'),
('PEMOFR', 'Francisco Isaac', 'Perales', 'Morales', '1997-10-04', '07:00:00', '15:00:00'),
('PESAMI', 'Miguel Angel', 'Perez', 'Sanchez', '2017-11-06', '00:00:00', '18:30:00'),
('ROCHMA', 'Mario Humberto', 'Rodriguez', 'Chavez', '1980-02-05', '10:00:00', '18:00:00'),
('TOPERA', 'Raul', 'Torres', 'PeÃ±a', '1990-04-04', '07:00:00', '15:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` varchar(6) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `precio` varchar(6) DEFAULT NULL,
  `cantidad` varchar(10) DEFAULT NULL,
  `id_provedor` varchar(4) DEFAULT NULL,
  `descripcion` varchar(200) NOT NULL,
  `id_categoria` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `precio`, `cantidad`, `id_provedor`, `descripcion`, `id_categoria`) VALUES
('GRAN S', ' Salsa Roja', '25', '500 ml', 'GRAN', 'hdrtygjk', 'Cond'),
('GRANSA', 'Sanchicon Para Asar', '500', '100 gr.', 'GRAN', 'salchicha perfecta para la carne asada', 'Prod'),
('LOANCH', 'chuletas de cerdo', '150', '1 k', 'LOAN', '<p>Chuletas de cerdos perfectas para una barbacoa</p>', 'Prod'),
('LOANSA', 'Sanchicon Para Asar', '500', '100 gr.', 'LOAN', 'salchicha perfecta para la carne asada', 'Prod');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provedor`
--

CREATE TABLE `provedor` (
  `id_provedor` varchar(4) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `provedor`
--

INSERT INTO `provedor` (`id_provedor`, `nombre`, `direccion`, `telefono`, `descripcion`) VALUES
('GRAN', 'Granjas Mars', 'col. americas #3444, Soto La Marina,TAMPS.', '8341658365', 'granja povedora de carne molina, bisteck y filetes'),
('LOAN', 'Los Andes', 'Carretera a Monterrey Km 6, Cd. Victoria, TAMPS.', '83417563946', 'Fabrica proveedora de condimentos ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`usuario`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`id_mensaje`),
  ADD KEY `admin` (`admin`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_provedor` (`id_provedor`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `provedor`
--
ALTER TABLE `provedor`
  ADD PRIMARY KEY (`id_provedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `persona` (`id_persona`);

--
-- Filtros para la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD CONSTRAINT `cuenta_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `persona` (`id_persona`);

--
-- Filtros para la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD CONSTRAINT `mensaje_ibfk_1` FOREIGN KEY (`admin`) REFERENCES `administrador` (`id_admin`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_provedor`) REFERENCES `provedor` (`id_provedor`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
