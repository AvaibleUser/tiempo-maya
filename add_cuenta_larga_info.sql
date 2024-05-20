USE `tiempo_maya`;

--
-- Volcado de datos nuevos para la tabla `categoria`
--

INSERT INTO `categoria` (`nombre`)
VALUES ('Cuenta Larga'),
       ('g1'),
       ('g2'),
       ('g3'),
       ('g4'),
       ('g5'),
       ('g6'),
       ('g7'),
       ('g8'),
       ('g9');

--
-- Volcado de datos nuevos para la tabla `pagina`
--

INSERT INTO `pagina` (`orden`, `nombre`, `categoria`, `seccion`, `htmlCodigo`)
VALUES (1, 'Informacion', 'Cuenta Larga', 'Informacion',
        '<p>Los antiguos mayas tenían una fascinación con los ciclos del tiempo. Los calendarios mayas más conocidos son el Haab y el Tzolk’in. Además de éstos, los mayas también desarrollaron el calendario de Cuenta Larga para dar fecha cronológica a eventos mitológicos e históricos. El calendario de Cuenta Larga incorpora ambos calendarios, el Haab y el Tzolk’in, entrelazados en un ciclo de 52 años. El ciclo de 13 baktún del calendario maya de Cuenta Larga dura 1.872.000 días o 5.125,366 años tropicales. Este es uno de los ciclos más largos que se encuentran en el sistema de calendario maya. Este ciclo de 13 baktún termina en el solsticio de invierno, el 21 de diciembre de 2012.</p><p>La cuenta larga se forma por medio de:<table class="table text-white m-2"><thead class="thead-light"><tr><th>Nombre</th><th>NÚMERO DE DÍAS</th><th>Equivalencia</td></tr></thead><tbody><tr><td>   Kin</td><td>1</td><td>&nbsp;</td></tr><tr><td>Uinal</td><td>20</td><td>20 Kin</td></tr><tr><td>Tun</td><td>360</td><td>18 Uinal</td></tr><tr><td>Katún</td><td>7,200</td><td>20 Tun</td></tr><tr><td>Baktún</td><td>144,000</td><td>20 Katún</td></tr></tbody></table></p>'),
       (0, 'Historia', 'Cuenta Larga', 'Informacion',
        '<p>En sus orígenes, la cuenta larga, creada por la cultura epi-olmeca, simplemente indicaba un conjunto de cinco coeficientes para establecer el número de días transcurridos desde una fecha inicial determinada, denominada comúnmente “Fecha Era”, situada hacia el 13 de agosto de 3114 a. C. El primero de dichos coeficientes indicaba el número de días de la fecha; el segundo indicaba el número de meses, cada uno de 20 días; el tercer coeficiente indicaba el número de años, compuestos a su vez por 18 meses; el cuarto coeficiente indicaba el número de veintenas de años; y el quinto coe- ficiente indicaba el número de veintenas de dichos grupos de veinte años, es decir, conjuntos de cuatrocientos años. Este calendario pasó posteriormente a las culturas del Pacífico guatemalteco para, más tarde, introducirse en el área maya.</p><p>Es así como los mayas, con el fin de poder llevar la cuenta de sus días, adoptan el sistema de cuenta larga empleado por las culturas mixe-zoqueanas. Ya en el área maya, los coeficientes de la cuenta larga adquieren una denominación autóctona, siendo k’in o kin el nombre asignado para los días, winik, winal o uinal para los meses, haab’ o tun para los años, winikhaab’ o katun para las veintenas de años, y pik, pih o baktun para los periodos de 400 años.</p><p>Posteriormente, los mayas adaptaron dicho calendario a su entorno cultural, si bien respetando los principios básicos de su funcionamiento para registrar el transcurso del tiempo. Las lenguas mayas, al carecer de especificaciones de tiempo para los verbos, –pues solamente indican la voz y el aspecto de las acciones indicadas por éstos–, necesitan de algún mecanismo que permita fijar el momento en que los eventos descritos en los monumentos ocurren. Es posible que debido a esta carencia, se le diera tanta preponderancia al uso de la cuenta larga en la mayor parte de las inscripciones del periodo clásico, pues era el medio a través del cual se podían anclar los eventos en el tiempo. Es así como, una vez incorporada por la cultura maya, la cuenta larga sufre algunas alteraciones y modificaciones.</p><p>Para mas informacion visitar <a href="https://www.researchgate.net/publication/323616585_El_tiempo_vuela_el_uso_de_aves_y_otros_animales_para_representar_las_unidades_de_tiempo_de_la_cuenta_larga_maya">documento original</a></p>'),
       (2, 'Señor de la Noche', 'Cuenta Larga', 'Elementos',
        '<p>Las noches mayas eran regidas por nueve “Señores de la Noche” Cada uno de estos 9 dioses regía una noche y entonces la siguiente noche le correspondía al próximo Señor de la Noche, quien se “adueñaba” de ella. En el calendario maya, esto era un ciclo de 9 noches que no tenía fin.</p><p>Todos los 9 dioses tenían su propio glifo. Cuando en las inscripciones había una fecha importante, nos decían quien era el reinante Señor de la Noche de esa fecha. Por lo general, simplemente llamamos a estos Señores G1, G2, G3, hasta G9, porque se desconocen sus nombres.</p><p>Todos los tunes, k’atunes y bak’tunes, desde la creación, terminan con G9, es decir el noveno Señor de la Noche. G9 es el anciano dios de la oscuridad y del “sol de la noche”, y por eso es un digno final para los períodos de tiempo (parecido a nuestro “Padre Tiempo” que remata el fin de todos los años).</p><p>Para mas informacion visitar <a href="http://www.famsi.org/spanish/research/pitts/GlifosMayasLibro2Sect2.pdf">documento original</a></p><p>En las estelas, el glifo que aparece a continuación de estos describía a los Señores de la Noche de alguna manera, pero nadie sabe traducirlos. Se llama “Glifo F” y normalmente aparecía en las estelas después del glifo del Señor de la Noche.</p><p>Para mas visualizar los glifos F visitar esta <a href="https://web.archive.org/web/20060222011801/http://www.pauahtun.org/Calendar/gglyph.html">pagina</a></p><p>O una postura diferente acerca de estos glifos en este <a href="https://www.wayeb.org/notes/wayeb_notes0022.pdf">documento</a></p>');

--
-- Estructura de tabla para la tabla `señor_de_la_noche`
--

CREATE TABLE IF NOT EXISTS `señor_de_la_noche`
(
    `id`        int(11)      NOT NULL,
    `nombre`    varchar(25)  NOT NULL,
    `categoria` varchar(100) NOT NULL,
    `imagen`    varchar(100) DEFAULT NULL,
    PRIMARY KEY (`id`),
    KEY `fk_uinal_categoria1_idx` (`categoria`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `señor_de_la_noche`
--

INSERT INTO `señor_de_la_noche` (id, nombre, categoria, imagen)
VALUES (1, 'G1', 'g1', '/'),
       (2, 'G2', 'g2', '/'),
       (3, 'G3', 'g3', '/'),
       (4, 'G4', 'g4', '/'),
       (5, 'G5', 'g5', '/'),
       (6, 'G6', 'g6', '/'),
       (7, 'G7', 'g7', '/'),
       (8, 'G8', 'g8', '/'),
       (9, 'G9', 'g9', '/');
