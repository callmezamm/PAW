<?php
    session_start();

    $data = array(
        array("Muhamad Nizamudin", "200411100193", "Lamongan"), array("Mufidah", "200411100200", "Lamongan"), array("Kim Jisoo", "200411100193", "Nganjuk")
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Daftar Mahasiswa</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <?php
            foreach($data as $row):;
            ?>
            <tbody>
                <tr>
                    <td><?=$row[0]?></td>
                    <td><?=$row[1]?></td>
                    <td><?=$row[2]?></td>
                </tr>
            <?php
            endforeach;
            ?>
            </tbody>
        </table>
        <form action="logout.php" method="POST">
            <button class="btn btn-danger" name="logout">Log Out</button>
        </form>
    </div>
</body>
</html>