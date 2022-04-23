<?php
    include 'koneksi.php';

    $id=$_GET['id'];
    
    $sql="DELETE FROM data_pengguna WHERE id_pengguna = $id";
    $hasil = mysqli_query($koneksi, $sql);
    echo"<script type='text/javascript'>alert('Berhasil Menghapus Data');document.location.href='index.php'</script>";
    
?>  