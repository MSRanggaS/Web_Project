<?php

  if(isset($_POST['submit'])){
    include 'conn.php';
    $email = $_POST['email'];
    $namadepan = $_POST['namadepan'];
    $namablkng = $_POST['namablkng'];
    $peran = $_POST['peran'];
    $password = password_hash($_POST['password'],PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (`email`,`namadepan`,`namablkng`,`peran`,`password`)
    VALUES ('$email','$namadepan','$namablkng','$peran','$password')";

    if(mysqli_query($conn,$sql)){
      header("Location: login.php");
    }else{
      echo "Gagal Entri";
    }

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="images/icon.png" type="image/png">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  
  <style>
    body {
        width: 100%;
        background-image: url(images/lpbg3_2.png);
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-color: #464646;
    }
    .btn {
        border: 2px solid black;
        background-color: white;
        color: black;
        padding: 7px 14px;
        font-size: 16px;
        cursor: pointer;
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
    .nengah {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
    }
    .tengah{
        padding: 100px 0;
    }.tengah-vertikal {
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
    <a class="navbar-brand" href="#" style="font-weight:bold;">Register</a>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    </div>
  </nav>-->

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-6">
            <img src="images/register.jpg" style="width:500px;" class="utuh tengah-vertikal">
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
              </div>
              <form class="user" action="register.php" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" name="namadepan" placeholder="Nama Depan" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" name="namablkng" placeholder="Nama Belakang" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email" placeholder="Alamat Email" required>
                </div>
                <div class="form-group responsive">
                  <p>Peran</p>
                  <input type="radio" id="murid" name="peran" value="Murid" required>
                  <label for="murid"> Murid</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" id="murid" name="peran" value="Guru" required>
                  <label for="murid"> Guru</label>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password" onkeyup='check();' required>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Konfirmasi Password" name="confirmPassword" onkeyup='check();' required>
                  </div>
                  <small id="passHelp" class="form-text text-muted ml-3">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji. </small>
                </div>
                <div class="mb-3 ml-3">
                  <span id="message"></span>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                  Register Akun
                </button>
                <hr>
                <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register dengan Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register dengan Facebook
                </a>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="#">Lupa Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Sudah punya akun? Login!</a>
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
  <form action="register.php" method="post">
    <div class="form-group">
      <label for="email">Alamat Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="Nama">Nama</label><br>
      <div class="form-row">
        <div class="col">
          <input type="text" class="form-control" id="namadepan" name="namadepan" placeholder="Nama Depan">
        </div>
        <div class="col">
          <input type="text" class="form-control" id="namablkng" name="namablkng" placeholder="Nama Belakang">
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="my-1 mr-2" for="peran">Peran</label>
      <select class="custom-select my-1 mr-sm-2" id="peran" name="peran">
        <option selected>Pilih Peran</option>
        <option value="1">Murid</option>
        <option value="2">Guru</option>
      </select>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" onkeyup='check();' > 
      <small id="passHelp" class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji. </small>
    </div>
    <div class="form-group">
      <label for="confirmPassword">Konfirmasi Password</label>
      <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Password" onkeyup='check();' > 
      <small id="passHelp" class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji. </small>
      <span id="message"></span>
    </div>
    <br>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <a href="index.php" class="btn default">Back</a>
  </form>
</div>-->

<script type="text/javascript">
  var check= function(){
    if (document.getElementById('exampleInputPassword').value ==
       document.getElementById('exampleRepeatPassword').value) {
          document.getElementById('message').style.color = 'green';
          document.getElementById('message').innerHTML = 'Password Sesuai';
    } else {
          document.getElementById('message').style.color = 'red';
          document.getElementById('message').innerHTML = 'Password Tidak Sesuai';
    }
  }
</script>

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
