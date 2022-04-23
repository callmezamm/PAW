<?php
    include "koneksi.php";

    $sql = "SELECT * FROM data_pengguna";
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
    <!-- mycss -->
    <link rel="stylesheet" href="style.css">
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><b>YOUR CRUD</b></a>
    </div>
  </nav>
  <!-- end navbar -->
  <center>
      <div class="container">
          <h1><b>DATA PENGGUNA</b></h1>
          <h3>CRUD APLICATION CREATE READ UPDATE DELETE</h3>
          <h6>DATA PENGGUNA (READ)</h6>
          <a href="form.php"><button class="btn btn-success" id="tambah">Tambah Data</button></a>
        <table class="table table-bordered">
            <thead>
                <tr class="table-light">
                    <td>No</td>
                    <td>ID</td>
                    <td>Nama Pengguna</td>
                    <td>Email</td>
                    <td>No Telephone</td>
                    <td>Action</td>
                </tr>
            </thead>
            <?php
                $num = 1;
                while($row = mysqli_fetch_array($hasil)){
            ?>
            <tbody>
                <td><?=$num?></td>
                <td><?=$row['id_pengguna'] ?></td>
                <td><?=$row['userName'] ?></td>
                <td><?=$row['email'] ?></td>
                <td><?=$row['noHP'] ?></td>
                <td>
                    <a href="edit.php?id=<?=$row['id_pengguna']?>"><button type="button" class="btn btn-warning">EDIT</button></a>
                    <a href="delete.php?id=<?=$row['id_pengguna']?>"><button type="button" class="btn btn-danger">DELETE</button></a>
                </td>
            </tbody>
            <?php 
               $num++; }
            ?>
        </table>
      </div>
  </center>
</div>
</body>
</html>