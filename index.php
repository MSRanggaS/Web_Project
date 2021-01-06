<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
  <link rel="shortcut icon" href="images/icon.png" type="image/png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="shortcut icon" href="images/icon.png" type="image/png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
     /* body {
        width: 100%;
        background-image: url(images/lpbg3_2.png);
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-color: #464646;
    }
    @media only screen and (min-width: 400px) {
    body { 
        background-image: url('images/lib.jpg'); 
      }
    } */ 
    .text{
        color: black;
        text-align: center;
    }
    /* .container {
      background-image: url("images/lpbg3_2.png");
    } */
    .color{
      background-color: white;
    }
    .bg-ijo{
      background-color: #15ced0;
    }
    .bg-ijo-light{
      background-color: #65e6e7;
    }
    .nengah {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
    }
    .tengah-vertikal {
      margin: 0;
      position: relative;
      top: 50%;
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
    }
    .utuh {
      max-width: 100%;
      height: auto;
    }
    /* .center img {        
      display:block;
      margin-left:auto;
      margin-right:auto;
    } */
  </style>
</head>
<body>

  <!--<nav class="navbar navbar-expand-lg navbar-light topbar mb-4" style="background-color: #7b71ff;">
    <a class="navbar-brand" href="#" style="font-weight:bold;">Web Project</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="navbar-nav ml-auto mr-4 mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="register.php">Register <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Login</a>
      </li>
  </nav>-->

  <nav class="navbar navbar-expand-lg navbar-light bg-white topbar mb-4 static-top shadow">

        <a class="navbar-brand" href="#">
        <img src="images/jembatanpengetahuan.png" style="width:150px;" >
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto mr-4 mt-2 mt-lg-0">

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow active">
              <a class="nav-link" href="register.php" role="button" aria-haspopup="true" aria-expanded="false">
                <span>Register</span>
              </a>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow active">
              <a class="nav-link" href="login.php" role="button" aria-haspopup="true" aria-expanded="false">
                <span>Login</span>
              </a>
            </li>

          </ul>

        </div>

  </nav>

      <div class="container-sm">
        <div class="row p-3 my-3" style="border radius:10px;">
              <div class="col-lg-6">
                <img src="images/lib2.jpg" style="width:500px;" class="utuh">
              </div>   
              <div class="col-lg-6 center">
                <div class="tengah-vertikal">
                  <h3 class="text">Selamat Datang pada Laman Utama Jembatan Pengetahuan</h3> <br>
                  <p class="text">Silahkan Login untuk melanjutkan</p>
                  <p class="text">Apabila belum punya akun silahkan <a href="register.php">buat akun.</a></p>
                </div>
              </div>
        </div>
      </div>

      <div class="container">
        <div class="row color p-3 my-3" style="border radius:10px;">
              <div class="col-xl-4 col-sm-6">
                <div class="card shadow mb-4">
                  <img src="images/card1_2.png" class="card-img-top" alt="Materi">
                  <div class="card-body">
                    <h5 class="card-title">Materi Dari Tenaga Pendidik Berkualitas</h5>
                    <p class="card-text">Pelajar bisa dengan mudah mengakses materi dari Guru Professional sehingga memudahkan dalam kegiatan belajar selama <i>#dirumahsaja</i>.</p>
                  </div>
                </div>
              </div>   
              <div class="col-xl-4 col-sm-6">
              <div class="card shadow mb-4">
                  <img src="images/card2.png" class="card-img-top" alt="Diskusi">
                  <div class="card-body">
                    <h5 class="card-title">Diskusi Dimana Saja Kapan Saja</h5>
                    <p class="card-text">Mudahnya berdiskusi baik dengan guru maupun sesama siswa lain untuk memermudah ilmu untuk dipahami.</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6">
              <div class="card shadow mb-4">
                  <img src="images/card2_2.png" class="card-img-top" alt="Kalangan">
                  <div class="card-body">
                    <h5 class="card-title">Terbuka Untuk Segala Tingkat Pendidikan</h5>
                    <p class="card-text">Tidak terbatas pada pelajar SMA, situs kami dapat digunakan oleh berbagai kalangan pelajar.</p>
                  </div>
                </div>
              </div>
        </div>
      </div>
      
      <!-- style="position:fixed; bottom:0px; width: 100% !important;" -->
<footer class="bg-ijo">
      <div class="container bg-ijo">
        <div class="row" style="border radius:10px;">
          <div class="col-xl-6 col-sm-12 p-5">
            <h4>Tentang kami</h4>
            <p style="margin-bottom: 0px;">Jembatan Pengetahuan merupakan website bagi para pelajar untuk memudahkan kegiatan belajar online. 
            Disini kami menyediakan tempat untuk menanyakan pertanyaan, berdiskusi, dan belajar secara mandiri dengan lebih mudah.
            Kami juga menyediakan tempat bagi para pengajar untuk membagi ilmunya dengan membantu menjawab pertanyaan dan menyediakan materi bagi pelajar.</p>
          </div>
          <div class="col-xl-6 col-sm-12 p-5">
            <div class="ml-5">
              <h4>Kontak</h4>
              <p>HP / WA    : 0895414550084</p>
              <p>E-Mail     : shaladinrangga@gmail.com</p>
              <p>Instagram  : shaladinrangga</p>
              <p>Facebook   : Shaladin Rangga</p>
            </div>
          </div>
          </div>
        </div>
      </div>
</footer>

<footer class="shadow bg-ijo-light">
 <div class="container-sm p-3 my-auto">
  <div class="copyright text-center my-auto">
    <h6>Institut Teknologi Sepuluh Nopember</h6>
    <h6>Teknologi Informasi</h6>
   </div>
  </div>
</footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>