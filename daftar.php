<?php  
  session_start();
  $koneksi = new mysqli("localhost", "root", "","tokok");

 
 ?>


<!doctype html>
<html lang="en">

<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="admin/css/assets/styles3.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
</head>

<body>
  <div class="register-box">
<!-- multistep form -->
<form id="msform" class="form" method="POST">
    <!-- progressbar -->
    <ul id="progressbar">
      <li class="active">Account Setup</li>
      <li>Personal Details</li>
    </ul>
    <!-- fieldsets -->
    <fieldset>
      <h2 class="fs-title">Create your account</h2>
      <h3 class="fs-subtitle">Please fill below</h3>
      <input type="email" name="email" placeholder="Email" class="form-control"  id="staticEmail" name="email" />
      <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password"/>
      <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Personal Details</h2>
        <h3 class="fs-subtitle">We will never sell it</h3>
        <input type="text" name="fname" class="form-control" placeholder="Nama Lengkap" name="nama" />
        <input class="form-control" placeholder="No Handphone" name="hp" />
        <input type="submit" class="btn btn-success btn-block" name="daftar" />
    </fieldset>
    
  </form>
  </div>
  

<?php 

    if (isset($_POST["daftar"]) && empty($_SESSION["keranjang"])) {
        
         $email = $_POST["email"];
         $password = $_POST["password"];
         $nama = $_POST["nama"];
         $hp = $_POST["hp"];

        $sql = $koneksi->query("INSERT INTO tb_pelanggan (email, password, nama_pelanggan, telepon)  VALUES ('$email', '$password', '$nama', '$hp')" );

         if($sql === true){
          echo "<script>alert('PENDAFTARAN BERHASIL');</script> ";
          echo "<script>location='1login.php';</script> " ;
        } else {
          echo "Gagal: ". $koneksi->error;
        }

    } 

 ?>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="admin/js/main_2.js"></script>
</body>
</html>