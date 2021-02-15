<?php
session_start();
include 'db.php';
if($_SESSION['status_login'] != true){
    echo '<script>window.location="login_admin.php"</script>';
}
?>
<!DOCTYPE html>
<html>
<head>
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Halaman Tambah Kategori</title>

</head>
<body >
    <!--header-->
    <header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item" style="font-size:x-large;">
        <a class="nav-link" href="dashboard.php">ADMIN USPORT</a>
      </li>
    </ul>
    <ul class="navbar-nav">
    <li class="nav-item" style="font-size;medium;">
        <a class="nav-link" href="profile_admin.php">Profile</a>
      </li>
    </ul>

    <ul class="navbar-nav">
    <li class="nav-item" style="font-size:medium;">
        <a class="nav-link" href="data-kategori.php">Data Kategori</a>
      </li>
    </ul>
    <ul class="navbar-nav">
    <li class="nav-item" style="font-size:medium;">
        <a class="nav-link" href="data-produk.php">Data Produk</a>
      </li>
    </ul>

    <li class="nav-item dropdown ml-auto">
    <a href="config/logout.php">Logout</a>
  </nav>
  <br>
    </header>

    <!--content-->
    <div class="section">
    <div class="container">
    <h3>Tambah Data Kategori</h3>
    <div class="box">
        <form action="" method="POST">
        <input type="text" name="nama" placeholder="Nama Kategori" class="input-control" required>
        <input type="submit" name="submit" value="Submit" class="btn">
        </form>
        <?php 
        if(isset($_POST['submit'])){

            $nama = ucwords($_POST['nama']);

            $insert = mysqli_query($conn, "INSERT INTO tb_category VALUES (
                             null,
                             '".$nama."') ");

        if($insert){
            echo '<script>alert("Tambah data berhasil")</script>';
            echo '<script>window.location="data-kategori.php"</script>';
        }else{
            echo 'gagal' .mysqli_error($conn);
        }
        }
        ?>
    </div>
</div>
</div>

<!--footer-->

<footer class="container-fluid text-center" style="color: black;">
    <p>@Copyright by 18111156_SintaRamayanti_TIFRP18CIDB</p>  
  </footer>
</body>
</html>




