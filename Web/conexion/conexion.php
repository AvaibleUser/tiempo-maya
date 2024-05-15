<?php

$conn = new mysqli(
    '127.0.0.1',
    'father_time',
    'ruler_of_time',
    'tiempo_maya'
);
$conn->set_charset("utf8mb4");
return $conn;
