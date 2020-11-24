<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <style>
    body {
        background-image: url(images/wallpaper.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-color: #464646;
        opacity:0.5;
    }
    .text{
        color: white;
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #7b71ff;">
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
  </nav>

<br><br>
<h3 style="text-align:center;" class="text">Selamat Datang pada Laman Web Project</h3> <br>
<p style="text-align:center;" class="text">Silahkan Login untuk melanjutkan</p>
<p style="text-align:center;" class="text">Apabila belum punya akun silahkan <a href="register.php">buat akun.</a></p>

<?php include 'footer.php' ?>