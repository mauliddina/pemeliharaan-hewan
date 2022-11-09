<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PEMERIKSAAN HEWAN</title>
</head>
<body>
    <h1>FORM APLIKASI PEMERIKSAAN HEWAN</h1>
    <form action="proses_tambah.php" method="POST">
        <form>
            <fieldset>
            <p>
                <label for="nama"> Nama Pemilik : </label>
                <input type="text" name="nama"/>
</p>
<P>
<label for="jh"> Jenis Hewan : </label>
              <select name="jh">
              <option value="kucing">kucing</option>
              <option value="anjing">anjing</option>
              <option value="ular">ular</option>
</select>
</p>
<p>
<label for="keluhan"> Keluhan : </label>
<input type="text" name="keluhan"/>
</p>
<p>
    <input type="submit" name="kirim" value="kirim"/>
</p>
</fieldset>
</form>
</body>
</html>