<?php
require_once "koneksi.php";
$no_ktp = $_POST["noktp"];
$nama_depan= $_POST["namadepan"];
$nama_belakang= $_POST["namabelakang"];
$email= $_POST["email"];
$username= $_POST["username"];
$password= $_POST["password"];
$no_wa = $_POST["no_wa"];
$alamat = $_POST["alamat"];

// $q = $database_connection->prepare("INSERT INTO `daftar` (`id_daftar`, `nama_depan`, `nama_belakang`, `email`, 
// `username`, `password`, `no_wa`, `alamat`) VALUES (NULL, ?, ?, ?, ?, ?, SHA1(?), ?, ?);");
// $q->execute([$no_ktp,$nama_depan, $nama_belakang, $email, $username,$password,$no_wa,$alamat]);
// header("Location: ../login.php");

try{
    $q = $database_connection->prepare("INSERT INTO `daftar` (`id_daftar`,`no_ktp`, `nama_depan`, `nama_belakang`, `email`, 
    `username`, `password`, `no_wa`, `alamat`) VALUES (NULL, ?, ?, ?, ?, ?, SHA1(?), ?, ?);");
$q-> execute([$no_ktp ,$nama_depan, $nama_belakang, $email, $username, $password,$no_wa,$alamat]);
header("Location: ../login.php");

}catch(PDOException $x) {
    echo $x->getMessage();
    }
?>