<?php  
  session_start();
  $koneksi = new mysqli("localhost", "root", "","tokok");
 
	if (!isset($_SESSION["pelanggan"])) {
	 	echo "<script>alert('Silahkan Login Terlebih Dahulu');</script>";
    echo "<script>location='1login.php';</script>";
	 } 

   if (empty($_SESSION["keranjang"])) {
     echo "<script>alert('Silahkan Pilih Produk Terlebih Dahulu');</script>";
     echo "<script>location='index.php';</script>";
   }
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

    <title>KOPIRENG-Checkout</title>
  </head>
  <body>
<header class="header-area">
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
  </header>

  <br>

<div class="container">
  <form method="POST">  

      <div class="row"> 
        <div class="col-md-4">
          <div class="form-group">
          <p>Nama Pelanggan</p>
          <input class="form-control" type="text" readonly value="<?php echo $_SESSION['pelanggan']['nama_pelanggan'] ?>">
          </input>
          </div>
        </div>
      </div>

        <div class="row">    
        <div class="col-md-4"> 
          <div class="form-group">
          <p>No.Handphone</p>
          <input class="form-control" type="text" readonly value="<?php echo $_SESSION['pelanggan']['telepon'] ?>">
          </input>
          </div>
        </div>
      </div>


      <div class="row">    

        <div class="col-md-4"> 
          <div class="form-group">
          <p>Pilih Provinsi Pengiriman</p>

            <select class="form-control" name="id_ongkir" onchange="cek_database()" id="id_prov">
              <option value="">-Pilih Provinsi-</option>
              <?php 
                $ambil = $koneksi->query("SELECT * FROM provinsi"); ;
                while($pecah = $ambil->fetch_assoc()) {
              ?>
              <option value="<?= $pecah['id_prov'] ?>" ><?= $pecah['nama']; ?> </option>
              
              <?php } ?>
            </select>
          
          </div>
        </div>


        <div class="col-md-4"> 
          <div class="form-group">
          <p>Pilih Kabupaten Pengiriman</p>
            <select class="form-control" name="kabupaten">
              <option value="">-Pilih Kabupaten-</option>
              <option value="">Kabupaten A</option>
              <option value="">Kapubaten B</option>
            </select>
          </div>
        </div>


        <div class="col-md-4"> 
          <div class="form-group">
          <p>Pilih Kecamatan Pengiriman</p>
            <select class="form-control" name="kecamatan">
              <option value="">-Pilih Kecamatan-</option>
              <option value="">Kelurahan C</option>
              <option value="">Kelurahan D</option>
            </select>
          </div>
        </div>

      </div>

       <div class="row">    
        <div class="col-md-6"> 
          <div class="form-group">
          <p>Alamat Pengiriman</p>
          <input class="form-control" type="text" placeholder="Masukkan Alamat Anda" name="alamat" id="alamat">
          </input>
          </div>
        </div>

        <div class="col-md-4"> 
          <div class="form-group">
          <p>Biaya Ongkir</p>
          <input class="form-control" type="text" name="biayaOngkir" value="" id="ongkir" readonly>
          </input>
          </div>
        </div>
      </div>

</div>


  <div class="container">
          <table class="table">
          
          <thead class="thead-light">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Produk</th>
              <th scope="col">Harga</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Sub Harga</th>       
            </tr>
          </thead>

          <?php 
            $no = 1;
            $totalbelanja = 0;
            foreach ($_SESSION['keranjang'] as $id_produk => $jumlah) :  ?>

            <?php 
             
              $ambil = $koneksi->query("SELECT * FROM tb_produk WHERE id_produk='$id_produk'");
              $pecah = $ambil->fetch_assoc();
            ?>

                <tbody>
                  <tr>
                    <th scope="row"><?= $no; ?></th>
                    <td><?= $pecah['nama_produk']; ?></td>
                    <td><?= "Rp ".number_format($pecah['harga_produk']); ?></td>
                    <td><?= $jumlah ?></td>
                    <?php $subtotal = $pecah['harga_produk']*$jumlah ?>
                    <td><?= "Rp ".number_format($subtotal); ?></td>
                  </tr>
                </tbody>
              <?php $no++; ?>
            <?php $totalbelanja+=$subtotal; ?>
        <?php endforeach ?>

                <tfoot class="thead-light">
                      <tr>
                          <th colspan="4" style="text-align: center"> Total Belanja</th>
                          <th> <?php echo "Rp ". number_format($totalbelanja) ; ?></th>
                      </tr>
                </tfoot>
        </table>
         
          <button class="btn btn-success" name="checkout">Lanjutkan ke Pembayaran</button>
          <h1></h1>
    </form>
  </div> 


    <?php 

       if (isset($_POST["checkout"])) {
        $id_pelanggan = $_SESSION["pelanggan"]["id_pelanggan"];
        $id_ongkir = $_POST["id_ongkir"];
        $tanggal_pembelian = date("Y-m-d");

        $ambil  = $koneksi->query("SELECT * FROM provinsi WHERE id_prov = '$id_ongkir'");
        $arrayongkir = $ambil->fetch_assoc();
        $tarif = $arrayongkir["ongkir"];
        $alamat = $_POST["alamat"];

        $total_pembelian = $totalbelanja + $tarif;

        //MENYIMPAN KETABEL PEMBELIAN
        $sql = $koneksi->query("INSERT INTO tb_pembelian (id_pelanggan, id_prov, tanggal_pembelian, total_pembelian, tarif, alamat,status)  VALUES ('$id_pelanggan', '$id_ongkir', '$tanggal_pembelian', '$total_pembelian', '$tarif', '$alamat','Pending')" );

        //MENDAPATKAN ID_PEMBELIAN YANG BARUSAN TERJADI
        $id_pembelian_barusan = $koneksi->insert_id;

        foreach ($_SESSION['keranjang'] as $id_produk => $jumlah) {
          $sql2 = $koneksi->query("INSERT INTO tb_pembelian_produk (id_pembelian, id_produk, jumlah) 
                           VALUES ('$id_pembelian_barusan', '$id_produk', '$jumlah')");
        }

        //MENGOSONGKAN KERANJANG
        unset($_SESSION['keranjang']);

        if($sql2 === true){
          echo "<script>alert('PEMBELIAN SUKSES');</script> ";
          echo "<script>location='nota.php?id=$id_pembelian_barusan';</script> " ;
        } else {
          echo "Gagal: ". $koneksi->error;
        }
          
        }

    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script type="text/javascript">
        function cek_database(){
          var id_prov = $("#id_prov").val();
          $.ajax({
            url:'ajax_cek.php',
            data: "id_prov="+id_prov,
          }).success(function (data){
            var json = data,
            obj = JSON.parse(json);
                  $('#ongkir').val(obj.ongkir);
        });
      }


  </script>


  </body>
</html>