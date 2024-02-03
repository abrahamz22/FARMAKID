-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-02-2024 a las 18:34:51
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bbddpharmakid`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citar`
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
-- Estructura de tabla para la tabla `comprar`
--

CREATE TABLE `comprar` (
  `idUsuario` varchar(10) NOT NULL,
  `idMedicamento` varchar(10) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultar`
--

CREATE TABLE `consultar` (
  `idUsuario` varchar(10) NOT NULL,
  `idProteina` varchar(10) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamento`
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
-- Volcado de datos para la tabla `medicamento`
--

INSERT INTO `medicamento` (`inchi`, `smiles`, `estadoMedicamento`, `precio`, `nombre`, `id`, `nombreFichero`, `tiposFichero`, `fecha`) VALUES
('	InChI=1S/C13H18O2/c1-9(2)8-11-4-6-12(7-5-11)10(3)13(14)15/h4-7,9-10H,8H2,1-3H3,(H,14,15)', 'CC(C)Cc1ccc(C(C)C(=O)O)cc1', 'Aprobado', 4.12, 'IBUPROFEN', 'CHEMBL521', 'CHEMBL521.smi', '(.smi)', '2020-11-09 16:48:44'),
('	InChI=1S/C13H18O2/c1-9(2)8-11-4-6-12(7-5-11)10(3)13(14)15/h4-7,9-10H,8H2,1-3H3,(H,14,15)', 'CC(C)Cc1ccc(C(C)C(=O)O)cc1', 'Aprobado', 5.2, 'AMOXICILINA', 'CHEMBL530', 'CHEMBL521.smi', '(.smi)', '2018-02-04 16:50:03'),
('	InChI=1S/C13H18O2/c1-9(2)8-11-4-6-12(7-5-11)10(3)13(14)15/h4-7,9-10H,8H2,1-3H3,(H,14,15)', 'CC(C)Cc1ccc(C(C)C(=O)O)cc1', 'Aprobado', 6.15, 'PARACETAMOL', 'CHEMBL540', 'CHEMBL521.smi', '(.smi)', '2019-05-04 16:50:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
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
-- Estructura de tabla para la tabla `proteina`
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
-- Volcado de datos para la tabla `proteina`
--

INSERT INTO `proteina` (`especie`, `metodo`, `resolucion`, `nombre`, `id`, `nombreFichero`, `tipoFichero`, `fecha`) VALUES
('Homo sapiens', 'X-RAY DIFFRACTION', '1.90 Å', 'T STATE HUMAN HEMOGLOBIN [ALPHA V96W]', '1VWT', '1vwt.pdb', '(.pdb)	', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
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
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codigoPostal`, `nombre`, `apellidos`, `email`, `usuario`, `telefono`, `contrasena`, `dni`, `idUsuario`, `rol`) VALUES
(8912, 'Filemon', 'Cerro', 'ej123@ejemplo.com', 'Filemon', 123456789, '123', '39417195P', '#6', 'usuario'),
(8023, 'Abraham', 'Zambrano', 'abraham543@hotmail.com', 'abraham', 654123345, '12345', '39237681V', '0001', 'administrador'),
(12345, 'paracetamo', 'Zamora', 'test24@ejemplo.com', 'pedro', 123456, '12345', '12345612B', '00011', 'usuario'),
(8023, 'Ernesto', 'Diaz', 'ernesto543@hotmail.com', 'ernesto', 641233459, 'abcde', '39237681B', '0002', 'administrador'),
(8023, 'Ismael', 'Zambrano', 'ismael543@hotmail.com', 'ismael', 654123348, 'abcd123', '39237681N', '0003', 'editor'),
(8023, 'Pedro', 'Mejia', 'pedro543@hotmail.com', 'pedro', 654123341, '0987', '39237681M', '0004', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citar`
--
ALTER TABLE `citar`
  ADD PRIMARY KEY (`doctorId`,`usuarioId`,`fecha`),
  ADD KEY `usuarioId` (`usuarioId`);

--
-- Indices de la tabla `comprar`
--
ALTER TABLE `comprar`
  ADD PRIMARY KEY (`idUsuario`,`fecha`,`idMedicamento`),
  ADD KEY `idMedicamento` (`idMedicamento`);

--
-- Indices de la tabla `consultar`
--
ALTER TABLE `consultar`
  ADD PRIMARY KEY (`idUsuario`,`idProteina`,`fecha`),
  ADD KEY `idProteina` (`idProteina`);

--
-- Indices de la tabla `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proteina`
--
ALTER TABLE `proteina`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citar`
--
ALTER TABLE `citar`
  ADD CONSTRAINT `citar_ibfk_1` FOREIGN KEY (`usuarioId`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `comprar`
--
ALTER TABLE `comprar`
  ADD CONSTRAINT `comprar_ibfk_1` FOREIGN KEY (`idMedicamento`) REFERENCES `medicamento` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `comprar_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `consultar`
--
ALTER TABLE `consultar`
  ADD CONSTRAINT `consultar_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `consultar_ibfk_2` FOREIGN KEY (`idProteina`) REFERENCES `proteina` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `medico_ibfk_1` FOREIGN KEY (`id`) REFERENCES `citar` (`doctorId`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
