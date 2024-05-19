<?php

use function PHPSTORM_META\type;

session_start(); ?>
<?php

$conn = include $_SERVER['DOCUMENT_ROOT'] . '/conexion/conexion.php';
$tabla = $_GET['elemento'];
$table = strtolower($tabla);
$datos = $conn->query("SELECT nombre,significado,htmlCodigo FROM tiempo_maya." . $table . ";");
$elementos = $datos;
$informacion = $conn->query("SELECT htmlCodigo FROM tiempo_maya.pagina WHERE nombre='" . $tabla . "';");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tiempo Maya - <?= $tabla; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/blocks/bloquesCss.html" ?>
    <link rel="stylesheet" href="/css/estilo.css?v=<?= rand(); ?>" />
    <link rel="stylesheet" href="/css/paginaModelo.css?v=<?= rand(); ?>" />
    <link rel="stylesheet" href="/css/index.css?v=<?= rand(); ?>" />
</head>

<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/NavBar.php" ?>

    <div class="snap-scroll">
        <section id="inicio">
            <div id="inicioContainer" class="inicio-container">
                <h1><?= $tabla; ?></h1>
                <img class="imagenElemento3" alt="" src="/img/logonew3.png">
                <img class="imagenElemento2" alt="" src="/img/flecha.png">
            </div>
        </section>

        <section id="information">
            <div class="container">
                <div class="row about-container">
                    <div class="section-header pb-3">
                        <h3 class="section-title">INFORMACION</h3>
                    </div>
                    <?php
                    foreach ($informacion as $info) {
                        echo $info['htmlCodigo'];
                    }
                    ?>
                </div>
            </div>
            <hr>
        </section>

        <section id="elementos">
            <div class="container">
                <div class="row about-container">
                    <div class="section-header">
                        <h3 class="section-title">Elementos</h3>
                    </div>
                    <?php
                    foreach ($datos as $dato) {
                        $img_path = "/img/$table/" . $dato['nombre'];
                        $img_class = in_array($table, array("uinal", "energia")) ? "img-white" : "";
                        $img_sec_class = $tabla == "kin"  ? "img-white" : "";
                    ?>
                        <div class="center-snap">
                            <span id="<?= $dato['nombre']; ?>"></span>
                            <h4><?= $dato['nombre']; ?></h4>
                            <p>
                                <img class="imagenElemento <?= $img_class ?>" src="<?= $img_path; ?>.png" alt="No se puede mostrar la imagen.">
                                <?php
                                if (file_exists($_SERVER['DOCUMENT_ROOT'] . $img_path . "_2.png")) {
                                ?>
                                    <img class="imagenElemento <?= $img_sec_class ?>" src="<?= $img_path; ?>_2.png" alt="No se puede mostrar la imagen.">
                                <?php
                                }
                                ?>
                            </p>
                            <h5>Significado</h5>
                            <p><?= $dato['significado']; ?></p>
                            <p><?= $dato['htmlCodigo']; ?></p>
                            <hr>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
    </div>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/blocks/bloquesJs.html" ?>

</body>

</html>