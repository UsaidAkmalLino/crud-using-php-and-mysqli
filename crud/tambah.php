<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>

<body>
    <center>
    <h1 style="font-family:tahoma; font-weight:bold; ">Tambah Data Siswa</h1>
    <form action="tambah_aksi.php" method="post" style="font-size:20px;">
        <table>
          <tr>
            <td>NISN</td>
            <td>:</td>
            <td><input type="number" name="nisn" required></td>
          </tr>
          <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama_lengkap" required></td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <select name="jenis_kelamin" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </td>
          </tr>
          <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal_lahir" required></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" required></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="simpan data siswa baru" style="box-shadow:5px 5px 5px #A1DD70; background-color:#C3FF93; "></td>
          </tr>
        </table>
        <br>
        <a href="index.php" style="text-decoration:none; font-family:tahoma; font-weight:bold; font-size:20px; text-shadow:5px 5px 5px gray;">[<] Kembali</a>
    </form>
    </center>
</body>

</html>