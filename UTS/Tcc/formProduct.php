<?php
  session_start();

  if(!isset($_SESSION["userName"]) & ($_SESSION["level"]!= 1)){
    header('location:loginPeserta.php');
  }
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
    <link rel="stylesheet" href="css/form.css">
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>TCC Poster Competition</title>
    <link rel="shortcut icon" href="img/1x/logo.png">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
        <div class="container">
            <a href="index.php"><button type="button" class="btn btn-light shadow" id="tombol"><b>TCC 2022</b></button></a>
        </div>
    </nav>
    <!-- end navbar -->
    <!-- jumbotron -->
    <div class="jumbotronProduct">
    </div>
    <h1 class="judul justify-content-center">TCC DESIGN PRODUCT COMPETITION</h1>
    <h6 class="subjudul justify-content-center">Asah kemampuanmu dengan ikuti berbagai perlombaan di Trunojoyo Creative Competition dan menamngkan banyak hadiah</h6>
    <!-- form -->
    <div class="container">
        <h1 class="judul2 justify-content-center">DAFTARKAN TIM</h1>
        <form action="actionProduct.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col">
                <label for="" class="form-label">Nama Tim</label>
                <input type="text" class="form-control" id="namatim" name="namaTim" required>
              </div>
              <div class="col">
                <label for="" class="form-label">Institusi</label>
                <input type="text" class="form-control" id="institusi" name="institusi" required>
              </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="" class="form-label">Nama Ketua</label>
                    <input type="text" class="form-control" id="namaKet" name="namaKet" required>
                    <label for="" class="form-label">Nomor Telephone</label>
                    <input type="number" class="form-control" id="hp" name="hp">
                </div>
                <div class="col">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="" class="form-label">Nama Anggota 1</label>
                    <input type="text" class="form-control" id="namaAgt1" name="namaAgt1" required> 
                </div>
                <div class="col">
                    <label for="" class="form-label">Nama Anggota 2</label>
                    <input type="text" class="form-control" id="namaAgt2" name="namaAgt2" required>
                </div>
            </div>
            <h1 class="judul2 justify-content-center">KUMPULKAN KARYA</h1>
            <label for="" class="form-label">Upload Karya</label>
            <input type="file" class="form-control" id="inputGroupFile01" name="karya" required>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Masukkan Deskripsi" id="floatingTextarea2" style="height: 300px" name="deskripsi" require></textarea>
                <label for="floatingTextarea2">Masukkan Deskripsi</label>
            </div>
                <button type="submit" class="btn btn-primary shadow justify-content-end" id="tombolUIPoster"><b>Next <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor-fill" viewBox="0 0 16 16">
                    <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
                  </svg></b></button>
        </form>
    </div>
    <!-- end form -->
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p>Trunojoyo Creative Competition di selenggarakan oleh Universitas Trunojoyo Madura dan diikuti mahasiswa seluruh indonesia</p>
                    <p class="blue"><b>Bangkalan</b></p>
                </div>
                <div class="col">
                    <p class="blue d-flex justify-content-end"><b>Social Media</b></p>
                    <a href="" class="link d-flex justify-content-end">Instagram</a>
                    <a href="" class="link d-flex justify-content-end">Facebook</a>
                    <a href="" class="link d-flex justify-content-end">Twitter</a>
                    <a href="" class="link d-flex justify-content-end">Tiktok</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer -->
</body>
</html>

