<?php 
	session_start();
	$koneksi = new mysqli("localhost", "root", "","tokok");

	$id_pembayaran = $_GET['id'];
	$ambil = $koneksi->query("SELECT * FROM tb_pembelian WHERE id_pembelian='$id_pembayaran'");
	$pecah = $ambil->fetch_assoc();

	// MENDAPATKAN ID PELANGGAN YANG BELI
	$id_pelanggan_beli = $pecah['id_pelanggan'];

	// MENDAPATKAN ID PELANGGAN YG LOGIN
	$id_pelanggan_login = $_SESSION['pelanggan']['id_pelanggan'];

	//KONDISI JIKA ID PELANGGAN BELI != ID PELANGGAN LOGIN

	if ($id_pelanggan_beli !== $id_pelanggan_login) {
	 	echo "<script>alert('TIDAK DAPAT MENGAKSES');</script>";
    	echo "<script>location='riwayat.php';</script>";
	 } 


?>

<!DOCTYPE html>
<html>
<head>
	<title>PEKA-Pembayaran</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

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


	<div class="container">
		<h3>Konfirmasi Pembayaran</h3>

		<br>

		<form method="POST" enctype="multipart/form-data">
			<div class="col-md-6">	

				<div class="form-group">

				<label>Nama Penyetor</label>
				<input type="text" class="form-control" name="nama"></input>

				<label>Bank Pengirim</label>
				<input type="text" class="form-control" name="bank"></input>

				<label>Jumlah</label>
				<input type="text" class="form-control" name="jumlah"></input>

				<label>Upload Foto Bukti Transfer</label>
				<br>
				<input type="file" class="" name="bukti"></input>
				<p class="text-danger">Foto Harus Format *JPG</p>

				<button class="btn btn-primary" name="kirim">Kirim</button>
				</div>

			</div>
		</form>
	</div>


<?php 

	if (isset($_POST['kirim'])) {
		$namabukti = $_FILES['bukti']['name'];
		$lokasibukti = $_FILES['bukti']['tmp_name'];
		$namafoto = date('Ymdhis').$namabukti;
		move_uploaded_file($lokasibukti, "foto_bukti/$namafoto");

		$nama = $_POST['nama'];
		$bank = $_POST['bank'];
		$jumlah = $_POST['jumlah'];
		$tanggal = date('Y-m-d');

		$koneksi->query("INSERT INTO tb_pembayaran (id_pembelian, nama, bank, jumlah, tanggal, bukti)
						 VALUES ('$id_pembayaran', '$nama', '$bank', '$jumlah', '$tanggal', '$namafoto')");

		$koneksi->query("UPDATE tb_pembelian SET status='Menunggu Konfirmasi' WHERE id_pembelian='$id_pembayaran'");

		echo "<script>alert('TERIMAKASIH SUDAH MELAKUKAN PEMBAYARAN');</script>";
		echo "<script>location = 'riwayat.php';</script>";
	}

?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>