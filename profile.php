<?php
include 'session.php';
// echo $_SESSION['username'];exit;
$idreg = $_SESSION["username"];
require_once 'config/koneksi.php';

// echo $idreg;exit;
try{
$sql = "SELECT * FROM daftar WHERE username=?";
$q = $database_connection->prepare($sql);
$q->execute([$idreg]);
}catch(PDOException $e){
die("Tidak Bisa Membuka Database $database_name :" . $e->getMessage());
}

foreach ($q as $row) {
    $ktp = $row['no_ktp'];
    $namadepan = $row['nama_depan'];
    $namabelakang = $row['nama_belakang'];
    $email = $row['email'];    
    $username = $row['username'];
    $wa = $row['no_wa'];
    $alamat = $row['alamat'];  
    
}


?>

<style>
body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
</style>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" rel="stylesheet"/>
<div class="container rounded bg-white mt-5 mb-5">
    
        <div class="row">
            <div class="col-md-3 border-right">
            <form action='config/upload.php' method='POST' enctype='multipart/form-data'>
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <span class="font-weight-bold"><?=$username?></span>
                <span class="text-black-50"><?=$email?></span>
                <div>
                    <input type="file" name="file">
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Upload Profile</button></div>

                <span> </span></div>
                </form>
            </div>
            
            <div class="col-md-5 border-right">
            <form action='config/edit_profile.php' method='POST'>
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">NoKTP</label><input type="text" class="form-control" placeholder="no_ktp" value="<?=$row['no_ktp']?>" name="ktp"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Username</label><input type="text" class="form-control" placeholder="username" value="<?=$row['username']?>" name="username"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="email" value="<?=$row['email']?>" name="email" ></div>
                    </div> 
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">NoWA</label><input type="text" class="form-control"placeholder="no_wa" value="<?=$row['no_wa']?>" name="no_wa"></div>
                    </div> 
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">alamat</label><input type="text" class="form-control" placeholder="alamat" value="<?=$row['alamat']?>" name="alamat"></div>
                    </div>              
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                </div>
            </form>
            </div>
            
        </div>
    
</div>
</div>
</div>