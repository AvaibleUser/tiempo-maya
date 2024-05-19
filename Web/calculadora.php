<?php session_start(); ?>
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
    <title>Tiempo Maya - Calculadora de Mayas</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/blocks/bloquesCss.html" ?>
    <link rel="stylesheet" href="/css/estilo.css?v=<?= rand(); ?>" />
    <link rel="stylesheet" href="/css/calculadora.css?v=<?= rand(); ?>" />
    <link rel="stylesheet" href="/css/index.css?v=<?= rand(); ?>" />
</head>

<body>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/NavBar.php" ?>

    <div class="snap-scroll">
        <section id="inicio">
            <div id="inicioContainer" class="inicio-container">

                <div id='formulario'>
                    <h1>Calculadora</h1>
                    <form action="#" method="GET">
                        <div class="mb-1">
                            <label for="fecha" class="form-label">Fecha</label>
                            <input type="date" class="form-control" name="fecha" id="fecha" value="<?= $fecha_consultar ?? ''; ?>">
                        </div>
                        <button type="submit" class="btn btn-get-started"><i class="far fa-clock"></i> Calcular</button>
                    </form>

                    <div id="tabla">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Calendario</th>
                                    <th scope="col" style="width: 60%;">Fecha</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Calendario Haab</th>
                                    <td class="flex">
                                        <a class="fecha-img" href="models/paginaModeloElemento.php?elemento=kin#<?= $nombre_kin; ?>">
                                            <img src="/img/kin/<?= $nombre_kin; ?>_2.png" alt="Error al intentar mostrar al kin <?= $nombre_kin; ?>" class="imagen-elemento img-white">
                                            <span><?= $nombre_kin; ?> / <?= $num_kin; ?></span>
                                        </a>

                                        <a class="fecha-img" href="models/paginaModeloElemento.php?elemento=uinal#<?= $nombre_uinal; ?>">
                                            <img class="img-white" src="img/uinal/<?= $nombre_uinal; ?>.png" alt="Error al intentar mostrar al uinal <?= $nombre_uinal; ?>" class="imagen-elemento">
                                            <span><?= $nombre_uinal; ?></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Calendario Cholquij</th>
                                    <td class="flex">
                                        <a class="fecha-img" href="models/paginaModeloElemento.php?elemento=energia#<?= $nombre_energia; ?>">
                                            <img class="img-white" src="img/energia/<?= $nombre_energia; ?>.png" alt="Error al intentar mostrar al energia <?= $nombre_energia; ?>" class="imagen-elemento">
                                            <span><?= $nombre_energia; ?> / <?= $num_energia; ?></span>
                                        </a>

                                        <a class="fecha-img" href="models/paginaModeloElemento.php?elemento=nahual#<?= $nombre_nahual; ?>">
                                            <img src="img/nahual/<?= $nombre_nahual; ?>.png" alt="Error al intentar mostrar al nahual <?= $nombre_nahual; ?>" class="imagen-elemento">
                                            <span><?= $nombre_nahual; ?></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Cuenta Larga</th>
                                    <td><?= $cuenta_larga; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </section>
    </div>


    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/blocks/bloquesJs1.html" ?>

</body>

</html>