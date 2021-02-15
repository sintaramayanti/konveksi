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
    <title>Halaman Data Produk</title>

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
    <h3>Data Produk</h3>
    <div class="box">
    <p><a href="tambah-produk.php">Tambah Data</a></p>
        <table border="1" cellspacing="0" class="table">
        <thead>
        <tr>
        <th width="60px">No</th>
        <th>Kategori</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Gambar</th>
        <th>Status</th>
        <th width="150px">Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php 
        $no = 1;
        $produk = mysqli_query($conn, "SELECT * FROM katalog LEFT JOIN tb_category USING (category_id) ORDER BY id_katalog DESC");
        if(mysqli_num_rows($produk) > 0){
        while($row = mysqli_fetch_array($produk)){
        ?>
        <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $row['category_name'] ?></td>
        <td><?php echo $row['katalog_nama'] ?></td>
        <td>Rp.<?php echo number_format($row['katalog_harga']) ?></td>
        <td><a href="produk/<?php echo $row['katalog_image'] ?>" target="_blank"> <img src ="produk/<?php echo $row['katalog_image'] ?>" width="60px"> </a></td>
        <td><?php echo ($row['katalog_status'] == 0)? 'Tidak Aktif':'Aktif'?></td>
        <td>
        <a href="edit-produk.php?id=<?php echo $row['id_katalog'] ?>">Edit</a> || <a href="
        proses-hapus.php?idp=<?php echo $row['id_katalog'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya?'
               )">Hapus</a>
               </td>
               </tr>
        <?php }  }else{ ?>
        <tr>
        <td colspan="7">Tidak ada data</td>
        </tr>

        <?php } ?>
        </tbody>
        </table>
    </div>
</div>
</div>

<!--footer-->

<footer class="container-fluid text-center" style="color: black;">
    <p>@Copyright by 18111156_SintaRamayanti_TIFRP18CIDB</p>  
  </footer>
</body>
</html>




