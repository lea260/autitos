-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 17, 2022 at 03:41 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `automotora`
--
DROP DATABASE IF EXISTS `automotora`;
CREATE DATABASE IF NOT EXISTS `automotora` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `automotora`;

-- --------------------------------------------------------

--
-- Table structure for table `auto`
--

DROP TABLE IF EXISTS `auto`;
CREATE TABLE `auto` (
  `id` int(11) NOT NULL,
  `precio_compra` float NOT NULL,
  `precio_venta` float NOT NULL,
  `estado` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_venta` datetime NOT NULL,
  `anio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auto`
--

INSERT INTO `auto` (`id`, `precio_compra`, `precio_venta`, `estado`, `marca`, `modelo`, `fecha_venta`, `anio`) VALUES
(3, 600, 700, 'enventa', 'nissan', 'sentra', '2022-12-17 03:37:19', 2002),
(4, 700, 800, 'enventa', 'nissan', 'tusuru', '2022-12-17 03:37:19', 1999),
(5, 400, 450, 'enventa', 'nissan', 'versa', '2022-12-17 03:37:19', 2002),
(6, 200, 250, 'enventa', 'peogeot', 'sentra', '2022-12-17 03:37:19', 2002);

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `id_productos` int(11) NOT NULL,
  `codigo` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id_productos`, `codigo`, `descripcion`, `precio`, `fecha`, `url`) VALUES
(1, 'codigo01editadoh', 'descripcion26editado', '26.00', '2021-09-15', ''),
(2, 'co444444', 'descripcion editada', '20.90', '2013-08-15', ''),
(5, 'cod04', 'descripcion 03', '2.00', '2020-02-28', ''),
(6, 'cod06', 'desc3', '23.30', '2012-12-30', ''),
(9, 'prefijocodigo03', 'descripcion26', '26.00', '2013-12-29', ''),
(11, 'codigo12', 'descripcion26', '26.00', '2013-12-29', '');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `rol` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nick` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `rol`, `nick`, `pwd`) VALUES
(1, 'mecanico', 'juan', '1234'),
(2, 'vendedor', 'maria', '1111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nick` (`nick`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auto`
--
ALTER TABLE `auto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
