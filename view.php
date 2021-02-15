[16.04, 13/2/2021] Rizky Iki: <?php
require_once  "config/koneksi.php";
$id_pendaftar = $_POST['id_pendaftar'];
$namafile = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];

if($id_pendaftar == ""){
    echo "tidak bisa upload file";
}else{
    move_uploaded_file($tmp_name, "../image/".$namafile);
    $q = $database_connection->prepare("UPDATE `biodata` SET `pic_location` = ? WHERE `id_pendaftar` = ?");
$q->execute(["image/".$namafile,$id_pendaftar]);
header("Location: ../index.php");
}

?>
[16.31, 13/2/2021] Rizky Iki: <?php
include 'session.php';
$idreg = $_POST["id"];
require_once 'config/koneksi.php';

try{
  $sql = "SELECT biodata.id_biodata, biodata.id_daftar, biodata.nama_lengkap, 
  biodata.email, biodata.username, biodata.pic_location,
  biodata.no_ktp, biodata.no_wa, biodata.alamat, 
  daftar.nama_depan, daftar.nama_belakang, daftar.email, daftar.username, daftar.password, daftar.no_wa, daftar.alamat 
  FROM biodata RIGHT JOIN daftar ON biodata.id_biodata = daftar.id_daftar WHERE daftar.id_daftar=?";
  $q = $database_connection->prepare($sql);
  $q->execute([$idreg]);
  }catch(PDOException $e){
  die("Tidak Bisa Membuka Database $database_name :" . $e->getMessage());
  }
  
  foreach ($q as $row) {
      $id= $row['id_biodata'];
      $namalengkap = $row['nama_lengkap'];
      $namalengkap = $namadepan . " " . $namabelakang;
      $email = $row['email'];
      $username = $row['username'];
      $photo = $row['pic_location'];
      $noktp = $row['no_ktp'];
      $nowa = $row['no_wa'];
      $alamat = $row['alamat'];
  }
  include 'header.php';    

?>


<body>
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo $photo;?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $namalengkap;?></h4>
                      <p class="text-secondary mb-1"><?php echo $pekerjaan;?></p>
                      <p class="text-muted font-size-sm"><?php echo $perusahaan;?></p><br/><br/>
                      <a href="<?php echo $photo;?>">Download Foto Profil</a>
                      <form action="config/upload.php" method="POST" enctype="multipart/form-data">
                      <input type="hidden" name="id_pendaftar" value="<?php echo $id_pendaftar?>">
                      <input type="file" name="file" id="file">
                      <button type="submit">Upload</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama Lengkap</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $namalengkap;?></div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"> <?php echo $email;?> </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Username</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"> <?php echo $username;?></div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Tempat & Tanggal Lahir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $kotalahir . " , " . $tanggallahir;?></div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $alamat;?> </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Pendidikan Terakhir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $pendidikan;?> </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Status</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $status;?> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</body>
</html>