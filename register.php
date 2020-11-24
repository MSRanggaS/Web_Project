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
      echo "Berhasil";
    }else{
      echo "Gagal Entri";
    }

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <style>
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
   </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #7b71ff;">
    <a class="navbar-brand" href="#" style="font-weight:bold;">Register</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    </div>
  </nav>

<div class="container mt-4">
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
</div>

<script type="text/javascript">
  var check= function(){
    if (document.getElementById('password').value ==
       document.getElementById('confirmPassword').value) {
          document.getElementById('message').style.color = 'green';
          document.getElementById('message').innerHTML = 'Password Sesuai';
    } else {
          document.getElementById('message').style.color = 'red';
          document.getElementById('message').innerHTML = 'Password Tidak Sesuai';
    }
  }
</script>


<?php include 'footer.php' ?>
    