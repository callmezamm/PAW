<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MOdul 2 PHP Fungsi</h1>
    <p>Nama/NRP : Muhamad Nizamudin/200411100193</p>
    <?php
        function jumlah($x, $y){
            echo "Jumlah X + Y =", $x + $y, "<br>";
        }
        function kali($x, $y){
            echo "Jumlah X * Y =", $x * $y, "<br>";
        }
        function bagi($x, $y){
            echo "Jumlah X / Y =", $x / $y, "<br>";
        }

        echo "<h3>Pemangggilan fungsi jumlah</h3>";
        jumlah(9,8); 
        jumlah(10,8);
        jumlah(12,9);
        echo "<h3>Pemangggilan fungsi kali</h3>";
        kali(12,8);
        kali(1,17);
        kali(8,6);
        echo "<h3>Pemangggilan fungsi bagi</h3>";
        bagi(100,2);
        bagi(50,1);
        bagi(12,3);
    ?>
</body>
</html>