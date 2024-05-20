<?php session_start(); ?>
<?php

$conn = include $_SERVER['DOCUMENT_ROOT'] . '/conexion/conexion.php';
$pagina = $_GET['pagina'];
$informacion = $conn->query("SELECT htmlCodigo,seccion,nombre FROM tiempo_maya.pagina WHERE categoria='" . $pagina . "' order by orden;");
$secciones = $conn->query("SELECT seccion FROM tiempo_maya.pagina WHERE categoria='" . $pagina . "' group by seccion  order by orden;");
$elementos = $conn->query("SELECT nombre FROM tiempo_maya.pagina WHERE categoria='" . $pagina . "' AND nombre!='Informacion' AND seccion!='Informacion' order by orden;");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tiempo Maya - <?= $pagina; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/blocks/bloquesCss.html" ?>
    <link rel="stylesheet" href="/css/estilo.css?v=<?= (rand()); ?>" />
    <link rel="stylesheet" href="/css/paginaModelo.css?v=<?= (rand()); ?>" />
    <link rel="stylesheet" href="/css/index.css?v=<?= rand(); ?>" />
</head>

<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/NavBar.php" ?>

    <div class="snap-scroll">
        <section id="inicio">
            <div id="inicioContainer" class="inicio-container">
                <h1><?= $pagina; ?></h1>
                <img class="imagenElemento3" alt="" src="/img/logonew3.png">
                <img class="imagenElemento2" alt="" src="/img/flecha.png">
            </div>
        </section>

        <?php
        foreach ($secciones as $seccion) {
        ?>
            <section id="<?= $seccion['seccion']; ?>">
                <div class='container'>
                    <div class='section-header'>
                        <h3 class='section-title'><?= $seccion['seccion']; ?></h3>
                    </div>

                    <?php
                    foreach ($informacion as $info) {
                        if ($seccion['seccion'] == $info['seccion']) {
                    ?>
                            <?php
                            if ($info['seccion'] != "Informacion") {
                            ?>
                                <h2>
                                    <a href="/models/paginaModeloElemento.php?elemento=<?= $info['nombre']; ?>">
                                        <?= $info['nombre']; ?>
                                    </a>
                                </h2>
                            <?php
                            }
                            ?>
                            <hr>
                            <?= $info['htmlCodigo']; ?>

                            <?php
                            foreach ($elementos as $elemento) {
                                if ($elemento['nombre'] != 'Uayeb' && $elemento['nombre'] == $info['nombre']) {
                                    $tabla = str_replace(" ", "_", strtolower($elemento['nombre']));
                                    $elementosEl = $conn->query("SELECT nombre FROM tiempo_maya." . $tabla . ";");
                                    echo "<ul>";
                                    foreach ($elementosEl as $el) {
                                        if ($el['nombre'] == "Informacion") {
                            ?>
                                            <li>
                                                <a href="#"><?= $el['nombre']; ?></a>
                                            </li>
                                        <?php
                                        } else {
                                        ?>
                                            <li>
                                                <a href="/models/paginaModeloElemento.php?elemento=<?= $info['nombre']; ?>#<?= $el['nombre']; ?>">
                                                    <?= $el['nombre'] ?>
                                                </a>
                                            </li>
                            <?php
                                        }
                                    }
                                    echo "</ul>";
                                }
                            }
                            ?>
                    <?php
                        }
                    }
                    ?>
                </div>
            </section>
        <?php
        }
        ?>

        <?php
        if ($pagina === "Rueda Calendarica") {
            include_once $_SERVER['DOCUMENT_ROOT'] . "/models/ruedaCalendarica.php";
        } else if ($pagina === "Cuenta Larga") {
            include_once $_SERVER['DOCUMENT_ROOT'] . "/models/cuenta-larga.php";
        }
        ?>

    </div>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/blocks/bloquesJs.html" ?>

</body>

</html>