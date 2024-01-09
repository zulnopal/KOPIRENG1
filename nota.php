<?php 
	session_start();
	$koneksi = new mysqli("localhost", "root", "","tokok");
 
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin/css/global.css">
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

    <title>PEKA-Nota</title>
  </head>
  <body>


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
 

<div class="container">
	<h1>Halaman Nota</h1>

	<?php 
	
	$ambil = $koneksi->query("SELECT * FROM tb_pembelian JOIN tb_pelanggan
							  ON tb_pembelian.id_pelanggan = tb_pelanggan.id_pelanggan
							  WHERE tb_pembelian.id_pembelian = '$_GET[id]'");

	$detail = $ambil->fetch_assoc();

 ?>

 <pre>
 	<?php
 	 
	 ?>
 </pre>

<strong>
	<br>
	<?php echo"Total Pembayaran : Rp. " .$detail['total_pembelian'] ." (Termasuk Ongkir)"; ?>
	<br>
	<?php echo "Ongkos Kirim : Rp. " .$detail['tarif']; ?>
</strong>

 <p>
 	<?php echo " Nama Pelanggan : ".$detail['nama_pelanggan']; ?>
 	<br>
 	<?php echo "Telepon : " .$detail['telepon']; ?>
 	<br>
 	<?php echo "E-Mail : " .$detail['email'] ?>
 	<br>
	<?php echo "Alamat Pengiriman : " .$detail['alamat']; ?>
 </p>

  <div class="row m-t-30">
      <div class="col-md-12">
		<div class="table-responsive m-b-40">
		<table class="table table-borderless table-data3">
			<thead class="thead-light">
				<tr>
					<th>No</th>
					<th>Nama Produk</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>SubTotal</th>
				</tr>
			</thead>

			<tbody>
			<?php $no = 1; ?>
			<?php $ambil = $koneksi->query("SELECT * FROM tb_pembelian_produk JOIN tb_produk ON 
											tb_pembelian_produk.id_produk = tb_produk.id_produk
											WHERE tb_pembelian_produk.id_pembelian = '$_GET[id]'"); ?>
			<?php while($pecah = $ambil->fetch_assoc()) { ?>
			
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $pecah['nama_produk']; ?></td>
					<td><?php echo "Rp. " .$pecah['harga_produk'];  ?></td>
					<td><?php echo $pecah['jumlah']; ?></td>
					<td><?php echo "Rp. ".$pecah['harga_produk']*$pecah['jumlah']; ?></td>
				</tr>
			<?php $no++; ?>
			<?php } ?>
			</tbody>
		</table>
		</div>
	</div>
</div>
</div>

<div class="container">

	<div class="row">
		<div class="col-md-6">
			<div class="alert alert-primary" role="alert">
					<h6 class="alert-heading">PETUNJUK PEMBAYARAN</h6>
					<hr>
					<p>
					Silahkan Melakukan Transaksi Pembayaran Sebesar Rp. <?php echo number_format($detail['total_pembelian']); ?>
					<br>
					Ke Rekening <strong>6794-xxx-xxx-xxx - BANK BRI </strong>
					<br>
					<strong>KOPIRENG</strong>
				</p>
			</div>
		</div>
	</div>
	
</div>
  

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>