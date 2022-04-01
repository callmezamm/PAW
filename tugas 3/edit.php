<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="style.css">
    <!-- js boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Add Your Playlist</title>
</head>
<body>
    <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM tbl_193 where kodeLagu=$id";
        $hasil = mysqli_query($koneksi, $sql);
        if(!$hasil){
            echo "salah";
        }
    ?>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" id="link" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16">
            <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/>
            <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/>
            <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/>
            </svg>
            Your Playlist
            </a>
        </div>
    </nav><br>
    <div class="container">
        <center>
            <h1>EDIT PLAYLIST PILIHANMU</h1>
            <P>CRUD (CREATE, READ, UPDATE, DELETE)</P>
        </center>
    </div>
    <div class="container">
        <form method="post" action="update.php">
            <?php
                while ($row = mysqli_fetch_array($hasil))
                {
            ?>
            <input type="hidden" name="kodeLagu" value="<?php echo $row['kodeLagu'];?>">
            <div class="mb-3">
                <label class="form-label">Judul Lagu</label>
                <input type="text" name="judulLagu" class="form-control" value="<?php echo $row['judulLagu'];?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Penyanyi</label>
                <input type="text" name="penyanyi" class="form-control" value="<?php echo $row['penyanyi'];?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Tahun Release</label>
                <input type="text" name="tahunRealish" class="form-control" value="<?php echo $row['tahunRealish'];?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Album</label>
                <input type="text" name="album" class="form-control" value="<?php echo $row['album'];?>">
            </div>
            <?php } 
            ?>
            <a href="index.php"><button type="submit" class="btn btn-primary">Submit</button></a>
        </form>
    </div>
</body>
</html>