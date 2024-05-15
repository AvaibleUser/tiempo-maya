USE tiempo_maya;

--
-- Base de datos: `tiempo_maya`
--

--
-- Cambios a la entidad Nahual
--
ALTER TABLE `nahual`
    ADD COLUMN `descripcion`    MEDIUMTEXT   NULL AFTER `categoria`,
    ADD COLUMN `rutaEscritorio` VARCHAR(100) NULL AFTER `descripcion`;

--
-- Actualizacion para la tabla 'nahual'
--

UPDATE `nahual`
SET `descripcion`='Es el Nawal del bienestar económico, la buena fortuna, día propicio para agradecer y pedir el bienestar económico.\nEs la comunicación e intermediación entre Uk´ux Kaj y Uk´ux Ulew, el corazón del cielo y el corazón de la tierra.\nPersonas que construyen su propio bienestar.'
WHERE `idweb` = '0';
UPDATE `nahual`
SET `descripcion`='Es el Nawal de todas las faltas, es el día de los abuelos que ya no están (difuntos).\nEs el día para pedir perdón por las faltas.\nPersonas valientes y de sangre dulce que  fácilmente caen en culpas.'
WHERE `idweb` = '1';
UPDATE `nahual`
SET `descripcion`='Significa idea, sabiduría.\nEs el Nawal de la inteligencia, día dedicado a pedir la sabiduría, el talento, el buen pensamiento.\nEs el Nawal del temblor o sismo.\nPersonas muy creativas e imaginativas.'
WHERE `idweb` = '2';
UPDATE `nahual`
SET `descripcion`='Nawal de la muerte repentina y los sufrimientos.\nDía propicio para curanderos y autoridades,  para cortar males y enfermedades.\nPersonas confrontativas que cortan toda clase de males y problemas.\n'
WHERE `idweb` = '3';
UPDATE `nahual`
SET `descripcion`='Es el Nawal de toda clase de pleitos, es el día de la mujer,  día para curar enfermedades.\nNawal de la piedra de cuarzo y de las semillas de Tz´ité.\nPersonas creativas, defensoras de la mujer.'
WHERE `idweb` = '4';
UPDATE `nahual`
SET `descripcion`='Es el Nawal de sol, día para pedir sabiduría, talento y fortaleza física.\nNawal de las flores, la  música, el deporte,  los cazadores y la agricultura.\nPersonas líderes, selectivas, buscan primero su beneficio.'
WHERE `idweb` = '5';
UPDATE `nahual`
SET `descripcion`='Es el Nawal del mar, ríos y lagos, día para sanar enfermedades de la mente, para agradecer y pedir la lluvia, enfermedades de la mente. El Nawal de todos los lugares donde está el agua.\nNo es el concepto de locura que conocemos comúnmente,  es la capacidad de sentir lo que otros no sienten, por eso dicen que  hablan locuras.\n'
WHERE `idweb` = '6';
UPDATE `nahual`
SET `descripcion`='Es el Nawal del aire y la luna, del espíritu del ser humano. Día para alejar energías malas y enfermedades. Es el viento que limpia nuestra casa y nuestro cuerpo.\nPersonas nobles que se involucran en los problemas de otros fácilmente. Van y vienen de un lugar a otro, como el viento.'
WHERE `idweb` = '7';
UPDATE `nahual`
SET `descripcion`='Es el Nawal de la claridad, día para pedir que salga la luz en todas las cosas.\nEl día de las personas que componen los huesos de los enfermos y de los curanderos con plantas.\nPersonas que cumplen sus compromisos.\n'
WHERE `idweb` = '8';
UPDATE `nahual`
SET `descripcion`='Es el Nawal de las cárceles visibles e invisibles. Es guardador.\nRepresenta la red donde se guarda el  maíz y donde se atrapan los peces. Día para pedir por los que están presos, para enredar y desenredar las cosas.\nPersonas con mucho fuego en su ser.  Manejan energías positivas y negativas'
WHERE `idweb` = '9';
UPDATE `nahual`
SET `descripcion`='Es el Nawal de la creación del hombre y la mujer. Es el dueño de todas las cosas materiales.  Día para pedir solución a toda clase de problemas y necesidades.\nPersonas con un alto sentido de la lealtad.'
WHERE `idweb` = '10';
UPDATE `nahual`
SET `descripcion`='Es el Nawal de toda clase de muertes, día para pedir que se aleje la muerte. Se pide el descanso y  paz de un moribundo. La Muerte no es mala,  es el complemento de la vida, el descanso.\nEs el día para retirar energías negativas en las personas. Personas con habilidad para las artes y oficios.'
WHERE `idweb` = '11';
UPDATE `nahual`
SET `descripcion`='Es el nawal de toda clase de animales cuadrúpedos. Día para pedir fuerza para cargar con nuestras penas.\nNawal de las cuatro esquinas del mundo.\nDía de los Ajqíjab´ o sacerdotes mayas.\nPersonas líderes, dominantes con su pareja, les gusta la fama.'
WHERE `idweb` = '12';
UPDATE `nahual`
SET `descripcion`='Significa semilla, simiente,  conejo. El planeta Venus.\nEs el Nawal de toda clase de semillas animales y vegetales. Día de la fertilidad y las cosechas,  propicio para iniciar cualquier siembra o negocio.\nSignifica los cuatro colores del maíz,  rojo, negro, blanco y amarillo.\nPersonas de mano ¨caliente¨ a quienes todo lo que siembran les florece.'
WHERE `idweb` = '13';
UPDATE `nahual`
SET `descripcion`='Es el Nawal de los cuatro señores del fuego,  Tojil, Awilix, Jakawitz´ y  Nikajtakaj. Día propicio para nivelar o pagar cualquier deuda. Día en que se agradece todo lo que recibimos en nuestra vida,  lo bueno y lo malo.\nPersonas con mucha sensibilidad para las artes y que lloran con'
WHERE `idweb` = '14';
UPDATE `nahual`
SET `descripcion`='Es el Nawal de la justicia, la autoridad material y espiritual, el orden. Día para pedir la solución a los problemas ante los tribunales. Día para  alejar los vicios. Son las personas que hablan por otros.  Los dueños de las leyes. Juzgan a los demás.'
WHERE `idweb` = '15';
UPDATE `nahual`
SET `descripcion`='Es el Nawal de todas las artes, de los tejidos, de los artistas. Es un día propicio para pedir pareja, amarrar o desatar cualquier asunto.\nSon maestros de todas las artes.\n'
WHERE `idweb` = '16';
UPDATE `nahual`
SET `descripcion`='Es el Nawal de todos los caminos y dirigentes. Del sistema nervioso y sanguíneo.\nDía propicio para iniciar cualquier viaje o negocio.\nSon líderes naturales.'
WHERE `idweb` = '17';
UPDATE `nahual`
SET `descripcion`='Es el Nawal de la casa y de los niños, día propicio para el hogar y la salud de los niños.\nNawal de las generaciones tiernas.\nPersonas que no pueden negarse ante otros.'
WHERE `idweb` = '18';
UPDATE `nahual`
SET `descripcion`='Es el Nawal de la naturaleza y los altares mayas, día para pedir fortaleza física y mental.\nEs el Nawal de las siete vergüenzas humanas: orgullo, ambición, envidia, mentira, crimen, ingratitud, ignorancia por pereza.\nPersonas de razonamiento interno a las que les gusta la naturaleza y la soledad.'
WHERE `idweb` = '19';

UPDATE `nahual`
SET `rutaEscritorio`='src/imagenesNahuales/15.jpg'
WHERE `idweb` = '0';
UPDATE `nahual`
SET `rutaEscritorio`='src/imagenesNahuales/16.jpg'
WHERE `idweb` = '1';
UPDATE `nahual`
SET `rutaEscritorio`='src/imagenesNahuales/17.jpg'
WHERE `idweb` = '2';
UPDATE `nahual`
SET `rutaEscritorio`='src/imagenesNahuales/18.jpg'
WHERE `idweb` = '3';
UPDATE `nahual`
SET `rutaEscritorio`='src/imagenesNahuales/19.jpg'
WHERE `idweb` = '4';
UPDATE `nahual`
SET `rutaEscritorio`='src/imagenesNahuales/20.jpg'
WHERE `idweb` = '5';
UPDATE `nahual`
SET `rutaEscritorio`='src/imagenesNahuales/1.jpg'
WHERE `idweb` = '6';
UPDATE `nahual`
SET `rutaEscritorio`='src/imagenesNahuales/2.jpg'
WHERE `idweb` = '7';
UPDATE `nahual`
SET `rutaEscritorio`='src/imagenesNahuales/3.jpg'
WHERE `idweb` = '8';
UPDATE `nahual`
SET `rutaEscritorio`='src/imagenesNahuales/4.jpg'
WHERE `idweb` = '9';
UPDATE `nahual`
SET `rutaEscritorio`='src/imagenesNahuales/5.jpg'
WHERE `idweb` = '10';
UPDATE `nahual`
SET `rutaEscritorio`='src/imagenesNahuales/6.jpg'
WHERE `idweb` = '11';
UPDATE `nahual`
SET `rutaEscritorio`='src/imagenesNahuales/7.jpg'
WHERE `idweb` = '12';
UPDATE `nahual`
SET `rutaEscritorio`='src/imagenesNahuales/8.jpg'
WHERE `idweb` = '13';
UPDATE `nahual`
SET `rutaEscritorio`='src/imagenesNahuales/9.jpg'
WHERE `idweb` = '14';
UPDATE `nahual`
SET `rutaEscritorio`='src/imagenesNahuales/10.jpg'
WHERE `idweb` = '15';
UPDATE `nahual`
SET `rutaEscritorio`='src/imagenesNahuales/11.jpg'
WHERE `idweb` = '16';
UPDATE `nahual`
SET `rutaEscritorio`='src/imagenesNahuales/12.jpg'
WHERE `idweb` = '17';
UPDATE `nahual`
SET `rutaEscritorio`='src/imagenesNahuales/13.jpg'
WHERE `idweb` = '18';
UPDATE `nahual`
SET `rutaEscritorio`='src/imagenesNahuales/14.jpg'
WHERE `idweb` = '19';
