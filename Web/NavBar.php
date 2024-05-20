<?php

$conn = include $_SERVER['DOCUMENT_ROOT'] . '/conexion/conexion.php';
$kinesNav = $conn->query("SELECT nombre FROM tiempo_maya.kin order by nombre;");
$uinalesNav = $conn->query("SELECT nombre FROM tiempo_maya.uinal order by nombre;");
$nahualesNav = $conn->query("SELECT nombre FROM tiempo_maya.nahual order by nombre;");
$energiasNav = $conn->query("SELECT nombre FROM tiempo_maya.energia order by id;");
$senoresNocheNav = $conn->query("SELECT nombre FROM tiempo_maya.señor_de_la_noche order by id;");
// $periodosNav = $conn->query("SELECT nombre FROM tiempo_maya.periodo order by orden ;");

?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/mensaje.php"; ?>

<video id="bg-video" src="/img/background.mp4" autoplay muted loop poster></video>

<a id="logo" href="/index.php">
  <div>
    <img alt="" src="/img/logonew.gif">
  </div>
</a>

<header id="header">
  <div class="container">
    <nav class="navbar navbar-expand-lg" id="nav-menu-container">
      <div class="container-fluid">
        <button id="rellenar" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="fas fa-bars text-white"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="navbar-nav nav-menu">
            <li>
              <a class="nav-link" href="/models/paginaModelo.php?pagina=Calendario Haab">Calendario Haab &nbsp;&nbsp;&nbsp;&nbsp; </a>
              <button type="button" class="nav-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Calendario Haab
              </button>

              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li>
                  <button type="button" class="nav-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Kin
                  </button>
                  <a class="nav-link" href="/models/paginaModeloElemento.php?elemento=kin" style="font-size: 13px;">Kines </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div>
                      <?php
                      if (is_array($kinesNav) || is_object($kinesNav)) {
                        foreach ($kinesNav as $kin) {
                      ?>
                          <li class="nav-item">
                            <a class="nav-link" href="/models/paginaModeloElemento.php?elemento=kin#<?= $kin['nombre']; ?>">
                              <img class="img-black" src="/img/kin/<?= $kin['nombre']; ?>.png" alt="Error al intentar mostrar al kin <?= $kin['nombre']; ?>">
                              <?= $kin['nombre']; ?>
                            </a>
                          </li>
                      <?php
                        }
                      }
                      ?>
                  </ul>
                </li>
                <li>
                  <button type="button" class="nav-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Uinal
                  </button>
                  <a class="nav-link" href="/models/paginaModeloElemento.php?elemento=uinal" style="font-size: 13px;">Uinales </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div>
                      <?php
                      if (is_array($uinalesNav) || is_object($uinalesNav)) {
                        foreach ($uinalesNav as $uinal) {
                      ?>
                          <li class="nav-item">
                            <a class="nav-link" href="/models/paginaModeloElemento.php?elemento=uinal#<?= $uinal['nombre']; ?>">
                              <img class="img-black" src="/img/uinal/<?= $uinal['nombre']; ?>.png" alt="Error al intentar mostrar al uinal <?= $uinal['nombre']; ?>">
                              <?= $uinal['nombre']; ?>
                            </a>
                          </li>
                      <?php
                        }
                      }
                      ?>
                  </ul>
                </li>
              </ul>
            </li>

            <li>
              <a class="nav-link" href="/models/paginaModelo.php?pagina=Calendario Cholquij">Calendario Cholq'ij &nbsp;&nbsp;&nbsp;&nbsp; </a>
              <button type="button" class="nav-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Calendario Cholq'ij
              </button>

              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li>
                  <button type="button" class="nav-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Nahual
                  </button>
                  <a class="nav-link" href="/models/paginaModeloElemento.php?elemento=nahual" style="font-size: 13px;">Nahuales </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div>
                      <?php
                      if (is_array($nahualesNav) || is_object($nahualesNav)) {
                        foreach ($nahualesNav as $nahual) {
                      ?>
                          <li class="nav-item">
                            <a class="nav-link" href="/models/paginaModeloElemento.php?elemento=nahual#<?= $nahual['nombre']; ?>">
                              <img src="/img/nahual/<?= $nahual['nombre']; ?>.png" alt="Error al intentar mostrar al nahual <?= $nahual['nombre']; ?>">
                              <?= $nahual['nombre']; ?>
                            </a>
                          </li>
                      <?php
                        }
                      }
                      ?>
                    </div>
                  </ul>
                </li>
                <li>
                  <button type="button" class="nav-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Energia
                  </button>
                  <a class="nav-link" href="/models/paginaModeloElemento.php?elemento=energia" style="font-size: 13px;">Energias </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div>
                      <?php
                      if (is_array($energiasNav) || is_object($energiasNav)) {
                        foreach ($energiasNav as $energia) {
                      ?>
                          <li class="nav-item">
                            <a class="nav-link" href="/models/paginaModeloElemento.php?elemento=energia#<?= $energia['nombre']; ?>">
                              <img class="img-black" src="/img/energia/<?= $energia['nombre']; ?>_2.png" alt="Error al intentar mostrar al energia <?= $energia['nombre']; ?>">
                              <?= $energia['nombre']; ?>
                            </a>
                          </li>
                      <?php
                        }
                      }
                      ?>
                    </div>
                  </ul>
                </li>
              </ul>
            </li>

            <li>
              <a class="nav-link" href="/models/paginaModelo.php?pagina=Cuenta Larga">Cuenta Larga &nbsp;&nbsp;&nbsp;&nbsp; </a>
              <button type="button" class="nav-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cuenta Larga
              </button>

              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li>
                  <button type="button" class="nav-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Señor de la Noche
                  </button>
                  <a class="nav-link" href="/models/paginaModeloElemento.php?elemento=Señor de la Noche" style="font-size: 13px;">Señores de la Noche </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div>
                      <?php
                      if (is_array($senoresNocheNav) || is_object($senoresNocheNav)) {
                        foreach ($senoresNocheNav as $senorNoche) {
                      ?>
                          <li class="nav-item">
                            <a class="nav-link" href="/models/paginaModeloElemento.php?elemento=Señor de la Noche#<?= $senorNoche['nombre']; ?>">
                              <img class="img-black" src="/img/señor_de_la_noche/<?= $senorNoche['nombre']; ?>.png" alt="Error al intentar mostrar al señor de la noche <?= $senorNoche['nombre']; ?>">
                              <?= $senorNoche['nombre']; ?>
                            </a>
                          </li>
                      <?php
                        }
                      }
                      ?>
                    </div>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/models/paginaModelo.php?pagina=Rueda Calendarica">Rueda Calendarica</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>


<script type="text/javascript">
  var relleno = false;

  $('#rellenar').on("click", () => {
    if (!relleno) {
      $('#header').addClass('header-fixed1');
      $('#inicioContainer').addClass('iniciofixed');
      relleno = true
    } else {
      relleno = false
      $('#header').removeClass('header-fixed1');
      $('#inicioContainer').removeClass('iniciofixed');
    }
  })
</script>