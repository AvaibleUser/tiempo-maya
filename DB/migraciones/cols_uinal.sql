USE tiempo_maya;

--
-- Base de datos: `tiempo_maya`
--

--
-- Cambios Uinal
--
ALTER TABLE `uinal`
    ADD COLUMN `ruta` VARCHAR(100) NULL AFTER `iddesk`;

UPDATE `uinal`
SET `ruta`='src/imagenesWinales/19.png'
WHERE `idweb` = '0';
UPDATE `uinal`
SET `ruta`='src/imagenesWinales/1.png'
WHERE `idweb` = '1';
UPDATE `uinal`
SET `ruta`='src/imagenesWinales/2.png'
WHERE `idweb` = '2';
UPDATE `uinal`
SET `ruta`='src/imagenesWinales/3.png'
WHERE `idweb` = '3';
UPDATE `uinal`
SET `ruta`='src/imagenesWinales/4.png'
WHERE `idweb` = '4';
UPDATE `uinal`
SET `ruta`='src/imagenesWinales/5.png'
WHERE `idweb` = '5';
UPDATE `uinal`
SET `ruta`='src/imagenesWinales/6.png'
WHERE `idweb` = '6';
UPDATE `uinal`
SET `ruta`='src/imagenesWinales/7.png'
WHERE `idweb` = '7';
UPDATE `uinal`
SET `ruta`='src/imagenesWinales/8.png'
WHERE `idweb` = '8';
UPDATE `uinal`
SET `ruta`='src/imagenesWinales/9.png'
WHERE `idweb` = '9';
UPDATE `uinal`
SET `ruta`='src/imagenesWinales/10.png'
WHERE `idweb` = '10';
UPDATE `uinal`
SET `ruta`='src/imagenesWinales/11.png'
WHERE `idweb` = '11';
UPDATE `uinal`
SET `ruta`='src/imagenesWinales/12.png'
WHERE `idweb` = '12';
UPDATE `uinal`
SET `ruta`='src/imagenesWinales/13.png'
WHERE `idweb` = '13';
UPDATE `uinal`
SET `ruta`='src/imagenesWinales/14.png'
WHERE `idweb` = '14';
UPDATE `uinal`
SET `ruta`='src/imagenesWinales/15.png'
WHERE `idweb` = '15';
UPDATE `uinal`
SET `ruta`='src/imagenesWinales/16.png'
WHERE `idweb` = '16';
UPDATE `uinal`
SET `ruta`='src/imagenesWinales/17.png'
WHERE `idweb` = '17';
UPDATE `uinal`
SET `ruta`='src/imagenesWinales/18.png'
WHERE `idweb` = '18';
