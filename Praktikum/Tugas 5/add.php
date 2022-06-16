<?php
include "koneksi.php";

$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO tbl_mahasiswa VALUES('null','$nrp', '$nama',
'$email','$alamat')";
$hasil = mysqli_query($koneksi, $sql);
if(!$hasil){
    echo "gagal";
}else{
    echo"<script type='text/javascript'>alert('Berhasil Menambah Data');document.location.href='index.php'</script>";
}
?>