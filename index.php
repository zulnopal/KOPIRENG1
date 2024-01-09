<?php  
  session_start();
  $koneksi = new mysqli("localhost", "root", "","tokok");
 
?>


<!doctype html>
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
                                <li class="nav-item active">
                                    <a data-scroll-nav="0" href="#home">Home</a>
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
    
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== SLIDER PART START ======-->
    
    <section id="home" class="slider-area pt-100">
        <div class="container-fluid position-relative">
            <div class="slider-active">
                <div class="single-slider">
                    <div class="slider-bg">
                        <div class="row no-gutters align-items-center ">
                            <div class="col-lg-4 col-md-5">
                                <div class="slider-product-image d-none d-md-block">
                                    <img src="images/slider/1.jpg" alt="Slider"  width="250" height="500">
                                    <div class="slider-discount-tag">
                                        <p>BARU <br> Terbatas</p>
                                    </div>
                                </div> <!-- slider product image -->
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="slider-product-content">
                                    <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>Kopi</span> Luwak <span>Berkualitas</span></h1>
                                    <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">Kopi Luwak adalah jenis kopi yang unik dan eksklusif yang dikenal karena cara pengolahannya yang tidak konvensional<br> . Proses khusus ini melibatkan hewan kecil yang disebut luwak atau musang civet.  </p>
                                    <a class="main-btn" href="#" data-animation="fadeInUp" data-delay="1.5s">Pelajari Lebih Lengkap <i class="lni-chevron-right"></i></a>
                                </div> <!-- slider product content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div> <!-- single slider -->

                <div class="single-slider">
                        <div class="slider-bg">
                            <div class="row no-gutters align-items-center">
                                <div class="col-lg-4 col-md-5">
                                    <div class="slider-product-image d-none d-md-block">
                                        <img src="images/slider/Best Coffee Instagram Story_20240103_113905_0000.png" alt="Slider">
                                        <div class="slider-discount-tag">
                                            <p>Paling <br> Best</p>
                                        </div>
                                    </div> <!-- slider product image -->
                                </div>
                                <div class="col-lg-8 col-md-7">
                                    <div class="slider-product-content">
                                        <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>Kopi Aceh</span> Paling <span>Di Cari</span></h1>
                                        <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">Kopi Gayo merupakan jenis kopi Arabika yang sudah terkenal di berbagai belahan dunia. Kopi ini di produksi di daerah aceh tengah tepatnya di dataran tinggdecidei gayo. Di daratan tinggi gayo inilah pusat perkebunan dan produksi kopi terbaik di dunia di hasilkan. <br> </p>
                                        <a class="main-btn" href="https://www.nescafe.com/id/artikel/mengenal-karakteristik-kopi-gayo" data-animation="fadeInUp" data-delay="1.5s">Info Singkat <i class="lni-chevron-right"></i></a>
                                    </div> <!-- slider product content -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- container -->
                </div> <!-- single slider -->

                <div class="single-slider">
                        <div class="slider-bg">
                            <div class="row no-gutters align-items-center">
                                <div class="col-lg-4 col-md-5">
                                    <div class="slider-product-image d-none d-md-block">
                                        <img src="images/slider/20231206_210140_0000.png" alt="Slider">
                                        <div class="slider-discount-tag">
                                            <p>INFO<br> PO RA?</p>
                                        </div>
                                    </div> <!-- slider product image -->
                                </div>
                                <div class="col-lg-8 col-md-7">
                                    <div class="slider-product-content">
                                        <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>INFO</span> LEBIH <span>LANJUT</span></h1>
                                        <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">Apa bila ada pertanyaan boleh banget lo tanya mimin :v .</p>
                                        <a class="main-btn" href="#contact" data-animation="fadeInUp" data-delay="1.5s">Contact Us <i class="lni-chevron-right"></i></a>
                                    </div> <!-- slider product content -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- container -->
                </div> <!-- single slider -->
            </div> <!-- slider active -->
            <div class="slider-social">
                <div class="row justify-content-end">
                    <div class="col-lg-7 col-md-6">
                        <ul class="social text-right">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- container fluid -->
    </section>
    <!--====== SLIDER PART ENDS ======-->
   
    <!--====== DISCOUNT PRODUCT PART START ======-->
    
    <section id="discount-product" class="discount-product pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-discount-product mt-30">
                        <div class="product-image">
                            <img src="images/discount-product/kopi2.jpeg" alt="Product">
                        </div> <!-- product image -->
                        <div class="product-content">
                            <h4 class="content-title mb-15">Temukan Kopi Yang Sesuai <br> Dengan Selera Anda</h4>
                            <a href="#">Gas Beli <i class="lni-chevron-right"></i></a>
                        </div> <!-- product content -->
                    </div> <!-- single discount product -->
                </div>
                <div class="col-lg-6">
                    <div class="single-discount-product mt-30">
                        <div class="product-image">
                            <img src="images/discount-product/product-2.jpg" alt="Product">
                        </div> <!-- product image -->
                        <div class="product-content">
                            <h4 class="content-title mb-15">Cerita Singkat Kami <br> Mau Lihat Tim Kami?</h4>
                            <a href="#">Monggo!! <i class="lni-chevron-right"></i></a>
                        </div> <!-- product content -->
                    </div> <!-- single discount product -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== DISCOUNT PRODUCT PART ENDS ======-->
   
    <!--====== PRODUCT PART START ======-->
    
    <section id="product" class="product-area pt-100 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="collection-menu text-center mt-30">
                        <h4 class="collection-tilte">OUR COLLECTION</h4>
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="active" id="v-pills-furniture-tab" data-toggle="pill" href="#v-pills-furniture" role="tab" aria-controls="v-pills-furniture" aria-selected="true">KOPI KAMI</a>
                            
                            
                            
                            
                            
                        </div> <!-- nav -->
                    </div> <!-- collection menu -->
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-furniture" role="tabpanel" aria-labelledby="v-pills-furniture-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">
                                <?php $ambil = $koneksi->query("SELECT * FROM tb_produk WHERE kategori ='luwak' "); ?>
        <?php while ($perproduk = $ambil ->fetch_assoc()) { ?>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="detailproduk.php?id=<?= $perproduk['id_produk']; ?>">
                                                    <img src="admin/images/product/<?= $perproduk['foto_produk'] ; ?>" alt="Product" width="100" height="220"></a>
                                                <div class="product-discount-tag">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="detailproduk.php?id=<?= $perproduk['id_produk']; ?>"><?= $perproduk['nama_produk']; ?></a></h5>
                                                <ul class="rating">
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                    <li><i class="lni-star-filled"></i></li>
                                                </ul>
                                                <span class="regular-price"><?= "Rp. " .number_format($perproduk['harga_produk']);  ?></span>
                                                
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <?php } ?>
                                    
                                    </div>
                                </div> <!-- row -->
                            </div> <!-- product items -->
                        </div> <!-- tab pane -->

                        

                        
                                </div> <!-- row -->
                            </div> <!-- product items -->
                        </div> <!-- tab pane -->
                    </div> <!-- tab content --> 
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PRODUCT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->
    
    

    <!--====== SHOWCASE PART START ======-->
    
    <section id="showcase" class="showcase-area pt-100 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="showcase-title pt-25">
                        <h2 class="title">Showcase</h2>
                    </div> <!-- showcase title -->
                </div> 
                <div class="col-lg-6">
                    <div class="showcase-title pt-25">
                        <p>Didorong oleh minat yang meningkat terhadap kopi, kami membuat situs web penjualan kopi untuk memberikan akses mudah kepada para pecinta kopi. Kami percaya bahwa kopi bukan sekadar minuman, melainkan juga bagian dari gaya hidup. Tujuan kami adalah menyediakan platform untuk menemukan kopi berkualitas tinggi, mempromosikan variasi kopi dari berbagai daerah, dan menciptakan pengalaman berbelanja yang menyenangkan. Melalui situs ini, kami ingin mendukung petani lokal, memberikan informasi detail tentang kopi, dan memperkaya pengalaman kopi pelanggan.</p>
                    </div> <!-- showcase title -->
                </div>
            </div> <!-- row -->
            
                    </div> <!-- showcase active -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== SHOWCASE PART ENDS ======-->

    <!--====== TEAM PART START ======-->
    
    <section id="team" class="team-area pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-25">
                        <h3 class="title mb-15">Our Expert Team</h3>
                        <p>
JADILAH PEMAIN JANGAN JADI PENONTON - Joko Marwiyanto, S.Kom, M.Eng 2023</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-temp text-center mt-30">
                        <div class="team-image">
                            <img src="admin/images/team/naufal.jpeg"
                             alt="Team">
                        </div>
                        <div class="team-content mt-30">
                            <h4 class="title mb-10"><a href="#">Muhammad Naufal Zul Fauzi</a></h4>
                            <span>Belum Punya Pacar</span>
                            <ul class="social mt-15">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="https://www.instagram.com/zulnopal6?igsh=bmU0MDR3bjRneGZy"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single temp -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-temp text-center mt-30">
                        <div class="team-image">
                            <img src="admin/images/team/david1.jpeg"
                             alt="Team">
                        </div>
                        <div class="team-content mt-30">
                            <h4 class="title mb-10"><a href="#">David Fauzan Akbar</a></h4>
                            <span>Consultant</span>
                            <ul class="social mt-15">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single temp -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-temp text-center mt-30">
                        <div class="team-image">
                            <img src="admin/images/team/1.jpeg"
                             alt="Team">
                        </div>
                        <div class="team-content mt-30">
                            <h4 class="title mb-10"><a href="#">Fadli</a></h4>
                            <span>Business Manager</span>
                            <ul class="social mt-15">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single temp -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-temp text-center mt-30">
                        <div class="team-image">
                            <img src="admin/images/team/apep1.jpeg"
                             alt="Team">
                        </div>
                        <div class="team-content mt-30">
                            <h4 class="title mb-10"><a href="#">Afif Rahardi Waspada</a></h4>
                            <span>Marketing Manager</span>
                            <ul class="social mt-15">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single temp -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-temp text-center mt-30">
                        <div class="team-image">
                            <img src="admin/images/team/akbar.jpg"
                             alt="Team">
                        </div>
                        <div class="team-content mt-30">
                            <h4 class="title mb-10"><a href="#">M. Akbar Garudea S</a></h4>
                            <span>Marketing Manager</span>
                            <ul class="social mt-15">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single temp -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== TEAM PART ENDS ======-->

    

    

    <!--====== CONTACT PART START ======-->
    
    <section id="contact" class="contact-area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="contact-title text-center">
                        <h2 class="title">Get In Touch</h2>
                    </div> <!-- contact title -->
                </div>
            </div> <!-- row -->
            <div class="contact-box mt-70">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-info pt-25">
                            <h4 class="info-title">Contact Info</h4>
                            <ul>
                                <li>
                                    <div class="single-info mt-30">
                                        <div class="info-icon">
                                            <i class="lni-phone-handset"></i>
                                        </div>
                                        <div class="info-content">
                                            <p>+88 1234 56789</p>
                                        </div>
                                    </div> <!-- single info -->
                                </li>
                                <li>
                                    <div class="single-info mt-30">
                                        <div class="info-icon">
                                            <i class="lni-envelope"></i>
                                        </div>
                                        <div class="info-content">
                                            <p>contact@yourmail.com</p>
                                        </div>
                                    </div> <!-- single info -->
                                </li>
                                <li>
                                    <div class="single-info mt-30">
                                        <div class="info-icon">
                                            <i class="lni-home"></i>
                                        </div>
                                        <div class="info-content">
                                            <p>203, Envato Labs, Behind Alis Steet,Australia</p>
                                        </div>
                                    </div> <!-- single info -->
                                </li>
                            </ul>
                        </div> <!-- contact info -->
                    </div> 
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <form id="contact-form" action="assets/contact.php" method="post" data-toggle="validator">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single-form form-group">
                                            <input type="text" name="name" placeholder="Enter Your Name" data-error="Name is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- single form -->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-form form-group">
                                            <input type="email" name="email" placeholder="Enter Your Email"  data-error="Valid email is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- single form -->
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single-form form-group">
                                            <textarea name="message" placeholder="Enter Your Message" data-error="Please,leave us a message." required="required"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- single form -->
                                    </div>
                                    <p class="form-message"></p>
                                    <div class="col-lg-12">
                                        <div class="single-form form-group">
                                            <button class="main-btn" type="submit">CONTACT NOW</button>
                                        </div> <!-- single form -->
                                    </div>
                                </div> <!-- row -->
                            </form>
                        </div> <!-- row -->
                    </div> 
                </div> <!-- row -->
            </div> <!-- contact box -->
        </div> <!-- container -->
    </section>
    
    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->
    
    <section id="footer" class="footer-area">
        <div class="container">
            <div class="footer-widget pt-75 pb-120">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-sm-7">
                        <div class="footer-logo mt-40">
                            <a href="#">
                                <img src="admin/images/kopi1.png" alt="Logo">
                            </a>
                            <p class="mt-10">BUATLAH KETERAMPILAN YANG UNIK DAN SKILL YG LUAS 
-Joko Mardiyanto, S. Kom, M. Eng 2023</p>
                            <ul class="footer-social mt-25">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer logo -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5">
                        <div class="footer-link mt-50">
                            <h5 class="f-title">Services</h5>
                            <ul>
                                <li><a href="#">Architechture Design</a></li>
                                <li><a href="#">Interior Design</a></li>
                                <li><a href="#">Autocad Services</a></li>
                                <li><a href="#">Lighting Design</a></li>
                                <li><a href="#">Poster Design</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-5">
                        <div class="footer-link mt-50">
                            <h5 class="f-title">Help</h5>
                            <ul>
                                <li><a href="#">Forum</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-7">
                        <div class="footer-info mt-50">
                            <h5 class="f-title">Contact Info</h5>
                            <ul>
                                <li>
                                    <div class="single-footer-info mt-20">
                                        <span>Phone :</span>
                                        <div class="footer-info-content">
                                            <p>+882 0058 40890</p>
                                            <p>+88123 4567 890</p>
                                        </div>
                                    </div> <!-- single footer info -->
                                </li>
                                <li>
                                    <div class="single-footer-info mt-20">
                                        <span>Email :</span>
                                        <div class="footer-info-content">
                                            <p>zulnopal6@gmail.com</p>
                                            <p>support@yourmail.com</p>
                                        </div>
                                    </div> <!-- single footer info -->
                                </li>
                                <li>
                                    <div class="single-footer-info mt-20">
                                        <span>Address :</span>
                                        <div class="footer-info-content">
                                            <p>Tapen,Hargomulyo,Kokap,KulonProgo</p>
                                        </div>
                                    </div> <!-- single footer info -->
                                </li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
            <div class="footer-copyright pt-15 pb-15">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            <p>Crafted by <a href="https://uideck.com" rel="nofollow">KOPIRENG</a></p>
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!--  footer copyright -->
        </div> <!-- container -->
    </section>
    
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TO TOP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>
    
    <!--====== BACK TO TOP PART ENDS ======-->
    
    
    
    
    
    
    
    
    
    
    <!--====== jquery js ======-->
    <script src="admin/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="admin/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="admin/js/bootstrap.min.js"></script>
    
    
    <!--====== Slick js ======-->
    <script src="admin/js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="admin/js/jquery.magnific-popup.min.js"></script>

    
    <!--====== nav js ======-->
    <script src="admin/js/jquery.nav.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="admin/js/jquery.nice-number.min.js"></script>
    
    <!--====== Main js ======-->
    <script src="admin/js/main.js"></script>
    

</body>

</html>



  