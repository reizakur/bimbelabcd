<?php include ('awalan.php');?>
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
                        <li>
                            <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Data Bimbel</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                    <a href="_jadwal.php">Tambah Jadwal</a>
                                </li>
                                <li>
                                    <a href="_galeri.php">Tambah Galeri</a>
                                </li>
                                <li>
                                    <a href="_kelas.php">Tambah Kelas</a>
                                </li>
                            </ul>
                        </li>
                        <li class="active has-sub">
                            <a href="_pendaftaran.php">
                                <i class="fas fa-chart-bar"></i>Data Pendaftaran</a>
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
                     
                           
                        </div>
                    </div>
                </div>
            </header>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
 
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Data User</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>No HP</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 

$sql=mysqli_query($con,"SELECT * FROM pendaftaran");
if(isset($_POST['qcari'])){
  $qcari = $_POST['qcari'];
$sql=mysqli_query($con,"SELECT * FROM pendaftaran where id_pendaftaran like 
  '%$qcari%' or nama like '%$qcari%'");
}
$nomor = 0;
while ($row= mysqli_fetch_array($sql)){
  $nomor++;

  echo"<tr>";?>
                                            <tr>
                                                <td><?php echo $row ['nama']?></td>
                                                <td><?php echo $row ['no_hp']?></td>
                                                <td>
                                        <a href="hapus_user.php?id=<?php echo $row ['id']?>"><button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-trash"></i> Hapus
                                        </button></a></td>
                                            </tr>
<?php } ?>
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
