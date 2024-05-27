<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
</head>
<body>
    <center>
    <h1 style="font-family:tahoma;">Edit Data</h1> 
    <?php
    //koneksi ke database
    include "koneksi.php";

    //mengambil data id via get
     $id=$_GET['id'];

    //buat query untuk menampilkan data
    $data = mysqli_query($koneksi,"SELECT * FROM siswa WHERE id='$id' ");
    while($d = mysqli_fetch_array($data)){
    ?>
    <form action="update.php" method="post">
        <table style="font-size:20px;">
            <tr>
                <td >NISN</td>
                <td>:</td>
                <td><input type="number" name="nisn" value="<?php echo $d['nisn'];?>"></td>
            </tr>
           <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama_lengkap" value="<?php echo $d['nama_lengkap'];?>" ></td>
           </tr>
           <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <select name="jenis_kelamin" id="">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input name="tanggal_lahir" value="<?php echo $d['tanggal_lahir'] ?> " type="hiden"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" value="<?php echo $d['alamat'];?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="Perbaharui Data Siswa" style="box-shadow:5px 5px 5px #A1DD70; background-color:#C3FF93;"></td>
            </tr>
        </table>
        <br>
        <a href="index.php" style="font-family:tahoma; font-size:20px; text-decoration:none; font-weight:bold; text-shadow:5px 5px 5px grey;">[<] Kembali</a>
    </form>
    <?php
         }
           ?>
    </center>
</body>
</html>