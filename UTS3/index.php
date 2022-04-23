<?php
include "koneksi.php";

$sql = "SELECT * FROM tbl_warung";
$hasil = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <center>
            <h1>MENAMPILKAN DATA WARUNG</h1>
            <h3>(READ)</h3>
        </center>
        <a href="form.php"><button class="btn btn-primary">Tambah Data</button></a>
        <table class="table table-bordered">
            <thead>
                <tr class="table-dark">
                    <td>ID</td>
                    <td>Nama Barang</td>
                    <td>Harga</td>
                    <td>Status</td>
                    <td>Action</td>
                </tr>
            </thead>
            <?php
                while($row = mysqli_fetch_array($hasil)){
            ?>
            <tbody>
                <tr>
                    <td><?=$row['id']?></td>
                    <td><?=$row['namaBarang']?></td>
                    <td><?=$row['harga']?></td>
                    <td><?=$row['status']?></td>
                    <td>
                        <a href="edit.php?id=<?=$row['id']?>"><button class="btn btn-warning">Edit</button></a>
                        <a href="delete.php?id=<?=$row['id']?>"><button class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
            </tbody>
            <?php
                }
            ?>
        </table>
    </div>
</body>
</html>