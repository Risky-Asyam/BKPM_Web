<?php
abstract class BangunDatar {
    abstract public function hitungLuas();
}

class Segitiga extends BangunDatar {
    private $alas;
    private $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function hitungLuas() {
        return 0.5 * $this->alas * $this->tinggi;
    }
}

class PersegiPanjang extends BangunDatar {
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }
}

function cetakLuas(BangunDatar $bangunDatar) {
    echo "Luasnya adalah: " . $bangunDatar->hitungLuas() . " satuan persegi.";
}


$segitiga = new Segitiga(6, 8);
$persegi = new PersegiPanjang(5, 10);

cetakLuas($segitiga); 
echo"</br>";
cetakLuas($persegi);  
?>