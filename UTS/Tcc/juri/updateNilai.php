<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
    include "koneksi.php";

    $id = $_POST['kodePend'];
    $nilai = $_POST['nilai'];

    $sql = "UPDATE pendaftaran SET nilai = '$nilai' WHERE kodePend = $id";
    $hasil = mysqli_query($koneksi, $sql);
    echo "<script>swal.fire('Yuhuuu', 'Berhasil Menambah Nilai', 'success')</script>";
?>
<center>
    <h1>Kembali ke Kelola Akun</h1>
    <a href="juriPage.php"><button class="btn btn-primary">Klik!</button></a>
</center>
</body>
</html>