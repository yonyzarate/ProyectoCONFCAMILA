-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para tecsadb
CREATE DATABASE IF NOT EXISTS `tecsadb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tecsadb`;

-- Volcando estructura para tabla tecsadb.bitacora_producto
CREATE TABLE IF NOT EXISTS `bitacora_producto` (
  `IdBitacora` int(11) NOT NULL AUTO_INCREMENT,
  `IdProducto` int(20) DEFAULT NULL,
  `Accion` varchar(50) DEFAULT NULL,
  `Fecha` datetime DEFAULT NULL,
  `Nombre_Nuevo` varchar(50) DEFAULT NULL,
  `Nombre_Viejo` varchar(50) DEFAULT NULL,
  `NroSerie_Nuevo` varchar(40) DEFAULT NULL,
  `NroSerie_Viejo` varchar(40) DEFAULT NULL,
  `Codigo_Nuevo` int(30) DEFAULT NULL,
  `Codigo_Viejo` int(30) DEFAULT NULL,
  `CodigoBarra_Nuevo` varchar(50) DEFAULT NULL,
  `CodigoBarra_Viejo` varchar(50) DEFAULT NULL,
  `Descripcion_Nuevo` varchar(200) DEFAULT NULL,
  `Descripcion_Viejo` varchar(200) DEFAULT NULL,
  `Caracteristicas_Nuevo` varchar(1000) DEFAULT NULL,
  `Caracteristicas_Viejo` varchar(1000) DEFAULT NULL,
  `Stock_Nuevo` decimal(20,0) DEFAULT NULL,
  `Stock_Viejo` decimal(20,0) DEFAULT NULL,
  `PrecioCompra_Nuevo` decimal(10,2) DEFAULT NULL,
  `PrecioCompra_Viejo` decimal(10,2) DEFAULT NULL,
  `PrecioVenta_Nuevo` decimal(10,2) DEFAULT NULL,
  `PrecioVenta_Viejo` decimal(10,2) DEFAULT NULL,
  `PrecioOferta_Nuevo` decimal(10,2) DEFAULT NULL,
  `PrecioOferta_Viejo` decimal(10,2) DEFAULT NULL,
  `Estado_Nuevo` enum('Activo','Inactivo') DEFAULT NULL,
  `Estado_Viejo` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdBitacora`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tecsadb.bitacora_producto: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `bitacora_producto` DISABLE KEYS */;
INSERT INTO `bitacora_producto` (`IdBitacora`, `IdProducto`, `Accion`, `Fecha`, `Nombre_Nuevo`, `Nombre_Viejo`, `NroSerie_Nuevo`, `NroSerie_Viejo`, `Codigo_Nuevo`, `Codigo_Viejo`, `CodigoBarra_Nuevo`, `CodigoBarra_Viejo`, `Descripcion_Nuevo`, `Descripcion_Viejo`, `Caracteristicas_Nuevo`, `Caracteristicas_Viejo`, `Stock_Nuevo`, `Stock_Viejo`, `PrecioCompra_Nuevo`, `PrecioCompra_Viejo`, `PrecioVenta_Nuevo`, `PrecioVenta_Viejo`, `PrecioOferta_Nuevo`, `PrecioOferta_Viejo`, `Estado_Nuevo`, `Estado_Viejo`) VALUES
	(5, 2, 'Se actualizo', '2020-06-05 02:58:24', 'CÁMARA TUBO IR HDIS', 'CÁMARA TUBO IR HDIS', 'TWD-CMIR808-900', 'TWD-CMIR808-900', 1000, 1000, '7771000888', '7771000888', ' negro con blanco con franjas rojas ', ' negro con blanco con franjas rojas ', '*Alta Resolución: 900TVL\r\n*  0Lux\r\n* Lente Vertical 2.8-12mm\r\n* AGC / ATW / BLC\r\n* IR 45m\r\n* DC12V\r\n* Nivel de protección: IP66', '*Alta Resolución: 900TVL\r\n*  0Lux\r\n* Lente Vertical 2.8-12mm\r\n* AGC / ATW / BLC\r\n* IR 45m\r\n* DC12V\r\n* Nivel de protección: IP66', 8, 10, 100.00, 100.00, 150.00, 150.00, 130.00, 130.00, 'Activo', 'Activo'),
	(6, 2, 'Se actualizo', '2020-06-06 00:45:09', 'CÁMARA TUBO IR HDIS', 'CÁMARA TUBO IR HDIS', 'TWD-CMIR808-900', 'TWD-CMIR808-900', 1000, 1000, '7771000888', '7771000888', ' negro con blanco con franjas rojas ', ' negro con blanco con franjas rojas ', '*Alta Resolución: 900TVL\r\n*  0Lux\r\n* Lente Vertical 2.8-12mm\r\n* AGC / ATW / BLC\r\n* IR 45m\r\n* DC12V\r\n* Nivel de protección: IP66', '*Alta Resolución: 900TVL\r\n*  0Lux\r\n* Lente Vertical 2.8-12mm\r\n* AGC / ATW / BLC\r\n* IR 45m\r\n* DC12V\r\n* Nivel de protección: IP66', 6, 8, 100.00, 100.00, 150.00, 150.00, 130.00, 130.00, 'Activo', 'Activo'),
	(7, 3, 'Se actualizo', '2020-06-09 11:24:12', 'CÁMAR DOMO INTERIOR 1.0 MP', 'CÁMAR DOMO INTERIOR 1.0 MP', 'HG-HAC-HDW1000R-28S3', 'HG-HAC-HDW1000R-28S3', 10001, 10001, '777100018889', '777100018889', ' camara de seguridad dia noche\r\nde vigilancia', ' camara de seguridad dia noche\r\nde vigilancia', '* Resoluciónnn: 1280(H) x 720(V) @ 30fps\r\n* Lente: 3.6mm\r\n* AWB, AGC, BLC, dWDR, 2D-DNR\r\n* Smart IR: 20m\r\n* Iluminación: 0.01Lux@F1.2, 0Lux IR On\r\n* 12VDC +/- 25%\r\n* Consumo: 2.5W\r\n* 800m sobre Coaxial\r\n* No incluye fuente\r\n* -40º a +60ºC\r\n* Menú OSD\r\n* Carcasa Plástica', '* Resoluciónnn: 1280(H) x 720(V) @ 30fps\r\n* Lente: 3.6mm\r\n* AWB, AGC, BLC, dWDR, 2D-DNR\r\n* Smart IR: 20m\r\n* Iluminación: 0.01Lux@F1.2, 0Lux IR On\r\n* 12VDC +/- 25%\r\n* Consumo: 2.5W\r\n* 800m sobre Coaxial\r\n* No incluye fuente\r\n* -40º a +60ºC\r\n* Menú OSD\r\n* Carcasa Plástica', 4, 7, 200.00, 200.00, 250.00, 250.00, 230.00, 230.00, 'Activo', 'Activo'),
	(8, 4, 'Se Inserto', '2020-08-14 10:33:55', 'polera ', NULL, '1231', NULL, 1234, NULL, '12345', NULL, 'polera roja manga corta ', NULL, 'con cuello', NULL, 10, NULL, 50.00, NULL, 75.00, NULL, 70.00, NULL, 'Activo', NULL),
	(9, 4, 'Se actualizo', '2020-08-14 10:34:12', 'polera ', 'polera ', '1231', '1231', 1234, 1234, '12345', '12345', 'polera roja manga corta ', 'polera roja manga corta ', 'con cuello', 'con cuello', 10, 10, 50.00, 50.00, 75.00, 75.00, 70.00, 70.00, 'Activo', 'Activo'),
	(10, 4, 'Se actualizo', '2020-08-14 10:36:21', 'polera ', 'polera ', '1231', '1231', 1234, 1234, '12345', '12345', 'polera roja manga corta ', 'polera roja manga corta ', 'con cuello', 'con cuello', 8, 10, 50.00, 50.00, 75.00, 75.00, 70.00, 70.00, 'Activo', 'Activo'),
	(11, 4, 'Se actualizo', '2020-08-14 10:42:28', 'polera ', 'polera ', '1231', '1231', 1234, 1234, '12345', '12345', 'polera roja manga corta ', 'polera roja manga corta ', 'con cuello', 'con cuello', 6, 8, 50.00, 50.00, 75.00, 75.00, 70.00, 70.00, 'Activo', 'Activo');
/*!40000 ALTER TABLE `bitacora_producto` ENABLE KEYS */;

-- Volcando estructura para tabla tecsadb.cliente
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tecsadb.cliente: ~13 rows (aproximadamente)
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
	(13, '', '', 0, '', '', 1, 'Activo'),
	(14, 'Epson', 'Av. Cristo Rey', 76423424, '42356634534', 'epson@gmail.com', 2, 'Activo');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Volcando estructura para tabla tecsadb.color
CREATE TABLE IF NOT EXISTS `color` (
  `IdColor` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdColor`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tecsadb.color: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `color` DISABLE KEYS */;
INSERT INTO `color` (`IdColor`, `Nombre`, `Estado`) VALUES
	(1, 'blanco', 'Activo'),
	(2, 'negro', 'Activo'),
	(3, 'plomosss', 'Inactivo'),
	(4, 'Rojosss', 'Inactivo'),
	(5, 'Rojo', 'Activo');
/*!40000 ALTER TABLE `color` ENABLE KEYS */;

-- Volcando estructura para tabla tecsadb.detalleventa
CREATE TABLE IF NOT EXISTS `detalleventa` (
  `IdDetalleVenta` int(11) NOT NULL AUTO_INCREMENT,
  `IdProducto` int(11) DEFAULT NULL,
  `IdVenta` int(11) DEFAULT NULL,
  `Precio` varchar(50) NOT NULL,
  `Cantidad` varchar(30) NOT NULL,
  `Importe` varchar(30) NOT NULL,
  PRIMARY KEY (`IdDetalleVenta`),
  KEY `FK_Personal_Venta` (`IdVenta`),
  KEY `FK_Personal_Producto` (`IdProducto`),
  CONSTRAINT `FK_Personal_Producto` FOREIGN KEY (`IdProducto`) REFERENCES `producto` (`IdProducto`),
  CONSTRAINT `FK_Personal_Venta` FOREIGN KEY (`IdVenta`) REFERENCES `venta` (`IdVenta`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tecsadb.detalleventa: ~35 rows (aproximadamente)
/*!40000 ALTER TABLE `detalleventa` DISABLE KEYS */;
INSERT INTO `detalleventa` (`IdDetalleVenta`, `IdProducto`, `IdVenta`, `Precio`, `Cantidad`, `Importe`) VALUES
	(1, 2, NULL, '100.00', '2', '200.00'),
	(2, 3, NULL, '200.00', '3', '600.00'),
	(4, 2, NULL, '200.00', '100.00', '2'),
	(5, 3, NULL, '200.00', '200.00', '1'),
	(6, 2, NULL, '100.00', '1', '100.00'),
	(7, 3, NULL, '200.00', '1', '200.00'),
	(8, 2, 6, '100.00', '1', '100.00'),
	(9, 3, 6, '200.00', '1', '200.00'),
	(10, 2, 6, '100.00', '1', '100.00'),
	(11, 3, 7, '200.00', '1', '200.00'),
	(12, 2, 8, '100.00', '1', '100.00'),
	(13, 3, 9, '200.00', '1', '200.00'),
	(14, 3, 10, '200.00', '1', '200.00'),
	(15, 3, 11, '200.00', '1', '200.00'),
	(16, 2, 12, '100.00', '1', '100.00'),
	(17, 3, 12, '200.00', '2', '400.00'),
	(18, 3, 13, '200.00', '1', '200.00'),
	(19, 2, 14, '100.00', '1', '100.00'),
	(20, 3, 14, '200.00', '1', '200.00'),
	(21, 2, 15, '100.00', '3', '300.00'),
	(22, 2, 16, '100.00', '1', '100.00'),
	(23, 3, 16, '200.00', '1', '200.00'),
	(24, 2, 17, '100.00', '5', '500.00'),
	(25, 3, 17, '200.00', '5', '1000.00'),
	(26, 2, 18, '100.00', '1', '100.00'),
	(27, 3, 18, '200.00', '1', '200.00'),
	(28, 2, 19, '100.00', '2', '200.00'),
	(29, 2, 20, '100.00', '1', '100.00'),
	(30, 3, 21, '200.00', '1', '200.00'),
	(31, 3, 22, '200.00', '1', '200.00'),
	(32, 3, 23, '200.00', '1', '200.00'),
	(33, 2, 24, '100.00', '2', '200.00'),
	(34, 3, 24, '200.00', '2', '400.00'),
	(35, 2, 25, '100.00', '5', '500.00'),
	(36, 3, 25, '200.00', '5', '1000.00'),
	(37, 3, 26, '200.00', '1', '200.00'),
	(38, 2, 27, '100.00', '10', '1000.00'),
	(39, 2, 28, '100.00', '2', '200.00'),
	(40, 2, 29, '100.00', '2', '200.00'),
	(41, 2, 30, '100.00', '2', '200.00'),
	(42, 3, 31, '200.00', '3', '600.00'),
	(43, 4, 32, '50.00', '2', '100.00'),
	(44, 4, 33, '50.00', '2', '100.00');
/*!40000 ALTER TABLE `detalleventa` ENABLE KEYS */;

-- Volcando estructura para tabla tecsadb.empresa
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

-- Volcando datos para la tabla tecsadb.empresa: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` (`IdEmpresa`, `Nombre`, `Direccion`, `Telefono`, `Gmail`, `Nit`, `Logo`, `Estado`) VALUES
	(2, 'Tecsaaaa', 'Av. Santus Domunt 4to anillo', 75513825, 'tecsa@gmail.com', '12447335', 'logo_ofial_tecsa2.png', 'Activo'),
	(3, 'Tecsa Rs', 'Av. Beni 3er anillo ', 38273483, 'tecsa_rs@gmail.com', '12213133', 'logoORIGINAL25.png', 'Activo');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;

-- Volcando estructura para tabla tecsadb.imagenes
CREATE TABLE IF NOT EXISTS `imagenes` (
  `IdImagen` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Imagen` varchar(50) DEFAULT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdImagen`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tecsadb.imagenes: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;
INSERT INTO `imagenes` (`IdImagen`, `Nombre`, `Imagen`, `Estado`) VALUES
	(8, 'Logo', 'logoORIGINAL24.png', 'Activo'),
	(11, 'camaras', 'camara14.jpg', 'Activo'),
	(12, 'alarmas', 'Sin_imagen_disponible.jpg', 'Activo');
/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;

-- Volcando estructura para tabla tecsadb.kit
CREATE TABLE IF NOT EXISTS `kit` (
  `IdKit` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `CantidadProducto` decimal(20,0) NOT NULL,
  `PrecioKit` decimal(3,3) NOT NULL,
  `DescripcionKit` varchar(200) NOT NULL,
  `Estado` tinyint(4) NOT NULL,
  `IdProducto` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdKit`),
  KEY `IdProducto` (`IdProducto`),
  CONSTRAINT `IdProducto` FOREIGN KEY (`IdProducto`) REFERENCES `producto` (`IdProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tecsadb.kit: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `kit` DISABLE KEYS */;
/*!40000 ALTER TABLE `kit` ENABLE KEYS */;

-- Volcando estructura para tabla tecsadb.marca
CREATE TABLE IF NOT EXISTS `marca` (
  `IdMarca` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdMarca`),
  UNIQUE KEY `Nombre` (`Nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tecsadb.marca: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `marca` DISABLE KEYS */;
INSERT INTO `marca` (`IdMarca`, `Nombre`, `Estado`) VALUES
	(5, 'Sony', 'Activo'),
	(6, 'sure', 'Activo'),
	(7, 'Nokia', 'Activo'),
	(10, 'Hagroy Electronic', 'Activo'),
	(12, 'canon', 'Activo'),
	(14, 'sonyy', 'Activo'),
	(15, 'Salvador', 'Activo'),
	(16, 'huawie', 'Activo'),
	(17, 'closeup', 'Activo'),
	(18, 'epson', 'Activo'),
	(19, 'xiamo', 'Activo');
/*!40000 ALTER TABLE `marca` ENABLE KEYS */;

-- Volcando estructura para tabla tecsadb.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `IdMenu` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  `Link` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IdMenu`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tecsadb.menu: ~17 rows (aproximadamente)
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`IdMenu`, `Nombre`, `Link`) VALUES
	(1, 'Inicio', 'dashboard'),
	(2, 'Producto', 'Mantenimiento/Producto_controller'),
	(3, 'Marca', 'Mantenimiento/Marca'),
	(4, 'Proveedor', 'Mantenimiento/Proveedor_controller'),
	(5, 'Tipo de pago', 'Mantenimiento/TipoPago_controller'),
	(6, 'Personal', 'Mantenimiento/Personal_controller'),
	(7, 'Usuario', 'Mantenimiento/Usuario_controller'),
	(8, 'Profesión', 'Mantenimiento/Profesion_controller'),
	(9, 'Roles', 'Mantenimiento/Roles_controller'),
	(10, 'Nacionalidad', 'Mantenimiento/Nacionalidad_controller'),
	(11, 'Color', 'Mantenimiento/Color_controller'),
	(12, 'Tipo de producto', 'Mantenimiento/Tipo_controller'),
	(13, 'Imagenes', 'Mantenimiento/Imagen_controller'),
	(14, 'Empresa', 'Mantenimiento/Empresa_controller'),
	(15, 'Cliente Juridico', 'Mantenimiento/Juridico_controller'),
	(16, 'Cliente Natural', 'Mantenimiento/Natural_controller'),
	(17, 'Venta', 'Movimiento/Venta_controller/add'),
	(18, 'Lista de ventas', 'Movimiento/Venta_controller'),
	(19, 'Reporte de ventas', 'Reportes/ReporteVenta_controller'),
	(20, 'Permisos', 'Administrador/Permisos_controller');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;

-- Volcando estructura para tabla tecsadb.nacionalidad
CREATE TABLE IF NOT EXISTS `nacionalidad` (
  `IdNacionalidad` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdNacionalidad`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tecsadb.nacionalidad: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `nacionalidad` DISABLE KEYS */;
INSERT INTO `nacionalidad` (`IdNacionalidad`, `Nombre`, `Estado`) VALUES
	(1, 'coreana', 'Activo'),
	(2, 'Americana', 'Activo'),
	(3, 'Boliviana', 'Inactivo');
/*!40000 ALTER TABLE `nacionalidad` ENABLE KEYS */;

-- Volcando estructura para tabla tecsadb.permisos
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
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tecsadb.permisos: ~39 rows (aproximadamente)
/*!40000 ALTER TABLE `permisos` DISABLE KEYS */;
INSERT INTO `permisos` (`IdPermiso`, `IdMenu`, `IdRol`, `Leer`, `Insertar`, `Actualizar`, `Eliminar`, `Estado`) VALUES
	(1, 1, 1, 1, 1, 1, 1, 'Activo'),
	(2, 2, 1, 1, 1, 1, 1, 'Activo'),
	(3, 2, 2, 1, 0, 0, 0, 'Activo'),
	(4, 3, 1, 1, 1, 1, 1, 'Activo'),
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
	(25, 3, 2, 0, 0, 0, 0, 'Activo'),
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
	(43, 20, 2, 0, 0, 0, 0, 'Activo');
/*!40000 ALTER TABLE `permisos` ENABLE KEYS */;

-- Volcando estructura para tabla tecsadb.personal
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
  `IdSexo` int(11) DEFAULT NULL,
  `IdProfesion` int(11) DEFAULT NULL,
  `IdRol` int(11) DEFAULT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdPersonal`),
  UNIQUE KEY `Telefono` (`Telefono`),
  UNIQUE KEY `CedulaIdentidad` (`CedulaIdentidad`),
  UNIQUE KEY `Gmail` (`Gmail`),
  KEY `IdProfesion` (`IdProfesion`),
  KEY `IdRol` (`IdRol`),
  KEY `IdSexo` (`IdSexo`),
  CONSTRAINT `IdProfesion` FOREIGN KEY (`IdProfesion`) REFERENCES `profesion` (`IdProfesion`),
  CONSTRAINT `IdRol` FOREIGN KEY (`IdRol`) REFERENCES `rol` (`IdRol`),
  CONSTRAINT `IdSexo` FOREIGN KEY (`IdSexo`) REFERENCES `sexo` (`IdSexo`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tecsadb.personal: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
INSERT INTO `personal` (`IdPersonal`, `Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `Direccion`, `Telefono`, `Gmail`, `CedulaIdentidad`, `FechaNacimiento`, `FechaRegistro`, `IdSexo`, `IdProfesion`, `IdRol`, `Estado`) VALUES
	(1, 'Juan', 'Peres', 'Gutierrez', 'Av.Bolivia zona los lotes', 76123612, 'juan.peres@gmail.com', '123234543', '1990-10-11', '2020-03-27', 1, 1, 1, 'Activo'),
	(2, 'Dayana Carla', 'Foranda', 'Alba', 'Av.Beni', 77834123, 'dayana.foronda@gmail.com', '354534345', '1992-04-29', '2020-04-29', 2, 2, 2, 'Activo'),
	(3, 'Leonel', 'zarate ', 'Paco', 'Av. Cristo Rey', 75445644, 'leone,@gmail.com', '124235455', '2012-09-30', '2020-05-08', 1, 2, 2, 'Inactivo'),
	(4, 'liseth', 'zarate ', 'Paco', 'Av. Cristo Rey', 75445456, 'lis@gmail.com', '121323523', '1999-06-25', '2020-05-08', 2, 1, 3, 'Inactivo'),
	(6, 'grober', 'torrres', 'hermosa', 'Av. Cristo Rey', 75513574, 'leonelll,@gmail.com', '12322312', '2012-06-14', '2020-05-08', 1, 1, 2, 'Inactivo'),
	(7, 'Jose Maria ', 'sandoval', 'mita', 'Av. Cristo Rey', 72572432, 'jose_maria@gmail.com', '123124567', '1999-06-16', '2020-05-08', 1, 2, 3, 'Inactivo'),
	(8, 'Laura', 'Torres', 'Madeira', 'Av. Santa Cruz', 76387623, 'laura@gmail.com', '42335235', '2000-06-15', '2020-05-09', 2, 2, 3, 'Inactivo'),
	(9, 'Noemi', 'lucana', 'Ninaja', 'Av.  3 Pasos al frente', 76645645, 'noemi@gmail.com', '35232342', '1996-02-21', '2020-05-09', 2, 2, 2, 'Activo'),
	(10, 'aaaa', 'bbb', 'cccc', 'bbbb', 74564545, 'bb@gmail.com', '43242342', '2012-06-13', '2020-05-09', 2, 2, 3, 'Inactivo'),
	(11, 'Flora', 'Paco', 'Choque', 'Av.Bolivia', 79823423, 'flora@gmail.com', '534534543', '1995-02-16', '2020-05-09', 2, 3, 2, 'Activo');
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;

-- Volcando estructura para tabla tecsadb.producto
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
  KEY `IdProveedor` (`IdProveedor`),
  CONSTRAINT `IdColor` FOREIGN KEY (`IdColor`) REFERENCES `color` (`IdColor`),
  CONSTRAINT `IdMarca` FOREIGN KEY (`IdMarca`) REFERENCES `marca` (`IdMarca`),
  CONSTRAINT `IdNacionalidad` FOREIGN KEY (`IdNacionalidad`) REFERENCES `nacionalidad` (`IdNacionalidad`),
  CONSTRAINT `IdProveedor` FOREIGN KEY (`IdProveedor`) REFERENCES `proveedor` (`IdProveedor`),
  CONSTRAINT `IdTipoProducto` FOREIGN KEY (`IdTipoProducto`) REFERENCES `tipoproducto` (`IdTipoProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tecsadb.producto: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` (`IdProducto`, `Nombre`, `NroSerie`, `Codigo`, `CodigoBarra`, `Descripcion`, `Caracteristicas`, `Stock`, `Imagen`, `PrecioCompra`, `PrecioVenta`, `PrecioOferta`, `IdNacionalidad`, `IdColor`, `IdMarca`, `IdTipoProducto`, `IdProveedor`, `Estado`) VALUES
	(2, 'CÁMARA TUBO IR HDIS', 'TWD-CMIR808-900', 1000, '7771000888', ' negro con blanco con franjas rojas ', '*Alta Resolución: 900TVL\r\n*  0Lux\r\n* Lente Vertical 2.8-12mm\r\n* AGC / ATW / BLC\r\n* IR 45m\r\n* DC12V\r\n* Nivel de protección: IP66', 6, 'camara1.jpg', 100.00, 150.00, 130.00, 1, 2, 5, 1, 2, 'Activo'),
	(3, 'CÁMAR DOMO INTERIOR 1.0 MP', 'HG-HAC-HDW1000R-28S3', 10001, '777100018889', ' camara de seguridad dia noche\r\nde vigilancia', '* Resoluciónnn: 1280(H) x 720(V) @ 30fps\r\n* Lente: 3.6mm\r\n* AWB, AGC, BLC, dWDR, 2D-DNR\r\n* Smart IR: 20m\r\n* Iluminación: 0.01Lux@F1.2, 0Lux IR On\r\n* 12VDC +/- 25%\r\n* Consumo: 2.5W\r\n* 800m sobre Coaxial\r\n* No incluye fuente\r\n* -40º a +60ºC\r\n* Menú OSD\r\n* Carcasa Plástica', 4, 'camaradomo.jpg', 200.00, 250.00, 230.00, 2, 1, 10, 1, 2, 'Activo'),
	(4, 'polera ', '1231', 1234, '12345', 'polera roja manga corta ', 'con cuello', 6, 'polerarojo.jpg', 50.00, 75.00, 70.00, 2, 5, 14, 1, 1, 'Activo');
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;

-- Volcando estructura para tabla tecsadb.profesion
CREATE TABLE IF NOT EXISTS `profesion` (
  `IdProfesion` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdProfesion`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tecsadb.profesion: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `profesion` DISABLE KEYS */;
INSERT INTO `profesion` (`IdProfesion`, `Nombre`, `Estado`) VALUES
	(1, 'Administrador de empresas', 'Activo'),
	(2, 'Ingeniero de sistemas', 'Activo'),
	(3, 'Bachiller en Humanidades', 'Activo'),
	(4, 'Contaduria Publicaaa', 'Inactivo'),
	(5, 'Diseñador grafico', 'Activo');
/*!40000 ALTER TABLE `profesion` ENABLE KEYS */;

-- Volcando estructura para tabla tecsadb.proveedor
CREATE TABLE IF NOT EXISTS `proveedor` (
  `IdProveedor` int(11) NOT NULL AUTO_INCREMENT,
  `NombreEmpresa` varchar(50) NOT NULL,
  `RepresentanteLegal` varchar(50) DEFAULT NULL,
  `Nit` int(50) DEFAULT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdProveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tecsadb.proveedor: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
INSERT INTO `proveedor` (`IdProveedor`, `NombreEmpresa`, `RepresentanteLegal`, `Nit`, `Estado`) VALUES
	(1, 'Nokiaaa', 'Jose Maita Murriloaa', 2144444, 'Activo'),
	(2, 'samsung store', 'Daniela Arancibia Montaner', 646456576, 'Activo');
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;

-- Volcando estructura para tabla tecsadb.rol
CREATE TABLE IF NOT EXISTS `rol` (
  `IdRol` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdRol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tecsadb.rol: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` (`IdRol`, `Nombre`, `Estado`) VALUES
	(1, 'Admin', 'Activo'),
	(2, 'Cajero', 'Activo'),
	(3, 'Resepcionista', 'Inactivo');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;

-- Volcando estructura para tabla tecsadb.sexo
CREATE TABLE IF NOT EXISTS `sexo` (
  `IdSexo` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdSexo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tecsadb.sexo: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `sexo` DISABLE KEYS */;
INSERT INTO `sexo` (`IdSexo`, `Nombre`, `Estado`) VALUES
	(1, 'Hombre', 'Activo'),
	(2, 'Mujer', 'Activo');
/*!40000 ALTER TABLE `sexo` ENABLE KEYS */;

-- Volcando estructura para tabla tecsadb.tipocliente
CREATE TABLE IF NOT EXISTS `tipocliente` (
  `IdTipoCliente` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdTipoCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tecsadb.tipocliente: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tipocliente` DISABLE KEYS */;
INSERT INTO `tipocliente` (`IdTipoCliente`, `Nombre`, `Estado`) VALUES
	(1, 'Natural', 'Activo'),
	(2, 'Juridico', 'Activo');
/*!40000 ALTER TABLE `tipocliente` ENABLE KEYS */;

-- Volcando estructura para tabla tecsadb.tipopago
CREATE TABLE IF NOT EXISTS `tipopago` (
  `IdTipopago` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdTipopago`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tecsadb.tipopago: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tipopago` DISABLE KEYS */;
INSERT INTO `tipopago` (`IdTipopago`, `Nombre`, `Estado`) VALUES
	(1, 'Contado', 'Activo'),
	(2, 'Tarjetasss', 'Inactivo');
/*!40000 ALTER TABLE `tipopago` ENABLE KEYS */;

-- Volcando estructura para tabla tecsadb.tipoproducto
CREATE TABLE IF NOT EXISTS `tipoproducto` (
  `IdTipoProducto` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdTipoProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tecsadb.tipoproducto: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tipoproducto` DISABLE KEYS */;
INSERT INTO `tipoproducto` (`IdTipoProducto`, `Nombre`, `Estado`) VALUES
	(1, 'Camaras', 'Activo'),
	(2, 'cerca electrica', 'Activo');
/*!40000 ALTER TABLE `tipoproducto` ENABLE KEYS */;

-- Volcando estructura para tabla tecsadb.tipo_comprobante
CREATE TABLE IF NOT EXISTS `tipo_comprobante` (
  `IdTipo_comprobante` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Iva` int(11) DEFAULT NULL,
  `Serie` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdTipo_comprobante`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tecsadb.tipo_comprobante: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_comprobante` DISABLE KEYS */;
INSERT INTO `tipo_comprobante` (`IdTipo_comprobante`, `Nombre`, `Cantidad`, `Iva`, `Serie`) VALUES
	(1, 'Factura', 29, 13, '001'),
	(2, 'Cotización', 4, 0, '001');
/*!40000 ALTER TABLE `tipo_comprobante` ENABLE KEYS */;

-- Volcando estructura para tabla tecsadb.usuario
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tecsadb.usuario: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`IdUsuario`, `NombreUsuario`, `Contrasena`, `Estado`, `IdPersonal`) VALUES
	(1, 'JuanAdmin1', 'd2451f17a3b7843ddc90ab9f15ea409f43bb1b68', 'Activo', 1),
	(3, 'NoemiCaja', '66e43ac9a7c9e8d0c9e1d54fbae3d66941caff38', 'Activo', 9),
	(5, 'floracaja', 'ba7110dfcc140d94053bb33935ab05263b05f367', 'Activo', 11);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

-- Volcando estructura para tabla tecsadb.venta
CREATE TABLE IF NOT EXISTS `venta` (
  `IdVenta` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` datetime DEFAULT NULL,
  `SubTotal` varchar(50) DEFAULT NULL,
  `Iva` varchar(50) DEFAULT NULL,
  `Descuento` varchar(50) DEFAULT NULL,
  `Total` varchar(50) DEFAULT NULL,
  `NroVenta` varchar(50) DEFAULT NULL,
  `NroComprobante` varchar(50) DEFAULT NULL,
  `IdCliente` int(11) DEFAULT NULL,
  `IdPersonal` int(11) DEFAULT NULL,
  `IdTipo_comprobante` int(11) DEFAULT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`IdVenta`),
  KEY `FK_venta_Cliente` (`IdCliente`),
  KEY `FK_venta_Personal` (`IdPersonal`),
  KEY `FK_venta_Comprobante` (`IdTipo_comprobante`),
  CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`IdCliente`),
  CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`IdPersonal`) REFERENCES `personal` (`IdPersonal`),
  CONSTRAINT `venta_ibfk_3` FOREIGN KEY (`IdTipo_comprobante`) REFERENCES `tipo_comprobante` (`IdTipo_comprobante`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tecsadb.venta: ~23 rows (aproximadamente)
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
INSERT INTO `venta` (`IdVenta`, `Fecha`, `SubTotal`, `Iva`, `Descuento`, `Total`, `NroVenta`, `NroComprobante`, `IdCliente`, `IdPersonal`, `IdTipo_comprobante`, `Estado`) VALUES
	(1, '2020-05-17 00:00:00', '800.00', '104.00', '0.00', '904.00', '1', '000001', 2, 1, 1, 'Activo'),
	(2, '2020-05-17 00:00:00', '300.00', '39.00', '0.00', '339.00', '1', '000002', 4, 1, 1, 'Activo'),
	(3, '2020-05-18 00:00:00', '400.00', '52.00', '0.00', '452.00', '1', '000003', 4, 1, 1, 'Activo'),
	(4, '2020-05-18 00:00:00', '300.00', '39.00', '0.00', '339.00', '1', '000004', 2, 1, 1, 'Activo'),
	(5, '2020-05-18 00:00:00', '100.00', '13.00', '0.00', '113.00', '1', '000005', 2, 1, 1, 'Activo'),
	(6, '2020-05-18 00:00:00', '400.00', '52.00', '0.00', '452.00', '1', '000005', 2, 1, 1, 'Activo'),
	(7, '2020-05-18 00:00:00', '200.00', '26.00', '0.00', '226.00', '1', '000006', 2, 1, 1, 'Activo'),
	(8, '2020-05-18 00:00:00', '100.00', '13.00', '0.00', '113.00', '1', '000007', 4, 1, 1, 'Activo'),
	(9, '2020-05-18 00:00:00', '200.00', '26.00', '0.00', '226.00', '1', '000008', 2, 1, 1, 'Activo'),
	(10, '2020-05-18 00:00:00', '200.00', '26.00', '0.00', '226.00', '1', '000009', 2, 1, 1, 'Activo'),
	(11, '2020-05-18 00:00:00', '200.00', '26.00', '0.00', '226.00', '1', '000010', 2, 1, 1, 'Activo'),
	(12, '2020-05-18 00:00:00', '500.00', '65.00', '0.00', '565.00', '1', '000011', 2, 1, 1, 'Activo'),
	(13, '2020-05-19 00:00:00', '200.00', '26.00', '0.00', '226.00', '1', '000012', 2, 1, 1, 'Activo'),
	(14, '2020-05-20 00:00:00', '300.00', '39.00', '0.00', '339.00', '1', '000013', 1, 1, 1, 'Activo'),
	(15, '2020-05-20 00:00:00', '300.00', '0.00', '0.00', '300.00', '001', '000002', 3, 1, 2, 'Activo'),
	(16, '2020-05-20 00:00:00', '300.00', '0.00', '0.00', '300.00', '001', '000003', 5, 1, 2, 'Activo'),
	(17, '2020-05-20 00:00:00', '1500.00', '195.00', '0.00', '1695.00', '001', '000014', 6, 1, 1, 'Activo'),
	(18, '2020-05-21 00:00:00', '300.00', '39.00', '0.00', '339.00', '001', '000015', 5, 1, 1, 'Activo'),
	(19, '2020-05-23 00:00:00', '200.00', '26.00', '0.00', '226.00', '001', '000016', 1, 3, 1, 'Activo'),
	(20, '2020-05-23 05:51:00', '100.00', '13.00', '0.00', '113.00', '001', '000017', 5, 3, 1, 'Activo'),
	(21, '2020-05-23 02:08:41', '200.00', '26.00', '0.00', '226.00', '001', '000018', 6, 3, 1, 'Activo'),
	(22, '2020-05-23 04:59:40', '200.00', '26.00', '0.00', '226.00', '001', '000019', 3, 1, 1, 'Activo'),
	(23, '2020-05-23 04:59:43', '200.00', '26.00', '0.00', '226.00', '001', '000020', 6, 1, 1, 'Activo'),
	(24, '2020-05-23 05:32:25', '600.00', '78.00', '0.00', '678.00', '001', '000021', 2, 1, 1, 'Activo'),
	(25, NULL, '1500.00', '0.00', '0.00', '1500.00', '001', '000004', 9, 1, 2, 'Activo'),
	(26, '2020-05-23 15:30:21', '200.00', '26.00', '0.00', '226.00', '001', '000022', 2, 1, 1, 'Activo'),
	(27, '2020-05-26 00:55:06', '1000.00', '130.00', '0.00', '1130.00', '001', '000023', 2, 1, 1, 'Activo'),
	(28, '2020-06-05 02:50:21', '200.00', '26.00', '0.00', '226.00', '001', '000024', 2, 1, 1, 'Activo'),
	(29, '2020-06-05 02:57:55', '200.00', '26.00', '0.00', '226.00', '001', '000025', 2, 1, 1, 'Activo'),
	(30, '2020-06-06 00:44:39', '200.00', '26.00', '0.00', '226.00', '001', '000026', 1, 1, 1, 'Activo'),
	(31, '2020-06-09 11:22:37', '600.00', '78.00', '0.00', '678.00', '001', '000027', 8, 3, 1, 'Activo'),
	(32, '2020-08-14 10:34:33', '100.00', '13.00', '0.00', '113.00', '001', '000028', 1, 1, 1, 'Activo'),
	(33, '2020-08-14 10:42:02', '100.00', '13.00', '0.00', '113.00', '001', '000029', 3, 3, 1, 'Activo');
/*!40000 ALTER TABLE `venta` ENABLE KEYS */;

-- Volcando estructura para disparador tecsadb.Actualizarproductos
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER';
DELIMITER //
CREATE TRIGGER `Actualizarproductos` AFTER UPDATE ON `producto` FOR EACH ROW INSERT INTO bitacora_producto(IdProducto,Accion,Fecha,Nombre_Nuevo,Nombre_Viejo,NroSerie_Nuevo,NroSerie_Viejo,Codigo_Nuevo,Codigo_Viejo,
CodigoBarra_Nuevo,CodigoBarra_Viejo,Descripcion_Nuevo,Descripcion_Viejo,Caracteristicas_Nuevo,Caracteristicas_Viejo,
Stock_Nuevo,Stock_Viejo,PrecioCompra_Nuevo,PrecioCompra_Viejo,
PrecioVenta_Nuevo,PrecioVenta_Viejo,PrecioOferta_Nuevo,PrecioOferta_Viejo,Estado_Nuevo,Estado_Viejo)
VALUES (new.IdProducto,'Se actualizo',NOW(),new.Nombre,old.Nombre,new.NroSerie,old.NroSerie,
new.Codigo,old.Codigo,new.CodigoBarra,old.CodigoBarra,
new.Descripcion,old.Descripcion,new.Caracteristicas,old.Caracteristicas,new.Stock,old.Stock,new.PrecioCompra,old.PrecioCompra,
new.PrecioVenta,old.PrecioVenta,new.PrecioOferta,old.PrecioOferta,new.Estado,old.Estado)//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador tecsadb.Insertarproductos
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER';
DELIMITER //
CREATE TRIGGER `Insertarproductos` AFTER INSERT ON `producto` FOR EACH ROW INSERT INTO bitacora_producto(IdProducto,Accion,Fecha,Nombre_Nuevo,NroSerie_Nuevo,Codigo_Nuevo,
CodigoBarra_Nuevo,Descripcion_Nuevo,Caracteristicas_Nuevo,Stock_Nuevo,PrecioCompra_Nuevo,
PrecioVenta_Nuevo,PrecioOferta_Nuevo,Estado_Nuevo)
VALUES (new.IdProducto,'Se Inserto',NOW(),new.Nombre,new.NroSerie,new.Codigo,new.CodigoBarra,
new.Descripcion,new.Caracteristicas,new.Stock,new.PrecioCompra,new.PrecioVenta,new.PrecioOferta,new.Estado)//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
