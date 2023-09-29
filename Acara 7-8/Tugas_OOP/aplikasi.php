<?php
    include 'kalkulator.php';

    $angka1 = 15;
    $angka2 = 5;

    $kalkulator = new kalkulator($angka1, $angka2);

    echo "Angka 1 : " . $angka1 . "<br>" . "Angka 2 : " . $angka2 . "<br>";

    $hasilTambah = $kalkulator -> tambah();
    echo "Hasil pertambahan : " . $hasilTambah;
    echo "<br>";
    $hasilKurang = $kalkulator -> kurang();
    echo "Hasil pengurangan : " . $hasilKurang;
    echo "<br>";
    $hasilKali = $kalkulator -> kali();
    echo "Hasil perkalian : " . $hasilKali;
        echo "<br>";
    $hasilBagi = $kalkulator -> bagi();
    echo "Hasil pembagian : " . $hasilBagi;
?>