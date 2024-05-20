<?php
$conn = include $_SERVER['DOCUMENT_ROOT'] . "/conexion/conexion.php";

date_default_timezone_set('US/Central');
if (isset($_GET['fecha'])) {
    $fecha_consultar = $_GET['fecha'];
} else {
    $fecha_consultar = date("Y-m-d");
}

$cruz = include $_SERVER['DOCUMENT_ROOT'] . '/backend/buscar/conseguir_cruz_maya.php';

$arriba = $cruz["arriba"];
$abajo = $cruz["abajo"];
$central = $cruz["central"];
$izq = $cruz["izq"];
$der = $cruz["der"];

?>

<section id="cruz-maya">
    <div class="container">
        <div class="section-header">
            <h3 class="section-title">Cruz Maya Didactica</h3>
        </div>

        <form>
            <div class="mb-1">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" name="fecha" id="cruz-picker" value="<?= $fecha_consultar ?? ''; ?>">
            </div>
        </form>

        <div class="cruz-maya-wrapper">
            <div id="change-cruz" class="cruz-maya">
                <div>
                    <span>Concepcion</span>
                    <img src="/img/nahual/<?= $arriba; ?>.png" alt="Error al intentar mostrar el nahual <?= $arriba; ?>">
                    <span><?= $arriba; ?></span>
                </div>

                <div class="middle">
                    <div>
                        <span>Mano Derecha</span>
                        <img src="/img/nahual/<?= $der; ?>.png" alt="Error al intentar mostrar el nahual <?= $der; ?>">
                        <span><?= $der; ?></span>
                    </div>

                    <div>
                        <span>Nahual del dia</span>
                        <img src="/img/nahual/<?= $central; ?>.png" alt="Error al intentar mostrar el nahual <?= $central; ?>">
                        <span><?= $central; ?></span>
                    </div>

                    <div>
                        <span>Mano Izquierda</span>
                        <img src="/img/nahual/<?= $izq; ?>.png" alt="Error al intentar mostrar el nahual <?= $izq; ?>">
                        <span><?= $izq; ?></span>
                    </div>
                </div>

                <div>
                    <span>Destino</span>
                    <img src="/img/nahual/<?= $abajo; ?>.png" alt="Error al intentar mostrar el nahual <?= $abajo; ?>">
                    <span><?= $abajo; ?></span>
                </div>
            </div>
        </div>
    </div>
</section>