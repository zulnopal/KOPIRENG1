<?php 

	session_start();
 	$koneksi = new mysqli("localhost", "root", "","tokok");
	
?>


<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
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

	<title>KOPIRENG-Riwayat</title>
</head>

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
                                <li class="nav-item active">
                                    <a data-scroll-nav="0" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#product">Products</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#showcase">Tentang</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#team">Team</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#contact">Contact</a>
                                </li>
                                <?php if (isset($_SESSION["pelanggan"])) : ?>
                                </li>
                                <li class="nav-item">
                                    <a a data-scroll-nav="0" href="riwayat.php">Riwayat</a>
                                </li>

                                <li class="nav-item">

                                <a a data-scroll-nav="0" href="logout.php">Log Out</a>
                            </li>

           <?php else:  ?>
             </li>
               <li class="nav-item" >
                <a a data-scroll-nav="0" href="1login.php">Login</a>
              </li>
           <?php endif ?>
                            </ul> <!-- navbar nav -->
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    
<div class="container">

	<h4>Riwayat Belanja</h4>

	<table class="table table-bordered">
	  
	  <thead>
	    <tr>
	      <th scope="col">No</th>
	      <th scope="col">Tanggal</th>
	      <th scope="col">Total Belanja</th>
	      <th scope="col">Status</th>
	      <th scope="col">Aksi</th>
	    </tr>
	  </thead>

	  <?php 
	  	$no = 1;
		$id_pelanggan = $_SESSION['pelanggan']['id_pelanggan']; 
		$ambil = $koneksi->query("SELECT * FROM tb_pembelian WHERE id_pelanggan='$id_pelanggan'");
		while ($pecah = $ambil->fetch_assoc()) {
	  ?>

	  <tbody>
	  	<tr>
	  		<td><?php echo $no; ?></td>
	  		<td><?php echo $pecah['tanggal_pembelian']; ?></td>
	  		<td><?php echo "Rp." .number_format($pecah['total_pembelian']); ?></td>
	  		<td><?php echo $pecah['status'] ?></td>
	  		<td style="text-align: center">
          <?php if ($pecah['status'] == 'Sedang di Kirim' || $pecah['status'] == 'Produk di Terima') :?>
              <a href="nota.php?id=<?= $pecah['id_pembelian']; ?>" class="btn btn-primary btn-block">DETAIL</a>
          <?php endif; ?>

          <?php if ($pecah['status'] == 'Menunggu Konfirmasi' || $pecah['status'] == 'Pending' ) :?>
                <a href="nota.php?id=<?= $pecah['id_pembelian']; ?>" class="btn btn-primary">DETAIL</a>
               
                <!--<a href="pembayaran.php?id=<?= $pecah['id_pembelian']; ?>" class="btn btn-success">BAYAR</a>-->
          <?php endif; ?>

	  		
	  		</td>
	  	</tr>
	  </tbody>
	  <?php $no++; ?>
	  <?php } ?>


	</table>
</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>