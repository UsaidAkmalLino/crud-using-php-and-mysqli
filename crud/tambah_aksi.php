<?php
//menyambungkan ke database
include "koneksi.php";

//mengirim data dari variabel
$nisn= $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat= $_POST['alamat'];

//mengrim query via mysqli_query
$data = mysqli_query($koneksi,"INSERT INTO siswa (nisn,nama_lengkap,jenis_kelamin,tanggal_lahir,alamat) VALUE ('$nisn','$nama_lengkap','$jenis_kelamin','$tanggal_lahir','$alamat')");

//kembali ke halaman index.php
header("location:index.php");
?>