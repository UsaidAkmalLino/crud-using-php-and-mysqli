<?php
//start session
session_start();

//include koneksi
include "koneksi.php";

//menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

//menyeleksi data dari admin yang sesuai dengan password dan username
$data = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username' AND password='$password' ");

//menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

//memeriksa data apakah data ada 
if ($cek > 0){
//jika ditemukan
$_SESSION['username'] = $username;
$_SESSION['password'] = 'login';

//lanjut ke index ketika berhasil login
header("location:index.php");
}
//jika gagal tampilkan pesan
else {
    header("location:login.php?pesan=gagal");
}
?>
