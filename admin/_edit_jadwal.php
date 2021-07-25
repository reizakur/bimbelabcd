<?php include ('awalan.php');?>
<?php $id_jadwal=$_GET['id_jadwal'];
$sql= mysqli_query($con,"SELECT * FROM jadwal WHERE id_jadwal='$id_jadwal'");
     $tampil= mysqli_fetch_array($sql);
    
     $hari = $tampil['hari'];
   $harga = $tampil['harga'];
   $jam = $tampil['jam'];
   $kelas = $tampil['kelas'];
   $id_jadwal = $tampil['id_jadwal'];
?>
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
   
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                   Bimbel aBcD
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                      
                        <li>
                            <a href="_jadwal.php">
                                <i class="fas fa-chart-bar"></i>Tambah Jadwal</a>
                        </li>
                        <li>
                            <a href="_galeri.php">
                                <i class="fas fa-chart-bar"></i>Tambah Galeri</a>
                        </li>
                        <li>
                            <a href="_kelas.php">
                                <i class="fas fa-chart-bar"></i>Tambah Kelas</a>
                        </li>
                      
                        <li>
                            <a href="../index.php">
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
                                <div class="card">
                                    <div class="card-header">Tambah Jadwal</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Tambah Jadwal</h3>
                                        </div>
                                        <hr>
                                        <form method="post" action="update_jadwal.php" >
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Tingkatan :</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select id="select" class="form-control" name="id_kelas" >
                                                    <?php
  $sql=mysqli_query($con,"SELECT * FROM kelas ");
  
    $nomor = 0;
    while ($row= mysqli_fetch_array($sql)){
      $nomor++;
   ?> 
                                                    <option value="<?php echo $row['id_kelas']?>"><?php echo $row['kelas']?></option>
     <?php }?>                                               </select>
                                                </div>
                                            </div>   
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Input Kelas</label>
                                                <input id="cc-pament" name="kelas" type="text" value="<?php echo $kelas ;?>" placeholder="1 - 3 - 5" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Hari :</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select id="select" class="form-control" name="hari" >
                                                     <option value="SENIN-SELASA">SENIN-SELASA</option>
                                                     <option value="SENIN-RABU">SENIN-RABU</option>
                                                     <option value="SENIN-KAMIS">SENIN-KAMIS</option>
                                                     <option value="SENIN-JUMAT">SENIN-JUMAT</option>
                                                     <option value="SENIN-SABTU">SENIN-SABTU</option>
                                                     <option value="SENIN-MINGGU">SENIN-MINGGU</option>
                                                     V
                                                     <option value="SENIN-SELASA-RABU">SENIN-SELASA-RABU</option>
                                                     <option value="SENIN-SELASA-KAMIS">SENIN-SELASA-KAMIS</option>
                                                     <option value="SENIN-SELASA-JUMAT">SENIN-SELASA-JUMAT</option>
                                                     <option value="SENIN-SELASA-SABTU">SENIN-SELASA-SABTU</option>
                                                     <option value="SENIN-SELASA-MINGGU">SENIN-SELASA-MINGGU</option>
                                                     
                                                     <option value="SENIN-RABU-KAMIS">SENIN-RABU-KAMIS</option>
                                                     <option value="SENIN-RABU-JUMAT">SENIN-RABU-JUMAT</option>
                                                     <option value="SENIN-RABU-SABTU">SENIN-RABU-SABTU</option>
                                                     <option value="SENIN-RABU-MINGGU">SENIN-RABU-MINGGU</option>
                                                     <option value="SENIN-KAMIS-JUMAT">SENIN-KAMIS-JUMAT</option>
                                                     <option value="SENIN-KAMIS-SABTU">SENIN-KAMIS-SABTU</option>
                                                     <option value="SENIN-KAMIS-MINGGU">SENIN-KAMIS-MINGGU</option>
                                                     <option value="SENIN-JUMAT-SABTU">SENIN-JUMAT-SABTU</option>
                                                     <option value="SENIN-JUMAT-SABTU">SENIN-JUMAT-MINGGU</option>

                   </select>
                                                </div>
                                            </div>   
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Jam</label>
                                                <input id="cc-pament" name="jam" type="text" placeholder="06:00-12:00" value="<?php echo $jam ;?>" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                 
                                         <input type="text" name="id_jadwal" value="<?php echo $id_jadwal ;?>"></input>
                                         
                                           
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Harga</label>
                                                <
                                                <input id="cc-number" name="harga" type="tel" value="<?php echo $harga ;?>" class="form-control cc-number identified visa"  data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                           
                                                </div>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" name="update_jadwal" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-send fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Simpan Perubahan</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                      
                                    </div>
                                </div>
                            </div>
              <p> </p>   <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Data Jadwal</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr><th>No</th>
                                                <th>Hari</th>
                                                <th>Jam</th>
                                                <th>Harga</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 

$sql=mysqli_query($con,"SELECT * FROM jadwal");
if(isset($_POST['qcari'])){
  $qcari = $_POST['qcari'];
$sql=mysqli_query($con,"SELECT * FROM jadwal where id_jadwal like 
  '%$qcari%' or nama like '%$qcari%'");
}
$nomor = 0;
while ($row= mysqli_fetch_array($sql)){
  $nomor++;

  echo"<tr>";?>
                                            <tr>
                                                <td><?php echo $nomor?></td>
                                                <td><?php echo $row ['hari']?></td>
                                                
                                                <td><?php echo $row ['jam']?></td>
                                                
                                                <td><?php echo $row ['harga']?></td>
                                               
                                                <td>
                                        <a href="hapus_jenis.php?id_jenis=<?php echo $row ['id_jenis']?>"><button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-trash"></i> Hapus
                                        </button></a>  ||                                        <a href="hapus_jenis.php?id_jenis=<?php echo $row ['id_jenis']?>"><button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i> Edit
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
