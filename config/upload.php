<?php
require_once  "koneksi.php";
require_once  "../session.php";
// print_r($_FILES['file']);exit;
$username = $_SESSION['username'];
$namafile = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];

if($username == "username"){
    echo "tidak bisa upload file";
}else{
    move_uploaded_file($tmp_name, "../image/".$namafile);
    $q = $database_connection->prepare("UPDATE `biodata` SET `pic_location` = ? WHERE `id_daftar` = ?");
$q->execute(["image/".$namafile,$id_daftar]);
header("Location: ../produksi.php");
}

?>