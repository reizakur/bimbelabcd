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
              <li><a href="kelas.php?id_kelas=<?php echo $row ['id_kelas']?>"><?php echo $row['kelas']?></a></li></li>
       <?php } ?></ul> 
          <li><a class="nav-link scrollto" href="kontak.php">Contact</a></li>
          <li><a class="getstarted scrollto" href="login_v14/index.php">LOGIN</a></li>
        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header --><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Yuk Mari kita wariskan minat belajar anak usia dini</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Siap Menghadapi Industri 4.0</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content"> 
              <h2>VISI</h2>
              <p>
              Menumbuhkan minat belajar anak sejak usia dini,membimbing,mengarahkan dan memotivasi agar anak mempunyai minat belajar.</p>
              <div class="text-center text-lg-start">
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content"> 
              <h2>MISI</h2>
              <p>
              Membangun gesnerasi muda belajar mandiri sepanjang hayat yang diharapkan mampu belajar dimana pun dan kapan pun.</p>
              <div class="text-center text-lg-start">
              </div>
            </div>
          </div>

        </div>
        
      </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Values</h2>
          <p>Galeri</p>
        </header>

        <div class="row">
        <?php 

$sql=mysqli_query($con,"SELECT * FROM galeri");
if(isset($_POST['qcari'])){
  $qcari = $_POST['qcari'];
$sql=mysqli_query($con,"SELECT * FROM galeri where id_galeri like 
  '%$qcari%' or nama like '%$qcari%'");
}
$nomor = 0;
while ($row= mysqli_fetch_array($sql)){
  $nomor++;

  echo"<tr>";?>
        <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400">
              <img src="admin/images/<?php echo $row['gambar']?>" class="img-fluid" alt="">
              <h3><?php echo $row['judul']?></h3>
             </div>
          </div>

<?php } ?>
        </div>

      </div>

    </section><!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
     
    <!-- ======= Features Section ======= -->
    

    <!-- ======= Services Section ======= -->
   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 

  

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