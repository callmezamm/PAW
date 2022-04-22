<?php
    include "koneksi.php";

    $judul = $_POST['judulLagu'];
    $penyanyi = $_POST['penyanyi'];
    $tahunRealish = $_POST['tahunRealish'];
    $album = $_POST['album'];

    $sql = "INSERT INTO tbl_193 VALUES('kode','uiux', '$penyanyi', '$tahunRealish', '$album')";
    $hasil = mysqli_query($koneksi, $sql);
    header('Location: index.php')
?>