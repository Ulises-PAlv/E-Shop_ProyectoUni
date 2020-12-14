-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2020 a las 19:16:29
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `productosempresaurios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `playstation`
--

CREATE TABLE `playstation` (
  `id` int(11) NOT NULL,
  `producto` varchar(30) NOT NULL,
  `imagen` varchar(30) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `playstation`
--

INSERT INTO `playstation` (`id`, `producto`, `imagen`, `precio`, `descripcion`) VALUES
(100, 'SpiderMan PS4', 'card15.jpeg', 1200, 'Envuelvete en el increible mundo de spiderman y junto a él salva la ciudad de un nuevo peligro'),
(101, 'SpiderMan Miles Morales', 'card16.jpeg', 1350, 'Si el titulo anterior de SpiderMan PS4 fue de tu agardo no te puedes perder las nuevas aventuras que tendra el joven Miles Morales es su inicio como el nuevo SpiderMan'),
(102, 'Call Of Duty Modern Warfare', 'card17.jpg', 1120, 'Si dsifrutas la saga de Call Of Duty esta nueva entrega es para ti, con nuevos personajes y el regreso de caras conocidas podrás disfrutar de todo lo nuevo que tenemos para ti.'),
(103, 'Resident Evil 2', 'card18.jpg', 2100, 'El regreso de un juego amado por todos, regresa ahora para PS4, embarcate en esta vieja aventura una ez más con sorpresas nuevas incluidas'),
(104, 'The Last of Us', 'card20.jpg', 1500, 'Después de varios años llega la tan esperada secuela de The last of us, con una historia atrapante y millones de sorpresas, un juego que apunta a robarse la atención de todos'),
(105, 'Crash Bandicoot 4', 'card19.jpg', 1350, 'Si disfrutas de los juegos de plataforma tenemos la más reciente entrega de este marsupial, para poder disfrutar y combatir el aburrimiento'),
(106, 'Death Stranding', 'card21.jpg', 999, 'Un juego de aventura y magia negra, ideal para el multijugador y poder disfrutar de horas luchando en campaña'),
(107, 'God Of War', 'card22.jpg', 1320, 'La aventura de Kratos ahora disponible para PS4, revive los mejores momentos de este personaje ahora remasterizado y descubre nuevos secretos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `xbox`
--

CREATE TABLE `xbox` (
  `id` int(11) NOT NULL,
  `producto` varchar(30) NOT NULL,
  `imagen` varchar(30) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `xbox`
--

INSERT INTO `xbox` (`id`, `producto`, `imagen`, `precio`, `descripcion`) VALUES
(1, 'Dragon Ball FighterZ Xbox', 'card7.jpeg', 1200, 'Pelea con tus personajes favoritos de este famoso anime.'),
(2, 'Fortnite GamePass + Skins Xbox', 'card8.jpeg', 1000, 'Fortnite battle royale, aprovecha los beneficios del game pass y usa los atuendos disponibles.'),
(3, 'FIFA 20', 'card9.jpeg', 1000, 'El deporte mas famoso del mundo ahora en tus manos!. Juega con los jugadores del momento y gana todos los partidos.'),
(4, 'Halo 5 Guardians', 'card10.jpeg', 1220, 'Continúa con la historia del jefe maestro en su nueva entrega.'),
(5, 'Gears of war 3', 'card11.jpeg', 700, 'Gears of War 3 sumerge a los jugadores en una desgarradora historia de esperanza, supervivencia y fraternidad.'),
(6, 'Cybepunk 2077', 'card12.jpeg', 2000, 'El juego mas esperado de la década ahora esta disponible. Explora la cuidad De Night City y elige tu camino.'),
(7, 'Call of duty black ops: Cold  ', 'card13.jpeg', 1500, 'Desbarata una conspiración de la guerra fría que lleva décadas urdiéndose'),
(8, 'Ghost Recon', 'card14.jpeg', 1200, 'Cuándo se te pueden unir tus compañeros de equipo y se mantiene todo el progreso para todo el grupo.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `playstation`
--
ALTER TABLE `playstation`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `xbox`
--
ALTER TABLE `xbox`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
