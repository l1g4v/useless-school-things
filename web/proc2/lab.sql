-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-01-2021 a las 22:02:31
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `classroom`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lab`
--

CREATE TABLE `lab` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `cost` int(11) NOT NULL,
  `info` text NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lab`
--

INSERT INTO `lab` (`id`, `name`, `cost`, `info`, `amount`) VALUES
(4, 'Crosshair nvme', 3500, '1TB 3gb/s read-write', 100),
(5, 'Gigabyte Power suply', 2000, '750W 90 Gold', 40),
(6, 'MSI motherboard', 4000, '2 pci-e x16 | 2 m.2 | L5512 socket | 4 DIMM | 125W TDP | 6 SATA', 20),
(7, 'Generic tempered glass case', 3090, 'ATX motherboard | 3 120mm fan | wide airflow', 30),
(8, 'Intel i7-7000 cpu', 7000, '4 cores 8 threads | 3.1 Ghz | 4.2 Ghz turbo', 5),
(9, 'AMD 5000 cpu', 10100, '16 cores 24 threads | 4.5 Ghz | 5.1 Ghz', 10),
(10, 'Nvidia RTX 3070', 7000, '2.1 Ghz | 8gb GDDR6X | 120W TDP', 2),
(11, 'Nvidia RTX 3090', 24000, '2.4 Ghz | 24 GDDR6X | 500W TDP', 5),
(12, 'Western Digital HDD', 4000, '4TB 7200 RPM', 100),
(13, 'Western Digital HDD', 2000, '2.5TB | 7200 RPM', 31),
(14, 'Noctua air cooler', 3000, '90mm fan', 23),
(15, 'Generic thermal paste', 300, '100g | 9.5W/mK', 100),
(16, 'LG 140144051 monitor', 5000, '1ms | 140hz | 1440p | G-Sync', 51);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lab`
--
ALTER TABLE `lab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
