-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-05-2013 a las 19:06:14
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dbconjun`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afecta`
--

CREATE TABLE IF NOT EXISTS `afecta` (
  `idafecta` int(11) NOT NULL AUTO_INCREMENT,
  `iddocumentos` int(11) DEFAULT NULL,
  `idpuc` int(11) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idafecta`),
  KEY `iddocumentos` (`iddocumentos`),
  KEY `idpuc` (`idpuc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `afecta`
--

INSERT INTO `afecta` (`idafecta`, `iddocumentos`, `idpuc`, `tipo`) VALUES
(1, 1, 8, 'DÃ©bito'),
(2, 1, 18, 'CrÃ©dito'),
(4, 1, 9, 'CrÃ©dito'),
(5, 5, 271, 'DÃ©bito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aptobod`
--

CREATE TABLE IF NOT EXISTS `aptobod` (
  `id_reg` int(11) NOT NULL AUTO_INCREMENT,
  `IdunidadV` int(11) NOT NULL,
  `idbodega` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_reg`),
  KEY `idx_aptobod` (`IdunidadV`),
  KEY `idx_aptobod_0` (`idbodega`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `aptobod`
--

INSERT INTO `aptobod` (`id_reg`, `IdunidadV`, `idbodega`) VALUES
(1, 7, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aptoparq`
--

CREATE TABLE IF NOT EXISTS `aptoparq` (
  `id_reg` int(11) NOT NULL AUTO_INCREMENT,
  `IdunidadV` int(11) NOT NULL,
  `idparqueadero` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_reg`),
  KEY `idx_des_apartamento` (`IdunidadV`),
  KEY `idx_aptoparq` (`idparqueadero`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Volcar la base de datos para la tabla `aptoparq`
--

INSERT INTO `aptoparq` (`id_reg`, `IdunidadV`, `idparqueadero`) VALUES
(24, 7, 2),
(25, 1, 3),
(28, 13, 13),
(29, 7, 16),
(30, 91, 22),
(31, 3, 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bodegas`
--

CREATE TABLE IF NOT EXISTS `bodegas` (
  `idbodega` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria del parqueadero',
  `bodega` varchar(255) DEFAULT NULL COMMENT 'Numero o nombre del parqueadero',
  `Descripcion` varchar(255) DEFAULT NULL COMMENT 'Una breve reseña del parqueadero',
  `Coheficiente` float DEFAULT NULL COMMENT 'Numero de coheficiente asignado al Parqueadero',
  `Matinmobiliaria` varchar(255) DEFAULT NULL COMMENT 'Numero Matricula inmobiliaria',
  `IdUsuario_Creacion` varchar(255) DEFAULT NULL,
  `Fecha_Creacion` datetime DEFAULT NULL,
  `IdUsuario_Modificacion` varchar(255) DEFAULT NULL,
  `Fecha_Modificacion` datetime DEFAULT NULL,
  PRIMARY KEY (`idbodega`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `bodegas`
--

INSERT INTO `bodegas` (`idbodega`, `bodega`, `Descripcion`, `Coheficiente`, `Matinmobiliaria`, `IdUsuario_Creacion`, `Fecha_Creacion`, `IdUsuario_Modificacion`, `Fecha_Modificacion`) VALUES
(1, 'D 001', 'sdxfgchvjk', 1.25, 'ergtdfg', NULL, '2013-03-15 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE IF NOT EXISTS `cargos` (
  `idcargo` int(11) NOT NULL AUTO_INCREMENT,
  `nombrecargo` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idcargo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcar la base de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`idcargo`, `nombrecargo`, `descripcion`) VALUES
(1, 'Administrador', 'Es el representante legal del Conjunto residencial'),
(2, 'Contador', 'Es la persona o entidad encargada de llevar las cuentas contables del conjunto y presentar los diferentes estados financieros.'),
(3, 'Revisor Fiscal', 'Es la persona nombrada por la asamblea de propietarios para realizar inspeccion y dar fe de la situacion operativa y financiera del conjunto'),
(4, 'Presidente del consejo', 'Es la persona encargada de presidir las reuniones del consejo'),
(5, 'Consejero', 'Miembro del Consejo'),
(6, 'Vigilante', 'Ingreso del Vigilante'),
(7, '11', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE IF NOT EXISTS `color` (
  `idcolor` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`idcolor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `color`
--

INSERT INTO `color` (`idcolor`, `color`) VALUES
(0, 'Sin Asignar'),
(1, 'amarillo'),
(2, 'azul'),
(3, 'rojo'),
(4, 'negro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE IF NOT EXISTS `documentos` (
  `iddocumentos` int(11) NOT NULL AUTO_INCREMENT,
  `sigla` varchar(255) DEFAULT NULL,
  `nombredoc` varchar(255) DEFAULT NULL,
  `descripcion` longtext,
  `ctasafecta` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`iddocumentos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`iddocumentos`, `sigla`, `nombredoc`, `descripcion`, `ctasafecta`) VALUES
(1, 'CXC', 'Cuentas por cobrar', '', NULL),
(2, 'CD', 'Comprobante de Diario', '', NULL),
(3, 'SI', 'Saldos Iniciales', 'Este comprobante ingresa la informacion inicial de la Contabilidad', NULL),
(4, 'ND', 'Nota Debito', '', NULL),
(5, 'RCM', 'recivo de caja menor', 'descripcion de recivo', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `idestado` int(11) NOT NULL AUTO_INCREMENT,
  `nestado` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idestado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `estado`
--

INSERT INTO `estado` (`idestado`, `nestado`, `descripcion`) VALUES
(1, 'Activo', NULL),
(2, 'inactivo', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionarios`
--

CREATE TABLE IF NOT EXISTS `funcionarios` (
  `idfuncionarios` int(11) NOT NULL AUTO_INCREMENT,
  `tipodocumento` int(11) DEFAULT NULL,
  `nodocumento` int(11) DEFAULT NULL,
  `nombres` varchar(255) DEFAULT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `rutnit` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `cargo` int(11) DEFAULT NULL,
  PRIMARY KEY (`idfuncionarios`),
  KEY `idx_funcionarios` (`cargo`),
  KEY `idx_funcionarios_0` (`tipodocumento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `funcionarios`
--

INSERT INTO `funcionarios` (`idfuncionarios`, `tipodocumento`, `nodocumento`, `nombres`, `apellidos`, `rutnit`, `telefono`, `celular`, `direccion`, `cargo`) VALUES
(1, 1, 80188262, 'Ernesto Andres', 'Alvarez lopez', '69235842-21', '5489263', '3105263984', 'Cll 34 No 58- 26 cuadrante 8 bloque 6', 2),
(2, 1, 80188261, 'Nelsi aurora', 'Mendez gomez', '69235842-21', '5489263', '3105263984', 'Cll 99 No 100- 26 cuadrante 8 bloque 6', 1),
(3, 1, 80188262, 'Cesar mauricio', 'Mendez gomez', '79.235.369', '5489263', '3105263984', 'Cll 23 NO 56-96', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE IF NOT EXISTS `genero` (
  `IdGenero` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del Genero',
  `Genero` varchar(225) DEFAULT NULL COMMENT 'Se coloca el Genero (Masculino o Femenino) dado el caso',
  PRIMARY KEY (`IdGenero`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `genero`
--

INSERT INTO `genero` (`IdGenero`, `Genero`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historico`
--

CREATE TABLE IF NOT EXISTS `historico` (
  `IdResidentes` int(11) NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(255) DEFAULT NULL COMMENT 'En esta columna se colocan los Nombres de los Propietarios o los residentes',
  `Apellidos` varchar(255) DEFAULT NULL COMMENT 'En esta columna se colocan los Apellidos de los Propietarios o los residentes',
  `IdTipoidentificacion` int(11) DEFAULT NULL COMMENT 'Este dato viene de la Tabla Identificacion',
  `NoDocumento` varchar(255) DEFAULT NULL COMMENT 'Se coloca el numero de documento',
  `Telefono` int(11) DEFAULT NULL COMMENT 'Se coloca el numero de Telefono Fijo',
  `Celular` int(11) DEFAULT NULL COMMENT 'Se coloca el numero de Telefono movil',
  `Direccion` varchar(255) DEFAULT NULL COMMENT 'Se llena en caso de que la persona viva en otro sitio',
  `FechaNacimiento` date DEFAULT NULL COMMENT 'Se coloca la fecha de Nacimiento',
  `LugarNacimiento` varchar(255) DEFAULT NULL COMMENT 'Se coloca la ciudad de Nacimiento',
  `IdGenero` int(11) DEFAULT NULL COMMENT 'Este dato viene de la Tabla Genero',
  `NombreContacto` varchar(255) DEFAULT NULL COMMENT 'Se ingresa el nombre de una persona de contacto',
  `TelefonoContacto` int(11) DEFAULT NULL COMMENT 'Se coloca el numero de Telefono del contacto',
  `CelularContacto` int(11) DEFAULT NULL COMMENT 'se Coloca el numero de tel',
  `Email` varchar(255) DEFAULT NULL COMMENT 'Se coloca la direcci',
  `IdUnidadV` int(11) DEFAULT NULL COMMENT 'Trae la informacion de la Tabla de unidadv',
  `Residente` bit(1) DEFAULT NULL COMMENT 'se coloca el identificador si es Residente',
  `Propietario` bit(1) DEFAULT NULL COMMENT 'se coloca el identificador si es Propietario',
  `FechaIngreso` date DEFAULT NULL COMMENT 'se ingresa la fecha de ingreso del Residente',
  `IdUsuario_Creacion` varchar(255) DEFAULT NULL,
  `Fecha_Creacion` datetime DEFAULT NULL,
  `IdUsuario_Modificacion` varchar(255) DEFAULT NULL,
  `Fecha_Modificacion` datetime DEFAULT NULL,
  PRIMARY KEY (`IdResidentes`),
  KEY `IdTipoidentificacion` (`IdTipoidentificacion`),
  KEY `IdGenero` (`IdGenero`),
  KEY `IdUnidadV` (`IdUnidadV`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=246 ;

--
-- Volcar la base de datos para la tabla `historico`
--

INSERT INTO `historico` (`IdResidentes`, `Nombres`, `Apellidos`, `IdTipoidentificacion`, `NoDocumento`, `Telefono`, `Celular`, `Direccion`, `FechaNacimiento`, `LugarNacimiento`, `IdGenero`, `NombreContacto`, `TelefonoContacto`, `CelularContacto`, `Email`, `IdUnidadV`, `Residente`, `Propietario`, `FechaIngreso`, `IdUsuario_Creacion`, `Fecha_Creacion`, `IdUsuario_Modificacion`, `Fecha_Modificacion`) VALUES
(7, 'elmo', 'cosquilla', 1, '', 0, 0, NULL, '2012-09-04', '', 1, ' ', 0, 0, '', 10, '1', '1', '2012-09-04', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(8, 'elmo', 'cosquilla', 1, '', 0, 0, NULL, '2012-09-04', '', 1, ' ', 0, 0, '', 10, '1', '1', '2012-09-04', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(9, 'elmo', 'cosquilla', 1, '', 0, 0, NULL, '2012-09-04', '', 1, ' ', 0, 0, '', 10, '1', '1', '2012-09-04', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(64, 'Julio Moises', 'Trucco Randell', 1, '30874664', 5341032, 2147483647, NULL, '1982-12-02', 'Bogota', 1, 'Jacinto W. Iborra', 8719418, 2147483647, 'metus.facilisis@malesuadafames.com', 73, '1', '1', '2012-12-09', NULL, NULL, NULL, NULL),
(91, 'Elias Gerardo', 'Tangarife Velacorte', 1, '41378052', 2296825, 2147483647, NULL, '1988-12-08', 'Bogota', 1, 'Anastacia K. Shehata', 3754690, 2088793213, 'sit@elitEtiamlaoreet.org', 17, '1', '1', '2012-12-09', NULL, NULL, NULL, NULL),
(180, 'Arnoldo Elias', 'Cubillas Carballo', 1, '74785645', 2842384, 1705882836, NULL, '1975-03-20', 'Bogota', 1, 'Jose S. Rianzar', 7810763, 2147483647, 'risus@ipsum.com', 9, '1', '1', '2012-12-09', NULL, NULL, NULL, NULL),
(208, '', '', 1, '', 0, 0, NULL, '2013-01-01', '', 1, '_', 0, 0, '', 83, '1', '1', '2013-01-01', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(211, 'Fingas', 'roma', 1, '00019383', 0, 0, NULL, '2013-01-02', 'Bogota', 1, '_', 0, 0, '', 83, '1', '1', '2013-01-02', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(215, 'cesar', 'gomez', 1, '80803705', 0, 0, NULL, '0000-00-00', '', 1, '_', 0, 0, '', 7, '1', '1', '2013-03-01', NULL, NULL, NULL, NULL),
(216, 'William', 'Bueno Hernandez', 1, '79689582', 0, 0, NULL, '0000-00-00', '', 1, '_', 0, 0, '', 7, '1', '1', '2013-03-01', NULL, NULL, NULL, NULL),
(217, 'adsds', 'asdaf', 1, '2123', 0, 0, NULL, '2005-01-04', '', 1, '_', 0, 0, '', 7, '1', '1', '2013-03-01', NULL, NULL, NULL, NULL),
(218, 'Seguro', 'Dos', 1, '5212', 21345, 3132, NULL, '2008-01-01', 'bogota', 1, 'dato1_dato2', 22, 31333, 'ceeeeee@ho.com', 9, '1', '1', '2013-01-13', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(219, 'pruebas ', 'seguro', 1, '2134', 212, 31333, NULL, '2008-01-16', 'Bogota', 1, '_', 0, 0, 'cadff@hotmail.com', 9, '1', '1', '2013-01-13', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(220, 'william ', 'Bueno Hernandez', 1, '79689689', 0, 0, NULL, '0000-00-00', '', 1, '_', 0, 0, '', 7, '1', NULL, '2013-03-15', NULL, NULL, NULL, NULL),
(221, 'asdf', 'reee', 1, '245', 222, 33333, NULL, '2006-01-18', '', 1, '_', 0, 0, 'sadfasss@ss.com', 9, '1', '1', '2013-01-13', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(222, 'eee', 'w3333', 1, '983', 0, 0, NULL, '0000-00-00', '', 1, '_', 0, 0, '', 9, '1', '1', '2013-01-13', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(223, 'Jaime Antonio', 'Garcia', 1, '56978548', 0, 0, NULL, '0000-00-00', '', 1, '_', 0, 0, '', 7, '1', NULL, '2013-03-15', NULL, NULL, NULL, NULL),
(224, 'William', 'Bueno Hernandez', 1, '79689', 0, 0, NULL, '0000-00-00', '', 1, '_', 0, 0, '', 7, '1', NULL, '2013-03-15', NULL, NULL, NULL, NULL),
(225, 'Jaime Antonio', 'Garcia', 1, '3456778', 0, 0, NULL, '0000-00-00', '', 1, '_', 0, 0, '', 7, '1', NULL, '2013-03-15', NULL, NULL, NULL, NULL),
(228, 'cesar', 'hernandez', 1, '6785678', 0, 0, NULL, '0000-00-00', '', 1, '_', 0, 0, '', 91, '1', '1', '2013-03-17', NULL, NULL, NULL, NULL),
(229, 'angelica', 'camacho', 1, '345876', 0, 0, NULL, '0000-00-00', '', 2, '_', 0, 0, '', 91, '1', NULL, '2013-03-17', NULL, NULL, NULL, NULL),
(230, 'andres', 'peralta', 1, '25567', 0, 0, NULL, '0000-00-00', '', 1, '_', 0, 0, '', 91, '1', '1', '2013-03-17', NULL, NULL, NULL, NULL),
(231, 'nombre uno', 'apellido uno', 1, '1234', 213, 313, NULL, '2004-06-16', 'bogota', 1, 'nombre dos_apellido dos', 444, 555, 'ceeeeee@hot.com', 7, '1', '1', '2013-01-13', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(232, 'camilo', 'guzman', 1, '27893876', 0, 0, NULL, '0000-00-00', '', 1, '_', 0, 0, '', 91, '1', '1', '2013-03-17', NULL, NULL, NULL, NULL),
(233, 'julian', 'castro', 1, '256376', 0, 0, NULL, '0000-00-00', '', 1, '_', 0, 0, '', 91, '1', '1', '2013-03-17', NULL, NULL, NULL, NULL),
(234, 'juan', 'camacho', 1, '6378982', 0, 0, NULL, '0000-00-00', '', 1, '_', 0, 0, '', 91, '1', '1', '2013-03-17', NULL, NULL, NULL, NULL),
(235, 'carlos ', 'siempira', 1, '6789098', 0, 0, NULL, '0000-00-00', '', 1, '_', 0, 0, '', 91, '1', '1', '2013-03-17', NULL, NULL, NULL, NULL),
(237, 'pepe', 'silva', 1, '67895346', 0, 0, NULL, '0000-00-00', '', 1, '_', 0, 0, '', 91, '1', '1', '2013-03-17', NULL, NULL, NULL, NULL),
(239, 'giovanni', 'gomez', 1, '62553739', 0, 0, NULL, '0000-00-00', '', 1, '_', 0, 0, '', 91, '1', '1', '2013-03-17', NULL, NULL, NULL, NULL),
(241, 'andres', 'gallego', 1, '7365436', 0, 0, NULL, '0000-00-00', '', 1, '_', 0, 0, '', 91, '1', '1', '2013-03-17', NULL, NULL, NULL, NULL),
(242, '6', '6', 1, '1', 5, 5, NULL, '0000-00-00', '5', 1, '_5', 5, 5, '5@HOTMAIL.COM', 89, '1', '1', '2013-01-15', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(243, 'pruebas', 'cesar', 1, '3453', 0, 0, NULL, '0000-00-00', '', 1, '_', 0, 0, '', 91, '1', '1', '2013-03-17', NULL, NULL, NULL, NULL),
(244, 'asdfafs', 'sadfasdfs', 1, '333', 0, 0, NULL, '0000-00-00', '', 1, '_', 0, 0, '', 91, '1', '1', '2013-03-17', NULL, NULL, NULL, NULL),
(245, 'sadfas', 'sadfasfasdfasf', 1, '233', 0, 0, NULL, '0000-00-00', '', 1, '_', 0, 0, '', 91, '1', '1', '2013-03-17', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `identificacion`
--

CREATE TABLE IF NOT EXISTS `identificacion` (
  `IdTipoidentificacion` int(11) NOT NULL AUTO_INCREMENT COMMENT 'indice',
  `Identificacion` varchar(255) DEFAULT NULL COMMENT 'Tipo de Identificacion por ejemplo Cedula de Ciudadania',
  `Sigla` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`IdTipoidentificacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `identificacion`
--

INSERT INTO `identificacion` (`IdTipoidentificacion`, `Identificacion`, `Sigla`) VALUES
(1, 'Cedula', 'CC'),
(2, 'Tarjeta identidad', 'TI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcaveh`
--

CREATE TABLE IF NOT EXISTS `marcaveh` (
  `idmarca` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idmarca`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `marcaveh`
--

INSERT INTO `marcaveh` (`idmarca`, `marca`) VALUES
(0, 'Sin Asignar'),
(1, 'Chevrolet'),
(2, 'Mazda'),
(3, 'Kia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `minuta`
--

CREATE TABLE IF NOT EXISTS `minuta` (
  `idregistro` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `novedad` text,
  `IdUsuario_Creacion` varchar(255) NOT NULL,
  `Fecha_Creacion` datetime NOT NULL,
  `IdUsuario_Modificacion` varchar(255) NOT NULL,
  `Fecha_Modificacion` datetime NOT NULL,
  PRIMARY KEY (`idregistro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `minuta`
--

INSERT INTO `minuta` (`idregistro`, `fecha`, `hora`, `titulo`, `novedad`, `IdUsuario_Creacion`, `Fecha_Creacion`, `IdUsuario_Modificacion`, `Fecha_Modificacion`) VALUES
(1, '2013-03-28', '20:02:22', 'entrega de turno', 'se entrega turno sin novedad wwwww', '', '0000-00-00 00:00:00', '1', '2013-04-07 23:11:48'),
(2, '2013-04-07', '23:12:28', 'jjj', 'fffffff', '1', '2013-04-07 23:12:28', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movcuentas`
--

CREATE TABLE IF NOT EXISTS `movcuentas` (
  `idmovcuentas` int(11) NOT NULL AUTO_INCREMENT,
  `codcuenta` int(11) DEFAULT NULL,
  `debito` int(11) DEFAULT NULL,
  `credito` int(11) DEFAULT NULL,
  `idmovimiento` int(11) DEFAULT NULL,
  PRIMARY KEY (`idmovcuentas`),
  KEY `idx_movcuentas` (`idmovimiento`),
  KEY `idx_movcuentas_0` (`codcuenta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcar la base de datos para la tabla `movcuentas`
--

INSERT INTO `movcuentas` (`idmovcuentas`, `codcuenta`, `debito`, `credito`, `idmovimiento`) VALUES
(1, 1, 1, 40, 1),
(2, 2, 200, 100, 1),
(3, 8, 21233, 0, 3),
(4, 18, 0, 21233, 3),
(5, 8, 100, 0, 5),
(6, 18, 0, 100, 5),
(7, 8, 5000, 0, 6),
(8, 18, 0, 5000, 6),
(9, 8, 1, 0, 7),
(10, 18, 0, 100, 7),
(11, 76, 0, 5000, 10),
(12, 76, 0, 314302, 11),
(13, 76, 0, 600, 12),
(14, 77, 0, 313836, 13),
(15, 77, 0, 23789, 14),
(16, 77, 0, 600, 15),
(17, 76, 500, 0, 17),
(18, 77, 0, 10, 17),
(19, 76, 0, 5555, 18),
(20, 77, 4441, 0, 18),
(21, 76, 0, 500, 20),
(22, 77, 300, 10, 20),
(23, 8, 500, 0, 21),
(24, 8, 0, 400, 21),
(25, 271, 500, 0, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento`
--

CREATE TABLE IF NOT EXISTS `movimiento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `tipodoc` int(11) DEFAULT NULL,
  `numdoc` int(11) DEFAULT NULL,
  `concepto` varchar(255) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `tercero` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_movimiento` (`tipodoc`),
  KEY `idx_movimiento_0` (`estado`),
  KEY `idx_movimiento_1` (`tercero`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcar la base de datos para la tabla `movimiento`
--

INSERT INTO `movimiento` (`id`, `numero`, `fecha`, `tipodoc`, `numdoc`, `concepto`, `estado`, `tercero`) VALUES
(1, 1, '2013-03-29 00:00:00', 1, 1, '123', 1, 2),
(2, 2, '2013-03-29 00:00:00', 2, 1, 'dfdsfsdfsdfsd', 1, 2),
(3, 3, '2013-04-25 00:00:00', 1, 2, 'pago de Administracion', 1, 2),
(4, 3, '2013-05-06 00:00:00', 2, 2, 'viva la gente', 1, 1),
(5, 4, '2013-05-06 00:00:00', 1, 3, 'hagan un dise&ntilde;o bien gracias por la humanidad no sean tan mmm', 1, 1),
(6, 5, '2013-05-06 00:00:00', 1, 4, 'JO', 1, 1),
(7, 6, '2013-05-06 00:00:00', 1, 5, 'ju', 1, 1),
(8, 7, '2013-05-06 00:00:00', 2, 3, 'bbbb', 1, 1),
(9, 8, '2013-05-06 00:00:00', 2, 4, 'car', 1, 1),
(10, 9, '2013-05-06 00:00:00', 2, 5, 'car', 1, 1),
(11, 10, '2013-05-06 00:00:00', 2, 6, 'car', 1, 1),
(12, 11, '2013-05-07 00:00:00', 2, 7, 'PROBANDO ANDO', 1, 1),
(13, 12, '2013-05-06 00:00:00', 3, 1, 'ecci vs minuto', 1, 1),
(14, 13, '2013-05-08 00:00:00', 3, 2, 'minuto vs jorge', 1, 1),
(15, 14, '2013-05-07 00:00:00', 4, 1, 'ECCI VS MINUTO', 1, 1),
(17, 15, '2013-05-12 00:00:00', 3, 3, 'sdsad', 1, 1),
(18, 16, '2013-05-09 00:00:00', 2, 3, 'hija', 1, 56),
(19, 17, '2013-05-12 00:00:00', 3, 4, 'g', 1, 100),
(20, 18, '2013-05-09 00:00:00', 4, 2, 'ESTA SI FUNCIONA', 1, 62),
(21, 19, '2013-05-10 00:00:00', 5, 1, 'hagan un dise&ntilde;o bien gracias por la humanidad no sean tan mmm', 1, 1),
(22, 20, '2013-05-13 00:00:00', 2, 8, 'fsd', 1, 1),
(23, 21, '2013-05-10 00:00:00', 2, 9, 'hagan un dise&ntilde;o bien gracias por la humanidad no sean tan mmm', 1, 10),
(24, 22, '2013-05-10 00:00:00', 5, 2, 'fdf', 1, 1),
(25, 23, '2013-05-14 00:00:00', 5, 3, 'hola', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE IF NOT EXISTS `nivel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` int(11) DEFAULT NULL,
  `detalle` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`id`, `nivel`, `detalle`, `descripcion`) VALUES
(1, 1, 'Clase', 'El Primer Digito'),
(2, 2, 'Grupo', 'Los dos primeros digitos'),
(3, 3, 'Cuenta', 'Los Cuatro Primeros digitos'),
(4, 4, 'Subcuenta', 'Los primeros Seis Digitos'),
(5, 5, 'Auxiliar', 'Los primeros ocho o mas digitos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parqueaderos`
--

CREATE TABLE IF NOT EXISTS `parqueaderos` (
  `idparqueadero` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria del parqueadero',
  `parqueadero` varchar(255) DEFAULT NULL COMMENT 'Numero o nombre del parqueadero',
  `Descripcion` varchar(255) DEFAULT NULL COMMENT 'Una breve reseña del parqueadero',
  `Coheficiente` float DEFAULT NULL COMMENT 'Numero de coheficiente asignado al Parqueadero',
  `Matinmobiliaria` varchar(255) DEFAULT NULL COMMENT 'Numero Matricula inmobiliaria',
  `idtipopq` int(11) NOT NULL,
  `IdUsuario_Creacion` varchar(255) DEFAULT NULL,
  `Fecha_Creacion` datetime DEFAULT NULL,
  `IdUsuario_Modificacion` varchar(255) DEFAULT NULL,
  `Fecha_Modificacion` datetime DEFAULT NULL,
  `estado` varchar(5) NOT NULL,
  PRIMARY KEY (`idparqueadero`),
  KEY `idx_parqueaderos` (`idtipopq`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Volcar la base de datos para la tabla `parqueaderos`
--

INSERT INTO `parqueaderos` (`idparqueadero`, `parqueadero`, `Descripcion`, `Coheficiente`, `Matinmobiliaria`, `idtipopq`, `IdUsuario_Creacion`, `Fecha_Creacion`, `IdUsuario_Modificacion`, `Fecha_Modificacion`, `estado`) VALUES
(0, 'Ingreso Peatonal', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'X'),
(1, '001', 'Parqueadero de 3X2mts', 1.25, 'Mtr254549', 1, NULL, NULL, NULL, NULL, ''),
(2, '14322', 'ZXCdddd', 89, 'tyu567', 1, NULL, NULL, '1', '2013-04-07 21:41:39', ''),
(3, '2', '', 53, 'uio789', 1, NULL, NULL, NULL, NULL, ''),
(4, '12', NULL, NULL, 'iop789', 2, NULL, NULL, NULL, NULL, ''),
(13, 'c1', NULL, NULL, 'rty456', 2, NULL, NULL, NULL, NULL, ''),
(14, 'V001', NULL, NULL, 'uio789', 3, NULL, NULL, NULL, NULL, 'X'),
(15, 'V002', NULL, NULL, 'MTROIRN', 3, NULL, NULL, NULL, NULL, 'X'),
(16, 'B 17', 'wedrftyguh', 1.25, 'erdftyguhj', 1, NULL, NULL, NULL, NULL, ''),
(17, 'C002', NULL, NULL, '', 2, NULL, NULL, NULL, NULL, ''),
(18, 'C002', NULL, NULL, '', 2, NULL, NULL, NULL, NULL, ''),
(19, 'V003', NULL, NULL, 'MTIDFHKJ', 3, NULL, NULL, NULL, NULL, 'X'),
(20, 'V004', NULL, NULL, '', 3, NULL, NULL, NULL, NULL, ''),
(21, '345', NULL, NULL, 'e2ed', 3, NULL, NULL, '1', '2013-04-07 22:40:15', ''),
(22, '5', '', 23, 'wer456', 1, '1', '2013-04-12 08:26:08', NULL, NULL, ''),
(23, 'c2', NULL, NULL, 'rty567', 2, NULL, NULL, NULL, NULL, ''),
(24, 'v5', NULL, NULL, 'kjh876', 3, '1', '2013-04-12 20:49:58', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puc`
--

CREATE TABLE IF NOT EXISTS `puc` (
  `idpuc` int(11) NOT NULL AUTO_INCREMENT,
  `cuenta` int(11) DEFAULT NULL,
  `denominacion` varchar(255) DEFAULT NULL,
  `descripcion` longtext,
  `estado` varchar(255) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  PRIMARY KEY (`idpuc`),
  KEY `nivel` (`nivel`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=272 ;

--
-- Volcar la base de datos para la tabla `puc`
--

INSERT INTO `puc` (`idpuc`, `cuenta`, `denominacion`, `descripcion`, `estado`, `nivel`) VALUES
(1, 1, 'ACTIVO', 'Agrupa el conjunto de las cuentas que representan los bienes y derechos tangibles e intangibles de propiedad del ente economico, que en la medida de su utilizacion, son fuente potencial de beneficios presentes o futuros. Comprende los siguientes grupos: el disponible, las inversiones, los deudores, los inventarios, las propiedades, planta y equipo, los intangibles, los diferidos, los otros activos y las valorizaciones.\r\n\r\nLas cuentas que integran esta clase tendran saldo de naturaleza debito, con excepcion de las provisiones, las depreciaciones, el agotamiento y las amortizaciones acumuladas, que seran deducidas, de manera separada, de los correspondientes grupos de cuentas.', 'Activo', 1),
(2, 11, 'DISPONIBLE', 'Comprende las cuentas que registran los rdez inmediata, total o ecursos de liquiparcial con que cuenta el ente economico y puede utilizar para fines generales o especificos, dentro de los cuales podemos mencionar la caja, los depositos en bancos y otras entidades financieras, las remesas en transito y los fondos.', 'Activo', 2),
(3, 1105, 'CAJA', NULL, 'Activo', 3),
(4, 110505, 'Caja General', NULL, 'Activo', 4),
(5, 110510, 'Caja Menor', NULL, 'Activo', 4),
(6, 1110, 'BANCOS', NULL, 'Activo', 3),
(7, 111005, 'MONEDA NACIONAL', NULL, 'Activo', 4),
(8, 11100501, 'Banco de Bogota cta xxxxxxxxxx', NULL, 'Activo', 5),
(9, 1120, 'CUENTAS DE AHORRO', NULL, 'Activo', 3),
(10, 112005, 'BANCOS', NULL, 'Activo', 4),
(11, 11200501, 'Banco de Bogota Cta xxxxxxxxxx', NULL, 'Activo', 5),
(12, 12, 'INVERSIONES', 'Comprende las cuentas que registran las inversiones en acciones, cuotas o partes de interes social, titulos valores, papeles comerciales o cualquier otro documento negociable adquirido por el ente economico con caracter temporal o permanente, con la finalidad de mantener una reserva secundaria de liquidez, establecer relaciones economicas con otras entidades o para cumplir con disposiciones legales o reglamentarias.\r\n\r\nLas inversiones representadas en acciones y en cuotas o partes de interes social, se registraran por su costo historico. Las demas inversiones, como bonos, cedulas, certificados, etc., se contabilizaran por su valor nominal. Sin embargo, en caso de presentarse diferencias entre este ultimo y el costo historico, con el proposito de no quebrantar la norma contable basica de "valuacion o medicion", tales diferencias se controlaran a traves de cuentas auxiliares complementarias valuativas de la inversion, especificamente en los titulos en que se presente la diferencia. Para el efecto, se utilizaran los rubros descuento por amortizar o prima por amortizar.\r\n\r\nEl costo historico incluye las sumas en que se incurre para la compra de la inversion, el cual, para el caso de las inversiones representadas en acciones y en cuotas o partes de interes social se ajustara mensual o anualmente, reconociendo el efecto inflacionario de conformidad con lo previsto en las disposiciones legales vigentes.\r\n\r\nCuando el ente economico tenga como actividad principal el de rentista de capital, al momento de vender sus inversiones debera cargar la cuenta 6150 -actividad financiera-. Si dichas inversiones son realizadas en desarrollo de actividades secundarias, cuando el valor de la venta sea mayor que el valor en libros, la diferencia se abonara a la cuenta 4240 -utilidad en venta de inversiones-, pero si el valor de venta es menor, esta se cargara a la respectiva cuenta de provisiones. En caso de no existir o ser insuficiente la provision, el saldo debera debitarse a la subcuenta 531005 -venta de inversiones-.\r\n\r\nCuando se posean inversiones en subordinadas, respecto de las cuales el ente economico tenga el poder de disponer que en el periodo siguiente le transfieran sus utilidades, deben contabilizarse bajo el metodo de participacion, de conformidad con las disposiciones legales vigentes.', 'Activo', 2),
(13, 1225, 'CERTIFICADOS', NULL, 'Activo', 3),
(14, 122505, 'CDT', NULL, 'Activo', 4),
(15, 13, 'DEUDORES', 'Comprende el valor de las deudas a cargo de terceros y a favor del ente economico, incluidas las comerciales y no comerciales.\r\n\r\nDe este grupo hacen parte, entre otras, las siguientes cuentas: clientes, cuentas corrientes comerciales, cuentas por cobrar a casa matriz, cuentas por cobrar a vinculados economicos, cuentas por cobrar a socios y accionistas, aportes por cobrar, anticipos y avances, cuentas de operacion conjunta, depositos y promesas de compraventa.\r\n\r\nEn este grupo tambien se incluye el valor de la provision pertinente, de naturaleza credito, constituida para cubrir las contingencias de perdida la cual debe ser justificada, cuantificable y confiable.\r\n\r\nLos valores representados en moneda extranjera se deberan ajustar a la tasa de cambio representativa del mercado.', 'Activo', 2),
(16, 1305, 'CLIENTES', NULL, 'Activo', 3),
(17, 130505, 'COPROPIETARIOS', NULL, 'Activo', 4),
(18, 13050505, 'Cuotas de Administracion', NULL, 'Activo', 5),
(19, 13050510, 'Expensas Extraordinarias', NULL, 'Activo', 5),
(20, 13050515, 'Servicio de Sauna', NULL, 'Activo', 5),
(21, 13050520, 'Sanciones, Recargos y Multas de Asamblea', NULL, 'Activo', 5),
(22, 13050525, 'Intereses de Mora Expensas De Administracion', NULL, 'Activo', 5),
(23, 13050530, 'Expensas de Parqueadero', NULL, 'Activo', 5),
(24, 13050531, 'Expensas Uso Salon Social', NULL, 'Activo', 5),
(25, 13050535, 'Otras Cuotas', NULL, 'Activo', 5),
(26, 13050536, 'Fondo de Imprevistos L.675/01', NULL, 'Activo', 5),
(27, 1330, 'ANTICIPOS Y AVANCES', NULL, 'Activo', 3),
(28, 133005, 'A PROVEEDORES', NULL, 'Activo', 4),
(29, 133010, 'A CONTRATISTAS', NULL, 'Activo', 4),
(30, 133015, 'A TRABAJADORES', NULL, 'Activo', 4),
(31, 1380, 'RESPONSABILIDADES', NULL, 'Activo', 3),
(32, 138005, 'Responsabilidad Administrador', NULL, 'Activo', 4),
(33, 1399, 'PROVISIONES', NULL, 'Activo', 3),
(34, 139905, 'Clientes', NULL, 'Activo', 4),
(35, 15, 'PROPIEDADES PLANTA Y EQUIPO', 'Comprende el conjunto de las cuentas que registran los bienes de cualquier naturaleza que posea el ente economico, con la intencion de emplearlos en forma permanente para el desarrollo del giro normal de sus negocios o que se poseen por el apoyo que prestan en la produccion de bienes y servicios, por definicion no destinados para la venta en el curso normal de los negocios y cuya vida util exceda de un a', 'Activo', 2),
(36, 1524, 'EQUIPOS DE OFICINA', NULL, 'Activo', 3),
(37, 152405, 'Muebles y Enseres', NULL, 'Activo', 4),
(38, 15240501, 'Escritorios', NULL, 'Activo', 5),
(39, 15240502, 'Mesas', NULL, 'Activo', 5),
(40, 15240503, 'Telefono', NULL, 'Activo', 5),
(41, 15240505, 'Cuadros', NULL, 'Activo', 5),
(42, 15240506, 'Bibioteca', NULL, 'Activo', 5),
(43, 15240507, 'Estanteria', NULL, 'Activo', 5),
(44, 15240508, 'Sillas', NULL, 'Activo', 5),
(45, 15240509, 'Sillas Reunion', NULL, 'Activo', 5),
(46, 15240510, 'Sillas Zona Social', NULL, 'Activo', 5),
(47, 15240511, 'Extintores', NULL, 'Activo', 5),
(48, 15240512, 'Carrito de Mercado', NULL, 'Activo', 5),
(49, 15240513, 'Sala Recepcion', NULL, 'Activo', 5),
(50, 15240514, 'Cuadros de recepcion', NULL, 'Activo', 5),
(51, 15240515, 'Sillas Giratorias Recepcion', NULL, 'Activo', 5),
(52, 15240516, 'Mesas de Centro aluminio', NULL, 'Activo', 5),
(53, 15240517, 'Sillas Recepcion', NULL, 'Activo', 5),
(54, 15240518, 'Horno Microondas', NULL, 'Activo', 5),
(55, 1526, 'Dotacion de Gimnasio', NULL, 'Activo', 3),
(56, 152605, '1 Maquina eliptica', NULL, 'Activo', 4),
(57, 152606, '1 Escaladora - Piernas', NULL, 'Activo', 4),
(58, 1528, 'EQUIPO DE COMPUTACION Y COMUNICACIoN', NULL, 'Activo', 3),
(59, 152805, 'Computador', NULL, 'Activo', 4),
(60, 152806, 'Impresora Samsung', NULL, 'Activo', 4),
(61, 152807, 'Telefono', NULL, 'Activo', 4),
(62, 1592, 'DEPRECIACION ACUMULADA', NULL, 'Activo', 3),
(63, 159215, 'EQUIPO DE OFICINA', NULL, 'Activo', 4),
(64, 15921501, 'Muebles y Enceres', NULL, 'Activo', 5),
(65, 159220, 'EQUIPO DE COMPUTACION Y COMUNICACIoN', NULL, 'Activo', 4),
(66, 15922001, 'Equipo de Computo', NULL, 'Activo', 5),
(67, 159225, 'Equipo de Gimnasio', NULL, 'Activo', 4),
(68, 17, 'DIFERIDOS', 'Comprende el conjunto de cuentas representadas en el valor de los gastos pagados por anticipado en que incurre el ente economico en el desarrollo de su actividad, asi como aquellos otros gastos comunmente denominados cargos diferidos, que representan bienes o servicios recibidos, de los cuales se espera obtener beneficios economicos en otros periodos futuros.\r\n\r\nComprende los gastos pagados por anticipado, tales como, intereses, primas de seguro, arrendamientos, contratos de mantenimiento, honorarios, comisiones y los gastos incurridos de organizacion y preoperativos, remodelaciones o adecuaciones, mejoras de oficina, estudios y proyectos, construcciones en propiedades ajenas tomadas en arrendamiento, contratos de ejecucion, contribuciones y afiliaciones e impuestos diferibles.\r\n\r\nSon objeto de amortizacion o extincion gradual correspondiente a las alicuotas mensuales resultantes del tiempo en que se considera se va a utilizar o recibir el beneficio del activo diferido, bien sea mediante un credito directo a la partida de activo o por medio de una cuenta de valuacion, con cargo a resultados.', 'Activo', 2),
(69, 1705, 'GASTOS PAGADOS POR ANTICIPADO', NULL, 'Activo', 3),
(70, 170520, 'Seguro Bienes Comunes', NULL, 'Activo', 4),
(71, 170525, 'Productos de Aseo', NULL, 'Activo', 4),
(72, 2, 'PASIVO', 'Agrupa el conjunto de las cuentas que representan las obligaciones contraidas por el ente economico en desarrollo del giro ordinario de su actividad, pagaderas en dinero, bienes o en servicios.\r\n\r\nComprende las obligaciones financieras, los proveedores, las cuentas por pagar, los impuestos, gravamenes y tasas, las obligaciones laborales, los diferidos, otros pasivos, los pasivos estimados, provisiones, los bonos y papeles comerciales.\r\n\r\nLas cuentas que integran esta clase tendran siempre saldos de naturaleza credito.\r\n\r\nLos pasivos expresados en moneda extranjera el ultimo dia del mes o a', 'Activo', 1),
(73, 23, 'CUENTAS POR PAGAR', 'Comprende las obligaciones contraidas por el ente economico a favor de terceros por conceptos diferentes a los proveedores y obligaciones financieras tales como cuentas corrientes comerciales, a casa matriz, a compa', 'Activo', 2),
(74, 2335, 'COSTOS Y GASTOS POR PAGAR', NULL, 'Activo', 3),
(75, 233525, 'Honorarios', NULL, 'Activo', 4),
(76, 23352502, 'Honorarios Contador y Revisor', NULL, 'Activo', 5),
(77, 23352504, 'Honorarios Administrador', NULL, 'Activo', 5),
(78, 233527, 'Servicio de Vigilancia', NULL, 'Activo', 4),
(79, 233528, 'Servicio de Aseo', NULL, 'Activo', 4),
(80, 233530, 'Servicios y Compras', NULL, 'Activo', 4),
(81, 233535, 'Mantenimiento Ascensores', NULL, 'Activo', 4),
(82, 233536, 'Mantenimiento Motobombas', NULL, 'Activo', 4),
(83, 233550, 'Servicios Publicos', NULL, 'Activo', 4),
(84, 233555, 'Seguros', NULL, 'Activo', 4),
(85, 2365, 'RETENCION EN LA FUENTE', NULL, 'Activo', 3),
(86, 236515, 'Honorarios', NULL, 'Activo', 4),
(87, 236520, 'Comisiones', NULL, 'Activo', 4),
(88, 236525, 'SERVICIOS', NULL, 'Activo', 4),
(89, 23652501, 'Servicios Del 6%', NULL, 'Activo', 5),
(90, 23652502, 'Servicio del  (4%)', NULL, 'Activo', 5),
(91, 23652503, 'Servicio del  (2%)', NULL, 'Activo', 5),
(92, 23652504, 'Obra civil 1%', NULL, 'Activo', 5),
(93, 236540, 'Compras', NULL, 'Activo', 4),
(94, 2380, 'Cheques No Cobrados', NULL, 'Activo', 3),
(95, 238005, 'Cheques No Cobrados', NULL, 'Activo', 4),
(96, 26, 'PASIVOS ESTIMADOS Y PROVISIONES', 'Comprende los valores provisionados por el ente economico por concepto de obligaciones para costos y gastos tales como, intereses, comisiones, honorarios, servicios, asi como para atender acreencias laborales no consolidadas determinadas en virtud de la relacion con sus trabajadores, igualmente para multas, sanciones, litigios, indemnizaciones, demandas, imprevistos, reparaciones y mantenimiento.\r\n\r\nCuando se establezca que una provision es excesiva o ha sido constituida en forma indebida, la reversion de la provision se abonara a la subcuenta 425035 -reintegro provisiones- cuando corresponda a ejercicios anteriores, o restando de los cargos si corresponde al mismo ejercicio.', 'Activo', 2),
(97, 2605, 'PARA COSTOS Y GASTOS', NULL, 'Activo', 3),
(98, 260535, 'SERVICIOS PUBLICOS', NULL, 'Activo', 4),
(99, 260545, 'Seguro Areas Comunes', NULL, 'Activo', 4),
(100, 260595, 'OTROS', NULL, 'Activo', 4),
(101, 27, 'DIFERIDOS', 'Comprende el valor de los ingresos no causados recibidos de clientes, los cuales tienen el caracter de pasivo, que debido a su origen y naturaleza han de influir economicamente en varios ejercicios, en los que deben ser aplicados o distribuidos.\r\n\r\nIgualmente registra el monto adeudado por el reajuste a las cuotas netas, para el caso de las sociedades administradoras de consorcios comerciales, la utilidad diferida en ventas a plazos, y los impuestos diferidos.', 'Activo', 2),
(102, 2705, 'INGRESOS RECIBIDOS POR ANTICIPADO', NULL, 'Activo', 3),
(103, 270505, 'INTERESES', NULL, 'Activo', 4),
(104, 270510, 'COMISIONES', NULL, 'Activo', 4),
(105, 270515, 'ARRENDAMIENTOS', NULL, 'Activo', 4),
(106, 270520, 'HONORARIOS', NULL, 'Activo', 4),
(107, 270525, 'SERVICIOS TECNICOS', NULL, 'Activo', 4),
(108, 270530, 'DE SUSCRIPTORES', NULL, 'Activo', 4),
(109, 270540, 'MERCANCIA EN TRANSITO YA VENDIDA', NULL, 'Activo', 4),
(110, 270545, 'MATRICULAS Y PENSIONES', NULL, 'Activo', 4),
(111, 270550, 'Anticipo Expensas de Administracion', NULL, 'Activo', 4),
(112, 270551, 'Anticipo Expensas de Parqueadero', NULL, 'Activo', 4),
(113, 270595, 'Anticipo Cuota Extraordinaria', NULL, 'Activo', 4),
(114, 28, 'OTROS PASIVOS', 'Comprende el conjunto de cuentas que se derivan de obligaciones a cargo del ente economico, contraidas en desarrollo de actividades que por su naturaleza especial no pueden ser incluidas apropiadamente en los demas grupos del pasivo.', 'Activo', 2),
(115, 2805, 'ANTICIPOS Y AVANCES RECIBIDOS', NULL, 'Activo', 3),
(116, 280505, 'DE CLIENTES', NULL, 'Activo', 4),
(117, 28050501, 'Depositos por Identificar', NULL, 'Activo', 5),
(118, 280510, 'Reintegros x pagar', NULL, 'Activo', 4),
(119, 280515, 'PARA OBRAS EN PROCESO', NULL, 'Activo', 4),
(120, 280595, 'OTROS', NULL, 'Activo', 4),
(121, 2810, 'DEPOSITOS RECIBIDOS', NULL, 'Activo', 3),
(122, 281095, 'Depositos Por Aplicar', NULL, 'Activo', 4),
(123, 2850, 'PROYECTOS', NULL, 'Activo', 3),
(124, 285005, 'Obras y Construcciones', NULL, 'Activo', 4),
(125, 28500501, 'Pintura Interiores', NULL, 'Activo', 5),
(126, 3, 'PATRIMONIO', 'Agrupa el conjunto de las cuentas que representan el valor residual de comparar el activo total menos el pasivo externo, producto de los recursos netos del ente economico que han sido suministrados por el propietario de los mismos, ya sea directamente o como consecuencia del giro ordinario de sus negocios. Comprende los aportes de los accionistas, socios o propietarios, el superavit de capital, reservas, la revalorizacion de patrimonio, los dividendos o participaciones decretados en acciones, cuotas o partes de interes social, los resultados del ejercicio, resultados de ejercicios anteriores y el superavit por valorizaciones.', 'Activo', 1),
(127, 31, 'CAPITAL SOCIAL', 'Comprende el valor total de los aportes iniciales y los posteriores aumentos o disminuciones que los socios, accionistas, compa', 'Activo', 2),
(128, 33, 'RESERVAS', 'Comprenden los valores que por mandato expreso del maximo organo social, se han apropiado de las utilidades liquidas de ejercicios anteriores obtenidas por el ente economico, con el objeto de cumplir disposiciones legales, estatutarias o para fines especificos.\r\n\r\nLas perdidas se enjugaran con las reservas que hayan sido destinadas especialmente para ese proposito y, en su defecto, con la reserva legal. Las reservas cuya finalidad fuere la de absorber determinadas perdidas no se podran emplear para cubrir otras distintas, salvo que asi lo decida el maximo organo social.\r\n\r\nSi la reserva legal fuere insuficiente para enjugar el deficit de capital, se aplicaran a este fin los beneficios sociales de los ejercicios siguientes, tal como lo establecen las normas legales.', 'Activo', 2),
(129, 3305, 'RESERVAS OBLIGATORIAS', NULL, 'Activo', 3),
(130, 330505, 'Fondo de Imprevistos', NULL, 'Activo', 4),
(131, 330506, 'FONDO DE IMPREVISTOS  L.675/01', NULL, 'Activo', 4),
(132, 3310, 'RESERVAS ESTATUTARIAS', NULL, 'Activo', 3),
(133, 331005, 'PARA FUTURAS CAPITALIZACIONES', NULL, 'Activo', 4),
(134, 331010, 'PARA REPOSICION DE ACTIVOS', NULL, 'Activo', 4),
(135, 331015, 'PARA FUTUROS ENSANCHES', NULL, 'Activo', 4),
(136, 331095, 'RESERVAS', NULL, 'Activo', 4),
(137, 33109501, 'Reserva Imprevistos 1999 y anteriores', NULL, 'Activo', 5),
(138, 33109502, 'Reserva Imprevistos 2000', NULL, 'Activo', 5),
(139, 33109503, 'Reserva Imprevistos 2001', NULL, 'Activo', 5),
(140, 33109504, 'Reserva Imprevistos 2002', NULL, 'Activo', 5),
(141, 33109505, 'Reserva Imprevistos 2003', NULL, 'Activo', 5),
(142, 36, 'RESULTADOS DEL EJERCICIO', 'Comprende el valor de las utilidades o perdidas obtenidas por el ente economico al cierre de cada ejercicio.', 'Activo', 2),
(143, 3605, 'UTILIDAD DEL EJERCICIO', NULL, 'Activo', 3),
(144, 360505, 'Excedente del Ejercicio', NULL, 'Activo', 4),
(145, 3610, 'PERDIDA DEL EJERCICIO', NULL, 'Activo', 3),
(146, 361005, 'Deficit del Ejercicio', NULL, 'Activo', 4),
(147, 37, 'RESULTADO DE EJERCICIOS ANTERIORES', 'Comprende el valor de los resultados obtenidos en ejercicios anteriores, por utilidades acumuladas que esten a disposicion del maximo organo social o por perdidas acumuladas no enjugadas.', 'Activo', 2),
(148, 3705, 'UTILIDADES  ACUMULADOS', NULL, 'Activo', 3),
(149, 370501, 'Excedente Acumulado', NULL, 'Activo', 4),
(150, 3710, 'PERDIDAS ACUMULADAS', NULL, 'Activo', 3),
(151, 371001, 'Deficit Acumulado', NULL, 'Activo', 4),
(152, 4, 'INGRESOS', 'Agrupa las cuentas que representan los beneficios operativos y financieros que percibe el ente economico en el desarrollo del giro normal de su actividad comercial en un ejercicio determinado.\r\n\r\nMediante el sistema de causacion se registraran como beneficios realizados y en consecuencia deben abonarse a las cuentas de ingresos los causados y no recibidos. Se entiende causado un ingreso cuando nace el derecho a exigir su pago, aunque no se haya hecho efectivo el cobro.\r\n\r\nAl final del ejercicio economico las cuentas de ingresos se cancelaran con abono al grupo 59 -ganancias y perdidas-.\r\n\r\nLos ingresos se registraran en moneda funcional, es decir en pesos, de suerte que las transacciones en moneda extranjera u otra unidad de medida deben ser reconocidas en moneda funcional utilizando la tasa de conversion, tasa de cambio o UPAC (hoy UVR) aplicable a la fecha de su ocurrencia, de acuerdo con el origen de la operacion que los genera.\r\n\r\nLos ingresos se clasifican en operacionales y no operacionales.', 'Activo', 1),
(153, 41, 'OPERACIONALES', 'Comprende los valores recibidos y/o causados como resultado de las actividades desarrolladas en cumplimiento de su objeto social mediante la entrega de bienes o servicios, asi como los dividendos, participaciones y demas ingresos por concepto de intermediacion financiera, siempre y cuando se identifique con el objeto social principal del ente economico.', 'Activo', 2),
(154, 4170, 'ACTIVIDADES DE COPROPIEDAD', NULL, 'Activo', 3),
(155, 417005, 'Expensas de Administracion', NULL, 'Activo', 4),
(156, 417010, 'Expensas Extraordinarias', NULL, 'Activo', 4),
(157, 417015, 'Servicio de Sauna', NULL, 'Activo', 4),
(158, 417020, 'Sancion y Multas de Asamblea', NULL, 'Activo', 4),
(159, 417025, 'Interese de Mora Expensas de Administracion', NULL, 'Activo', 4),
(160, 417030, 'Expensas Uso Parqueaderos', NULL, 'Activo', 4),
(161, 417031, 'Expensa Uso Salon Social', NULL, 'Activo', 4),
(162, 417035, 'Otras Expensas', NULL, 'Activo', 4),
(163, 417036, 'Fondo de Imprevistos L.675/01', NULL, 'Activo', 4),
(164, 4175, 'DESCUENTOS CONCEDIDOS (DB)', NULL, 'Activo', 3),
(165, 417505, 'Beneficio Por Pronto Pago', NULL, 'Activo', 4),
(166, 42, 'NO OPERACIONALES', 'Comprende los ingresos provenientes de transacciones diferentes a los del objeto social o giro normal de los negocios del ente economico e incluye entre otros, los item relacionados con operaciones de caracter financiero en moneda nacional o extranjera, arrendamientos, servicios, honorarios, utilidad en venta de propiedades, planta y equipo e inversiones, dividendos y participaciones, indemnizaciones, recuperaciones de deducciones e ingresos de ejercicios anteriores.', 'Activo', 2),
(167, 4210, 'FINANCIEROS', NULL, 'Activo', 3),
(168, 421005, 'Rendimientos Financieros', NULL, 'Activo', 4),
(169, 421006, 'Intereses Por Mora', NULL, 'Activo', 4),
(170, 421055, 'MULTAS Y RECARGOS', NULL, 'Activo', 4),
(171, 421095, 'OTROS', NULL, 'Activo', 4),
(172, 4295, 'DIVERSOS', NULL, 'Activo', 3),
(173, 429581, 'Ajuste al Peso', NULL, 'Activo', 4),
(174, 429582, 'Mayor Valor Consignado', NULL, 'Activo', 4),
(175, 429595, 'Otros Ingresos', NULL, 'Activo', 4),
(176, 5, 'GASTOS', 'Agrupa las cuentas que representan los cargos operativos y financieros en que incurre el ente economico en el desarrollo del giro normal de su actividad en un ejercicio economico determinado.\r\n\r\nMediante el sistema de causacion se registrara con cargo a las cuentas del estado de resultados los gastos causados pendientes de pago. Se entiende causado un gasto cuando nace la obligacion de pagarlo aunque no se haya hecho efectivo el pago.\r\n\r\nAl final del ejercicio economico las cuentas de gastos se cancelaran con cargo al grupo 59 -ganancias y perdidas-.\r\n\r\nLos gastos se registraran en moneda nacional, es decir en pesos, de suerte que las transacciones en moneda extranjera u otra unidad de medida deben ser reconocidos en moneda funcional, utilizando la tasa de conversion, tasa de cambio UPAC (hoy UVR) (aplicable en la fecha de su ocurrencia, de acuerdo con el origen de la operacion que los genera.\r\n\r\nLos gastos se clasifican en operacionales y no operacionales.', 'Activo', 1),
(177, 51, 'OPERACIONALES DE ADMINISTRACION', 'Los gastos operacionales de administracion son los ocasionados en el desarrollo del objeto social principal del ente economico y registra, sobre la base de causacion, las sumas o valores en que se incurre durante el ejercicio, directamente relacionados con la gestion administrativa encaminada a la direccion, planeacion, organizacion de las politicas establecidas para el desarrollo de la actividad operativa del ente economico incluyendo basicamente las incurridas en las areas ejecutiva, financiera, comercial, legal y administrativa.\r\n\r\nSe clasifican bajo el grupo de gastos operacionales de administracion, por conceptos tales como honorarios, impuestos, arrendamientos y alquileres, contribuciones y afiliaciones, seguros, servicios y provisiones.', 'Activo', 2),
(178, 5110, 'HONORARIOS', NULL, 'Activo', 3),
(179, 511005, 'Consejo de Administracion', NULL, 'Activo', 4),
(180, 511010, 'Revisoria Fiscal', NULL, 'Activo', 4),
(181, 511015, 'AUDITORIA EXTERNA', NULL, 'Activo', 4),
(182, 511020, 'AVALUOS', NULL, 'Activo', 4),
(183, 511025, 'Asesoria Juridica', NULL, 'Activo', 4),
(184, 511030, 'Honorarios Contador', NULL, 'Activo', 4),
(185, 511035, 'ASESORIA TECNICA', NULL, 'Activo', 4),
(186, 511095, 'OTROS', NULL, 'Activo', 4),
(187, 5115, 'IMPUESTOS', NULL, 'Activo', 3),
(188, 511505, 'INDUSTRIA Y COMERCIO', NULL, 'Activo', 4),
(189, 511510, 'DE TIMBRES', NULL, 'Activo', 4),
(190, 511515, 'A la propiedad Raiz', NULL, 'Activo', 4),
(191, 511520, 'DERECHOS SOBRE INSTRUMENTOS', NULL, 'Activo', 4),
(192, 511525, 'DE VALORIZACION', NULL, 'Activo', 4),
(193, 511530, 'DE TURISMO', NULL, 'Activo', 4),
(194, 511535, 'TASA POR UTILIZACION DE PUERTOS', NULL, 'Activo', 4),
(195, 511540, 'DE VEHICULOS', NULL, 'Activo', 4),
(196, 511545, 'DE ESPECTACULOS PUBLICOS', NULL, 'Activo', 4),
(197, 511550, 'CUOTAS DE FOMENTO', NULL, 'Activo', 4),
(198, 511570, 'IVA DESCONTABLE', NULL, 'Activo', 4),
(199, 511595, 'OTROS', NULL, 'Activo', 4),
(200, 5135, 'SERVICIOS', NULL, 'Activo', 3),
(201, 513501, 'Revisoria Fiscal', NULL, 'Activo', 4),
(202, 513502, 'Servicio de Vigilancia', NULL, 'Activo', 4),
(203, 513503, 'Servicio de Aseadoras', NULL, 'Activo', 4),
(204, 513504, 'Servicio de Contabilidad', NULL, 'Activo', 4),
(205, 513505, 'Servicio de Administracion', NULL, 'Activo', 4),
(206, 513506, 'Seguro Zonas Comunes', NULL, 'Activo', 4),
(207, 513525, 'Acueducto  y  Alcantarillado', NULL, 'Activo', 4),
(208, 513530, 'Energia Electrica', NULL, 'Activo', 4),
(209, 513535, 'Telefono', NULL, 'Activo', 4),
(210, 5145, 'MANTENIMIENTO Y REPARACIONES', NULL, 'Activo', 3),
(211, 514505, 'Mantenimientos Generales', NULL, 'Activo', 4),
(212, 51450501, 'Mantenimiento Ascensores', NULL, 'Activo', 5),
(213, 51450502, 'Repuestos Ascensores', NULL, 'Activo', 5),
(214, 51450503, 'Mantenimiento Puertas', NULL, 'Activo', 5),
(215, 51450504, 'Elementos Electricos', NULL, 'Activo', 5),
(216, 51450505, 'Recarga de Extintores', NULL, 'Activo', 5),
(217, 51450506, 'Fumigacion', NULL, 'Activo', 5),
(218, 51450507, 'Mantenimiento Equipo Hidroneumatico', NULL, 'Activo', 5),
(219, 51450508, 'Reparaciones Equipo Hidroneumatico', NULL, 'Activo', 5),
(220, 51450509, 'Saneamiento de tanques y pozos', NULL, 'Activo', 5),
(221, 51450510, 'Reparaciones Locativas', NULL, 'Activo', 5),
(222, 51450511, 'Tapetes', NULL, 'Activo', 5),
(223, 51450512, 'Mantenimiento Marquesinas', NULL, 'Activo', 5),
(224, 51450513, 'Mantenimiento Citofonia', NULL, 'Activo', 5),
(225, 51450514, 'Gimnasio', NULL, 'Activo', 5),
(226, 51450515, 'Mantenimiento Jardines', NULL, 'Activo', 5),
(227, 51450516, 'Arreglo Jardines', NULL, 'Activo', 5),
(228, 51450517, 'Cambio recepciones', NULL, 'Activo', 5),
(229, 51450518, 'Arreglo Cubiertas', NULL, 'Activo', 5),
(230, 5160, 'Depreciacion', NULL, 'Activo', 3),
(231, 516005, 'Depreciacion', NULL, 'Activo', 4),
(232, 5195, 'ADMINISTRATIVOS', NULL, 'Activo', 3),
(233, 519525, 'Elementos de Aseo y de Cafeteria', NULL, 'Activo', 4),
(234, 519530, 'Utiles y Papeleria', NULL, 'Activo', 4),
(235, 519545, 'Fotocopias', NULL, 'Activo', 4),
(236, 519550, 'Transporte', NULL, 'Activo', 4),
(237, 519555, 'Cerrajeria', NULL, 'Activo', 4),
(238, 519560, 'Celebraciones ni', NULL, 'Activo', 4),
(239, 519565, 'Gastos Navide', NULL, 'Activo', 4),
(240, 519570, 'Gastos de Asamblea', NULL, 'Activo', 4),
(241, 519575, 'Gastos Bancarios', NULL, 'Activo', 4),
(242, 519595, 'Gastos ajustes de Cartera', NULL, 'Activo', 4),
(243, 519596, 'Otros', NULL, 'Activo', 4),
(244, 519597, 'Fondo de Imprevistos', NULL, 'Activo', 4),
(245, 5199, 'PROVISIONES', NULL, 'Activo', 3),
(246, 519905, 'INVERSIONES', NULL, 'Activo', 4),
(247, 519909, 'Fondo de imprevistos L.675/2001', NULL, 'Activo', 4),
(248, 519910, 'Fondo de Reserva', NULL, 'Activo', 4),
(249, 519915, 'PROPIEDADES PLANTA Y EQUIPO', NULL, 'Activo', 4),
(250, 519995, 'OTROS ACTIVOS', NULL, 'Activo', 4),
(251, 53, 'NO OPERACIONALES', 'Comprende las sumas pagadas y/o causadas por gastos no relacionados directamente con la explotacion del objeto social del ente economico. Se incorporan conceptos tales como: financieros, perdidas en venta y retiro de bienes, gastos extraordinarios y gastos diversos.', 'Activo', 2),
(252, 5305, 'FINANCIEROS', NULL, 'Activo', 3),
(253, 530505, 'Gastos Bancarios', NULL, 'Activo', 4),
(254, 530595, 'OTROS', NULL, 'Activo', 4),
(255, 5315, 'GASTOS EXTRAORDINARIOS', NULL, 'Activo', 3),
(256, 531515, 'COSTOS Y GASTOS EJERCICIOS ANTERIORES', NULL, 'Activo', 4),
(257, 531520, 'Impuestos Asumidos', NULL, 'Activo', 4),
(258, 54, 'IMPUESTO DE RENTA Y', 'Comprende los impuestos por concepto de renta y complementarios liquidados conforme a las normas legales vigentes.', 'Activo', 2),
(259, 5405, 'IMPUESTO DE RENTA Y', NULL, 'Activo', 3),
(260, 540505, 'IMPUESTO DE RENTA Y', NULL, 'Activo', 4),
(261, 59, 'GANANCIAS Y PERDIDAS', 'Agrupa las cuentas de resultados al cierre del ejercicio economico con el fin de establecer la utilidad o perdida del ente economico. Su saldo podra ser debito o credito segun el resultado obtenido.\r\n\r\nCuenta: 5905 -Ganancias y perdidas-.', 'Activo', 2),
(262, 5905, 'GANANCIAS Y PERDIDAS', NULL, 'Activo', 3),
(263, 590505, 'GANANCIAS Y PERDIDAS', NULL, 'Activo', 4),
(264, 11, '1', '1', 'Activo', 2),
(265, 111, '1', '1', 'Activo', 3),
(266, 1111, '1', '1', 'Activo', 4),
(267, 11111, '1', '1', 'Activo', 5),
(268, 1111111111, '1111111', '111111', 'Activo', 2),
(269, 2147483647, '11111111', '11111111', 'Activo', 3),
(270, 2147483647, '11111', '11111', 'Activo', 3),
(271, 11051001, 'caja menor autorizada', 'descipcion caja menor autorizada', 'Activo', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regimen`
--

CREATE TABLE IF NOT EXISTS `regimen` (
  `idregimen` int(11) NOT NULL AUTO_INCREMENT,
  `nombreregimen` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idregimen`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `regimen`
--

INSERT INTO `regimen` (`idregimen`, `nombreregimen`, `descripcion`) VALUES
(1, 'Comun', NULL),
(2, 'Simplificado', NULL),
(3, 'Gran Contribuyente', NULL),
(4, 'Autorretenedores', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repositorio`
--

CREATE TABLE IF NOT EXISTS `repositorio` (
  `IdRepositorio` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Indice de Repositorios',
  `Columnas` varchar(255) DEFAULT NULL COMMENT 'Se coloca las Columnas de las Tablas modificadas o eliminadas',
  `Tabla` varchar(255) DEFAULT NULL COMMENT 'Se coloca el nombre de la Tabla de donde se eliminaron los datos',
  `FechaEliminacion` datetime DEFAULT NULL COMMENT 'Se coloca la fecha de Eliminacion',
  `IdUsuario` int(11) DEFAULT NULL COMMENT 'Se Coloca el Indice del Usuario que Elimino los datos',
  `Usuario` varchar(255) DEFAULT NULL COMMENT 'Se ingresa el dato del Usuario',
  PRIMARY KEY (`IdRepositorio`),
  KEY `IdUsuario` (`IdUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `repositorio`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `residentes`
--

CREATE TABLE IF NOT EXISTS `residentes` (
  `IdResidentes` int(11) NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(255) DEFAULT NULL COMMENT 'En esta columna se colocan los Nombres de los Propietarios o los residentes',
  `Apellidos` varchar(255) DEFAULT NULL COMMENT 'En esta columna se colocan los Apellidos de los Propietarios o los residentes',
  `IdTipoidentificacion` int(11) DEFAULT NULL COMMENT 'Este dato viene de la Tabla Identificacion',
  `NoDocumento` varchar(255) DEFAULT NULL COMMENT 'Se coloca el numero de documento',
  `Telefono` int(11) DEFAULT NULL COMMENT 'Se coloca el numero de Telefono Fijo',
  `Celular` int(11) DEFAULT NULL COMMENT 'Se coloca el numero de Telefono movil',
  `Direccion` varchar(255) DEFAULT NULL COMMENT 'Se llena en caso de que la persona viva en otro sitio',
  `FechaNacimiento` date DEFAULT NULL COMMENT 'Se coloca la fecha de Nacimiento',
  `LugarNacimiento` varchar(255) DEFAULT NULL COMMENT 'Se coloca la ciudad de Nacimiento',
  `IdGenero` int(11) DEFAULT NULL COMMENT 'Este dato viene de la Tabla Genero',
  `NombreContacto` varchar(255) DEFAULT NULL COMMENT 'Se ingresa el nombre de una persona de contacto',
  `TelefonoContacto` int(11) DEFAULT NULL COMMENT 'Se coloca el numero de Telefono del contacto',
  `CelefonoContacto` int(11) DEFAULT NULL COMMENT 'se Coloca el numero de tel',
  `Email` varchar(255) DEFAULT NULL COMMENT 'Se coloca la direcci',
  `IdUnidadV` int(11) DEFAULT NULL COMMENT 'Trae la informaci',
  `Residente` int(11) DEFAULT NULL COMMENT 'se coloca el identificador si es Residente',
  `Propietario` int(11) DEFAULT '0' COMMENT 'se coloca el identificador si es Propietario',
  `FechaIngreso` date DEFAULT NULL COMMENT 'se ingresa la fecha de ingreso del Residente',
  `IdUsuario_Creacion` varchar(255) DEFAULT NULL,
  `Fecha_Creacion` datetime DEFAULT NULL,
  `IdUsuario_Modificacion` varchar(255) DEFAULT NULL,
  `Fecha_Modificacion` datetime DEFAULT NULL,
  PRIMARY KEY (`IdResidentes`),
  KEY `IdTipoidentificacion` (`IdTipoidentificacion`),
  KEY `IdGenero` (`IdGenero`),
  KEY `IdUnidadV` (`IdUnidadV`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=241 ;

--
-- Volcar la base de datos para la tabla `residentes`
--

INSERT INTO `residentes` (`IdResidentes`, `Nombres`, `Apellidos`, `IdTipoidentificacion`, `NoDocumento`, `Telefono`, `Celular`, `Direccion`, `FechaNacimiento`, `LugarNacimiento`, `IdGenero`, `NombreContacto`, `TelefonoContacto`, `CelefonoContacto`, `Email`, `IdUnidadV`, `Residente`, `Propietario`, `FechaIngreso`, `IdUsuario_Creacion`, `Fecha_Creacion`, `IdUsuario_Modificacion`, `Fecha_Modificacion`) VALUES
(1, 'Celia Rosalia', 'Bessada Ovies', 1, '7460052', 5667631, 1938279434, '', '1992-03-11', 'Bogota', 2, '_', 1342522, 2147483647, 'dictum@elit.ca', 17, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(2, 'Enrique German', 'Stornaiuolo Saade', 1, '7462341', 2817107, 2147483647, NULL, '1994-09-09', 'Bogota', 1, 'Raul O. Arz', 3329722, 2147483647, 'ipsum@tincidunt.net', 25, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(3, 'Basilio Jesus', 'Solorzano Potes', 1, '7595092', 7863994, 2147483647, NULL, '1987-03-02', 'Bogota', 1, 'Vilma X. Zabaleta', 6624659, 2147483647, 'Nulla@etmalesuadafames.com', 21, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(4, 'Regina Vilma', 'Tribin Shiffman', 1, '7878906', 6444818, 1554196352, NULL, '1978-05-06', 'Bogota', 2, 'Xochitl B. Willis', 2758289, 2147483647, 'enim@euodiotristique.com', 38, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(5, 'Jairo Gerardo', 'Centura Carre', 1, '7952148', 3061915, 2147483647, NULL, '1988-09-29', 'Bogota', 1, 'Lazaro A. Almeida', 6948247, 2147483647, 'convallis.in.cursus@laoreetposuere.ca', 38, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(6, 'Eliana Rosana', 'Martina Pomp', 1, '8064300', 3188683, 2034669600, NULL, '1971-08-21', 'Bogota', 2, 'Cora U. Valenzuela', 3760942, 2147483647, 'dictum.mi@eratin.edu', 47, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(7, 'Sonia Florinda', 'Tarquino Canola', 1, '8327514', 7839589, 2147483647, NULL, '1959-09-26', 'Bogota', 2, 'Walter A. Sibar', 6426942, 1917620169, 'vestibulum.Mauris.magna@liberodui.edu', 31, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(8, 'Homero Jesus', 'Perfetti Brunal', 1, '8689147', 5438644, 1198364883, NULL, '1956-04-19', 'Bogota', 1, 'Serena V. Pote', 8280621, 2147483647, 'quis@orcilobortis.ca', 28, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(9, 'Martin omar', 'Privatelli Rumazo', 1, '8789855', 5515569, 2147483647, '', '1979-11-20', 'Bogota', 1, 'Andre R. Quiceno_', 6557617, 2147483647, 'leo@commodoauctor.com', 3, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(10, 'Samanta Ximena', 'Fiorenzano Roth', 1, '9259063', 2840259, 2147483647, NULL, '1960-03-31', 'Bogota', 2, 'Dolores Y. Wood', 7771576, 2147483647, 'Maecenas@metusAenean.com', 29, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(11, 'Tomas Federico', 'Ran Rico', 1, '9339172', 6007966, 2147483647, NULL, '1991-04-04', 'Bogota', 1, 'Franco V. Prieur', 4873842, 2147483647, 'egestas@nisl.net', 13, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(12, 'Yadira Gertrudis', 'Gasaro Urquiza', 1, '9650451', 8157718, 2147483647, NULL, '1992-08-01', 'Bogota', 2, 'Adela T. Jara', 4568877, 2147483647, 'vestibulum.lorem@penatibus.com', 34, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(13, 'Araceli Irene', 'Brinkerhoff Pereda', 1, '9847290', 6831226, 2147483647, NULL, '1967-11-20', 'Bogota', 2, 'Antonia O. Anguiano', 5241160, 2147483647, 'odio@infelis.com', 71, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(14, 'Clemente Dario', 'Bruson Lagoeyte', 1, '10529357', 2369408, 2147483647, NULL, '1968-08-28', 'Bogota', 1, 'Zoraida P. Cleves', 6833477, 2147483647, 'urna.et@Donecatarcu.com', 42, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(15, 'Emiliano Felix', 'Ruethlisberger Pineres', 1, '11094696', 5271871, 2147483647, NULL, '1994-11-07', 'Bogota', 1, 'Samara T. Cazar', 4376623, 2147483647, 'ultrices.sit.amet@scelerisquemollis.co.uk', 73, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(16, 'Linda Paloma', 'Riva Ballen', 1, '11410553', 1721766, 2147483647, NULL, '1983-08-25', 'Bogota', 2, 'Cornelio B. Antig?edad', 6676288, 2147483647, 'augue@acmetus.org', 69, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(17, 'Leopoldo Carmelo', 'Pina Tirc', 1, '11916381', 5305459, 2147483647, NULL, '1991-12-01', 'Bogota', 1, 'Yajaira L. Villamor', 4356807, 2147483647, 'augue.malesuada@sollicitudinadipiscingligula.org', 68, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(18, 'Elvira Ruth', 'Angadelo Romay', 1, '12007934', 9602008, 2147483647, NULL, '1991-09-30', 'Bogota', 2, 'Ernesto G. Borray', 5549793, 2147483647, 'elit.pretium.et@congue.edu', 19, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(19, 'Azucena Samanta', 'Townsend Schroeder', 1, '12236816', 3245477, 1376953119, NULL, '1984-12-25', 'Bogota', 2, 'Teresa H. Perfetti', 6740131, 2147483647, 'ultrices.a@Classaptenttaciti.com', 30, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(20, 'Eduardo Walter', 'Valiente Cleves', 1, '12337524', 2332292, 2147483647, NULL, '1966-07-18', 'Bogota', 1, 'Elena Y. Camarasa', 3617032, 2147483647, 'Sed.auctor@liberoatauctor.ca', 25, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(21, 'Daniela Dinora', 'Uriza Villafane', 1, '12628204', 1552926, 2147483647, NULL, '1987-05-04', 'Bogota', 2, 'Paloma D. Sabater', 8553300, 2147483647, 'diam@Proinmi.edu', 68, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(22, 'Fausto Jacinto', 'Oette Bula', 1, '13154632', 9966738, 1594939019, NULL, '1977-03-25', 'Bogota', 1, 'Pablo H. Bandera', 1883742, 2147483647, 'mauris.eu.elit@maurissitamet.co.uk', 40, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(23, 'Alexandra Trinidad', 'Recan Aquilino', 1, '13381225', 6458630, 2147483647, NULL, '1989-04-17', 'Bogota', 2, 'Bruno I. Zuluaga', 4573138, 2147483647, 'ipsum.dolor@placeratorci.edu', 17, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(24, 'Pablo Fidel', 'Yanguas Tena', 1, '13511688', 5164750, 1813636994, NULL, '1974-05-05', 'Bogota', 1, 'Adela F. Schrader', 1440661, 2147483647, 'pede.ultrices.a@Suspendissealiquetmolestie.edu', 47, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(25, 'Javier Rogelio', 'Villarraga Kalckar', 1, '13935119', 8331170, 2147483647, NULL, '1990-04-20', 'Bogota', 1, 'valentina S. Tapicha', 4594271, 2147483647, 'tempor.bibendum@nonenim.net', 36, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(26, 'Sabrina Victoria', 'Prompt Seleno', 1, '14328796', 3898295, 2147483647, NULL, '1984-04-12', 'Bogota', 2, 'Valentino U. Reyes', 4533870, 2147483647, 'porttitor@ipsumleoelementum.edu', 56, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(27, 'Dario Hector', 'Umba Lacoste', 1, '15464050', 2112182, 2147483647, NULL, '1971-07-13', 'Bogota', 1, 'Alonso Y. Peuluey', 2804188, 2147483647, 'non@Ut.net', 36, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(28, 'Sol Carmen', 'Koros Urquiola', 1, '15631134', 8277396, 2147483647, NULL, '1963-02-01', 'Bogota', 2, 'Dario M. Calancha', 4063136, 2147483647, 'Cras.vulputate.velit@velitjusto.org', 6, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(29, 'Melisa Fatima', 'Cerra Tsao', 1, '16851074', 4258133, 2147483647, NULL, '1957-10-24', 'Bogota', 2, 'Marvin H. Narvaez', 1365239, 2147483647, 'Donec@Loremipsumdolor.com', 20, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(30, 'Encarnacion Vivian', 'Cera Aliaga', 1, '17350036', 1192216, 2147483647, NULL, '1992-11-19', 'Bogota', 2, 'Elias Q. Gaillard', 7894569, 2147483647, 'lorem@magnisdis.com', 14, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(31, 'Dulce Paola', 'Urbano Balanta', 1, '17485077', 2398569, 2027228542, NULL, '1955-10-20', 'Bogota', 2, 'Lazaro H. Cabal', 9311575, 2147483647, 'Proin.dolor.Nulla@Donec.net', 38, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(32, 'Elizabeth Miriam', 'Laitano Celemin', 1, '17835266', 9956881, 2147483647, NULL, '1981-02-13', 'Bogota', 2, 'Juliana C. Archer', 7184362, 2147483647, 'Nunc.sollicitudin.commodo@egestas.com', 20, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(33, 'Nicolas Bruno', 'Klinkert Pintor', 1, '18309051', 7661614, 2147483647, NULL, '1988-09-12', 'Bogota', 1, 'Cruz V. Lehman', 6565129, 2147483647, 'lacus@Duisgravida.edu', 13, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(34, 'Greta Yadira', 'Sopo Salido', 1, '18672973', 2410435, 2147483647, NULL, '1989-08-04', 'Bogota', 2, 'Flora U. Carriazo', 9365635, 2147483647, 'elit.fermentum.risus@libero.net', 67, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(35, 'Sol Rocio', 'Subieta Liendo', 1, '19380218', 5267879, 2147483647, NULL, '1969-08-23', 'Bogota', 2, 'Andre S. Schurer', 4416059, 1129428506, 'mauris@mollis.ca', 41, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(36, 'Fatima Zita', 'Vieira Pineiro', 1, '19448883', 8485734, 2147483647, NULL, '1957-06-25', 'Bogota', 2, 'Rene M. Perafan', 9869686, 1104194011, 'posuere.at.velit@duiCras.co.uk', 24, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(37, 'Marisol Veronica', 'Viga Canavera', 1, '20288879', 7198864, 2147483647, NULL, '1989-11-15', 'Bogota', 2, 'Concepcion V. Yaza', 2809695, 2147483647, 'nunc.risus.varius@nuncrisusvarius.ca', 54, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(38, 'Marta Samara', 'Willis Salido', 1, '21046478', 5494601, 2147483647, NULL, '1979-04-10', 'Bogota', 2, 'Gloria K. Rasch', 2419265, 2147483647, 'at@vulputatedui.co.uk', 27, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(39, 'Vilma Jasmin', 'Norena Duran', 1, '21188385', 5230673, 2147483647, NULL, '1971-03-28', 'Bogota', 2, 'Angelica I. Agudelo', 1917585, 2147483647, 'augue.scelerisque.mollis@at.ca', 77, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(40, 'Fernando Adrian', 'Serrate Vitto', 1, '22323639', 4553560, 2147483647, '', '1982-05-31', 'Bogota', 1, '_', 6361203, 1849019823, 'Aliquam@nonummyipsum.net', 10, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(41, 'Osvaldo Romeo', 'Noya Ibarg?en', 1, '22369415', 7602830, 2147483647, NULL, '1974-07-13', 'Bogota', 1, 'Florencia E. Yipula', 4947595, 2119677812, 'tortor.Integer@Nulla.edu', 48, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(42, 'Filiberto Max', 'Cuellar Rico', 1, '22440368', 6070361, 2147483647, NULL, '1980-05-29', 'Bogota', 1, 'Emiliano O. Kemble', 7041785, 2147483647, 'leo.Morbi.neque@dui.net', 26, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(43, 'Karina Alicia', 'Benitez Schwabe', 1, '22870666', 8896480, 2147483647, NULL, '1961-01-11', 'Bogota', 2, 'Amanda D. Licasale', 3755760, 2147483647, 'blandit.viverra@rhoncusidmollis.org', 74, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(44, 'Ema Samanta', 'Poca Quiceno', 1, '23177368', 9546090, 2147483647, NULL, '1966-05-03', 'Bogota', 2, 'Ruben M. Pulido', 5978783, 2147483647, 'egestas.a.scelerisque@metusfacilisis.edu', 8, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(45, 'Ismael angel', 'Subieta Cartagena', 1, '23239166', 5024355, 2147483647, NULL, '1978-05-28', 'Bogota', 1, 'Aldo X. Videla', 1746205, 2147483647, 'eu.placerat@tristiqueac.net', 20, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(46, 'Patricio Fermin', 'Anda Pincha', 1, '23243744', 7424488, 1849504375, NULL, '1985-11-30', 'Bogota', 1, 'Roger R. Heras', 6607236, 2147483647, 'dolor.dolor@sapienCrasdolor.co.uk', 22, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(47, 'Samara Rosana', 'Gallo Tarazona', 1, '23381073', 5860317, 2147483647, NULL, '1991-03-10', 'Bogota', 2, 'Dario V. Manas', 5395817, 2147483647, 'cursus.Integer.mollis@purusaccumsaninterdum.co.uk', 43, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(48, 'Estefania Rebeca', 'Barberena Sarda', 1, '23527557', 7005412, 2147483647, NULL, '1978-10-05', 'Bogota', 2, 'omar F. Villaseca', 5265714, 2147483647, 'feugiat.metus@turpisvitae.com', 23, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(49, 'German Edgardo', 'Pernett Anaya', 1, '23625976', 1942761, 2147483647, NULL, '1980-07-10', 'Bogota', 1, 'valentina Q. Carazas', 2294438, 2147483647, 'ipsum.dolor@dapibusgravida.com', 5, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(50, 'Cintia Ana', 'Zachinson Vinasco', 1, '23932678', 2692370, 2147483647, '', '1984-10-31', 'Bogota', 2, '_', 5768805, 2147483647, 'Nullam@Sednulla.edu', 9, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', '1', '2013-04-07 22:03:03'),
(51, 'Jose Sebastian', 'Borda Peramato', 1, '25415832', 2335013, 2147483647, NULL, '1984-07-08', 'Bogota', 1, 'Ida P. Manzur', 7086703, 2147483647, 'ornare.libero.at@Proin.ca', 56, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(52, 'Constantino Luciano', 'Silvestre Schimoz', 1, '25525696', 6201114, 1089861436, NULL, '1967-07-26', 'Bogota', 1, 'Monica J. Gardeazabal', 1205848, 2147483647, 'dui.Cum@tempor.ca', 41, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(53, 'Bruno Donato', 'Carrasquilla Salvatierra', 1, '25699646', 2816037, 2147483647, NULL, '1974-10-15', 'Bogota', 1, 'Homero F. Wickman', 9143518, 2147483647, 'viverra.Donec@fringillacursuspurus.edu', 64, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(54, 'Mario Fernando', 'Garaves Power', 1, '26583130', 6518861, 2147483647, NULL, '1983-12-13', 'Bogota', 1, 'Aida T. Coady', 4111685, 2147483647, 'vulputate.eu.odio@nasceturridiculus.co.uk', 46, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(55, 'Higinia Samanta', 'Durango Brauer', 1, '27006561', 9794270, 2147483647, NULL, '1962-05-26', 'Bogota', 2, 'Sonia U. Sarmati', 6087424, 2147483647, 'et@enimMauris.ca', 20, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(56, 'Eleonor Ines', 'Raondo Rosas', 1, '27294952', 2665338, 2147483647, '', '1957-07-17', 'Bogota', 2, '_', 7770258, 2147483647, 'sit@egestashendrerit.com', 12, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(57, 'Julieta Trinidad', 'Mares Ferrucci', 1, '28697998', 8140364, 1048745074, NULL, '1988-03-17', 'Bogota', 2, 'Jacinto C. Canarte', 6937335, 2147483647, 'commodo@orciluctus.com', 18, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(58, 'Blanca Amelia', 'Leano Urretavisque', 1, '29778320', 9526705, 2147483647, NULL, '1982-09-29', 'Bogota', 2, 'Mayerli W. Vicuna', 6673467, 2147483647, 'Morbi.non.sapien@aliquameuaccumsan.com', 49, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(59, 'Constantino Ezequiel', 'Palacio Zubiaurre', 1, '29954559', 2480104, 2147483647, NULL, '1971-03-17', 'Bogota', 1, 'Amara U. Perlaza', 8716628, 2147483647, 'mauris.ut@elita.net', 25, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(60, 'Cruz Marco', 'Piedrahita Lanz', 1, '30188019', 6413716, 2147483647, NULL, '1977-09-17', 'Bogota', 1, 'Julio X. Lee', 5728615, 2147483647, 'cursus.vestibulum@sitamet.org', 57, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(61, 'Hugo Josue', 'Gonzalez Mancini', 1, '30309326', 2439650, 2147483647, NULL, '1956-11-11', 'Bogota', 1, 'Elvira G. Levenson', 3569636, 2147483647, 'Maecenas@rutrumeu.edu', 35, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(62, 'Fermin Julian', 'Cazar Zerda', 1, '30423767', 7705894, 2147483647, NULL, '1977-08-08', 'Bogota', 1, 'angel J. Tumani', 9487016, 1462461495, 'risus@scelerisqueduiSuspendisse.net', 71, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(63, 'Dina Consuelo', 'Raymond Ceron', 1, '30654938', 6598839, 2147483647, NULL, '1954-10-23', 'Bogota', 2, 'Sandra M. Arcaya', 1913394, 1206702593, 'massa.non.ante@Pellentesqueultriciesdignissim.net', 73, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(65, 'Adelmo Joaquin', 'Igarai Zabala', 1, '31174499', 7451931, 2147483647, NULL, '1985-10-16', 'Bogota', 1, 'Donato G. Walschap', 9074414, 1932954745, 'Mauris@sollicitudincommodo.net', 47, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(66, 'Liliana Dulce', 'Ugarriza Sancristobal', 1, '31398804', 7604267, 1895939053, NULL, '1977-05-02', 'Bogota', 2, 'Efrain E. Lecuna', 5343167, 2147483647, 'dignissim.tempor@libero.ca', 76, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(67, 'Antonio Fernando', 'Tibaquira Schea', 1, '31506378', 6331792, 1368657431, NULL, '1985-04-22', 'Bogota', 1, 'Ronaldo O. Paulian', 5731567, 2147483647, 'ac.ipsum.Phasellus@euodiotristique.ca', 76, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(68, 'Florencio Jesus', 'Calderon Fex', 1, '32211334', 3848669, 2147483647, NULL, '1958-09-20', 'Bogota', 1, 'Renato E. Schnepel', 4969298, 2147483647, 'quam@natoquepenatibus.net', 61, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(69, 'Antonio Flavio', 'Afanador Gamio', 1, '32225067', 9128088, 2147483647, NULL, '1994-10-04', 'Bogota', 1, 'Gracia Q. Ronderos', 6742850, 1621149307, 'neque.sed.dictum@lectusantedictum.ca', 21, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(70, 'Estrella Mariana', 'Umbarita Sternberg', 1, '32579834', 9177434, 2147483647, NULL, '1969-01-13', 'Bogota', 2, 'Zita U. Price', 9800014, 2147483647, 'lorem.luctus.ut@vestibulumnec.com', 42, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(71, 'Nicolas Adelmo', 'Quirama Dieck', 1, '33149750', 5488049, 2147483647, NULL, '1970-07-09', 'Bogota', 1, 'Donato F. Roba', 4939092, 2147483647, 'dignissim@at.org', 71, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(72, 'Pedro Alberto', 'Arcesse Cano', 1, '34529907', 9984390, 2147483647, NULL, '1971-04-06', 'Bogota', 1, 'Israel X. Zarate', 3327870, 1434402706, 'amet.lorem@ipsumnon.org', 6, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(73, 'Isadora Macarena', 'Berroeta Bertoita', 1, '34971649', 2740251, 2147483647, NULL, '1967-02-12', 'Bogota', 2, 'Amelia K. Yusti', 2240435, 1522852427, 'dolor.sit.amet@diamvelarcu.edu', 12, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(74, 'Angelica Ruth', 'Garrido Zipaquira', 1, '34983093', 3770094, 2147483647, NULL, '1967-07-23', 'Bogota', 2, 'Cesar I. Liendo', 7525352, 2147483647, 'a.neque.Nullam@Vivamus.org', 62, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(75, 'Rosalia Ada', 'Umba Vidual', 1, '35598785', 1230889, 2147483647, NULL, '1955-07-18', 'Bogota', 2, 'Jaime Q. Alvira', 7060209, 2147483647, 'Cum.sociis@CurabiturdictumPhasellus.edu', 54, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(76, 'Ruben Franco', 'Aulestia Bossa', 1, '35736114', 8686718, 2147483647, NULL, '1988-03-05', 'Bogota', 1, 'Ignacio Y. Russell', 6334007, 2147483647, 'In.faucibus@pedeacurna.ca', 75, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(77, 'Gustavo Leopoldo', 'Estrella Zuluaga', 1, '35747558', 9616550, 2147483647, NULL, '1957-03-26', 'Bogota', 1, 'Dina T. Castaneda', 8683403, 2147483647, 'quis.urna@elitelit.net', 8, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(78, 'Delia Angelina', 'Simo Canavera', 1, '35763580', 2155536, 2147483647, NULL, '1990-03-18', 'Bogota', 2, 'Martin Z. Upegui', 4642720, 2147483647, 'mi.lacinia@eunulla.edu', 79, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(79, 'Domingo Vladimir', 'Prisco Aunque', 1, '35802490', 6654106, 2147483647, NULL, '1968-10-02', 'Bogota', 1, 'Alexis N. Echegoyen', 4061047, 2147483647, 'leo@sapienmolestieorci.org', 29, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(80, 'Ramiro Horacio', 'Salgado Verderamo', 1, '36161835', 8002794, 2147483647, NULL, '1964-04-13', 'Bogota', 1, 'Sonia A. Pisa', 3204241, 2147483647, 'neque.pellentesque.massa@maurissagittis.org', 45, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(81, 'Manuel Guillermo', 'Antonio Toquica', 1, '36683685', 5016363, 1324331211, NULL, '1970-06-11', 'Bogota', 1, 'Rafael L. Liano', 3370212, 2147483647, 'lorem.fringilla.ornare@acfacilisis.net', 14, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(82, 'Alejo Santiago', 'Lafaurie Rosasco', 1, '36788971', 7592321, 2147483647, NULL, '1974-04-18', 'Bogota', 1, 'Julia A. Soberon', 2119162, 2147483647, 'felis@semconsequat.com', 15, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(83, 'Adela Rocio', 'Burgos Turriago', 1, '36885101', 4299014, 2147483647, NULL, '1979-06-04', 'Bogota', 2, 'Higinio L. Pungiluppi', 8255677, 2147483647, 'eget.tincidunt.dui@enimdiamvel.com', 40, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(84, 'Celso Hipolito', 'Prias Wester', 1, '37141449', 1301200, 2147483647, NULL, '1962-08-15', 'Bogota', 1, 'Catalina W. Pungiluppi', 7157336, 2147483647, 'libero.et@lobortisultrices.com', 63, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(85, 'Lilia Vilma', 'Antes Rosano', 1, '38022644', 9763577, 2147483647, NULL, '1960-05-03', 'Bogota', 2, 'Israel B. Perea', 4499285, 1578552680, 'mus.Aenean@luctus.com', 55, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(86, 'America Nuria', 'Sampedro Corral', 1, '39022858', 7981101, 2147483644, '', '1956-12-31', 'Bogota', 2, '_', 9519363, 2147483647, 'ornare.In@vulputatenisi.edu', 7, 0, 2, '2012-12-09', 'NULL', '0000-00-00 00:00:00', '1', '2013-04-25 23:20:23'),
(87, 'Jeremias Marvin', 'Loor Longas', 1, '39226562', 2205329, 2147483647, NULL, '1956-03-15', 'Bogota', 1, 'Florencio Q. Ablanque', 4071658, 2147483647, 'sed.dictum.eleifend@vitae.com', 14, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(88, 'Diana Norma', 'Borigoff Strasbugh', 1, '39512665', 8036919, 2147483647, NULL, '1962-04-08', 'Bogota', 2, 'Yadira L. Sasson', 6230149, 2147483647, 'velit.dui.semper@musProinvel.ca', 19, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(89, 'Rocio Ximena', 'Villoria Kelly', 1, '39949829', 8492738, 2147483647, NULL, '1958-09-18', 'Bogota', 2, 'Griselda Q. Pemberthy', 6395668, 2147483647, 'posuere@imperdieterat.org', 32, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(90, 'Yamila Leonora', 'Kopp Zipamocha', 1, '40963776', 3809782, 2147483647, NULL, '1978-06-14', 'Bogota', 2, 'Cristian M. Bejarano', 6304550, 2147483647, 'non.arcu@Sedidrisus.edu', 25, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(92, 'Amalia Celina', 'Buenes Alban', 1, '41741974', 6035657, 2147483647, NULL, '1993-03-17', 'Bogota', 2, 'Samuel T. Goenaga', 2578217, 2147483647, 'Nunc.mauris.sapien@egestasblandit.org', 74, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(93, 'Samanta Hilda', 'Corradine Ferreira', 1, '41893036', 1660895, 2147483647, NULL, '1966-04-13', 'Bogota', 2, 'Iris Y. Wright', 4353940, 2147483647, 'malesuada.vel.venenatis@Inatpede.org', 12, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(94, 'Edgar Bartolome', 'Bueno Rothstein', 1, '42581970', 4738777, 2147483647, NULL, '1976-10-27', 'Bogota', 1, 'Nuria F. Aljure', 5908687, 2147483647, 'feugiat.metus.sit@neceuismodin.edu', 21, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(95, 'Jeronimo Aurelio', 'Russi Villota', 1, '43014557', 3704463, 2147483647, NULL, '1955-06-02', 'Bogota', 1, 'Angelica C. Guyau', 2076637, 2147483647, 'ultrices.posuere.cubilia@orciquislectus.ca', 71, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(96, 'Matilde Sofia', 'Yipula Posadas', 1, '43385345', 5182804, 2147483647, NULL, '1982-09-26', 'Bogota', 2, 'Ines V. Otero', 2310298, 2147483647, 'parturient@pharetranibh.com', 49, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(97, 'Gloria Flora', 'Artuz Corrales', 1, '43769867', 4850643, 1381961470, NULL, '1957-07-04', 'Bogota', 2, 'Sigifredo G. Wilches', 4126255, 2147483647, 'vitae@enimconsequatpurus.ca', 35, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(98, 'Blanca Adela', 'Puell Arcaya', 1, '43861420', 9147293, 2147483647, NULL, '1965-10-08', 'Bogota', 2, 'Viviana Y. Ortiz', 9715537, 2147483647, 'lorem.semper@fermentumrisus.edu', 75, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(99, 'Osvaldo Andre', 'Reales Ubaldes', 1, '43911774', 4695605, 2147483647, NULL, '1970-05-12', 'Bogota', 1, 'Magdalena O. Aparicio', 3584760, 2147483647, 'gravida.Praesent.eu@Craseutellus.net', 51, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(100, 'Paul Isaac', 'Toro Henriquez', 1, '44106323', 5129657, 2147483647, NULL, '1959-12-12', 'Bogota', 1, 'Timoteo O. Infantino', 2354839, 2147483647, 'adipiscing@rhoncus.co.uk', 64, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(101, 'Ulises Celso', 'Cepero Manzaneque', 1, '44362671', 2231843, 2147483647, NULL, '1972-08-05', 'Bogota', 1, 'Eleonor B. Torre', 4837754, 2147483647, 'Nullam@eu.co.uk', 6, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(102, 'Maite Victoria', 'Tunon Rockwood', 1, '44472534', 5118944, 2147483647, NULL, '1962-11-07', 'Bogota', 2, 'Vilma F. Stork', 3534948, 2147483647, 'cursus.et.magna@idsapienCras.ca', 62, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(103, 'Julieta Melina', 'Wandurraga Baer', 1, '45014984', 7050632, 2147483647, NULL, '1973-06-16', 'Bogota', 2, 'Felix G. Iannini', 1005182, 2147483647, 'ultrices@tellusSuspendisse.org', 71, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(104, 'Ruben Manuel', 'Palacio Augusto', 1, '45390350', 2938205, 2147483647, NULL, '1958-11-11', 'Bogota', 1, 'Diana W. Dagua', 5404738, 2147483647, 'orci.luctus@scelerisquescelerisquedui.org', 33, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(105, 'Luciano Armando', 'Villada Piral', 1, '45463593', 8546203, 1334561072, NULL, '1990-10-02', 'Bogota', 1, 'Zacarias M. Ochoa', 8521262, 2147483647, 'mauris.id.sapien@vestibulumneque.ca', 59, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(106, 'Camila Greta', 'Carbo Stornaiuolo', 1, '45493347', 8265607, 2147483647, NULL, '1989-02-19', 'Bogota', 2, 'agata A. Piedrahita', 6760894, 2147483647, 'bibendum.sed.est@malesuadautsem.edu', 65, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(107, 'Catalina Amara', 'Navarrete Camarasa', 1, '46678955', 2137907, 2147483647, NULL, '1956-07-11', 'Bogota', 2, 'Marvin B. Rey', 4148312, 2147483647, 'a.purus@nullaDonec.org', 76, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(108, 'Leonel Leopoldo', 'Yucason Borde', 1, '46745331', 9005395, 2147483647, NULL, '1966-06-10', 'Bogota', 1, 'Ruth R. Albis', 9758605, 2147483647, 'elit.pellentesque@imperdiet.com', 56, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(109, 'Monica Fatima', 'Villaman Diaz', 1, '47484619', 8722690, 2147483647, NULL, '1968-01-08', 'Bogota', 2, 'Vicente A. Herazo', 1294515, 2147483647, 'diam.dictum@justofaucibus.net', 12, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(110, 'Salvador Virgilio', 'Buenahora Ferrero', 1, '47779877', 8342467, 2147483647, NULL, '1983-03-31', 'Bogota', 1, 'Salome H. Ubala', 8674041, 2147483647, 'Integer.aliquam@ligulaAliquam.com', 30, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(111, 'agata Nancy', 'Patin Ruiz', 1, '48093445', 8642775, 2147483647, NULL, '1962-08-03', 'Bogota', 2, 'Lucia J. Recuero', 3138758, 2147483647, 'rhoncus.Nullam.velit@musDonec.ca', 41, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(112, 'Imelda Maria', 'Yegama Upegui', 1, '49423248', 8490603, 2147483647, NULL, '1963-05-04', 'Bogota', 2, 'Zoe C. Krohne', 6700403, 2147483647, 'in.consequat@feugiatSed.org', 5, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(113, 'Ezequiel Ramiro', 'Retis Cumplido', 1, '51654846', 2639817, 2147483647, '', '1979-09-30', 'Bogota', 1, '_', 5100285, 2147483647, 'Sed.eu.nibh@commodotinciduntnibh.org', 10, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(114, 'Cecilia Griselda', 'Bustillos Isabella', 1, '52661926', 7407151, 2147483647, NULL, '1962-01-01', 'Bogota', 2, 'Ronald Q. Echandia', 6307371, 2147483647, 'consectetuer.adipiscing.elit@nonleoVivamus.edu', 45, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(115, 'Mateo Ramiro', 'Landron Urigo', 1, '52748901', 1204677, 2147483647, NULL, '1974-09-17', 'Bogota', 1, 'Abel F. Alvis', 6759813, 2147483647, 'suscipit.est@nisiAeneaneget.org', 16, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(116, 'Liliana Laura', 'Yanguas Calancha', 1, '52941162', 5698042, 1528530826, NULL, '1967-10-11', 'Bogota', 2, 'Estela N. Lamprea', 6105625, 2147483647, 'egestas.nunc@ultricesposuere.co.uk', 20, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(117, 'Gracia Jasmin', 'Gonima Bachhuber', 1, '53463013', 2601711, 2147483647, NULL, '1963-04-15', 'Bogota', 2, 'Araceli B. Arbelaez', 5661014, 2147483647, 'Vivamus.nisi@egestasadui.edu', 46, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(118, 'Cesar Antonio', 'Vetro Rosano', 1, '53497345', 4710148, 2147483647, NULL, '1954-09-19', 'Bogota', 1, 'Delia N. Ortiz', 1812777, 2147483647, 'Ut@sedturpisnec.edu', 51, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(119, 'Raimundo Demetrio', 'Prats Vergel', 1, '53916199', 5597425, 2147483647, NULL, '1990-10-18', 'Bogota', 1, 'Ramon Q. Urdanegui', 4996535, 2147483647, 'tellus@arcuSedeu.com', 75, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(120, 'Vilma valentina', 'Notiva Lagoeyte', 1, '54579956', 2355156, 2147483647, NULL, '1985-06-27', 'Bogota', 2, 'Celestina E. Quesada', 1063483, 1076841989, 'Phasellus.in.felis@Morbivehicula.edu', 75, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(121, 'Cora Iris', 'Urzola Varelas', 1, '54760773', 6690789, 2147483647, NULL, '1986-10-17', 'Bogota', 2, 'Adelmo E. Zapatero', 6450958, 1486764084, 'diam@aliquetProinvelit.ca', 40, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(122, 'Maite Amparo', 'Ochodez Salicetti', 1, '55603058', 1553375, 2147483647, NULL, '1994-04-24', 'Bogota', 2, 'Nestor K. Sanin', 5723055, 2147483647, 'rutrum@malesuada.net', 67, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(123, 'Yajaira Juana', 'Souza Tomich', 1, '55765564', 6218456, 2147483647, NULL, '1978-03-06', 'Bogota', 2, 'Fermin C. Manosca', 2570836, 2147483647, 'euismod@fringilla.net', 65, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(124, 'Rolando Roger', 'Reguera Alaix', 1, '56170685', 1715314, 2147483647, NULL, '1991-12-23', 'Bogota', 1, 'Jaime G. Robledo', 8870087, 2147483647, 'pede.et.risus@egetipsumSuspendisse.org', 60, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(125, 'Gustavo Virgilio', 'Isola Ziganek', 1, '56532318', 8303579, 1904232381, NULL, '1990-04-08', 'Bogota', 1, 'Cornelio L. Manrique', 4867400, 2147483647, 'imperdiet.erat.nonummy@odioPhasellus.edu', 63, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(126, 'angela Carmen', 'Trejos Bula', 1, '57205231', 9052485, 2147483647, NULL, '1991-04-25', 'Bogota', 2, 'Adolfo B. Vina', 8638632, 2147483647, 'orci.in.consequat@convallisest.net', 15, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(127, 'Aldo Noe', 'Barazar Amado', 1, '57418091', 9165979, 2147483647, NULL, '1988-10-26', 'Bogota', 1, 'Rafael U. Peraza', 5325013, 2147483647, 'Donec.porttitor@Ut.com', 32, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(128, 'Beatriz Telma', 'Amorocho Asencio', 1, '57633240', 6518938, 2147483647, NULL, '1986-10-20', 'Bogota', 2, 'Rosana K. Nope', 1263930, 2147483647, 'ipsum@pharetraNam.ca', 38, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(129, 'Daniel Carmelo', 'Lecc Pisa', 1, '58470947', 8171592, 2147483647, NULL, '1987-05-06', 'Bogota', 1, 'Marina X. Querubin', 9680795, 2147483647, 'quam.a@consectetueradipiscingelit.org', 38, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(130, 'Fidel Sebastian', 'Sounders Washington', 1, '58784516', 7372801, 2147483647, NULL, '1964-02-21', 'Bogota', 1, 'Leopoldo H. Ramos', 3362790, 2147483647, 'lobortis.augue.scelerisque@sitametante.co.uk', 5, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(131, 'Ines Isadora', 'Bahamonde Astigarreta', 1, '59912903', 8056098, 2147483647, NULL, '1991-05-31', 'Bogota', 2, 'Mariano F. Garantiva', 5577909, 2147483647, 'urna.justo@ametconsectetueradipiscing.org', 33, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(132, 'Florencio Eufemio', 'Kelafor Rios', 1, '60416443', 6499215, 2147483647, NULL, '1988-10-03', 'Bogota', 1, 'Bianca Y. Notiva', 1720701, 1712456835, 'adipiscing@bibendum.com', 18, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(133, 'Gabriela Marisol', 'Leal Amorocho', 1, '60649903', 1522827, 1569570253, NULL, '1967-02-26', 'Bogota', 2, 'Gustavo L. Zornoza', 6927482, 2147483647, 'nec.leo@pedeNuncsed.edu', 52, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(134, 'Ramon Emilio', 'Ablanque Izquierdo', 1, '60734589', 7189667, 2147483647, NULL, '1974-12-02', 'Bogota', 1, 'Rosa H. Utrey', 9043218, 2147483647, 'dui.in@ultrices.org', 57, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(135, 'Rosario Penelope', 'Carballo Vallecilla', 1, '60929138', 8713608, 2147483647, NULL, '1969-11-11', 'Bogota', 2, 'Ada F. Penso', 3434893, 2147483647, 'nibh@atortorNunc.com', 78, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(136, 'Salomon Agustin', 'Otalora Randell', 1, '61824066', 4355374, 2147483647, NULL, '1967-06-13', 'Bogota', 1, 'Trinidad V. Urbina', 2305596, 2147483647, 'sem.elit.pharetra@milorem.org', 61, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(137, 'Eufemio Horacio', 'Veraste Canon', 1, '61872132', 3753120, 2147483647, NULL, '1992-04-15', 'Bogota', 1, 'Adriana Y. Sokoloff', 6364202, 2147483647, 'facilisis@Inscelerisquescelerisque.co.uk', 65, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(138, 'Macarena Sandra', 'Vaughan Sobelman', 1, '62187989', 8193005, 2147483647, NULL, '1969-09-27', 'Bogota', 2, 'alex L. Bello', 7272817, 2147483647, 'tincidunt.nunc@Aliquamultricesiaculis.org', 43, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(139, 'Velasco Filiberto', 'Galvis Yopasa', 1, '62311585', 9369516, 2147483647, NULL, '1981-07-29', 'Bogota', 1, 'Bernardo M. Velarde', 2008483, 2147483647, 'nibh.dolor@quis.co.uk', 23, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(140, 'Federico Guillermo', 'Rogers Vieda', 1, '62941010', 4009719, 1299496715, NULL, '1978-02-06', 'Bogota', 1, 'Soraya T. Correales', 1665042, 2147483647, 'bibendum@metus.com', 26, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(141, 'Adela Miranda', 'Gandini Saez', 1, '64332611', 9535803, 2147483647, NULL, '1992-09-15', 'Bogota', 2, 'Magdalena C. Pierre', 7325906, 2147483647, 'blandit@tristiqueneque.co.uk', 21, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(142, 'Carolina Sara', 'Jansa Cantor', 1, '64433319', 9521738, 2147483647, NULL, '1985-01-19', 'Bogota', 2, 'Antonio J. Alcazar', 6593784, 1712503052, 'ac.mattis.semper@ultriciesligulaNullam.ca', 40, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(143, 'Gertrudis Adela', 'Salvatierra Alea', 1, '65195496', 9317618, 1041385453, NULL, '1965-03-02', 'Bogota', 2, 'Federico E. Aguirre', 6031972, 2147483647, 'tincidunt.adipiscing@acliberonec.ca', 65, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(144, 'omar Aldo', 'Santis Vigo', 1, '65220673', 6546879, 2147483647, NULL, '1956-11-11', 'Bogota', 1, 'Bianca E. Gitterle', 7948618, 2147483647, 'ante@acmi.com', 43, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(145, 'Emilio Sebastian', 'Leano Maya', 1, '65348847', 9192422, 2147483647, NULL, '1988-02-15', 'Bogota', 1, 'Carina X. Trucco', 6643262, 2147483647, 'et@etlacinia.co.uk', 59, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(146, 'Flora Serena', 'Albo Gamba', 1, '65641815', 4563612, 1945781794, NULL, '1993-09-22', 'Bogota', 2, 'Reinaldo C. Vitto', 4553696, 2147483647, 'vitae.semper@risusa.ca', 61, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(147, 'Cristobal Victor', 'Achiardi Cavaiola', 1, '65774567', 9519409, 2147483647, NULL, '1960-04-02', 'Bogota', 1, 'Tobias U. Lana', 7588314, 1119066902, 'erat.volutpat.Nulla@Cumsociis.ca', 58, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(148, 'Encarnacion Angelica', 'Ocampo Kahn', 1, '66339905', 3431881, 2147483647, NULL, '1958-04-07', 'Bogota', 2, 'Vladimir A. Villacorta', 5703912, 2147483647, 'sem@maurisInteger.edu', 48, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(149, 'Ezequiel Lorenzo', 'Urrea Zapatero', 1, '66495545', 9556152, 2147483647, NULL, '1993-09-13', 'Bogota', 1, 'Ismael Y. Lunnetti', 7848161, 2147483647, 'ornare.In@volutpatNulladignissim.net', 79, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(150, 'Concepcion Sonia', 'Anda Sarachaga', 1, '66532166', 7815256, 1775198281, NULL, '1986-03-04', 'Bogota', 2, 'Clotilde Y. Piqueras', 4290529, 2147483647, 'Nulla.facilisis.Suspendisse@arcuAliquamultrices.edu', 5, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(151, 'Cruz Luciano', 'Seminario Pasos', 1, '66609986', 6822496, 2147483647, NULL, '1983-09-01', 'Bogota', 1, 'Rafael Q. Torioque', 5166747, 2147483647, 'nunc.interdum@lobortisultrices.org', 44, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(152, 'Cristina Amanda', 'Virguez Alandete', 1, '66804535', 6366337, 2147483647, NULL, '1979-03-09', 'Bogota', 2, 'Alberto S. Salinas', 6237740, 2147483647, 'risus.Nulla.eget@cubiliaCurae;.edu', 8, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(153, 'Max Felix', 'Avaria Stockamore', 1, '66948731', 3341966, 2147483647, NULL, '1967-06-23', 'Bogota', 1, 'Manuel Y. Potes', 8977576, 2147483647, 'convallis.in@eunequepellentesque.co.uk', 47, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(154, 'Luciano Fermin', 'Almanzar Alvis', 1, '67005951', 6530088, 2147483647, NULL, '1960-12-03', 'Bogota', 1, 'Romeo P. Syme', 3046191, 1677539605, 'mauris@egestas.edu', 21, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(155, 'Bernardo Aquiles', 'Penillo Standing', 1, '67230255', 6782314, 2147483647, NULL, '1994-10-31', 'Bogota', 1, 'Celia O. Cantero', 6479474, 2147483647, 'tincidunt@miloremvehicula.org', 38, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(156, 'Frida Dina', 'Richard Aganduru', 1, '67273743', 3681027, 2147483647, NULL, '1985-06-08', 'Bogota', 2, 'Maya U. Bandras', 6267866, 1008185814, 'elit@nonjustoProin.edu', 49, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(157, 'Carolina Genoveva', 'Sovalbarro Stiernon', 1, '68182404', 5512102, 2147483647, NULL, '1983-03-21', 'Bogota', 2, 'Ester W. Girardot', 9974456, 2147483647, 'egestas@dignissim.com', 20, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(158, 'Camila Maite', 'Prati Illidge', 1, '68511994', 7242306, 2147483647, NULL, '1963-08-31', 'Bogota', 2, 'Crisanta X. Gartner', 5704693, 1657875045, 'facilisis@dictumeleifendnunc.com', 11, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(159, 'Evaristo Mariano', 'Najera Soucarre', 1, '68651612', 1837891, 2147483647, NULL, '1972-08-03', 'Bogota', 1, 'Efrain A. Alford', 3657631, 2147483647, 'magna.sed.dui@metus.co.uk', 45, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(160, 'Amapola Pilar', 'Turc Prados', 1, '69306214', 4896256, 2147483647, NULL, '1954-07-25', 'Bogota', 2, 'Karina P. Fiorenzano', 4610974, 2147483647, 'enim.non.nisi@erosNam.co.uk', 44, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(161, 'Tobias Paul', 'Sapiain Baracaldo', 1, '69420655', 9173481, 1181340603, NULL, '1966-05-05', 'Bogota', 1, 'Silvio W. Somosa', 3042791, 2147483647, 'lacinia@Sedeunibh.ca', 11, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(162, 'Pedro Cristian', 'Buritica Galleguillo', 1, '69436676', 3602376, 2147483647, NULL, '1956-07-27', 'Bogota', 1, 'Florencia S. Suta', 6251671, 2147483647, 'turpis.In.condimentum@a.com', 54, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(163, 'Estefania Celestina', 'Altamirano Yepes', 1, '69525940', 2659459, 2147483647, NULL, '1986-07-04', 'Bogota', 2, 'Calixto F. Lauriola', 2173394, 2147483647, 'ligula.consectetuer@sapiengravidanon.net', 66, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(164, 'Fernando Diego', 'Sola Cabezas', 1, '69837220', 5709191, 2147483647, NULL, '1982-07-16', 'Bogota', 1, 'Gladis K. Colloredo', 5116537, 2147483647, 'tempus.scelerisque@enimnislelementum.com', 40, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(165, 'Ezequiel Gustavo', 'Pontareno Somosa', 1, '70166809', 7439495, 2147483647, NULL, '1991-05-08', 'Bogota', 1, 'Dora A. Sisniega', 7278178, 2147483647, 'erat.semper.rutrum@eratSed.org', 26, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(166, 'Irene Mariam', 'Pobras Perroni', 1, '70324738', 9604333, 2147483647, NULL, '1960-01-01', 'Bogota', 2, 'Eduardo M. Pinuela', 8705495, 2147483647, 'accumsan.convallis@vestibulumloremsit.co.uk', 76, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(167, 'Paul Demetrio', 'Puche Ortiz', 1, '70874054', 1286839, 2147483647, '', '1982-10-03', 'Bogota', 1, '_', 6617706, 2147483647, 'Nunc@bibendumullamcorper.ca', 7, 0, 1, '2012-12-09', 'NULL', '0000-00-00 00:00:00', '1', '2013-04-14 19:43:47'),
(168, 'Hilda Araceli', 'Lechuga Penoit', 1, '70887787', 7476248, 2147483647, NULL, '1969-07-12', 'Bogota', 2, 'Nidia B. Arze', 8703855, 1041083498, 'Proin.nisl@odio.co.uk', 34, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(169, 'Araceli Gertrudis', 'Alduan Tibaquira', 1, '71521790', 4506585, 2147483647, NULL, '1986-07-14', 'Bogota', 2, 'Enrique O. Power', 5157553, 2147483647, 'ac.ipsum@sed.ca', 75, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(170, 'Ramon Hector', 'Rueda Lanz', 1, '71865113', 4525198, 2147483647, NULL, '1969-02-08', 'Bogota', 1, 'Arturo V. Boward', 5980633, 2147483647, 'sagittis.semper.Nam@atarcuVestibulum.ca', 57, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(171, 'Linda Tania', 'Renteria Zarzosa', 1, '72288544', 7791508, 2147483647, NULL, '1976-11-09', 'Bogota', 2, 'Teresa F. Portocarrero', 7068669, 2147483647, 'amet.ornare@cursus.edu', 12, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(172, 'Rodolfo Benjamin', 'Victoria Gartner', 1, '72293122', 9191741, 2147483647, NULL, '1968-01-22', 'Bogota', 1, 'Nicolas F. Iglesias', 2857318, 2147483647, 'ligula.consectetuer.rhoncus@lobortistellus.net', 67, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(173, 'Leticia Estela', 'Nates Yusti', 1, '72851593', 4463413, 1395653149, NULL, '1986-07-13', 'Bogota', 2, 'Eleonor N. Godoy', 1096418, 1769226390, 'dui.nec@magnaNam.net', 37, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(174, 'Emilia Penelope', 'Schatt Goldstuecker', 1, '72963745', 4580081, 2147483647, NULL, '1958-12-21', 'Bogota', 2, 'Adrian B. Puentes', 1176782, 2147483647, 'Vestibulum.ante.ipsum@dapibusrutrumjusto.net', 52, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(175, 'Wilfredo Juan', 'Noriega Rendon', 1, '73034699', 4957512, 2147483647, NULL, '1957-11-15', 'Bogota', 1, 'Carolina L. Santander', 5606934, 2147483647, 'fermentum.arcu.Vestibulum@mauris.ca', 45, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(176, 'Luciana Karina', 'Illera Estrandelo', 1, '73123963', 3005595, 2147483647, NULL, '1968-05-06', 'Bogota', 2, 'Telma J. Ferrucci', 7317034, 1803120445, 'nunc.est@ultricesDuisvolutpat.net', 80, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(177, 'Tamara Macarena', 'Portugues Soler', 1, '73867829', 5021023, 1587807926, NULL, '1955-03-27', 'Bogota', 2, 'Edmundo M. Incera', 1699637, 2147483647, 'posuere.at.velit@metusAliquamerat.edu', 28, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(178, 'Mabel Angelica', 'Villaneda Noguera', 1, '73998291', 4827143, 2147483647, NULL, '1965-12-02', 'Bogota', 2, 'Sara T. Legarda', 2482391, 2147483647, 'condimentum.Donec@senectuset.ca', 42, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(179, 'Alexander Marco', 'Molina Buendia', 1, '74007447', 8616428, 2147483647, NULL, '1981-06-04', 'Bogota', 1, 'Salome E. Lavao', 5560187, 2147483647, 'dolor.dapibus@commodo.net', 18, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(181, 'Aldo Demetrio', 'Salavarrieta Urnieta', 1, '75250275', 5767840, 2147483647, NULL, '1956-04-07', 'Bogota', 1, 'Jacinto T. Dalmau', 3168404, 1065939805, 'neque.Nullam@aliquamarcuAliquam.net', 18, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(182, 'Evaristo Calixto', 'Pfizemaier Requejo', 1, '75314362', 7495662, 2147483647, NULL, '1994-03-19', 'Bogota', 1, 'Isabella Z. Rojo', 5620888, 2147483647, 'eget@cubiliaCurae;.edu', 4, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(183, 'Paulina Amara', 'Abussaid Cuellar', 1, '75671418', 3693784, 2147483647, NULL, '1993-02-03', 'Bogota', 2, 'Adolfo S. Fety', 2015213, 2147483647, 'leo.in@iaculisquis.ca', 70, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(184, 'Adan Anibal', 'Cerruti Scoglio', 1, '76415284', 4700122, 2147483647, NULL, '1969-10-20', 'Bogota', 1, 'Irene B. Kloch', 7467803, 2147483647, 'arcu.vel.quam@vehicula.co.uk', 24, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(185, 'Gladis Vanesa', 'Colot Molleda', 1, '77122529', 7467566, 2147483647, NULL, '1961-05-24', 'Bogota', 2, 'Sandra T. Primo', 1668361, 2147483647, 'semper.cursus@elitelit.ca', 60, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(186, 'Sergio Homero', 'Tenorio Bradock', 1, '77131684', 2357732, 2147483647, NULL, '1960-12-29', 'Bogota', 1, 'Aurelio D. Zelada', 9619710, 2147483647, 'ante@lacinia.ca', 50, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(187, 'Osvaldo Fernando', 'Rota Mambi', 1, '78060944', 9007945, 2147483647, NULL, '1991-04-25', 'Bogota', 1, 'Fidel S. Segura', 6817664, 2147483647, 'quis@euodioPhasellus.edu', 33, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00');
INSERT INTO `residentes` (`IdResidentes`, `Nombres`, `Apellidos`, `IdTipoidentificacion`, `NoDocumento`, `Telefono`, `Celular`, `Direccion`, `FechaNacimiento`, `LugarNacimiento`, `IdGenero`, `NombreContacto`, `TelefonoContacto`, `CelefonoContacto`, `Email`, `IdUnidadV`, `Residente`, `Propietario`, `FechaIngreso`, `IdUsuario_Creacion`, `Fecha_Creacion`, `IdUsuario_Modificacion`, `Fecha_Modificacion`) VALUES
(188, 'Rebeca Lida', 'Pfefferkorn Sorazono ', 1, '78333313', 8659017, 1973372161, '', '1993-07-13', 'Bogota', 2, '_', 7196214, 2147483647, 'hendrerit.Donec@posuerecubiliaCurae;.ca', 39, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(189, 'Leonardo Cristobal', 'Artuz Utrey', 1, '79340394', 4426351, 1775066438, NULL, '1972-05-28', 'Bogota', 1, 'Paulina L. Iannini', 5007517, 2147483647, 'nulla.Cras@velvenenatisvel.co.uk', 43, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(190, 'Cecilia Celia', 'Wiesner Paucar', 1, '79429657', 3474444, 1351765904, NULL, '1977-01-15', 'Bogota', 2, 'Samuel T. Otabla', 1755187, 2147483647, 'posuere.vulputate.lacus@ut.org', 13, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(191, 'Vladimir Heriberto', 'Alfaro Taborda', 1, '79580719', 7009672, 1022586423, NULL, '1960-09-26', 'Bogota', 1, 'Vera U. Sumosa', 2006531, 2147483647, 'enim@maurisa.ca', 2, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(192, 'Sonia Ofelia', 'Clavijo Pastran', 1, '79617341', 5358675, 2147483647, NULL, '1973-11-14', 'Bogota', 2, 'Gladis Z. Piquero', 1781993, 1488105508, 'dolor.Donec.fringilla@diam.com', 71, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(193, 'Antonia Yolanda', 'Palazin Uruena', 1, '79621918', 8757818, 2147483647, NULL, '1991-10-09', 'Bogota', 2, 'Jeronimo V. Tromesta', 4088161, 2147483647, 'pulvinar.arcu.et@commodo.com', 22, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(194, 'Florencia Laura', 'Vasco Heppolette', 1, '79802735', 2002341, 2147483647, NULL, '1977-02-22', 'Bogota', 2, 'Higinia M. Abraham', 4143051, 2147483647, 'dui@cursusetmagna.org', 13, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(195, 'Leonel Adalberto', 'Yuquem Dacosta', 1, '80136902', 6221778, 2147483647, '', '1985-02-12', 'Bogota', 1, '_', 1265480, 2147483647, 'condimentum@lobortis.org', 1, 0, 2, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(196, 'Emilio Patricio', 'Urbano Susco', 1, '80908234', 2706933, 2147483647, NULL, '1959-09-16', 'Bogota', 1, 'Rosario X. Ostos', 9683784, 2147483647, 'magna.Cras@Crasdolor.org', 13, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(197, 'Daniela Talia', 'Watts Botero', 1, '80926545', 1486485, 1255958752, NULL, '1993-04-13', 'Bogota', 2, 'Ariana U. Sposito', 3012705, 2147483647, 'consequat.dolor@non.co.uk', 27, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(198, 'Jeremias Donato', 'Robinson Villaluz', 1, '81553681', 9986122, 2147483647, NULL, '1955-06-22', 'Bogota', 1, 'Flora O. Peraza', 1423788, 2147483647, 'adipiscing@rutrumnonhendrerit.net', 61, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(199, 'Dario Archibaldo', 'Naffah Walbridge', 1, '81567414', 6165531, 2138377842, NULL, '1977-11-06', 'Bogota', 1, 'Moises D. Isabella', 4245058, 1617517830, 'dui.Fusce@iaculisaliquet.net', 19, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(200, 'Gustavo Tobias', 'Amariles Brasford', 1, '81784852', 8779168, 2147483647, NULL, '1986-06-17', 'Bogota', 1, 'Salvador N. Ferrer', 6245631, 1755672848, 'ac@magna.net', 80, 1, 0, '2012-12-09', 'NULL', '0000-00-00 00:00:00', 'NULL', '0000-00-00 00:00:00'),
(201, 'Federico Ramiro', 'Almanza Ramiqui', 1, '968859459', 0, 0, '', '2012-12-27', '', 1, '_', 0, 0, '', 7, 0, 1, '2012-12-27', 'NULL', '2012-12-27 00:00:00', 'NULL', '2012-12-27 00:00:00'),
(202, 'Martin omar', 'Puche Ortiz', 1, '70874054', 0, 0, '', '1987-01-30', 'Bogota', 1, '_', 0, 0, '', 82, 1, 0, '2013-01-01', NULL, '2013-01-01 08:38:50', NULL, NULL),
(206, 'Saulo Andres', 'Paternina', 1, '456546546', 0, 0, '', '2002-01-25', 'Bogota', 1, '_', 0, 0, '', 82, 1, 0, '2013-01-01', 'NULL', '2013-01-01 00:00:00', 'NULL', '2013-01-01 00:00:00'),
(207, 'Marisol ', 'Diaz Choconta', 1, '563299088', 0, 0, '', '1974-01-11', 'Bogota', 1, '_', 0, 0, '', 83, 1, 0, '2013-01-01', NULL, '2013-01-01 08:45:43', NULL, NULL),
(209, 'Samuel', 'Buendia', 1, '00001293884', 0, 0, '', '1978-01-06', 'Bogota', 1, '_', 0, 0, '', 83, 1, 0, '2013-01-02', NULL, '2013-01-02 01:45:28', NULL, NULL),
(213, 'Saulo Andres', 'roma', 1, '06786508664', 0, 0, '', '1994-01-07', 'Bogota', 1, '_', 0, 0, '', 84, 1, 0, '2013-01-02', NULL, '2013-01-02 01:57:16', NULL, NULL),
(214, 'Samuel', 'Renteria ', 1, '45435945848', 0, 0, '', '1974-01-15', 'Bogota', 1, '_', 0, 0, '', 84, 1, 0, '2013-01-02', 'NULL', '2013-01-02 00:00:00', 'NULL', '2013-01-02 00:00:00'),
(218, 'Wilton ', 'Garcia', 1, '9', 0, 0, '', '0000-00-00', '', 1, '_', 0, 0, '', 7, 0, 1, '2013-03-15', NULL, '2013-03-15 08:32:43', NULL, NULL),
(226, 'juli', 'castro', 1, '789098', 0, 0, '', '0000-00-00', '', 1, '_', 0, 0, '', 73, 0, 1, '2013-03-15', NULL, '2013-03-15 10:12:49', NULL, NULL),
(227, 'Wilton ', 'Jamaica', 1, '7968958', 0, 0, '', '0000-00-00', '', 1, '_', 0, 0, '', 7, 1, 0, '2013-03-16', 'NULL', '2013-03-16 00:00:00', NULL, NULL),
(236, 'carlos', 'guatierrez', 1, '25567', 0, 0, '', '0000-00-00', '', 1, '_', 0, 0, '', 91, 0, 1, '2013-03-17', NULL, '2013-03-17 04:31:56', NULL, NULL),
(237, 'pepe', 'silva', 1, '67895346', 0, 0, '', '0000-00-00', '', 1, '_', 0, 0, '', 91, 0, 1, '2013-03-17', NULL, '2013-03-17 04:32:35', NULL, NULL),
(238, 'alicia', 'preciado', 1, '145562456', 0, 0, '', '0000-00-00', '', 2, '_', 0, 0, '', 91, 0, 2, '2013-03-17', NULL, '2013-03-17 04:33:01', NULL, NULL),
(240, 'camilo', 'torres', 1, '09725437', 0, 0, '', '0000-00-00', '', 1, '_', 0, 0, '', 91, 1, 0, '2013-03-17', 'NULL', '2013-03-17 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ringreso`
--

CREATE TABLE IF NOT EXISTS `ringreso` (
  `idringreso` int(11) NOT NULL AUTO_INCREMENT,
  `idvehiculo` int(11) DEFAULT NULL,
  `diaentrada` date DEFAULT NULL,
  `horaentrada` time DEFAULT NULL,
  `diasalida` date DEFAULT NULL,
  `horasalida` time DEFAULT NULL,
  `idusuario_creacion` int(11) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `idusuario_modificacion` int(11) DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  `novedades` text,
  PRIMARY KEY (`idringreso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `ringreso`
--

INSERT INTO `ringreso` (`idringreso`, `idvehiculo`, `diaentrada`, `horaentrada`, `diasalida`, `horasalida`, `idusuario_creacion`, `fecha_creacion`, `idusuario_modificacion`, `fecha_modificacion`, `novedades`) VALUES
(1, 3, '2013-03-28', '19:57:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, '2013-04-12', '08:32:40', '0000-00-00', '08:32:40', NULL, NULL, NULL, NULL, NULL),
(3, 24, '2013-04-13', '11:58:32', '0000-00-00', '11:58:32', NULL, NULL, NULL, NULL, NULL),
(4, 24, '2013-04-13', '20:37:50', NULL, NULL, 1, '2013-04-13 20:37:50', NULL, NULL, 'rayon puerta derecha');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terceros`
--

CREATE TABLE IF NOT EXISTS `terceros` (
  `idterceros` int(11) NOT NULL AUTO_INCREMENT,
  `tipodocumento` int(11) DEFAULT NULL,
  `nodocumento` int(11) DEFAULT NULL,
  `nombretercero` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `regimen` int(11) DEFAULT NULL,
  `Estado` varchar(5) DEFAULT NULL,
  `tipotercero` int(11) DEFAULT NULL,
  `idunidadv` int(11) DEFAULT NULL,
  PRIMARY KEY (`idterceros`),
  KEY `idx_terceros` (`tipodocumento`),
  KEY `idx_terceros_0` (`regimen`),
  KEY `idx_terceros_1` (`tipotercero`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=217 ;

--
-- Volcar la base de datos para la tabla `terceros`
--

INSERT INTO `terceros` (`idterceros`, `tipodocumento`, `nodocumento`, `nombretercero`, `direccion`, `telefono`, `email`, `regimen`, `Estado`, `tipotercero`, `idunidadv`) VALUES
(1, 1, 1019039622, 'JORGE', 'calle 168a 93 20', '4720063', 'jorgedipra@gmail.com', 1, '0', 1, NULL),
(2, 1, 79689582, 'william Bueno Hernandez', 'calle', '5657657', '@.com', 1, '1', 1, NULL),
(6, 1, 1395478, 'Celia Rosalia Bessada Ovies', '', '5667631', 'dictum@elit.ca', 1, '1', 1, NULL),
(7, 1, 1395478, 'Enrique German Stornaiuolo Saade', NULL, '2817107', 'ipsum@tincidunt.net', 1, '1', NULL, NULL),
(8, 1, 1395478, 'Basilio Jesus Solorzano Potes', NULL, '7863994', 'Nulla@etmalesuadafames.com', 1, '1', NULL, NULL),
(9, 1, 1395478, 'Regina Vilma Tribin Shiffman', NULL, '6444818', 'enim@euodiotristique.com', 1, '1', NULL, NULL),
(10, 1, 1395478, 'Jairo Gerardo Centura Carre', NULL, '3061915', 'convallis.in.cursus@laoreetposuere.ca', 1, '1', NULL, NULL),
(11, 1, 1395478, 'Eliana Rosana Martina Pomp', NULL, '3188683', 'dictum.mi@eratin.edu', 1, '1', NULL, NULL),
(12, 1, 1395478, 'Sonia Florinda Tarquino Canola', NULL, '7839589', 'vestibulum.Mauris.magna@liberodui.edu', 1, '1', NULL, NULL),
(13, 1, 1395478, 'Homero Jesus Perfetti Brunal', NULL, '5438644', 'quis@orcilobortis.ca', 1, '1', NULL, NULL),
(14, 1, 1395478, 'Martin omar Privatelli Rumazo', '', '5515569', 'leo@commodoauctor.com', 1, '1', NULL, NULL),
(15, 1, 1395478, 'Samanta Ximena Fiorenzano Roth', NULL, '2840259', 'Maecenas@metusAenean.com', 1, '1', NULL, NULL),
(16, 1, 1395478, 'Tomas Federico Ran Rico', NULL, '6007966', 'egestas@nisl.net', 1, '1', NULL, NULL),
(17, 1, 1395478, 'Yadira Gertrudis Gasaro Urquiza', NULL, '8157718', 'vestibulum.lorem@penatibus.com', 1, '1', NULL, NULL),
(18, 1, 1395478, 'Araceli Irene Brinkerhoff Pereda', NULL, '6831226', 'odio@infelis.com', 1, '1', NULL, NULL),
(19, 1, 1395478, 'Clemente Dario Bruson Lagoeyte', NULL, '2369408', 'urna.et@Donecatarcu.com', 1, '1', NULL, NULL),
(20, 1, 1395478, 'Emiliano Felix Ruethlisberger Pineres', NULL, '5271871', 'ultrices.sit.amet@scelerisquemollis.co.uk', 1, '1', NULL, NULL),
(21, 1, 1395478, 'Linda Paloma Riva Ballen', NULL, '1721766', 'augue@acmetus.org', 1, '1', NULL, NULL),
(22, 1, 1395478, 'Leopoldo Carmelo Pina Tirc', NULL, '5305459', 'augue.malesuada@sollicitudinadipiscingligula.org', 1, '1', NULL, NULL),
(23, 1, 1395478, 'Elvira Ruth Angadelo Romay', NULL, '9602008', 'elit.pretium.et@congue.edu', 1, '1', NULL, NULL),
(24, 1, 1395478, 'Azucena Samanta Townsend Schroeder', NULL, '3245477', 'ultrices.a@Classaptenttaciti.com', 1, '1', NULL, NULL),
(25, 1, 1395478, 'Eduardo Walter Valiente Cleves', NULL, '2332292', 'Sed.auctor@liberoatauctor.ca', 1, '1', NULL, NULL),
(26, 1, 1395478, 'Daniela Dinora Uriza Villafane', NULL, '1552926', 'diam@Proinmi.edu', 1, '1', NULL, NULL),
(27, 1, 1395478, 'Fausto Jacinto Oette Bula', NULL, '9966738', 'mauris.eu.elit@maurissitamet.co.uk', 1, '1', NULL, NULL),
(28, 1, 1395478, 'Alexandra Trinidad Recan Aquilino', NULL, '6458630', 'ipsum.dolor@placeratorci.edu', 1, '1', NULL, NULL),
(29, 1, 1395478, 'Pablo Fidel Yanguas Tena', NULL, '5164750', 'pede.ultrices.a@Suspendissealiquetmolestie.edu', 1, '1', NULL, NULL),
(30, 1, 1395478, 'Javier Rogelio Villarraga Kalckar', NULL, '8331170', 'tempor.bibendum@nonenim.net', 1, '1', NULL, NULL),
(31, 1, 1395478, 'Sabrina Victoria Prompt Seleno', NULL, '3898295', 'porttitor@ipsumleoelementum.edu', 1, '1', NULL, NULL),
(32, 1, 1395478, 'Dario Hector Umba Lacoste', NULL, '2112182', 'non@Ut.net', 1, '1', NULL, NULL),
(33, 1, 1395478, 'Sol Carmen Koros Urquiola', NULL, '8277396', 'Cras.vulputate.velit@velitjusto.org', 1, '1', NULL, NULL),
(34, 1, 1395478, 'Melisa Fatima Cerra Tsao', NULL, '4258133', 'Donec@Loremipsumdolor.com', 1, '1', NULL, NULL),
(35, 1, 1395478, 'Encarnacion Vivian Cera Aliaga', NULL, '1192216', 'lorem@magnisdis.com', 1, '1', NULL, NULL),
(36, 1, 1395478, 'Dulce Paola Urbano Balanta', NULL, '2398569', 'Proin.dolor.Nulla@Donec.net', 1, '1', NULL, NULL),
(37, 1, 1395478, 'Elizabeth Miriam Laitano Celemin', NULL, '9956881', 'Nunc.sollicitudin.commodo@egestas.com', 1, '1', NULL, NULL),
(38, 1, 1395478, 'Nicolas Bruno Klinkert Pintor', NULL, '7661614', 'lacus@Duisgravida.edu', 1, '1', NULL, NULL),
(39, 1, 1395478, 'Greta Yadira Sopo Salido', NULL, '2410435', 'elit.fermentum.risus@libero.net', 1, '1', NULL, NULL),
(40, 1, 1395478, 'Sol Rocio Subieta Liendo', NULL, '5267879', 'mauris@mollis.ca', 1, '1', NULL, NULL),
(41, 1, 1395478, 'Fatima Zita Vieira Pineiro', NULL, '8485734', 'posuere.at.velit@duiCras.co.uk', 1, '1', NULL, NULL),
(42, 1, 1395478, 'Marisol Veronica Viga Canavera', NULL, '7198864', 'nunc.risus.varius@nuncrisusvarius.ca', 1, '1', NULL, NULL),
(43, 1, 1395478, 'Marta Samara Willis Salido', NULL, '5494601', 'at@vulputatedui.co.uk', 1, '1', NULL, NULL),
(44, 1, 1395478, 'Vilma Jasmin Norena Duran', NULL, '5230673', 'augue.scelerisque.mollis@at.ca', 1, '1', NULL, NULL),
(45, 1, 1395478, 'Fernando Adrian Serrate Vitto', '', '4553560', 'Aliquam@nonummyipsum.net', 1, '1', NULL, NULL),
(46, 1, 1395478, 'Osvaldo Romeo Noya Ibarg?en', NULL, '7602830', 'tortor.Integer@Nulla.edu', 1, '1', NULL, NULL),
(47, 1, 1395478, 'Filiberto Max Cuellar Rico', NULL, '6070361', 'leo.Morbi.neque@dui.net', 1, '1', NULL, NULL),
(48, 1, 1395478, 'Karina Alicia Benitez Schwabe', NULL, '8896480', 'blandit.viverra@rhoncusidmollis.org', 1, '1', NULL, NULL),
(49, 1, 1395478, 'Ema Samanta Poca Quiceno', NULL, '9546090', 'egestas.a.scelerisque@metusfacilisis.edu', 1, '1', NULL, NULL),
(50, 1, 1395478, 'Ismael angel Subieta Cartagena', NULL, '5024355', 'eu.placerat@tristiqueac.net', 1, '1', NULL, NULL),
(51, 1, 1395478, 'Patricio Fermin Anda Pincha', NULL, '7424488', 'dolor.dolor@sapienCrasdolor.co.uk', 1, '1', NULL, NULL),
(52, 1, 1395478, 'Samara Rosana Gallo Tarazona', NULL, '5860317', 'cursus.Integer.mollis@purusaccumsaninterdum.co.uk', 1, '1', NULL, NULL),
(53, 1, 1395478, 'Estefania Rebeca Barberena Sarda', NULL, '7005412', 'feugiat.metus@turpisvitae.com', 1, '1', NULL, NULL),
(54, 1, 1395478, 'German Edgardo Pernett Anaya', NULL, '1942761', 'ipsum.dolor@dapibusgravida.com', 1, '1', NULL, NULL),
(55, 1, 1395478, 'Cintia Ana Zachinson Vinasco', '', '2692370', 'Nullam@Sednulla.edu', 1, '1', NULL, NULL),
(56, 1, 1395478, 'Jose Sebastian Borda Peramato', NULL, '2335013', 'ornare.libero.at@Proin.ca', 1, '1', NULL, NULL),
(57, 1, 1395478, 'Constantino Luciano Silvestre Schimoz', NULL, '6201114', 'dui.Cum@tempor.ca', 1, '1', NULL, NULL),
(58, 1, 1395478, 'Bruno Donato Carrasquilla Salvatierra', NULL, '2816037', 'viverra.Donec@fringillacursuspurus.edu', 1, '1', NULL, NULL),
(59, 1, 1395478, 'Mario Fernando Garaves Power', NULL, '6518861', 'vulputate.eu.odio@nasceturridiculus.co.uk', 1, '1', NULL, NULL),
(60, 1, 1395478, 'Higinia Samanta Durango Brauer', NULL, '9794270', 'et@enimMauris.ca', 1, '1', NULL, NULL),
(61, 1, 1395478, 'Eleonor Ines Raondo Rosas', '', '2665338', 'sit@egestashendrerit.com', 1, '1', NULL, NULL),
(62, 1, 1395478, 'Julieta Trinidad Mares Ferrucci', NULL, '8140364', 'commodo@orciluctus.com', 1, '1', NULL, NULL),
(63, 1, 1395478, 'Blanca Amelia Leano Urretavisque', NULL, '9526705', 'Morbi.non.sapien@aliquameuaccumsan.com', 1, '1', NULL, NULL),
(64, 1, 1395478, 'Constantino Ezequiel Palacio Zubiaurre', NULL, '2480104', 'mauris.ut@elita.net', 1, '1', NULL, NULL),
(65, 1, 1395478, 'Cruz Marco Piedrahita Lanz', NULL, '6413716', 'cursus.vestibulum@sitamet.org', 1, '1', NULL, NULL),
(66, 1, 1395478, 'Hugo Josue Gonzalez Mancini', NULL, '2439650', 'Maecenas@rutrumeu.edu', 1, '1', NULL, NULL),
(67, 1, 1395478, 'Fermin Julian Cazar Zerda', NULL, '7705894', 'risus@scelerisqueduiSuspendisse.net', 1, '1', NULL, NULL),
(68, 1, 1395478, 'Dina Consuelo Raymond Ceron', NULL, '6598839', 'massa.non.ante@Pellentesqueultriciesdignissim.net', 1, '1', NULL, NULL),
(69, 1, 1395478, 'Adelmo Joaquin Igarai Zabala', NULL, '7451931', 'Mauris@sollicitudincommodo.net', 1, '1', NULL, NULL),
(70, 1, 1395478, 'Liliana Dulce Ugarriza Sancristobal', NULL, '7604267', 'dignissim.tempor@libero.ca', 1, '1', NULL, NULL),
(71, 1, 1395478, 'Antonio Fernando Tibaquira Schea', NULL, '6331792', 'ac.ipsum.Phasellus@euodiotristique.ca', 1, '1', NULL, NULL),
(72, 1, 1395478, 'Florencio Jesus Calderon Fex', NULL, '3848669', 'quam@natoquepenatibus.net', 1, '1', NULL, NULL),
(73, 1, 1395478, 'Antonio Flavio Afanador Gamio', NULL, '9128088', 'neque.sed.dictum@lectusantedictum.ca', 1, '1', NULL, NULL),
(74, 1, 1395478, 'Estrella Mariana Umbarita Sternberg', NULL, '9177434', 'lorem.luctus.ut@vestibulumnec.com', 1, '1', NULL, NULL),
(75, 1, 1395478, 'Nicolas Adelmo Quirama Dieck', NULL, '5488049', 'dignissim@at.org', 1, '1', NULL, NULL),
(76, 1, 1395478, 'Pedro Alberto Arcesse Cano', NULL, '9984390', 'amet.lorem@ipsumnon.org', 1, '1', NULL, NULL),
(77, 1, 1395478, 'Isadora Macarena Berroeta Bertoita', NULL, '2740251', 'dolor.sit.amet@diamvelarcu.edu', 1, '1', NULL, NULL),
(78, 1, 1395478, 'Angelica Ruth Garrido Zipaquira', NULL, '3770094', 'a.neque.Nullam@Vivamus.org', 1, '1', NULL, NULL),
(79, 1, 1395478, 'Rosalia Ada Umba Vidual', NULL, '1230889', 'Cum.sociis@CurabiturdictumPhasellus.edu', 1, '1', NULL, NULL),
(80, 1, 1395478, 'Ruben Franco Aulestia Bossa', NULL, '8686718', 'In.faucibus@pedeacurna.ca', 1, '1', NULL, NULL),
(81, 1, 1395478, 'Gustavo Leopoldo Estrella Zuluaga', NULL, '9616550', 'quis.urna@elitelit.net', 1, '1', NULL, NULL),
(82, 1, 1395478, 'Delia Angelina Simo Canavera', NULL, '2155536', 'mi.lacinia@eunulla.edu', 1, '1', NULL, NULL),
(83, 1, 1395478, 'Domingo Vladimir Prisco Aunque', NULL, '6654106', 'leo@sapienmolestieorci.org', 1, '1', NULL, NULL),
(84, 1, 1395478, 'Ramiro Horacio Salgado Verderamo', NULL, '8002794', 'neque.pellentesque.massa@maurissagittis.org', 1, '1', NULL, NULL),
(85, 1, 1395478, 'Manuel Guillermo Antonio Toquica', NULL, '5016363', 'lorem.fringilla.ornare@acfacilisis.net', 1, '1', NULL, NULL),
(86, 1, 1395478, 'Alejo Santiago Lafaurie Rosasco', NULL, '7592321', 'felis@semconsequat.com', 1, '1', NULL, NULL),
(87, 1, 1395478, 'Adela Rocio Burgos Turriago', NULL, '4299014', 'eget.tincidunt.dui@enimdiamvel.com', 1, '1', NULL, NULL),
(88, 1, 1395478, 'Celso Hipolito Prias Wester', NULL, '1301200', 'libero.et@lobortisultrices.com', 1, '1', NULL, NULL),
(89, 1, 1395478, 'Lilia Vilma Antes Rosano', NULL, '9763577', 'mus.Aenean@luctus.com', 1, '1', NULL, NULL),
(90, 1, 1395478, 'America Nuria Sampedro Corral', '', '7981101', 'ornare.In@vulputatenisi.edu', 1, '1', NULL, NULL),
(91, 1, 1395478, 'Jeremias Marvin Loor Longas', NULL, '2205329', 'sed.dictum.eleifend@vitae.com', 1, '1', NULL, NULL),
(92, 1, 1395478, 'Diana Norma Borigoff Strasbugh', NULL, '8036919', 'velit.dui.semper@musProinvel.ca', 1, '1', NULL, NULL),
(93, 1, 1395478, 'Rocio Ximena Villoria Kelly', NULL, '8492738', 'posuere@imperdieterat.org', 1, '1', NULL, NULL),
(94, 1, 1395478, 'Yamila Leonora Kopp Zipamocha', NULL, '3809782', 'non.arcu@Sedidrisus.edu', 1, '1', NULL, NULL),
(95, 1, 1395478, 'Amalia Celina Buenes Alban', NULL, '6035657', 'Nunc.mauris.sapien@egestasblandit.org', 1, '1', NULL, NULL),
(96, 1, 1395478, 'Samanta Hilda Corradine Ferreira', NULL, '1660895', 'malesuada.vel.venenatis@Inatpede.org', 1, '1', NULL, NULL),
(97, 1, 1395478, 'Edgar Bartolome Bueno Rothstein', NULL, '4738777', 'feugiat.metus.sit@neceuismodin.edu', 1, '1', NULL, NULL),
(98, 1, 1395478, 'Jeronimo Aurelio Russi Villota', NULL, '3704463', 'ultrices.posuere.cubilia@orciquislectus.ca', 1, '1', NULL, NULL),
(99, 1, 1395478, 'Matilde Sofia Yipula Posadas', NULL, '5182804', 'parturient@pharetranibh.com', 1, '1', NULL, NULL),
(100, 1, 1395478, 'Gloria Flora Artuz Corrales', NULL, '4850643', 'vitae@enimconsequatpurus.ca', 1, '1', NULL, NULL),
(101, 1, 1395478, 'Blanca Adela Puell Arcaya', NULL, '9147293', 'lorem.semper@fermentumrisus.edu', 1, '1', NULL, NULL),
(102, 1, 1395478, 'Osvaldo Andre Reales Ubaldes', NULL, '4695605', 'gravida.Praesent.eu@Craseutellus.net', 1, '1', NULL, NULL),
(103, 1, 1395478, 'Paul Isaac Toro Henriquez', NULL, '5129657', 'adipiscing@rhoncus.co.uk', 1, '1', NULL, NULL),
(104, 1, 1395478, 'Ulises Celso Cepero Manzaneque', NULL, '2231843', 'Nullam@eu.co.uk', 1, '1', NULL, NULL),
(105, 1, 1395478, 'Maite Victoria Tunon Rockwood', NULL, '5118944', 'cursus.et.magna@idsapienCras.ca', 1, '1', NULL, NULL),
(106, 1, 1395478, 'Julieta Melina Wandurraga Baer', NULL, '7050632', 'ultrices@tellusSuspendisse.org', 1, '1', NULL, NULL),
(107, 1, 1395478, 'Ruben Manuel Palacio Augusto', NULL, '2938205', 'orci.luctus@scelerisquescelerisquedui.org', 1, '1', NULL, NULL),
(108, 1, 1395478, 'Luciano Armando Villada Piral', NULL, '8546203', 'mauris.id.sapien@vestibulumneque.ca', 1, '1', NULL, NULL),
(109, 1, 1395478, 'Camila Greta Carbo Stornaiuolo', NULL, '8265607', 'bibendum.sed.est@malesuadautsem.edu', 1, '1', NULL, NULL),
(110, 1, 1395478, 'Catalina Amara Navarrete Camarasa', NULL, '2137907', 'a.purus@nullaDonec.org', 1, '1', NULL, NULL),
(111, 1, 1395478, 'Leonel Leopoldo Yucason Borde', NULL, '9005395', 'elit.pellentesque@imperdiet.com', 1, '1', NULL, NULL),
(112, 1, 1395478, 'Monica Fatima Villaman Diaz', NULL, '8722690', 'diam.dictum@justofaucibus.net', 1, '1', NULL, NULL),
(113, 1, 1395478, 'Salvador Virgilio Buenahora Ferrero', NULL, '8342467', 'Integer.aliquam@ligulaAliquam.com', 1, '1', NULL, NULL),
(114, 1, 1395478, 'agata Nancy Patin Ruiz', NULL, '8642775', 'rhoncus.Nullam.velit@musDonec.ca', 1, '1', NULL, NULL),
(115, 1, 1395478, 'Imelda Maria Yegama Upegui', NULL, '8490603', 'in.consequat@feugiatSed.org', 1, '1', NULL, NULL),
(116, 1, 1395478, 'Ezequiel Ramiro Retis Cumplido', '', '2639817', 'Sed.eu.nibh@commodotinciduntnibh.org', 1, '1', NULL, NULL),
(117, 1, 1395478, 'Cecilia Griselda Bustillos Isabella', NULL, '7407151', 'consectetuer.adipiscing.elit@nonleoVivamus.edu', 1, '1', NULL, NULL),
(118, 1, 1395478, 'Mateo Ramiro Landron Urigo', NULL, '1204677', 'suscipit.est@nisiAeneaneget.org', 1, '1', NULL, NULL),
(119, 1, 1395478, 'Liliana Laura Yanguas Calancha', NULL, '5698042', 'egestas.nunc@ultricesposuere.co.uk', 1, '1', NULL, NULL),
(120, 1, 1395478, 'Gracia Jasmin Gonima Bachhuber', NULL, '2601711', 'Vivamus.nisi@egestasadui.edu', 1, '1', NULL, NULL),
(121, 1, 1395478, 'Cesar Antonio Vetro Rosano', NULL, '4710148', 'Ut@sedturpisnec.edu', 1, '1', NULL, NULL),
(122, 1, 1395478, 'Raimundo Demetrio Prats Vergel', NULL, '5597425', 'tellus@arcuSedeu.com', 1, '1', NULL, NULL),
(123, 1, 1395478, 'Vilma valentina Notiva Lagoeyte', NULL, '2355156', 'Phasellus.in.felis@Morbivehicula.edu', 1, '1', NULL, NULL),
(124, 1, 1395478, 'Cora Iris Urzola Varelas', NULL, '6690789', 'diam@aliquetProinvelit.ca', 1, '1', NULL, NULL),
(125, 1, 1395478, 'Maite Amparo Ochodez Salicetti', NULL, '1553375', 'rutrum@malesuada.net', 1, '1', NULL, NULL),
(126, 1, 1395478, 'Yajaira Juana Souza Tomich', NULL, '6218456', 'euismod@fringilla.net', 1, '1', NULL, NULL),
(127, 1, 1395478, 'Rolando Roger Reguera Alaix', NULL, '1715314', 'pede.et.risus@egetipsumSuspendisse.org', 1, '1', NULL, NULL),
(128, 1, 1395478, 'Gustavo Virgilio Isola Ziganek', NULL, '8303579', 'imperdiet.erat.nonummy@odioPhasellus.edu', 1, '1', NULL, NULL),
(129, 1, 1395478, 'angela Carmen Trejos Bula', NULL, '9052485', 'orci.in.consequat@convallisest.net', 1, '1', NULL, NULL),
(130, 1, 1395478, 'Aldo Noe Barazar Amado', NULL, '9165979', 'Donec.porttitor@Ut.com', 1, '1', NULL, NULL),
(131, 1, 1395478, 'Beatriz Telma Amorocho Asencio', NULL, '6518938', 'ipsum@pharetraNam.ca', 1, '1', NULL, NULL),
(132, 1, 1395478, 'Daniel Carmelo Lecc Pisa', NULL, '8171592', 'quam.a@consectetueradipiscingelit.org', 1, '1', NULL, NULL),
(133, 1, 1395478, 'Fidel Sebastian Sounders Washington', NULL, '7372801', 'lobortis.augue.scelerisque@sitametante.co.uk', 1, '1', NULL, NULL),
(134, 1, 1395478, 'Ines Isadora Bahamonde Astigarreta', NULL, '8056098', 'urna.justo@ametconsectetueradipiscing.org', 1, '1', NULL, NULL),
(135, 1, 1395478, 'Florencio Eufemio Kelafor Rios', NULL, '6499215', 'adipiscing@bibendum.com', 1, '1', NULL, NULL),
(136, 1, 1395478, 'Gabriela Marisol Leal Amorocho', NULL, '1522827', 'nec.leo@pedeNuncsed.edu', 1, '1', NULL, NULL),
(137, 1, 1395478, 'Ramon Emilio Ablanque Izquierdo', NULL, '7189667', 'dui.in@ultrices.org', 1, '1', NULL, NULL),
(138, 1, 1395478, 'Rosario Penelope Carballo Vallecilla', NULL, '8713608', 'nibh@atortorNunc.com', 1, '1', NULL, NULL),
(139, 1, 1395478, 'Salomon Agustin Otalora Randell', NULL, '4355374', 'sem.elit.pharetra@milorem.org', 1, '1', NULL, NULL),
(140, 1, 1395478, 'Eufemio Horacio Veraste Canon', NULL, '3753120', 'facilisis@Inscelerisquescelerisque.co.uk', 1, '1', NULL, NULL),
(141, 1, 1395478, 'Macarena Sandra Vaughan Sobelman', NULL, '8193005', 'tincidunt.nunc@Aliquamultricesiaculis.org', 1, '1', NULL, NULL),
(142, 1, 1395478, 'Velasco Filiberto Galvis Yopasa', NULL, '9369516', 'nibh.dolor@quis.co.uk', 1, '1', NULL, NULL),
(143, 1, 1395478, 'Federico Guillermo Rogers Vieda', NULL, '4009719', 'bibendum@metus.com', 1, '1', NULL, NULL),
(144, 1, 1395478, 'Adela Miranda Gandini Saez', NULL, '9535803', 'blandit@tristiqueneque.co.uk', 1, '1', NULL, NULL),
(145, 1, 1395478, 'Carolina Sara Jansa Cantor', NULL, '9521738', 'ac.mattis.semper@ultriciesligulaNullam.ca', 1, '1', NULL, NULL),
(146, 1, 1395478, 'Gertrudis Adela Salvatierra Alea', NULL, '9317618', 'tincidunt.adipiscing@acliberonec.ca', 1, '1', NULL, NULL),
(147, 1, 1395478, 'omar Aldo Santis Vigo', NULL, '6546879', 'ante@acmi.com', 1, '1', NULL, NULL),
(148, 1, 1395478, 'Emilio Sebastian Leano Maya', NULL, '9192422', 'et@etlacinia.co.uk', 1, '1', NULL, NULL),
(149, 1, 1395478, 'Flora Serena Albo Gamba', NULL, '4563612', 'vitae.semper@risusa.ca', 1, '1', NULL, NULL),
(150, 1, 1395478, 'Cristobal Victor Achiardi Cavaiola', NULL, '9519409', 'erat.volutpat.Nulla@Cumsociis.ca', 1, '1', NULL, NULL),
(151, 1, 1395478, 'Encarnacion Angelica Ocampo Kahn', NULL, '3431881', 'sem@maurisInteger.edu', 1, '1', NULL, NULL),
(152, 1, 1395478, 'Ezequiel Lorenzo Urrea Zapatero', NULL, '9556152', 'ornare.In@volutpatNulladignissim.net', 1, '1', NULL, NULL),
(153, 1, 1395478, 'Concepcion Sonia Anda Sarachaga', NULL, '7815256', 'Nulla.facilisis.Suspendisse@arcuAliquamultrices.edu', 1, '1', NULL, NULL),
(154, 1, 1395478, 'Cruz Luciano Seminario Pasos', NULL, '6822496', 'nunc.interdum@lobortisultrices.org', 1, '1', NULL, NULL),
(155, 1, 1395478, 'Cristina Amanda Virguez Alandete', NULL, '6366337', 'risus.Nulla.eget@cubiliaCurae;.edu', 1, '1', NULL, NULL),
(156, 1, 1395478, 'Max Felix Avaria Stockamore', NULL, '3341966', 'convallis.in@eunequepellentesque.co.uk', 1, '1', NULL, NULL),
(157, 1, 1395478, 'Luciano Fermin Almanzar Alvis', NULL, '6530088', 'mauris@egestas.edu', 1, '1', NULL, NULL),
(158, 1, 1395478, 'Bernardo Aquiles Penillo Standing', NULL, '6782314', 'tincidunt@miloremvehicula.org', 1, '1', NULL, NULL),
(159, 1, 1395478, 'Frida Dina Richard Aganduru', NULL, '3681027', 'elit@nonjustoProin.edu', 1, '1', NULL, NULL),
(160, 1, 1395478, 'Carolina Genoveva Sovalbarro Stiernon', NULL, '5512102', 'egestas@dignissim.com', 1, '1', NULL, NULL),
(161, 1, 1395478, 'Camila Maite Prati Illidge', NULL, '7242306', 'facilisis@dictumeleifendnunc.com', 1, '1', NULL, NULL),
(162, 1, 1395478, 'Evaristo Mariano Najera Soucarre', NULL, '1837891', 'magna.sed.dui@metus.co.uk', 1, '1', NULL, NULL),
(163, 1, 1395478, 'Amapola Pilar Turc Prados', NULL, '4896256', 'enim.non.nisi@erosNam.co.uk', 1, '1', NULL, NULL),
(164, 1, 1395478, 'Tobias Paul Sapiain Baracaldo', NULL, '9173481', 'lacinia@Sedeunibh.ca', 1, '1', NULL, NULL),
(165, 1, 1395478, 'Pedro Cristian Buritica Galleguillo', NULL, '3602376', 'turpis.In.condimentum@a.com', 1, '1', NULL, NULL),
(166, 1, 1395478, 'Estefania Celestina Altamirano Yepes', NULL, '2659459', 'ligula.consectetuer@sapiengravidanon.net', 1, '1', NULL, NULL),
(167, 1, 1395478, 'Fernando Diego Sola Cabezas', NULL, '5709191', 'tempus.scelerisque@enimnislelementum.com', 1, '1', NULL, NULL),
(168, 1, 1395478, 'Ezequiel Gustavo Pontareno Somosa', NULL, '7439495', 'erat.semper.rutrum@eratSed.org', 1, '1', NULL, NULL),
(169, 1, 1395478, 'Irene Mariam Pobras Perroni', NULL, '9604333', 'accumsan.convallis@vestibulumloremsit.co.uk', 1, '1', NULL, NULL),
(170, 1, 1395478, 'Paul Demetrio Puche Ortiz', '', '1286839', 'Nunc@bibendumullamcorper.ca', 1, '1', NULL, NULL),
(171, 1, 1395478, 'Hilda Araceli Lechuga Penoit', NULL, '7476248', 'Proin.nisl@odio.co.uk', 1, '1', NULL, NULL),
(172, 1, 1395478, 'Araceli Gertrudis Alduan Tibaquira', NULL, '4506585', 'ac.ipsum@sed.ca', 1, '1', NULL, NULL),
(173, 1, 1395478, 'Ramon Hector Rueda Lanz', NULL, '4525198', 'sagittis.semper.Nam@atarcuVestibulum.ca', 1, '1', NULL, NULL),
(174, 1, 1395478, 'Linda Tania Renteria Zarzosa', NULL, '7791508', 'amet.ornare@cursus.edu', 1, '1', NULL, NULL),
(175, 1, 1395478, 'Rodolfo Benjamin Victoria Gartner', NULL, '9191741', 'ligula.consectetuer.rhoncus@lobortistellus.net', 1, '1', NULL, NULL),
(176, 1, 1395478, 'Leticia Estela Nates Yusti', NULL, '4463413', 'dui.nec@magnaNam.net', 1, '1', NULL, NULL),
(177, 1, 1395478, 'Emilia Penelope Schatt Goldstuecker', NULL, '4580081', 'Vestibulum.ante.ipsum@dapibusrutrumjusto.net', 1, '1', NULL, NULL),
(178, 1, 1395478, 'Wilfredo Juan Noriega Rendon', NULL, '4957512', 'fermentum.arcu.Vestibulum@mauris.ca', 1, '1', NULL, NULL),
(179, 1, 1395478, 'Luciana Karina Illera Estrandelo', NULL, '3005595', 'nunc.est@ultricesDuisvolutpat.net', 1, '1', NULL, NULL),
(180, 1, 1395478, 'Tamara Macarena Portugues Soler', NULL, '5021023', 'posuere.at.velit@metusAliquamerat.edu', 1, '1', NULL, NULL),
(181, 1, 1395478, 'Mabel Angelica Villaneda Noguera', NULL, '4827143', 'condimentum.Donec@senectuset.ca', 1, '1', NULL, NULL),
(182, 1, 1395478, 'Alexander Marco Molina Buendia', NULL, '8616428', 'dolor.dapibus@commodo.net', 1, '1', NULL, NULL),
(183, 1, 1395478, 'Aldo Demetrio Salavarrieta Urnieta', NULL, '5767840', 'neque.Nullam@aliquamarcuAliquam.net', 1, '1', NULL, NULL),
(184, 1, 1395478, 'Evaristo Calixto Pfizemaier Requejo', NULL, '7495662', 'eget@cubiliaCurae;.edu', 1, '1', NULL, NULL),
(185, 1, 1395478, 'Paulina Amara Abussaid Cuellar', NULL, '3693784', 'leo.in@iaculisquis.ca', 1, '1', NULL, NULL),
(186, 1, 1395478, 'Adan Anibal Cerruti Scoglio', NULL, '4700122', 'arcu.vel.quam@vehicula.co.uk', 1, '1', NULL, NULL),
(187, 1, 1395478, 'Gladis Vanesa Colot Molleda', NULL, '7467566', 'semper.cursus@elitelit.ca', 1, '1', NULL, NULL),
(188, 1, 1395478, 'Sergio Homero Tenorio Bradock', NULL, '2357732', 'ante@lacinia.ca', 1, '1', NULL, NULL),
(189, 1, 1395478, 'Osvaldo Fernando Rota Mambi', NULL, '9007945', 'quis@euodioPhasellus.edu', 1, '1', NULL, NULL),
(190, 1, 1395478, 'Rebeca Lida Pfefferkorn Sorazono ', '', '8659017', 'hendrerit.Donec@posuerecubiliaCurae;.ca', 1, '1', NULL, NULL),
(191, 1, 1395478, 'Leonardo Cristobal Artuz Utrey', NULL, '4426351', 'nulla.Cras@velvenenatisvel.co.uk', 1, '1', NULL, NULL),
(192, 1, 1395478, 'Cecilia Celia Wiesner Paucar', NULL, '3474444', 'posuere.vulputate.lacus@ut.org', 1, '1', NULL, NULL),
(193, 1, 1395478, 'Vladimir Heriberto Alfaro Taborda', NULL, '7009672', 'enim@maurisa.ca', 1, '1', NULL, NULL),
(194, 1, 1395478, 'Sonia Ofelia Clavijo Pastran', NULL, '5358675', 'dolor.Donec.fringilla@diam.com', 1, '1', NULL, NULL),
(195, 1, 1395478, 'Antonia Yolanda Palazin Uruena', NULL, '8757818', 'pulvinar.arcu.et@commodo.com', 1, '1', NULL, NULL),
(196, 1, 1395478, 'Florencia Laura Vasco Heppolette', NULL, '2002341', 'dui@cursusetmagna.org', 1, '1', NULL, NULL),
(197, 1, 1395478, 'Leonel Adalberto Yuquem Dacosta', '', '6221778', 'condimentum@lobortis.org', 1, '1', NULL, NULL),
(198, 1, 1395478, 'Emilio Patricio Urbano Susco', NULL, '2706933', 'magna.Cras@Crasdolor.org', 1, '1', NULL, NULL),
(199, 1, 1395478, 'Daniela Talia Watts Botero', NULL, '1486485', 'consequat.dolor@non.co.uk', 1, '1', NULL, NULL),
(200, 1, 1395478, 'Jeremias Donato Robinson Villaluz', NULL, '9986122', 'adipiscing@rutrumnonhendrerit.net', 1, '1', NULL, NULL),
(201, 1, 1395478, 'Dario Archibaldo Naffah Walbridge', NULL, '6165531', 'dui.Fusce@iaculisaliquet.net', 1, '1', NULL, NULL),
(202, 1, 1395478, 'Gustavo Tobias Amariles Brasford', NULL, '8779168', 'ac@magna.net', 1, '1', NULL, NULL),
(203, 1, 1395478, 'Federico Ramiro Almanza Ramiqui', '', '0', '', 1, '1', NULL, NULL),
(204, 1, 1395478, 'Martin omar Puche Ortiz', '', '0', '', 1, '1', NULL, NULL),
(205, 1, 1395478, 'Saulo Andres Paternina', '', '0', '', 1, '1', NULL, NULL),
(206, 1, 1395478, 'Marisol  Diaz Choconta', '', '0', '', 1, '1', NULL, NULL),
(207, 1, 1395478, 'Samuel Buendia', '', '0', '', 1, '1', NULL, NULL),
(208, 1, 1395478, 'Saulo Andres roma', '', '0', '', 1, '1', NULL, NULL),
(209, 1, 1395478, 'Samuel Renteria ', '', '0', '', 1, '1', NULL, NULL),
(210, 1, 1395478, 'Wilton  Garcia', '', '0', '', 1, '1', NULL, NULL),
(211, 1, 1395478, 'juli castro', '', '0', '', 1, '1', NULL, NULL),
(212, 1, 1395478, 'Wilton  Jamaica', '', '0', '', 1, '1', NULL, NULL),
(213, 1, 1395478, 'carlos guatierrez', '', '0', '', 1, '1', NULL, NULL),
(214, 1, 1395478, 'pepe silva', '', '0', '', 1, '1', 2, NULL),
(215, 1, 1395478, 'alicia preciado', '', '0', '', 1, '1', 2, NULL),
(216, 1, 1395478, 'camilo torres', '', '0', '', 1, '1', 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipopq`
--

CREATE TABLE IF NOT EXISTS `tipopq` (
  `idtipopq` int(11) NOT NULL AUTO_INCREMENT,
  `nombretipopq` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idtipopq`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `tipopq`
--

INSERT INTO `tipopq` (`idtipopq`, `nombretipopq`, `descripcion`) VALUES
(0, 'No Ingreso', NULL),
(1, 'Privado', NULL),
(2, 'Comunal', NULL),
(3, 'Visitante', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipotercero`
--

CREATE TABLE IF NOT EXISTS `tipotercero` (
  `idtipotercero` int(11) NOT NULL AUTO_INCREMENT,
  `ntipotercero` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`idtipotercero`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `tipotercero`
--

INSERT INTO `tipotercero` (`idtipotercero`, `ntipotercero`) VALUES
(1, 'Cliente'),
(2, 'Provedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidadv`
--

CREATE TABLE IF NOT EXISTS `unidadv` (
  `IdUnidadV` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria de la vivienda',
  `Apartamento` varchar(255) DEFAULT NULL COMMENT 'Numero o nombre de la vivienda',
  `Descripcion` varchar(255) DEFAULT NULL COMMENT 'Una breve rese',
  `Coheficiente` float DEFAULT NULL COMMENT 'Numero de coheficiente asignado a la vivienda',
  `Matinmobiliaria` varchar(255) DEFAULT NULL COMMENT 'Numero Matri......',
  `IdUsuario_Creacion` varchar(255) DEFAULT NULL,
  `Fecha_Creacion` datetime DEFAULT NULL,
  `IdUsuario_Modificacion` varchar(255) DEFAULT NULL,
  `Fecha_Modificacion` datetime DEFAULT NULL,
  PRIMARY KEY (`IdUnidadV`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=103 ;

--
-- Volcar la base de datos para la tabla `unidadv`
--

INSERT INTO `unidadv` (`IdUnidadV`, `Apartamento`, `Descripcion`, `Coheficiente`, `Matinmobiliaria`, `IdUsuario_Creacion`, `Fecha_Creacion`, `IdUsuario_Modificacion`, `Fecha_Modificacion`) VALUES
(1, '1 102', '', 1.25, '50S02290', '', '0000-00-00 00:00:00', '', '2012-10-18 00:00:00'),
(2, '1 402', '', 234, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '2012-10-18 00:00:00'),
(3, '1 401', 'casa tipo1 ', 13, '12356mgt', NULL, '0000-00-00 00:00:00', NULL, '2012-10-18 00:00:00'),
(4, '3 205', 'CASA TIPO2 ', 25, 'yut5665', NULL, '0000-00-00 00:00:00', NULL, '2012-10-18 00:00:00'),
(5, '4 108', ' rerhb', 43, 'qwe98123', NULL, '0000-00-00 00:00:00', NULL, '2012-10-18 00:00:00'),
(6, '4 207', ' AKUSDABSDKJB', 78, 'QWE876', NULL, '0000-00-00 00:00:00', NULL, '2012-10-18 00:00:00'),
(7, '1 101', 'casa tipo 1 1', 1.25, 'ytr456', NULL, '0000-00-00 00:00:00', NULL, '2012-12-27 00:00:00'),
(8, '4 107', 'casa tipo1 ', 13, 'erterter', NULL, '0000-00-00 00:00:00', NULL, '2012-10-18 00:00:00'),
(9, '1 202', ' ertert', 56, 'erterdfg', NULL, '0000-00-00 00:00:00', NULL, '2012-10-18 00:00:00'),
(10, '1 201', 'pruebas', 1.25, '2ww', NULL, '0000-00-00 00:00:00', NULL, '2012-12-27 00:00:00'),
(11, '1 501', ' ', 1, '465465', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(12, '1 502', ' ', 1, '5465456', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(13, '2 103', ' ', 1, '65464654', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(14, '2 203', ' ', 1, '8978936', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(15, '2 104', ' ', 1, '3556464', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(16, '2 204', ' ', 1.25, 'mtrgrtfrt', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(17, '2 303', ' ', 1.25, 'msfiri345', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(18, '2 304', ' ', 1.25, 'MT22443553', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(19, '2 403', '  ', 1.25, 'MT22443553', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(20, '2 404', '   ', 1.25, 'MT22443553', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(21, '2 503', '    ', 1.25, 'MT22443553', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(22, '2 504', '     ', 1.25, 'MT22443553', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(23, '3 105', ' ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(24, '3 106', '  ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(25, '3 206', '   ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(26, '3 306', '    ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(27, '3 305', '     ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(28, '3 405', '      ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(29, '3 406', '       ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(30, '3 506', '        ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(31, '3 505', '         ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(32, '4 208', ' ', 1.25, '50S79012', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(33, '4 308', '  ', 1.25, '50S79012', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(34, '4 307', '   ', 1.25, '50S79012', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(35, '4 407', '    ', 1.25, '50S79012', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(36, '4 408', '     ', 1.25, '50S79012', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(37, '4 508', '      ', 1.25, '50S79012', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(38, '4 507', '       ', 1.25, '50S79012', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(39, '5 109', '', 1.25, '50S79011', NULL, '0000-00-00 00:00:00', NULL, '2012-12-27 00:00:00'),
(40, '5 410', ' ', 1.25, '50R12636', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(41, '1 301', ' ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(42, '1 302', '  ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(43, '5 110', ' ', 1.25, 'MT22443553', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(44, '5 209', ' ', 1.25, 'MT22443553', NULL, '0000-00-00 00:00:00', NULL, '2012-12-03 00:00:00'),
(45, '5 210', '  ', 1.25, 'MT22443553', NULL, '0000-00-00 00:00:00', NULL, '2012-12-03 00:00:00'),
(46, '5 310', '   ', 1.25, 'MT22443553', NULL, '0000-00-00 00:00:00', NULL, '2012-12-03 00:00:00'),
(47, '5 409', '    ', 1.25, 'MT22443553', NULL, '0000-00-00 00:00:00', NULL, '2012-12-03 00:00:00'),
(48, '5 510', '     ', 1.25, 'MT22443553', NULL, '0000-00-00 00:00:00', NULL, '2012-12-03 00:00:00'),
(49, '5 309', ' ', 1.25, 'MT12230598123', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(50, '5 509', '  ', 1.25, 'MT12230598123', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(51, '6 111', ' ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(52, '6 112', '  ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(53, '6 212', '   ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(54, '6 312', '    ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(55, '6 412', '     ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(56, '6 512', '      ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(57, '6 511', '       ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(58, '6 411', '        ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(59, '6 311', '         ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(60, '6 211', '          ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(61, '7 113', '           ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(62, '7 213', '            ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(63, '7 313', '             ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(64, '7 413', '              ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(65, '7 513', '               ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(66, '7 514', '                ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(67, '7 414', '                 ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(68, '7 314', '                  ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(69, '7 214', '                   ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(70, '7 114', '                    ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(71, '8 115', '                     ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(72, '8 215', '                      ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(73, '8 315', '                       ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(74, '8 415', '                        ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(75, '8 515', '                         ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(76, '8 516', '                          ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(77, '8 416', '                           ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(78, '8 316', '                            ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(79, '8 216', '                             ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(80, '8 116', '                              ', 1.25, 'MT12230598', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(81, '9 117', ' ', 1.25, 'kjdj', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(82, '9 118', ' urutu', 1.25, 'me13848', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(83, '9 218', ' grdfgdf', 1.25, 'nyjhgjn', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(84, '9 217', ' Casaokhrgkh', 1.25, 'Mt 98790038', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
(87, '9 319', 'casas tipo1 ', 12, 'qwe123', NULL, '0000-00-00 00:00:00', NULL, '2013-03-15 07:55:16'),
(88, '9 318', 'casa ', 21.1, 'qwe123', NULL, '0000-00-00 00:00:00', NULL, '2013-03-15 07:54:34'),
(89, '9 419', '1 ', 1, '1', NULL, '0000-00-00 00:00:00', NULL, '2013-03-15 07:55:50'),
(90, '9 418', ' regkjhrdgh', 1.25, 'efhregfhoi', NULL, NULL, NULL, NULL),
(91, '9 420', ' ', 23, 'uio789', NULL, NULL, NULL, NULL),
(92, '1 2033', ' duplex', 0, 'm3ee', '', NULL, NULL, NULL),
(93, '9 2012', ' duplex', 23, '3mw2x', '', NULL, NULL, NULL),
(94, '9 2014', ' apto', 0, '3m345', '', NULL, NULL, NULL),
(95, '9 2015', ' sencillo', 23, '34m3cx', '', NULL, NULL, NULL),
(96, '9 2016', ' duplex', 23, '3m345', '', NULL, NULL, NULL),
(97, '9 2017', ' duplex', 23, '34m3cx', '', NULL, NULL, NULL),
(98, '9 2018', ' duplex', 23, '3m345', '', NULL, NULL, NULL),
(100, '9 2019', ' duplex', 30, '34m3cx', '11', NULL, NULL, NULL),
(101, '9 2020', ' duplex', 30, '3m345', '11', '2013-04-03 00:00:00', NULL, NULL),
(102, '9 2021', 'pruebas', 2444, '3m345', '11', '2013-04-03 21:21:25', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `IdUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `clave` mediumtext NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `Nombres` varchar(255) DEFAULT NULL COMMENT 'En esta columna se colocan los Nombres de los Propietarios o los residentes',
  `Apellidos` varchar(255) DEFAULT NULL COMMENT 'En esta columna se colocan los Apellidos de los Propietarios o los residentes',
  `IdTipoidentificacion` int(11) DEFAULT NULL COMMENT 'Este dato viene de la Tabla Identificacion',
  `NoDocumento` varchar(255) DEFAULT NULL COMMENT 'Se coloca el numero de documento',
  `Email` varchar(255) DEFAULT NULL COMMENT 'Se coloca la direcci',
  `FechaNacimiento` date DEFAULT NULL COMMENT 'Se coloca la fecha de Nacimiento',
  `LugarNacimiento` varchar(255) DEFAULT NULL COMMENT 'Se coloca la ciudad de Nacimiento',
  `Telefono` int(11) DEFAULT NULL COMMENT 'Se coloca el numero de Telefono Fijo',
  `Celular` int(11) DEFAULT NULL COMMENT 'Se coloca el numero de Telefono movil',
  `IdGenero` int(11) DEFAULT NULL COMMENT 'Este dato viene de la Tabla Genero',
  `Direccion` varchar(255) DEFAULT NULL COMMENT 'Se llena en caso de que la persona viva en otro sitio',
  `NombreContacto` varchar(255) DEFAULT NULL COMMENT 'Se ingresa el nombre de una persona de contacto',
  `TelefonoContacto` int(11) DEFAULT NULL COMMENT 'Se coloca el numero de Telefono del contacto',
  `CelularContacto` int(11) DEFAULT NULL COMMENT 'se Coloca el numero de tel',
  `FechaIngreso` date NOT NULL,
  `Fecha_Creacion` date NOT NULL,
  PRIMARY KEY (`IdUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `login`, `clave`, `tipo`, `Nombres`, `Apellidos`, `IdTipoidentificacion`, `NoDocumento`, `Email`, `FechaNacimiento`, `LugarNacimiento`, `Telefono`, `Celular`, `IdGenero`, `Direccion`, `NombreContacto`, `TelefonoContacto`, `CelularContacto`, `FechaIngreso`, `Fecha_Creacion`) VALUES
(1, 'root', '202cb962ac59075b964b07152d234b70', '1', 'Cesar Augus', 'Gomez', 1, '123', '', '0000-00-00', '', 0, 0, 0, '', '_', 0, 0, '0000-00-00', '0000-00-00'),
(8, 'andlop', '', '6', 'andres mauricio', 'lopez carrasco', 1, '2341', 'condimentum@lobortis.org', '2013-03-01', 'chia', 234, 12343444, 1, 'cr 244', 'uno_dos', 0, 0, '2013-03-31', '2013-03-31'),
(10, 'nomaped', '56cfe2907f1c9a45d94b996b8de5be47', '4', 'nombre uno', 'apellido uno', 1, '23412344', 'cesargomez853@gmail.com', '2013-03-01', 'Bogota', 123, 456, 1, 'cr 234', 'nombre dos_apellidos dos', 9876, 12334, '2013-03-31', '2013-03-31'),
(11, 'hoyaye', '81dc9bdb52d04dc20036dbd8313ed055', '2', 'hoyuuuuu', 'ayer', 1, '1235', 'condimentum@lobortis.org', '0000-00-00', '', 0, 0, 1, '', '_', 0, 0, '2013-03-31', '2013-03-31'),
(12, 'nomape', '56cfe2907f1c9a45d94b996b8de5be47', '6', 'nombre uno', 'apellido uno', 1, '23412', 'cesargomez853@gmail.com', '2013-03-01', 'Bogota', 123, 456, 1, 'cr 234', 'nombre dos_apellidos dos', 9876, 12334, '2013-03-31', '2013-03-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE IF NOT EXISTS `vehiculos` (
  `idvehiculo` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(10) DEFAULT NULL,
  `idcolor` int(11) DEFAULT NULL,
  `idmarca` int(11) DEFAULT NULL,
  `modelo` varchar(5) DEFAULT NULL,
  `idresidentes` int(5) NOT NULL,
  PRIMARY KEY (`idvehiculo`),
  KEY `idx_vehiculos` (`idmarca`),
  KEY `idx_vehiculos_0` (`idcolor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcar la base de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`idvehiculo`, `placa`, `idcolor`, `idmarca`, `modelo`, `idresidentes`) VALUES
(1, 'lod246', 1, 3, NULL, 0),
(2, 'uio123', 1, 1, '98', 86),
(3, 'cbr600', 1, 1, '2008', 195),
(5, '', 0, 0, '', 206),
(6, 'tyu567', 1, 1, '', 62),
(7, 'tyu567', 1, 1, '', 213),
(8, '', 0, 0, '', 46),
(9, 'uio789', 1, 1, '', 127),
(10, 'iop789', 1, 1, '2002', 33),
(11, '', 0, 0, '', 213),
(12, 'tgb678', 2, 1, '', 213),
(13, '', 0, 0, '', 71),
(14, 'mko654', 1, 1, '', 206),
(15, 'wer2341', 1, 2, '', 112),
(16, '', 0, 0, '', 73),
(17, 'tyu589', 1, 1, '', 123),
(18, 'sed335', 1, 1, '2009', 86),
(19, '', 0, 0, '', 0),
(20, '', 0, 0, '', 0),
(21, '', 0, 0, '', 121),
(22, '', 0, 0, '', 120),
(23, '', 0, 0, '', 12),
(24, 'kmk676', 1, 1, '2009', 236),
(25, 'nmb989', 2, 1, '2008', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehparq`
--

CREATE TABLE IF NOT EXISTS `vehparq` (
  `idvehparq` int(11) NOT NULL AUTO_INCREMENT,
  `idvehiculo` int(11) DEFAULT NULL,
  `idparqueadero` int(11) DEFAULT NULL,
  PRIMARY KEY (`idvehparq`),
  KEY `idx_vehparq` (`idparqueadero`),
  KEY `idx_vehparq_0` (`idvehiculo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcar la base de datos para la tabla `vehparq`
--

INSERT INTO `vehparq` (`idvehparq`, `idvehiculo`, `idparqueadero`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(10, 10, 13),
(11, 11, 0),
(12, 12, 14),
(13, 13, 0),
(14, 14, 15),
(15, 15, 14),
(16, 16, 0),
(17, 17, 15),
(18, 18, 16),
(19, 19, 17),
(20, 20, 18),
(21, 21, 0),
(22, 22, 0),
(23, 23, 0),
(24, 24, 22),
(25, 25, 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitantes`
--

CREATE TABLE IF NOT EXISTS `visitantes` (
  `IdVisitantes` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Numero calve del visitante',
  `Nombres` varchar(255) DEFAULT NULL COMMENT 'Nombre del visitante',
  `Apellidos` varchar(255) DEFAULT NULL COMMENT 'Apellido del visitante',
  `IdTipoidentificacion` int(11) DEFAULT NULL COMMENT 'Tipo de documento del visitante',
  `NoDocumento` varchar(255) DEFAULT NULL COMMENT 'Nomero de documento del visitante',
  `IdGenero` int(11) DEFAULT NULL COMMENT 'Genero del visitante',
  `IdUsuario_Creacion` varchar(255) DEFAULT NULL,
  `Fecha_Creacion` datetime DEFAULT NULL,
  `IdUsuario_Modificacion` varchar(255) DEFAULT NULL,
  `Fecha_Modificacion` datetime DEFAULT NULL,
  `carro` varchar(10) NOT NULL,
  `placa` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `color` varchar(255) NOT NULL,
  `parqueadero` varchar(50) NOT NULL,
  `novedades` mediumtext NOT NULL,
  `edad` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdVisitantes`),
  KEY `IdTipoidentificacion` (`IdTipoidentificacion`),
  KEY `IdGenero` (`IdGenero`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Volcar la base de datos para la tabla `visitantes`
--

INSERT INTO `visitantes` (`IdVisitantes`, `Nombres`, `Apellidos`, `IdTipoidentificacion`, `NoDocumento`, `IdGenero`, `IdUsuario_Creacion`, `Fecha_Creacion`, `IdUsuario_Modificacion`, `Fecha_Modificacion`, `carro`, `placa`, `marca`, `color`, `parqueadero`, `novedades`, `edad`) VALUES
(1, 'gio', 'gallego', 1, '80188737|', 1, NULL, '2012-12-26 00:00:00', NULL, '2012-12-26 00:00:00', '', '', '', '', '', '', NULL),
(2, 'gio', 'castro', 1, '80188737', 1, NULL, '2013-03-05 00:00:00', NULL, '2013-03-05 00:00:00', '', '', '0', '0', '', 'tecnico telmex', 29),
(3, 'camilo', 'cepeda', 1, '89789890', 1, NULL, '2013-03-13 00:00:00', NULL, '2013-03-13 00:00:00', '', 'tyu567', '1', '1', '10', 'domicilio pizza 90 grados', 23),
(4, 'juan', 'restrepo', 1, '678900987', 1, NULL, '2013-03-13 00:00:00', NULL, '2013-03-13 00:00:00', '', 'tyu567', '1', '1', '10', '', 20),
(5, 'pepe', 'caicedo', 1, '789900', 1, NULL, '2013-03-13 00:00:00', NULL, '2013-03-13 00:00:00', '', '', '', '', '', '', 23),
(8, 'daniel', 'sanchez', 1, '89678678', 1, NULL, '2013-03-14 00:00:00', NULL, '2013-03-14 00:00:00', '', 'tgb678', '1', '2', '14', 'telmex', 28),
(9, 'erika', 'gutierrez', 1, '7895678', 2, NULL, '2013-03-14 00:00:00', NULL, '2013-03-14 00:00:00', '', '', '', '', '', '', 26),
(10, 'gio', 'prieto', 1, '5674567', 1, NULL, '2013-03-14 00:00:00', NULL, '2013-03-14 00:00:00', '', 'mko654', '1', '1', '14', 'domicilio de la pizza', 29),
(11, 'pepe', 'guarin', 1, '4565678', 1, NULL, '2013-03-14 00:00:00', NULL, '2013-03-14 00:00:00', '', 'wer2341', '2', '1', '14', 'telmex', 45),
(12, 'jorge', 'godoy', 1, '12345345', 1, NULL, '2013-03-14 00:00:00', NULL, '2013-03-14 00:00:00', '', '', '', '', '', '', 23),
(13, 'julian', 'acevedo', 1, '4565555', 1, NULL, '2013-03-14 00:00:00', NULL, '2013-03-14 00:00:00', '', 'tyu589', '1', '1', '14', '', 34),
(14, 'Joaquin ', 'zanabria', 1, '20957849', 1, NULL, '2013-03-16 00:00:00', NULL, '2013-03-16 00:00:00', '', '', '', '', '', 'sefredg', 45),
(15, 'Laura', 'Sinisterra', 1, '7458643', 2, NULL, '2013-03-16 00:00:00', NULL, '2013-03-16 00:00:00', '', '', '', '', '', '', 23),
(16, 'Pasrani', 'hassem', 1, '45748579', 1, NULL, '2013-03-16 00:00:00', NULL, '2013-03-16 00:00:00', '', '', '', '', '', '', 27),
(17, 'agust', 'gomez', 1, '2342', 1, NULL, '2013-04-02 00:00:00', NULL, '2013-04-02 00:00:00', 'X', 'uyr567', '1', '3', '19', 'asfdasfafasfs', 24),
(18, 'hoyyyy', 'sssss', 1, '234513', 1, NULL, '2013-04-02 00:00:00', NULL, '2013-04-02 00:00:00', 'X', 'JOL345', '1', '1', '20', 'seguimiento', 24),
(19, 'Augusto', 'Gomez', 1, '23567', 1, NULL, '2013-04-02 00:00:00', NULL, '2013-04-02 00:00:00', 'X', 'BSL825', '1', '2', '20', 'SE HACEN PRUEBAS DEL CARGUE', 27),
(20, 'asdfafs', 'asdasfs', 1, '987', 1, '', '0000-00-00 00:00:00', NULL, '2013-04-03 00:00:00', '', '', '', '', '0', '', 23),
(21, 'asdfas', 'adsasfasf', 1, '98723', 1, '', '0000-00-00 00:00:00', NULL, '2013-04-03 00:00:00', '', '', '', '', '0', '', 23),
(22, 'xzvfadsf', 'asdfgadsfads', 1, '9866', 1, '11', '0000-00-00 00:00:00', NULL, '2013-04-04 00:00:00', 'X', 'po323', '1', '1', '20', '', 3),
(23, 'wwwww', 'EEEEE23', 1, '234567', 1, '11', '0000-00-00 00:00:00', NULL, '2013-04-04 00:00:00', '', '', '', '', '0', '', 0),
(24, 'arrrrrr', 'eeeeeeeee32222', 1, '23412', 1, '8', '2013-04-05 23:16:49', '8', '2013-04-05 23:36:09', '', '', '', '', '', '', 23),
(25, 'asdaffas', 'asdfasfasf', 1, '334444', 1, '8', '2013-04-05 23:55:44', '8', '2013-04-06 00:03:17', '', '', '', '', '', 'asfasd', 23),
(26, 'asdfas', 'asfaf', 1, '4566', 1, '8', '2013-04-07 09:07:27', NULL, '2013-04-07 00:00:00', '', 'ASD123', '1', '2', '0', '', 34),
(27, 'carlos', 'gomez', 1, '123345564', 1, '1', '2013-04-12 08:26:59', NULL, '2013-04-12 00:00:00', '', '', '', '', '', '', 32),
(28, 'ramiro', 'torres', 1, '67867867', 1, '1', '2013-04-12 08:27:27', NULL, '2013-04-12 00:00:00', '', '', '', '', '0', '', 45),
(29, 'camilo', 'aldana', 1, '768887', 1, '1', '2013-04-12 21:05:14', NULL, '2013-04-12 00:00:00', 'X', 'uyu989', '1', '1', '14', '', 45),
(30, 'carlos', 'zuluaga', 1, '3456345', 1, '1', '2013-04-13 20:48:21', NULL, '2013-04-13 00:00:00', '', '', '', '', '', '', 34),
(31, 'juli', 'camacho', 1, '6786786', 1, '1', '2013-04-13 20:49:29', NULL, '2013-04-13 00:00:00', 'X', 'qwe111', '1', '1', '14', '', 43),
(32, 'carla', 'girqaldo', 1, '3434343', 2, '1', '2013-04-13 20:55:08', '1', '2013-04-13 20:55:44', '', '', '', '', '', 'acueducto', 23),
(33, 'camila', 'pataquiva', 1, '987987', 2, '1', '2013-04-13 20:56:20', NULL, '2013-04-13 00:00:00', 'X', 'mlp098', '1', '1', '20', 'energia', 45),
(34, 'lorena', 'toro', 1, '78786767', 2, '1', '2013-04-13 20:58:24', NULL, '2013-04-13 00:00:00', '', '', '', '', '', 'energia', 32),
(35, 'camilo', 'castro', 1, '6789789', 1, '1', '2013-04-13 20:59:45', NULL, '2013-04-13 00:00:00', 'X', 'oio909', '1', '1', '14', 'acueducto', 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE IF NOT EXISTS `visitas` (
  `IdVisitas` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Indice de Visitas',
  `IdVisitantes` int(11) DEFAULT NULL,
  `IdUnidadV` int(11) DEFAULT NULL COMMENT 'Dato viene de la Tabla UnidadV',
  `IdResidentes` int(11) DEFAULT NULL COMMENT 'El Dato viene de la Tabla Residentes',
  `Diaentrada` date DEFAULT NULL COMMENT 'Se coloca la Fecha que entra el visitante',
  `Horaentrada` time DEFAULT NULL COMMENT 'Se coloca la hora de entrada',
  `Diasalida` date DEFAULT NULL COMMENT 'Se coloca la fecha de Salida',
  `Horasalida` time DEFAULT NULL COMMENT 'Se coloca la hora de Salida del Visitante',
  `IdUsuario_Creacion` varchar(255) DEFAULT NULL COMMENT 'Se coloca el Usuario que creo el dato ',
  `Fecha_Creacion` datetime DEFAULT NULL COMMENT 'Fecha que se creo el registro',
  `IdUsuario_Modificacion` varchar(255) DEFAULT NULL COMMENT 'Ultimo Usuario que modifico el dato',
  `Fecha_Modificacion` datetime DEFAULT NULL COMMENT 'En esta columna se Coloca la Fecha con hora de la modificacion del Registro',
  PRIMARY KEY (`IdVisitas`),
  KEY `IdVisitantes` (`IdVisitantes`),
  KEY `IdUnidadV` (`IdUnidadV`),
  KEY `IdResidentes` (`IdResidentes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Volcar la base de datos para la tabla `visitas`
--

INSERT INTO `visitas` (`IdVisitas`, `IdVisitantes`, `IdUnidadV`, `IdResidentes`, `Diaentrada`, `Horaentrada`, `Diasalida`, `Horasalida`, `IdUsuario_Creacion`, `Fecha_Creacion`, `IdUsuario_Modificacion`, `Fecha_Modificacion`) VALUES
(1, 2, 82, 206, '2013-03-05', '10:29:09', '2013-03-05', '10:30:18', NULL, NULL, NULL, NULL),
(2, 3, 71, 62, '2013-03-13', '13:20:45', '2013-03-13', '13:25:05', NULL, NULL, NULL, NULL),
(3, 4, 84, 213, '2013-03-13', '13:22:24', '2013-03-13', '13:25:00', NULL, NULL, NULL, NULL),
(4, 5, 22, 46, '2013-03-13', '13:23:39', '2013-03-13', '13:24:46', NULL, NULL, NULL, NULL),
(7, 8, 84, 213, '2013-03-14', '14:58:13', '2013-03-14', '15:17:23', NULL, NULL, NULL, NULL),
(8, 9, 71, 71, '2013-03-14', '15:00:03', '2013-03-14', '15:17:17', NULL, NULL, NULL, NULL),
(9, 10, 82, 206, '2013-03-14', '15:07:45', '2013-03-14', '15:14:44', NULL, NULL, NULL, NULL),
(10, 11, 5, 112, '2013-03-14', '15:18:41', '2013-04-05', '23:37:22', NULL, NULL, NULL, NULL),
(11, 12, 12, 73, '2013-03-14', '15:19:42', '2013-03-16', '06:41:56', NULL, NULL, NULL, NULL),
(12, 13, 65, 123, '2013-03-14', '15:21:59', '2013-03-14', '15:23:47', NULL, NULL, NULL, NULL),
(13, 14, 40, 121, '2013-03-16', '06:46:47', '2013-03-16', '07:02:02', NULL, NULL, NULL, NULL),
(14, 15, 75, 120, '2013-03-16', '07:02:57', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 16, 34, 12, '2013-03-16', '07:11:18', '2013-03-16', '07:18:18', NULL, NULL, NULL, NULL),
(16, 17, 13, 190, '2013-04-02', '21:39:46', '2013-04-02', '21:43:36', NULL, NULL, NULL, NULL),
(17, 17, 13, 190, '2013-04-02', '21:42:55', '2013-04-02', '21:44:12', NULL, NULL, NULL, NULL),
(18, 18, 47, 24, '2013-04-02', '21:51:00', '2013-04-02', '21:52:26', NULL, NULL, NULL, NULL),
(19, 18, 15, 126, '2013-04-02', '21:57:51', '2013-04-02', '22:09:22', NULL, NULL, NULL, NULL),
(20, 18, 12, 73, '2013-04-02', '23:08:52', '2013-04-02', '23:11:07', NULL, NULL, NULL, NULL),
(21, 18, 10, 40, '2013-04-02', '23:11:34', '2013-04-02', '23:12:36', NULL, NULL, NULL, NULL),
(22, 19, 45, 80, '2013-04-02', '23:16:56', '2013-04-04', '14:52:28', NULL, NULL, NULL, NULL),
(24, 20, 74, 43, '2013-04-03', '22:30:31', NULL, NULL, '', NULL, NULL, NULL),
(25, 21, 74, 43, '2013-04-03', '22:35:28', '2013-04-04', '14:51:57', '', NULL, NULL, NULL),
(26, 22, 47, 24, '2013-04-04', '14:41:40', '2013-04-04', '14:51:18', '11', NULL, NULL, NULL),
(27, 22, 47, 24, '2013-04-04', '14:52:56', '2013-04-05', '23:38:20', '11', NULL, NULL, NULL),
(28, 23, 8, 152, '2013-04-04', '14:57:35', NULL, NULL, '11', NULL, NULL, NULL),
(29, 24, 12, 56, '2013-04-05', '23:16:49', NULL, NULL, '8', NULL, NULL, NULL),
(30, 25, 7, 86, '2013-04-05', '23:55:44', NULL, NULL, '8', NULL, NULL, NULL),
(31, 26, 69, 16, '2013-04-07', '09:07:27', '2013-04-07', '09:08:28', '8', NULL, NULL, NULL),
(32, 26, 8, 77, '2013-04-07', '09:08:47', NULL, NULL, '8', NULL, NULL, NULL),
(34, 28, 13, 194, '2013-04-12', '08:27:27', NULL, NULL, '1', NULL, NULL, NULL),
(35, 29, 19, 18, '2013-04-12', '21:05:14', '2013-04-12', '21:06:24', '1', NULL, NULL, NULL),
(36, 30, 10, 113, '2013-04-13', '20:48:21', '2013-04-13', '20:50:54', '1', NULL, NULL, NULL),
(37, 31, 18, 57, '2013-04-13', '20:49:29', '2013-04-13', '20:50:52', '1', NULL, NULL, NULL),
(38, 32, 4, 182, '2013-04-13', '20:55:08', '2013-04-13', '20:58:10', '1', NULL, NULL, NULL),
(39, 33, 6, 101, '2013-04-13', '20:56:20', '2013-04-13', '20:58:08', '1', NULL, NULL, NULL),
(40, 34, 29, 79, '2013-04-13', '20:58:24', NULL, NULL, '1', NULL, NULL, NULL),
(41, 35, 6, 28, '2013-04-13', '20:59:45', NULL, NULL, '1', NULL, NULL, NULL);

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `afecta`
--
ALTER TABLE `afecta`
  ADD CONSTRAINT `afecta_ibfk_1` FOREIGN KEY (`iddocumentos`) REFERENCES `documentos` (`iddocumentos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `afecta_ibfk_2` FOREIGN KEY (`idpuc`) REFERENCES `puc` (`idpuc`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `aptobod`
--
ALTER TABLE `aptobod`
  ADD CONSTRAINT `fk_aptobod_bodegas` FOREIGN KEY (`idbodega`) REFERENCES `bodegas` (`idbodega`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_aptobod_unidadv` FOREIGN KEY (`IdunidadV`) REFERENCES `unidadv` (`IdUnidadV`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `aptoparq`
--
ALTER TABLE `aptoparq`
  ADD CONSTRAINT `fk_aptoparq_parqueaderos` FOREIGN KEY (`idparqueadero`) REFERENCES `parqueaderos` (`idparqueadero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_aptoparq_unidadv` FOREIGN KEY (`IdunidadV`) REFERENCES `unidadv` (`IdUnidadV`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `fk_funcionarios_cargos` FOREIGN KEY (`cargo`) REFERENCES `cargos` (`idcargo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_funcionarios_identificacion` FOREIGN KEY (`tipodocumento`) REFERENCES `identificacion` (`IdTipoidentificacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `historico`
--
ALTER TABLE `historico`
  ADD CONSTRAINT `historico_ibfk_1` FOREIGN KEY (`IdGenero`) REFERENCES `genero` (`IdGenero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `historico_ibfk_2` FOREIGN KEY (`IdUnidadV`) REFERENCES `unidadv` (`IdUnidadV`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `historico_ibfk_3` FOREIGN KEY (`IdTipoidentificacion`) REFERENCES `identificacion` (`IdTipoidentificacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `movcuentas`
--
ALTER TABLE `movcuentas`
  ADD CONSTRAINT `fk_movcuentas_movimiento` FOREIGN KEY (`idmovimiento`) REFERENCES `movimiento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_movcuentas_puc` FOREIGN KEY (`codcuenta`) REFERENCES `puc` (`idpuc`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `movimiento`
--
ALTER TABLE `movimiento`
  ADD CONSTRAINT `fk_movimiento_afecta` FOREIGN KEY (`tipodoc`) REFERENCES `documentos` (`iddocumentos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_movimiento_estado` FOREIGN KEY (`estado`) REFERENCES `estado` (`idestado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_movimiento_terceros` FOREIGN KEY (`tercero`) REFERENCES `terceros` (`idterceros`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `parqueaderos`
--
ALTER TABLE `parqueaderos`
  ADD CONSTRAINT `fk_parqueaderos_tipopq` FOREIGN KEY (`idtipopq`) REFERENCES `tipopq` (`idtipopq`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `puc`
--
ALTER TABLE `puc`
  ADD CONSTRAINT `puc_ibfk_1` FOREIGN KEY (`nivel`) REFERENCES `nivel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `repositorio`
--
ALTER TABLE `repositorio`
  ADD CONSTRAINT `repositorio_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`IdUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `residentes`
--
ALTER TABLE `residentes`
  ADD CONSTRAINT `residentes_ibfk_1` FOREIGN KEY (`IdGenero`) REFERENCES `genero` (`IdGenero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `residentes_ibfk_2` FOREIGN KEY (`IdUnidadV`) REFERENCES `unidadv` (`IdUnidadV`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `residentes_ibfk_3` FOREIGN KEY (`IdTipoidentificacion`) REFERENCES `identificacion` (`IdTipoidentificacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `terceros`
--
ALTER TABLE `terceros`
  ADD CONSTRAINT `fk_terceros_identificacion` FOREIGN KEY (`tipodocumento`) REFERENCES `identificacion` (`IdTipoidentificacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_terceros_regimen` FOREIGN KEY (`regimen`) REFERENCES `regimen` (`idregimen`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_terceros_tipotercero` FOREIGN KEY (`tipotercero`) REFERENCES `tipotercero` (`idtipotercero`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `fk_vehiculos_color` FOREIGN KEY (`idcolor`) REFERENCES `color` (`idcolor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vehiculos_marcaveh` FOREIGN KEY (`idmarca`) REFERENCES `marcaveh` (`idmarca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vehparq`
--
ALTER TABLE `vehparq`
  ADD CONSTRAINT `fk_vehparq_parqueaderos` FOREIGN KEY (`idparqueadero`) REFERENCES `parqueaderos` (`idparqueadero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vehparq_vehiculos` FOREIGN KEY (`idvehiculo`) REFERENCES `vehiculos` (`idvehiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `visitantes`
--
ALTER TABLE `visitantes`
  ADD CONSTRAINT `visitantes_ibfk_1` FOREIGN KEY (`IdGenero`) REFERENCES `genero` (`IdGenero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `visitantes_ibfk_2` FOREIGN KEY (`IdTipoidentificacion`) REFERENCES `identificacion` (`IdTipoidentificacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD CONSTRAINT `visitas_ibfk_1` FOREIGN KEY (`IdVisitantes`) REFERENCES `visitantes` (`IdVisitantes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `visitas_ibfk_2` FOREIGN KEY (`IdUnidadV`) REFERENCES `unidadv` (`IdUnidadV`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `visitas_ibfk_3` FOREIGN KEY (`IdResidentes`) REFERENCES `residentes` (`IdResidentes`) ON DELETE NO ACTION ON UPDATE NO ACTION;
