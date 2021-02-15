<?php
require_once "koneksi.php";
$username = $_POST["username"];
$email= $_POST["email"];
$kota_lahir= $_POST["kota_lahir"];
$tgl_lahir= $_POST["tgl_lahir"];
$pekerjaan= $_POST["pekerjaan"];

$ktp = $_POST['no_ktp'];
$namadepan = $_POST['nama_depan'];
$namabelakang = $_POST['nama_belakang'];
$email = $_POST['email'];    
$username = $_POST['username'];
$wa = $_POST['no_wa'];
$alamat = $_POST['alamat'];  


$q = $database_connection ->prepare ("UPDATE `daftar` SET `no_ktp` = ?, `nama_depan` = ?, `nama_belakang` = ?, `email` = ?, `'username` = ?`no_wa` = ?,`alamat` = ?, WHERE `daftar`.`id` = ?;");
$q->execute ([$ktp, $namadepan, $namabelakang, $email, $username, $wa, $alamat,$id]);
header("Location: profile.php");
?>