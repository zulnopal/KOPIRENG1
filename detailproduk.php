<?php 
  session_start();
	$koneksi = new mysqli("localhost", "root", "","tokok");

	$id_produk = $_GET['id'];
	$ambil = $koneksi->query("SELECT * FROM tb_produk WHERE id_produk='$id_produk'");
	$pecah = $ambil->fetch_assoc();


?>



<!doctype php>
<php lang="en">

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
    <form method="POST">
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6">
                    
         
                    <img src="admin/images/product/<?$perproduk['foto_produk'] ; ?>" ></a>
                    </div>
                    <div class="col-md-6">
                        
                        <h1 class="display-5 fw-bolder"><?php echo $pecah['nama_produk']; ?></h1>
                        <div class="fs-5 mb-5">
                            <span ><?php echo "Rp. ".$pecah['harga_produk']; ?></span>
                            
                        </div>
                        <p class="lead"><?php echo $pecah['deskripsi_produk']; ?></p>
                        

                        <div class="alert alert-success">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" name="jumlah" />
                            <button class="btn btn-success btn-block" name="beli">BELI</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
<?php 

if (isset($_POST["beli"])) {
  $jumlah = $_POST["jumlah"];
  $_SESSION["keranjang"][$id_produk] = $jumlah;
  echo "<script>alert('Produk Tambah Ke Keranjang');</script>";
  echo "<script>location = 'keranjang.php';</script>";
}

?>

   
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> 
    </body>
</html>