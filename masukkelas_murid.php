<?php

    session_start(); 
    include 'conn.php';
    $sesi = $_SESSION['username'];
    $cek = "SELECT * FROM kelas WHERE `user` = '$sesi'";
    $daftarcek = "SELECT * FROM daftarkelas";
    $detail = "SELECT * FROM kelas";

    $detailorang = mysqli_query($conn, $detail); 
    $rows = mysqli_query($conn, $daftarcek);
    $list = mysqli_query($conn, $cek);
    $i = 0;
    $j = 0;
    
    mysqli_close($conn);
    /*INSERT INTO kelas (`user`,`kelas`) VALUES ('$_SESSION[]','$kelas')*/

    if(isset($_POST['buat'])){
      include 'conn.php';
      $name = $_POST['name'];
      $kapasitas = $_POST['kapasitas'];
      $keterangan = $_POST['keterangan'];

      $sql = "INSERT INTO daftarkelas (`namakelas`,`kapasitas`,`keterangan`)
      VALUES ('$name','$kapasitas','$keterangan')";

      if(mysqli_query($conn,$sql)){
        header("Location: masukkelas_murid.php");
      }else{
      echo "Gagal Entri";
      }
    }

    if(isset($_POST['submit'])){
        include 'conn.php';
        $kelas = $_GET['kelas'];
        $join = "INSERT INTO kelas (`user`,`kelass`,`peran`) VALUES ('".$_SESSION['username']."','".$kelas."','".$_SESSION['peran']."')";
        if(mysqli_query($conn,$join)){
            header("Location: masukkelas_murid.php");
            }else{
            echo "Gagal Entri";
            }
    }   

    if(isset($_POST['keluar'])){
      include 'conn.php';
      $namakelas = $_GET['kelas'];
      $orang = $_SESSION['username'];
      $leave = "DELETE FROM `kelas` WHERE `kelass` = '$namakelas' AND `user` = '$orang' ";
      if(mysqli_query($conn,$leave)){
          header("Location: masukkelas_murid.php");
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

  <title>Kelas</title>

  <!-- Custom fonts for this template-->
  <link href="bootstrap_files/all.css" rel="stylesheet" type="text/css">
  <link href="bootstrap_files/css.css" rel="stylesheet">
  <link rel="stylesheet" href="popup.css">
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
        <a class="nav-link" href="home_murid.php">
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->

      <!-- Nav Item - Pages Collapse Menu -->
      

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="masukkelas_murid.php">
          <span>Kelas</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="mapel_murid.php">
          <span>Mata Pelajaran</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="materi_murid.php">
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
                <a class="dropdown-item" href="profile_murid.php">
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
          <h1 class="h3 mb-0 text-gray-800">Kelas</h1>
        </div>

        <div class="card shadow mb-4 ">
            <div class="mx-2">
                <h1 class="h3 ml-3 mt-3 text-gray-800">Buat Kelas</h1>
                <form class="user m-2 p-2"action="masukkelas_murid.php" method="post">
                    <div class="form-group row" style="margin-bottom: 0px;">
                      <div class="form-group col-sm-8">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Kelas" required>
                      </div>
                      <div class="form-group col-sm-4">
                        <input type="text" class="form-control" id="kapasitas" name="kapasitas" placeholder="Kapasitas" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">
                    </div>
                    <button type="submit" name="buat" class="btn btn-success btn-user mr-3">Submit</button>
                    <a href="home.php" class="btn btn-success btn-user">Back</a>
                </form>
            </div>
          </div>

        <div class="container table-responsive">
            <h1 class="h3 ml-3 mt-3 text-gray-800">Daftar Kelas</h1>
            <table class="table table-striped mt-3">
                <tr>
                    <th>No</th>
                    <th>Nama Kelas</th>
                    <th>Kapasitas</th>
                    <th>Keterangan</th>
                    <th> </th>
                    <th> </th>
                </tr>
                <?php foreach($rows as $row) : ?>
                    <tr>
                        <td> <?= ++$i ?>  </td>
                        <td> <?=  $row['namakelas'] ?>  </td>
                        <td> <?=  $row['kapasitas'] ?>  </td>
                        <td> <?=  $row['keterangan'] ?>  </td>
                        <td> <form action="<?php echo 'masukkelas_murid.php?kelas='.$row['namakelas'];?>" method="post">
                            <?php $flag = 0; ?>
                            <?php foreach($list as $lit) : ?>
                                <?php if ($lit['kelass']==$row['namakelas']){ ?>
                                  <button type="submit" name="keluar" class="btn btn-danger btn-user">Leave</button>
                                <?php $flag=1; break; }?>
                              <?php endforeach; ?>
                              <?php if ($flag == 0){ ?>
                                <button type="submit" name="submit" class="btn btn-success btn-user">Join</button>
                              <?php } ?>
                            </form> </td>
                        <td> 
                          <?php $a=$row['namakelas']; ?>
                          <a class="btn btn-success btn-user" href='kelas_murid.php?namakelas=<?= $row['namakelas']; ?>'>Detail</a>
                          <!-- <button class="btn btn-success btn-user" href="kelas.php">Detail</button> -->
                        </td>
                        <!-- onclick="togglePopup()" -->
                        <!-- <td> <img src="uploads/<?=$row['image']?>" alt=""></td> -->
                    </tr>
                <?php endforeach;?>
            </table>
        </div>

        <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Nama kelas </h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <div>
                  <table class="table table-striped mt-3">
                    <tr>
                        <th>No</th>
                        <th>Nama Orang</th>
                        <th>Peran</th>
                    </tr>
                  <?php foreach($detailorang as $det) : ?>
                    <tr>
                        <td> <?= ++$j ?>  </td>
                        <td> <?=  $det['user'] ?>  </td>
                        <td> <?=  $det['peran'] ?>  </td>
                  </tr>
                  <?php endforeach;?>
                  </table>
                </div>
              </div>
              <div class="modal-footer">
                
              </div>
            </div>
          </div>
        </div> 

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

  <script>
    function togglePopup(){
      document.getElementById("detailModal").classList.toggle("active");
    }
  </script>

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
    