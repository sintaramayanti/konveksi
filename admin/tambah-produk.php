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
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <title>Halaman Tambah Produk</title>

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
    <h3>Tambah Data Produk</h3>
    <div class="box">
        <form action="" method="POST" enctype="multipart/form-data">
        <select class="input-control" name="kategori" required>
        <option value="">--Pilih--</option>
        <?php
        $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
        while($r = mysqli_fetch_array($kategori)){

        ?>
        <option value="<?php echo $r['category_id'] ?>"><?php echo $r['category_name'] ?></option>
        <?php } ?>
        </select> 
        <input type="text" name="nama" class="input-control" placeholder="Nama Produk" required>
        <input type="text" name="harga" class="input-control" placeholder="Harga" required>
        <input type="file" name="gambar" class="input-control" required>
        <textarea class="input-control" name="deskripsi" placeholder="Deskripsi"></textarea><br>
        <select class="input-control" name="status">
        <option value="">--Pilih--</option>
        <option value="1">--Aktif--</option>
        <option value="0">--Tidak Aktif--</option>
        </select>
        <input type="submit" name="submit" value="Submit" class="btn">
        </form>
        <?php 
        if(isset($_POST['submit'])){

           // print_r($_FILES['gambar']);

                       // menampung inputan dari form
                       $kategori   =$_POST['kategori'];
                       $nama       =$_POST['nama'];
                       $harga      =$_POST['harga'];
                       $deskripsi  =$_POST['deskripsi'];
                       $status     =$_POST['status'];
       
                  // menampung data file yang di upload
                      $filename = $_FILES['gambar']['name'];
                      $tmp_name = $_FILES['gambar']['tmp_name'];
       
                       $type1 = explode('.', $filename);
                       $type2 = $type1[1];
                       
                       $newname = 'produk' .time().'.'.$type2;

                  // menampung data format yang file yang diizinkan
                       $tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif');
                  // validasi format file
                  if(!in_array($type2, $tipe_diizinkan)){
                      // jika format file tidak ada di dalam array tipe diizinkan
                      echo '<script>alert("Format file tidak diizinkan")</script>';
                  }else{
                      // jika format file sesuai dengan yang ada di dalam array tipe diizinkan
                      // proses upload file sekaligus insert ke database
                      move_uploaded_file($tmp_name, './produk/'.$newname);

                      $insert = mysqli_query($conn, "INSERT INTO katalog VALUES (
                                            null,
                                            '".$kategori."',
                                            '".$nama."',
                                            '".$harga."',
                                            '".$deskripsi."',
                                            '".$newname."',
                                            '".$status."',
                                            null
                                         
                                        ) ");

                                        if($insert){
                                            echo '<script>alert("Tambah data berhasil")</script>';
                                            echo '<script>window.location="data-produk.php"</script>';
                                        }else{
                                            echo 'gagal '.mysqli_error($conn);
                                        }
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
                <script>
                        CKEDITOR.replace( 'deskripsi' );
                </script>
</body>
</html>




