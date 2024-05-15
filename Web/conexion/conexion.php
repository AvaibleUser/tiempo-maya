<?php

$servername = "127.0.0.1";
$username_DB = "father_time";
$password_DB = "ruler_of_time";
$dbname = "tiempo_maya";

// Create connection
$conn = new mysqli($servername, $username_DB, $password_DB, $dbname, '3306');
if ($conn->connect_error) {
    echo 'Conexion fallida: ' . $conn->connect_error;
    die("Connection failed: " . $conn->connect_error);
} else {
    /* change character set to utf8mb4 */
    $conn->set_charset("utf8mb4");
    return $conn;
}
