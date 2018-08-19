-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2018 a las 02:55:11
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `emblema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agencias`
--

CREATE TABLE `agencias` (
  `nombre` varchar(60) NOT NULL,
  `numero_fiscal` varchar(60) NOT NULL,
  `segmento` varchar(60) NOT NULL,
  `iata` varchar(60) NOT NULL,
  `asociacion` varchar(60) NOT NULL,
  `consorcio` varchar(60) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `ciudad` varchar(60) NOT NULL,
  `pais` varchar(60) NOT NULL,
  `cp` varchar(60) NOT NULL,
  `nombre_personal` varchar(60) NOT NULL,
  `apellidos_personal` varchar(60) NOT NULL,
  `telefono_personal` varchar(60) NOT NULL,
  `email_personal` varchar(60) NOT NULL,
  `idioma_preferencial` varchar(60) NOT NULL,
  `observaciones` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `agencias`
--

INSERT INTO `agencias` (`nombre`, `numero_fiscal`, `segmento`, `iata`, `asociacion`, `consorcio`, `direccion`, `ciudad`, `pais`, `cp`, `nombre_personal`, `apellidos_personal`, `telefono_personal`, `email_personal`, `idioma_preferencial`, `observaciones`) VALUES
('', '', 'Agencia minorista', '', 'No especifica', 'ABC Global Services', '', '', 'Colombia', '', '', '', '', '', 'Aleman', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alternativa`
--

CREATE TABLE `alternativa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alternativa`
--

INSERT INTO `alternativa` (`id`, `nombre`, `apellidos`, `email`, `telefono`, `pais`, `ciudad`) VALUES
(2, 'david', 'uribe', 'uribesotod@gmail.com', '3008132438', 'Colombia', 'turbaco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `nombre` varchar(60) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `poblacion` varchar(60) NOT NULL,
  `pais` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefono` varchar(60) NOT NULL,
  `servicios` varchar(200) NOT NULL,
  `llegada` date NOT NULL,
  `salida` date NOT NULL,
  `num_adultos` int(11) NOT NULL,
  `num_ninos` int(11) NOT NULL,
  `edad_ninos` int(11) NOT NULL,
  `observaciones` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `nombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `numero_fiscal` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `cp` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `poblacion` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `provincia` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `titulo_persona` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombres_persona` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos_persona` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `email_persona` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_persona` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `posicion_persona` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `idioma_preferencia` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `sector_empresarial` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `eventos` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` varchar(60) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`nombre`, `numero_fiscal`, `direccion`, `cp`, `poblacion`, `provincia`, `pais`, `email`, `telefono`, `titulo_persona`, `nombres_persona`, `apellidos_persona`, `email_persona`, `telefono_persona`, `posicion_persona`, `idioma_preferencia`, `sector_empresarial`, `eventos`, `observaciones`) VALUES
('', '', '', '', '', '', 'Colombia', '', '', 'Sra.', '', '', '', '', 'Directores, gerente, alto funcionario de la AAPP', 'Aleman', 'Clothing / Textil / Fashion', 'si', ''),
('Correas y cueros', '1234', 'Cartagena, avenida pastrana', 'Pesos', 'Cartagena', 'Bolivar', 'Ciudad del Vaticano', 'ingduribe@gmail.com', '3008132438', 'Sr.', 'David', 'Uribe', 'uribesotod@gmail.com', '3008132438', 'Encargados contramaestres, capataces', 'EspaÃ±ol', 'Clothing / Textil / Fashion', 'si', 'Eventos de nuevos diseÃ±os de modas'),
('mmm', 'dddd', 'kkk', 'mmm', 'mmm', 'kkkk', 'Colombia', 'uribesotod@gmail.com', '', 'Sr.', 'david', 'hhhh', 'uribesotod@gmail.com', 'ss', 'Directores, gerente, alto funcionario de la AAPP', 'Aleman', 'CompaÃ±Ã­as de ocio y viajes', 'si', 'Jugando ando'),
('mmm', 'jagsunfj', 'kkk, mmmm', 'mmm', 'mmm', 'kkkk', 'Colombia', 'uribesotod@gmail.com', '', 'Sr.', 'david', 'vvvvv', 'uribesotod@gmail.com', 'vv', 'Mandos intermedios o profesionales responsables de 6 subordi', 'Aleman', 'Accesorios', 'si', 'Jodiendo la vida'),
('mmm', 'mmookih990', 'kkk, mmmm', 'mmm', 'mmm', 'kkkk', 'Colombia', 'uribesotod@gmail.com', '', 'Sra.', 'david', 'jjjajjs', 'uribesotod@gmail.com', 'nananannene', 'Directores, gerente, alto funcionario de la AAPP', 'Aleman', 'Clothing / Textil / Fashion', 'si', 'Juagndi ando');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoteles`
--

CREATE TABLE `hoteles` (
  `nombre_contacto` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `id` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_propiedad` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `cargo_contacto` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_contacto` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_alternativo_contacto` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `email_contacto` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `cadena_hotelera` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_cadena_hotelera` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_alojamiento` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `numero_habitaciones` int(11) NOT NULL,
  `categoria` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `barrio` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `codigo_postal` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `software_hotelero` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `pms` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `channel_manager` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_channel_manager` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `web` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `razon_social` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `rut` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `rnt` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `categoria_iva` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `direccion_fiscal` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad_fiscal` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `pais_fiscal` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `habitaciones` text COLLATE utf8_spanish_ci NOT NULL,
  `servicios_propiedad` text COLLATE utf8_spanish_ci NOT NULL,
  `cancelacion_grat` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `penalidad` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `hora_entrada` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `hora_salida` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `fumar_propiedad` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `aloj_ninos` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `mascotas` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `estancia_minima` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `tarjet_estable` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `listado_tarjetas` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `iva_pagar` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `iva_municipal` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `importe` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `iva_muni_incluido` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `pagar_suplemento` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `listado_marcas` varchar(300) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `hoteles`
--

INSERT INTO `hoteles` (`nombre_contacto`, `id`, `nombre_propiedad`, `cargo_contacto`, `telefono_contacto`, `telefono_alternativo_contacto`, `email_contacto`, `cadena_hotelera`, `nombre_cadena_hotelera`, `tipo_alojamiento`, `numero_habitaciones`, `categoria`, `direccion`, `ciudad`, `barrio`, `pais`, `codigo_postal`, `software_hotelero`, `pms`, `channel_manager`, `nombre_channel_manager`, `web`, `url`, `razon_social`, `rut`, `rnt`, `categoria_iva`, `direccion_fiscal`, `ciudad_fiscal`, `pais_fiscal`, `habitaciones`, `servicios_propiedad`, `cancelacion_grat`, `penalidad`, `hora_entrada`, `hora_salida`, `fumar_propiedad`, `aloj_ninos`, `mascotas`, `estancia_minima`, `tarjet_estable`, `listado_tarjetas`, `iva_pagar`, `iva_municipal`, `importe`, `iva_muni_incluido`, `pagar_suplemento`, `listado_marcas`) VALUES
('david', '1804485909591761', 'Curramba la bella', 'Propietario', '00', '000', 'uribesotod@gmail.com', 'Si', 'Gestion hoteles', 'HabitaciÃ³n en casa privada', 99, '5 Estrellas', 'Los manguitos mz 3 lt 7', 'TURBACO', 'san pedro', 'Colombia', '131001', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones_usuarios`
--

CREATE TABLE `promociones_usuarios` (
  `nombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `promociones_usuarios`
--

INSERT INTO `promociones_usuarios` (`nombre`, `email`) VALUES
('patri', 'patri@mail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `nombre_prove` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `numero_fiscal` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `servicios` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `direccion_prove` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad_prove` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `cp` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `idioma_pref` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` varchar(60) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agencias`
--
ALTER TABLE `agencias`
  ADD PRIMARY KEY (`numero_fiscal`);

--
-- Indices de la tabla `alternativa`
--
ALTER TABLE `alternativa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`numero_fiscal`);

--
-- Indices de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  ADD PRIMARY KEY (`nombre_propiedad`);

--
-- Indices de la tabla `promociones_usuarios`
--
ALTER TABLE `promociones_usuarios`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`numero_fiscal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alternativa`
--
ALTER TABLE `alternativa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
