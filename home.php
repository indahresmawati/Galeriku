<?php
    session_start();
    if(!isset($_SESSION['id_user'])){
      header("location:login.php");
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Halaman Home</title>
  </head>
  <body>
    <h1>Halaman Home</h1>
    <p>Selamat Datang <b><?=$_SESSION['nama_lengkap']?></b></p>
    
    <ul>
       <li><a href="album.php">Album</a></li>
       <li><a href="logout.php">Logout</a></li>
    </ul>
  </body>
</html>
    