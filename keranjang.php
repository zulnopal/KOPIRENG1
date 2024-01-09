<?php  
  session_start();
  $koneksi = new mysqli("localhost", "root", "","tokok");
  
  if (!isset($_SESSION["keranjang"])) {
    echo "<script>alert('Silahkan Pilih Produk Lebih Dahulu');</script>";
    echo "<script>location='index.php';</script>";
   } 

  if (empty($_SESSION["keranjang"])) {
    echo "<script>alert('Silahkan Pilih Produk Lebih Dahulu');</script>";
    echo "<script>location='index.php';</script>";
   } 
 
 ?>


<!doctype html>
<html lang="en">
<head>
   
   <!--====== Required meta tags ======-->
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
   <!--====== Title ======-->
   <title>KOPIRENG</title>
   
   <!--====== Favicon Icon ======-->
   <link rel="shortcut icon" href="images/kopi2.png" type="image/png">

   <!--====== Bootstrap css ======-->
   <link rel="stylesheet" href="admin/css/assets/bootstrap.min.css">
   
   <!--====== Animate css ======-->
   <link rel="stylesheet" href="admin/css/assets/animate.css">
   
   <!--====== Magnific Popup css ======-->
   <link rel="stylesheet" href="admin/css/assets/magnific-popup.css">
   
   <!--====== Slick css ======-->
   <link rel="stylesheet" href="admin/css/assets/slick.css">
   
   <!--====== Line Icons css ======-->
   <link rel="stylesheet" href="admin/css/LineIcons.css">
   
   <!--====== Default css ======-->
   <link rel="stylesheet" href="admin/css/assets/default.css">
   
   <!--====== Style css ======-->
   <link rel="stylesheet" href="admin/css/assets/style.css">
   
   <!--====== Responsive css ======-->
   <link rel="stylesheet" href="admin/css/assets/responsive.css">
   <link rel="stylesheet" href="admin/css/assets/krj.css">
 
 
</head>

<body>
  
   <!--====== PRELOADER PART START ======-->
   
   
   
   <!--====== PRELOADER PART START ======-->
   
   <!--====== HEADER PART START ======-->
   
   <header class="header-area" >
       <div class="container" >
           <div class="row">
               <div class="col-lg-12">
                   <nav class="navbar navbar-expand-lg" >
                       <a class="navbar-brand" href="index.html">
                       <img src="images/kopi2.png" alt="Logo" width="125" height="125">
                       </a> <!-- Logo -->
                       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="bar-icon"></span>
                           <span class="bar-icon"></span>
                           <span class="bar-icon"></span>
                       </button>

                       <div class="collapse navbar-collapse" id="navbarSupportedContent">
                           <ul id="nav" class="navbar-nav ml-auto">
                               <li class="nav-item">
                                   <a data-scroll-nav="0" href="index.php">HOME</a>
                               </li>
                               
                           </ul> <!-- navbar nav -->
                       </div>
                   </nav> <!-- navbar -->
               </div>
           </div> <!-- row -->
       </div> <!-- container -->
   </header>

  <br>

<?php 
            $no = 1;
            foreach ($_SESSION['keranjang'] as $id_produk => $jumlah) :  ?>

            <?php 
             
              $ambil = $koneksi->query("SELECT * FROM tb_produk WHERE id_produk='$id_produk'");
              $pecah = $ambil->fetch_assoc();?>
<div class="card">
            <div class="row">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col"><h4><b>Shopping Cart</b></h4></div>
                            <div class="col align-self-center text-right text-muted"><?= intval($jumlah)?></div>
                        </div>
                    </div>    
                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-2"><img src="images/product/<? echo $perproduk['foto_produk'] ; ?>" alt="Product" width="100" height="220"></div>
                            <div class="col">

                                <div class="row"><?= $pecah['nama_produk']; ?></div>
                            </div>
                            <div class="col">
                                <a href="#">(belum ada fitur pengiriman)</a>
                            </div>
                            <div class="col"><?= "Rp ".number_format($pecah['harga_produk']); ?></div>
                        </div>
                    </div>
                    <
                    <div class="back-to-shop"><a href="index.php">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
                </div>
                <div class="col-md-4 summary">
                    <div><h5><b>Summary</b></h5></div>
                    <hr>
                    <div class="row">
                        <div class="col" style="padding-left:0;"><?="Jumlah" .intval($jumlah)?></div>
                    </div>
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TOTAL PRICE</div>
                        <?php $subtotal = $pecah['harga_produk']*$jumlah ?>
                        <div class="col text-right"><?= "Rp ".number_format($subtotal); ?></div>
                    </div>
                    <a class="btn btn-danger" href="hapuskeranjang.php?id=<?php echo $id_produk ?> ">Hapus</a>
                    <a class="btn btn-primary" href="index.php" >Kembali Belanja</a>
                    <a class="btn btn-success" href="checkout.php" >CheckOut</a>
                    
                </div>
            </div>
            
        </div>
              <?php $no++; ?>
        <?php endforeach ?>
        
        
    </div> 

   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
  </body>
</html>