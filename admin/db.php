<?php
$database_hostname = "localhost";
$database_username ="root";
$database_password = "";
$database_name = "konveksi";

$conn = mysqli_connect($database_hostname, $database_username, $database_password, $database_name) or die ('gagal terhubung ke database');
?>