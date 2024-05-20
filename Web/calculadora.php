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

$cl_baktun = $cuenta_larga["baktun"];
$cl_katun = $cuenta_larga["katun"];
$cl_tun = $cuenta_larga["tun"];
$cl_uinal = $cuenta_larga["uinal"];
$cl_kin = $cuenta_larga["kin"];
$cl_senor_noche = $cuenta_larga["senor_noche"];

?>

<h5 class="fecha">
    Calendario Haab:
    <a class="fecha-img" href="/models/paginaModeloElemento.php?elemento=kin#<?= $nombre_kin; ?>">
        <img class="imagen-elemento img-white" src="/img/kin/<?= $nombre_kin; ?>_2.png" alt="Error al intentar mostrar al kin <?= $nombre_kin; ?>">
        <span><?= $nombre_kin; ?> / <?= $num_kin; ?></span>
    </a>

    <a class="fecha-img" href="/models/paginaModeloElemento.php?elemento=uinal#<?= $nombre_uinal; ?>">
        <img class="imagen-elemento img-white" src="/img/uinal/<?= $nombre_uinal; ?>.png" alt="Error al intentar mostrar al uinal <?= $nombre_uinal; ?>">
        <span><?= $nombre_uinal; ?></span>
    </a>
</h5>

<h5 class="fecha">
    Calendario Cholquij:
    <a class="fecha-img" href="/models/paginaModeloElemento.php?elemento=energia#<?= $nombre_energia; ?>">
        <img class="imagen-elemento img-white" src="/img/energia/<?= $nombre_energia; ?>.png" alt="Error al intentar mostrar al energia <?= $nombre_energia; ?>">
        <span><?= $nombre_energia; ?> / <?= $num_energia; ?></span>
    </a>

    <a class="fecha-img" href="/models/paginaModeloElemento.php?elemento=nahual#<?= $nombre_nahual; ?>">
        <img class="imagen-elemento" src="/img/nahual/<?= $nombre_nahual; ?>.png" alt="Error al intentar mostrar al nahual <?= $nombre_nahual; ?>">
        <span><?= $nombre_nahual; ?></span>
    </a>
</h5>

<h5 class="fecha">
    Señor de la noche:
    <a class="fecha-img" href="/models/paginaModeloElemento.php?elemento=Señor de la Noche#G<?= $nombre_nahual; ?>">
        <img class="imagen-elemento img-white" src="/img/señor_de_la_noche/G<?= $cl_senor_noche; ?>.png" alt="Error al intentar mostrar al señor G<?= $cl_senor_noche; ?>">
        <span>G<?= $cl_senor_noche; ?></span>
    </a>
</h5>

<h5 class="fecha">Cuenta Larga:
    <a href="/models/paginaModelo.php?pagina=Cuenta Larga">
        <?= join(".", array(
            $cl_baktun,
            $cl_katun,
            $cl_tun,
            $cl_uinal,
            $cl_kin
        ));
        ?>
    </a>
</h5>