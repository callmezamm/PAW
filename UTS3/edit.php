<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_warung WHERE id=$id";
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
            <h1>MERUBAH BARANG</h1>
            <H3>(UPDATE)</H3>
        </center>
        <form action="update.php" method="post">
            <?php
                while($row = mysqli_fetch_array($hasil)){
            ?>
            <input type="hidden" value="<?=$row['id']?>" name='id'>
            <label class="form-label">Nama Barang</label>
            <input type="text" class="form-control" name="barang" value="<?=$row['namaBarang']?>">
            <label class="form-label">Harga</label>
            <input type="number" class="form-control" name="hargaBarang" value="<?=$row['harga']?>">
            <label class="form-label">Status</label>
            <select class="form-select" aria-label="Default select example" name="statusBarang" value="<?=$row['status']?>">
                <option value="Ready">Ready</option>
                <option value="Not Ready">Not Ready</option>
                <option value="Pre Ready">Pre Order</option>
            </select><br>
            <button type="submit" class="btn btn-primary">Submit</button>
            <?php
                }
            ?>
        </form>
    </div>
</body>
</html>