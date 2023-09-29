<?php
class Tablet {
    public $merk;
    public $camera;
    public $memory;

    public function infoTablet() {
        return "Merk: $this->merk, Kamera: $this->camera MP, Memory: $this->memory GB";
    }
}

class Handphone extends Tablet {
    public $handphone_baru;

    public function beliHandphone() {
        return "Anda telah membeli handphone $this->merk dengan $this->camera MP kamera dan $this->memory GB memory.";
    }
}

$tablet = new Tablet();
$tablet->merk = "Samsung";
$tablet->camera = 12;
$tablet->memory = 64;

$handphone = new Handphone();
$handphone->merk = "Apple";
$handphone->camera = 16;
$handphone->memory = 128;
$handphone->handphone_baru = "iPhone 13";

echo $tablet->infoTablet() . "\n";
echo $handphone->beliHandphone() . "\n";

?>