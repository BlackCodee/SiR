-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: n1nlmysql55plsk.secureserver.net:3306
-- Tiempo de generación: 02-11-2022 a las 09:47:20
-- Versión del servidor: 5.7.26-29-log
-- Versión de PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sir`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auxiliar`
--

CREATE TABLE `auxiliar` (
  `id_aux` int(11) NOT NULL,
  `nom_aux` varchar(255) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `auxiliar`
--

INSERT INTO `auxiliar` (`id_aux`, `nom_aux`, `celular`, `estado`, `usuario_id`) VALUES
(1, 'POR ASIGNAR', 'POR ASIGNAR', 'activo', 0),
(27, 'BRAVO GRUESO ALEX CAMILO', '324 677 3686', 'activo', 11),
(28, 'BUENO BERNAL FABIAN ALEXANDER', '321 389 1361', 'activo', 11),
(29, 'CASTIBLANCO BAUTISTA JAIR ALEJANDRO', '320 262 4834', 'activo', 11),
(30, 'CASTILLO FERNANDEZ ALVARO JAVIER', '320 271 6867', 'activo', 11),
(31, 'GONZALEZ SOTO NICOLAS', '300 228 0799', 'activo', 11),
(32, 'HERNANDEZ URRESTY ANDRES', '313 4704765', 'activo', 11),
(33, 'LEON GOMEZ ANDRES GIOVANNI', '312 352 1351', 'activo', 11),
(34, 'MARQUEZ NESVER FERNANDO', '310 308 1034', 'activo', 11),
(35, 'MARQUINA ARNALDO JOSE', '322 365 8485', 'activo', 11),
(36, 'MARTINEZ RIVERA CARLOS ALBERTO', '311 858 3814', 'activo', 11),
(37, 'MAYORGA CHALA EDWIN HERIBERTO', '323 8131931', 'activo', 11),
(39, 'OCHOA JIMENEZ EDWARD SNEYDER', '300 650 9058', 'activo', 11),
(40, 'RATIVA TORRES JOSE ORLANDO', '320 352 7386', 'activo', 11),
(41, 'SILVA DOMINGUEZ JUAN CARLOS', '302 712 5190', 'activo', 11),
(42, 'VILLANUEVA GUALTERO JHON JAIRO', '310 601 6875', 'activo', 11),
(43, 'BERMUDEZ ROLANDO', '317 254 7523', 'activo', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carro`
--

CREATE TABLE `carro` (
  `id_carro` int(11) NOT NULL,
  `placa_carro` varchar(255) NOT NULL,
  `propiedad_de` varchar(255) NOT NULL,
  `novedades` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carro`
--

INSERT INTO `carro` (`id_carro`, `placa_carro`, `propiedad_de`, `novedades`, `estado`, `usuario_id`) VALUES
(35, 'POR ASIGNAR', 'POR ASIGNAR', 'POR ASIGNAR', 'activo', 0),
(37, 'WPR - 482', 'Entregas AM Ltda', 'Ninguna', 'activo', 11),
(38, 'JKV - 684', 'Entregas AM Ltda', 'Ninguna', 'activo', 11),
(39, 'WFI - 407', 'Entregas AM Ltda', 'Ninguna', 'activo', 11),
(40, 'WCR - 000', 'Entregas AM Ltda', 'Ninguna', 'activo', 11),
(41, 'LPY - 693', 'Entregas AM Ltda', 'Ninguna', 'activo', 11),
(42, 'LJT - 390', 'Entregas AM Ltda', 'Ninguna', 'activo', 11),
(43, 'FSU - 249', 'Entregas AM Ltda', 'Ninguna', 'activo', 11),
(44, 'WLY - 932', 'Entregas AM Ltda', 'Ninguna', 'activo', 11),
(46, 'SZV - 332', 'Tercero', 'Ninguna', 'activo', 11),
(47, 'WEP - 393', 'Tercero', 'Ninguna', 'activo', 11),
(48, 'USD - 004', 'Tercero', 'Ninguna', 'activo', 11),
(49, 'JUY - 987', 'Tercero', 'Ninguna', 'activo', 11),
(50, 'WGQ - 497', 'Tercero', 'Ninguna', 'activo', 11),
(51, 'TTO - 262', 'Tercero', 'Ninguna', 'activo', 11),
(52, 'EXZ - 763', 'Tercero', 'Ninguna', 'activo', 11),
(53, 'JLL - 226', 'Tercero / Entregas AM Ltda', 'Ninguna', 'activo', 11),
(54, 'SOS - 268', 'Tercero', 'Ninguna', 'activo', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad_origen`
--

CREATE TABLE `ciudad_origen` (
  `cod` int(11) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciudad_origen`
--

INSERT INTO `ciudad_origen` (`cod`, `ciudad`, `estado`) VALUES
(1, 'BOGOTA', 'activo'),
(2, 'CHIA', 'activo'),
(3, 'MELGAR', 'activo'),
(5, 'FUNZA', 'activo'),
(11, 'SOACHA ', 'activo'),
(12, 'MADRID', 'activo'),
(13, 'MOSQUERA', 'activo'),
(14, 'FACATATIVÁ', 'activo'),
(15, 'COTA', 'activo'),
(16, 'CAJICA', 'activo'),
(17, 'ZIPAQUIRÁ', 'activo'),
(18, 'TOCANCIPÁ', 'activo'),
(19, 'SOPO', 'activo'),
(20, 'BRICEÑO', 'activo'),
(21, 'AGUAZUL', 'activo'),
(22, 'CUMARAL', 'activo'),
(23, 'MONTEREY', 'activo'),
(24, 'RESTREPO', 'activo'),
(25, 'TAURAMENA', 'activo'),
(26, 'VILLANUEVA', 'activo'),
(27, 'YOPAL', 'activo'),
(28, 'ARMENIA', 'activo'),
(29, 'CALARCA', 'activo'),
(30, 'CHINCHINA', 'activo'),
(31, 'DOS QUEBRADAS', 'activo'),
(32, 'MANIZALES', 'activo'),
(33, 'PEREIRA', 'activo'),
(34, 'STA ROSA DE CABAL', 'activo'),
(35, 'FUGAGASUGA', 'activo'),
(36, 'IBAGUE', 'activo'),
(37, 'GIRARDOT', 'activo'),
(38, 'ESPINAL', 'activo'),
(39, 'FLANDES', 'activo'),
(40, 'RICAURTE', 'activo'),
(41, 'ACACIAS', 'activo'),
(42, 'GUAMAL', 'activo'),
(43, 'GRANADA', 'activo'),
(44, 'SAN MARTIN', 'activo'),
(45, 'VILLAVICENCIO', 'activo'),
(46, 'CAQUEZA', 'activo'),
(47, 'EL ROSAL', 'activo'),
(48, 'SUBACHOQUE', 'activo'),
(49, 'TABIO', 'activo'),
(50, 'TENJO', 'activo'),
(51, 'CHOCONTA', 'activo'),
(52, 'GACHANCIPA', 'activo'),
(53, 'VILLAPINZON', 'activo'),
(54, 'VENTAQUEMADA', 'activo'),
(55, 'APULO', 'activo'),
(56, 'ANAPOIMA', 'activo'),
(57, 'LA MESA', 'activo'),
(58, 'TOCAIMA', 'activo'),
(59, 'NEIVA', 'activo'),
(60, 'AGRADO', 'activo'),
(61, 'AIPE', 'activo'),
(62, 'ALTAMIRA', 'activo'),
(63, 'CAMPO ALEGRE', 'activo'),
(64, 'GARZON', 'activo'),
(65, 'GIGANTE', 'activo'),
(66, 'HOBO', 'activo'),
(67, 'LA PLATA', 'activo'),
(68, 'PALERMO', 'activo'),
(69, 'PITALITO', 'activo'),
(70, 'RIVERA', 'activo'),
(71, 'GUAMO', 'activo'),
(72, 'SALDAÑA', 'activo'),
(73, 'NATAGAIMA', 'activo'),
(74, 'CHIPAQUE', 'activo'),
(75, 'GUAYABETAL', 'activo'),
(76, 'QUETAME', 'activo'),
(77, 'PUERTO LOPEZ', 'activo'),
(78, 'PUERTO GAITAN', 'activo'),
(79, 'GUATAQUE', 'activo'),
(80, 'GARAGOA', 'activo'),
(81, 'BARBOSA', 'activo'),
(82, 'MONIQUIRA', 'activo'),
(83, 'PUENTE NACIONAL', 'activo'),
(84, 'CHIQUINQUIRA', 'activo'),
(85, 'DUITAMA', 'activo'),
(86, 'NOBSA', 'activo'),
(87, 'PAIPA', 'activo'),
(88, 'SOGAMOSO', 'activo'),
(89, 'TUNJA', 'activo'),
(90, 'UBATÉ', 'activo'),
(91, 'VILLA DE LEYVA', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `dni` int(8) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(15) NOT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `dni`, `nombre`, `telefono`, `direccion`, `usuario_id`) VALUES
(1, 123545, 'Pubico en general', 925491523, 'Lima', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE `conductor` (
  `id_con` int(11) NOT NULL,
  `nom_con` varchar(255) NOT NULL,
  `celular` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`id_con`, `nom_con`, `celular`, `estado`, `usuario_id`) VALUES
(1, 'POR ASIGNAR', 'POR ASIGNAR', 'activo', 0),
(3, 'ARANGO CASTAÑEDA GABRIEL WILMAR', '301 501 0828', 'activo', 11),
(4, 'CACERES NOVA FEDERICO', '320 496 8372', 'activo', 11),
(5, 'CONTRERAS LADINO CARLOS JULIO', '319 211 9332', 'activo', 11),
(6, 'GOMEZ MONTENEGRO CARLOS ALONSO', '317 541 6142', 'activo', 11),
(7, 'MARTINEZ RUBIO LUIS ALEJANDRO', '314 423 4638', 'activo', 11),
(8, 'ORTIZ NIÑO DAVID LEONARDO', '314 348 5099', 'activo', 11),
(9, 'SARATE HERNANDEZ JOSE AIMER', '310 245 3091', 'activo', 11),
(10, 'TRUJILLO JHON JAIRO', '305 857 7316', 'activo', 11),
(11, 'VARGAS URAZAN EDWIN FERNANDO', '305 427 8898', 'activo', 11),
(12, 'VERGARA GOMEZ ALFREDO', '314 207 2664', 'activo', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `id` int(11) NOT NULL,
  `dni` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `razon_social` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`id`, `dni`, `nombre`, `razon_social`, `telefono`, `email`, `direccion`) VALUES
(1, '900.246.613-6', 'Entregas AM Ltda', 'Entregas AM Ltda', 3902171, 'info@entregas-am.com', 'Calle 25D # 85B - 64 / Of. 201');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_temp`
--

CREATE TABLE `detalle_temp` (
  `correlativo` int(11) NOT NULL,
  `token_user` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `codproducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_venta` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `correlativo` int(11) NOT NULL,
  `codproducto` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id` int(11) NOT NULL,
  `estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `estado`) VALUES
(1, 'activo'),
(2, 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_recogida`
--

CREATE TABLE `estado_recogida` (
  `id_estado` int(11) NOT NULL,
  `nombre_estadore` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado_recogida`
--

INSERT INTO `estado_recogida` (`id_estado`, `nombre_estadore`) VALUES
(1, 'EFECTIVA'),
(2, 'NO REALIZADA'),
(3, 'POR RECOGER'),
(4, 'POR ASIGNAR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedad_de`
--

CREATE TABLE `propiedad_de` (
  `idp` int(11) NOT NULL,
  `propiedad_de` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `propiedad_de`
--

INSERT INTO `propiedad_de` (`idp`, `propiedad_de`) VALUES
(1, 'Tercero'),
(2, 'Entregas AM Ltda'),
(3, 'Tercero / Entregas AM Ltda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `cod` int(11) NOT NULL,
  `ciudad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`cod`, `ciudad`, `usuario_id`) VALUES
(1, 'Bogotá D.C', 0),
(2, 'Pereira', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recogidas`
--

CREATE TABLE `recogidas` (
  `id_recogida` int(11) NOT NULL,
  `nombre_cliente` varchar(255) NOT NULL,
  `celular_cliente` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `direccion_recogida` varchar(255) NOT NULL,
  `asignado_por` varchar(255) NOT NULL,
  `nom_aux` varchar(255) NOT NULL,
  `nom_con` varchar(255) NOT NULL,
  `placa_carro` varchar(255) NOT NULL,
  `nombre_estadore` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `hora_desde` varchar(255) NOT NULL,
  `hora_hasta` varchar(255) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `rol` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `rol` int(11) NOT NULL,
  `estado` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `correo`, `usuario`, `clave`, `rol`, `estado`) VALUES
(11, 'Lorena Mora Torrecilla', 'lorenamoratorrecilla@gmail.com', 'lorem', 'd2e16e6ef52a45b7468f1da56bba1953', 1, 'activo'),
(15, 'Lucia Rojas Rodriguez', 'luciarojasrodriguez.9624@gmail.com', 'lucia', '3ba430337eb30f5fd7569451b5dfdf32', 2, 'activo'),
(16, 'María Fernanda Sanabria Rojas ', 'smariafernanda886@gmail.com', 'maria', '263bce650e68ab4e23f28263760b9fa5', 2, 'activo'),
(18, 'Andrea Morales Sarmiento', 'comercial@entregas-am.com', 'andrea', '1c42f9c1ca2f65441465b43cd9339d6c', 1, 'activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auxiliar`
--
ALTER TABLE `auxiliar`
  ADD PRIMARY KEY (`id_aux`);

--
-- Indices de la tabla `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`id_carro`);

--
-- Indices de la tabla `ciudad_origen`
--
ALTER TABLE `ciudad_origen`
  ADD PRIMARY KEY (`cod`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`id_con`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_temp`
--
ALTER TABLE `detalle_temp`
  ADD PRIMARY KEY (`correlativo`);

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`correlativo`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado_recogida`
--
ALTER TABLE `estado_recogida`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `propiedad_de`
--
ALTER TABLE `propiedad_de`
  ADD PRIMARY KEY (`idp`);

--
-- Indices de la tabla `recogidas`
--
ALTER TABLE `recogidas`
  ADD PRIMARY KEY (`id_recogida`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `auxiliar`
--
ALTER TABLE `auxiliar`
  MODIFY `id_aux` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `carro`
--
ALTER TABLE `carro`
  MODIFY `id_carro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `ciudad_origen`
--
ALTER TABLE `ciudad_origen`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `conductor`
--
ALTER TABLE `conductor`
  MODIFY `id_con` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `estado_recogida`
--
ALTER TABLE `estado_recogida`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `propiedad_de`
--
ALTER TABLE `propiedad_de`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `recogidas`
--
ALTER TABLE `recogidas`
  MODIFY `id_recogida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
