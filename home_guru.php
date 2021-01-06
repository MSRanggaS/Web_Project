<?php
  session_start(); 
  include 'conn.php';
  $pitakonan = "SELECT * FROM daftar_pertanyaan ORDER BY tgl_post DESC";
  $wangsulan = "SELECT * FROM daftar_jawaban";
  $date = "SELECT tgl_post FROM daftar_pertanyaan";

  $rows = mysqli_query($conn, $pitakonan);
  $baris = mysqli_query($conn, $wangsulan);
  $j = 0;
  mysqli_close($conn);

  if(isset($_POST['submit'])){
    include 'conn.php';
    $pertanyaan = $_POST['pertanyaan'];

    $sql = "INSERT INTO daftar_pertanyaan (`pertanyaan`,`penanya`)
    VALUES ('".$pertanyaan."','".$_SESSION['username']."')";

    if(mysqli_query($conn,$sql)){
      echo "Berhasil";
    }else{
      echo "Gagal Entri";
    }

  }

  if(isset($_POST['jawab'])){
    include 'conn.php';
    $idPertanyaan = $_GET['idPertanyaan'];
    $jawaban = $_POST['jawaban'];
    $join = "INSERT INTO daftar_jawaban (`penjawab`,`jawaban`,`id_pertanyaan`) VALUES ('".$_SESSION['username']."','".$jawaban."','".$idPertanyaan."')";
    
    if(mysqli_query($conn,$join)){
        header("Location: home_guru.php");
        }else{
        echo "Gagal Entri";
        }
}

?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home</title>

  <!-- Custom fonts for this template-->
  <link href="bootstrap_files/all.css" rel="stylesheet" type="text/css">
  <link href="bootstrap_files/css.css" rel="stylesheet">
  <link rel="shortcut icon" href="images/icon.png" type="image/png">

  <!-- Custom styles for this template-->
  <link href="bootstrap_files/sb-admin-2.css" rel="stylesheet">

<style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}
  .res-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
  }
  .nengah {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
  }
  .tengah{
        padding: 5px 0;
  }
  /* Floating column for inputs: 75% width */
  .res-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
  }
</style></head>

<body id="page-top" data-new-gr-c-s-check-loaded="8.867.0" class="sidebar-toggled">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion toggled" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3">Jembatan Pengetahuan</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="home_guru.php">
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->

      <!-- Nav Item - Pages Collapse Menu -->
      

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="masukkelas_guru.php">
          <span>Kelas</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="mapel_guru.php">
          <span>Mata Pelajaran</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="materi_guru.php">
          <span>Materi</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <a class="mx-my-1 px-py-1 no-arrow" style="color:white;" id="sidebarToggle"> Selengkapnya </a>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link no-arrow d-md-none rounded-circle mr-3" style="padding-right: 0px;padding-left: 0px;">
            <img src="images/menu.png" alt="Menu" style="width:25px;">
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-success" type="button">
                    <a>Search</a>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-success" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <strong>Pesan</strong>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Pesan Diterima
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  Belum ada pesan terbaru
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?= $_SESSION['username'] ?> </span>
                <img class="img-profile rounded-circle" src="bootstrap_files/60x60.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profile_guru.php">
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                <?= $_SESSION['peran'] ?>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Home</h1>
          </div>

          <?php foreach($rows as $row) :?> 
            
            <div class="card shadow mb-4 mx-1" id="header<?= $j ?>">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-success"> <?=  $row['penanya'] ?> </h6>
                <?php if($row['urgent']=="Urgent") :?>
                  <h6 class="m-0 font-weight-bold text-danger" style="text-align:left;"> Urgent </h6>
                <?php endif; ?>
                <h6 class="m-0 font-weight-bold text-success"> 
                  <?php  
                    $tanggal = date('j F Y', strtotime($row['tgl_post']));
                    echo $tanggal; 
                  ?> 
                </h6>
              </div>
              <!-- Card Body -->
              <div class="card-body">
                <a class="mb-3"> <?=  $row['mata_pelajaran'] ?> </a>
                <p class="h5 mt-3 font-weight-bold text-gray-800"> <?=  $row['pertanyaan'] ?> </p>
                <hr class="divider">
                <form class="form-group row" style="margin-bottom: 0px;" action="<?php echo 'home_guru.php?idPertanyaan='.$row['id_pertanyaan'];?>#header<?= $j ?>" method="post">
                    <div class="col-sm-8 col-md-10 mb-3"  style="margin-bottom:0px;">
                      <input type="text" class="form-control form-control-user" id="jawaban<?= $j ?>" name="jawaban" placeholder="Ajukan Jawaban" required>
                    </div>
                    <div class="col-sm-4 col-md-2">
                      <button type="submit" name="jawab" class="btn btn-success btn-user btn-block" id="button<?= $j ?>">
                         Jawab
                      </button>
                    </div>
                </form>
                <div class="form-group row" id="output<?= $j ?>" style="margin-bottom: 0px;">
                  <div class="card-body" style="padding-top: 0px;padding-bottom: 0px;">
                    <?php foreach($baris as $bari) :?>
                     <?php if($bari["id_pertanyaan"]==$row["id_pertanyaan"]) : ?>
                      <h6 class="mt-2 font-weight-bold text-success"> 
                        <?=  $bari['penjawab'] ?> &nbsp;
                        <a class="h6 mb-0 text-gray-800"> <?= $bari["jawaban"]; ?></a>
                      </h6>
                     <?php endif; ?>
                    <?php endforeach;?>
                  </div>
                </div>
              </div>
            </div>
            
        <?php $j++; endforeach;?>
           

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Institut Teknologi Sepuluh Nopember</span><br>
            <span>Teknologi Informasi</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top" style="display: none;">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apa anda yakin?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Tekan tombol "Logout" berikut bila iya.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-success" href="index.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="bootstrap_files/jquery.js"></script>
  <script src="bootstrap_files/bootstrap.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="bootstrap_files/jquery_002.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="bootstrap_files/sb-admin-2.js"></script>

  <!-- Page level plugins -->
  <script src="bootstrap_files/Chart.js"></script>

  <!-- Page level custom scripts -->
  <script src="bootstrap_files/chart-area-demo.js"></script>
  <script src="bootstrap_files/chart-pie-demo.js"></script>




</body></html>