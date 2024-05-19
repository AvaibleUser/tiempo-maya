<?php

$conn = include $_SERVER['DOCUMENT_ROOT'] . '/conexion/conexion.php';
$nahuales = $conn->query("SELECT nombre FROM tiempo_maya.nahual ORDER BY iddesk;");
$energias = $conn->query("SELECT nombre FROM tiempo_maya.energia ORDER BY id;");
$kines = $conn->query("SELECT nombre FROM tiempo_maya.kin ORDER BY iddesk;");
$uinales = $conn->query("SELECT nombre FROM tiempo_maya.uinal ORDER BY iddesk;");

date_default_timezone_set('US/Central');
$fecha_consultar = date("Y-m-d");

?>

<section id="Informacion">
    <div class="container">
        <div class="section-header">
            <h3 class="section-title">Calendario Didactico</h3>
        </div>

        <form class="container">
            <div class="mb-1">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" name="fecha" id="rueda-calendarica-picker" value="<?= $fecha_consultar ?? ''; ?>">
            </div>
        </form>

        <div class="container rueda-calendarica">
            <div id="cholq'ij">
                <div id="circle-nahual" class="circle">
                    <?php
                    foreach ($nahuales as $i => $nahual) {
                    ?>
                        <div style="--n: <?= $i ?>;">
                            <span></span>
                            <div>
                                <img src="/img/nahual/<?= $nahual['nombre']; ?>.png" alt="">
                                <span></span>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>

                <div id="circle-energia" class="circle circle-num">
                    <?php
                    foreach ($energias as $i => $energia) {
                    ?>
                        <div style="--n: <?= $i ?>;">
                            <span></span>
                            <div>
                                <img class="img-black" src="/img/energia/<?= $energia['nombre']; ?>.png" alt="">
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <div id="haab">
                <div id="circle-kin" class="circle circle-num">
                    <?php
                    foreach ($uinales as $i => $uinal) {
                        foreach ($kines as $j => $kin) {
                            if ($i == 18 && $j == 5) {
                                break;
                            }
                    ?>
                            <div style="--n: <?= $kines->num_rows * $i + $j ?>;">
                                <span></span>
                                <div>
                                    <img class="img-white" src="/img/kin/<?= $kin['nombre']; ?>_2.png" alt="">
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>

                <div id="circle-uinal" class="circle">
                    <?php
                    foreach ($uinales as $i => $uinal) {
                        foreach ($kines as $j => $kin) {
                            if ($i == 18 && $j == 5) {
                                break;
                            }
                    ?>
                            <div style="--n: <?= $kines->num_rows * $i + $j ?>;">
                                <div>
                                    <img class="img-white" src="/img/uinal/<?= $uinal['nombre']; ?>.png" alt="">
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    window.addEventListener("load", async () => {
        const picker = document.getElementById("rueda-calendarica-picker");
        const circleEnergia = document.getElementById("circle-energia");
        const circleNahual = document.getElementById("circle-nahual");
        const circleHaab = document.getElementById("haab");

        const getRuedaCalendarica = async (ev) => {
            const date = picker.value;
            const res = await fetch(`/backend/buscar/conseguir_rueda_calendarica.php${date ? `?fecha=${date}` : ''}`);
            const ruedaCalendarica = await res.json();
            const {
                cholquij: {
                    energia: {
                        numero: numeroEnergia
                    },
                    nahual: {
                        numero: numeroNahual
                    }
                },
                haab: {
                    kin: {
                        numero: numeroKin
                    },
                    uinal: {
                        numero: numeroUinal
                    }
                }
            } = ruedaCalendarica;

            const haab = (numeroUinal * 20 + numeroKin - 1) % 365;
            const energia = numeroEnergia - 1;
            const nahual = (numeroNahual - 1 + 3) % 20;

            let curr = 0;

            while (curr % 13 !== energia || curr % 20 !== nahual || curr % 365 != haab) {
                curr++;
                if (curr >= 18980) {
                    curr = 0;
                    break;
                }
            }

            circleEnergia.style.transform = `rotate(${curr * 27.692308}deg)`;
            circleNahual.style.transform = `rotate(${curr * 18}deg)`;
            circleHaab.style.transform = `rotate(${curr * -0.9863}deg)`;
        };

        picker.addEventListener("change", getRuedaCalendarica);
        await getRuedaCalendarica();
    });
</script>