-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-02-2023 a las 10:53:20
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sphpotify`
--
CREATE DATABASE IF NOT EXISTS `sphpotify` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sphpotify`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tracks`
--

CREATE TABLE `tracks` (
  `id_tracks` int(11) NOT NULL,
  `name_tracks` varchar(100) NOT NULL,
  `URL` varchar(200) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `foto` blob DEFAULT NULL,
  `status` enum('Played','unPlayed') NOT NULL DEFAULT 'unPlayed',
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tracks`
--

INSERT INTO `tracks` (`id_tracks`, `name_tracks`, `URL`, `artist`, `genre`, `create_at`, `foto`, `status`, `user_id`) VALUES
(0, 'Test Track', 'https://test-track.com', 'Test Artist', 'Test Genre', '2023-02-13 16:42:34', 0x746573742d747261636b2e6a7067, 'unPlayed', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(250) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `name`) VALUES
(18, 'Ana'),
(19, 'tania');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`id_tracks`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tracks`
--
ALTER TABLE `tracks`
  ADD CONSTRAINT `tracks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `usuarios` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
