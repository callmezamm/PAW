<?php
  session_start();

  include 'koneksi.php';
 

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Login Admin</title>
    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link rel="stylesheet" href="css/signinPeserta.css">
    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/1x/logo.png">
    
    
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Sweet alert -->
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <style>
      
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      </style>


<!-- Custom styles for this template -->
<link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">
  <?php
  if (isset($_POST['submit'])) {
      $userName = $_POST['userName'];
      $password = md5($_POST['password']);
      
      $sql = "SELECT * FROM tbl_user WHERE userName='$userName' AND password='$password'";
      $hasil = mysqli_query($koneksi, $sql);
      $cek = mysqli_num_rows($hasil);
      if ($cek > 0) {
          $row = mysqli_fetch_assoc($hasil);
          $_SESSION['userName'] = $row['userName'];
          $_SESSION['level'] = $row['level'];
          $_SESSION ['namaLengkap'] = $row['namaLengkap'];
          header("Location: index.php");
      } else {
          echo "<script>swal.fire('Gagal', 'Username atau password Anda salah. Silahkan coba lagi!', 'error')</script>";
      }
  }
  ?>
  
<main class="form-signin">
  <form method="POST">
    <h1 class="h3 mb-3 fw-normal"><b>Login</b></h1>

    <div class="form-floating">
      <input type="text" class="form-control" name="userName" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput"  required>Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword"  required>Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" id="tombol" name="submit" type="submit">Masuk</button>
    <p class="buatAkun">Belum punya akun? <a href="buatakunPeserta.php">Buat Akun</a></p>
  </form>
</main>


    
  </body>
</html>
