CREATE TABLE `santander`.`registro_santander` ( `id` INT NOT NULL AUTO_INCREMENT , `apellidoP` VARCHAR(25) NOT NULL , `apellidoM` VARCHAR(25) NOT NULL , `nombre` VARCHAR(25) NOT NULL , `sexo` VARCHAR(1) NOT NULL , `fecha_nac` DATE NOT NULL , `rfc` VARCHAR(30) NOT NULL , `matricula` INT(15) NOT NULL , `cod_pais` INT(5) NOT NULL , `tel` INT(25) NOT NULL , `email` VARCHAR(30) NOT NULL , `calle` VARCHAR(50) NOT NULL , `num_via` VARCHAR(30) NOT NULL , `interior` INT(15) NOT NULL , `colonia` VARCHAR(50) NOT NULL , `cod_post` INT(10) NOT NULL , `pais` VARCHAR(30) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;