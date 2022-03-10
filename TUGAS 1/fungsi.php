<?php
    function hitungUmur($tahunLahir, $tahunSekarang){
        $umur = $tahunSekarang - $tahunLahir;
        return $umur;
    }

    echo "umur saya sekarang ". hitungUmur(2002,2022). " tahun ";
    echo " sedangkan umur doni sekarang ". hitungUmur(2001,2022). " tahun ";
    echo " dan umur rani sekarang ". hitungUmur(2003,2022). " tahun ";
?>