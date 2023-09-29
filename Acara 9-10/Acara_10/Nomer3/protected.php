<?php
class Tablet {
    protected $merk;
    protected $camera;
    protected $memory;

    public function setTabletInfo($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

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

$handphone = new Handphone();
$handphone->setTabletInfo("Apple", 16, 128);
$handphone->handphone_baru = "iPhone 13";

echo $handphone->infoTablet() . "\n";
echo $handphone->beliHandphone() . "\n";

?>