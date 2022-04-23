    <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM data_pengguna where id_pengguna=$id";
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
        <!-- my css -->
        <link rel="stylesheet" href="style.css">
        <!-- js bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
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
          <h6>MERUBAH DATA PENGGUNA (UPDATE)</h6><br>
    </div>
    </center>
    <div class="container">
        <form action="update.php" method="post">
          <?php
                while ($row = mysqli_fetch_array($hasil))
                {
            ?>
            <input type="hidden" name="id_pengguna" value="<?php echo $row['id_pengguna'];?>">
            <label for="exampleInputEmail1" class="form-label">Nama Pengguna</label>
            <input type="text" class="form-control" value="<?php echo $row['userName'];?>" name="userName"><br>
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" class="form-control" value="<?php echo $row['email'];?>" name="email"><br>
            <label for="exampleInputEmail1" class="form-label">No Telephone</label>
            <input type="text" class="form-control" value="<?php echo $row['noHP'];?>" name="noHP"><br>

            <a href="index.php"><button type="submit" class="btn btn-warning">UPDATE</button></a>
            <?php
                }
            ?>
        </form>
    </div>
</body>
</html>