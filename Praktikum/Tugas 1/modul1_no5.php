<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MODUL 1 PHP Kondisional</h1>
    <p>Nama/NIM : Muhamad Nizamudin/200411100193</p>
    <?php
        $hari = date('l');
        $tanggal = date('d');
        $tahun = date('Y');
        if($hari = 'Thursday'){
            $hari_ini = 'Kamis';
        }elseif($hari = 'Friday'){
            $hari_ini = 'Jumat';
        }elseif($hari = 'Saturday'){
            $hari_ini = 'Sabtu';
        }elseif($hari = 'Sunday'){
            $hari_ini = 'Minggu';
        }elseif($hari = 'Monday'){
            $hari_ini = 'Senin';
        }elseif($hari = 'Tuesday'){
            $hari_ini = 'Selasa';
        }else{
            $hari_ini = 'Rabu';
        }

        $Bulan = date('n');
        if($Bulan == '1'){
            $bulan_ini = 'Januari';
        }elseif($Bulan == '2'){
            $bulan_ini = 'Februari';
        }elseif($Bulan == '3' ){
            $bulan_ini = 'Maret';
        }elseif($Bulan == '4'){
            $bulan_ini = 'April';
        }elseif($Bulan == '5'){
            $bulan_ini = 'Mei';
        }elseif($Bulan == '6'){
            $bulan_ini = 'Juni';
        }elseif($Bulan == '7'){
            $bulan_ini = 'Juli';
        }elseif($Bulan == '8'){
            $bulan_ini = 'Agustus';
        }elseif($Bulan == '9'){
            $bulan_ini = 'September';
        }elseif($Bulan == '10'){
            $bulan_ini = 'Oktober';
        }elseif($Bulan == '11'){
            $bulan_ini = 'November';
        }elseif($Bulan == '12'){
            $bulan_ini = 'Desember';
        }else{
            $bulan_ini = 'tidak valid';
        }
        
        echo "<h3>Sekarang Hari $hari_ini : Tanggal $tanggal $bulan_ini $tahun </h3>";
    ?>
</body>
</html>