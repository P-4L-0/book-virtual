CREATE SCHEMA IF NOT EXISTS `biblioteca` DEFAULT CHARACTER SET utf8mb4;
USE `biblioteca`;

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `apellido` VARCHAR(100) NOT NULL,
  `correo` VARCHAR(150) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `genero` ENUM('Hombre', 'Mujer') NOT NULL,
  `direccion` VARCHAR(255) NOT NULL,
  `telefono` VARCHAR(15) NOT NULL,
  `tarjeta` VARCHAR(50) NOT NULL,
  `dui` VARCHAR(9) NOT NULL UNIQUE,
  `nacimiento` DATE NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;