<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "web_project";

$conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die("Gagal Conn");
    }

?>