<?php
include "koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM tbl_193 WHERE id_193 = $id";
$hasil = mysqli_query($koneksi,$sql);
if(!$hasil){
    echo "gagal";
}else{
    echo"<script type='text/javascript'>alert('Berhasil Menghapus Data');document.location.href='index.php'</script>";
}
?>