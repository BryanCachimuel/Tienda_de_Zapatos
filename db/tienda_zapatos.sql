-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2022 a las 02:26:09
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_zapatos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estilo`
--

CREATE TABLE `estilo` (
  `id_estilo` int(11) NOT NULL,
  `estilos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `generos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla`
--

CREATE TABLE `talla` (
  `id_talla` int(11) NOT NULL,
  `tallas` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `marcas` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

------------------------------------------------------
--
-- Estructura de tabla para la tabla `zapato`
--

CREATE TABLE `zapato` (
  `id_zapato` int(11) NOT NULL,
  `color` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(7,2) NOT NULL,
  `valor_total` decimal(7,2) NOT NULL,
  `id_estilo` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL,
  `id_talla` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Indices de la tabla `estilo`
--
ALTER TABLE `estilo`
  ADD PRIMARY KEY (`id_estilo`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `talla`
--
ALTER TABLE `talla`
  ADD PRIMARY KEY (`id_talla`);
  
--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `zapato`
--
ALTER TABLE `zapato`
  ADD PRIMARY KEY (`id_zapato`),
  ADD KEY `id_estilo` (`id_estilo`),
  ADD KEY `id_genero` (`id_genero`),
  ADD KEY `id_talla` (`id_talla`),
  ADD KEY `id_marca` (`id_marca`);


-- AUTO_INCREMENT de la tabla `estilo`
--
ALTER TABLE `estilo`
  MODIFY `id_estilo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `talla`
--
ALTER TABLE `talla`
  MODIFY `id_talla` int(11) NOT NULL AUTO_INCREMENT;
  
--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `zapato`
--
ALTER TABLE `zapato`
  MODIFY `id_zapato` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `zapato`
--
ALTER TABLE `zapato`
  ADD CONSTRAINT `zapato_ibfk_1` FOREIGN KEY (`id_estilo`) REFERENCES `estilo` (`id_estilo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `zapato_ibfk_2` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `zapato_ibfk_3` FOREIGN KEY (`id_talla`) REFERENCES `talla` (`id_talla`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `zapato_ibfk_4` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
