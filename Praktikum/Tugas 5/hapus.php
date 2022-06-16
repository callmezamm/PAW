<?php
include "koneksi.php";

$id = $_GET['id'];
echo($id);

$sql = "DELETE FROM tbl_mahasiswa WHERE id_mhs = '$id'";
$hasil = mysqli_query($koneksi,$sql);
if(!$hasil){
    echo "gagal";
}else{
    echo"<script type='text/javascript'>alert('Berhasil Menghapus Data');document.location.href='index.php'</script>";
}
?>