<?php

$fecha1 = new DateTime("01-01-2001");
$fecha2 = new DateTime($fecha_consultar);

$fecha_actual = strtotime(date("d-m-Y H:i:00", $fecha1->getTimestamp()));
$fecha_entrada = strtotime($fecha_consultar);

$diff = $fecha1->diff($fecha2);

$dias = $diff->days;
$reversa = $fecha_actual > $fecha_entrada;

$katun_calc = intdiv($dias, 7200);
$katun_rem = $dias % 7200;
$tun_calc = intdiv($katun_rem, 360);
$tun_rem = $katun_rem % 360;
$uinal_calc = intdiv($tun_rem, 20);
$kin_calc = $tun_rem % 20;

if ($reversa) {
    $kin_calc *= -1;
    $uinal_calc *= -1;
    $tun_calc *= -1;
    $katun_calc *= -1;
}

$cl_kin = 8 + $kin_calc;
$pivot = 0;
if ($cl_kin > 19) {
    $cl_kin -= 20;
    $pivot = 1;
} elseif ($cl_kin < 0) {
    $cl_kin = 20 + $cl_kin;
    $pivot = -1;
}

$cl_uinal = 15 + $uinal_calc + $pivot;
$pivot = 0;
if ($cl_uinal > 17) {
    $cl_uinal -= 18;
    $pivot = 1;
} elseif ($cl_uinal < 0) {
    $cl_uinal += 18;
    $pivot = -1;
}

$cl_tun = 7 + $tun_calc + $pivot;
$pivot = 0;
if ($cl_tun > 19) {
    $cl_tun -= 20;
    $pivot = 1;
} elseif ($cl_tun < 0) {
    $cl_tun += 20;
    $pivot = -1;
}

$cl_katun = 19 + $katun_calc + $pivot;
$pivot = 0;
if ($cl_katun > 19) {
    $cl_katun -= 20;
    $pivot = 1;
} elseif ($cl_katun < 0) {
    $cl_katun += 20;
    $pivot = -1;
}

$cl_baktun = 12 + $pivot;

$senor_noche = ($dias + 1) % 9;

if ($senor_noche && $reversa) {
    $senor_noche = 9 - $senor_noche;
}

$senor_noche++;

return array(
    "baktun" => $cl_baktun,
    "katun" => $cl_katun,
    "tun" => $cl_tun,
    "uinal" => $cl_uinal,
    "kin" => $cl_kin,
    "senor_noche" => $senor_noche
);
