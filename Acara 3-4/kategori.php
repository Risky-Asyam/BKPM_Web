<?php
$jenis_paket = 'umroh';

if($jenis_paket === 'umroh'){
    echo "tampilkan paket umroh";
}
elseif($jenis_paket === 'haji'){
    echo "tampilkan paket haji";
}
elseif($jenis_paket === 'wisata_halal'){
    echo "tampilkan paket wisata halal";
}
else {
    echo "kategori tidak valid";
}
?>