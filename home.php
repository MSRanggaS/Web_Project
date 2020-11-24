<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #7b71ff;">
    <a class="navbar-brand" href="#" style="font-weight:bold;">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="navbar-nav ml-auto mr-4 mt-2 mt-lg-0" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?= $_SESSION['username'] ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#" ><img src="images/pp" style="border-radius:50%;width:30px;" alt="Profile Picture" class="mr-2"><?= $_SESSION['email'] ?></a>
            <a class="dropdown-item" href="#">Edit Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Log Out</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0 intro">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" >
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit" >Search</button>
      </form>
    </div>
  </nav>


    <?= $_SESSION['username'] ?>
<?php include 'footer.php' ?>