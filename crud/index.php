<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <h1> Data Siswa </h1>

    <a href="tambah.php">[+] Tambah Data Siswa</a>
    <br>
    <br>
    <a href="login.php" style="  background-color: red; padding:4px; color:white; border-radius:4px; text-decoration:none;">Log-out</a>
    <br>
    <br>
    <table border="1px">
      <tr>
        <th>No</th>
        <th>NISN</th>
        <th>Nama_Lengkap</th>
        <th>Jenis_Kelamin</th>
        <th>Tanggal_Lahir</th>
        <th>Alamat</th>
        <th>Opsi</th>
      </tr>
      <?php
      include "koneksi.php";

      $no = 1;
      $data = mysqli_query($koneksi,"SELECT * FROM siswa");
      while($d=mysqli_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['nisn']; ?></td>
        <td><?php echo $d['nama_lengkap']; ?></td>
        <td><?php echo $d['jenis_kelamin']; ?></td>
        <td><?php echo $d['tanggal_lahir']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td>
          <a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
          <a href="hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirmdelete()">Hapus</a>
        </td>
        <script>
          function confirmdelete() {
            var result = confirm ("apakah anda ingin menghapus data ini ?");
            return result;
          }
        </script>
      </tr>
      <?php
       }
      ?>
    </table>
    </center>
</body>
</html>