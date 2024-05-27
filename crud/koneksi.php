<?php
$koneksi = mysqli_connect("localhost","root","","sekolah_akmal");

//conection cek
if (mysqli_connect_error()){
    echo "koneksi anda ke data base gagal" . mysqli_connect_error();
}
?>