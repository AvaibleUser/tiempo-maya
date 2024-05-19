<?php
$conn = include $_SERVER['DOCUMENT_ROOT'] . "/conexion/conexion.php";

date_default_timezone_set('US/Central');
if (isset($_GET['fecha'])) {
  $fecha_consultar = $_GET['fecha'];
} else {
  $fecha_consultar = date("Y-m-d");
}

$cholquij = include $_SERVER['DOCUMENT_ROOT'] . '/backend/buscar/conseguir_cholquij.php';
$haab = include $_SERVER['DOCUMENT_ROOT'] . '/backend/buscar/conseguir_haab.php';
$cuenta_larga = include $_SERVER['DOCUMENT_ROOT'] . '/backend/buscar/conseguir_fecha_cuenta_larga.php';
$num_energia = intval($cholquij[0]);
$nombre_energia = strval($cholquij[1]);
$nombre_nahual = strval($cholquij[3]);
$num_kin = intval($haab[0]);
$nombre_kin = strval($haab[1]);
$nombre_uinal = strval($haab[3]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Tiempo Maya</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/blocks/bloquesCss.html" ?>
  <link rel="stylesheet" href="/css/estilo.css?v=<?= rand(); ?>" />
  <link rel="stylesheet" href="/css/estiloAdmin.css?v=<?= rand(); ?>" />
  <link rel="stylesheet" href="/css/index.css?v=<?= rand(); ?>" />
</head>

<body>
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/NavBar.php"; ?>

  <div class="snap-scroll">
    <section id="inicio">
      <div id="inicioContainer" class="inicio-container">
        <h1>Tiempo Maya</h1>
        <img alt="" src="/img/logonew2.png" width=185" height="160">
        <h5 class="fecha">
          Calendario Haab:
          <a class="fecha-img" href="models/paginaModeloElemento.php?elemento=kin#<?= $nombre_kin; ?>">
            <img src="/img/kin/<?= $nombre_kin; ?>_2.png" alt="Error al intentar mostrar al kin <?= $nombre_kin; ?>" class="imagen-elemento img-white">
            <span><?= $nombre_kin; ?> / <?= $num_kin; ?></span>
          </a>

          <a class="fecha-img" href="models/paginaModeloElemento.php?elemento=uinal#<?= $nombre_uinal; ?>">
            <img class="img-white" src="img/uinal/<?= $nombre_uinal; ?>.png" alt="Error al intentar mostrar al uinal <?= $nombre_uinal; ?>" class="imagen-elemento">
            <span><?= $nombre_uinal; ?></span>
          </a>
        </h5>

        <h5 class="fecha">
          Calendario Cholquij:
          <a class="fecha-img" href="models/paginaModeloElemento.php?elemento=energia#<?= $nombre_energia; ?>">
            <img class="img-white" src="img/energia/<?= $nombre_energia; ?>.png" alt="Error al intentar mostrar al energia <?= $nombre_energia; ?>" class="imagen-elemento">
            <span><?= $nombre_energia; ?> / <?= $num_energia; ?></span>
          </a>

          <a class="fecha-img" href="models/paginaModeloElemento.php?elemento=nahual#<?= $nombre_nahual; ?>">
            <img src="img/nahual/<?= $nombre_nahual; ?>.png" alt="Error al intentar mostrar al nahual <?= $nombre_nahual; ?>" class="imagen-elemento">
            <span><?= $nombre_nahual; ?></span>
          </a>
        </h5>
        <h5 class="fecha">Cuenta Larga: <?= $cuenta_larga; ?></h5>
        <label style="color: whitesmoke;"><?= $fecha_consultar; ?></label>
      </div>
    </section>

    <section id="information">
      <div class="container">
        <div class="row about-container">
          <div class="section-header">
            <h3 class="section-title">Acerca de</h3><br>
            <p>La cultura maya se refiere a una civilización mesoamericana que destacó a lo largo de más de dos
              milenios en numerosos aspectos socioculturales como su escritura jeroglífica, uno de los pocos
              sistemas de escritura plenamente desarrollados del continente americano precolombino, su arte, la
              arquitectura, su mitología y sus notables sistemas de numeración, así como en astronomía y
              matemáticas. Se desarrolló en el sureste de México (en los estados de Yucatán, Campeche,
              Quintana Roo, Chiapas y Tabasco), prácticamente toda Guatemala y también en Belice, la parte
              occidental de Honduras y en El Salvador, abarcando más de 300,000 km. Esta aplicación permite
              difundir algunos de los conocimientos de la cultura Maya, como por ejemplo: los diferentes calendarios
              Mayas, el conteo del tiempo, los Nahuales y energías. </p>
            <p>Este proyecto tiene como fin despertar el
              interés acerca de la cultura maya y las herramientas que nos brindan nos ayudan a tener una mejor
              interacción con el usuario, así como puede llegar hacer un canal de comunicación y construcción del
              conocimiento con otros interesados. </p>
            <img alt="" src="./img/logonew3.png" width="185" height="160">
            <a href="https://srlabs.a2hosted.com/rs-humhub/index.php?r=wiki%2Fpage%2Fview&title=Proyecto+Tiempo+Maya&cguid=03ab5d70-702f-4844-a654-5f47fd6a1f61">
              <img alt="" src="./img/srlabs.png" width="400" height="160">
            </a>
            <img alt="" src="./img/logonew3.png" width="185" height="160">
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/blocks/bloquesJs1.html" ?>

</body>

</html>