<?php

include 'db.php';

if(isset($_GET['idk'])){
    $delete = mysqli_query($conn, "DELETE FROM tb_category WHERE category_id = '".$_GET['idk']."' ");
    echo '<script>window.location="data-kategori.php"</script>';
}

if(isset($_GET['idp'])){
    $produk = mysqli_query($conn, "SELECT katalog_image FROM katalog WHERE id_katalog = '".$_GET['idp']."' ");
    $p = mysqli_fetch_object($produk);

    unlink('./produksi.php/'.$p->katalog_image);

    $delete = mysqli_query($conn, "DELETE FROM katalog WHERE pid_katalog = '".$_GET['idp']."' ");
    echo '<script>window.location="data-produk.php"</script>';
}
?>