-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-04-2019 a las 13:53:57
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
-- Base de datos: `msi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `mensaje` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `telefono`, `ciudad`, `mensaje`) VALUES
(1, 'juan daniel suarez amado', 'jdsuarez623@misena.edu.co', '3209188638', 'garzon', 0x686f6c6120616d69676f2068617320686563686f20756e206275656e74726162616a6f2074652066656c696369746f20706f722065737465206772616e206d657269746f20717565206c65206861732070756573746f2070617261206861636572206573746120706167696e612e2e2e2067726163696173206a6476706c0d0a6275656e6120706f722065736120696e736563746f),
(3, 'luis fernado ochoa', 'daniel@gmail.com', '329045', 'garzon huila', 0x6d7579206269656e20616d69676f20736967756520617369),
(6, 'mamahuevos', 'mamahuevos@gmail.com', '320009977', 'neiva york', 0x6d7579206269656e20616d69676f206572657320756e2064696f732065726573206d6920616e67656c),
(7, 'moises', 'moise@gmail.com', '311298786', 'neiva', 0x657863656c656e7465);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
