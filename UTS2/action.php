<?php
    include "koneksi.php";

    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $noHP = $_POST['noHP'];

    $sql = "INSERT INTO data_pengguna VALUES('null', '$userName','$email', '$noHP')";
    $hasil = mysqli_query($koneksi, $sql);
    echo"<script type='text/javascript'>alert('Berhasil Menambah Data');document.location.href='index.php'</script>";
?>