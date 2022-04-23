<?php
include "koneksi.php";

$barang = $_POST['barang'];
$hargaBarang = $_POST['hargaBarang'];
$statusBarang = $_POST['statusBarang'];

$sql = "INSERT INTO tbl_warung VALUES ('null','$barang','$hargaBarang','$statusBarang')";
$hasil = mysqli_query($koneksi,$sql);
if(!$hasil){
    echo "gagal";
}else{
    echo"<script type='text/javascript'>alert('Berhasil Menambah Data');document.location.href='index.php'</script>";
}
?>