<?php
session_start();
include 'db.php';
if($_SESSION['status_login'] != true){
    echo '<script>window.location="login_admin.php"</script>';
}

$query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE admin_id = '".$_SESSION['id']."' ");
$d = mysqli_fetch_object($query);
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
    <title>Profile Admin</title>

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
    <a href="login_admin.php">Logout</a>
  </nav>
  <br>
    </header>

    <!--content-->
    <div class="section">
    <div class="container">
    <h3>Profile Admin</h3>
    <div class="box">
        <form action="" method="POST">
        <input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d->admin_name?>" required>
        <input type="text" name="user" placeholder="Username" class="input-control" value="<?php echo $d->username?>" required>
        <input type="text" name="hp" placeholder="No Hp" class="input-control" value="<?php echo $d->admin_telp?>" required>
        <input type="text" name="email" placeholder="Email" class="input-control" value="<?php echo $d->admin_email?>" required>
        <input type="text" name="alamat" placeholder="Alamat" class="input-control" value="<?php echo $d->admin_address?>" required>
        <input type="submit" name="submit" value="Ubah Profil" class="btn">
        </form>
        <?php
        if(isset($_POST['submit'])){

            $nama   = ucwords($_POST['nama']);
            $user   = $_POST['user'];
            $hp     = $_POST['hp'];
            $email  = $_POST['email'];
            $alamat = ucwords($_POST['alamat']);

            $update = mysqli_query($conn, "UPDATE tb_admin SET
                             admin_name = '".$nama."',
                             username = '".$user."',
                             admin_telp = '".$hp."',
                             admin_email = '".$email."',
                             admin_address = '".$alamat."'
                             WHERE admin_id = '".$d->admin_id."'");

                             if($update){
                                 echo '<script>alert("Ubah data berhasil")</script>';
                                 echo '<script>window.location="profile_admin.php"</script>';
                             }else{
                                 echo 'gagal'.mysqli_error($conn);
                             }
        }
        ?>
    </div>

    <h3>Ubah Password</h3>
    <div class="box">
        <form action="" method="POST">
        <input type="password" name="pass1" placeholder="Password Baru" class="input-control" required>
        <input type="password" name="pass2" placeholder="Konfirmasi Password Baru" class="input-control" required>
        <input type="submit" name="ubah_password" value="Ubah Password" class="btn">
        </form>
        <?php
        if(isset($_POST['ubah_password'])){

            $pass1   = $_POST['pass1'];
            $pass2   = $_POST['pass2'];

            if($pass2 != $pass1){
                echo '<script>alert("Konfirmasi Password Baru tidak sesuai")</script>';
            }else{
                $u_pass = mysqli_query($conn, "UPDATE tb_admin SET
                             password = '".MD5($pass1)."'
                             WHERE admin_id = '".$d->admin_id."'");

                             if($u_pass){
                                 echo '<script>alert("Ubah data berhasil")</script>';
                                 echo '<script>window.location="profile_admin.php"</script>';
                             }else{
                                 echo 'gagal'.mysqli_error($conn);
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
</body>
</html>




