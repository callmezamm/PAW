<?php
    include 'koneksi.php';

    $id=$_GET['id'];

    $sql="DELETE FROM tbl_193 WHERE kodeLagu = $id";
    $hasil = mysqli_query($koneksi, $sql);
    header('Location: index.php')
?>