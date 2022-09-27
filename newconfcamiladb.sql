-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.36 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para confcamila
CREATE DATABASE IF NOT EXISTS `confcamila` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `confcamila`;

-- Volcando estructura para tabla confcamila.bitacora_producto
CREATE TABLE IF NOT EXISTS `bitacora_producto` (
  `IdBitacora` int(11) NOT NULL AUTO_INCREMENT,
  `IdProducto` int(20) DEFAULT NULL,
  `Accion` varchar(50) DEFAULT NULL,
  `Fecha` datetime DEFAULT NULL,
  `Nombre_Nuevo` varchar(50) DEFAULT NULL,
  `Nombre_Viejo` varchar(50) DEFAULT NULL,
  `Codigo_Nuevo` int(30) DEFAULT NULL,
  `Codigo_Viejo` int(30) DEFAULT NULL,
  `Descripcion_Nuevo` varchar(200) DEFAULT NULL,
  `Descripcion_Viejo` varchar(200) DEFAULT NULL,
  `Stock_Nuevo` decimal(20,0) DEFAULT NULL,
  `Stock_Viejo` decimal(20,0) DEFAULT NULL,
  `PrecioVenta_Nuevo` decimal(10,2) DEFAULT NULL,
  `PrecioVenta_Viejo` decimal(10,2) DEFAULT NULL,
  `PrecioOferta_Nuevo` decimal(10,2) DEFAULT NULL,
  `PrecioOferta_Viejo` decimal(10,2) DEFAULT NULL,
  `Estado_Nuevo` enum('Activo','Inactivo') DEFAULT NULL,
  `Estado_Viejo` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdBitacora`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla confcamila.bitacora_producto: ~51 rows (aproximadamente)
DELETE FROM `bitacora_producto`;
/*!40000 ALTER TABLE `bitacora_producto` DISABLE KEYS */;
INSERT INTO `bitacora_producto` (`IdBitacora`, `IdProducto`, `Accion`, `Fecha`, `Nombre_Nuevo`, `Nombre_Viejo`, `Codigo_Nuevo`, `Codigo_Viejo`, `Descripcion_Nuevo`, `Descripcion_Viejo`, `Stock_Nuevo`, `Stock_Viejo`, `PrecioVenta_Nuevo`, `PrecioVenta_Viejo`, `PrecioOferta_Nuevo`, `PrecioOferta_Viejo`, `Estado_Nuevo`, `Estado_Viejo`) VALUES
	(12, 17, 'Se Inserto', '2022-04-15 01:18:23', 'BARBIJO TELA', NULL, 2001, NULL, 'BARBIJO DE TELA SIN BALBULA', NULL, 10, NULL, 20.00, NULL, 15.00, NULL, 'Activo', NULL),
	(13, 16, 'Se actualizo', '2022-04-15 01:30:57', 'BARBIJO CAMUFLADO', 'barbijo', 1014, 1014, 'BARBIJO JUVENIL', 'barbijo juvenil', 10, 10, 20.00, 20.00, 15.00, 15.00, 'Activo', 'Activo'),
	(14, 17, 'Se actualizo', '2022-04-15 02:45:08', 'BARBIJO TELA', 'BARBIJO TELA', 2001, 2001, 'BARBIJO DE TELA SIN BALBULA', 'BARBIJO DE TELA SIN BALBULA', 8, 10, 20.00, 20.00, 15.00, 15.00, 'Activo', 'Activo'),
	(15, 5, 'Se actualizo', '2022-04-15 02:45:08', 'DEPORTIVA CUELLO V', 'deportiva cuello v', 1005, 1005, 'POLERA SUBLIMADA DEPORTIVA ', 'polera sublimada deportiva ', 9, 10, 90.00, 90.00, 80.00, 80.00, 'Activo', 'Activo'),
	(16, 10, 'Se actualizo', '2022-04-22 16:32:52', 'POLO', 'polo', 1008, 1008, 'POLO PARA MUJER CON CUELLO ALTO ', 'polo para mujer con cuello alto ', 9, 10, 100.00, 100.00, 90.00, 90.00, 'Activo', 'Activo'),
	(17, 4, 'Se actualizo', '2022-04-22 16:32:52', 'POLO MUJER', 'polo mujer', 1004, 1004, 'POLERA DE DOS COLORES BLANCO Y PLOMO EN LOS HOMBROS \r\n', 'polera de dos colores blanco y plomo en los hombros \r\n', 9, 10, 100.00, 100.00, 90.00, 90.00, 'Activo', 'Activo'),
	(18, 1, 'Se actualizo', '2022-04-24 11:25:20', 'POLO', 'poloooo', 1001, 1001, 'POLERA ROJA ', 'polera roja ', 4, 4, 100.00, 100.00, 80.00, 80.00, 'Activo', 'Activo'),
	(19, 1, 'Se actualizo', '2022-04-24 11:25:25', 'POLO', 'POLO', 1001, 1001, 'POLERA ROJA ', 'POLERA ROJA ', 4, 4, 100.00, 100.00, 80.00, 80.00, 'Inactivo', 'Activo'),
	(20, 18, 'Se Inserto', '2022-04-24 11:43:35', 'POLERA ', NULL, 3001, NULL, 'POLERA POLO', NULL, 10, NULL, 100.00, NULL, 90.00, NULL, 'Activo', NULL),
	(21, 2, 'Se actualizo', '2022-04-24 12:17:19', 'POLERA CUELLO V', 'polera cuello v', 1002, 1002, 'POLERA DE DOS COLORES ', 'polera de dos colores ', 22, 23, 150.00, 150.00, 140.00, 140.00, 'Activo', 'Activo'),
	(22, 4, 'Se actualizo', '2022-04-24 12:17:19', 'POLO MUJER', 'POLO MUJER', 1004, 1004, 'POLERA DE DOS COLORES BLANCO Y PLOMO EN LOS HOMBROS \r\n', 'POLERA DE DOS COLORES BLANCO Y PLOMO EN LOS HOMBROS \r\n', 8, 9, 100.00, 100.00, 90.00, 90.00, 'Activo', 'Activo'),
	(23, 2, 'Se actualizo', '2022-04-24 12:33:58', 'POLERA CUELLO V', 'POLERA CUELLO V', 1002, 1002, 'POLERA DE DOS COLORES ', 'POLERA DE DOS COLORES ', -1, 22, 150.00, 150.00, 140.00, 140.00, 'Activo', 'Activo'),
	(24, 17, 'Se actualizo', '2022-04-24 12:33:58', 'BARBIJO TELA', 'BARBIJO TELA', 2001, 2001, 'BARBIJO DE TELA SIN BALBULA', 'BARBIJO DE TELA SIN BALBULA', 7, 8, 20.00, 20.00, 15.00, 15.00, 'Activo', 'Activo'),
	(25, 2, 'Se actualizo', '2022-04-24 12:35:35', 'POLERA CUELLO V', 'POLERA CUELLO V', 1002, 1002, 'POLERA DE DOS COLORES ', 'POLERA DE DOS COLORES ', 11, -1, 150.00, 150.00, 140.00, 140.00, 'Activo', 'Activo'),
	(26, 6, 'Se actualizo', '2022-04-24 12:36:26', 'POLO CON CUELLO ', 'polo con cuello ', 1006, 1006, 'POLERA POLO CON CUELLO BLANCO ', 'polera polo con cuello blanco ', 8, 10, 100.00, 100.00, 90.00, 90.00, 'Activo', 'Activo'),
	(27, 4, 'Se actualizo', '2022-04-24 12:36:26', 'POLO MUJER', 'POLO MUJER', 1004, 1004, 'POLERA DE DOS COLORES BLANCO Y PLOMO EN LOS HOMBROS \r\n', 'POLERA DE DOS COLORES BLANCO Y PLOMO EN LOS HOMBROS \r\n', 5, 8, 100.00, 100.00, 90.00, 90.00, 'Activo', 'Activo'),
	(28, 2, 'Se actualizo', '2022-04-25 08:39:53', 'POLERA CUELLO V', 'POLERA CUELLO V', 1002, 1002, 'POLERA DE DOS COLORES ', 'POLERA DE DOS COLORES ', 11, 11, 150.00, 150.00, 140.00, 140.00, 'Activo', 'Activo'),
	(29, 19, 'Se Inserto', '2022-04-25 08:43:28', 'POLERA CUELLO', NULL, 4001, NULL, 'POLERA DE DOS COLORES A RAYAS ', NULL, 20, NULL, 100.00, NULL, 90.00, NULL, 'Activo', NULL),
	(30, 3, 'Se actualizo', '2022-04-25 09:07:01', 'POLERA CUELLO CADETE', 'POLERA CUELLO CADETE', 1003, 1003, 'POLERA DE DOS COLORES BLANCO ABAJO Y ARRIBA AZUL CON LÍNEAS ANARANJADAS ', 'POLERA DE DOS COLORES BLANCO ABAJO Y ARRIBA AZUL CON LÍNEAS ANARANJADAS ', 6, 8, 110.00, 110.00, 100.00, 100.00, 'Activo', 'Activo'),
	(31, 20, 'Se Inserto', '2022-04-25 15:31:31', 'BARBIJO', NULL, 1020, NULL, 'BARBIJO DE TELA ', NULL, 10, NULL, 20.00, NULL, 15.00, NULL, 'Activo', NULL),
	(32, 20, 'Se actualizo', '2022-04-25 15:31:52', 'BARBIJOO', 'BARBIJO', 1020, 1020, 'BARBIJO DE TELA ', 'BARBIJO DE TELA ', 10, 10, 20.00, 20.00, 15.00, 15.00, 'Activo', 'Activo'),
	(33, 20, 'Se actualizo', '2022-04-25 15:31:58', 'BARBIJOO', 'BARBIJOO', 1020, 1020, 'BARBIJO DE TELA ', 'BARBIJO DE TELA ', 10, 10, 20.00, 20.00, 15.00, 15.00, 'Inactivo', 'Activo'),
	(34, 3, 'Se actualizo', '2022-04-25 15:41:49', 'POLERA CUELLO CADETE', 'POLERA CUELLO CADETE', 1003, 1003, 'POLERA DE DOS COLORES BLANCO ABAJO Y ARRIBA AZUL CON LÍNEAS ANARANJADAS ', 'POLERA DE DOS COLORES BLANCO ABAJO Y ARRIBA AZUL CON LÍNEAS ANARANJADAS ', 4, 6, 110.00, 110.00, 100.00, 100.00, 'Activo', 'Activo'),
	(35, 6, 'Se actualizo', '2022-04-25 15:41:49', 'POLO CON CUELLO ', 'POLO CON CUELLO ', 1006, 1006, 'POLERA POLO CON CUELLO BLANCO ', 'POLERA POLO CON CUELLO BLANCO ', 5, 8, 100.00, 100.00, 90.00, 90.00, 'Activo', 'Activo'),
	(36, 2, 'Se actualizo', '2022-04-25 21:43:18', 'POLERA CUELLO VV', 'POLERA CUELLO V', 1002, 1002, 'POLERA DE DOS COLORES ', 'POLERA DE DOS COLORES ', 11, 11, 150.00, 150.00, 140.00, 140.00, 'Activo', 'Activo'),
	(37, 13, 'Se actualizo', '2022-04-25 21:43:24', 'SHORT CORTO', 'short corto', 1011, 1011, 'SHORT PARA NIÑO CORTO ', 'short para niño corto ', 10, 10, 50.00, 50.00, 40.00, 40.00, 'Inactivo', 'Activo'),
	(38, 21, 'Se Inserto', '2022-04-25 21:45:32', 'POLERA POLO1', NULL, 5001, NULL, 'POLO CON CUELLO', NULL, 10, NULL, 100.00, NULL, 90.00, NULL, 'Activo', NULL),
	(39, 2, 'Se actualizo', '2022-04-25 21:54:28', 'POLERA CUELLO VV', 'POLERA CUELLO VV', 1002, 1002, 'POLERA DE DOS COLORES ', 'POLERA DE DOS COLORES ', 9, 11, 150.00, 150.00, 140.00, 140.00, 'Activo', 'Activo'),
	(40, 7, 'Se actualizo', '2022-04-25 21:54:28', 'POLO CON CUELLO ', 'POLO CON CUELLO ', 1007, 1007, 'POLERA POLO DISEÑO SIMPLE', 'POLERA POLO DISEÑO SIMPLE', 6, 9, 100.00, 100.00, 90.00, 90.00, 'Activo', 'Activo'),
	(41, 22, 'Se Inserto', '2022-04-26 00:27:41', 'POLERA', NULL, 1021, NULL, 'POLO DE DOS COLORES', NULL, 10, NULL, 100.00, NULL, 90.00, NULL, 'Activo', NULL),
	(42, 2, 'Se actualizo', '2022-04-26 00:42:39', 'POLERA CUELLO VV', 'POLERA CUELLO VV', 1002, 1002, 'POLERA DE DOS COLORES ', 'POLERA DE DOS COLORES ', 7, 9, 150.00, 150.00, 140.00, 140.00, 'Activo', 'Activo'),
	(43, 11, 'Se actualizo', '2022-04-26 00:42:39', 'SHORT CORTO ', 'short corto ', 1009, 1009, 'SHORT CORTO DEPORTIVO PARA HOMBRE', 'short corto deportivo para hombre', 7, 10, 70.00, 70.00, 60.00, 60.00, 'Activo', 'Activo'),
	(44, 2, 'Se actualizo', '2022-04-26 17:19:02', 'POLERA CUELLO ', 'POLERA CUELLO VV', 1002, 1002, 'POLERA DE DOS COLORES ', 'POLERA DE DOS COLORES ', 7, 7, 150.00, 150.00, 140.00, 140.00, 'Activo', 'Activo'),
	(45, 12, 'Se actualizo', '2022-04-26 17:19:09', 'SHORT CORTO ', 'short corto ', 1010, 1010, 'SHORT CORTO CON COLORES ROJO, BLANCO Y AZUL COMBINADO A RAYAS', 'short corto con colores rojo, blanco y azul combinado a rayas', 10, 10, 70.00, 70.00, 60.00, 60.00, 'Inactivo', 'Activo'),
	(46, 23, 'Se Inserto', '2022-04-26 17:21:38', 'POLERA', NULL, 1050, NULL, 'POLERA CON CUELLO ', NULL, 10, NULL, 100.00, NULL, 90.00, NULL, 'Activo', NULL),
	(47, 5, 'Se actualizo', '2022-04-26 17:29:47', 'DEPORTIVA CUELLO V', 'DEPORTIVA CUELLO V', 1005, 1005, 'POLERA SUBLIMADA DEPORTIVA ', 'POLERA SUBLIMADA DEPORTIVA ', 8, 9, 90.00, 90.00, 80.00, 80.00, 'Activo', 'Activo'),
	(48, 10, 'Se actualizo', '2022-04-26 17:29:47', 'POLO', 'POLO', 1008, 1008, 'POLO PARA MUJER CON CUELLO ALTO ', 'POLO PARA MUJER CON CUELLO ALTO ', 8, 9, 100.00, 100.00, 90.00, 90.00, 'Activo', 'Activo'),
	(49, 2, 'Se actualizo', '2022-04-26 20:12:11', 'POLERA CUELLOO', 'POLERA CUELLO ', 1002, 1002, 'POLERA DE DOS COLORES ', 'POLERA DE DOS COLORES ', 7, 7, 150.00, 150.00, 140.00, 140.00, 'Activo', 'Activo'),
	(50, 24, 'Se Inserto', '2022-04-26 20:13:52', 'BARBIJO ', NULL, 1060, NULL, 'BARBIJO DE TELA', NULL, 10, NULL, 20.00, NULL, 15.00, NULL, 'Activo', NULL),
	(51, 2, 'Se actualizo', '2022-04-26 20:23:47', 'POLERA CUELLOO', 'POLERA CUELLOO', 1002, 1002, 'POLERA DE DOS COLORES ', 'POLERA DE DOS COLORES ', 5, 7, 150.00, 150.00, 140.00, 140.00, 'Activo', 'Activo'),
	(52, 7, 'Se actualizo', '2022-04-26 20:23:47', 'POLO CON CUELLO ', 'POLO CON CUELLO ', 1007, 1007, 'POLERA POLO DISEÑO SIMPLE', 'POLERA POLO DISEÑO SIMPLE', 3, 6, 100.00, 100.00, 90.00, 90.00, 'Activo', 'Activo'),
	(53, 2, 'Se actualizo', '2022-04-26 22:20:34', 'POLERA CUELLO', 'POLERA CUELLOO', 1002, 1002, 'POLERA DE DOS COLORES ', 'POLERA DE DOS COLORES ', 5, 5, 150.00, 150.00, 140.00, 140.00, 'Activo', 'Activo'),
	(54, 25, 'Se Inserto', '2022-04-26 22:22:24', 'POLERA', NULL, 1061, NULL, '', NULL, 10, NULL, 100.00, NULL, 90.00, NULL, 'Activo', NULL),
	(55, 25, 'Se actualizo', '2022-04-26 22:22:47', 'POLERA', 'POLERA', 1061, 1061, '', '', 10, 10, 100.00, 100.00, 90.00, 90.00, 'Activo', 'Activo'),
	(56, 2, 'Se actualizo', '2022-04-26 22:30:57', 'POLERA CUELLO', 'POLERA CUELLO', 1002, 1002, 'POLERA DE DOS COLORES ', 'POLERA DE DOS COLORES ', 2, 5, 150.00, 150.00, 140.00, 140.00, 'Activo', 'Activo'),
	(57, 6, 'Se actualizo', '2022-04-26 22:30:57', 'POLO CON CUELLO ', 'POLO CON CUELLO ', 1006, 1006, 'POLERA POLO CON CUELLO BLANCO ', 'POLERA POLO CON CUELLO BLANCO ', 3, 5, 100.00, 100.00, 90.00, 90.00, 'Activo', 'Activo'),
	(58, 2, 'Se actualizo', '2022-04-28 15:31:44', 'POLERA CUELLOO', 'POLERA CUELLO', 1002, 1002, 'POLERA DE DOS COLORES ', 'POLERA DE DOS COLORES ', 2, 2, 150.00, 150.00, 140.00, 140.00, 'Activo', 'Activo'),
	(59, 2, 'Se actualizo', '2022-04-28 15:31:50', 'POLERA CUELLOO', 'POLERA CUELLOO', 1002, 1002, 'POLERA DE DOS COLORES ', 'POLERA DE DOS COLORES ', 2, 2, 150.00, 150.00, 140.00, 140.00, 'Inactivo', 'Activo'),
	(60, 26, 'Se Inserto', '2022-04-28 15:33:40', 'POLERA', NULL, 1070, NULL, 'POLERA CON CUELLO', NULL, 10, NULL, 100.00, NULL, 90.00, NULL, 'Activo', NULL),
	(61, 3, 'Se actualizo', '2022-04-28 15:45:21', 'POLERA CUELLO CADETE', 'POLERA CUELLO CADETE', 1003, 1003, 'POLERA DE DOS COLORES BLANCO ABAJO Y ARRIBA AZUL CON LÍNEAS ANARANJADAS ', 'POLERA DE DOS COLORES BLANCO ABAJO Y ARRIBA AZUL CON LÍNEAS ANARANJADAS ', 2, 4, 110.00, 110.00, 100.00, 100.00, 'Activo', 'Activo'),
	(62, 10, 'Se actualizo', '2022-04-28 15:45:21', 'POLO', 'POLO', 1008, 1008, 'POLO PARA MUJER CON CUELLO ALTO ', 'POLO PARA MUJER CON CUELLO ALTO ', 5, 8, 100.00, 100.00, 90.00, 90.00, 'Activo', 'Activo'),
	(63, 5, 'Se actualizo', '2022-05-05 20:02:00', 'DEPORTIVA CUELLO V', 'DEPORTIVA CUELLO V', 1005, 1005, 'POLERA SUBLIMADA DEPORTIVA ', 'POLERA SUBLIMADA DEPORTIVA ', 7, 8, 90.00, 90.00, 80.00, 80.00, 'Activo', 'Activo'),
	(64, 3, 'Se actualizo', '2022-05-05 20:02:00', 'POLERA CUELLO CADETE', 'POLERA CUELLO CADETE', 1003, 1003, 'POLERA DE DOS COLORES BLANCO ABAJO Y ARRIBA AZUL CON LÍNEAS ANARANJADAS ', 'POLERA DE DOS COLORES BLANCO ABAJO Y ARRIBA AZUL CON LÍNEAS ANARANJADAS ', 1, 2, 110.00, 110.00, 100.00, 100.00, 'Activo', 'Activo');
/*!40000 ALTER TABLE `bitacora_producto` ENABLE KEYS */;

-- Volcando estructura para tabla confcamila.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `IdCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`IdCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla confcamila.categoria: ~3 rows (aproximadamente)
DELETE FROM `categoria`;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`IdCategoria`, `Nombre`) VALUES
	(13, 'JUVENIL'),
	(14, 'NIÑOS'),
	(15, 'ADULTO');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Volcando estructura para tabla confcamila.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `IdCliente` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Telefono` decimal(30,0) DEFAULT NULL,
  `Nit` varchar(50) DEFAULT NULL,
  `Gmail` varchar(100) DEFAULT NULL,
  `IdTipoCliente` int(11) DEFAULT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdCliente`),
  UNIQUE KEY `Nit` (`Nit`),
  KEY `FK_cliente_tipocliente` (`IdTipoCliente`),
  CONSTRAINT `FK_cliente_tipocliente` FOREIGN KEY (`IdTipoCliente`) REFERENCES `tipocliente` (`IdTipoCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla confcamila.cliente: ~20 rows (aproximadamente)
DELETE FROM `cliente`;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`IdCliente`, `Nombre`, `Direccion`, `Telefono`, `Nit`, `Gmail`, `IdTipoCliente`, `Estado`) VALUES
	(1, 'Juan Perez', 'Av.Beni', 7, '123746578', 'juan.prez@gmail.com', 1, 'Activo'),
	(2, 'Ubicar', 'Av.Brasil', 3388556, '23345666', 'ubicar@gmail.com', 2, 'Activo'),
	(3, 'Dayana Foronda', 'Av.Campana', 77884444, '75756756', 'dayana@gmail.com', 1, 'Activo'),
	(4, 'Tigo', 'Av.Santa Cruz', 3343453, '34534534', 'tigo@gmail.com', 2, 'Activo'),
	(5, 'Roberto Zarate', 'Av. Cristo Rey', 76634244, '12456789', 'roberto@gmail.com', 1, 'Activo'),
	(6, 'Flora Paco', 'Av. Cristo Reyyy', 7554433555, '1244667777', 'flora.paco@gmail.commm', 1, 'Activo'),
	(7, 'Vivaaaa', 'Av. Landivaraa', 345678999, '12345678888', 'viva@gmail.comm', 2, 'Activo'),
	(8, 'Liseth Zarate ', 'Av. Beni 3er anillo ', 75675678, '123534545', 'lis@gmail.com', 1, 'Activo'),
	(9, 'Entel', 'Av. Cristo Rey', 754643456, '345656445', 'entel.2020@gmail.com', 2, 'Activo'),
	(10, 'Oscar', 'Padilla', 765456456, '4534534643', 'oscar@gmail.com', 1, 'Inactivo'),
	(11, 'Santos', 'Av. Cristo Rey', 76273123, '234546456', 'santos@gmail.com', 1, 'Activo'),
	(12, 'Zarate', 'Av. Santus Domunt 4to anillo', 76634244, '3564574534', 'zarate@gmail.com', 2, 'Activo'),
	(13, '', '', 0, '', '', 1, 'Inactivo'),
	(14, 'Epson', 'Av. Cristo Rey', 76423424, '42356634534', 'epson@gmail.com', 2, 'Activo'),
	(15, 'CINE CENTERR', 'AV. EL TROMPILLO #333', 34534534, '1234567', 'cine_center@gmail.com', 2, 'Activo'),
	(16, 'OSCAR', 'AV. AVAROA', 75464564, '1234890', 'oscar@gmail.com', 1, 'Activo'),
	(17, 'DELIA CUELLAR', 'AV. BANZER 6TO ANILLO ', 76327432, '212344534', '', 2, 'Activo'),
	(18, 'FIDALGA', 'AV.BOLIVIA', 0, '84263784', '', 2, 'Activo'),
	(19, 'TOYOTA', 'AV.BOLIVIA', 6756757, '675756756', 'toyota@gmail.com', 2, 'Activo'),
	(20, 'CRHISTIAN', 'AV.BOLIVAR', 5464564, '786478234', 'chris@gmail.com', 1, 'Activo'),
	(21, 'NISSAN', 'AV.PIRAI', 768767, '456456456', 'nissan@gmail.com', 2, 'Activo'),
	(22, 'MARCO', 'AV.BOLIVAR', 7236472, '72356472', 'marco@gmail.com', 1, 'Activo'),
	(23, 'UPDS', 'AV. BENI', 76532746, '76537463', 'upds@gmail.com', 2, 'Activo');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Volcando estructura para tabla confcamila.color
CREATE TABLE IF NOT EXISTS `color` (
  `IdColor` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdColor`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla confcamila.color: ~18 rows (aproximadamente)
DELETE FROM `color`;
/*!40000 ALTER TABLE `color` DISABLE KEYS */;
INSERT INTO `color` (`IdColor`, `Nombre`, `Estado`) VALUES
	(2, 'NEGRO', 'Activo'),
	(5, 'ROJO', 'Activo'),
	(6, 'BLANCO', 'Activo'),
	(7, 'VERDE', 'Activo'),
	(8, 'CAFE', 'Activo'),
	(9, 'AZUL', 'Activo'),
	(10, 'CELESTE', 'Activo'),
	(11, 'CREMA', 'Activo'),
	(14, 'AMARILLO', 'Activo'),
	(15, 'NARANJA', 'Activo'),
	(16, 'VIOLETA', 'Activo'),
	(17, 'AZUL MARINO', 'Activo'),
	(18, 'AZUL FRANCIA', 'Activo'),
	(19, 'ROSADO', 'Activo'),
	(20, 'LILA', 'Activo'),
	(21, 'FUCSIA', 'Activo'),
	(22, 'COMBINADO', 'Activo'),
	(23, 'CAMUFLADO', 'Activo');
/*!40000 ALTER TABLE `color` ENABLE KEYS */;

-- Volcando estructura para tabla confcamila.detalleventa
CREATE TABLE IF NOT EXISTS `detalleventa` (
  `IdDetalleVenta` int(11) NOT NULL AUTO_INCREMENT,
  `Precio` varchar(50) NOT NULL,
  `Cantidad` varchar(30) NOT NULL,
  `Importe` varchar(30) NOT NULL,
  `IdVenta` int(11) DEFAULT NULL,
  `IdProducto` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdDetalleVenta`),
  KEY `FK_Personal_Venta` (`IdVenta`),
  KEY `FK_Personal_Producto` (`IdProducto`),
  CONSTRAINT `FK_Personal_Producto` FOREIGN KEY (`IdProducto`) REFERENCES `producto1` (`IdProducto`),
  CONSTRAINT `FK_Personal_Venta` FOREIGN KEY (`IdVenta`) REFERENCES `venta` (`IdVenta`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla confcamila.detalleventa: ~31 rows (aproximadamente)
DELETE FROM `detalleventa`;
/*!40000 ALTER TABLE `detalleventa` DISABLE KEYS */;
INSERT INTO `detalleventa` (`IdDetalleVenta`, `Precio`, `Cantidad`, `Importe`, `IdVenta`, `IdProducto`) VALUES
	(1, '100.00', '1', '100.00', 35, 1),
	(2, '100.00', '2', '200.00', 36, 1),
	(3, '100.00', '1', '100.00', 37, 1),
	(4, '100.00', '1', '100.00', 38, 1),
	(5, '100.00', '1', '100.00', 39, 1),
	(6, '100.00', '1', '100.00', 41, 1),
	(7, '90.00', '1', '90.00', 41, 5),
	(8, '100.00', '1', '100.00', 41, 6),
	(9, '150.00', '2', '300.00', 42, 2),
	(10, '110.00', '2', '220.00', 43, 3),
	(11, '100.00', '1', '100.00', 43, 7),
	(12, '20.00', '2', '40.00', 44, 17),
	(13, '90.00', '1', '90.00', 44, 5),
	(14, '100.00', '1', '100.00', 45, 10),
	(15, '100.00', '1', '100.00', 45, 4),
	(16, '150.00', '1', '150.00', 46, 2),
	(17, '100.00', '1', '100.00', 46, 4),
	(19, '20.00', '1', '20.00', 47, 17),
	(20, '100.00', '2', '200.00', 48, 6),
	(21, '100.00', '3', '300.00', 48, 4),
	(22, '110.00', '2', '220.00', 49, 3),
	(23, '110.00', '2', '220.00', 50, 3),
	(24, '100.00', '3', '300.00', 50, 6),
	(25, '150.00', '2', '300.00', 51, 2),
	(26, '100.00', '3', '300.00', 51, 7),
	(27, '150.00', '2', '300.00', 52, 2),
	(28, '70.00', '3', '210.00', 52, 11),
	(29, '90.00', '1', '90.00', 53, 5),
	(30, '100.00', '1', '100.00', 53, 10),
	(31, '150.00', '2', '300.00', 54, 2),
	(32, '100.00', '3', '300.00', 54, 7),
	(33, '150.00', '3', '450.00', 55, 2),
	(34, '100.00', '2', '200.00', 55, 6),
	(35, '110.00', '2', '220.00', 56, 3),
	(36, '100.00', '3', '300.00', 56, 10),
	(37, '90.00', '1', '90.00', 57, 5),
	(38, '110.00', '1', '110.00', 57, 3);
/*!40000 ALTER TABLE `detalleventa` ENABLE KEYS */;

-- Volcando estructura para tabla confcamila.empresa
CREATE TABLE IF NOT EXISTS `empresa` (
  `IdEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Telefono` int(50) NOT NULL DEFAULT '0',
  `Gmail` varchar(100) NOT NULL,
  `Nit` varchar(200) NOT NULL,
  `Logo` varchar(50) DEFAULT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdEmpresa`),
  UNIQUE KEY `Telefono` (`Telefono`),
  UNIQUE KEY `Gmail` (`Gmail`),
  UNIQUE KEY `Nit` (`Nit`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla confcamila.empresa: ~2 rows (aproximadamente)
DELETE FROM `empresa`;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` (`IdEmpresa`, `Nombre`, `Direccion`, `Telefono`, `Gmail`, `Nit`, `Logo`, `Estado`) VALUES
	(2, 'Tecsaaaa', 'Av. Santus Domunt 4to anillo', 75513825, 'tecsa@gmail.com', '12447335', 'logo_ofial_tecsa2.png', 'Activo'),
	(3, 'Tecsa Rs', 'Av. Beni 3er anillo ', 38273483, 'tecsa_rs@gmail.com', '12213133', 'logoORIGINAL25.png', 'Activo');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;

-- Volcando estructura para tabla confcamila.marca
CREATE TABLE IF NOT EXISTS `marca` (
  `IdMarca` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdMarca`),
  UNIQUE KEY `Nombre` (`Nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla confcamila.marca: ~7 rows (aproximadamente)
DELETE FROM `marca`;
/*!40000 ALTER TABLE `marca` DISABLE KEYS */;
INSERT INTO `marca` (`IdMarca`, `Nombre`, `Estado`) VALUES
	(20, 'ADIDAS', 'Activo'),
	(21, 'CONFCAMILA', 'Activo'),
	(22, 'PUMA', 'Activo'),
	(23, 'NIKE', 'Activo'),
	(24, 'SONYy', 'Inactivo'),
	(25, 'GATOS', 'Inactivo'),
	(26, 'SON', 'Inactivo');
/*!40000 ALTER TABLE `marca` ENABLE KEYS */;

-- Volcando estructura para tabla confcamila.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `IdMenu` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  `Link` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IdMenu`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla confcamila.menu: ~20 rows (aproximadamente)
DELETE FROM `menu`;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`IdMenu`, `Nombre`, `Link`) VALUES
	(1, 'Inicio', 'dashboard'),
	(2, 'Producto', 'Mantenimiento/Producto1_controller'),
	(3, 'Talla', 'Mantenimiento/Talla_controller'),
	(4, 'Categoria', 'Mantenimiento/Categoria_controller'),
	(5, 'Tipo de pago', 'Mantenimiento/TipoPago_controller'),
	(6, 'Personal', 'Mantenimiento/Personal_controller'),
	(7, 'Usuario', 'Mantenimiento/Usuario_controller'),
	(8, 'Profesión', 'Mantenimiento/Profesion_controller'),
	(9, 'Roles', 'Mantenimiento/Roles_controller'),
	(10, 'Nacionalidad', 'Mantenimiento/Nacionalidad_controller'),
	(11, 'Color', 'Mantenimiento/Color_controller'),
	(12, 'SubCategoria', 'Mantenimiento/Subcategoria_controller'),
	(13, 'Imagenes', 'Mantenimiento/Imagen_controller'),
	(14, 'Empresa', 'Mantenimiento/Empresa_controller'),
	(15, 'Cliente Juridico', 'Mantenimiento/Juridico_controller'),
	(16, 'Cliente Natural', 'Mantenimiento/Natural_controller'),
	(17, 'Venta', 'Movimiento/Venta_controller/add'),
	(18, 'Lista de ventas', 'Movimiento/Venta_controller'),
	(19, 'Reporte de ventas', 'Reportes/ReporteVenta_controller'),
	(20, 'Permisos', 'Administrador/Permisos_controller'),
	(21, 'marca', 'Mantenimiento/Marca'),
	(22, 'modelo', 'Mantenimiento/Modelo_controller');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;

-- Volcando estructura para tabla confcamila.modelo
CREATE TABLE IF NOT EXISTS `modelo` (
  `IdModelo` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdModelo`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla confcamila.modelo: ~3 rows (aproximadamente)
DELETE FROM `modelo`;
/*!40000 ALTER TABLE `modelo` DISABLE KEYS */;
INSERT INTO `modelo` (`IdModelo`, `Nombre`, `Estado`) VALUES
	(4, 'SUBLIMADA', 'Activo'),
	(5, 'DEPORTIVO', 'Activo'),
	(6, 'BORDADO', 'Activo'),
	(13, 'NORMAL', 'Activo');
/*!40000 ALTER TABLE `modelo` ENABLE KEYS */;

-- Volcando estructura para tabla confcamila.permisos
CREATE TABLE IF NOT EXISTS `permisos` (
  `IdPermiso` int(11) NOT NULL AUTO_INCREMENT,
  `IdMenu` int(11) DEFAULT NULL,
  `IdRol` int(11) DEFAULT NULL,
  `Leer` int(11) DEFAULT NULL,
  `Insertar` int(11) DEFAULT NULL,
  `Actualizar` int(11) DEFAULT NULL,
  `Eliminar` int(11) DEFAULT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdPermiso`),
  KEY `FK_Personal_Menu` (`IdMenu`),
  KEY `FK_Personal_Rol` (`IdRol`),
  CONSTRAINT `FK_Personal_Menu` FOREIGN KEY (`IdMenu`) REFERENCES `menu` (`IdMenu`),
  CONSTRAINT `FK_Personal_Rol` FOREIGN KEY (`IdRol`) REFERENCES `rol` (`IdRol`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla confcamila.permisos: ~43 rows (aproximadamente)
DELETE FROM `permisos`;
/*!40000 ALTER TABLE `permisos` DISABLE KEYS */;
INSERT INTO `permisos` (`IdPermiso`, `IdMenu`, `IdRol`, `Leer`, `Insertar`, `Actualizar`, `Eliminar`, `Estado`) VALUES
	(1, 1, 1, 1, 1, 1, 1, 'Activo'),
	(2, 2, 1, 1, 1, 1, 1, 'Activo'),
	(3, 2, 2, 1, 0, 0, 0, 'Activo'),
	(4, 3, 1, 1, 1, 1, 1, 'Inactivo'),
	(5, 20, 1, 1, 1, 1, 1, 'Activo'),
	(6, 4, 1, 1, 1, 1, 1, 'Activo'),
	(7, 5, 1, 1, 1, 1, 1, 'Activo'),
	(8, 6, 1, 1, 1, 1, 1, 'Activo'),
	(9, 7, 1, 1, 1, 1, 1, 'Activo'),
	(10, 8, 1, 1, 1, 1, 1, 'Activo'),
	(11, 8, 1, 1, 1, 1, 1, 'Activo'),
	(12, 9, 1, 1, 1, 1, 1, 'Activo'),
	(13, 10, 1, 1, 1, 1, 1, 'Activo'),
	(14, 11, 1, 1, 1, 1, 1, 'Activo'),
	(15, 12, 1, 1, 1, 1, 1, 'Activo'),
	(16, 13, 1, 1, 1, 1, 1, 'Activo'),
	(17, 14, 1, 1, 1, 1, 1, 'Activo'),
	(18, 15, 1, 1, 1, 1, 1, 'Activo'),
	(19, 16, 1, 1, 1, 1, 1, 'Activo'),
	(20, 1, 1, 1, 1, 1, 1, 'Inactivo'),
	(21, 17, 1, 1, 1, 1, 1, 'Activo'),
	(22, 18, 1, 1, 1, 1, 1, 'Activo'),
	(23, 19, 1, 1, 1, 1, 1, 'Activo'),
	(24, 1, 2, 1, 1, 1, 1, 'Activo'),
	(25, 3, 2, 0, 0, 0, 0, 'Inactivo'),
	(26, 4, 2, 0, 0, 0, 0, 'Activo'),
	(27, 5, 2, 0, 0, 0, 0, 'Activo'),
	(28, 6, 2, 0, 0, 0, 0, 'Activo'),
	(29, 7, 2, 0, 0, 0, 0, 'Activo'),
	(30, 8, 1, 0, 0, 0, 0, 'Inactivo'),
	(31, 9, 2, 0, 0, 0, 0, 'Activo'),
	(32, 8, 2, 0, 0, 0, 0, 'Activo'),
	(33, 10, 2, 0, 0, 0, 0, 'Activo'),
	(34, 11, 2, 0, 0, 0, 0, 'Activo'),
	(35, 12, 2, 0, 0, 0, 0, 'Activo'),
	(36, 13, 2, 0, 0, 0, 0, 'Activo'),
	(37, 14, 2, 0, 0, 0, 0, 'Activo'),
	(38, 15, 2, 1, 1, 1, 0, 'Activo'),
	(39, 16, 2, 1, 1, 1, 0, 'Activo'),
	(40, 17, 2, 1, 1, 1, 1, 'Activo'),
	(41, 18, 2, 1, 1, 0, 0, 'Activo'),
	(42, 19, 2, 0, 0, 0, 0, 'Activo'),
	(43, 20, 2, 0, 0, 0, 0, 'Activo'),
	(44, 3, 1, 1, 1, 1, 1, 'Activo'),
	(45, 21, 1, 1, 1, 1, 1, 'Activo'),
	(46, 22, 1, 1, 1, 1, 1, 'Activo');
/*!40000 ALTER TABLE `permisos` ENABLE KEYS */;

-- Volcando estructura para tabla confcamila.personal
CREATE TABLE IF NOT EXISTS `personal` (
  `IdPersonal` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `ApellidoPaterno` varchar(50) NOT NULL,
  `ApellidoMaterno` varchar(50) DEFAULT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Telefono` decimal(30,0) NOT NULL,
  `Gmail` varchar(100) DEFAULT NULL,
  `CedulaIdentidad` varchar(30) NOT NULL DEFAULT 'unique',
  `FechaNacimiento` date DEFAULT NULL,
  `FechaRegistro` date NOT NULL,
  `Sexo` varchar(50) DEFAULT NULL,
  `IdProfesion` int(11) DEFAULT NULL,
  `IdRol` int(11) DEFAULT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdPersonal`),
  UNIQUE KEY `Telefono` (`Telefono`),
  UNIQUE KEY `CedulaIdentidad` (`CedulaIdentidad`),
  UNIQUE KEY `Gmail` (`Gmail`),
  KEY `IdProfesion` (`IdProfesion`),
  KEY `IdRol` (`IdRol`),
  CONSTRAINT `IdProfesion` FOREIGN KEY (`IdProfesion`) REFERENCES `profesion` (`IdProfesion`),
  CONSTRAINT `IdRol` FOREIGN KEY (`IdRol`) REFERENCES `rol` (`IdRol`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla confcamila.personal: ~10 rows (aproximadamente)
DELETE FROM `personal`;
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
INSERT INTO `personal` (`IdPersonal`, `Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `Direccion`, `Telefono`, `Gmail`, `CedulaIdentidad`, `FechaNacimiento`, `FechaRegistro`, `Sexo`, `IdProfesion`, `IdRol`, `Estado`) VALUES
	(1, 'JUAN', 'PERES', 'GUTIERREZ', 'AV.BOLIVIA ZONA LOS LOTES', 76123612, 'juan.peres@gmail.com', '123234543', '1990-10-11', '2020-03-27', 'Hombre', 1, 1, 'Activo'),
	(2, 'DAYANA CARLA', 'FORANDA', 'ALBA', 'AV.BENI', 77834123, 'dayana.foronda@gmail.com', '354534345', '1992-04-29', '2020-04-29', 'Mujer', 2, 1, 'Activo'),
	(3, 'LEONEL', 'ZARATE ', 'PACO', 'AV. CRISTO REY', 75445644, 'leone,@gmail.com', '124235455', '2012-09-30', '2020-05-08', 'Hombre', 2, 2, 'Inactivo'),
	(4, 'LISETH', 'ZARATE ', 'PACO', 'AV. CRISTO REY', 75445456, 'lis@gmail.com', '121323523', '1999-06-25', '2020-05-08', 'Mujer', 1, 3, 'Inactivo'),
	(6, 'GROBER', 'TORRRES', 'HERMOSA', 'AV. CRISTO REY', 75513574, 'leonelll,@gmail.com', '12322312', '2012-06-14', '2020-05-08', 'Hombre', 1, 2, 'Inactivo'),
	(7, 'JOSE MARIA ', 'SANDOVAL', 'MITA', 'AV. CRISTO REY', 72572432, 'jose_maria@gmail.com', '123124567', '1999-06-16', '2020-05-08', 'Hombre', 2, 3, 'Inactivo'),
	(8, 'LAURA', 'TORRES', 'MADEIRA', 'AV. SANTA CRUZ', 76387623, 'laura@gmail.com', '42335235', '2000-06-15', '2020-05-09', 'Mujer', 2, 3, 'Inactivo'),
	(9, 'NOEMI', 'LUCANA', 'NINAJA', 'AV.  3 PASOS AL FRENTE', 76645645, 'noemi@gmail.com', '35232342', '1996-02-21', '2020-05-09', 'Mujer', 2, 2, 'Activo'),
	(10, 'AAAA', 'BBB', 'CCCC', 'BBBB', 74564545, 'bb@gmail.com', '43242342', '2012-06-13', '2020-05-09', 'Mujer', 2, 3, 'Inactivo'),
	(11, 'FLORA', 'PACO', 'CHOQUE', 'AV.BOLIVIA', 79823423, 'flora@gmail.com', '534534543', '1995-02-16', '2020-05-09', 'Mujer', 3, 2, 'Activo'),
	(12, 'OSCAR', 'PERDOMO', 'GUTIERREZ', 'AV.BOLIVIA', 76343243, 'oscar.os@gmail.com', '4564567', '2005-07-15', '2022-04-15', 'Hombre', 1, 2, 'Activo');
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;

-- Volcando estructura para tabla confcamila.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `IdProducto` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `NroSerie` varchar(40) DEFAULT NULL,
  `Codigo` int(50) DEFAULT NULL,
  `CodigoBarra` varchar(50) DEFAULT NULL,
  `Descripcion` varchar(500) DEFAULT NULL,
  `Caracteristicas` varchar(1000) DEFAULT NULL,
  `Stock` int(50) NOT NULL DEFAULT '0',
  `Imagen` varchar(50) DEFAULT NULL,
  `PrecioCompra` decimal(10,2) DEFAULT NULL,
  `PrecioVenta` decimal(10,2) DEFAULT NULL,
  `PrecioOferta` decimal(10,2) DEFAULT NULL,
  `IdNacionalidad` int(11) DEFAULT NULL,
  `IdColor` int(11) DEFAULT NULL,
  `IdMarca` int(11) DEFAULT NULL,
  `IdTipoProducto` int(11) DEFAULT NULL,
  `IdProveedor` int(11) DEFAULT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdProducto`),
  UNIQUE KEY `Codigo` (`Codigo`),
  KEY `IdNacionalidad` (`IdNacionalidad`),
  KEY `IdColor` (`IdColor`),
  KEY `IdMarca` (`IdMarca`),
  KEY `IdTipoProducto` (`IdTipoProducto`),
  KEY `IdProveedor` (`IdProveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla confcamila.producto: ~0 rows (aproximadamente)
DELETE FROM `producto`;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;

-- Volcando estructura para tabla confcamila.producto1
CREATE TABLE IF NOT EXISTS `producto1` (
  `IdProducto` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Codigo` int(30) NOT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  `Stock` decimal(20,0) NOT NULL,
  `Imagen` varchar(50) DEFAULT NULL,
  `PrecioVenta` decimal(10,2) DEFAULT NULL,
  `PrecioOferta` decimal(10,2) DEFAULT NULL,
  `IdMarca` int(11) NOT NULL,
  `IdColor` int(11) NOT NULL,
  `IdTalla` int(11) NOT NULL,
  `IdCategoria` int(11) NOT NULL,
  `IdModelo` int(11) NOT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdProducto`),
  UNIQUE KEY `Codigo` (`Codigo`),
  KEY `FK_color_Producto` (`IdColor`),
  KEY `FK_Talla_Producto` (`IdTalla`),
  KEY `FK_marca_Producto` (`IdMarca`),
  KEY `FK_Subcategoria_Producto` (`IdCategoria`) USING BTREE,
  KEY `FK_modelo_Producto` (`IdModelo`),
  CONSTRAINT `FK_Categoria_Producto` FOREIGN KEY (`IdCategoria`) REFERENCES `categoria` (`IdCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_Talla_Producto` FOREIGN KEY (`IdTalla`) REFERENCES `talla` (`IdTalla`),
  CONSTRAINT `FK_color_Producto` FOREIGN KEY (`IdColor`) REFERENCES `color` (`IdColor`),
  CONSTRAINT `FK_marca_Producto` FOREIGN KEY (`IdMarca`) REFERENCES `marca` (`IdMarca`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_modelo_Producto` FOREIGN KEY (`IdModelo`) REFERENCES `modelo` (`IdModelo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla confcamila.producto1: ~21 rows (aproximadamente)
DELETE FROM `producto1`;
/*!40000 ALTER TABLE `producto1` DISABLE KEYS */;
INSERT INTO `producto1` (`IdProducto`, `Nombre`, `Codigo`, `Descripcion`, `Stock`, `Imagen`, `PrecioVenta`, `PrecioOferta`, `IdMarca`, `IdColor`, `IdTalla`, `IdCategoria`, `IdModelo`, `Estado`) VALUES
	(1, 'POLO', 1001, 'POLERA ROJA ', 4, 'polo_mujer2.jpg', 100.00, 80.00, 21, 5, 2, 13, 4, 'Inactivo'),
	(2, 'POLERA CUELLOO', 1002, 'POLERA DE DOS COLORES ', 2, 'polera_cuello_v.jpg', 150.00, 140.00, 20, 10, 2, 13, 4, 'Inactivo'),
	(3, 'POLERA CUELLO CADETE', 1003, 'POLERA DE DOS COLORES BLANCO ABAJO Y ARRIBA AZUL CON LÍNEAS ANARANJADAS ', 1, 'Multi-Color-Polo-Shirts.jpg', 110.00, 100.00, 21, 22, 1, 13, 4, 'Activo'),
	(4, 'POLO MUJER', 1004, 'POLERA DE DOS COLORES BLANCO Y PLOMO EN LOS HOMBROS \r\n', 5, 'polera-blanco-plomo-mujer.jpg', 100.00, 90.00, 21, 22, 1, 13, 4, 'Activo'),
	(5, 'DEPORTIVA CUELLO V', 1005, 'POLERA SUBLIMADA DEPORTIVA ', 7, 'polera-deportiva-vino-mujer.jpg', 90.00, 80.00, 21, 21, 2, 13, 4, 'Activo'),
	(6, 'POLO CON CUELLO ', 1006, 'POLERA POLO CON CUELLO BLANCO ', 3, 'polera-lila-mujer.jpg', 100.00, 90.00, 21, 20, 3, 13, 4, 'Activo'),
	(7, 'POLO CON CUELLO ', 1007, 'POLERA POLO DISEÑO SIMPLE', 3, 'POLERA-PIQUÉ-MC-HOMBRE-AZUL-REY.jpg', 100.00, 90.00, 21, 10, 4, 13, 4, 'Activo'),
	(10, 'POLO', 1008, 'POLO PARA MUJER CON CUELLO ALTO ', 5, 'polera-polo-azul-mujer1.jpg', 100.00, 90.00, 21, 9, 3, 13, 4, 'Activo'),
	(11, 'SHORT CORTO ', 1009, 'SHORT CORTO DEPORTIVO PARA HOMBRE', 7, 'short-azul-hombre.jpg', 70.00, 60.00, 21, 9, 3, 13, 4, 'Activo'),
	(12, 'SHORT CORTO ', 1010, 'SHORT CORTO CON COLORES ROJO, BLANCO Y AZUL COMBINADO A RAYAS', 10, 'short-conbinado-hombre.jpg', 70.00, 60.00, 21, 22, 1, 13, 4, 'Inactivo'),
	(13, 'SHORT CORTO', 1011, 'SHORT PARA NIÑO CORTO ', 10, 'short-polo-azul.jpg', 50.00, 40.00, 21, 10, 1, 13, 4, 'Inactivo'),
	(14, 'short corto ', 1012, 'short color negro para adulto', 10, 'short-negro.jpg', 70.00, 60.00, 21, 2, 1, 13, 4, 'Activo'),
	(15, 'barbijo', 1013, 'barbijo rojo', 10, 'barbijo-rojo.jpg', 20.00, 15.00, 21, 5, 3, 13, 4, 'Activo'),
	(16, 'BARBIJO CAMUFLADO', 1014, 'BARBIJO JUVENIL', 10, 'barbijo-camuflado.png', 20.00, 15.00, 21, 23, 1, 13, 4, 'Activo'),
	(17, 'BARBIJO TELA', 2001, 'BARBIJO DE TELA SIN BALBULA', 7, 'barbijo-rojo1.jpg', 20.00, 15.00, 21, 5, 2, 13, 6, 'Activo'),
	(18, 'POLERA ', 3001, 'POLERA POLO', 10, 'polera-polo-negro.jpg', 100.00, 90.00, 21, 2, 2, 13, 5, 'Activo'),
	(19, 'POLERA CUELLO', 4001, 'POLERA DE DOS COLORES A RAYAS ', 20, 'polera-deportiva-vino-mujer1.jpg', 100.00, 90.00, 21, 5, 2, 13, 5, 'Activo'),
	(20, 'BARBIJOO', 1020, 'BARBIJO DE TELA ', 10, 'barbijo-rojo2.jpg', 20.00, 15.00, 21, 5, 2, 13, 6, 'Inactivo'),
	(21, 'POLERA POLO1', 5001, 'POLO CON CUELLO', 10, 'polera-polo-rojo.jpg', 100.00, 90.00, 21, 5, 2, 15, 4, 'Activo'),
	(22, 'POLERA', 1021, 'POLO DE DOS COLORES', 10, 'polera-blanco-plomo-mujer1.jpg', 100.00, 90.00, 21, 6, 2, 15, 4, 'Activo'),
	(23, 'POLERA', 1050, 'POLERA CON CUELLO ', 10, 'polera-polo-azul-mujer2.jpg', 100.00, 90.00, 21, 9, 2, 13, 4, 'Activo'),
	(24, 'BARBIJO ', 1060, 'BARBIJO DE TELA', 10, 'barbijo-rojo3.jpg', 20.00, 15.00, 21, 5, 2, 14, 6, 'Activo'),
	(25, 'POLERA', 1061, '', 10, 'polera-polo-blanca.jpg', 100.00, 90.00, 20, 2, 1, 13, 4, 'Activo'),
	(26, 'POLERA', 1070, 'POLERA CON CUELLO', 10, 'polera-polo-rojo1.jpg', 100.00, 90.00, 21, 5, 2, 15, 13, 'Activo');
/*!40000 ALTER TABLE `producto1` ENABLE KEYS */;

-- Volcando estructura para tabla confcamila.profesion
CREATE TABLE IF NOT EXISTS `profesion` (
  `IdProfesion` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdProfesion`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla confcamila.profesion: ~5 rows (aproximadamente)
DELETE FROM `profesion`;
/*!40000 ALTER TABLE `profesion` DISABLE KEYS */;
INSERT INTO `profesion` (`IdProfesion`, `Nombre`, `Estado`) VALUES
	(1, 'Administrador de empresas', 'Activo'),
	(2, 'Ingeniero de sistemas', 'Activo'),
	(3, 'Bachiller en Humanidades', 'Activo'),
	(4, 'Contaduria Publicaaa', 'Inactivo'),
	(5, 'Diseñador grafico', 'Activo');
/*!40000 ALTER TABLE `profesion` ENABLE KEYS */;

-- Volcando estructura para tabla confcamila.rol
CREATE TABLE IF NOT EXISTS `rol` (
  `IdRol` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdRol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla confcamila.rol: ~3 rows (aproximadamente)
DELETE FROM `rol`;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` (`IdRol`, `Nombre`, `Estado`) VALUES
	(1, 'Admin', 'Activo'),
	(2, 'Cajero', 'Activo'),
	(3, 'Resepcionista', 'Inactivo');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;

-- Volcando estructura para tabla confcamila.sexo
CREATE TABLE IF NOT EXISTS `sexo` (
  `IdSexo` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdSexo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla confcamila.sexo: ~2 rows (aproximadamente)
DELETE FROM `sexo`;
/*!40000 ALTER TABLE `sexo` DISABLE KEYS */;
INSERT INTO `sexo` (`IdSexo`, `Nombre`, `Estado`) VALUES
	(1, 'Hombre', 'Activo'),
	(2, 'Mujer', 'Activo');
/*!40000 ALTER TABLE `sexo` ENABLE KEYS */;

-- Volcando estructura para tabla confcamila.talla
CREATE TABLE IF NOT EXISTS `talla` (
  `IdTalla` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdTalla`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla confcamila.talla: ~8 rows (aproximadamente)
DELETE FROM `talla`;
/*!40000 ALTER TABLE `talla` DISABLE KEYS */;
INSERT INTO `talla` (`IdTalla`, `Nombre`, `Estado`) VALUES
	(1, 'S', 'Activo'),
	(2, 'M', 'Activo'),
	(3, 'L', 'Activo'),
	(4, 'XL', 'Activo'),
	(5, 'XXL', 'Activo'),
	(7, '3XL', 'Activo'),
	(8, '10', 'Activo'),
	(9, '12', 'Activo'),
	(10, '14', 'Activo'),
	(11, '16', 'Activo');
/*!40000 ALTER TABLE `talla` ENABLE KEYS */;

-- Volcando estructura para tabla confcamila.tipocliente
CREATE TABLE IF NOT EXISTS `tipocliente` (
  `IdTipoCliente` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdTipoCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla confcamila.tipocliente: ~2 rows (aproximadamente)
DELETE FROM `tipocliente`;
/*!40000 ALTER TABLE `tipocliente` DISABLE KEYS */;
INSERT INTO `tipocliente` (`IdTipoCliente`, `Nombre`, `Estado`) VALUES
	(1, 'Natural', 'Activo'),
	(2, 'Juridico', 'Activo');
/*!40000 ALTER TABLE `tipocliente` ENABLE KEYS */;

-- Volcando estructura para tabla confcamila.tipopago
CREATE TABLE IF NOT EXISTS `tipopago` (
  `IdTipopago` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdTipopago`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla confcamila.tipopago: ~2 rows (aproximadamente)
DELETE FROM `tipopago`;
/*!40000 ALTER TABLE `tipopago` DISABLE KEYS */;
INSERT INTO `tipopago` (`IdTipopago`, `Nombre`, `Estado`) VALUES
	(1, 'EFECTIVO', 'Activo'),
	(2, 'TARJETA DEBITO', 'Activo'),
	(3, 'TARJETA CREDITO', 'Activo');
/*!40000 ALTER TABLE `tipopago` ENABLE KEYS */;

-- Volcando estructura para tabla confcamila.tipo_comprobante
CREATE TABLE IF NOT EXISTS `tipo_comprobante` (
  `IdTipo_comprobante` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Iva` int(11) DEFAULT NULL,
  `Serie` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdTipo_comprobante`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla confcamila.tipo_comprobante: ~2 rows (aproximadamente)
DELETE FROM `tipo_comprobante`;
/*!40000 ALTER TABLE `tipo_comprobante` DISABLE KEYS */;
INSERT INTO `tipo_comprobante` (`IdTipo_comprobante`, `Nombre`, `Cantidad`, `Iva`, `Serie`) VALUES
	(1, 'Factura', 21, 13, '001'),
	(2, 'Cotización', 1, 0, '001');
/*!40000 ALTER TABLE `tipo_comprobante` ENABLE KEYS */;

-- Volcando estructura para tabla confcamila.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `IdUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `NombreUsuario` varchar(50) NOT NULL,
  `Contrasena` varchar(100) NOT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  `IdPersonal` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdUsuario`),
  UNIQUE KEY `NombreUsuario` (`NombreUsuario`),
  KEY `IdPersonal` (`IdPersonal`),
  CONSTRAINT `IdPersonal` FOREIGN KEY (`IdPersonal`) REFERENCES `personal` (`IdPersonal`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla confcamila.usuario: ~11 rows (aproximadamente)
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`IdUsuario`, `NombreUsuario`, `Contrasena`, `Estado`, `IdPersonal`) VALUES
	(1, 'JuanAdmin1', 'd2451f17a3b7843ddc90ab9f15ea409f43bb1b68', 'Activo', 1),
	(5, 'floracaja', 'ba7110dfcc140d94053bb33935ab05263b05f367', 'Activo', 11),
	(7, 'NoemiCaja', '8bf55e79a4e2b2cae4319c55dabea05240565f55', 'Activo', 9),
	(8, 'Oscarcaja', '3a42cf2f020d547d2e54c82cb5a3f9212fc9a693', 'Activo', 12),
	(9, 'JuanAdmin', 'e81dfd9e641954d5bac697eab1d5ff3c551bb5f5', 'Activo', 1),
	(10, 'JuanAdmin11', 'd3c0f6e0f44ee64d63e8a45f16b365f936e61ebc', 'Activo', 1),
	(11, 'Cajeradayana', 'a5c67eac2f6ec2bbb66b9e64b8364ba1604148b4', 'Activo', 2),
	(12, 'Floracajera1', '7626d953e000377568395b451cd113153f44f87b', 'Activo', 1),
	(13, 'cajeraflora1', '7397fb1e3402f044f175f07c4d83887559cf0f30', 'Activo', 11),
	(14, 'cajeranoemi1', '35b8ad4ecb9b258583cea26d7fd5f3830cae7bde', 'Activo', 1),
	(15, 'cajanoemi12', '35b8ad4ecb9b258583cea26d7fd5f3830cae7bde', 'Activo', 9),
	(16, 'cajeraflora12', '5d84b8618000d2ec9a8095d32b027807f54287c9', 'Activo', 1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

-- Volcando estructura para tabla confcamila.venta
CREATE TABLE IF NOT EXISTS `venta` (
  `IdVenta` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `SubTotal` varchar(50) DEFAULT NULL,
  `Iva` varchar(50) DEFAULT NULL,
  `Descuento` varchar(50) DEFAULT NULL,
  `Total` varchar(50) DEFAULT NULL,
  `NroVenta` varchar(50) DEFAULT NULL,
  `NroComprobante` varchar(50) DEFAULT NULL,
  `IdCliente` int(11) DEFAULT NULL,
  `IdPersonal` int(11) DEFAULT NULL,
  `IdTipo_comprobante` int(11) DEFAULT NULL,
  `IdTipopago` int(11) DEFAULT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdVenta`),
  KEY `FK_venta_Cliente` (`IdCliente`),
  KEY `FK_venta_Personal` (`IdPersonal`),
  KEY `FK_venta_Comprobante` (`IdTipo_comprobante`),
  KEY `venta_ibfk_4` (`IdTipopago`),
  CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`IdCliente`),
  CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`IdPersonal`) REFERENCES `personal` (`IdPersonal`),
  CONSTRAINT `venta_ibfk_3` FOREIGN KEY (`IdTipo_comprobante`) REFERENCES `tipo_comprobante` (`IdTipo_comprobante`),
  CONSTRAINT `venta_ibfk_4` FOREIGN KEY (`IdTipopago`) REFERENCES `tipopago` (`IdTipopago`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla confcamila.venta: ~18 rows (aproximadamente)
DELETE FROM `venta`;
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
INSERT INTO `venta` (`IdVenta`, `Fecha`, `SubTotal`, `Iva`, `Descuento`, `Total`, `NroVenta`, `NroComprobante`, `IdCliente`, `IdPersonal`, `IdTipo_comprobante`, `IdTipopago`, `Estado`) VALUES
	(35, '2020-03-04 08:52:38', '100.00', '13.00', '0.00', '113.00', '001', '000001', 1, 1, 1, 1, 'Activo'),
	(36, '2021-01-04 08:53:17', '200.00', '26.00', '0.00', '226.00', '001', '000002', 2, 1, 1, 1, 'Activo'),
	(37, '2021-02-04 12:25:28', '100.00', '13.00', '0.00', '113.00', '001', '000003', 5, 1, 1, 2, 'Activo'),
	(38, '2021-03-04 17:25:28', '100.00', '13.00', '0.00', '120.00', '001', '000004', 5, 1, 1, 1, 'Activo'),
	(39, '2021-04-04 10:26:06', '100.00', '13.00', '0.00', '113.00', '001', '000005', 4, 1, 1, 1, 'Activo'),
	(41, '2021-05-04 16:34:10', '290.00', '0.00', '0.00', '290.00', '001', '000001', 6, 1, 2, 1, 'Activo'),
	(42, '2021-06-08 13:00:55', '300.00', '39.00', '0.00', '339.00', '001', '000006', 1, 1, 1, 1, 'Activo'),
	(43, '2021-07-15 08:31:21', '320.00', '41.60', '0.00', '361.60', '001', '000007', 2, 1, 1, 1, 'Activo'),
	(44, '2021-08-15 02:45:08', '130.00', '16.90', '0.00', '146.90', '001', '000008', 4, 1, 1, 3, 'Activo'),
	(45, '2021-09-22 16:32:52', '200.00', '26.00', '0.00', '226.00', '001', '000009', 2, 8, 1, 2, 'Activo'),
	(46, '2021-10-24 12:17:19', '250.00', '32.50', '0.00', '282.50', '001', '000010', 1, 8, 1, 1, 'Activo'),
	(47, '2021-11-24 12:33:58', '3470.00', '451.10', '0.00', '921.10', '001', '000011', 4, 1, 1, 1, 'Activo'),
	(48, '2021-12-24 12:36:26', '500.00', '65.00', '0.00', '565.00', '001', '000012', 11, 1, 1, 2, 'Activo'),
	(49, '2022-01-25 09:07:01', '220.00', '28.60', '0.00', '248.60', '001', '000013', 17, 8, 1, 2, 'Activo'),
	(50, '2022-02-25 15:41:49', '520.00', '67.60', '0.00', '587.60', '001', '000014', 8, 8, 1, 3, 'Activo'),
	(51, '2022-03-20 21:54:28', '600.00', '78.00', '0.00', '678.00', '001', '000015', 18, 8, 1, 2, 'Activo'),
	(52, '2022-03-20 00:42:39', '510.00', '66.30', '0.00', '576.30', '001', '000016', 19, 8, 1, 3, 'Activo'),
	(53, '2022-03-20 17:29:47', '190.00', '24.70', '0.00', '214.70', '001', '000017', 20, 8, 1, 3, 'Activo'),
	(54, '2022-03-20 20:23:47', '600.00', '78.00', '0.00', '678.00', '001', '000018', 21, 8, 1, 2, 'Activo'),
	(55, '2022-04-26 22:30:57', '650.00', '84.50', '0.00', '734.50', '001', '000019', 22, 8, 1, 2, 'Activo'),
	(56, '2022-04-28 15:45:21', '520.00', '67.60', '0.00', '587.60', '001', '000020', 23, 8, 1, 1, 'Activo'),
	(57, '2022-05-05 20:02:00', '200.00', '26.00', '0.00', '226.00', '001', '000021', 8, 1, 1, 1, 'Activo');
/*!40000 ALTER TABLE `venta` ENABLE KEYS */;

-- Volcando estructura para disparador confcamila.Actualizarproductos
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER';
DELIMITER //
CREATE TRIGGER `Actualizarproductos` AFTER UPDATE ON `producto1` FOR EACH ROW INSERT INTO bitacora_producto(IdProducto,Accion,Fecha,Nombre_Nuevo,Nombre_Viejo,Codigo_Nuevo,Codigo_Viejo,
Descripcion_Nuevo,Descripcion_Viejo,Stock_Nuevo,Stock_Viejo,
PrecioVenta_Nuevo,PrecioVenta_Viejo,PrecioOferta_Nuevo,PrecioOferta_Viejo,Estado_Nuevo,Estado_Viejo)
VALUES (new.IdProducto,'Se actualizo',NOW(),new.Nombre,old.Nombre,
new.Codigo,old.Codigo,new.Descripcion,old.Descripcion,new.Stock,old.Stock,
new.PrecioVenta,old.PrecioVenta,new.PrecioOferta,old.PrecioOferta,new.Estado,old.Estado)//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador confcamila.categoria_MayCampos
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER';
DELIMITER //
CREATE TRIGGER `categoria_MayCampos` BEFORE UPDATE ON `categoria` FOR EACH ROW BEGIN
  SET NEW.Nombre = UCASE(NEW.Nombre);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador confcamila.categoria__camposMay
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER';
DELIMITER //
CREATE TRIGGER `categoria__camposMay` BEFORE INSERT ON `categoria` FOR EACH ROW BEGIN
  SET NEW.Nombre = UCASE(NEW.Nombre);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador confcamila.cliente_camposmayuscula
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER';
DELIMITER //
CREATE TRIGGER `cliente_camposmayuscula` BEFORE INSERT ON `cliente` FOR EACH ROW BEGIN
  SET NEW.Nombre = UCASE(NEW.Nombre);
  SET NEW.Direccion = UCASE(NEW.Direccion);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador confcamila.cliente_mayuscula_update
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER';
DELIMITER //
CREATE TRIGGER `cliente_mayuscula_update` BEFORE UPDATE ON `cliente` FOR EACH ROW BEGIN
  SET NEW.Nombre = UCASE(NEW.Nombre);
  SET NEW.Direccion = UCASE(NEW.Direccion);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador confcamila.color_camposMayus
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER';
DELIMITER //
CREATE TRIGGER `color_camposMayus` BEFORE INSERT ON `color` FOR EACH ROW BEGIN
  SET NEW.Nombre = UCASE(NEW.Nombre);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador confcamila.color_Mayuscula_update
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER';
DELIMITER //
CREATE TRIGGER `color_Mayuscula_update` BEFORE UPDATE ON `color` FOR EACH ROW BEGIN
  SET NEW.Nombre = UCASE(NEW.Nombre);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador confcamila.empresa_mayuscula_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER';
DELIMITER //
CREATE TRIGGER `empresa_mayuscula_insert` BEFORE INSERT ON `empresa` FOR EACH ROW BEGIN
  SET NEW.Nombre = UCASE(NEW.Nombre);
  SET NEW.Direccion = UCASE(NEW.Direccion);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador confcamila.empresa_mayuscula_update
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER';
DELIMITER //
CREATE TRIGGER `empresa_mayuscula_update` BEFORE UPDATE ON `empresa` FOR EACH ROW BEGIN
  SET NEW.Nombre = UCASE(NEW.Nombre);
  SET NEW.Direccion = UCASE(NEW.Direccion);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador confcamila.Insertarproductos
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER';
DELIMITER //
CREATE TRIGGER `Insertarproductos` AFTER INSERT ON `producto1` FOR EACH ROW INSERT INTO bitacora_producto(IdProducto,Accion,Fecha,Nombre_Nuevo,Codigo_Nuevo,
Descripcion_Nuevo,Stock_Nuevo,PrecioVenta_Nuevo,PrecioOferta_Nuevo,Estado_Nuevo)
VALUES (new.IdProducto,'Se Inserto',NOW(),new.Nombre,new.Codigo,
new.Descripcion,new.Stock,new.PrecioVenta,new.PrecioOferta,new.Estado)//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador confcamila.marca_mayuscula_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER';
DELIMITER //
CREATE TRIGGER `marca_mayuscula_insert` BEFORE INSERT ON `marca` FOR EACH ROW BEGIN
  SET NEW.Nombre = UCASE(NEW.Nombre);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador confcamila.modelo_mayuscula_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER';
DELIMITER //
CREATE TRIGGER `modelo_mayuscula_insert` BEFORE INSERT ON `modelo` FOR EACH ROW BEGIN
  SET NEW.Nombre = UCASE(NEW.Nombre);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador confcamila.personal_Mayuscula_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER';
DELIMITER //
CREATE TRIGGER `personal_Mayuscula_insert` BEFORE INSERT ON `personal` FOR EACH ROW BEGIN
  SET NEW.Nombre = UCASE(NEW.Nombre);
  SET NEW.ApellidoPaterno = UCASE(NEW.ApellidoPaterno);
  SET NEW.ApellidoMaterno = UCASE(NEW.ApellidoMaterno);
  SET NEW.Direccion = UCASE(NEW.Direccion);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador confcamila.personal_Mayuscula_update
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER';
DELIMITER //
CREATE TRIGGER `personal_Mayuscula_update` BEFORE UPDATE ON `personal` FOR EACH ROW BEGIN
  SET NEW.Nombre = UCASE(NEW.Nombre);
  SET NEW.ApellidoPaterno = UCASE(NEW.ApellidoPaterno);
  SET NEW.ApellidoMaterno = UCASE(NEW.ApellidoMaterno);
  SET NEW.Direccion = UCASE(NEW.Direccion);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador confcamila.producto1_Mayuscula_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER';
DELIMITER //
CREATE TRIGGER `producto1_Mayuscula_insert` BEFORE INSERT ON `producto1` FOR EACH ROW BEGIN
  SET NEW.Nombre = UCASE(NEW.Nombre);
  SET NEW.Descripcion = UCASE(NEW.Descripcion);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador confcamila.producto1_mayuscula_update
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER';
DELIMITER //
CREATE TRIGGER `producto1_mayuscula_update` BEFORE UPDATE ON `producto1` FOR EACH ROW BEGIN
  SET NEW.Nombre = UCASE(NEW.Nombre);
  SET NEW.Descripcion = UCASE(NEW.Descripcion);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador confcamila.profesion_mayuscula_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER';
DELIMITER //
CREATE TRIGGER `profesion_mayuscula_insert` BEFORE INSERT ON `profesion` FOR EACH ROW BEGIN
  SET NEW.Nombre = UCASE(NEW.Nombre);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
