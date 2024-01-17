<?php
    include 'koneksi.php';
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST["email"];
    $nama_lengkap=$_POST['nama_lengkap'];
    $alamat=$_POST['alamat'];
    
    $sql=mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password','$email','$nama_lengkap','$alamat')");
    
    header("location:login.php");
?>