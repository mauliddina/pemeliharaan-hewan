<?php
include("koneksi.php");
if( !isset($_GET['id']) ){
    header('Location: hewan.php?');
}
$kode = $_GET['id'];
$sql = "SELECT * FROM tb_pemeriksaan WHERE id=$kode";
$query = mysqli_query($koneksi, $sql);
$db_pemeriksaanhewan= mysqli_fetch_assoc($query);


if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<html>
   <head>
   </head>
   <body>
       <h1>Form Edit Pemeliharaan</h1>
       <form action="proses_edit.php" method="POST">
       <form>
           <fieldset>
            <input type="hidden" name="id" value="<?php echo $db_pemeriksaanhewan['id'] ?>"/>
               <p>
                   <label for="nama">Nama Hewan :</label>
                   <input type="text" name="nama" value="<?php echo $db_pemeriksaanhewan['nama'] ?>"/>
               </p>
               <p>
                   <label for="jh">Jenis Hewan :</label>
                   <select name="jh" value="<?php echo $db_pemeriksaanhewan['jh'] ?>">
                   <option value="kucing">kucing</option>
                   <option value="anjing">anjing</option>
                  <option value="ular">ular</option>
</select>
               </p>
               <p>
                   <label for="keluhan">keluhan :</label>
                   <input type="text"name="keluhan" value="<?php echo $db_pemeriksaanhewan['keluhan'] ?>" />
               </p>
               <p>
                   <input type="submit" value="edit" name="edit" />
               </P>
           </fieldset>
       </form>
   </body>
</html>