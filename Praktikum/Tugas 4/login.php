<?php
    session_start();
    $userName = $_POST["userName"];
    $password = $_POST["password"];
    $remember = $_POST["remember"];
    if (!($userName == "nizam" && $password == "nizam123" && $remember == true)) {
     echo "<script>
     alert('Gagal Login');
     document.location.href='index.php';
     </script>";
    } else {
     if (isset($_POST["remember"])) {
     $_SESSION["remember"] = true;
     }
     $_SESSION["login"] = true;
     echo "<script>
     alert('Berhasil Login');
     document.location.href='data.php';
     </script>";
    }
?>