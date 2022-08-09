-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-->DANGER!!! drop schema if exists tucson;
create schema if not exists tucson 
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;
use tucson;

-- -----------------------------------------------------
-- Table `almacen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `almacen` (
  `idalmacen` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL DEFAULT NULL,
  `ubicacion` VARCHAR(200) NULL DEFAULT NULL,
  PRIMARY KEY (`idalmacen`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;


-- -----------------------------------------------------
-- Table `caracteristica`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `caracteristica` (
  `idcaracteristica` INT NOT NULL AUTO_INCREMENT,
  `tx_caracteristica` VARCHAR(200) NOT NULL,
  `tipo` INT NOT NULL DEFAULT '1' COMMENT '1. Caracteristica,  2 . Valor',
  `nivel` INT NOT NULL DEFAULT '1',
  `idpadre` INT NULL DEFAULT NULL,
  PRIMARY KEY (`idcaracteristica`),
  INDEX `fk_caracteristica_caracteristica_idx` (`idpadre` ASC) ,
  CONSTRAINT `fk_caracteristica_caracteristica`
    FOREIGN KEY (`idpadre`)
    REFERENCES `caracteristica` (`idcaracteristica`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;


-- -----------------------------------------------------
-- Table `foto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `foto` (
  `idfoto` INT NOT NULL AUTO_INCREMENT,
  `formato` VARCHAR(45) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `bytes` BLOB NOT NULL,
  PRIMARY KEY (`idfoto`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;


-- -----------------------------------------------------
-- Table `productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `productos` (
  `idproducto` INT NOT NULL AUTO_INCREMENT,
  `idrubro` INT NOT NULL,
  `idmarca` INT NOT NULL,
  `idfoto` INT NULL DEFAULT NULL,
  `codigo` VARCHAR(45) NULL DEFAULT NULL,
  `descripcion` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`idproducto`),
  UNIQUE INDEX `codigo_UNIQUE` (`codigo` ASC) ,
  INDEX `fk_productos_foto1_idx` (`idfoto` ASC) ,
  INDEX `fk_productos_caracteristica_idrubro_idx` (`idrubro` ASC) ,
  INDEX `fk_productos_caracteristica_idmarca_idx` (`idmarca` ASC) ,
  CONSTRAINT `fk_productos_caracteristica_idrubro`
    FOREIGN KEY (`idrubro`)
    REFERENCES `caracteristica` (`idcaracteristica`),
  CONSTRAINT `fk_productos_caracteristica_idmarca`
    FOREIGN KEY (`idmarca`)
    REFERENCES `caracteristica` (`idcaracteristica`),
  CONSTRAINT `fk_productos_foto`
    FOREIGN KEY (`idfoto`)
    REFERENCES `foto` (`idfoto`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;


-- -----------------------------------------------------
-- Table `inventario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario` (
  `idalmacen` INT NOT NULL,
  `idproducto` INT NOT NULL,
  `lote` VARCHAR(45) NOT NULL,
  `localizacion` VARCHAR(200) NOT NULL DEFAULT '/',
  `cantidad` INT NOT NULL,
  `unidad` INT NULL DEFAULT NULL,
  PRIMARY KEY (`idalmacen`, `idproducto`, `lote`, `localizacion`),
  INDEX `fk_inventario_productos_idx` (`idproducto` ASC) ,
  INDEX `fk_inventario_almacen_idx` (`idalmacen` ASC) ,
  CONSTRAINT `fk_inventario_almacen`
    FOREIGN KEY (`idalmacen`)
    REFERENCES `almacen` (`idalmacen`),
  CONSTRAINT `fk_inventario_productos`
    FOREIGN KEY (`idproducto`)
    REFERENCES `productos` (`idproducto`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;


-- -----------------------------------------------------
-- Table `productos_caracteristicas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `productos_caracteristicas` (
  `idproducto` INT NOT NULL,
  `idcaracteristicas` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `valor` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idproducto`),
  INDEX `fk_caracteristicas_productos1_idx` (`idproducto` ASC) ,
  INDEX `fk_productos_caracteristicas_caracteristica_idx` (`idcaracteristicas` ASC) ,
  CONSTRAINT `fk_caracteristicas_productos`
    FOREIGN KEY (`idproducto`)
    REFERENCES `productos` (`idproducto`),
  CONSTRAINT `fk_productos_caracteristicas_caracteristica`
    FOREIGN KEY (`idcaracteristicas`)
    REFERENCES `caracteristica` (`idcaracteristica`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;


-- -----------------------------------------------------
-- Table `usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `tx_nombre` VARCHAR(45) NOT NULL,
  `tx_apellido` VARCHAR(45) NOT NULL,
  `dni` VARCHAR(45) NOT NULL,
  `tx_email_usuario` VARCHAR(45) NOT NULL,
  `idrol` INT(11) NULL DEFAULT NULL,
  `idfoto_usuario` INT(11) NULL DEFAULT NULL,
  `updated_at` DATETIME NOT NULL,
  `created_at` DATETIME NOT NULL,
  PRIMARY KEY (`idusuario`),
  INDEX `fk_usuario_caracteristica1_idx` (`idrol` ASC) ,
  INDEX `fk_usuario_foto1_idx` (`idfoto_usuario` ASC) ,
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) ,
  CONSTRAINT `fk_usuario_caracteristica_rol`
    FOREIGN KEY (`idrol`)
    REFERENCES `caracteristica` (`idcaracteristica`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_foto1`
    FOREIGN KEY (`idfoto_usuario`)
    REFERENCES `foto` (`idfoto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;

-- -----------------------------------------------------
-- Placeholder table for view `v_marca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `v_marca` (`idmarca` INT, `tx_marca` INT);

-- -----------------------------------------------------
-- View `v_marca`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `v_marca`;
CREATE  OR REPLACE VIEW `v_marca` AS 
SELECT 	`caracteristica`.`idcaracteristica` AS `idmarca`,
		`caracteristica`.`tx_caracteristica` AS `tx_marca` 
 FROM `caracteristica`
 WHERE(`caracteristica`.`idpadre` = (
		select `caracteristica`.`idcaracteristica` FROM `caracteristica` WHERE (`caracteristica`.`tx_caracteristica` = 'Marca')));

-- -----------------------------------------------------
-- View `v_rubro`
-- -----------------------------------------------------
 DROP  VIEW IF EXISTS `v_rubro`;
 CREATE VIEW `v_rubro` AS
    SELECT 
        r.idcaracteristica AS idrubro,
        r.tx_caracteristica AS tx_rubro,
        s.idcaracteristica AS idsuperrubro,
        s.tx_caracteristica AS tx_superrubro        
    FROM caracteristica as r  
    JOIN caracteristica as s ON (r.idpadre = s.idcaracteristica)
    JOIN caracteristica as x ON (s.idpadre = x.idcaracteristica AND x.tx_caracteristica='SUPER RUBRO');

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
