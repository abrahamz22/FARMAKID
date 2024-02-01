-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 06:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbddpharmakid`
--
CREATE DATABASE IF NOT EXISTS `bbddpharmakid` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;
USE `bbddpharmakid`;

-- --------------------------------------------------------

--
-- Table structure for table `citar`
--

CREATE TABLE `citar` (
  `doctorId` varchar(10) NOT NULL,
  `usuarioId` varchar(10) NOT NULL,
  `observaciones` text DEFAULT NULL,
  `disponibilidad` varchar(16) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comprar`
--

CREATE TABLE `comprar` (
  `idUsuario` varchar(10) NOT NULL,
  `idMedicamento` varchar(10) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consultar`
--

CREATE TABLE `consultar` (
  `idUsuario` varchar(10) NOT NULL,
  `idProteina` varchar(10) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicamento`
--

CREATE TABLE `medicamento` (
  `inchi` varchar(200) NOT NULL,
  `smiles` varchar(200) NOT NULL,
  `estadoMedicamento` varchar(20) NOT NULL,
  `precio` float NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nombreFichero` varchar(50) NOT NULL,
  `tiposFichero` varchar(10) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medico`
--

CREATE TABLE `medico` (
  `id` varchar(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `especialidad` varchar(50) NOT NULL,
  `numeroColegiado` int(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proteina`
--

CREATE TABLE `proteina` (
  `especie` varchar(150) NOT NULL,
  `metodo` varchar(100) NOT NULL,
  `resolucion` varchar(20) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nombreFichero` varchar(75) NOT NULL,
  `tipoFichero` varchar(20) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `codigoPostal` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `telefono` int(9) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `idUsuario` varchar(10) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citar`
--
ALTER TABLE `citar`
  ADD PRIMARY KEY (`doctorId`,`usuarioId`,`fecha`),
  ADD KEY `usuarioId` (`usuarioId`);

--
-- Indexes for table `comprar`
--
ALTER TABLE `comprar`
  ADD PRIMARY KEY (`idUsuario`,`fecha`,`idMedicamento`),
  ADD KEY `idMedicamento` (`idMedicamento`);

--
-- Indexes for table `consultar`
--
ALTER TABLE `consultar`
  ADD PRIMARY KEY (`idUsuario`,`idProteina`,`fecha`),
  ADD KEY `idProteina` (`idProteina`);

--
-- Indexes for table `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proteina`
--
ALTER TABLE `proteina`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `citar`
--
ALTER TABLE `citar`
  ADD CONSTRAINT `citar_ibfk_1` FOREIGN KEY (`usuarioId`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `comprar`
--
ALTER TABLE `comprar`
  ADD CONSTRAINT `comprar_ibfk_1` FOREIGN KEY (`idMedicamento`) REFERENCES `medicamento` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `consultar`
--
ALTER TABLE `consultar`
  ADD CONSTRAINT `consultar_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `consultar_ibfk_2` FOREIGN KEY (`idProteina`) REFERENCES `proteina` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `medico_ibfk_1` FOREIGN KEY (`id`) REFERENCES `citar` (`doctorId`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `comprar` (`idUsuario`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
