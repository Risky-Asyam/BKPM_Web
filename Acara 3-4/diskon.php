<?php
    $jumlah_jamaah = "5";
    $harga_awal = 30000000;
    
    $harga_total = $jumlah_jamaah * $harga_awal;

    if ($jumlah_jamaah >=4) {
        $diskon = 0.10 * $harga_total;
        $harga_total -= $diskon;
        echo "Anda memenuhi syarat diskon 10%";
        echo "Total harga setelah diskon : $harga_total.";
    }else{
        echo "tidak dapet diskon";
    }
?>