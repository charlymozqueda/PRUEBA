-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2021 a las 06:08:25
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `calidadpaz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `usuario` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`usuario`, `password`) VALUES
('sistemadmin', 'warlok50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bandas`
--

CREATE TABLE `bandas` (
  `id` int(100) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `banda` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bandas`
--

INSERT INTO `bandas` (`id`, `departamento`, `banda`) VALUES
(1, 'CORTE', 'CORTE 1'),
(2, 'CORTE', 'CORTE 2'),
(3, 'COORDINADO', 'COORDINADO 1'),
(4, 'COORDINADO', 'COORDINADO 2'),
(5, 'COORDINADO', 'COORDINADO 3'),
(6, 'COORDINADO', 'COORDINADO 4'),
(7, 'PESPUNTE', 'BANDAS 1'),
(8, 'PESPUNTE', 'BANDAS 2'),
(9, 'PESPUNTE', 'BANDAS 3'),
(10, 'PESPUNTE', 'BANDAS 4'),
(11, 'PESPUNTE', 'BANDAS 5'),
(12, 'PESPUNTE', 'BANDAS 6'),
(13, 'PESPUNTE', 'BANDAS 7'),
(14, 'PESPUNTE', 'BANDAS 8'),
(15, 'PESPUNTE', 'BANDAS 9'),
(16, 'PESPUNTE', 'BANDAS 10'),
(17, 'PESPUNTE', 'BANDAS 11'),
(18, 'PESPUNTE', 'BANDAS 12'),
(19, 'PESPUNTE', 'BANDAS 13'),
(20, 'PESPUNTE', 'BANDAS 14'),
(21, 'PESPUNTE', 'BANDAS 15'),
(22, 'MONTADO', 'MONTADO 1'),
(23, 'MONTADO', 'MONTADO 2'),
(24, 'MONTADO', 'MONTADO 3'),
(25, 'MONTADO', 'MONTADO 4'),
(26, 'MONTADO', 'MONTADO 5'),
(27, 'MONTADO', 'MONTADO 6'),
(28, 'MONTADO', 'MONTADO 7'),
(29, 'ADORNO', 'ADORNO 1'),
(30, 'ADORNO', 'ADORNO 2'),
(31, 'ADORNO', 'ADORNO 3'),
(32, 'ADORNO', 'ADORNO 4'),
(33, 'ADORNO', 'ADORNO 5'),
(34, 'ADORNO', 'ADORNO 6'),
(35, 'ADORNO', 'ADORNO 7'),
(36, 'PREACABADO', 'PREACABADO'),
(37, 'INYECCION', 'INYECCION');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigos`
--

CREATE TABLE `codigos` (
  `id` int(20) NOT NULL,
  `departamento` varchar(20) NOT NULL,
  `codigo` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `codigos`
--

INSERT INTO `codigos` (`id`, `departamento`, `codigo`) VALUES
(1, 'CORTE', 1000),
(2, 'CORTE', 1001),
(3, 'CORTE', 1002),
(4, 'CORTE', 1003),
(5, 'CORTE', 1004),
(6, 'COORDINADO', 1100),
(7, 'COORDINADO', 1101),
(8, 'COORDINADO', 1102),
(9, 'COORDINADO', 1103),
(10, 'COORDINADO', 1104),
(11, 'COORDINADO', 1105),
(12, 'PESPUNTE', 4000),
(13, 'PESPUNTE', 4001),
(14, 'PESPUNTE', 4002),
(15, 'PESPUNTE', 4003),
(16, 'PESPUNTE', 4004),
(17, 'PESPUNTE', 4005),
(18, 'PESPUNTE', 4006),
(19, 'PESPUNTE', 4007),
(20, 'PESPUNTE', 4008),
(21, 'PESPUNTE', 4009),
(22, 'PESPUNTE', 4010),
(23, 'PESPUNTE', 4011),
(24, 'PESPUNTE', 4012),
(25, 'PESPUNTE', 4013),
(26, 'PESPUNTE', 4014),
(27, 'PESPUNTE', 4015),
(28, 'PESPUNTE', 4016),
(29, 'PESPUNTE', 4017),
(30, 'PESPUNTE', 4018),
(31, 'PESPUNTE', 4019),
(32, 'PESPUNTE', 4020),
(33, 'PESPUNTE', 4021),
(34, 'PESPUNTE', 4022),
(35, 'MONTADO', 5000),
(36, 'MONTADO', 5001),
(37, 'MONTADO', 5002),
(38, 'MONTADO', 5003),
(39, 'MONTADO', 5004),
(40, 'MONTADO', 5005),
(41, 'MONTADO', 5006),
(42, 'MONTADO', 5007),
(43, 'MONTADO', 5008),
(44, 'MONTADO', 5009),
(45, 'MONTADO', 5010),
(46, 'MONTADO', 5011),
(47, 'MONTADO', 5012),
(48, 'MONTADO', 5013),
(49, 'MONTADO', 5014),
(50, 'MONTADO', 5015),
(51, 'MONTADO', 5016),
(52, 'MONTADO', 5017),
(53, 'MONTADO', 5018),
(54, 'ADORNO', 5500),
(55, 'ADORNO', 5501),
(56, 'ADORNO', 5502),
(57, 'ADORNO', 5503),
(58, 'ADORNO', 5504),
(59, 'ADORNO', 5505),
(60, 'ADORNO', 5506),
(61, 'ADORNO', 5507),
(62, 'ADORNO', 5508),
(63, 'ADORNO', 5509),
(64, 'PREACABADO ', 3000),
(65, 'PREACABADO ', 3001),
(66, 'PREACABADO ', 3002),
(67, 'PREACABADO ', 3003),
(68, 'PREACABADO ', 3004),
(69, 'PREACABADO ', 3005),
(70, 'PREACABADO ', 3006),
(71, 'PREACABADO ', 3007),
(72, 'INYECCION', 3500),
(73, 'INYECCION', 3501),
(74, 'INYECCION', 3502),
(75, 'INYECCION', 3503),
(76, 'INYECCION', 3504),
(77, 'INYECCION', 3505),
(78, 'INYECCION', 3506),
(79, 'INYECCION', 3507),
(80, 'INYECCION', 30508),
(81, 'INYECCION', 30509),
(82, 'INYECCION', 30510),
(83, 'INYECCION', 30511),
(84, 'INYECCION', 30512),
(85, 'INYECCION', 30513),
(86, 'INYECCION', 30514),
(87, 'INYECCION', 30515),
(88, 'INYECCION', 30516),
(89, 'INYECCION', 30517),
(90, 'INYECCION', 30518),
(91, 'INYECCION', 30519),
(92, 'INYECCION', 30520),
(93, 'INYECCION', 30521),
(94, 'INYECCION', 30522),
(95, 'INYECCION', 30523),
(96, 'INYECCION', 30524),
(97, 'INYECCION', 30525),
(98, 'INYECCION', 30526),
(99, 'INYECCION', 30527),
(100, 'INYECCION', 30528),
(101, 'INYECCION', 30529),
(102, 'INYECCION', 30530),
(103, 'INYECCION', 30531),
(104, 'INYECCION', 30532);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `defectos`
--

CREATE TABLE `defectos` (
  `id` int(30) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `defecto` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `defectos`
--

INSERT INTO `defectos` (`id`, `codigo`, `defecto`) VALUES
(1, '1000', 'CICATRICES/PICADOS/LACRAS'),
(2, '1001', 'DIF. PORO/GRABADO'),
(3, '1002', 'PIEL FLOJA/CRISPADA'),
(4, '1003', 'ENTRETELA DESPEGADA'),
(5, '1004', 'PIEL TRONADA'),
(6, '1100', 'REBAJADO FUERA DE ESPECIFICACION '),
(7, '1101', 'MAL RAYADO'),
(8, '1102', 'FOLIO ILEGIBLE/ERRONEO'),
(9, '1103', 'TROQUEL ILEGIBLE/ERRONEO'),
(10, '1104', 'ENTRETELA VISIBLE'),
(11, '1105', 'PIEL TRONADA'),
(12, '4000', 'FORRO MAL ARMADO'),
(13, '4001', 'PESPUNTE DEFORME'),
(14, '4002', 'PESPUNTE INCOMPLETO'),
(15, '4003', 'PESPUNTE ENCIMADO'),
(16, '4004', 'PESPUNTE CAIDO'),
(17, '4005', 'PESPUNTE DESCOCIDO/FLOJO'),
(18, '4006', 'CEJA FUERA DE ESPECIFICACION '),
(19, '4007', 'CORTE MAL ARMADO DE FLORETA'),
(20, '4008', 'CORTE MAL ARMADO DE TALON'),
(21, '4009', 'CORTE MAL ARMADO DE CHALECO/CIERRE'),
(22, '4010', 'DOBILLADO DEFORME'),
(23, '4011', 'CASCO MAL COLOCADO'),
(24, '4012', 'CONTRAFUERTE MAL COLOCADO'),
(25, '4013', 'FIBRA VISIBLE'),
(26, '4014', 'MAL REVOLTEADO EMPALMADO'),
(27, '4015', 'FORRO MAL RECORTADO'),
(28, '4016', 'PESPUNTE TROZADO'),
(29, '4017', 'CONTACTEL QUEMADO'),
(30, '4018', 'PRESILLA DESCOCIDA '),
(31, '4019', 'PRESILLA DEFORME'),
(32, '4020', 'CORTE MANCHADO DE PEGAMENTO'),
(33, '4021', 'CORTE CON HEBRAS'),
(34, '4022', 'PIEL TRONADA'),
(35, '5000', 'MONTADO CHUECO '),
(36, '5001', 'DIFERENTE ALTURA DE MOCASIN'),
(37, '5002', 'DIFERENTE ALTURA DE TALON '),
(38, '5003', 'DIFERENTE TAMA?O DE SUELA'),
(39, '5004', 'LATERAL CAIDO '),
(40, '5005', 'GUARDAFANGO DISPAREJO'),
(41, '5006', 'MAL ENSUELADO '),
(42, '5007', 'ORILLA DE SUELA DESPEGADA'),
(43, '5008', 'CARDADO VISIBLE'),
(44, '5009', 'PICOS EN PUNTA'),
(45, '5010', 'ZAPATO CON TACHUELA'),
(46, '5011', 'ZAPATO CON ARRUGA '),
(47, '5012', 'ZAPATO QUEMADO '),
(48, '5013', 'ZAPATO GOLPEADO'),
(49, '5014', 'CORTE CON PEGAMENTO '),
(50, '5015', 'SUELA CON PEGAMENTO '),
(51, '5016', 'SIN HERRAJE'),
(52, '5017', 'PIEL TRONADA'),
(53, '5018', 'MAL PERFORADO'),
(54, '5500', 'BRILLO DESIGUAL '),
(55, '5501', 'MAL DELINEADO '),
(56, '5502', 'ACABADO DE SUELA SUCIA'),
(57, '5503', 'ACABADO BARRIDO '),
(58, '5504', 'DIFERENTE TONO '),
(59, '5505', 'FORRO SUCIO '),
(60, '5506', 'PLANTILLA MAL COLOCADA'),
(61, '5507', 'PLANTILLA DESPEGADA'),
(62, '5508', 'IMPAR '),
(63, '5509', 'MAL ENCAJILLADO '),
(64, '3000', 'TONO DIFERENTE'),
(65, '3001', 'PLASTISOL MAL COLOCADO'),
(66, '3002', 'MAL REBABEADO'),
(67, '3003', 'ESPECIFICACION DE LA TARJETA '),
(68, '3004', 'BURBUJAS'),
(69, '3005', 'DEFECTOS DE MOLDE'),
(70, '3006', 'MAL RESANADO'),
(71, '3007', 'SUELA MAL PINTADA'),
(72, '3500', 'BURBUJA POR SALIDA DE INYECCION'),
(73, '3501', 'MAL ACOMODO EN ESTACION'),
(74, '3502', 'SUELA QUEMADA'),
(75, '3503', 'SUELA MAL SACADA'),
(76, '3504', 'SUELA CONTAMINADA'),
(77, '3505', 'SUELA PICADA'),
(78, '3506', 'SUELA CON AGUJERO'),
(79, '3507', 'REBABA GRUESA'),
(80, '30508', 'MOLDE PEGADO'),
(81, '30509', 'SUELA POROSA'),
(82, '30510', 'SIN CAMBRELLON'),
(83, '30511', 'BURBUJA POR TEMPERATURA'),
(84, '30512', 'BURBUJA POR REBABA'),
(85, '30513', 'BURBUJA POR CERRAR MOLDE'),
(86, '30514', 'SUCIEDAD DE VASO/MOLDE'),
(87, '30515', 'SIN PLASTISOL/DEFECTUOSO'),
(88, '30516', 'EXCESO DE DESMOLDANTE'),
(89, '30517', 'BURBUJA PATRON DE INYECCION'),
(90, '30518', 'TEMPERATURA DE MOLDE'),
(91, '30519', 'MACHUCON DE MOLDE'),
(92, '30520', 'MOLDE DA?ADO'),
(93, '30521', 'SUELA MACHUCADA'),
(94, '30522', 'FALTA DE DESMOLDANTE'),
(95, '30523', 'CAMBRELLON MAL COLOCADO'),
(96, '30524', 'MALA RELACION'),
(97, '30525', 'MALA PROGRAMACION'),
(98, '30526', 'INGERTO DEFICIENTE'),
(99, '30527', 'MOLDE FRIO'),
(100, '30528', 'COLOCACION DE MOLDE DEFICIENTE'),
(101, '30529', 'CELTEC MAL COLOCADO/GRANDE'),
(102, '30530', 'GOTEO DE METANOL'),
(103, '30531', 'GOTEO DE AGUA'),
(104, '30532', 'MOLDE MAL SECADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` int(10) NOT NULL,
  `departamento` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `departamento`) VALUES
(1, 'ADORNO'),
(2, 'COORDINADO'),
(3, 'CORTE'),
(4, 'INYECCION'),
(5, 'MONTADO'),
(6, 'PESPUNTE'),
(7, 'PREACABADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estilos`
--

CREATE TABLE `estilos` (
  `id` int(50) NOT NULL,
  `linea` varchar(50) NOT NULL,
  `estilo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estilos`
--

INSERT INTO `estilos` (`id`, `linea`, `estilo`) VALUES
(1, 'TRADICIONAL PLUS', '102'),
(2, 'TRADICIONAL PLUS', '10002'),
(3, 'TRADICIONAL PLUS', '10302'),
(4, 'TRADICIONAL PLUS', '103'),
(5, 'TRADICIONAL PLUS', '10003'),
(6, 'TRADICIONAL PLUS', '10303'),
(7, 'TRADICIONAL PLUS', '105'),
(8, 'TRADICIONAL PLUS', '1005'),
(9, 'TRADICIONAL PLUS', '10305'),
(10, 'TRADICIONAL PLUS', '106'),
(11, 'TRADICIONAL PLUS', '10306'),
(12, 'TRADICIONAL PLUS', '10007'),
(13, 'TRADICIONAL PLUS', '109'),
(14, 'TRADICIONAL PLUS', '10009'),
(15, 'TRADICIONAL PLUS', '110'),
(16, 'TRADICIONAL PLUS', '111'),
(17, 'TRADICIONAL PLUS', '10005'),
(18, 'JACK', '1202'),
(19, 'JACK', '10202'),
(20, 'JACK', '1203'),
(21, 'JACK', '10203'),
(22, 'JACK', '153234'),
(23, 'JACK', '10204'),
(24, 'JACK', '1205'),
(25, 'JACK', '10205'),
(26, 'JACK', '153233'),
(27, 'JACK', '162478'),
(28, 'VIDA PLUS', '1702'),
(29, 'VIDA PLUS', '1703'),
(30, 'VIDA PLUS', '1705'),
(31, 'VIDA PLUS', '11014'),
(32, 'VIDA PLUS', '11004'),
(33, 'VIDA PLUS', '1706'),
(34, 'ALE', '6403'),
(35, 'ALE', '6405'),
(36, 'ALE', '6406'),
(37, 'ALE', '20409'),
(38, 'ALE', '6407'),
(39, 'JOSEPH PLUS', '11404'),
(40, 'JOSEPH PLUS', '11405'),
(41, 'JOSEPH PLUS', '11408'),
(42, 'JHON', '3202'),
(43, 'JHON', '3203'),
(44, 'JHON', '3205'),
(45, 'JHON', '13205'),
(46, 'JHON', '3206'),
(47, 'TOBIT', '1902'),
(48, 'TOBIT', '1903'),
(49, 'TOBIT', '1905'),
(50, 'TOBIT', '1908'),
(51, 'SARA', '9102'),
(52, 'SARA', '6103'),
(53, 'SARA', '6104'),
(54, 'JONAS', '2103'),
(55, 'JONAS', '11503'),
(56, 'JONAS', '2105'),
(57, 'JONAS', '11504'),
(58, 'JONAS', '2106'),
(59, 'JONAS', '11506'),
(60, 'JONAS', '11508'),
(61, 'ISAAC', '1302'),
(62, 'ISAAC', '1303'),
(63, 'ISAAC', '1305'),
(64, 'ISAAC', '1306'),
(65, 'KEN', '3902'),
(66, 'KEN', '3903'),
(67, 'KEN', '3905'),
(68, 'KEN', '3907'),
(69, 'MIRIAM', '20506'),
(70, 'SENCIPIE', '11005'),
(71, 'SENCIPIE', '11013'),
(72, 'FRASIER', '16597'),
(73, 'FRANCK', '165697'),
(74, 'FRANCK', '160929'),
(75, 'JACK', '162476'),
(76, 'JACK', '162477'),
(77, 'JACK', '162978'),
(78, 'ANA', '20309'),
(79, 'ANA', '20304'),
(80, 'ANA', '20306'),
(81, 'ANGY', '6506'),
(82, 'ANGY', '6502'),
(83, 'ANGY', '6508'),
(84, 'ADELA', '20402'),
(85, 'ADELA', '20406'),
(86, 'ALE', '20409'),
(87, 'ANA', '20307'),
(88, 'ADELA', '20403'),
(89, 'DUNAS', '13406'),
(90, 'PLAY', '4003'),
(91, 'JACOB', '1802'),
(92, 'JACOB', '1803'),
(93, 'JACOB', '1804'),
(94, 'JACOB', '1805'),
(95, 'ALTO CONFORT', '6005'),
(96, 'ALTO CONFORT', '6004'),
(97, 'ALTO CONFORT', '20104'),
(98, 'MIRIAM', '6205'),
(99, 'MIRIAM', '6206'),
(100, 'EVAN', '3306'),
(101, 'EVAN', '12903'),
(102, 'EVAN', '12904'),
(103, 'EVAN', '12905'),
(104, 'RUTH', '7206'),
(105, 'SARAY', '7106'),
(106, 'VANE', '20603'),
(107, 'FRANCK', '165697'),
(108, 'FRANCK', '160929'),
(109, 'JACK', '162477'),
(110, 'JACK', '162978'),
(111, 'JACK', '162476'),
(112, 'JACK', '153234'),
(113, 'JACK', '163233'),
(114, 'FRASIER', '165697'),
(115, 'ISMAEL', '2203'),
(116, 'ISMAEL', '2205'),
(117, 'ISMAEL', '2206'),
(118, 'ISMAEL', '11605'),
(119, 'PABLO', '14305'),
(120, 'RUTH', '7208'),
(121, 'VIDA PLUS DAMA', '6303'),
(122, 'KAY', '14506'),
(123, 'GLENDA', '22303'),
(124, 'RUTH', '7212'),
(125, 'MIRIAM ', '6207'),
(126, 'MIRIAM PLUS', '20512'),
(127, 'GLENDA', '22304'),
(128, 'JACK PLUS', '1213'),
(129, 'JACK PLUS', '1214'),
(130, 'ANGY', '6504'),
(131, 'GLENDA', '20303'),
(132, 'BRITANI', '55302'),
(133, 'TRADICONAL', '119'),
(134, 'DORA', '22004'),
(135, 'TRADICIONAL MAX', '112'),
(136, 'MATUSALEN', '3805'),
(137, 'JONAS', '11505'),
(138, 'LONDON', '50103'),
(139, 'SENSIPIE', '1104'),
(140, 'KEN', '13907'),
(141, 'KAY', '14507'),
(142, 'JORDAN', '50306'),
(143, 'BIANCA', '55204'),
(144, 'KEN', '13902'),
(145, 'VIDA PLUS', '6306'),
(146, 'DANIEL', '50402'),
(147, 'DANIEL', '50406'),
(148, 'TRADICIONAL PLUS', '10019'),
(149, 'MATUZALEN', '3805'),
(150, 'RAFAEL', '12105'),
(151, 'MATUZALEN', '3802'),
(152, 'BRITANI', '55306'),
(153, 'RAFAEL', '4105'),
(154, 'TRADICONAL MAX', '10013'),
(155, 'JACK', '1211'),
(156, 'DANIEL', '50405'),
(157, 'RUTH', '55107'),
(158, 'TRADICIONAL MAX', '116'),
(159, 'KEN', '3906'),
(160, 'TRADICIONAL MAX', '115'),
(161, 'TRADICIONAL MAX', '113'),
(162, 'FAVY', '7810'),
(163, 'MIRIAM PLUS', '6216'),
(164, 'KEN', '13906'),
(165, 'RUTH', '7202'),
(166, 'RUTH', '7506'),
(167, 'TRADICIONAL MAX', '120'),
(168, 'MIRIAM PLUS', '6212'),
(169, 'TRADICIONAL MAX', '121'),
(170, 'JACK', '1215'),
(171, 'LORETA', '55004'),
(172, 'PABLO', '4102'),
(173, 'MIRIAM PLUS', '6213'),
(174, 'RUTH', '55118'),
(175, 'LORETA', '55010'),
(176, 'PABLO', '4306'),
(177, 'SARAHY', '7102'),
(178, 'JONAS', '2109'),
(179, 'PABLO', '4305'),
(180, 'SOFIA', '21315'),
(181, 'RAFAEL', '12106'),
(182, 'RAFAEL', '12102'),
(183, 'DORA', '22009'),
(184, 'LORETA', '8503'),
(185, 'ELENA', '22407'),
(186, 'MIREYA', '8502'),
(187, 'MIREYA', '8505'),
(188, 'LORETA', '55009'),
(189, 'ELENA', '22402'),
(190, 'DORA', '22005'),
(191, 'TRADICIONAL', '10015'),
(192, 'CLASICA', '14903'),
(193, 'CLASICA', '4903'),
(194, 'CLASICA', '4905'),
(195, 'NOE', '15003'),
(196, 'CAY', '4502'),
(197, 'MATUSALEN', '3803'),
(198, 'NOE', '15004'),
(199, 'BIANCA', '6706'),
(200, 'CLASICA', '4902'),
(201, 'CAY', '4506'),
(202, 'ANA', '20313'),
(203, 'MARA', '22203'),
(204, 'JONAS', '11509'),
(205, 'FLORSHEIM', 'F011080205'),
(206, 'CELESTE', '22704'),
(207, 'FLORSHEIM', 'F101109102'),
(208, 'FLORSHEIM', 'F01108042'),
(209, 'JONAS', '11513'),
(210, 'KEN', '13908'),
(211, 'ROK', '13515'),
(212, 'IKE', '15507'),
(213, 'YOHN', '13217'),
(214, 'ROCK', '13511'),
(215, 'MIREYA', '22604'),
(216, 'SKEICHER', '204277'),
(217, 'ROCK', '13216'),
(218, 'FLORSHEIM', 'F0145069'),
(219, 'FLORSHEIM', 'F0110902'),
(220, 'SKEICHER', 'SN204277'),
(221, 'IKE', '5502'),
(222, 'CELESTE', '8604'),
(223, 'YOHN', '3217'),
(224, 'NOE', '5003'),
(225, 'SCKECHER', 'SN204278'),
(226, 'TRADICIONAL MAX', '10026'),
(227, 'ROCK', '13507'),
(228, 'BRITANI', '55308'),
(229, 'ROCK', 'E20811'),
(230, 'TRADICIONAL MAX', '10027'),
(231, 'JOHN', '3216');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `passwords` varchar(20) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `usuario`, `passwords`, `rol`) VALUES
(16, 'Auditor1', 'Auditoria1010', 'Auditor'),
(13, 'Admin10', 'admin1010', 'Administrador'),
(14, 'Analista1', 'analista2020', 'TecnicoAnalista'),
(18, 'sistemadmin', 'warlok50', 'Admin.Usuarios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(10) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `departamento` varchar(20) NOT NULL,
  `defecto` varchar(80) NOT NULL,
  `estilo` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `piel` varchar(50) NOT NULL,
  `talla` varchar(10) NOT NULL,
  `banda` varchar(50) NOT NULL,
  `cantidad` varchar(10) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `codigo`, `tipo`, `departamento`, `defecto`, `estilo`, `color`, `piel`, `talla`, `banda`, `cantidad`, `fecha`) VALUES
(1, '1000', 'REPOSICION', 'CORTE', 'CICATRICES/PICADOS/LACRAS', 'ALE->6406', 'NEGRO', 'BORREGO', '25', 'BANDAS 1', '11', '2020-10-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id`, `tipo`) VALUES
(1, 'PIOCHA'),
(2, 'REPOSICION'),
(3, 'REPROCESO'),
(4, 'SCRAP');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bandas`
--
ALTER TABLE `bandas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `codigos`
--
ALTER TABLE `codigos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `defectos`
--
ALTER TABLE `defectos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estilos`
--
ALTER TABLE `estilos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bandas`
--
ALTER TABLE `bandas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `codigos`
--
ALTER TABLE `codigos`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT de la tabla `defectos`
--
ALTER TABLE `defectos`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `estilos`
--
ALTER TABLE `estilos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
