<?php
include "koneksi.php";
$id = $_GET['id'];

$sql = "SELECT * FROM tbl_193 where id_193 = $id";
$hasil = mysqli_query($koneksi,$sql);
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
            <h1>MENGUBAH BARANG</h1>
            <H3>(UPDATE)</H3>
        </center>
        <form action="update.php" method="post">
            <?php
                while($row = mysqli_fetch_array($hasil)){
            ?>
            <input type="hidden" name="id" value="<?=$row['id_193']?>">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" value="<?=$row['nama_193']?>">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="<?=$row['email_193']?>"><br>
            <button type="submit" class="btn btn-primary">Submit</button>
            <?php
                }
            ?>
        </form>
    </div>
</body>
</html>