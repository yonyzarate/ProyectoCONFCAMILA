DROP DATABASE IF EXISTS CONFCAMILA;

CREATE DATABASE CONFCAMILA;

USE CONFCAMILA;
set manes 'utf8';

CREATE TABLE Color  (
    IdColor INTEGER AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Estado Enum ('Activo','Inactivo') NULL
)ENGINE=INNODB DEFAULT CHARSET=Latin1;

CREATE TABLE Marca (
    IdMarca INTEGER AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Estado Enum('Activo','Inactivo')
)ENGINE=INNODB DEFAULT CHARSET=Latin1;

CREATE TABLE Categoria (
    IdCategoria INTEGER AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=Latin1;

CREATE TABLE SubCategoria (
    IdSubcategoria INTEGER AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    IdCategoria INT (11) NOT NULL,
    CONSTRAINT FK_Categoria_Subcategoria FOREIGN KEY (IdCategoria) REFERENCES Categoria (IdCategoria)
)ENGINE=INNODB DEFAULT CHARSET=Latin1;
CREATE TABLE Talla (
    IdTalla INTEGER AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=Latin1;

CREATE TABLE Producto1 (
    IdProducto INTEGER AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Codigo int(30) NOT NULL UNIQUE,
    Descripcion VARCHAR(200),
    Stock NUMERIC(20) NOT NULL,
    Imagen VARCHAR(50)NULL,
    PrecioVenta DECIMAL(10,2),
    PrecioOferta DECIMAL(10,2),
    IdColor INT (11)NOT NULL,
    IdTalla INT (11)NOT NULL,
    IdSubcategoria INT (11)NOT NULL,
    Estado enum('Activo','Inactivo') NULL,
    CONSTRAINT FK_color_Producto FOREIGN KEY (IdColor) REFERENCES Color (IdColor),
    CONSTRAINT FK_Talla_Producto FOREIGN KEY (IdTalla) REFERENCES Talla (IdTalla),
    CONSTRAINT FK_Subcategoria_Producto FOREIGN KEY (IdSubcategoria) REFERENCES Subcategoria (IdSubcategoria)
)ENGINE=INNODB DEFAULT CHARSET=Latin1; 

CREATE TABLE Empresa (
    IdEmpresa INTEGER AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Direccion VARCHAR (100) NOT NULL,
    Telefono NUMERIC(30) NOT NULL UNIQUE,
    Gmail VARCHAR(100) NOT NULL UNIQUE,
    Nit VARCHAR (200) NOT NULL UNIQUE,
    Logo VARCHAR(50) null 
    Estado enum('Activo','Inactivo') NULL
)ENGINE=INNODB DEFAULT CHARSET=Latin1;

CREATE TABLE TipoCliente (
    IdTipoCliente INTEGER NOT NULL PRIMARY KEY REFERENCES Cliente(IdCliente) ,
    Nombre VARCHAR(50) NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=Latin1;

CREATE TABLE Cliente (
    IdCliente INTEGER AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Direccion VARCHAR(100)  NULL,
    Telefono NUMERIC(30) NULL UNIQUE,
    Nit VARCHAR (50) NOT NULL UNIQUE,
    Gmail VARCHAR(100)  NULL UNIQUE, 
    IdTipoCliente int NULL,
    Estado enum('Activo','Inactivo'),
    CONSTRAINT FK_Cliente FOREIGN KEY (IdTipoCliente) REFERENCES TipoCliente (IdTipoCliente)
)ENGINE=INNODB DEFAULT CHARSET=Latin1;


CREATE TABLE Profesion (
    IdProfesion INTEGER AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Estado enum('Activo','Inactivo')
)ENGINE=INNODB DEFAULT CHARSET=Latin1;

CREATE TABLE Rol (
    IdRol INTEGER AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Estado Enum('Activo','Inactivo')
)ENGINE=INNODB DEFAULT CHARSET=Latin1;

CREATE TABLE Sexo (
    IdSexo INTEGER AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Estado Enum('Activo','Inactivo')
)ENGINE=INNODB DEFAULT CHARSET=Latin1;

CREATE TABLE TipoPago (
    IdTipoPago INTEGER AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Estado Enum('Activo','Inactivo')
)ENGINE=INNODB DEFAULT CHARSET=Latin1;


CREATE TABLE Personal (
    IdPersonal INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    ApellidoPaterno VARCHAR(50) NOT NULL,
    ApellidoMaterno VARCHAR(50) NOT NULL,
    Direccion VARCHAR(50) NOT NULL,
    Telefono NUMERIC (30)NOT NULL UNIQUE,
    Gmail VARCHAR (100) NOT NULL UNIQUE,
    CedulaIdentidad VARCHAR(30) NOT NULL UNIQUE,
    FechaNacimiento DATE NULL DEFAULT '0000-00-00',
    FechaRegistro DATETIME NOT NULL,
    IdSexo INT NULL,
    IdIdRol INT NULL,
    IdProfesion INT NULL,
    Estado Enum('Activo','Inactivo'),
    CONSTRAINT FK_Personal_Porfesion FOREIGN KEY (IdProfesion)  REFERENCES Profesion(IdProfesion),
    CONSTRAINT FK_Personal_Rol FOREIGN KEY (IdRol)  REFERENCES Rol (IdRol)
    CONSTRAINT FK_Personal_sexo FOREIGN KEY (IdSexo) REFERENCES Sexo (IdSexo)
)ENGINE=INNODB DEFAULT CHARSET=Latin1;

CREATE TABLE Usuario (
    IdUsuario INTEGER AUTO_INCREMENT PRIMARY KEY,
    NombreUsuario VARCHAR(50) NOT NULL UNIQUE,
    Contraseña VARCHAR(30) NOT NULL,
    Estado Enum('Activo','Inactivo'),
    IdPersonal INT (11) NOT NULL,
    CONSTRAINT FK_Personal_Usuario FOREIGN KEY (IdPersonal) REFERENCES Personal (IdPersonal)
)ENGINE=INNODB DEFAULT CHARSET=Latin1;

CREATE TABLE Tipo_comprobante (
    IdTipo_comprovante INTEGER AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Cantidad int null,
    Iva INT NULL,
    NroComprobante INT NULL, 
    Estado ENUM ('Activo','Inactivo')
)ENGINE=INNODB DEFAULT CHARSET=Latin1;

CREATE TABLE Venta (
    IdVenta INTEGER AUTO_INCREMENT PRIMARY KEY,
    Fecha DATE NULL,
    SubTotal VARCHAR(50) NULL,
    Iva VARCHAR(50) NULL,
    Descuento VARCHAR(50) NULL,
    Total VARCHAR(50) NULL
    NroVenta VARCHAR(50) NULL,
    NroComprobante VARCHAR(50) NULL,   
    IdCliente INT NULL,
    IdPersonal INT NULL,
    IdTipo_comprovante INT NULL,
    Estado ENUM ('Activo','Inactivo'),
    FOREIGN KEY FK_venta_Cliente REFERENCES Cliente (IdCliente),
    FOREIGN KEY FK_venta_Personal REFERENCES Personal (IdPersonal),
    FOREIGN KEY FK_venta_Comprobante REFERENCES Tipo_comprobante (IdTipo_comprovante)
)ENGINE=INNODB DEFAULT CHARSET=Latin1;

CREATE TABLE DetalleVenta (
    IdDetalleVenta INTEGER AUTO_INCREMENT PRIMARY KEY,
    Precio  VARCHAR(50) NOT NULL,
    Cantidad VARCHAR(30) NOT NULL,
    Importe VARCHAR(30) NOT NULL,
    IdVenta INT NULL,
    IdProducto INT NULL,
    CONSTRAINT FK_Personal_Venta FOREIGN KEY (IdVenta) REFERENCES Venta (IdVenta),
    CONSTRAINT FK_Personal_Producto FOREIGN KEY  (IdProducto) REFERENCES Producto1 (IdProducto)
)ENGINE=INNODB DEFAULT CHARSET=Latin1;

CREATE TABLE Menu (
    IdMenu INTEGER AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NULL,
    link VARCHAR(100)  NULL
)ENGINE=INNODB DEFAULT CHARSET=Latin1

CREATE TABLE Permisos (
    IdPermiso INTEGER AUTO_INCREMENT PRIMARY KEY,
    IdMenu INT  NULL,
    IdRol INT  NULL,
    Leer INT  NULL,
    Insertar INT  NULL,
    Actualizar INT  NULL,
    Eliminar INT  NULL,
    Estado TINYINT  NULL,
    CONSTRAINT FK_Personal_Menu FOREIGN KEY (IdMenu) REFERENCES menu (IdMenu),
    CONSTRAINT FK_Personal_Rol FOREIGN KEY (IdRol) REFERENCES rol (IdRol)
)ENGINE=INNODB DEFAULT CHARSET=Latin1
