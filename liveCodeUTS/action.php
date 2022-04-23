<?php
include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];

$sql = "INSERT INTO tbl_193 VALUES('null','$nama', '$email')";
$hasil = mysqli_query($koneksi, $sql);
if(!$hasil){
    echo "gagal";
}else{
    echo"<script type='text/javascript'>alert('Berhasil Menambah Data');document.location.href='index.php'</script>";
}
?>