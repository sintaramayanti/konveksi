<?php


?>

<html>
    <head>
        <title>Halaman Daftar</title>
        <link rel="stylesheet" href="myweb/css/bootstrap.min.css">
        <link rel="stylesheet" href='css/daftar.css'>
    </head>
   
    <body> 
      <body class="main-bg">
        <div class="login-container text-c animated flipInX">
                <div>
                    <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
                </div>
                    <h3 class="text-whitesmoke">REGISTRASI AKUN</h3>
                    
                <div class="container-content">
                    <form action="config/register.php" method="POST" class="margin-t">
                    <div class="form-group">
                            <input type="text" class="form-control" name = "noktp" placeholder="No.KTP" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name = "namadepan" placeholder="Nama Depan" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name = "namabelakang" placeholder="Nama Belakang" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name = "email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name = "username" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Kata sandi" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="Konfirm_password" placeholder="Konfirmasi Kata sandi" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name = "no_wa" placeholder="No.WA" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name = "alamat" placeholder="Alamat" required>
                        </div>
                       
                        <button class="form-button button-l margin-b" >Daftar</a></button><br>
                        <p class="text-whitesmoke text-center"><small>Apakah Anda Memiliki Akun?</small></p>
                        <a class="text-darkyellow" href="login.php"><small>login</small></a>
                    </form>
                    <p class="margin-t text-whitesmoke"><small> @Copyright by 18111156_SintaRamayanti_TIFRP18CIDB</small> </p>
                </div>
            </div>
</body>
<script type="text/javascript">
	// function validasi() {
	// 	var Username = document.getElementById("Username").value;
	// 	var Email = document.getElementById("Email").value;
	// 	var Address = document.getElementById("Address").value;
    //     var Password = document.getElementById("Password").value;
    //     var Konfirm_Password= document.getElementById("Konfirm Password").value;
       
	// 	if (Username != "" && Email!="" && Address !=""&& Password!="" && Konfirm_Password !="") {
	// 		return true;
            
	// 	}else{
	// 		alert('Anda harus mengisi data dengan lengkap !');
	// 	}
	// }
</script>
</html>