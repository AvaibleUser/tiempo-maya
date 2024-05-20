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

<section id="cuenta-larga">
    <div class="container">
        <div class="section-header">
            <h3 class="section-title">Cuenta Larga Didactica</h3>
        </div>

        <form>
            <div class="mb-1">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" name="fecha" id="cuenta-larga-picker" value="<?= $fecha_consultar ?? ''; ?>">
            </div>
        </form>

        <div id="change-cuenta-larga" class="cuenta-larga">
            <div class="introductorio">
                <span class="rigth">Glifo Introductorio</span>
                <img class="img-white" src="/img/cuenta-larga/introductorio.png" alt="Error al intentar mostrar el glifo introductorio">
            </div>

            <div>
                <div class="baktun">
                    <span class="left">
                        <?= $cl_baktun; ?> baktun
                        <br>
                        <?= number_format($cl_baktun * 144_000); ?> dias
                    </span>
                    <img class="img-white rot-left" src="/img/numeros/<?= $cl_baktun; ?>.png" alt="Error al intentar mostrar el numero de baktun">
                    <img class="img-white" src="/img/cuenta-larga/baktun.png" alt="Error al intentar mostrar el glifo baktun">
                </div>

                <div class="katun">
                    <span class="rigth">
                        <?= $cl_katun; ?> katun
                        <br>
                        <?= number_format($cl_katun * 7_200); ?> dias
                    </span>
                    <img class="img-white rot-left" src="/img/numeros/<?= $cl_katun; ?>.png" alt="Error al intentar mostrar el numero de katun">
                    <img class="img-white" src="/img/cuenta-larga/katun.png" alt="Error al intentar mostrar el glifo katun">
                </div>
            </div>

            <div>
                <div class="tun">
                    <span class="left">
                        <?= $cl_tun; ?> tun
                        <br>
                        <?= number_format($cl_tun * 360); ?> dias
                    </span>
                    <img class="img-white rot-left" src="/img/numeros/<?= $cl_tun; ?>.png" alt="Error al intentar mostrar el numero de tun">
                    <img class="img-white" src="/img/cuenta-larga/tun.png" alt="Error al intentar mostrar el glifo tun">
                </div>

                <div class="uinal">
                    <span class="rigth">
                        <?= $cl_uinal; ?> uinal
                        <br>
                        <?= number_format($cl_uinal * 20); ?> dias
                    </span>
                    <img class="img-white rot-left" src="/img/numeros/<?= $cl_uinal; ?>.png" alt="Error al intentar mostrar el numero de uinal">
                    <img class="img-white" src="/img/cuenta-larga/uinal.png" alt="Error al intentar mostrar el glifo uinal">
                </div>
            </div>

            <div>
                <div class="kin">
                    <span class="left">
                        <?= $cl_kin; ?> tun
                        <br>
                        <?= $cl_kin; ?> dias
                    </span>
                    <img class="img-white rot-left" src="/img/numeros/<?= $cl_kin; ?>.png" alt="Error al intentar mostrar el numero de tun">
                    <img class="img-white" src="/img/cuenta-larga/tun.png" alt="Error al intentar mostrar el glifo tun">
                </div>

                <div class="cholquij">
                    <span class="rigth">
                        Cholq'ij
                        <br>
                        <?= $num_energia; ?> <?= $nombre_nahual; ?>
                    </span>

                    <a href="/models/paginaModeloElemento.php?elemento=energia#<?= $nombre_energia; ?>">
                        <img class="img-white rot-left" src="/img/numeros/<?= $num_energia; ?>.png" alt="Error al intentar mostrar al energia <?= $nombre_energia; ?>">
                    </a>

                    <a href="/models/paginaModeloElemento.php?elemento=nahual#<?= $nombre_nahual; ?>">
                        <img src="/img/nahual/<?= $nombre_nahual; ?>.png" alt="Error al intentar mostrar al nahual <?= $nombre_nahual; ?>">
                    </a>
                </div>
            </div>

            <div>
                <div class="haab">
                    <span class="left">
                        Haab
                        <br>
                        <?= $num_kin; ?> <?= $nombre_uinal; ?>
                    </span>

                    <a href="/models/paginaModeloElemento.php?elemento=kin#<?= $nombre_kin; ?>">
                        <img class="img-white rot-left" src="/img/numeros/<?= $num_kin; ?>.png" alt="Error al intentar mostrar al kin <?= $nombre_kin; ?>">
                    </a>

                    <a href="/models/paginaModeloElemento.php?elemento=uinal#<?= $nombre_uinal; ?>">
                        <img class="img-white" src="/img/uinal/<?= $nombre_uinal; ?>.png" alt="Error al intentar mostrar al uinal <?= $nombre_uinal; ?>">
                    </a>
                </div>

                <div class="senor-noche">
                    <a href="/models/paginaModeloElemento.php?elemento=Señor de la Noche#G<?= $nombre_nahual; ?>">
                        <img class="img-white" src="/img/señor_de_la_noche/G<?= $senor_noche; ?>.png" alt="Error al intentar mostrar el señor de la lunga G<?= $senor_noche; ?>">
                    </a>

                    <div>
                        <span class="left">
                            Señor de la Noche
                            <br>
                            G<?= $cl_senor_noche; ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>