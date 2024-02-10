-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2024 at 11:15 PM
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

--
-- Dumping data for table `medicamento`
--

INSERT INTO `medicamento` (`inchi`, `smiles`, `estadoMedicamento`, `precio`, `nombre`, `id`, `nombreFichero`, `tiposFichero`, `fecha`) VALUES
('	InChI=1S/C13H18O2/c1-9(2)8-11-4-6-12(7-5-11)10(3)13(14)15/h4-7,9-10H,8H2,1-3H3,(H,14,15)', 'CC(C)Cc1ccc(C(C)C(=O)O)cc1', 'Aprobado', 4.12, 'IBUPROFEN', 'CHEMBL521', 'CHEMBL521.smi', '(.smi)', '2020-11-09 16:48:44'),
('	InChI=1S/C13H18O2/c1-9(2)8-11-4-6-12(7-5-11)10(3)13(14)15/h4-7,9-10H,8H2,1-3H3,(H,14,15)', 'CC(C)Cc1ccc(C(C)C(=O)O)cc1', 'Aprobado', 5.2, 'AMOXICILINA', 'CHEMBL530', 'CHEMBL521.smi', '(.smi)', '2018-02-04 16:50:03'),
('	InChI=1S/C13H18O2/c1-9(2)8-11-4-6-12(7-5-11)10(3)13(14)15/h4-7,9-10H,8H2,1-3H3,(H,14,15)', 'CC(C)Cc1ccc(C(C)C(=O)O)cc1', 'Aprobado', 6.15, 'PARACETAMOL', 'CHEMBL540', 'CHEMBL521.smi', '(.smi)', '2019-05-04 16:50:12');

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
('m1', 'Manolo', 'Mendez Rod', 'ortopedia', 283499999, 'antoniMendez@gmail.es', 665437653);

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
('Homo sapiens', 'X-RAY DIFFRACTION', '1.90 Å', 'T STATE HUMAN HEMOGLOBIN [ALPHA V96W]', '1VWT', '1vwt.pdb', '(.pdb)	', '0000-00-00 00:00:00');

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
('80467', 'Abraham', 'Zambrano', 'abrahamZ@gmail.es', 'abraham', 654265345, '1234', '12345678o', '#1', 'administrador'),
('80467', 'Ernesto', 'Diaz', 'ernestoD@gmail.es', 'ernesto', 652265234, 'abcd', '12345678b', '#2', 'usuario'),
('80467', 'Ismael', 'Zambrano', 'ismaelZ@gmail.es', 'ismael', 624256345, 'ab34', '12345678i', '#3', 'editor'),
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
  ADD CONSTRAINT `citar_ibfk_1` FOREIGN KEY (`usuarioId`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE CASCADE,
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
  ADD CONSTRAINT `consultar_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `consultar_ibfk_2` FOREIGN KEY (`idProteina`) REFERENCES `proteina` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
