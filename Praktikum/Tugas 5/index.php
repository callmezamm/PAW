<?php
    include "koneksi.php";

    $sql = "SELECT * FROM tbl_mahasiswa";
    $hasil = mysqli_query($koneksi,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="container">
        <H1>MODUL VI PHP & MySQL</H1>
        <p>Nama/NRP : Muhamad Nizamudin/200411100193</p>
        <a href="tambah.php"><button class="btn btn-primary">Tambah Data</button></a>
            <br><br><table class="table table-bordered">
                <thead>
                    <tr class="table-dark">
                        <td>ID</td>
                        <td>NIM</td>
                        <td>Nama</td>
                        <td>Email</td>
                        <td>Alamat</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <?php
                    while($row = mysqli_fetch_array($hasil)){
                ?>
                <tbody>
                    <tr>
                        <td><?=$row['id_mhs']?></td>
                        <td><?=$row['nrp']?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['alamat']?></td>
                        <td>
                            <a href="editForm.php?id=<?= $row['id_mhs']?>"><button class="btn btn-warning">Edit</button></a>
                            <a href="hapus.php?id=<?= $row['id_mhs']?>"><button class="btn btn-danger">Delete</button></a>
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