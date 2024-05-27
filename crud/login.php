<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Log-in</title>
</head>
<body>
    <center>
    
    <?php
    // pesan password salah
    if (isset($_GET['pesan'])){
        if ($_GET['pesan'] == "gagal"){
            echo "password dan username yang anda masukan salah !!!";
        }
    }
    ?>
    <form action="cek_login.php" method="post">
        <h1>Masukan Username dan Password yang anda miliki</h1>
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input placeholder="Gent***" type="text" name="username" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input placeholder="123***" type="password" name="password" required></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="login"></td>
        </tr>
    </table>
    </form>
    </center>
</body>
</html>