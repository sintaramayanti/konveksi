<?php
require_once "koneksi.php";
$id_register= $_POST["id_reg"];
$nama_depan = $_POST["namadepan"];
$nama_belakang= $_POST["namabelakang"];
$email= $_POST["email"];
$username= $_POST["username"];

$q = $database_connection->prepare("UPDATE `data_pendaftar` SET `nama_depan` = ?, 
`nama_belakang` = ?, `email` = ?, `username`=? WHERE `data_pendaftar`.`id` = ?");
$q->execute([$nama_depan, $nama_belakang, $email, $username,$id_register]);
header("Location: ../index.php");
?>