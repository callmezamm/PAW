<?php
    include "koneksi.php";
    $id = $_POST['kodeLagu'];
    $judul = $_POST['judulLagu'];
    $penyanyi = $_POST['penyanyi'];
    $tahunRealish = $_POST['tahunRealish'];
    $album = $_POST['album'];

    $sql = "UPDATE tbl_193 set judulLagu = '$judul', penyanyi = '$penyanyi', tahunRealish ='$tahunRealish',album = '$album' where kodeLagu = $id";
    $hasil = mysqli_query($koneksi, $sql);
    header('Location: index.php')
?>