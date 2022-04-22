<?php
  session_start();

  if(!isset($_SESSION["userName"])){
    header('location:login.php');
    exit;
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard Poster</title>
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
      <a class="nav-link px-3" href="logOut.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="dashboard.php">
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
            <a class="nav-link active" href="posterDash.php">
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

        $sql="SELECT kodePend, kategori, namaTim, institusi, namaKet, email, hp, namaAgt1, namaAgt2, karya, deskirpsi, nilai FROM pendaftaran WHERE kategori = 'poster'";
        $hasil = mysqli_query($koneksi, $sql);
      ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <h3>Selamat Datang <?= $_SESSION['userName']?></h3>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered table-sm">
          <thead class="table-primary">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Kategori</th>
              <th scope="col">Nama Tim</th>
              <th scope="col">Institusi</th>
              <th scope="col">Nama Ketua</th>
              <th scope="col">Email</th>
              <th scope="col">Nomor Hp</th>
              <th scope="col">Nama Anggota 1</th>
              <th scope="col">Nama Anggota 2</th>
              <th scope="col">Karya</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Nilai</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <?php
              while($row = mysqli_fetch_array($hasil)){
          ?>
          <tbody>
              <td><?=$row['kodePend']; ?></td>
              <td><?=$row['kategori']; ?></td>
              <td><?=$row['namaTim']; ?></td>
              <td><?=$row['institusi']; ?></td>
              <td><?=$row['namaKet']; ?></td>
              <td><?=$row['email']; ?></td>
              <td><?=$row['hp']; ?></td>
              <td><?=$row['namaAgt1']; ?></td>
              <td><?=$row['namaAgt2']; ?></td>
              <td><img src="../imguser/<?php echo $row['karya']; ?>" style="width:300px;"></td>
              <td><?=$row['deskirpsi']; ?></td>
              <td><?=$row['nilai']; ?></td>
              <td>
                <a href="edit.php?id=<?=$row['kodePend']?>"><button type="button" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>NILAI</button></a>
                <a href="delete.php?id=<?=$row['kodePend']?>"><button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                        </svg> DELETE</button></a>
              </td>
          </tbody>
          <?php }
          ?>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
