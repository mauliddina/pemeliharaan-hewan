<html>
    <head>
</head>
<body>
    <h1>Pemeriksaan Hewan Di RS Sumber Waras</h1>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Nama Pemilik</th>
            <th>Jenis Hewan</th>
            <th>Keluhan</th>
        </tr>
<?php
include("koneksi.php");
$sql='SELECT * FROM tb_pemeriksaan';
$query=mysqli_query($koneksi,$sql);
while($db_pemeriksaanhewan=mysqli_fetch_array($query)){
    echo"<tr>";
    echo"<td>".$db_pemeriksaanhewan['id']."</td>";
    echo"<td>".$db_pemeriksaanhewan['nama']."</td>";
    echo"<td>".$db_pemeriksaanhewan['jh']."</td>";
    echo"<td>".$db_pemeriksaanhewan['keluhan']."</td>";
    echo"<td>";
    echo "<a href='edit.php?id=".$db_pemeriksaanhewan['id']."'>Edit</a>|";
    echo "<a href='hapus.php?id=".$db_pemeriksaanhewan['id']."'>Hapus</a>";
    echo"</td>";
    echo"</tr>";
}
?>
</table>
</body>
</html>