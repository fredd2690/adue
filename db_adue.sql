# Host: localhost  (Version 5.5.5-10.4.14-MariaDB)
# Date: 2020-11-23 16:40:24
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "curso"
#

DROP TABLE IF EXISTS `curso`;
CREATE TABLE `curso` (
  `idCurso` smallint(6) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(10) NOT NULL,
  `seccion` varchar(15) NOT NULL,
  `tutor` varchar(45) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idCurso`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Data for table "curso"
#

INSERT INTO `curso` VALUES (1,'1A','Secundaria','Jose Cadima',1),(2,'1B','Secundaria','',1),(3,'1C','Secundaria','',0),(4,'1D','Secundaria','',0),(5,'3A','Secundaria','pepito',1),(6,'3B','Secundaria','Andres de Santacruz',1),(7,'4A','Secundaria','Jenoveva Rioas',1),(8,'4C','Secundaria','',0),(9,'5A','Secundaria','Pepito',1);

#
# Structure for table "estudiante"
#

DROP TABLE IF EXISTS `estudiante`;
CREATE TABLE `estudiante` (
  `idEstudiante` smallint(6) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(25) NOT NULL,
  `aPaterno` varchar(25) NOT NULL,
  `aMaterno` varchar(25) DEFAULT NULL,
  `ci` varchar(15) DEFAULT NULL,
  `sexo` char(1) NOT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `idCurso` smallint(6) NOT NULL,
  `fechaCreacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `fechaActualizacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idEstudiante`),
  KEY `fk_estudiante_curso1` (`idCurso`),
  CONSTRAINT `fk_estudiante_curso1` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`idCurso`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "estudiante"
#

INSERT INTO `estudiante` VALUES (1,'Rodrigo','Aspeti','Vasquez','654987','M','0000-00-00','7078888','rodrigo.aspeti@gmail.com','C-Bartolome Garnica S/N Zona Sud',1,'2020-11-15 20:50:50','2020-11-15 20:50:50',1),(2,'Jorge','Vargas','Vargas','123456789','M','0000-00-00','70345698','jorge@gmail.com','C lizarraga',2,'2020-11-15 21:35:24','2020-11-15 21:35:24',1),(3,'Noelia','Villarroel','Cano','123456','F','0000-00-00','60312354','noelia@gmail.com','Bartolome de las Casas',3,'2020-11-15 21:50:18','2020-11-15 21:50:18',1),(4,'Lizeth','Garcia','Arnez','2222221','F','0000-00-00','76412345','liz@gmail.com','Av Quiroga',2,'2020-11-15 21:52:08','2020-11-15 21:52:08',1),(5,'Jhoselin','Suaznabar','Cadima',NULL,'F','0000-00-00','76411111','Jhosy@gmail.com','Arquimides 123',3,'2020-11-15 21:53:21','2020-11-15 21:53:21',1),(6,'jaimito','jaimito','jaimito','45646','M','0000-00-00','70987845','jaimito@gmail.com','bartolome',7,'2020-11-23 13:55:09','2020-11-23 13:55:09',1);

#
# Structure for table "gestion"
#

DROP TABLE IF EXISTS `gestion`;
CREATE TABLE `gestion` (
  `idGestion` smallint(6) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(10) NOT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaCierre` date DEFAULT NULL,
  `estado` tinyint(2) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idGestion`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "gestion"
#

INSERT INTO `gestion` VALUES (1,'2020','0000-00-00','0000-00-00',1),(2,'2022','0000-00-00','0000-00-00',1),(3,'2030','0000-00-00','0000-00-00',1),(4,'2024','0000-00-00','0000-00-00',0);

#
# Structure for table "cuota"
#

DROP TABLE IF EXISTS `cuota`;
CREATE TABLE `cuota` (
  `idCuota` smallint(6) NOT NULL AUTO_INCREMENT,
  `concepto` varchar(45) NOT NULL,
  `precio` varchar(45) NOT NULL,
  `idGestion` smallint(6) NOT NULL,
  `fechaCreacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `fechaActualizacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idCuota`),
  KEY `fk_cuota_gestion1` (`idGestion`),
  CONSTRAINT `fk_cuota_gestion1` FOREIGN KEY (`idGestion`) REFERENCES `gestion` (`idGestion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "cuota"
#


#
# Structure for table "rol"
#

DROP TABLE IF EXISTS `rol`;
CREATE TABLE `rol` (
  `idRol` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idRol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "rol"
#

INSERT INTO `rol` VALUES (1,'Administrador',NULL),(2,'Usuario',NULL);

#
# Structure for table "usuario"
#

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `idUsuario` smallint(6) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(20) NOT NULL DEFAULT '',
  `apellidos` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(35) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(35) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `idRol` tinyint(4) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_usuario_rol1` (`idRol`),
  CONSTRAINT `fk_usuario_rol1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "usuario"
#

INSERT INTO `usuario` VALUES (1,'root','root','root@adue.com','root','63a9f0ea7bb98050796b649e85481845',1,1),(2,'user','user','user@adue.com','user','ee11cbb19052e40b07aac0ca060c23ee',1,2),(3,'rodrigo','aspeti','rodrigo.aspeti@gmail.com','raspet','d41d8cd98f00b204e9800998ecf8427e',0,2),(4,'test','test','test@gmail.com','test','098f6bcd4621d373cade4e832627b4f6',0,2),(5,'dfgfdgd','dfgdfg','supplier@phptravels.com','juanita','de623a78b0989841e5c4931cd8031ea1',1,2);

#
# Structure for table "detalledepago"
#

DROP TABLE IF EXISTS `detalledepago`;
CREATE TABLE `detalledepago` (
  `idEstudiante` smallint(6) NOT NULL,
  `idCuota` smallint(6) NOT NULL,
  `idUsuario` smallint(6) NOT NULL,
  `fechaDePago` timestamp NOT NULL DEFAULT current_timestamp(),
  `total` decimal(8,2) NOT NULL,
  PRIMARY KEY (`idEstudiante`,`idCuota`),
  KEY `fk_estudiante_has_cuota_cuota1` (`idCuota`),
  KEY `fk_estudiante_has_cuota_usuario1` (`idUsuario`),
  CONSTRAINT `fk_estudiante_has_cuota_cuota1` FOREIGN KEY (`idCuota`) REFERENCES `cuota` (`idCuota`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_estudiante_has_cuota_estudiante1` FOREIGN KEY (`idEstudiante`) REFERENCES `estudiante` (`idEstudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_estudiante_has_cuota_usuario1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "detalledepago"
#

