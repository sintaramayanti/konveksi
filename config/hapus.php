<?php
require_once "koneksi.php";
$id_register= $_POST["id_reg"];
echo $id_register;

$q = $database_connection->prepare("DELETE FROM `daftar` WHERE `daftar`.`id` = ?");
$q->execute([$id_register]);
header("Location: ../index.php");
?>