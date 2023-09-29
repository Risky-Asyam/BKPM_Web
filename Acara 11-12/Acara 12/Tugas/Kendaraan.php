<?php
    interface Kendaraan{
        public function start();
        public function stop();
        public function klakson();
    }
    abstract class KendaraanBermotor implements Kendaraan{
        protected $jenis;

        public function __construct($jenis){
            $this->jenis = $jenis;
        }
        public function start(){
            echo "{$this->jenis} sedang dinyalakan <br>";
        }
        public function stop(){
            echo "{$this->jenis} sedang dimatikan <br>";
        }

        abstract public function klakson();
    }

    class Mobil extends KendaraanBermotor{
        public function klakson(){
            echo "{$this->jenis} sedang menekan klakson mobil <br>";
        }
    }
    class SepedaMotor extends KendaraanBermotor{
        public function klakson(){
            echo "{$this->jenis} sedang menekan klakson sepeda motor <br>";
        }
    }
    class Sepeda implements Kendaraan{
        public function start(){
            echo "Sepeda sedang digerakkan <br>";
        }
        public function stop(){
            echo "Sepeda sedang dihentikan <br>";
        }
        public  function klakson(){
            echo "Sepeda tidak memiliki klakson <br>";
        }
    }

    function operasikanKendaraan(Kendaraan $kendaraan){
        $kendaraan->start();
        $kendaraan->klakson();
        $kendaraan->stop();
    }
    
    $mobil = new Mobil("Mobil Toyota");
    $sepedaMotor = new sepedaMotor("Honda CBR");
    $sepeda = new Sepeda();

    operasikanKendaraan($mobil);
    operasikanKendaraan($sepedaMotor);
    operasikanKendaraan($sepeda);
    ?>