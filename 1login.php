<?php  
  session_start();
  $koneksi = new mysqli("localhost", "root", "","tokok");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login web</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="admin/css/assets/styles2.css">
    
    <link rel="stylesheet" type="text/css" href="admin/css/global.css">
    
</head>

<body>
    
<section class="container-fluid">

<section class="row justify-content-center">

  <section class="col-12 col-sm-6 col-md-3">
    <div class="wrapper">
        <form action="" class="form" method="POST">
            <h1 class="title">KOPIRENG</h1>
            <div class="inp">
                <input type="email" class="input form-control"  id="email" placeholder="email" name="email">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="inp">
            <input type="password" class="input form-control" id="password" placeholder="password" name="password">
                <i class="fa-solid fa-lock"></i>
            </div>
            <button type="submit" class="submit btn btn-primary btn-block" name="login">Login</button>
            <p class="footer">Belum Punya Akun?  <a href="daftar.php" class="link">Daftar</a></p>   
        </form>
        <div></div>
        <div class="banner">
            <h1 class="wel_text">@KOPIRENG</h1><br>
            <p class="para"></p>
        </div>
    </div>
  </section>
</section>
</section>
  <?php 

    if (isset($_POST["login"]) && empty($_SESSION["keranjang"])) {
        
         $email = $_POST["email"];
         $password = $_POST["password"];

         $ambil = $koneksi->query("SELECT * FROM tb_pelanggan WHERE email='$email' AND password='$password'");
         $akunygcocok = $ambil->num_rows;

         if ($akunygcocok == 1) {
           $akun = $ambil->fetch_assoc();
           $_SESSION["pelanggan"] = $akun;
           echo "<script>alert('Selamat Datang di Toko Kami');</script>";
           echo "<script>location='index.php';</script>";  
         } else {
            echo "<script>alert('Anda Gagal Login, Periksa Username atau Password Anda');</script>";
            echo "<script>location='1login.php';</script>";
         }

        

    } else if (isset($_POST["login"]) && isset($_SESSION["keranjang"])) {
         $email = $_POST["email"];
         $password = $_POST["password"];

         $ambil = $koneksi->query("SELECT * FROM tb_pelanggan WHERE email='$email' AND password='$password'");
         $akunygcocok = $ambil->num_rows;

         if ($akunygcocok == 1) {
           $akun = $ambil->fetch_assoc();
           $_SESSION["pelanggan"] = $akun;
           echo "<script>alert('Selamat Datang di Toko Kami');</script>";
           echo "<script>location='checkout.php';</script>";  
         } else {
            echo "<script>alert('Anda Gagal Login, Periksa Username atau Password Anda');</script>";
            echo "<script>location='login.php';</script>";
         }
    } else {

    }

 ?>
</body>
</html>
