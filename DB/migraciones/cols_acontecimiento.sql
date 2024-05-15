USE tiempo_maya;

--
-- Base de datos: `tiempo_maya`
--

--
-- Cambios
--
ALTER TABLE `acontecimiento`
    ADD COLUMN `descripcion` VARCHAR(45) NULL AFTER `categoria`;

