<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MODUL 1 PHP Variable Local dan Global</h1>
    <p>Nama/NIM : Muhamad Nizamudin/200411100193</p>
    <?php
        $fname = 'Muhamad';
        $lname = 'Nizam';
        function perkenalan(){
            global $fname,$lname;
            $lahir = 2002;
            $sekarang = 2022;
            ECHO "Nama saya $fname $lname umur saya sekarang " ,$sekarang-$lahir, " tahun <br>";
        }
        perkenalan();
        echo "kalian bisa panggil saya $lname";
    ?>
    
</body>
</html>