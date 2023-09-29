<?php
$harga_paket = 30000000;
$jangka_waktu_cicilan = '12';
$biaya_cicilan = 0;

// Harga paket umroh dan pilihan jangka waktu cicilan
switch ($jangka_waktu_cicilan) {
    case '6':
        $biaya_cicilan = $harga_paket / 6;
        echo "$biaya_cicilan";
        break;
    case '12':
        $biaya_cicilan = $harga_paket / 12;
        echo "$biaya_cicilan";
        break;
    case '24':
        $biaya_cicilan = $harga_paket / 24;
        echo "$biaya_cicilan";
        break;
    default:
        echo "Pilih jangka waktu cicilan yang valid.";
}
?>