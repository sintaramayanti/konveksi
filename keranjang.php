<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Tas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="myweb/css/bootstrap.min.css">
  <link rel="stylesheet" href='css/tas.css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body background="images/besi.jpg">
  
    
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item" style="font-size:x-large;">
        <a class="nav-link" href="produksi.html">PRODUKSI</a>
      </li>
      
    
    </ul>
    <div class="container">
      <button type="button" class="btn btn-dark ml-auto"><a href="index.html">KELUAR</a></button>
      </div>
  </nav>
  <br>
  
            <li class="breadcrumb-item active">Keranjang Belanja</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table table-cart">
            <thead>
              <tr>
                <th class="table-active"></th>
                <th class="table-active">Produk</th>
                <th class="table-active">Harga</th>
                <th class="table-active">Jml</th>
                <th class="table-active">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><i class="fa fa-times-circle text-danger" aria-hidden="true"></i></td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <form class="form-inline" method="post" action="https://formspree.io/">
            <input type="text" name="kupon" class="form-control m-1 w-25" placeholder="Kode Kupon">
            <button type="submit" class="btn btn-outline-primary m-1">Kupon</button>
          </form>
        </div>
        <div class="col-md-2">
          <a class="btn btn-primary m-1 w-100 disabled" href="" disabled="">Update</a>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-centered rounded p-4 p-footer-gray bg-light">
          <h5 class="text-dark">Total Belanja</h5>
          <table class="table">
            <thead>
              <tr></tr>
            </thead>
            <tbody>
              <tr>
                <td><b class="">Sub Total</b></td>
                <td class="text-dark">Rp. -</td>
              </tr>
              <tr>
                <td class=""><b>Total</b></td>
                <td class="text-dark">Rp. -</td>
              </tr>
            </tbody>
          </table>
          <a class="btn m-1 w-100 btn-success" href="konfirmasi_bayar.php"><i class="fa fa-fw fa-shopping-cart"></i>Proses</a>
        </div>
      </div>
    </div>
  </div>
  

  <footer class="container-fluid text-center" style="color: white;">
    <p>@Copyright by 18111156_SintaRamayanti_TIFRP18CIDB</p>  
  </footer>
 
  </body>
  </html>