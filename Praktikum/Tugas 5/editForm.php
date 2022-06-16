<?php
    include "koneksi.php";
    $id = $_GET["id"];

    $sql = "SELECT * FROM tbl_mahasiswa WHERE id_mhs = '$id'";
    $hasil = mysqli_query($koneksi,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <center>
            <h1>MENGUBAH DATA MAHASISWA</h1>
            <H3>(UPDATE)</H3>
        </center>
        <form action="edit.php" method="post">
            <?php
                while($row = mysqli_fetch_array($hasil)){
            ?>
            <input type="hidden" name="id" value="<?=$row['id_mhs']?>">
            <label class="form-label">NIM</label>
            <input type="number" class="form-control" name="nrp" value="<?= $row['nrp']?>">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" value="<?= $row['nama']?>">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="<?= $row['email']?>">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat" value="<?= $row['alamat']?>"><br><br>
            <button type="submit" class="btn btn-primary">Submit</button>
            <?php
                }
            ?>
        </form>
    </div>
</body>
</html>