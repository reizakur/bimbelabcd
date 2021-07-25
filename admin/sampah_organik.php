<!DOCTYPE html>
<html lang="en">
<?php include ('../sistem/koneksi.php'); ?>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
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
                            <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Data Sampah</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.php">Semua Data Sampah</a>
                                </li>
                                <li>
                                    <a href="sampah_organik.php">Data Sampah Organik</a>
                                </li>
                                <li>
                                    <a href="sampah_anorganik.php">Data Sampah Anorganik</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="data_user.php">
                                <i class="fas fa-chart-bar"></i>Data user</a>
                        </li>
                      
                        <li>
                            <a href="tambah_jenis.php">
                                <i class="fas fa-chart-bar"></i>Tambah Jenis</a>
                        </li>
                        <li>
                            <a href="../index.html">
                                <i class="far fa-check-square"></i>Keluar</a>
                        </li>
                       </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    Bank Sampah Asri
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Data Sampah</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                    <a href="index.php">Semua Data Sampah</a>
                                </li>
                                <li>
                                    <a href="sampah_organik.php">Data Sampah Organik</a>
                                </li>
                                <li>
                                    <a href="sampah_anorganik.php">Data Sampah Anorganik</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="data_user.php">
                                <i class="fas fa-chart-bar"></i>Data user</a>
                        </li>
                      
                        <li>
                            <a href="tambah_jenis.php">
                                <i class="fas fa-chart-bar"></i>Tambah Jenis</a>
                        </li>
                        <li>
                            <a href="../index.html">
                                <i class="far fa-check-square"></i>Keluar</a>
                        </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                        <form class="form-header" action="index.php" method="POST">
                                <input class="au-input au-input--xl" type="text" name="qcari" placeholder="Cari Berdasarkan Tipe Sampah" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
 
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Data Organik</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>Nama User</th>
                                                <th>Nama Sampah</th>
                                                <th>Berat</th>
                                                <th>Harga</th>
                                                <th>Status Pemsanan</th>
                                                <th>Aksi</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
  $sql=mysqli_query($con,"SELECT * FROM sampah  WHERE sampah.id_jenis = '1'");
  
    $nomor = 0;
    while ($row= mysqli_fetch_array($sql)){
      $nomor++;
   ?> 
                                            <tr>
                                                <td><?php echo $nomor ?></td>
                                                <td><?php echo $row ['nama']?></td>
                                                <td><?php echo $row ['nama_jenis']?></td>
                                                <td><?php echo $row ['berat']?>Kg</td>
                                                <td><?php echo $row ['harga']?></td>
                                                <?php if ($row ['status']=='0'){?>
                                                <td> Belum Terjual</td>
<?php }else{?>  
  <td>               <img src="../img/sold.png" style="
    height: 50px;
"></img> </td>
                
              <?php } ?>
                                                <td><form action="bayar.php" method="post" ><input type="hidden" value="<?php echo $row ['id_sampah']?>" name="id_sampah" ><input type="hidden" value="1" name="status" ><button type="submit" name="bayar" class="btn btn-success btn-sm">
                                            <i class="fa fa-credit-card"></i> Sudah di Bayar
                                        </button></form></td>  <td><a href="hapus_sampah.php?id_sampah=<?php echo $row ['id_sampah']?>"><button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-trash"></i> Hapus
                                        </button></a></td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
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

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
