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
        <br>

        <div id="calculadora-res">
          <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/calculadora.php"; ?>
        </div>

        <input class="btn btn-outline-light" type="date" id="calculadora-picker" value="<?= $fecha_consultar; ?>">
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