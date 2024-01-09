<?php 

    // KONEKSI KE DATABASE
    session_start();
    $koneksi = new mysqli("localhost", "root", "","tokok");

    if (!isset($_SESSION['admin'])) {
        echo "<script>alert('Anda Harus Login Terlebih Dahulu');</script>";
        echo "<script>location = 'login.php';</script>";
    }

 ?>







<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <title>KOPIRENG-Admin</title>

    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">

        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="halaman_utama.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="halaman_utama.php?halaman=produk">
                                <i class="fas fa-chart-bar"></i>Produk</a>
                        </li>
                        <li>
                            <a href="halaman_utama.php?halaman=pembelian">
                                <i class="fas fa-table"></i>Pembelian</a>
                        </li>
                        <li>
                            <a href="halaman_utama.php?halaman=pelanggan">
                                <i class="far fa-check-square"></i>Pelanggan</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>


        <!--SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>

                        <li>
                            <a href="index.php?halaman=produk">
                                <i class="fas fa-archive"></i>Produk</a>
                        </li>
                        <li>
                            <a href="index.php?halaman=pembelian">
                                <i class="fas fa-shopping-cart"></i>Pembelian</a>
                        </li>
                        <li>
                            <a href="index.php?halaman=pelanggan">
                                <i class="fas fa-users"></i>Pelanggan</a>
                        </li>
                        
                        
                        
                            
                    </ul>
                </nav>
            </div>
        </aside>
        <!--SIDEBAR-->

        <div class="page-container">
            <!-- HEADER-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                            
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-06.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['admin']['nama'] ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-06.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $_SESSION['admin']['nama'] ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $_SESSION['admin']['username'] ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="index.php?halaman=logout">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!--HEADER-->

            <div class="main-content">
                <?php 
                    if (isset($_GET['halaman'])) {
                        if ($_GET['halaman'] == "produk") {
                            include 'produk.php';
                        } else if($_GET['halaman'] == "pembelian"){
                            include 'pembelian.php';
                        } else if($_GET['halaman'] == "pelanggan"){
                            include 'pelanggan.php';
                        } else if($_GET['halaman'] == "detail"){
                            include 'detail.php';
                        } else if($_GET['halaman'] == "tambahproduk"){
                            include 'tambahproduk.php';
                        } else if($_GET['halaman'] == "hapusproduk"){
                            include 'hapusproduk.php';
                        } else if($_GET['halaman'] == "ubahproduk"){
                            include 'ubahproduk.php';
                        } else if($_GET['halaman'] == "logout"){
                            include 'logout.php';
                        } else if ($_GET['halaman'] == "pembayaran") {
                            include 'pembayaran.php';
                        }
                    } else {
                        include 'home.php';
                    }

                 ?>
            </div>
        </div>
    </div>


    <script src="vendor/jquery-3.2.1.min.js"></script>

    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>

    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <script src="js/main_1.js"></script>

</body>

</html>