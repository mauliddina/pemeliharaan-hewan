<?php
include("koneksi.php");
if(isset($_POST['kirim'])){
    $nama=$_POST['nama'];
    $jh=$_POST['jh'];
    $keluhan=$_POST['keluhan'];

    $sql="INSERT INTO tb_pemeriksaan(nama,jh,keluhan) VALUES ('$nama','$jh','$keluhan')";
    $query=mysqli_query($koneksi,$sql);

}else{
    ("akses dilarang");
}
?>