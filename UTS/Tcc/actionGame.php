<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
    include "koneksi.php";

    $namaTim = $_POST['namaTim'];
    $institusi = $_POST['institusi'];
    $namaKet = $_POST['namaKet'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];
    $namaAgt1 = $_POST['namaAgt1'];
    $namaAgt2 = $_POST['namaAgt2'];
    $namaAgt3 = $_POST['namaAgt3'];
    $namaAgt4 = $_POST['namaAgt4'];
    $namaAgt5 = $_POST['namaAgt5'];

    $sql = "INSERT INTO pendaftaran VALUES ('null','game','$namaTim','$institusi','$namaKet','$email','$hp','$namaAgt1','$namaAgt2','$namaAgt3','$namaAgt4','$namaAgt5','','','')";
    $hasil = mysqli_query($koneksi, $sql);
    if(!$hasil){
        echo "<script>swal.fire('Waduhhh', 'Gagal Masuk Lomba, Cek Inputanmu!', 'error')</script>";
    }else{
        echo "<script>swal.fire('Yuhuuu', 'Berhasil Daftar Lomba, Semangat Bertanding', 'success')</script>";
    }
?>
    <a href="index.php"><button class="w-100 btn btn-lg btn-primary" type="submit" id="tombol">Kembali Ke Halaman Awal</button></a>
</body>
</html>