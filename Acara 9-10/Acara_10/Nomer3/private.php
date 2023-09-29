<?php
class Tablet {
    private $merk;
    private $camera;
    private $memory;

    public function setTabletInfo($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function getCamera() {
        return $this->camera;
    }

    public function getMemory() {
        return $this->memory;
    }
}

class Handphone extends Tablet {
    public $handphone_baru;

    public function beliHandphone() {
        return "Anda telah membeli handphone " . $this->getMerk() . " dengan " . $this->getCamera() . " MP kamera dan " . $this->getMemory() . " GB memory.";
    }
}

$handphone = new Handphone();
$handphone->setTabletInfo("Apple", 16, 128);
$handphone->handphone_baru = "iPhone 13";

echo $handphone->beliHandphone() . "\n";
?>