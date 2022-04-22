<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Buat Akun Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link rel="stylesheet" href="../css/signin.css">
    <!-- my css -->
    <link rel="stylesheet" href="../css/style.css">
     <!-- css bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

     <link rel="shortcut icon" href="../img/1x/logo.png">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
        <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <?php
      include "koneksi.php";

      if (isset($_POST['submit'])) {
        $userName = $_POST['userName'];
        $noHp = $_POST['noHp'];
        $password = $_POST['password'];
        $sql = "INSERT INTO admin VALUES ('null','$userName', '$password', '$noHp')";
        $hasil = mysqli_query($koneksi, $sql);

        if(!$hasil){
          echo "<script>swal.fire('Gagal', 'Gagal Membuat Akun', 'error')</script>";
        }else{
          echo "<script>swal.fire('Yuhuuu', 'Berhasil Membuat Akun', 'success')</script>";
        }
      }
    ?>
    
<main class="form-signin">
  <form method="POST">
    <h1 class="h3 mb-3 fw-normal"><b>Buat Akun</b></h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="userName">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="floatingPassword" placeholder="Nomor Telephone" name="noHp">
      <label for="floatingPassword">Nomor Telephone</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" id="tombol" type="submit" name="submit">Masuk</button>
    <p class="buatAkun">Sudah punya akun? <a href="login.php">Login</a></p>
  </form>
</main>


    
  </body>
</html>
