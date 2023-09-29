<?php
    class mobiLengkap{
        public function nontonTV(){
            echo "TV dihidupkan, TV mencari channel, TV menampilkan gambar.\n";
        }
    }
    class MobilBMW extends mobiLengkap{
        
    }
    class MobilBMWberaksi extends MobilBMW{
        public function hidupkanMobil(){
            echo "Mobil BMW dihidupkan.\n";
        }
        public function matikanMobil(){
            echo "Mobil BMW dimatikan.\n";
        }
        public function ubahGigi($gigi){
            echo "Gigi mobil diubah menjadi $gigi.\n";
        }
    }

    $bmwBeraksi = new MobilBMWberaksi();
    echo "Mobil BMW Beraksi : <br>";
    $bmwBeraksi->hidupkanMobil();
    echo "<br>";
    $bmwBeraksi->nontonTV();
    echo "<br>";
    $bmwBeraksi->ubahGigi("3");
    echo "<br>";
    $bmwBeraksi->matikanMobil();
?>