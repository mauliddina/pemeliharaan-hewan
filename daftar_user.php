<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
</head>
<body>
    <center>
    <h2>Daftar User Login</h2>
    <br/>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "sukses"){
            echo "PENDAFTARAN BERHASIL-!! SILAHKAN LOGIN-!!";
        }else if($_GET['pesan'] == "gagal"){
            echo "GAGAL MENDAFTAR-!!";
        }
    }
    ?>
    <br/>
    <br/>
    <form action="proses_daftar.php" method="POST">
    <form>
    
        <table>
            <p>
                <label for="username">Username : </label>
                <input type="text" name="username" placeholder="Buat Username">
            </p>
            <p>
                <label for="password">Password : </label>
                <input type="password" name="password" placeholder="Buat Password">
            </p>
            <p>
                <input type="submit" name="daftar" value="Daftar">
            </p>
        </table>

</form>
</center>
</body>
</html>