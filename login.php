<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="myweb/css/bootstrap.min.css">
        <link rel="stylesheet" href='css/logincss.css'>
    </head>
   
    <body> 
      <body class="main-bg">
        <div class="login-container text-c animated flipInX">
                <div>
                    <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
                </div>
                    <h3 class="text-whitesmoke">HALAMAN LOGIN</h3>
                <div class="container-content">
                    <form action="config/login.php" method="POST" class="margin-t">
                        <div class="form-group">
                            <input type="text" class="form-control" name = "username" placeholder="Nama Pengguna" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Kata Sandi" required>
                        </div>
                        <button class="form-button button-l margin-b" name="login" type="submit"><a href="produksi.php">LOGIN</a></button><br>
        
                        <a class="text-darkyellow" href="#"><small>lupa Kata Sandi?</small></a>
                        <p class="text-whitesmoke text-center"><small>Apakah anda tidak memiliki akun?</small></p>
                        <a class="text-darkyellow" href="daftar.php"><small>Daftar</small></a>
                    </form>
                    <p class="margin-t text-whitesmoke"><small> @Copyright by 18111156_SintaRamayanti_TIFRP18CIDB</small> </p>
                </div>
            </div>
</body>
<script type="text/javascript">
	// function validasi() {
	// 	var username = document.getElementById("username").value;
	// 	var password = document.getElementById("password").value;
	// 	console.log(username,password)
    //     if(username == "sintaramayanti" && password == "sinta1234"){
    //         window.location.href = "produksi.html"

    //     }
    //     else{
    //         alert('Nama Pengguna atau Kata Sandi Salah');
    //     }
	// }
</script>
</html>