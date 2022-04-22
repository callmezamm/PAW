<?php
    include "koneksi.php";
    $id = $_POST['kodePend'];
    $nilai = $_POST['nilai'];

    $sql = "UPDATE pendaftaran set nilai = '$nilai'  where kodePend = $id";
    $hasil = mysqli_query($koneksi, $sql);
    header('Location: dashboard.php')
?>