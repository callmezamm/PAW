<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];

$sql = "UPDATE tbl_193 set nama_193 = '$nama', email_193 = '$email' where id_193 = $id";
$hasil = mysqli_query($koneksi, $sql);
if(!$hasil){
    echo "gagal";
}else{
    echo"<script type='text/javascript'>alert('Berhasil Mengubah Data');document.location.href='index.php'</script>";
}
?>