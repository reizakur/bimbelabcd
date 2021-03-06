<!DOCTYPE html>
<html lang="en">
<?php 
include ('sistem/koneksi.php');
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BimbelAbCd Bootstrap Template - Index</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BimbelAbCd - v1.4.0
  * Template URL: https://bootstrapmade.com/BimbelAbCd-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/bimbelabcd.jpeg" alt="">
        <span>BimbelaBcD</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li class="dropdown"><a href="#">Profil</a>
        <ul>  <li><a href="visi.php">Misi</a></li>
          <li><a href="#values">Galeri</a></li></li></ul>
          <li class="dropdown"><a href="#">Pendaftaran</a>
        <ul>  <?php 

$sql=mysqli_query($con,"SELECT * FROM kelas");
if(isset($_POST['qcari'])){
  $qcari = $_POST['qcari'];
$sql=mysqli_query($con,"SELECT * FROM kelas where id_kelas like 
  '%$qcari%' or nama like '%$qcari%'");
}
$nomor = 0;
while ($row= mysqli_fetch_array($sql)){
  $nomor++;
;?>
              <li><a href="kelas.php?id_kelas=<?php echo $row ['id_kelas']?>"><?php echo $row['kelas']?></a></li></li></ul> 
       <?php } ?></UL>
          <li><a class="nav-link scrollto" href="kontak.php">Kontak</a></li>
          <li><a class="getstarted scrollto" href="login_v14/index.php">LOGIN</a></li>
        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


    <!-- ======= Pricing Section ======= -->
 
    <!-- ======= Team Section ======= -->
     
    <!-- ======= Kontak Section ======= -->
    <section id="Kontak" class="Kontak">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          
          <p>Pendaftaran</p>
        </header>

        <div class="row gy-12">

        

          <div class="col-lg-12">
            <form action="forms/Kontak.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Nama Sekolah" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Pilih Kelas" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Alamat" required></textarea>
                </div>
                <div class="col-md-12 ">
                  <input type="email" class="form-control" name="email" placeholder="No HP" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="=Gmail" required>
                </div>


                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Kirim</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Kontak Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>BimbelAbCd</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX Kontak form: https://bootstrapmade.com/BimbelAbCd-bootstrap-startup-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>