<?php

$fecha1 = new DateTime("1719-12-19");
$fecha2 = new DateTime($fecha_consultar);

$fecha_actual = strtotime(date("d-m-Y H:i:00", $fecha1->getTimestamp()));
$fecha_entrada = strtotime($fecha_consultar);

$diff = $fecha1->diff($fecha2);

$reversa = $fecha_actual > $fecha_entrada;

$num_nahual = $diff->days % 20;

if ($num_nahual && $reversa) {
    $num_nahual = 20 - $num_nahual;
}

$num_nahual++;

$queryNahual = $conn->query("SELECT nombre, iddesk FROM nahual WHERE iddesk=" . $num_nahual . " ;");
$rowNahual = mysqli_fetch_assoc($queryNahual);
$nombre_nahual = $rowNahual['nombre'];
$num_nahual = $rowNahual['iddesk'];

$izq_nahual = ($num_nahual + 5) % 20 + 1;

$queryIzq = $conn->query("SELECT nombre FROM nahual WHERE iddesk=" . $izq_nahual . " ;");
$rowIzq = mysqli_fetch_assoc($queryIzq);
$nombre_izq = $rowIzq['nombre'];

$abajo_nahual = ($num_nahual + 7) % 20 + 1;

$queryAbajo = $conn->query("SELECT nombre FROM nahual WHERE iddesk=" . $abajo_nahual . " ;");
$rowAbajo = mysqli_fetch_assoc($queryAbajo);
$nombre_abajo = $rowAbajo['nombre'];

$der_nahual = ($num_nahual + 13) % 20 + 1;

$queryDer = $conn->query("SELECT nombre FROM nahual WHERE iddesk=" . $der_nahual . " ;");
$rowDer = mysqli_fetch_assoc($queryDer);
$nombre_der = $rowDer['nombre'];

$arriba_nahual = ($num_nahual + 11) % 20 + 1;

$queryArriba = $conn->query("SELECT nombre FROM nahual WHERE iddesk=" . $arriba_nahual . " ;");
$rowArriba = mysqli_fetch_assoc($queryArriba);
$nombre_arriba = $rowArriba['nombre'];

return array(
    "izq" => $nombre_izq,
    "abajo" => $nombre_abajo,
    "central" => $nombre_nahual,
    "der" => $nombre_der,
    "arriba" => $nombre_arriba
);
