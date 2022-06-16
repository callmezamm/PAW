<?php
include "koneksi.php";

$id = $_POST['id'];
$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$sql = "UPDATE tbl_mahasiswa set nrp = '$nrp', nama='$nama', email = '$email', alamat = '$alamat' where id_mhs = $id";
$hasil = mysqli_query($koneksi, $sql);
// var_dump($hasil);die;
if(!$hasil){
    echo "gagal";
}else{
    echo"<script type='text/javascript'>alert('Berhasil Mengubah Data');document.location.href='index.php'</script>";
}
?>