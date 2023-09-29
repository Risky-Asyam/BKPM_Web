<?php
//Matriks A
$matrixA = array(
    array(1, 1, 1),
    array(2, 2, 2),
    array(3, 3, 3)
);

//Matiks B
$matrixB = array(
    array(3, 3, 3),
    array(2, 2, 2),
    array(1, 1, 1)
);

//Inisialisasi matriks hasil
$hasil = array(
    array(0, 0, 0),
    array(0, 0, 0),
    array(0, 0, 0)
);

//Penjumlahan Matriks A dan B
for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 3; $j++){
        $hasil[$i][$j] = $matrixA[$i][$j] + $matrixB[$i][$j];
    }
}

//Menampilkan hasil penjumlah mereka
echo"Hasil Penjumlahan Matriks A dan B : <br>";
for ($i = 0; $i < 3; $i++){
    for ($j = 0; $j < 3; $j++){
        echo $hasil [$i][$j] . " ";
    }
    echo "<br>";
}
?>