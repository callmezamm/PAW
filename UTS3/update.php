<?php
include "koneksi.php";

$id = $_POST['id'];
$barang = $_POST['barang'];
$hargaBarang = $_POST['hargaBarang'];
$statusBarang = $_POST['statusBarang'];

$sql="UPDATE tbl_warung set namaBarang = '$barang', harga = '$hargaBarang', status = '$statusBarang' WHERE id = '$id'";
$hasil = mysqli_query($koneksi,$sql);
if(!$hasil){
    echo "gagal";
}else{
    echo"<script type='text/javascript'>alert('Berhasil Merubah Data');document.location.href='index.php'</script>";
}
?>