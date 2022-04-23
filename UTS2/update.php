<?php
    include "koneksi.php";

    $id = $_POST['id_pengguna'];
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $noHP = $_POST['noHP'];

    $sql = "UPDATE data_pengguna set userName = '$userName', email = '$email', noHP = '$noHP' WHERE id_pengguna = $id";
    $hasil = mysqli_query($koneksi, $sql);
    echo"<script type='text/javascript'>alert('Berhasil Merubah Data');document.location.href='index.php'</script>";
?>