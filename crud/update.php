<?php
//mengkoneksikan file ke database
include "koneksi.php";

//menangkap data yang di tangkap dari form
$nisn=$_POST['nisn'];
$nama_lengkap=$_POST['nama_lengkap'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$alamat=$_POST['alamat'];

//mengirim data menggunakan query 
mysqli_query($koneksi,"UPDATE siswa SET nama_lengkap='$nama_lengkap',jenis_kelamin='$jenis_kelamin',tanggal_lahir='$tanggal_lahir',
alamat='$alamat'
 WHERE  nisn='$nisn'");

//kembali ke index.php
header("location:index.php");
?>