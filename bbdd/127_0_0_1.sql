-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2024 at 03:18 AM
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
  `smiles` varchar(100) NOT NULL,
  `estadoMedicamento` varchar(20) NOT NULL,
  `precio` float NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nombreFichero` varchar(100) NOT NULL,
  `tiposFichero` varchar(10) NOT NULL,
  `fecha` datetime NOT NULL,
  `stock` int(11) NOT NULL,
  `principioActivo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `medicamento`
--

INSERT INTO `medicamento` (`inchi`, `smiles`, `estadoMedicamento`, `precio`, `nombre`, `id`, `nombreFichero`, `tiposFichero`, `fecha`, `stock`, `principioActivo`) VALUES
('InChI=1S/C8H9NO2/c1-6(10)9-7-2-4-8(11)5-3-7/h2-5,11H,1H3,(H,9,10)', 'CC(=O)Nc1ccc(O)cc1', 'ensayo clinico', 12.5, 'gelocatil', 'f1', 'paracetamol.exe', '.exe', '2024-02-18 23:40:00', 14, 'paracetamol');

-- --------------------------------------------------------

--
-- Table structure for table `medico`
--

CREATE TABLE `medico` (
  `id` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `especialidad` varchar(50) NOT NULL,
  `numeroColegiado` int(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `medico`
--

INSERT INTO `medico` (`id`, `nombre`, `apellidos`, `especialidad`, `numeroColegiado`, `email`, `telefono`) VALUES
('m1', 'Ernesto', ' Diaz Jimenez', 'alergologo', 123456789, 'valdrick_menethil@hotmail.es', 123456789);

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

--
-- Dumping data for table `proteina`
--

INSERT INTO `proteina` (`especie`, `metodo`, `resolucion`, `nombre`, `id`, `nombreFichero`, `tipoFichero`, `fecha`) VALUES
('homo sapiens', 'x-ray diffraction', '1.90  Å', 't state human hemoglobin [alpha v96w]', 'y1', '1vwt.pdb', '.pdb', '2024-02-14 03:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `codigoPostal` varchar(5) NOT NULL,
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
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`codigoPostal`, `nombre`, `apellidos`, `email`, `usuario`, `telefono`, `contrasena`, `dni`, `idUsuario`, `rol`) VALUES
('00909', 'Abraham', 'Zambrano', 'abrahamZ@gmail.es', 'abraham', 665626345, '1234', '12345678o', '#1', 'administrador'),
('00909', 'Ernesto', 'Diaz Jimenez', 'ernestoD@gmail.es', 'ernesto', 665626234, 'abc', '12345678b', '#2', 'administrador'),
('00909', 'Ismael', 'Zambrano', 'ismaelZ@gmail.es', 'ismael', 665626234, 'ab34', '12345678b', '#3', 'editor'),
('80467', 'Juan', 'Merino', 'juanM@gmail.es', 'juan', 624567855, 'ef45', '12345678e', '#4', 'usuario');

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
  ADD CONSTRAINT `citar_ibfk_1` FOREIGN KEY (`usuarioId`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `citar_ibfk_2` FOREIGN KEY (`doctorId`) REFERENCES `medico` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comprar`
--
ALTER TABLE `comprar`
  ADD CONSTRAINT `comprar_ibfk_1` FOREIGN KEY (`idMedicamento`) REFERENCES `medicamento` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `comprar_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `consultar`
--
ALTER TABLE `consultar`
  ADD CONSTRAINT `consultar_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `consultar_ibfk_2` FOREIGN KEY (`idProteina`) REFERENCES `proteina` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
