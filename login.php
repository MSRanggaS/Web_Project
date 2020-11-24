<?php
session_start();
  if(isset($_POST['submit'])){
    include 'conn.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE `email` = '$email'";

    $result = mysqli_query($conn,$sql);
    $row = $result->fetch_assoc();
    if(!$row){
      header("Location: reregist.php");
    }else{
      if(password_verify($password,$row['password'])){
        $_SESSION['username'] = $row['namadepan'].' '.$row['namablkng'];
        $_SESSION['email'] = $row['email'];
        header("Location: home.php");
      }else{
        die("Password salah !");
      }
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
    <a class="navbar-brand" href="#" style="font-weight:bold;">Login</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    </div>
  </nav>


<?php

include 'conn.php';

?>

<div class="container mt-4">
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
</div>

<?php include 'footer.php' ?>
    