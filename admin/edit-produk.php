<?php
session_start();
include 'db.php';
if($_SESSION['status_login'] != true){
    echo '<script>window.location="login_admin.php"</script>';
}

$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = '".$_GET['id']."' ");
if(mysqli_num_rows($produk) == 0){
    echo '<script>window.location="data-produk.php"</script>';
}
$p = mysqli_fetch_object($produk);
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
    <title>Halaman Edit Produk</title>

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
    <h3>Edit Data Produk</h3>
    <div class="box">
        <form action="" method="POST" enctype="multipart/form-data">
        <select class="input-control" name="kategori" required>
        <option value="">--Pilih--</option>
        <?php
        $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
        while($r = mysqli_fetch_array($kategori)){

        ?>
        <option value="<?php echo $r['category_id'] ?>" <?php echo ($r['category_id'] == $p->category_id)? 
        'selected':''; ?>><?php echo $r['category_name'] ?></option>
        <?php } ?>
        </select> 
        <input type="text" name="nama" class="input-control" placeholder="Nama Produk" value="<?php echo
         $p-> product_name ?>" required>
        <input type="text" name="harga" class="input-control" placeholder="Harga" value="<?php echo
         $p-> product_price ?>"required>

         <img src="produk/<?php echo $p->product_image ?>" width="100px">
        <input type="hidden" name="foto" value="<?php echo $p->product_image ?>">
        <input type="file" name="gambar" class="input-control">
        <textarea class="input-control" name="deskripsi" placeholder="Deskripsi"><?php echo
         $p-> product_description ?></textarea><br>
        <select class="input-control" name="status">
        <option value="">--Pilih--</option>
        <option value="1" <?php echo ($p->product_status == 1)? 'selected':''; ?>>--Aktif--</option>
        <option value="0" <?php echo ($p->product_status == 0)? 'selected':''; ?>>--Tidak Aktif--</option>
        </select>
        <input type="submit" name="submit" value="Submit" class="btn">
        </form>
        <?php 
        if(isset($_POST['submit'])){
            // data inputan dari form
            $kategori   =$_POST['kategori'];
            $nama       =$_POST['nama'];
            $harga      =$_POST['harga'];
            $deskripsi  =$_POST['deskripsi'];
            $status     =$_POST['status'];
            $foto       =$_POST['foto'];

            // data gambar yang baru
            $filename = $_FILES['gambar']['name'];
            $tmp_name = $_FILES['gambar']['tmp_name'];

                $type1 = explode('.', $filename);
                $type2 = $type1[1];
                
                $newname = 'produk' .time().'.'.$type2;
   
                // menampung data format file yang diizinkan
                $tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif');
                
            // jika admin mengganti gambar
            if($filename != ''){
            
                // validasi format file
                if(!in_array($type2, $tipe_diizinkan)){
                    // jika format file tidak ada di dalam array tipe diizinkan
                    echo '<script>alert("Format file tidak diizinkan")</script>';

            }else{
                unlink('./produk/'.$foto);
                move_uploaded_file($tmp_name, './produk/'.$newname);
                $namagambar = $newname;

            }

            }else{
                // jika admin tidak mengganti gambar
                $namagambar = $foto;
            }
            
                // query update data produk
                $update = mysqli_query($conn, "UPDATE tb_product SET
                           category_id           = '".$kategori."',
                           product_name          = '".$nama."',
                           product_price         = '".$harga."',
                           product_description   = '".$deskripsi."',
                           product_image         = '".$namagambar."',
                           product_status        = '".$status."'
                           WHERE product_id = '".$p->product_id."' ");
                if($update){
                    echo '<script>alert("Ubah data berhasil")</script>';
                    echo '<script>window.location="data-produk.php"</script>';
                }else{
                    echo 'gagal '.mysqli_error($conn);
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




