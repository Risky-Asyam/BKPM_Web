<?php
    function tglSekarang(){
        $sekarang = getdate();
    $tanggal = $sekarang["mday"];
    $bulan = $sekarang["mon"];
    $tahun = $sekarang["year"];
    
    echo"Tanggal : $tanggal-$bulan-$tahun";
    }
    tglSekarang();
?>