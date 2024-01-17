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
        <title>Halaman Album</title>
  </head>
  <body>
    <h1>Halaman Album</h1>
    <p>Selamat Datang <b><?=$_SESSION['nama_lengkap']?></b></p>
    
    <ul>
       <li><a href="album.php">Album</a></li>
       <li><a href="logout.php">Logout</a></li>
    </ul>
    <form action="tambah_album.php" method="post">
      <table>
        <tr>
          <td>Nama Album</td>
          <td><input type="text" name="nama_album"></td>
        </tr>
        <tr>
          <td>Deskripsi</td>
          <td><input type="text" name="deskripsi"></td>
        </tr>
        <tr>
          <td>Nama Album</td>
          <td><input type="text" name="nama_album"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="Tambah"></td>
        </tr>
      </table>
    </form>
    
    <table>
      <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Deskripsi</th>
        <th>Tanggal Dibuat</th>
        <th>Aksi</th>
      </tr>
      <?php
          include "koneksi.php";
          session_start();
          $id_user=$_SESSION['id_user'];
          $sql=mysqli_query($conn, "SELECT * FROM album WHERE id_user='$id_user'");
          while($data=mysqli_fetch_array($sql)){
       ?>
          <tr>
            <td><?=$data['id_album']?></td>
            <td><?=$data['nama_album']?></td>
            <td><?=$data['deskripsi']?></td>
            <td><?=$data['tanggal_dibuat']?></td>
            <td>
              <a href="hapus_album.php?id_album=<?=$data['id_album']?>">Hapus</a>
              <a href="edit_album.php?id_album=<?=$data['id_album']?>">Edit</a>
            </td>
          </tr>
      <?php
          }
      ?>
    </table>
  </body>
</html>
    