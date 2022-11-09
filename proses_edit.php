<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $kode=$_POST['id'];
    $nama=$_POST['nama'];
	$jh=$_POST['jh'];
    $keluhan=$_POST['keluhan'];

$sql = "UPDATE tb_pemeriksaan SET nama='$nama', jh='$jh', keluhan='$keluhan' WHERE id=$kode";
$query= mysqli_query($koneksi,$sql);

if($query){
    header('Location: hewan.php');
}else{
    die ("gagal mengedit");
}}
else{
    die("akses dilarang");
}
?>