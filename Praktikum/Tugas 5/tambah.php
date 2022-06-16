<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <div class="container">
        <center>
            <h1>MENAMBAH DATA</h1>
            <H3>(CREATE)</H3>
        </center>
        <form action="add.php" method="post">
            <label class="form-label">NIM</label>
            <input type="number" class="form-control" name="nrp">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat"><br><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>