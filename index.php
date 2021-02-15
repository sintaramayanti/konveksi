<?php

?>
<!DOCTYPE html>
<html>
<title>Halaman Utama</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="myweb/css/bootstrap.min.css">
<link rel="stylesheet" href='css/indexcss.css'>

<body class="w3-black" background="images/besi.jpg">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  
  <a href="index.html" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>UTAMA</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-about w3-xxlarge"></i>
    <p>TENTANG</p>
  </a>
  <a href="daftar.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>DAFTAR</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>KONTAK</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="index.html" class="w3-bar-item w3-button" style="width:25% !important">UTAMA</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">TENTANG</a>
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">DAFTAR</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">KONTAK</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center " id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">Hai?,</span></br> Selamat Datang di Konveksi Usport</h1>
    <p>"Kualitas Terbaik Sepanjang Masa !"</p>
    <img src="images/usport.png" alt="boy" class="w3-image" width="992" height="1108">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-white w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">USPORT</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Konveksi Usport adalah tempat pembuatan sandang yang merintis sejak tahun 1996, dimana pada awal tahun memiliki 1 mesin saja.
      Dan hingga sekarang Konveksi Usport sudah berkembang. Konveksi ini adalah tempat produksi marchendaise yang berhubungan dengan
      produksi fashion dengan pembuatan quantity tertentu.
    </p>
    
    
    <!-- Grid for pricing tables -->
    <h3 class="w3-padding-16 w3-text-light-grey">PRODUKSI</h3>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Pakaian</li>
          <li class="w3-padding-16">Kameja</li>
          <li class="w3-padding-16">Jas Almamater</li>
          <li class="w3-padding-16">Kaos</li>
          <li class="w3-padding-16">Training</li>
          <li class="w3-padding-16">Rompi</li>
          <li class="w3-padding-16">Jaket</li>
          <li class="w3-padding-16">
          
        </ul>
      </div>

      <div class="w3-half">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Aksesoris</li>
          <li class="w3-padding-16">Tas</li>
          <li class="w3-padding-16">Topi</li>
          <li class="w3-padding-16">-</li>
          <li class="w3-padding-16">-</li>
          <li class="w3-padding-16">-</li>
          <li class="w3-padding-16">-</li>
          <li class="w3-padding-16">
            <li class="w3-padding-16">
        </ul>
      </div>
    <!-- End Grid/Pricing tables -->
   

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Kontak</h2>
    <hr style="width:200px" style="text-align: left;" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Jalan. Cilengkrang 2 Manglayang IV KSBA No. 47 Cibiru Kota Bandung</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: 081389767144</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: sintaramayanti12@gmail.com</p>
    </div><br>
    
  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-white w3-xlarge">
    
    <p class="w3-medium">@Copyright by 18111156_SintaRamayanti_TIFRP18CIDB </p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
