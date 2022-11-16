<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membuat Login</title>
</head>
<center>
<body>
    <h2>Latihan Login Xll RPL SMKN 1 SAYUNG</h2>
    <br/>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan']== "gagal"){
            echo "login gagal! username dan password salah!";
        }else if($_GET['pesan'] == "logout"){
            echo "Anda telah Berhasil logout";
        }else if($_GET['pesan'] == "belum_login"){
            echo "Anda Harus Login Untuk Mengakses Halaman Admin";
        }
 }
?>
<br/>
<br/>
<form method="POST" action="cek_login.php">
        <table>
            <tr>
                <td> username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Masukan username"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="password" placeholder="Masukan password"></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="LOGIN">
        <a href="tambah.php"><input type="button" value="DAFTAR" name="DAFTAR"/><a></td>
    </tr>
</table>
    </form>
</center>
</body>
</html>