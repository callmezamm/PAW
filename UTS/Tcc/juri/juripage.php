<?php
  session_start();

  if(!isset($_SESSION["namaLengkap"]) || ($_SESSION["level"]!= 2)){
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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/juri.css">
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Welcome To Trunojoyo Creative Competition | Judge Page</title>
    <link rel="shortcut icon" href="../img/1x/logo.png">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
        <div class="container">
            <button type="button" class="btn btn-light shadow" id="tombol"><b>TCC 2022</b></button>
            <div class="hstack gap-3">
              <h4 class="justify-content-end text-light">Selamat Datang <?= $_SESSION['namaLengkap'];?></h4>
              <a href="logoutJuri.php"><button type="button" class="btn btn-danger shadow" id="tombol">Keluar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor-fill" viewBox="0 0 16 16">
                      <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
                    </svg></button></a>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
    <!-- jumbotron -->
    <div class="juritron">
    </div>
    <h1 class="judul">TRUNOJOYO CREATIVE COMPETITION</h1>
    <h6 class="subjudul">Berikan penilaian seobjektif mungkin!, semangat menilai</h6>
    <!-- end jumbotron -->
    <!-- content -->
    <section id="content">
        <div class="container content">
            <div class="row">
              <center>
                <h1><b>PILIH UNTUK MENILAI KOMPETISI MU</b></h1>
              </center>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                        <center>
                            <img src="../img/ui logo.png" alt="UI/UX Logo" class="logo">
                            <h5 class="card-title"><b> UI/UX Design Competition</b></h5>
                            <p class="card-text">Kompetisi desain user interface dan user experient dengan hadiah jutaan rupiah</p>
                            <a href="nilaiUiux.php">
                              <button type="button" class="btn btn-primary shadow justify-content-end" id="tombol">Daftar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor-fill" viewBox="0 0 16 16">
                                <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
                              </svg></button>
                            </a>
                        </center>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                        <center>
                            <img src="../img/Poster.png" alt="UI/UX Logo" class="logo">
                            <h5 class="card-title"><b>Poster Design Competition</b></h5>
                            <p class="card-text">Kompetisi desain poster tema teknologi dengan hadiah jutaan rupiah</p>
                            <a href="nilaiPoster.php">
                              <button type="button" class="btn btn-primary shadow justify-content-end" id="tombol">Daftar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor-fill" viewBox="0 0 16 16">
                                <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
                              </svg></button>
                            </a>
                        </center>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                        <center>
                            <img src="../img/product.png" alt="Product Image" class="logo">
                            <h5 class="card-title"><b>Design Product</b></h5>
                            <p class="card-text">Kompetisi Design Product dengan hadiah jutaan rupiah.</p>
                            <a href="nilaiProduct.php">
                              <button type="button" class="btn btn-primary shadow justify-content-end" id="tombol">Daftar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor-fill" viewBox="0 0 16 16">
                                <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
                              </svg></button>
                            </a>
                        </center>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section>
    <section id="leaderboard">
    <?php
      include 'koneksi.php';

      $poster="SELECT namaTim, kategori, institusi, nilai FROM pendaftaran WHERE kategori = 'poster' order by nilai desc";
      $resultp = mysqli_query($koneksi, $poster);

      $uiux ="SELECT namaTim, kategori, institusi, nilai FROM pendaftaran WHERE kategori = 'uiux' order by nilai desc";
      $resultu = mysqli_query($koneksi, $uiux);   
      
      $product ="SELECT namaTim, kategori, institusi, nilai FROM pendaftaran WHERE kategori = 'product' order by nilai desc";
      $resultpr = mysqli_query($koneksi, $product);
    ?>
      <center>
        <h1><b>LEADERBOARD</b></h1>
        <h4><b>Lihat Tim Teratas</b></h4><br>
      </center>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <table class="table table-striped-columns">
              <thead>
                <tr>
                  <th colspan="4" class="table-success">POSTER</th>
                </tr>
                <tr class="table-success">
                  <th>NO</th>
                  <th>Nama Tim</th>
                  <th>Institusi</th>
                  <th>Skor</th>
                </tr>
                <?php
                $num = 1;
                    while($row = mysqli_fetch_array($resultp)){
                ?>
                <tr>
                  <td><?=$num; ?></td>
                  <td><?=$row['namaTim']; ?></td>
                  <td><?=$row['institusi']; ?></td>
                  <td><?=$row['nilai']; ?></td>
                </tr>
                <?php $num++;}
                ?>
              </thead>
            </table>
          </div>
        </div>
        <div class="carousel-item">
        <div class="container">
            <table class="table table-striped-columns">
              <thead>
                <tr>
                  <th colspan="4" class="table-danger">PRODUCT DESIGN</th>
                </tr>
                <tr class="table-danger">
                  <th>NO</th>
                  <th>Nama Tim</th>
                  <th>Institusi</th>
                  <th>Skor</th>
                </tr>
                <?php
                $num = 1;
                    while($row = mysqli_fetch_array($resultu)){
                ?>
                <tr>
                  <td><?=$num; ?></td>
                  <td><?=$row['namaTim']; ?></td>
                  <td><?=$row['institusi']; ?></td>
                  <td><?=$row['nilai']; ?></td>
                </tr>
                <?php $num++;}
                ?>
              </thead>
            </table>
          </div>
        </div>
        <div class="carousel-item">
        <div class="container">
            <table class="table table-striped-columns">
              <thead>
                <tr>
                  <th colspan="4" class="table-primary">USER INTERFACE AND USER EXPERIENT</th>
                </tr>
                <tr class="table-primary">
                  <th>NO</th>
                  <th>Nama Tim</th>
                  <th>Institusi</th>
                  <th>Skor</th>
                </tr>
                <?php
                $num = 1;
                    while($row = mysqli_fetch_array($resultpr)){
                ?>
                <tr>
                  <td><?=$num; ?></td>
                  <td><?=$row['namaTim']; ?></td>
                  <td><?=$row['institusi']; ?></td>
                  <td><?=$row['nilai']; ?></td>
                </tr>
                <?php $num++;}
                ?>
              </thead>
            </table>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div><br><br>
    </section>
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