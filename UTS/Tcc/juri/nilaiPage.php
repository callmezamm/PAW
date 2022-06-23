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
        <div class="container">
            <?php
                include 'koneksi.php';

                $id = $_GET['id'];
                $sql = "SELECT kodePend, kategori, namaTim, institusi, namaKet, email, hp, namaAgt1, namaAgt2, karya, deskirpsi, nilai FROM pendaftaran where kodePend = '$id'";
                $hasil = mysqli_query($koneksi, $sql);
            ?>
            <form action="updateNilai.php" method="post">
              <?php
                  while ($row = mysqli_fetch_array($hasil))
                  {
              ?>
              <center>
                <br><br><br><img src="../imguser/<?php echo $row['karya']; ?>" style="width:300px;">
                <p><?=$row['deskirpsi']; ?></p>
              </center>
                  <input type="hidden" name="kodePend" value="<?php echo $row['kodePend']; ?>"
                  <label class="form-label">Nilai</label>
                  <input type="number" name="nilai" class="form-control"><br>
                  <button type="submit" class="btn btn-primary" id="tombol">Tambah Nilai</button>
                  <?php }
                  ?>
            </form>
        </div>
    </section><br><br><br>
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