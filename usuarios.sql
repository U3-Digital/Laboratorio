-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 07, 2018 at 09:53 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `photo` text NOT NULL,
  `rol` int(11) NOT NULL,
  `sistema` varchar(1) NOT NULL,
  `intentos` int(11) NOT NULL,
  `activo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombre`, `email`, `photo`, `rol`, `sistema`, `intentos`, `activo`) VALUES
(1, 'rick', '123', 'Ricardo Urbina N.', 'rickyurbina@gmail.com', '', 0, 'A', 0, 'S'),
(12, 'alan', '123', 'Alan Urbina Najera', 'alan@e-studio.com.mc', '', 1, 'E', 0, 'S'),
(14, 'carlos', '123', 'Carlos Castillo', 'castillo@eleganzza360.com', '', 0, 'E', 0, 'S'),
(15, 'valiente', '123', 'Valiente Caliente', 'caliente@caliente.com', '', 1, 'E', 0, 'S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
