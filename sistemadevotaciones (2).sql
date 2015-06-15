-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2015 a las 23:39:19
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistemadevotaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alcalde`
--

CREATE TABLE IF NOT EXISTS `alcalde` (
`id_alcalde` int(11) NOT NULL,
  `id_dui` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `partido` int(30) NOT NULL,
  `bandera` varchar(30) NOT NULL,
  `departamento` int(11) NOT NULL,
  `municipio` int(11) NOT NULL,
  `voto` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alcalde`
--

INSERT INTO `alcalde` (`id_alcalde`, `id_dui`, `nombre`, `apellido`, `partido`, `bandera`, `departamento`, `municipio`, `voto`) VALUES
(1, 35145245, 'FABIAN', 'LOPEZ', 1, 'imgs/', 5, 501, 4),
(2, 45154256, 'JUAN', 'PEREZ', 2, 'imgs/', 2, 201, 12),
(3, 45154523, 'MANUEL', 'ARGUETA', 2, 'imgs/', 5, 501, 4),
(4, 45123659, 'NELSON', 'PALMA', 4, 'imgs/', 14, 1401, 2),
(5, 69853256, 'JOELK', 'ALVARADO', 5, 'imgs/', 9, 901, 6),
(6, 96547895, 'TADEO', 'CERON', 6, 'imgs/', 4, 401, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudadano`
--

CREATE TABLE IF NOT EXISTS `ciudadano` (
`id` int(11) NOT NULL,
  `iddui` varchar(10) NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Genero` varchar(10) NOT NULL,
  `FechaDeNacimiento` date NOT NULL,
  `idDepartamento` int(11) NOT NULL,
  `idMunicipio` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudadano`
--

INSERT INTO `ciudadano` (`id`, `iddui`, `Nombres`, `Apellidos`, `Direccion`, `Genero`, `FechaDeNacimiento`, `idDepartamento`, `idMunicipio`) VALUES
(1, '12345678-9', 'salvador', 'enrique', 'san salvador', 'M', '1995-06-08', 3, 301),
(2, '65665955-9', 'salvador', 'enrique', 'san salvador', 'M', '1995-06-08', 9, 901),
(3, '55455955-9', 'salvador', 'enrique', 'san salvador', 'M', '1995-06-08', 8, 801),
(4, '12345678-9', 'enrique', 'enrique', 'san salvador', 'M', '1995-06-08', 3, 301);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coalision`
--

CREATE TABLE IF NOT EXISTS `coalision` (
`idCoalision` int(11) NOT NULL,
  `PartidoUno` varchar(30) NOT NULL,
  `PartidoDos` varchar(30) NOT NULL,
  `PartidoTres` varchar(30) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Tipo` varchar(30) NOT NULL,
  `Bandera` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `coalision`
--

INSERT INTO `coalision` (`idCoalision`, `PartidoUno`, `PartidoDos`, `PartidoTres`, `Nombre`, `Tipo`, `Bandera`) VALUES
(1, 'dgjs', 'ywger', 'wuyret', 'wukrg', 'Alcaldes', 'imgs/arena.jpg'),
(2, 'sdfhg', 'hmhdbmfJDFB', 'HJDBFB', 'JHDBFMHDBG', 'Alcaldes', 'imgs/arena.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
`id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `codigo` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`, `codigo`) VALUES
(1, 'Ahuachapán', '01'),
(2, 'Santa Ana', '02'),
(3, 'Sonsonate', '03'),
(4, 'Chalatenango', '04'),
(5, 'La Libertad', '05'),
(6, 'San Salvador', '06'),
(7, 'Cuscatlán', '07'),
(8, 'La Paz', '08'),
(9, 'Cabañas', '09'),
(10, 'San Vicente', '10'),
(11, 'Usulután', '11'),
(12, 'San Miguel', '12'),
(13, 'Morazán', '13'),
(14, 'La Unión', '14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diputado`
--

CREATE TABLE IF NOT EXISTS `diputado` (
`id_diputado` int(11) NOT NULL,
  `id_dui` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `partido` int(11) NOT NULL,
  `bandera` varchar(30) NOT NULL,
  `departamento` int(11) NOT NULL,
  `municipio` int(11) NOT NULL,
  `voto` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `diputado`
--

INSERT INTO `diputado` (`id_diputado`, `id_dui`, `nombre`, `apellido`, `partido`, `bandera`, `departamento`, `municipio`, `voto`) VALUES
(1, 54789854, 'FABUNDO', 'ALVARADO', 0, 'imgs/', 2, 201, 6),
(2, 54785421, 'ANDREZ', 'ROMERO', 0, 'imgs/', 3, 301, 4),
(3, 32152145, 'JUAN', 'LOPEZ', 0, 'imgs/', 10, 1001, 5),
(4, 65478256, 'ELMER', 'GUIDO', 0, 'imgs/', 13, 1301, 9),
(5, 74512569, 'FABIAN', 'DUBOMN', 0, 'imgs/', 12, 1201, 8),
(6, 32145689, 'MISAEL', 'MEJIA', 0, 'imgs/', 11, 1101, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iniciodesesion`
--

CREATE TABLE IF NOT EXISTS `iniciodesesion` (
`idInicioDeSesion` int(11) NOT NULL,
  `Usuario` varchar(10) NOT NULL,
  `Clave` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `iniciodesesion`
--

INSERT INTO `iniciodesesion` (`idInicioDeSesion`, `Usuario`, `Clave`) VALUES
(3, 'sistema', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciondecandidatos`
--

CREATE TABLE IF NOT EXISTS `inscripciondecandidatos` (
`idCandidato` int(11) NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Dui` varchar(30) NOT NULL,
  `idTipoDeCandidatura` int(11) NOT NULL,
  `participacion` varchar(30) NOT NULL,
  `idDepartamentos` int(11) NOT NULL,
  `idMunicipios` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscripciondecandidatos`
--

INSERT INTO `inscripciondecandidatos` (`idCandidato`, `Nombres`, `Apellidos`, `Dui`, `idTipoDeCandidatura`, `participacion`, `idDepartamentos`, `idMunicipios`) VALUES
(1, 'ss', 'gdg', 'eihd', 0, 'Partidaria', 8, 801),
(3, 'ss ', 'gdghh', 'eihd', 0, 'Partidaria', 8, 801),
(4, 'wrrf', 'ALVARADO', '12345678-8', 0, 'Partidaria', 2, 201);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcionpartido`
--

CREATE TABLE IF NOT EXISTS `inscripcionpartido` (
`idPartidos` int(11) NOT NULL,
  `NombrePartido` varchar(30) NOT NULL,
  `Responsable` varchar(30) NOT NULL,
  `Bandera` varchar(30) DEFAULT NULL,
  `Dui` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscripcionpartido`
--

INSERT INTO `inscripcionpartido` (`idPartidos`, `NombrePartido`, `Responsable`, `Bandera`, `Dui`) VALUES
(1, 'DEMOCRATICO', 'MAURICIO FAVEL', 'imgs/bandera 2.png', '87456989-9'),
(2, 'MORANO', 'STIVEN BIENAN', 'imgs/bandera5.png', '12345672-5'),
(3, 'ARACATA', 'OSCAR ARNULFO', 'imgs/bandera7.png', '87451236-9'),
(4, 'ESTRANO', 'SAEN ENRIQUE', 'imgs/bandera4.png', '87458965-6'),
(5, 'TADEAS', 'FAURICIO STONIO', 'imgs/bandera1.png', '45126578-4'),
(6, 'MARSELLAS', 'EFRAIN ANTONIO', 'imgs/bandera7.png', '14562547-3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE IF NOT EXISTS `municipio` (
`id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `codigo_depto` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=263 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id`, `nombre`, `codigo`, `codigo_depto`) VALUES
(1, 'Ahuachapán', '0101', '01'),
(2, 'Apaneca', '0102', '01'),
(3, 'Atiquizaya', '0103', '01'),
(4, 'Concepción de Ataco', '0104', '01'),
(5, 'El Refugio', '0105', '01'),
(6, 'Guaymango', '0106', '01'),
(7, 'Jujutla', '0107', '01'),
(8, 'San Francisco Menéndez', '0108', '01'),
(9, 'San Lorenzo', '0109', '01'),
(10, 'San Pedro Puxtla', '0110', '01'),
(11, 'Tacuba', '0111', '01'),
(12, 'Turín', '0112', '01'),
(13, 'Candelaria de la Frontera', '0201', '02'),
(14, 'Coatepeque', '0202', '02'),
(15, 'Chalchuapa', '0203', '02'),
(16, 'El Congo', '0204', '02'),
(17, 'El Porvenir', '0205', '02'),
(18, 'Masahuat', '0206', '02'),
(19, 'Metapán', '0207', '02'),
(20, 'San Antonio Pajonal', '0208', '02'),
(21, 'San Sebastián Salitrillo', '0209', '02'),
(22, 'Santa Ana', '0210', '02'),
(23, 'Santa Rosa Guachipilín', '0211', '02'),
(24, 'Santiago de la Frontera', '0212', '02'),
(25, 'Texistepeque', '0213', '02'),
(26, 'Acajutla', '0301', '03'),
(27, 'Armenia', '0302', '03'),
(28, 'Caluco', '0303', '03'),
(29, 'Cuisnahuat', '0304', '03'),
(30, 'Santa Isabel Ishuatán', '0305', '03'),
(31, 'Izalco', '0306', '03'),
(32, 'Juayúa', '0307', '03'),
(33, 'Nahuizalco', '0308', '03'),
(34, 'Nahulingo', '0309', '03'),
(35, 'Salcoatitán', '0310', '03'),
(36, 'San Antonio del Monte', '0311', '03'),
(37, 'San Julián', '0312', '03'),
(38, 'Santa Catarina Masahuat', '0313', '03'),
(39, 'Santo Domingo de Guzmán', '0314', '03'),
(40, 'Sonsonate', '0315', '03'),
(41, 'Sonzacate', '0316', '03'),
(42, 'Agua Caliente', '0401', '04'),
(43, 'Arcatao', '0402', '04'),
(44, 'Azacualpa', '0403', '04'),
(45, 'Citalá', '0404', '04'),
(46, 'Comalapa', '0405', '04'),
(47, 'Concepción Quezaltepeque', '0406', '04'),
(48, 'Chalatenango', '0407', '04'),
(49, 'Dulce Nombre de María', '0408', '04'),
(50, 'El Carrizal', '0409', '04'),
(51, 'El Paraíso', '0410', '04'),
(52, 'La Laguna', '0411', '04'),
(53, 'La Palma', '0412', '04'),
(54, 'La Reina', '0413', '04'),
(55, 'Las Vueltas', '0414', '04'),
(56, 'Nombre de Jesús', '0415', '04'),
(57, 'Nueva Concepción', '0416', '04'),
(58, 'Nueva Trinidad', '0417', '04'),
(59, 'Ojos de Agua', '0418', '04'),
(60, 'Potonico', '0419', '04'),
(61, 'San Antonio de la Cruz', '0420', '04'),
(62, 'San Antonio Los Ranchos', '0421', '04'),
(63, 'San Fernando', '0422', '04'),
(64, 'San Francisco Lempa', '0423', '04'),
(65, 'San Francisco Morazán', '0424', '04'),
(66, 'San Ignacio', '0425', '04'),
(67, 'San Isidro Labrador', '0426', '04'),
(68, 'San José Cancasque', '0427', '04'),
(69, 'San José Las Flores ', '0428', '04'),
(70, 'San Luis del Carmen', '0429', '04'),
(71, 'San Miguel de Mercedes', '0430', '04'),
(72, 'San Rafael', '0431', '04'),
(73, 'Santa Rita', '0432', '04'),
(74, 'Tejutla', '0433', '04'),
(75, 'Antiguo Cuscatlán', '0501', '05'),
(76, 'Ciudad Arce', '0502', '05'),
(77, 'Colón', '0503', '05'),
(78, 'Comasagua', '0504', '05'),
(79, 'Chiltiupán', '0505', '05'),
(80, 'Huizúcar', '0506', '05'),
(81, 'Jayaque', '0507', '05'),
(82, 'Jicalapa', '0508', '05'),
(83, 'La Libertad', '0509', '05'),
(84, 'Nuevo Cuscatlán', '0510', '05'),
(85, 'Santa Tecla', '0511', '05'),
(86, 'Quezaltepeque', '0512', '05'),
(87, 'Sacacoyo', '0513', '05'),
(88, 'San José Villanueva', '0514', '05'),
(89, 'San Juan Opico', '0515', '05'),
(90, 'San Matías', '0516', '05'),
(91, 'San Pablo Tacachico', '0517', '05'),
(92, 'Tamanique', '0518', '05'),
(93, 'Talnique', '0519', '05'),
(94, 'Teotepeque', '0520', '05'),
(95, 'Tepecoyo', '0521', '05'),
(96, 'Zaragoza', '0522', '05'),
(97, 'Aguilares', '0601', '06'),
(98, 'Apopa', '0602', '06'),
(99, 'Ayutuxtepeque', '0603', '06'),
(100, 'Cuscatancingo', '0604', '06'),
(101, 'El Paisnal', '0605', '06'),
(102, 'Guazapa', '0606', '06'),
(103, 'Ilopango', '0607', '06'),
(104, 'Mejicanos', '0608', '06'),
(105, 'Nejapa', '0609', '06'),
(106, 'Panchimalco', '0610', '06'),
(107, 'Rosario de Mora', '0611', '06'),
(108, 'San Marcos', '0612', '06'),
(109, 'San Martín', '0613', '06'),
(110, 'San Salvador', '0614', '06'),
(111, 'Santiago Texacuangos', '0615', '06'),
(112, 'Santo Tomás', '0616', '06'),
(113, 'Soyapango', '0617', '06'),
(114, 'Tonacatepeque', '0618', '06'),
(115, 'Delgado', '0619', '06'),
(116, 'Candelaria', '0701', '07'),
(117, 'Cojutepeque', '0702', '07'),
(118, 'El Carmen', '0703', '07'),
(119, 'El Rosario', '0704', '07'),
(120, 'Monte San Juan', '0705', '07'),
(121, 'Oratorio de Concepción', '0706', '07'),
(122, 'San Bartolomé Perulapía', '0707', '07'),
(123, 'San Cristóbal', '0708', '07'),
(124, 'San José Guayabal', '0709', '07'),
(125, 'San Pedro Perulapán', '0710', '07'),
(126, 'San Rafael Cedros', '0711', '07'),
(127, 'San Ramón', '0712', '07'),
(128, 'Santa Cruz Analquito', '0713', '07'),
(129, 'Santa Cruz Michapa', '0714', '07'),
(130, 'Suchitoto', '0715', '07'),
(131, 'Tenancingo', '0716', '07'),
(132, 'Cuyultitán', '0801', '08'),
(133, 'El Rosario', '0802', '08'),
(134, 'Jerusalén', '0803', '08'),
(135, 'Mercedes La Ceiba', '0804', '08'),
(136, 'Olocuilta', '0805', '08'),
(137, 'Paraíso de Osorio', '0806', '08'),
(138, 'San Antonio Masahuat', '0807', '08'),
(139, 'San Emigdio', '0808', '08'),
(140, 'San Francisco Chinameca', '0809', '08'),
(141, 'San Juan Nonualco', '0810', '08'),
(142, 'San Juan Talpa', '0811', '08'),
(143, 'San Juan Tepezontes', '0812', '08'),
(144, 'San Luis Talpa', '0813', '08'),
(145, 'San Miguel Tepezontes', '0814', '08'),
(146, 'San Pedro Masahuat', '0815', '08'),
(147, 'San Pedro Nonualco', '0816', '08'),
(148, 'San Rafael Obrajuelo', '0817', '08'),
(149, 'Santa María Ostuma', '0818', '08'),
(150, 'Santiago Nonualco', '0819', '08'),
(151, 'Tapalhuaca', '0820', '08'),
(152, 'Zacatecoluca', '0821', '08'),
(153, 'San Luis La Herradura', '0822', '08'),
(154, 'Cinquera', '0901', '09'),
(155, 'Guacotecti', '0902', '09'),
(156, 'Ilobasco', '0903', '09'),
(157, 'Jutiapa', '0904', '09'),
(158, 'San Isidro', '0905', '09'),
(159, 'Sensuntepeque', '0906', '09'),
(160, 'Tejutepeque', '0907', '09'),
(161, 'Victoria', '0908', '09'),
(162, 'Villa Dolores', '0909', '09'),
(163, 'Apastepeque', '1001', '10'),
(164, 'Guadalupe', '1002', '10'),
(165, 'San Cayetano Istepeque', '1003', '10'),
(166, 'Santa Clara', '1004', '10'),
(167, 'Santo Domingo', '1005', '10'),
(168, 'San Esteban Catarina', '1006', '10'),
(169, 'San Ildefonso', '1007', '10'),
(170, 'San Lorenzo', '1008', '10'),
(171, 'San Sebastián', '1009', '10'),
(172, 'San Vicente', '1010', '10'),
(173, 'Tecoluca', '1011', '10'),
(174, 'Tepetitán', '1012', '10'),
(175, 'Verapaz', '1013', '10'),
(176, 'Alegría', '1101', '11'),
(177, 'Berlín', '1102', '11'),
(178, 'California', '1103', '11'),
(179, 'Concepción Batres', '1104', '11'),
(180, 'El Triunfo', '1105', '11'),
(181, 'Ereguayquín', '1106', '11'),
(182, 'Estanzuelas', '1107', '11'),
(183, 'Jiquilisco', '1108', '11'),
(184, 'Jucuapa', '1109', '11'),
(185, 'Jucuarán', '1110', '11'),
(186, 'Mercedes Umaña', '1111', '11'),
(187, 'Nueva Granada', '1112', '11'),
(188, 'Ozatlán', '1113', '11'),
(189, 'Puerto El Triunfo', '1114', '11'),
(190, 'San Agustín', '1115', '11'),
(191, 'San Buenaventura', '1116', '11'),
(192, 'San Dionisio', '1117', '11'),
(193, 'Santa Elena', '1118', '11'),
(194, 'San Francisco Javier', '1119', '11'),
(195, 'Santa María', '1120', '11'),
(196, 'Santiago de María', '1121', '11'),
(197, 'Tecapán', '1122', '11'),
(198, 'Usulután', '1123', '11'),
(199, 'Carolina', '1201', '12'),
(200, 'Ciudad Barrios', '1202', '12'),
(201, 'Comacarán', '1203', '12'),
(202, 'Chapeltique', '1204', '12'),
(203, 'Chinameca', '1205', '12'),
(204, 'Chirilagua', '1206', '12'),
(205, 'El Tránsito', '1207', '12'),
(206, 'Lolotique', '1208', '12'),
(207, 'Moncagua', '1209', '12'),
(208, 'Nueva Guadalupe', '1210', '12'),
(209, 'Nuevo Edén de San Juan', '1211', '12'),
(210, 'Quelepa', '1212', '12'),
(211, 'San Antonio del Mosco', '1213', '12'),
(212, 'San Gerardo', '1214', '12'),
(213, 'San Jorge', '1215', '12'),
(214, 'San Luis de la Reina', '1216', '12'),
(215, 'San Miguel', '1217', '12'),
(216, 'San Rafael Oriente', '1218', '12'),
(217, 'Sesori', '1219', '12'),
(218, 'Uluazapa', '1220', '12'),
(219, 'Arambala', '1301', '13'),
(220, 'Cacaopera', '1302', '13'),
(221, 'Corinto', '1303', '13'),
(222, 'Chilanga', '1304', '13'),
(223, 'Delicias de Concepción', '1305', '13'),
(224, 'El Divisadero', '1306', '13'),
(225, 'El Rosario', '1307', '13'),
(226, 'Gualococti', '1308', '13'),
(227, 'Guatajiagua', '1309', '13'),
(228, 'Joateca', '1310', '13'),
(229, 'Jocoaitique', '1311', '13'),
(230, 'Jocoro', '1312', '13'),
(231, 'Lolotiquillo', '1313', '13'),
(232, 'Meanguera', '1314', '13'),
(233, 'Osicala', '1315', '13'),
(234, 'Perquín', '1316', '13'),
(235, 'San Carlos', '1317', '13'),
(236, 'San Fernando', '1318', '13'),
(237, 'San Francisco Gotera', '1319', '13'),
(238, 'San Isidro', '1320', '13'),
(239, 'San Simón', '1321', '13'),
(240, 'Sensembra', '1322', '13'),
(241, 'Sociedad', '1323', '13'),
(242, 'Torola', '1324', '13'),
(243, 'Yamabal', '1325', '13'),
(244, 'Yoloaiquín', '1326', '13'),
(245, 'Anamorós', '1401', '14'),
(246, 'Bolívar', '1402', '14'),
(247, 'Concepción de Oriente', '1403', '14'),
(248, 'Conchagua', '1404', '14'),
(249, 'El Carmen', '1405', '14'),
(250, 'El Sauce', '1406', '14'),
(251, 'Intipucá', '1407', '14'),
(252, 'La Unión', '1408', '14'),
(253, 'Lilisque', '1409', '14'),
(254, 'Meanguera del Golfo', '1410', '14'),
(255, 'Nueva Esparta', '1411', '14'),
(256, 'Pasaquina', '1412', '14'),
(257, 'Polorós', '1413', '14'),
(258, 'San Alejo', '1414', '14'),
(259, 'San José', '1415', '14'),
(260, 'Santa Rosa de Lima', '1416', '14'),
(261, 'Yayantique', '1417', '14'),
(262, 'Yucuaiquín', '1418', '14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presidente`
--

CREATE TABLE IF NOT EXISTS `presidente` (
`idpresidente` int(11) NOT NULL,
  `id_dui` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `partido` int(30) NOT NULL,
  `bandera` varchar(30) NOT NULL,
  `candidato` varchar(30) NOT NULL,
  `departamento` int(11) NOT NULL,
  `municipio` int(11) NOT NULL,
  `VOTO` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `presidente`
--

INSERT INTO `presidente` (`idpresidente`, `id_dui`, `nombre`, `apellido`, `partido`, `bandera`, `candidato`, `departamento`, `municipio`, `VOTO`) VALUES
(3, 54854564, 'EFRAN ', 'CEVALLOS', 2, 'imgs/', 'tODO El Pais', 8, 801, 6),
(4, 15458789, 'juan', 'gomez', 4, 'imgs/', 'Todo El Pais', 7, 701, 13),
(5, 65478542, 'JAIME', 'BAIRES', 3, 'imgs/', 'Todo El Pais', 6, 601, 3),
(6, 45125456, 'DIEGO', 'ORELLANA', 1, 'imgs/', 'Todo El Pais', 4, 401, 4),
(7, 65452145, 'EDWIN', 'GAVIDEA', 6, 'imgs/', 'Todo El Pais', 12, 1201, 4),
(8, 47859651, 'MAURICIO', 'FUNES', 5, 'imgs/', 'Todo El Pais', 6, 601, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodecandidatura`
--

CREATE TABLE IF NOT EXISTS `tipodecandidatura` (
`idPeriodo` int(11) NOT NULL,
  `Tipo` varchar(15) NOT NULL,
  `Periodo` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipodecandidatura`
--

INSERT INTO `tipodecandidatura` (`idPeriodo`, `Tipo`, `Periodo`) VALUES
(1, 'Alcaldes y Dipu', 2014),
(3, 'Alcaldes y Dipu', 2015),
(4, 'Alcaldes y Dipu', 2014),
(5, 'Alcaldes y Dipu', 2014);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alcalde`
--
ALTER TABLE `alcalde`
 ADD PRIMARY KEY (`id_alcalde`);

--
-- Indices de la tabla `ciudadano`
--
ALTER TABLE `ciudadano`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `coalision`
--
ALTER TABLE `coalision`
 ADD PRIMARY KEY (`idCoalision`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `diputado`
--
ALTER TABLE `diputado`
 ADD PRIMARY KEY (`id_diputado`);

--
-- Indices de la tabla `iniciodesesion`
--
ALTER TABLE `iniciodesesion`
 ADD PRIMARY KEY (`idInicioDeSesion`);

--
-- Indices de la tabla `inscripciondecandidatos`
--
ALTER TABLE `inscripciondecandidatos`
 ADD PRIMARY KEY (`idCandidato`);

--
-- Indices de la tabla `inscripcionpartido`
--
ALTER TABLE `inscripcionpartido`
 ADD PRIMARY KEY (`idPartidos`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `presidente`
--
ALTER TABLE `presidente`
 ADD PRIMARY KEY (`idpresidente`);

--
-- Indices de la tabla `tipodecandidatura`
--
ALTER TABLE `tipodecandidatura`
 ADD PRIMARY KEY (`idPeriodo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alcalde`
--
ALTER TABLE `alcalde`
MODIFY `id_alcalde` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `ciudadano`
--
ALTER TABLE `ciudadano`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `coalision`
--
ALTER TABLE `coalision`
MODIFY `idCoalision` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `diputado`
--
ALTER TABLE `diputado`
MODIFY `id_diputado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `iniciodesesion`
--
ALTER TABLE `iniciodesesion`
MODIFY `idInicioDeSesion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `inscripciondecandidatos`
--
ALTER TABLE `inscripciondecandidatos`
MODIFY `idCandidato` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `inscripcionpartido`
--
ALTER TABLE `inscripcionpartido`
MODIFY `idPartidos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=263;
--
-- AUTO_INCREMENT de la tabla `presidente`
--
ALTER TABLE `presidente`
MODIFY `idpresidente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `tipodecandidatura`
--
ALTER TABLE `tipodecandidatura`
MODIFY `idPeriodo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
