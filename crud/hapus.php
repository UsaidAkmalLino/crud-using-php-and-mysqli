<?php
//include database
include "koneksi.php";

//grep variabel id
$id=$_GET['id'];

//query for hapus
$data = mysqli_query($koneksi,"DELETE FROM siswa WHERE id='$id'");

//kembali ke index
header("location:index.php");
?>