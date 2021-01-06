<?php
session_start();
  if(isset($_POST['submit'])){
    include 'conn.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $peran = $_POST['peran'];

    $sql = "SELECT * FROM users WHERE `email` = '$email'";

    $result = mysqli_query($conn,$sql);
    $row = $result->fetch_assoc();
    if(!$row){
      header("Location: reregist.php");
    }else{
      if(password_verify($password,$row['password'])){
        $_SESSION['username'] = $row['namadepan'].' '.$row['namablkng'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['peran'] = $row['peran'];
        if($row['peran']=="Murid"){
          header("Location: home_murid.php");
        }
        else if ($row['peran']=="Guru"){
          header("Location: home_guru.php");
        }
      }
      else{
        die("Password salah !");
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="images/icon.png" type="image/png">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style>
    .btn {
        border: 2px solid black;
        background-color: white;
        color: black;
        padding: 7px 14px;
        font-size: 16px;
        cursor: pointer;
    }
    body {
        width: 100%;
        background-image: url(images/lpbg3_2.png);
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-color: #464646;
    }
    .default {
        border-color: #e7e7e7;
        color: black;
    }
    .default:hover {
        background: #e7e7e7;
    }
    .center {
        margin: 0;
        position: absolute;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
    .tengah{
        padding: 100px 0;
    }
    .tengah-vertikal {
      margin: 0;
      position: relative;
      top: 50%;
      left: 50%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }
    .utuh {
      max-width: 100%;
      height: auto;
    }
   </style>
</head>
<body>

  <!--<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #7b71ff;">
    <a class="navbar-brand" href="#" style="font-weight:bold;">Login</a>
      
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    </div>
  </nav>-->

<?php
include 'conn.php';
?>

  <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 ">
                <img src="images/login.jpg" style="width:500px;" class="utuh tengah-vertikal">
              </div>   
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <form class="user" action="login.php" method="post">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Alamat Email..." required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <hr>
                    <a href="#" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login dengan Google
                    </a>
                    <a href="#" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login dengan Facebook
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="#">Lupa Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.php">Buat akun!</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="index.php"> < Kembali</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

  </div>



  <!--<div class="container mt-4">
    <form action="login.php" method="post">
      <div class="form-group">
        <label for="email">Alamat Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
      </div><br>
      <button type="submit" name="submit" class="btn btn-primary">Login</button>
      <a href="index.php" class="btn default">Back</a>
    </form>
  </div>-->

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>


<footer class="bg-white shadow" style="width: 100% !important;">
 <div class="container p-3 my-auto">
  <div class="copyright text-center my-auto">
    <h6>Institut Teknologi Sepuluh Nopember</h6>
    <h6>Teknologi Informasi</h6>
   </div>
  </div>
</footer>

</html>
    