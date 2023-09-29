<?php
    class ItemProduk{
        protected $ukuran;
        protected $warna;
        protected $nama;

        public function setUkuran($ukuran){
            $this->ukuran = $ukuran;
        }
        public function getUkuran(){
            return $this->ukuran;
        }
        public function setWarna($warna){
            $this->warna = $warna;
        }
        public function getWarna(){
            return $this->warna;
        }
        public function setNama($nama){
            $this->nama = $nama;
        }
        public function getNama(){
            return $this->nama;
        }
    }
    class Topi extends ItemProduk{
        private $model;
        public function setModel($model){
            $this->model = $model;
        }
        public function getModel(){
            return $this->model;
        }
    }
    class Celana extends ItemProduk{
        private $tipe;
        private $model;

        public function setTipe($tipe){
            $this->tipe = $tipe;
        }
        public function getTipe(){
            return $this->tipe;
        }
        public function setModel($model){
            $this->model = $model;
        }
        public function getModel(){
            return $this->model;
        }
    }
    class Baju extends ItemProduk{
        private $tipe;
        
        public function setTipe($tipe){
            $this->tipe = $tipe;
        }
        public function getTipe(){
            return $this->tipe;
        }
    }

    $topi = new Topi();
    $topi -> setModel("Baseball Cap");
    $topi -> setUkuran("L");
    $topi -> setWarna("Merah");
    $topi -> setNama("Topi Baseball Keren");

    $celana = new Celana();
    $celana -> setTipe("Jeans");
    $celana -> setModel("Slim Fit");
    $celana -> setUkuran("M");
    $celana -> setWarna("Biru");
    $celana -> setNama("Celana Trendy");

    $baju = new Baju();
    $baju -> setTipe("Kaos");
    $baju -> setUkuran("S");
    $baju -> setWarna("Putih");
    $baju -> setNama("Baju Santai");

    echo "Topi: " . $topi->getNama(). ", Model: " . $topi->getModel(). 
    ",Ukuran: ". $topi->getUkuran(). ", Warna: " . $topi->getWarna(). "<br>";
    echo "Celana: " . $celana->getNama(). ", Tipe: " . $celana->getTipe(). 
    ", Model: ". $celana->getModel(). ",Ukuran: ". $celana->getUkuran(). 
    ", Warna: ". $celana->getWarna(). "<br>";
    echo "Baju: ". $baju->getNama(). ", Tipe: ".$baju->getTipe(). 
    ", Ukuran: ".$baju->getUkuran(). "Warna: " .$baju->getWarna()."<br>";
?>