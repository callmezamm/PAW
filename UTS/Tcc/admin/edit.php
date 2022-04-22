<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard Template · Bootstrap v5.1</title>
    <link rel="stylesheet" href="../css/dashboard.css">
        <!-- my css -->
        <link rel="stylesheet" href="../css/style.css">
        <!-- css bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    <link rel="shortcut icon" href="../img/1x/logo.png">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Admin TCC</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboard.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="uiuxDash.php">
              <span data-feather="file"></span>
              UI/UX
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="posterDash.php">
              <span data-feather="shopping-cart"></span>
              Poster
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gameDash.php">
              <span data-feather="users"></span>
              Game
            </a>
          </li>
        </ul>
    </nav>
    <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $sql="SELECT kodePend, namaTim, institusi, namaKet, karya, nilai FROM pendaftaran WHERE kodePend=$id";
        $hasil = mysqli_query($koneksi, $sql);
        if(!$hasil){
            echo "salah";
        }
    ?>
    <?php
      ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Masukkan Nilai</h1>
      </div>
      <form action="update.php" method="post">
        <div class="container">
          <?php
                while ($row = mysqli_fetch_array($hasil))
                {
            ?>
            <div class="row">
                <div class="col">
                    <img src="../imguser/<?php echo $row['karya']; ?>" style="width:300px;">
                    <h1><?=$row['namaTim']; ?></h1>
                    <p>Nama Tim :.<?=$row['namaTim']; ?></p>
                    <p>Institusi :.<?=$row['institusi']; ?></p>
                    <p>Nama Ketua Kelompok:.<?=$row['namaKet']; ?></p>
                </div>
                <div class="col">
                    <input type="hidden" name="kodePend" value="<?php echo $row['kodePend'];?>">
                    <label class="form-label">Nilai</label>
                    <input type="text" name="nilai" class="form-control" value="<?php echo $row['nilai'];?>">
                    <button type="submit" class="btn btn-primary" id="tombol">Submit</button>
                </div>
            </div>
        </div>
            <?php } 
            ?>
      </form>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>